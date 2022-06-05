<?php

namespace App\Http\Controllers;

use App\Models\Poster;

class PageController extends Controller
{
    public function landing(){
        $posters = new Poster();
        $data = $posters->getAllPosters();
        return view('landing', ['data'=>$data]);
    }

    public function container(){
        $posters = new Poster();
        $data = $posters->getAllPosters();
        return view('container', ['data'=>$data]);
    }

    public function posterinfo($value){
        $posters = new Poster();
        $data = $posters->getAllPosters();
        $poster = $posters->findPoster($value);
        return view('posterinfo', compact('poster', 'data'));
    }
}
