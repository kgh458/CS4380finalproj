@extends( 'template' )

@section( 'content' )
	<div id="content" align="center">
	<h1>Login</h1>
	<hr/>
	{!! Form::open(['action' => 'AuthenticateController@authenticate']) !!}

		<div class="form-control">
			{!! Form::label('username', 'Username:') !!}
			{!! Form::text('username', null, ['class' => '']) !!}
		</div>

		<div class="form-control">
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password', null, ['class' => '']) !!}
		</div>

		<div class="form-control">
			{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close()  !!}
@stop