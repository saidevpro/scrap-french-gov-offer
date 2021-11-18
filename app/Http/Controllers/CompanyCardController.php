<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyCardRequest;
use App\Http\Resources\CompanyCardResource;
use App\Models\CompanyCard;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CompanyCardController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CompanyCardResource(
            CompanyCard::where('company_id', $id)->first()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyCardRequest $request, $id)
    {
        $card = CompanyCard::where('company_id', $id)->first();
        if (!$card || !Gate::allows('manage-company-card', $card)) {
            return response()->json([
                'message' => "Company not found"
            ]);
        }

        if ($request->logo && $request->logo->path()) {
            $pathname = $request->logo->path();
            $base64 = base64_encode(file_get_contents($pathname));
            $size = filesize($pathname);
            $logodocument = new Document([
                'title' => 'Company card logo',
                'type' => $request->logo->extension(),
                'size' => $size,
                'base64' => $base64,
            ]);

            $logodocument->documentable()->associate($card);
            $logodocument->save();
        }

        if($request->galery && is_array($request->galery)) {
            $ids = [];
            foreach($request->galery as $file) {
                $pathname = $file->path();
                $base64 = base64_encode(file_get_contents($pathname));
                $size = filesize($pathname);
                $document = new Document([
                    'title' => 'Company galery image',
                    'type' => $file->extension(),
                    'size' => $size,
                    'base64' => $base64,
                ]);

                $document->documentable()->associate($card);
                $document->save();

                $ids[] = $document->id;
            }
        }

        $data = $request->all();
        $card->update([
            'galery' => isset($ids) ? implode(',', $ids) : $card->galery,
            'logo' => isset($logodocument) ? $logodocument->id : $card->logo,
            'category' => isset($data['category']) ? $data['category'] : $card->category,
            'subtitle' => isset($data['subtitle']) ? $data['subtitle'] : $card->subtitle,
            'name' => isset($data['name']) ? $data['name'] : $card->name,
            'website' => isset($data['website']) ? $data['website'] : $card->website,
            'first_name' => isset($data['first_name']) ? $data['first_name'] : $card->first_name,
            'last_name' => isset($data['last_name']) ? $data['last_name'] : $card->last_name,
            'email' => isset($data['email']) ? $data['email'] : $card->email,
            'phone' => isset($data['phone']) ? $data['phone'] : $card->phone,
            'function' => isset($data['function']) ? $data['function'] : $card->function,
            'service' => isset($data['service']) ? $data['service'] : $card->service,
            'job' => isset($data['job']) ? $data['job'] : $card->job,
            'proposition' => isset($data['proposition']) ? $data['proposition'] : $card->proposition,
            'intervention_regions' => isset($data['regions']) ? $data['regions'] : $card->intervention_regions,
            'ref_public_clients' => isset($data['ref_public_clients']) ? $data['ref_public_clients'] : $card->ref_public_clients,
            'ref_private_clients' => isset($data['ref_private_clients']) ? $data['ref_private_clients'] : $card->ref_private_clients,
            'certifications' => isset($data['certifications']) ? $data['certifications'] : $card->certifications,
        ]);

        return response()->json([
            'message' => "The company card is updated successfully",
            'card' => new CompanyCardResource($card)
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
        //
    }
}
