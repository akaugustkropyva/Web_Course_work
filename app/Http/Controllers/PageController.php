<?php

namespace App\Http\Controllers;

use App\Filters\PosterFilter;
use App\Models\Date;
use App\Models\Hall;
use App\Models\News;
use App\Models\Poster;
use App\Models\Sale;
use App\Models\Sorting;

class PageController extends Controller
{
    public function landing(){
        $posters = Poster::all();
        $sales = Sale::all();
        return view('landing', compact(['posters', 'sales']));
    }

    public function container(PosterFilter $request){
        $posters = Poster::filter($request)->paginate(8);
        $halls = Hall::all();
        $sortings = Sorting::all();
        $dates = Date::all();
        return view('container', compact(['posters', 'halls', 'sortings', 'dates']));
    }

    public function news(){
        $news = News::all();
        return view('news', compact('news'));
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contacts(){
        return view('contacts');
    }

    public function posterinfo($id){
        $poster = Poster::find($id);
        return view('posterinfo', compact('poster'));
    }
}
