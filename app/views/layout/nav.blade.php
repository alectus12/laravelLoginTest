<nav>
	<ul>
		<li><a href=" {{ URL::route('home') }} ">Home</a></li>
	
		@if(Auth::check())

		@else
		<li><a href="">Sign in</a></li>
		<li><a href=" {{ URL::route('account-create-post') }} ">Create Account</a></li>
		@endif

	</ul>
</nav>