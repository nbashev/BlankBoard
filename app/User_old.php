<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get roles with a certain user.
     *
     * @return void
     */
    public function roles()
    {

        return $this->belongsToMany('App\Http\Models\Role');
    }

    public function hasRole($name)
    {

        foreach($this->roles as $role)
            if(strtolower($role->name) == strtolower($name)) {
                return true;
            }

        return false;
    }
}
