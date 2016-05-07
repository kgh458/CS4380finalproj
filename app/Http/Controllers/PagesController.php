<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

//begin class PagesController
class PagesController extends Controller
{
    //begin method index
    public function index()
    {
    	return view( 'index' );
    } //end method index

    //begin method requests
    public function requests()
    {
    	return view( 'requests' );
    } //end method requests

    //begin method inventory
    public function inventory()
    {
    	return view( 'inventory' );
    } //end method inventory

    //begin method forms
    public function forms()
    {
    	return view( 'forms' );
    } //end method forms

	//begin method login
    public function login()
    {
    	return view( 'login' );
    } //end method login
} //end class PagesController