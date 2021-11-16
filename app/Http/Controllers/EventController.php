<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    public function read() {
        $events = Event::all();
        return $events;
    }

    public function insert() {
        request()->validate([
            'title' => ['required', 'string'],
            'form_link' => ['required', 'string'],
            'date' => ['required', 'date'],
            'detail' => ['required', 'string'],
            'region' => ['required', 'string'],
            'picture' => ['required', 'image']
        ]);

        $check = Event::where('title', request('title'))->first();
        if ($check)
            abort(400, 'Sorry, cannot insert the same title as the existing one');

        $pictureName = request('picture')->getClientOriginalName();

        $eventData = [
            'title' => request('title'),
            'form_link' => request('form_link'),
            'date' => request('date'),
            'detail' => request('detail'),
            'region' => request('region'),
            'picture' => $pictureName
        ];

        $event = Event::create($eventData);

        $newPath = public_path() . '/storage/img/events/' . $event->id;
        
        request('picture')->move($newPath, $pictureName);

        return $event;
    }

    public function update($id) {
        request()->validate([
            'title' => [
                'required', 
                'string',
                Rule::unique('events')->ignore($id)
            ],
            'form_link' => ['required', 'string'],
            'date' => ['required', 'date'],
            'detail' => ['required', 'string'],
            'region' => ['required', 'string'],
            'picture' => ['required', 'image']
        ]);

        $event = Event::where('id', $id)->first();

        //Delete directory and picture
        $oldPicturePath = public_path() . '/storage/img/events/' . $event->id;
        array_map('unlink', glob("$oldPicturePath/*.*"));
        rmdir($oldPicturePath);

        $pictureName = request('picture')->getClientOriginalName();

        $eventData = [
            'title' => request('title'),
            'form_link' => request('form_link'),
            'date' => request('date'),
            'detail' => request('detail'),
            'region' => request('region'),
            'picture' => $pictureName
        ];

        $event->update($eventData);
        $newPicturePath = public_path() . '/storage/img/events/' . $event->id;

        request('picture')->move($newPicturePath, $pictureName);

        $response = [
            "event" => [
                'id' => $event->id,
                'title' => $event->title,
                'form_link' => $event->form_link,
                'date' => $event->date,
                'detail' => $event->detail,
                'region' => $event->region,
                'picture' => $event->picture
            ]
        ];

        return $response;
    }

    public function delete($id) {
        $event = Event::where('id', $id);
        $eventObject = $event->first();

        //Delete directory and picture
        $picturePath = public_path() . '/storage/img/events/' . $eventObject->id;
        array_map('unlink', glob("$picturePath/*.*"));
        rmdir($picturePath);

        $deleteSponsor = $event->delete();
        $msg = "success to delete";
        return [
            'response' => $msg
        ];
    }
}
