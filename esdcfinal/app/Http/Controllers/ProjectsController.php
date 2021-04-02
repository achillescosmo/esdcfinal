<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Models\Projects::all()->sortBy('created_at');
        
        return view('projects.index', compact('projects'));
    }
    
    public function create()
    {
        return view('projects.create');
    }
    
    public function store()
    {
        $data = request()->validate([
            'service' => 'required',
            'name' => 'required',
            'detail' => 'required',
            'required_skill' => '',
            'end' => 'required',
            'minsalary' => '',
            'maxsalary' => ''
        ]);
        
        auth()->user()->projects()->create([
            'service' => $data['service'],
            'name' => $data['name'],
            'detail' => $data['detail'],
            'required_skill' => $data['required_skill'],
            'end' => $data['end'],
            'minsalary' => $data['minsalary'],
            'maxsalary' => $data['maxsalary'],
        ]);
        return redirect("home");
    }
}
