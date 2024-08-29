<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('TodoList');
Route::get('/todo/create',[TodoController::class, 'createTodo'])->name('TodoCreate');
Route::post('/todo/store',[TodoController::class, 'storeTodo'])->name('TodoStore');
Route::get('/todo/{id}', [TodoController::class, 'show'])->name('TodoShow');
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->name('TodoEdit');
Route::put('/todo/{todo}/update', [TodoController::class, 'update'])->name('TodoUpdate');
Route::delete('/todo/{todo}/destroy', [TodoController::class, 'destroy'])->name('TodoDestroy');
