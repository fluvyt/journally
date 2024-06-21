<?php

namespace App\Http\Controllers;

use App\Models\ToDoItem;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDoItem::all();
        return view('todo', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|string|max:255',
        ]);

        ToDoItem::create([
            'task' => $request->task,
        ]);

        return redirect()->route('todo.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'task' => 'required|string|max:255',
            'completed' => 'boolean',
        ]);

        $todo = ToDoItem::findOrFail($id);
        $todo->update($request->all());

        return redirect()->route('todo.index');
    }

    public function destroy($id)
    {
        $todo = ToDoItem::findOrFail($id);
        $todo->delete();

        return redirect()->route('todo.index');
    }
}
