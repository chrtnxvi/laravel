<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inventory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function logs(){
    	return view ('logs');
    }

    public function view_table(){
        $inventory = Inventory::all()->toArray();
    	return view ('view_table', compact('inventory'));
    }

    public function account_settings(){
    	return view ('account_settings');
    }
    
}
