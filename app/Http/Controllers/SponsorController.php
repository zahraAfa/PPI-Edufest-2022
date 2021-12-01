<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SponsorController extends Controller
{
    public function read() {
        $sponsors = Sponsor::all();
        return $sponsors;
    }

    public function updateImage($id)
    {
        request()->validate([
            'picture' => ['required', 'image']
        ]);

        // get partner data by id
        $sponsor = Sponsor::find($id);
        $oldPicturePath = public_path() . '/storage/img/sponsors/' . $sponsor->name;
        $oldFile = $oldPicturePath . '/' . $sponsor->picture;

        // replace old picture name
        $pictureName = request('picture')->getClientOriginalName();
        $sponsor->picture = $pictureName;
        $sponsor->save();

        // add new picture to storage
        request('picture')->move($oldPicturePath, $pictureName);

        return $sponsor;
    }

    public function insert() {
        request()->validate([
            'name' => ['required', 'string'],
            'detail' => ['required', 'string'],
            'picture' => ['required', 'image']
        ]);

        $check = Sponsor::where('name', request('name'))->first();
        if ($check)
            abort(400, 'Sorry, cannot insert the same name as the existing one');
        
        $pictureName = request('picture')->getClientOriginalName();
        
        $sponsorData = [
            'name' => request('name'),
            'detail' => request('detail'),
            'picture' => $pictureName,
        ];
        $sponsor = Sponsor::create($sponsorData);

        $newPath = public_path() . '/storage/img/sponsors/' . $sponsor->name;

        request('picture')->move($newPath, $pictureName);

        return $sponsor;
    }

    public function update($id, Request $request) {
        request()->validate([
            'name' => [
                'required', 
                'string',
                Rule::unique('sponsors')->ignore($id)
            ],
            'detail' => ['required', 'string'],
            'picture' => ['required', 'image']
        ]);

        $sponsor = Sponsor::where('id', $id)->first();

        //Delete directory and picture
        $oldPicturePath = public_path() . '/storage/img/sponsors/' . $sponsor->name;
        array_map('unlink', glob("$oldPicturePath/*.*"));
        rmdir($oldPicturePath);
        
        $pictureName = $request->file('picture')->getClientOriginalName();
        
        $sponsorData = [
            'name' => $request->name,
            'detail' => $request->detail,
            'picture' => $pictureName
        ];
        
        $sponsor->update($sponsorData);
        $newPicturePath = public_path() . '/storage/img/sponsors/' . $sponsor->name;

        request('picture')->move($newPicturePath, $pictureName);

        $response = [
            "sponsor" => [
                'id' => $sponsor->id,
                'name' => $sponsor->name,
                'detail' => $sponsor->detail,
                'picture' => $sponsor->picture
            ]
        ];

        return $response;
    }

    public function delete($id) {
        $sponsor = Sponsor::where('id', $id);
        $sponsorObject = $sponsor->first();

        //Delete directory and picture
        $picturePath = public_path() . '/storage/img/sponsors/' . $sponsorObject->name;
        array_map('unlink', glob("$picturePath/*.*"));
        rmdir($picturePath);

        $deleteSponsor = $sponsor->delete();
        $msg = "success to delete";
        return [
            'response' => $msg
        ];
    }
}
