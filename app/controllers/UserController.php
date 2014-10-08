<?php

class UserController extends BaseController
{
	public function getCreate() 
	{
		return View::make('user.register'); 
	}
	public function getLogin()
	{
		return View::make('user.login');
	}

	//POSTS

	public function postCreate()
	{
		
	$validate = Validator::make(Input::all(), array(
			'username' => 'required|unique:users|min:4',
			'password' => 'required|min:6',
			'password2' => 'required|same:password',
		));

		if ($validate->fails())
		{
			return Redirect::route('getCreate')->withErrors($validate)->withInput();
		}
		else
		{
			$user = new User();
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));

			if ($user->save())
			{
				return Redirect::route('home')->with('success', 'You registed successfully. You can now login.');
			}
			else
			{
				return Redirect::route('home')->with('fail', 'An error occured while creating the user. Please try again.');
			}
		}

	}
	public function postLogin()
	{
			
			$validator = Validator::make(Input::all(),array(
				'username' => 'required',
				'password' => 'required'
				));
			if ($validator->fails()) {
				return Redirect::route('getLogin')->withErrors($validator)->withInput();
			}
			else
			{
					$remember = (Input::has('remember')) ? true : false;
					$credentials = [
					   'username' => Input::get('username'),
					   'password' => Input::get('password')
					];
					if(Auth::attempt($credentials)) {
				
						return Redirect::intended('/');
					}
					else
					{
						return Redirect::route('getLogin')->with('fail','Wrong login data, please try Again');
						
					}
			}
		
	}
	public function getLogout()
	{
		Auth::logout();
		return Redirect::route('home');
	}
}