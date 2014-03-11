<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('editor');
	}

	public function login()
	{
		if (Auth::attempt(array('email' => Input::get('useremail'), 'password' => Input::get('password')))){
			
			return Redirect::to('/');
		}elseif (Auth::attempt(array('username' => Input::get('useremail'), 'password' => Input::get('password')))){

			return Redirect::to('/');
		}else{

			return Redirect::to('/');
		}
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::to('/');
	}

	public function register()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->passes()){
			$user = new User;

			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));

			$user->save();

			Auth::loginUsingId($user->id);

			return Redirect::to('/');
		}else{
			return Redirect::to('/')->withErrors($validator);
		}
	}
}