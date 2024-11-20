<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Pengguna extends Model implements AuthenticatableContract
{
   
    use HasFactory, HasApiTokens, Authenticatable;

    protected $fillable = ['name','email','password','phone_number'];
}
