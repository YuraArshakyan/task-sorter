<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;
    protected $fillable = [
        'project',
        'task',
        'name',
        'priority',
        'created_at',
        'updated_at'
    ];
}
