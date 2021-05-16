<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'phone' , 'password' , 'status' , 'role'];

    protected $hidden = ['password'];

    protected $casts = [
        'status' => 'boolean',
    ];
}
