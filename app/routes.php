<?php

Route::get('/', array(
	'as'   => 'home',
	'uses' => 'Homecontroller@home',
	));


/*
 * Unauthenticated group
 */
Route::group(array('before' => 'auth'), function() {
	
	/*
	 * CSRF protection group
	 */
	Route::group(array('before' => 'csrf'), function() {

		/*
		 * Change Password (POST)
		 */

		Route::post('/account/change-password', array(
			'as' => 'account-change-password-post',
			'uses' => 'AccountController@postChangePassword'
		));


	});



	/*
	 * Change Password (GET)
	 */

	Route::get('/account/change-password', array(
		'as' => 'account-change-password',
		'uses' => 'AccountController@getChangePassword'
	));


	/*
	 * Sign out (GET)
	 */
	Route::get('/accounts/sign-out', array(
		'as'   => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
	));

});


/*
 * Unauthenticated group
 */
Route::group(array('before' => 'guest'), function(){

	/*
	 * CSRF protection group
	 */
	Route::group(array('before' => 'csrf'), function(){

		/*
		 * Create account (POST)
		 */
		Route::post('/account/create', array(
			'as'   => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));

		/*
		 * Sign In account (POST)
		 */
		Route::post('/account/sign-in', array(
			'as'   => 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));

	});



	/*
	 * Sign In account (GET)
	 */
	Route::get('/account/sign-in', array(
		'as'   => 'account-sign-in',
		'uses' => 'AccountController@getSignIn'
	));


	/*
	 * Create account (GET)
	 */
	Route::get('/account/create', array(
		'as'   => 'account-create',
		'uses' => 'AccountController@getCreate'
	));

	/*
	 * Activate account (GET)
	 */
	Route::get('/account/activate/{code}', array(
		'as'   => 'account-activate',
		'uses' => 'AccountController@getActivate'
	));



});