<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facadesuse\Input;

class PartnerController extends Controller
{
    public function read() {
        $partner = Partner::all();
        return $partner;
    }

    public function insert() {
        request()->validate([
            'name' => ['required', 'string'],
            'picture' => ['required', 'image']
        ]);

        $check = Partner::where('name', request('name'))->first();
        if ($check)
            abort(400, 'Sorry, cannot insert the same name as the existing one');

        $pictureName = request('picture')->getClientOriginalName();

        $partnerData = [
            'name' => request('name'),
            'picture' => $pictureName
        ];
        $partner = Partner::create($partnerData);

        $newPath = public_path() . '/storage/img/partners/' . $partner->name;

        request('picture')->move($newPath, $pictureName);

        return $partner;
    }

    public function update($id, Request $request) {

        $partner = Partner::where('id', $id)->first();
        $oldPicturePath = public_path() . '/storage/img/partners/' . $partner->name;
        $oldFile = $oldPicturePath .'/'. $partner->picture;

        if($request->input('detail') == 'detail'){
            request()->validate([
                'name' => [
                    'required',
                    'string',
                    Rule::unique('partners')->ignore($id)
                ],
            ]);
            $currentpic = $partner->picture;
            $partnerData = [
                'name' => $request->name,
                'picture' => $currentpic
            ];
            $newPicturePath = public_path() . '/storage/img/partners/' . $request->name;
            // $partner->update($partnerData);
            $newFile = $oldPicturePath .'/'. $partner->picture;
            // Storage::put($oldFile, $newFile);
            $contents = Storage::get($oldFile);
            Storage::put($newPicturePath, $contents);
        }
        if ($request->submit == 'all'){

            request()->validate([
                'name' => [
                    'required',
                    'string',
                    Rule::unique('partners')->ignore($id)
                ],
                'picture' => ['required', 'image']
            ]);

            //Delete directory and picture
            array_map('unlink', glob("$oldPicturePath/*.*"));
            rmdir($oldPicturePath);

            $pictureName = $request->file('picture')->getClientOriginalName();

            $partnerData = [
                'name' => $request->name,
                'picture' => $pictureName
            ];

            $newPicturePath = public_path() . '/storage/img/partners/' . $partner->name;
            request('picture')->move($newPicturePath, $pictureName);
        }

        $partner->update($partnerData);

        $response = [
            "partner" => [
                'id' => $partner->id,
                'name' => $partner->name,
                'picture' => $partner->picture
            ]
        ];

        return $response;
    }


    // public function update($id, Request $request) {
    //     request()->validate([
    //         'name' => [
    //             'required',
    //             'string',
    //             Rule::unique('partners')->ignore($id)
    //         ],
    //         'picture' => ['required', 'image']
    //     ]);

    //     $partner = Partner::where('id', $id)->first();

    //     //Delete directory and picture
    //     $oldPicturePath = public_path() . '/storage/img/partners/' . $partner->name;
    //     array_map('unlink', glob("$oldPicturePath/*.*"));
    //     rmdir($oldPicturePath);

    //     $pictureName = $request->file('picture')->getClientOriginalName();

    //     $partnerData = [
    //         'name' => $request->name,
    //         'picture' => $pictureName
    //     ];

    //     $partner->update($partnerData);
    //     $newPicturePath = public_path() . '/storage/img/partners/' . $partner->name;

    //     request('picture')->move($newPicturePath, $pictureName);

    //     $response = [
    //         "partner" => [
    //             'id' => $partner->id,
    //             'name' => $partner->name,
    //             'picture' => $partner->picture
    //         ]
    //     ];

    //     return $response;
    // }

    public function delete($id) {
        $partner = Partner::where('id', $id);
        $partnerObject = $partner->first();

        //Delete directory and picture
        $picturePath = public_path() . '/storage/img/partners/' . $partnerObject->name;
        array_map('unlink', glob("$picturePath/*.*"));
        rmdir($picturePath);

        $deleteSponsor = $partner->delete();
        $msg = "success to delete";
        return [
            'response' => $msg
        ];
    }
}
