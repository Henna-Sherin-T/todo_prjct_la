<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo_tables'; 
    use HasFactory;

    protected $fillable = ['title', 'description'];
}
