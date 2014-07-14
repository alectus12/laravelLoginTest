@extends('layout.main')

@section('content')

	

	<form action=" {{ URL::route('account-create-post') }} " method="post">
		
		<div class="field">
			Email: <input type="text" name="email"
			{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}  />

			@if ($errors->has('email'))
				{{ $errors->first('email') }}
			@endif

		</div>

		<div class="field">
			Username: <input type="text" name="username"
			{{ (Input::old('username')) ? ' value="' . e(Input::old('username')) . '"' : '' }} />

			@if ($errors->has('username'))
				{{ $errors->first('username') }}
			@endif

		</div>

		<div class="field">
			Password: <input type="password" name="password">

			@if ($errors->has('password'))
				{{ $errors->first('password') }}
			@endif

		</div>

		<div class="field">
			Confirm Password: <input type="password" name="confirm_password"/>

			@if ($errors->has('confirm_password'))
				{{ $errors->first('confirm_password') }}
			@endif

		</div>
		

		<input type="submit" value="Create Account"/>
		{{ Form::token() }}
	</form>

@stop