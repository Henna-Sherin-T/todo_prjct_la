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

    public function show(Request $request,$id){
        $todo = Todo::find($id);
        return view('Todo.todoShow',compact('todo'));
    }

    public function edit(Request $request,Todo $todo){
        
        return view('Todo.editTodo',compact('todo'));}

    public function update(Request $request,Todo $todo){
        $request->validate([
            'title' => 'required|min:4',
            'description' =>'required'
        ]);

        $todo->update(
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        return redirect()->route('TodoList')->with('success', 'Todo updated successfully.');
    }    

    public function destroy (Todo $todo){
        $todo->delete();
        return redirect ()->route('TodoList')->with('success', 'Todo deleted successfully.');
    }
}
