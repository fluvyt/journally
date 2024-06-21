<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a To-Do</title>
    <style>
        /* Optional: Add some basic styling for better appearance */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Create a To-Do</h1>
    <form method="post" action="{{ route('todo.store') }}">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Title" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Description" required>
        </div>

        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" id="due_date" name="due_date" placeholder="Due Date" required>
        </div>

        <div class="form-group">
            <input type="checkbox" id="completed" name="completed">
            <label for="completed">Completed</label>
        </div>

        <div class="form-group">
            <input type="submit" value="Save a New To-Do">
        </div>
    </form>
</body>
</html>