@extends('layout.main')

@section('content')
	<form action=" {{ URL::route('account-change-password-post') }} " method="post">
		
		<div class="field">
			Old Password: <input type="password" name="old_password">

			@if($errors->has('old_password'))
				{{ $errors->first('old_password') }}
			@endif
		</div>

		<div class="field">
			New Password: <input type="password" name="new_password">

			@if($errors->has('new_password'))
				{{ $errors->first('new_password') }}
			@endif
		</div>

		<div class="field">
			Confirm Password: <input type="password" name="confirm_password">

			@if($errors->has('confirm_password'))
				{{ $errors->first('confirm_password') }}
			@endif
		</div>

		<input type="submit" value="Change password">
		
		{{ Form::token() }}

	</form>
@stop