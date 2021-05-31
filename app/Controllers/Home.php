<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function nama()
	{
		echo "controller home, metode nama";
	}
}
