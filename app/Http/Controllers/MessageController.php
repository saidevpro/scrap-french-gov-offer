<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\MessageResource;
use App\Models\Company;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $isOnlyNew = ($request->has('only_new') && $request->get('only_new') === 'true');

        $q = (new Message())->newQuery()->orderBy('id', 'desc');

        if ($request->has('user_id')) {
            $from_id = (int) $request->user_id;

            $q->where(function ($q) use($from_id) {
                $q->where('user_from', $from_id);
                $q->where('user_to', Auth::id());
            })->orWhere(function ($q) use($from_id) {
                $q->where('user_from', Auth::id());
                $q->where('user_to', $from_id);
            });
        } else if (!$isOnlyNew) {
            $q->where(function ($q) {
                $q->where('user_from', Auth::id())
                ->orWhere('user_to', Auth::id());
            });
        }

        if ($isOnlyNew) {
            $q->where('user_to', Auth::id())
                ->where('seen', 0);
        }

        $messages = $q->paginate(5);
        return MessageResource::collection($messages->reverse());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|string',
            'to' => 'required|integer'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $data = $validator->validated();

        $message = Message::create([
            'content' => $data['content'],
            'user_from' => Auth::id(),
            'user_to' => $data['to']
        ]);


        return response()->json([
            'message' => 'Message successfully registered',
            'message_entity' => new MessageResource($message)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::find($id);
        if (!$message || !Gate::allows('manage-message', $message)) {
            return response()->json(['message'=>'Not found'], 404);
        }
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
        $message = Message::find($id);
        if (!$message || !Gate::allows('manage-message-update', $message)) {
            return response()->json(['message'=>'Not found'], 404);
        }

        Message::where('id', '<=', $id)
            ->where('user_to', Auth::id())
            ->where('seen', false)
            ->update([
                'seen' => true,
                'seen_date' => date('Y-m-d H:i:s')
            ]);

        return response()->json([
            'message' => 'Message successfully updated',
            'message_entity' => new MessageResource($message)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id);
        if (!$message || !Gate::allows('manage-message', $message)) {
            return response()->json(['message'=>'Not found'], 404);
        }

        $message->destroy();
        return response()->json([
            'message' => 'Message successfully deleted',
            'message_entity' => new MessageResource($message)
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function getInterlocutors()
    {
        $users = Message::select(DB::raw('distinct user_from, user_to, created_at, id'))
                ->where('user_from', Auth::id())
                ->orWhere('user_to', Auth::id())
                ->orderBy('id', 'desc')
                ->get()
                ->map(function ($m) {
                    return $m->user_from == Auth::id() ? $m->user_to : $m->user_from;
                });

        $users = array_unique($users->toArray());

        $companies = collect();
        foreach($users as $userId) {
            if (!$userId) {
                continue;
            }

            $company = (new Company())->newQuery()
                    ->select('companies.*')
                    ->join('users','users.company_id','=', 'companies.id')
                    ->where('users.id', $userId)
                    ->first();

            $companies->push($company);
        }


        return CompanyResource::collection($companies);
    }
}
