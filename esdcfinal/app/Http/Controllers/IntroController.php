<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('intro.create');
    }

    public function store()
    {
        $data = request()->validate([
            'type' => 'required',
            'image' => 'image',
            'quick_review' => 'required',
            'description' => 'required'
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        
        
        auth()->user()->intro()->create([
            'type' => $data['type'],
            'image' => $imagePath,
            'quick_review' => $data['quick_review'],
            'description' => $data['description']
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }
}
