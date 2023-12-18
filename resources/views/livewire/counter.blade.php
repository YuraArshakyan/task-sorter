<ul wire:sortable="updateTaskOrder">
@foreach($tasks as $task)
        <div class="card border-primary mb-3" wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}" wire:sortable.handle>
            <div class="card-header">Created at: {{$task -> created_at}}</div>
            <div class="card-header">Project: {{$task -> project}}</div>
            <div class="card-body text-primary">
                <h5 class="card-title">{{$task -> name}}</h5>
                <p class="card-text">{{$task -> task}}</p>
            </div>
        </div>
        <a href="{{url('edit/'. $task->id)}}" class="card-danger">Edit</a>
        <a href="{{url('delete/'. $task->id)}}" class="card-danger">Delete</a>
    @endforeach
</ul>


