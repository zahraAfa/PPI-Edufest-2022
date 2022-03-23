<?php

namespace App\Http\Controllers;

use App\Models\Omegaedu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OmegaController extends Controller
{
    public function read() {
        $omega = Omegaedu::all();
        return $omega;
    }

    public function updateImage($id) {
        request()->validate([
            'picture' => ['required', 'image']
        ]);

        // get sponsor data by id
        $omega = Omegaedu::find($id);
        $oldPicturePath = public_path() . '/storage/img/omegas/' . $omega->id;
        
        // replace old picture name
        array_map('unlink', glob("$oldPicturePath/*.*"));
        $pictureName = request('picture')->getClientOriginalName();
        $omega->picture = $pictureName;
        $omega->save();

        // add new picture to storage
        request('picture')->move($oldPicturePath, $pictureName);

        return $omega;
    }

    public function insert() {
        request()->validate([
            'campus_name' => ['required', 'string'],
            'link' => ['required', 'string'],
            'picture' => ['required', 'image']
        ]);

        $check = Omegaedu::where('campus_name', request('campus_name'))->first();
        if($check)
            abort(400, 'Sorry, cannot insert the same campus name as the existing one');

        $pictureName = request('picture')->getClientOriginalName();
    
        $omegaData = [
            'campus_name' => request('campus_name'),
            'link' => request('link'),
            'picture' => $pictureName,
        ];
        $omega = Omegaedu::create($omegaData);

        $newPath = public_path() . '/storage/img/omegas/' . $omega->id;

        request('picture')->move($newPath, $pictureName);

        return $omega;
    }

    public function update($id) {
        request()->validate([
            'campus_name' => [
                'required', 
                'string',
                Rule::unique('omegaedus')->ignore($id)
            ],
            'link' => ['required', 'string']
        ]);

        $omega = Omegaedu::where('id', $id)->first();

        $omegaData = [
            'campus_name' => request('campus_name'),
            'link' => request('link')
        ];

        $omega->update($omegaData);

        $response = [
            "omega" => [
                'id' => $omega->id,
                'campus_name' => $omega->campus_name,
                'link' => $omega->link
            ]
        ];

        return $response;
    }

    public function delete($id) {
        $omega = Omegaedu::where('id', $id);
        $omegaObject = $omega->first();

        //Delete directory and picture
        $picturePath = public_path() . '/storage/img/omegas/' . $omegaObject->id;
        array_map('unlink', glob("$picturePath/*.*"));
        rmdir($picturePath);

        $deleteSponsor = $omega->delete();
        $msg = "success to delete";
        return [
            'response' => $msg
        ];
    }
}
