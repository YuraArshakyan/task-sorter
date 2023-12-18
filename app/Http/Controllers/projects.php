<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;

class projects extends Controller
{
    public function show($projects){
        $tasks = tasks::where('project', $projects)->get();
        return view('projects', compact('tasks'));
    }
}
