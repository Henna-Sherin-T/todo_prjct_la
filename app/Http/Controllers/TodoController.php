<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todo_table = Todo::latest()->get();
        return view('Todo.index',compact('todo_table'));
    }
    public function createTodo()
    {
        return view('Todo.createTodo');
    }

    public function storeTodo(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4',
            'description' => 'required',
        ]);
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('TodoList')->with('success', 'Todo created successfully.');
    }
}
