<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\tasks;


class Counter extends Component
{
    public function render()
    {
        $tasks = tasks::all()->sortBy('priority');
        return view('livewire.counter', compact('tasks'));
    }
    public function updateTaskOrder($task)
    {
        foreach ($task as $item){
            tasks::find($item['value'])->update(['priority' => $item['order']]);
        }
        $this->dispatch('updataed', ['message' => 'succssefuly updated']);
    }

}
