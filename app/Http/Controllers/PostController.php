<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactsRequest;

class PostController extends Controller
{
    public function contacts (ContactsRequest $request) {
        return view('submit', ['name'=>$request->name, 'email'=>$request->email]);
    }
}
