<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoItem extends Model
{
    use HasFactory;

    protected $fillable = ['task', 'completed'];

    protected $casts = [
        'completed' => 'boolean',
    ];
}
