<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usermanagement extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'email' , 'phoneno' , 'password' , 'active' , 'role'];
}
