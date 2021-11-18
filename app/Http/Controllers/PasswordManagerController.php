<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCredentialsRequest as CreateRequest;
use App\Http\Resources\CredentialResource;
use App\Http\Resources\CredentialWithPasswordResource;
use App\Models\Credential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PasswordManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credentials = Credential::where('user_id', Auth::id())->get();
        return CredentialResource::collection($credentials);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $masterkey = $request->get('masterkey');
        if (!Hash::check($masterkey, Auth::user()->password)) {
            return response()->json([
                'message' => "Invalid credentials"
            ], 403);
        }

        $credential_password = $request->get('password');
        list($salt, $iter_count, $enc_key) = array_values($this->generatePBKDF2Key($masterkey));
        list($cipher, $key, $iv, $aes_token) = array_values($this->generateAESKey($credential_password, $enc_key));

        $credential = Credential::create([
            'domain' => $request->get('domain'),
            'username_email' => $request->get('uname_email'),
            'password' => $aes_token,
            'iv' => $iv,
            'salt' => $salt,
            'iter_count' => $iter_count,
            'user_id' => Auth::id(),
        ]);

        $credential->password = '*************';
        return response()->json([
            'credential' => new CredentialResource($credential)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $credential = Credential::find($id);
        if (!$credential || !Gate::allows('manage-credential', $credential)) {
            return response()->json([
                'message' => "Not found"
            ], 404);
        }

        if (!Hash::check($request->masterkey, Auth::user()->password) || !Gate::allows('manage-credential', $credential)) {
            return response()->json([
                'message' => "Invalid credentials"
            ], 403);
        }

        $pb2 = $this->generatePBKDF2Key($request->masterkey, $credential->salt);
        $password = $this->decryptAESToken($credential->password, $pb2['key'], $credential->iv);
        $credential->password = $password;

        return response()->json([
            'credential' => new CredentialWithPasswordResource($credential)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $credential = Credential::find($id);
        if (!Gate::allows('manage-credential', $credential)) {
            return response()->json([
                'message' => "Not found"
            ], 404);
        }

        $credential->delete();
        return response()->json([
            'message' => "The credentials was removed successfully"
        ]);
    }

    /**
     * @param string $password
     * @return array
     */
    public function generatePBKDF2Key(string $password, string $salt = null)
    {
        $iter_count = config('encryption.pbkdf2_item_count');
        $salt = $salt ? $salt : Str::random(30);

        return [
            'salt' => $salt,
            'iter_count' => $iter_count,
            'key' => hash_pbkdf2("sha256", $password,$salt, $iter_count, 100)
        ];
    }
    /**
     * @param string $password
     * @param string $key
     * @return array
     */
    public function generateAESKey(string $token, string $key)
    {
        $cipher = config('encryption.aes_algo');
        $iv = Str::random(16);
        $aes_token = openssl_encrypt($token, $cipher, $key, 0, $iv);
        return compact('cipher', 'key', 'iv', 'aes_token');
    }
    /**
     * @param string $token_enc
     * @param string $key
     * @param string $iv
     * @return string
     */
    public function decryptAESToken(string $token_enc , string $key, string $iv)
    {
        $cipher = config('encryption.aes_algo');
        return openssl_decrypt($token_enc, $cipher, $key, 0, $iv);
    }
}
