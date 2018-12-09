<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function permission() {
        return $this->hasOne('App\permission','id','permission_id');
    }

    public function isAdmin() {
        if ($this->permission_id == '2') {
            return true;
        } else {
        return false;
        }
    }

    public function isMod() {
        if ($this->permission_id == '3') {
            return true;
        } else {
        return false;
        }
    }    
}
