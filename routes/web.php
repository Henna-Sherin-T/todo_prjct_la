<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('TodoList');
Route::get('/todo/create',[TodoController::class, 'createTodo'])->name('TodoCreate');
Route::post('/todo/store',[TodoController::class, 'storeTodo'])->name('TodoStore');

