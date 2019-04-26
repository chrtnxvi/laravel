<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function logs(){
    	return view ('logs');
    }

    public function view_table(){
    	return view ('view_table');
    }

    public function account_settings(){
    	return view ('account_settings');
    }

    public function login(){
    	return view ('login');
    }

}

 ?>