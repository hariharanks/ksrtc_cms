<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

	public function __construct()
	{
		//$this->middleware('auth');
	}

    public function index()
	{
		return view('index');

	}
	public function login(Request $request)
	{
		print_r($request->all()); die();
		//return view('index');

	}
}
