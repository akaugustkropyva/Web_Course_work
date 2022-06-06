<?php

namespace App\Http\Controllers;

use App\Models\Poster;

class PageController extends Controller
{
    public function landing(){
        $posters = new Poster();
        return view('landing', ['data'=>$posters->getPosters()]);
    }

    public function container(){
        $posters = new Poster();
        return view('container', ['data'=>$posters->getPosters()]);
    }

    public function posterinfo($value){
        $posters = new Poster();
        $data = $posters->getPosters();
        $poster = $posters->findPoster($value);
        return view('posterinfo', compact('poster', 'data'));
    }
}
