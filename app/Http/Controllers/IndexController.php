<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
	public function index( Request $request ){

		$view_data	= [
			'title'	=> 'Index page. ',
			'method_name' => 'Index'
		];

		return view( 'pages.index', $view_data );
	}
//______________________________________________________________________________

	public function setLang( Request $request ){
		$lang	= $request->input('lang', 'en');
		session(['current_locale' => $lang]);
		return response()->json([ 'success' => true ], 200);
	}
//______________________________________________________________________________

}
