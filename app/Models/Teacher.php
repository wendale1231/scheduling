<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Authenticatable
{
    use HasFactory;
    protected $guard = "teacher";
    protected $fillable = [
        'f_name',
        'l_name',
        'username',
        'plain_password',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
}
