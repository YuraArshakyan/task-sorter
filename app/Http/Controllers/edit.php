<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tasks;

class edit extends Controller
{
    public function edit($id){
        $task = tasks::find($id);
        return view('edit', compact('task'));
    }
    public function update(Request $request,$id){
        $texts = tasks::where('id', $id)->first();
        $texts->project = $request->input('project');
        $texts->name = $request->input('name');
        $texts->task = $request->input('task');
        $texts->update();
        return(redirect('/'));
    }
    public function delete($id){
        $texts = tasks::where('id', $id)->first();
        $texts->delete();
        return(redirect('/'));
    }
    public function new(){
        return view('new');
    }
    public function insert_new(Request $request){
        $max_id = tasks::max('id')+1;
        $data = $request->all();
        tasks::create([
            'project' => $data['project'],
            'task' => $data['task'],
            'name' => $data['name'],
            'priority' => $max_id,
        ]);
        return redirect('/');
    }
}
