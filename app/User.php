<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	//create declaration for table
	protected $table = "user";

	//determine what fields can be mass assigned
	protected $fillable = 
	[
        'name', 
        'email', 
        'password',
    ];

    //determine what fields should be hidden
    protected $hidden =
    [
    	'password',
    	'remember_token',
    ];
}