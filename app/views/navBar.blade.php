<nav class="navbar navbar-blackOrange" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle nav</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{URL::to('/')}}">ET</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				@if(Auth::check())
				<li class="{{Route::getCurrentRoute()->getPath() == '/files' ? 'active' : ''}}"><a href="#">My Files</a></li>					
				<li class="{{Route::getCurrentRoute()->getPath() == '/changes' ? 'active' : ''}}"><a href="#">My Recent Changes</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quickopen <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">SomeOldFile.txt</a></li>
						<li><a href="#">AnotherOldFile.txt</a></li>
						<li><a href="#">StylishStyles.css</a></li>
						<li class="divider"></li>
						<li><a href="#">ProjectFolder</a></li>
						<li><a href="#">OtherProject</a></li>
					</ul>
				</li>
				@else
				<li class="{{Route::getCurrentRoute()->getPath() == '/changes' ? 'active' : ''}}"><a href="#">Recent Public Changes</a></li>
				@endif

			</ul>
			@if(!Auth::check())
			
			{{ Form::open(array('action' => 'UserController@login','class' => 'navbar-form navbar-right', 'role' => 'search')) }}
				<div class="form-group">
					{{ Form::text('useremail', null, array('class' => 'form-control', 'placeholder' => 'User/Email', 'size' => '8'))}}
					{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password', 'size' => '8'))}}
				</div>
				<div class="btn-group">
					{{ Form::submit('Login', array('class' => 'btn btn-success'))}}
					<button id="navRegisterButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#navRegisterModal">Register</span></button>
				</div>
			{{ Form::close() }}

			@else
			{{ Form::open(array('action' => 'UserController@logout','class' => 'navbar-form navbar-right', 'role' => 'search')) }}
				{{ Form::submit('Logout', array('class' => 'btn btn-warning'))}}
			{{ Form::close() }}
			<p class="navbar-text navbar-right">Signed in as {{Auth::user()->username}}</p>
			
			@endif


		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

{{--Registration Modal--}}
<div class="modal fade" id="navRegisterModal" tabindex="-1" role="dialog" aria-labelledby="navRegisterModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="navRegisterModalLabel">Register with EditTogether</h4>
			</div>
			<div class="modal-body">
				{{--Form Stuff Goes Here--}}
				{{Form::open(array('action' => 'UserController@register','role' => 'form'))}}
				<ul class="errors">
					@foreach($errors->get('username') as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
				<div class="form-group">
					{{Form::label('username', 'Username')}}
					{{Form::text('username', null, array('class' => 'form-control'))}}
				</div>
				<ul class="errors">
					@foreach($errors->get('email') as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
				<div class="form-group">
					{{Form::label('email', 'E-Mail Address')}}
					{{Form::text('email', null, array('class' => 'form-control'))}}
				</div>
				<ul class="errors">
					@foreach($errors->get('password') as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
				<div class="form-group">
					{{Form::label('password', 'Password')}}
					{{Form::password('password', array('class' => 'form-control'))}}
				</div>
				<ul class="errors">
					@foreach($errors->get('password_confirmation') as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
				<div class="form-group">
					{{Form::label('password_confirmation', 'Confirm Password')}}
					{{Form::password('password_confirmation', array('class' => 'form-control'))}}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{{Form::submit('Register', array('class' => 'btn btn-primary', 'type' => 'button'))}}
				{{Form::close()}}
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->