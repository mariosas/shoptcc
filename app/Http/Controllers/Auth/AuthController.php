<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use Illuminate\Routing\Controller;

class AuthController extends Controller {
   
	/**
	 * Redirect the user to the GitHub authentication page.
	 *
	 * @return Response
	 */
	public function redirectToProviderGitHub()
	{
		return Socialite::driver('github')->redirect();
	}
	
	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return Response
	 */
	public function handleProviderCallbackGitHub()
	{
		dd(Socialite::driver('github')->user());
	
		// $user->token;
	}
	
	/**
	 * Redirect the user to the Google authentication page.
	 *
	 * @return Response
	 */
	public function redirectToProviderGoogle()
	{
		return Socialite::driver('google')->redirect();
	}
	
	/**
	 * Obtain the user information from Google.
	 *
	 * @return Response
	 */
	public function handleProviderCallbackGoogle()
	{
		dd(Socialite::driver('google')->user());
	
		// $user->token;
	}
	
	/**
	 * Redirect the user to the Facebook authentication page.
	 *
	 * @return Response
	 */
	public function redirectToProviderFacebook()
	{
		return Socialite::driver('facebook')->redirect();
	}
	
	/**
	 * Obtain the user information from Facebook.
	 *
	 * @return Response
	 */
	public function handleProviderCallbackFacebook()
	{
		dd(Socialite::driver('facebook')->user());
	
		// $user->token;
	}
	
}
