<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use Notifiable,HasRoles;

    // vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status' , 'dob', 'mobile_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'last_login', 'last_login_ip'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function getAdminRolesAttribute()
    // {   
    //     $adminRoles = ['teacher','admin'];
    //     return $adminRoles;
    // }

    // public function roles()
    // {
    //     return $this->belongsToMany('App\Models\Role');
    // }

    // public function setPasswordAttribute($password)
    // {   
    //     $this->attributes['password'] = bcrypt($password);
    // }

}
