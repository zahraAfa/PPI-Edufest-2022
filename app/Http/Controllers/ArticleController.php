<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function read() {
        $articles = Article::all();
        return $articles;
    }

    public function readDetail($id) {
        $article = Article::where('id', $id)->first();
        $picturesName = explode(",", $article->picture);
        $data = [
            $article,
            $picturesName
        ];
        return $data;
    }
    
    public function insert() {
        request()->validate([
            'title' => ['required', 'string'],
            'writer' => ['required', 'string'],
            'description' => ['required', 'string'],
            'writer_school' => ['required', 'string'],
            'writer_ppi' => ['required', 'string'],
            'picture' => ['required']
        ]);

        $check = Article::where('title', request('title'))->first();
        if ($check)
            abort(400, 'Sorry, cannot insert the same article\'s title as the existing one');
        
        $picturesName = [];
        if (request()->hasFile('picture')) {
            foreach (request()->file('picture') as $file) {
                $name = $file->getClientOriginalName();
                $picturesName[] = $name;
            }
        }

        //Store name of files using string
        $storedPicturesName = implode(",", $picturesName);

        $articleData = [
            'title' => request('title'),
            'writer' => request('writer'),
            'description' => request('description'),
            'writer_school' => request('writer_school'),
            'writer_ppi' => request('writer_ppi'),
            'picture' => $storedPicturesName
        ];

        $article = Article::create($articleData);

        $newPath = public_path() . '/storage/img/articles/' . $article->id;

        //Store all files to the article path
        foreach (request()->file('picture') as $file) {
            $name = $file->getClientOriginalName();
            $file->move($newPath, $name);
        }

        $response = [
            "article" => [
                'title' => $article->title,
                'writer' => $article->writer,
                'description' => $article->description,
                'writer_school' => $article->writer_school,
                'writer_ppi' => $article->writer_ppi,
                'picture' => $article->picture
            ]
        ];

        return $response;
    }

    public function updateImage($id) {
        request()->validate([
            'picture' => ['required']
        ]);
    
        // get article by id
        $article = Article::find($id);
        $oldPicturePath = public_path() . '/storage/img/articles/' . $article->id;

        //replace old picture name
        array_map('unlink', glob("$oldPicturePath/*.*"));

        $picturesName = [];
        if (request()->hasFile('picture')) {
            foreach (request()->file('picture') as $file) {
                $name = $file->getClientOriginalName();
                $picturesName[] = $name;
            }
        }

        //Store name of files using string
        $storedPicturesName = implode(",", $picturesName);
        
        $article->picture = $storedPicturesName;
        $article->save();

        // Add new picture to storage
        foreach (request()->file('picture') as $file) {
            $name = $file->getClientOriginalName();
            $file->move($oldPicturePath, $name);
        }

        return $article;
    }

    public function update($id) {
        request()->validate([
            'title' => ['required', 'string'],
            'writer' => ['required', 'string'],
            'description' => ['required', 'string'],
            'writer_school' => ['required', 'string'],
            'writer_ppi' => ['required', 'string']
        ]);

        $article = Article::where('id', $id)->first();

        $articleData = [
            'title' => request('title'),
            'writer' => request('writer'),
            'description' => request('description'),
            'writer_school' => request('writer_school'),
            'writer_ppi' => request('writer_ppi')
        ];

        $article->update($articleData);

        $response = [
            "article" => [
                'title' => $article->title,
                'writer' => $article->writer,
                'description' => $article->description,
                'writer_school' => $article->writer_school,
                'writer_ppi' => $article->writer_ppi,
                'picture' => $article->picture
            ]
        ];

        return $response;
    }
    
    public function delete($id) {
        $article = Article::where('id', $id);
        $articleObject = $article->first();

        //Delete directory and pictures
        $picturePath = public_path() . '/storage/img/articles/' . $articleObject->id;
        array_map('unlink', glob("$picturePath/*.*"));
        rmdir($picturePath);

        $deleteArticle = $article->delete();
        $msg = "success to delete";
        return [
            'response' => $msg
        ];
    }
}
