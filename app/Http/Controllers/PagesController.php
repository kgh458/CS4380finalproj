<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//begin class PagesController
class PagesController extends Controller
{
    //begin method index
    public function index()
    {
    	return view( 'index' );
    } //end method index
} //end class PagesController