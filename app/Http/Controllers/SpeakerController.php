<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SpeakerController extends Controller
{
    public function read() {
        $speakers = Speaker::all();
        return $speakers;
    }

    public function readDetail($id) {
        $speaker = Speaker::where('id', $id)->first();
        return $speaker;
    }

    public function insert() {
        request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'ppi' => ['required', 'string'],
            'major' => ['required', 'string'],
            'school' => ['required', 'string'],
            'detail' => ['required', 'string'],
            'picture' => ['required', 'image'],
            'event_id' => ['required', 'integer']
        ]);

        $check = Speaker::where('email', request('email'))->first();
        if ($check)
            abort(400, 'Sorry, cannot insert the same speaker\'s email as the existing one');

        $pictureName = request('picture')->getClientOriginalName();

        $speakerData = [
            'name' => request('name'),
            'email' => request('email'),
            'ppi' => request('ppi'),
            'major' => request('major'),
            'school' => request('school'),
            'detail' => request('detail'),
            'event_id' => request('event_id'),
            'picture' => $pictureName
        ];

        $speaker = Speaker::create($speakerData);

        $newPath = public_path() . '/storage/img/speakers/' . $speaker->id;

        request('picture')->move($newPath, $pictureName);

        return $speaker;
    }

    public function update($id) {
        request()->validate([
            'name' => ['required', 'string'],
            'email' => [
                'required', 
                'string',
                Rule::unique('speakers')->ignore($id)
            ],
            'ppi' => ['required', 'string'],
            'major' => ['required', 'string'],
            'school' => ['required', 'string'],
            'detail' => ['required', 'string'],
            'picture' => ['required', 'image'],
            'event_id' => ['required', 'integer']
        ]);

        $speaker = Speaker::where('id', $id)->first();

        //Delete directory and picture
        $oldPicturePath = public_path() . '/storage/img/speakers/' . $speaker->id;
        array_map('unlink', glob("$oldPicturePath/*.*"));
        rmdir($oldPicturePath);

        $pictureName = request('picture')->getClientOriginalName();
    
        $speakerData = [
            'name' => request('name'),
            'email' => request('email'),
            'ppi' => request('ppi'),
            'major' => request('major'),
            'school' => request('school'),
            'detail' => request('detail'),
            'event_id' => request('event_id'),
            'picture' => $pictureName
        ];

        $speaker->update($speakerData);
        $newPicturePath = public_path() . '/storage/img/speakers/' . $speaker->id;
        
        request('picture')->move($newPicturePath, $pictureName);
        
        $response = [
            "speaker" => [
                'name' => $speaker->name,
                'ppi' => $speaker->ppi,
                'major' => $speaker->major,
                'school' => $speaker->school,
                'detail' => $speaker->detail,
                'event_id' => $speaker->event_id,
                'picture' => $speaker->picture
            ]
        ];

        return $response;
    }

    public function delete($id) {
        $speaker = Speaker::where('id', $id);
        $speakerObject = $speaker->first();

        //Delete directory and picture
        $picturePath = public_path() . '/storage/img/speakers/' . $speakerObject->id;
        array_map('unlink', glob("$picturePath/*.*"));
        rmdir($picturePath);

        $deleteSpeaker = $speaker->delete();
        $msg = "success to delete";
        return [
            'response' => $msg
        ];
    }
}
