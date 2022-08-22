<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'admins';
    protected $table = 'usermaster';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	
	
    protected $fillable = [
        'username', 'userEmail', 'password','role','code',
    ];
	
	 /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
	

    
}
