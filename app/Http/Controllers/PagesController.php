<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }
    
    public function store()
    {
        Form::index([
            'name' => request('name'),
            'email' => request('email'),
            'dob' => request('dob'),
            'address' => request('address')
        ]);
 
        return redirect()->back();
    }
}
