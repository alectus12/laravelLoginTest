<?php

class HomeController extends BaseController {

	public function home(){

		/*
		Mail::send('emails.auth.test', array('name' => 'alec'), 
			function($message){
			$message->to('nacallo@gmail.com', 'Alec Callo')->subject('Test Email');
		});
		*/

		return View::make('home');
	}
	

	
}
