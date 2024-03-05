<div>
    <input wire:model="newTodo" type="text" placeholder="Add new todo">
    <button wire:click="addTodo">Add Todo</button>

    <ul>
        @foreach($todos as $todo)
        <li>
            {{ $todo->title }}
            <button wire:click="deleteTodo({{ $todo->id }})">Delete</button>
        </li>
        @endforeach
    </ul>
</div>