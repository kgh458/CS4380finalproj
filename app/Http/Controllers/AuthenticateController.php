<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\User;

class AuthenticateController extends Controller
{
    //begin method authenticate
    public function authenticate( Requests\AuthenticateUserRequest $request )
    {
    	//grab input from form
    	$input = Request::all();

    	//attempt to find user
    	$user = User::where('username', $input[ 'username' ])->first();
    	if( $user )
    	{
    		//check to see if the password is correct
    		if( $input['password'] == $user->password )
    		{
    			return view( 'requests' )->with( 'user', $user );
    		} //end if
    	} //end if

    	//if the user was not found redirect to the login
    	return view( 'login' );
    } //end method authenticate
}