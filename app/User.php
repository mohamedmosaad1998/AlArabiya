<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table='users';

    protected $guarded=['id'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'id' => 'integer',
        'is_admin' => 'boolean',
        'isActive' => 'boolean',
        'des' => 'string',
        'name' => 'string',
        'password' => 'string',
        'title' => 'string',
        'image' => 'string',
        'bdate' => 'datetime:Y-m-d',
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'email_verified_at' => 'datetime:Y-m-d'
    ];
    protected $dates=[
        'bdate','created_at','updated_at','email_verified_at'
    ];
    /**
     * @param $value
     * @return string
     */
    public function getIsActiveAttribute($value)
    {
        if ($value===true){
            return 'Active';
        }
        return 'Not Active';
    }
    public function cousers()
    {
        return $this->hasMany(Course::class);
    }
}
