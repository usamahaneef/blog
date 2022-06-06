<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\register as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class register extends Model
{
    use HasFactory;
    protected $table ='registers';
    protected $primarykey ='id';

    protected $fillable = ['name','username','password'];
}
