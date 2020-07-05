<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
	public function userslist( Request $request ){
		$view_data	= [
			'title'	=> 'Users',
			'method_name' => 'Users'
		];

		return view( 'pages.users', $view_data );
	}
}
