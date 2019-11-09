<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class User extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $hidden = ['password','remember_token'];
    protected $dates = ['email_verified_at','bdate'];
    protected $casts = [
        'id' => 'integer',
        'is_admin' => 'boolean',
        'isActive' => 'boolean',
        'des' => 'string',
        'name' => 'string',
        'password' => 'string',
        'title' => 'string',
        'image' => 'string',
        'bdate' => 'date',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'email_verified_at' => 'timestamp'
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function cousers()
    {
        return $this->hasMany(Course::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */


    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
