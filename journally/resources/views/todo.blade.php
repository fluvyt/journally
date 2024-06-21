<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="{{ asset('css/todolist.css') }}" rel="stylesheet">
    <title>To Do List</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('images/v7_116.png') }}" alt="Check Icon">
                    <span style="font-size: 80px">TO DO LIST</span>
                </div>
            </div>
            <div class="back-date">
                <div class="back">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/material-symbols_arrow-circle-left-rounded (1).png') }}" alt="Back Icon">
                    </a>
                </div>
                <div class="date-container">
                    <img src="{{ asset('images/material-symbols_archive-outline.png') }}" alt="Date Icon">
                    <div class="date">
                        <a href="{{ route('dashboard') }}">DATE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="containertwo">
            <div class="content">
                <div class="line-items-container">
                    <form action="{{ route('todo.store') }}" method="POST">
                        @csrf
                        <div class="line-item">
                            <input type="checkbox" class="checkbox" disabled>
                            <input type="text" name="task" placeholder="Add new task">
                            <button type="submit">Add</button>
                        </div>
                    </form>
                    @foreach ($todos as $todo)
                    <div class="line-item">
                        <form action="{{ route('todo.update', $todo->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" class="checkbox" name="completed" {{ $todo->completed ? 'checked' : '' }} onchange="this.form.submit()">
                            <input type="text" name="task" value="{{ $todo->task }}" onblur="this.form.submit()">
                        </form>
                        <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
