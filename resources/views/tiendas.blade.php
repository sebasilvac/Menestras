@extends('layouts.app')

@section('content')

	{!! Form::open(array('route' => 'tienda.create', 'method' => 'POST')) !!}
		<ul>
			<li>
				{!! Form::label('users_id', 'Users_id:') !!}
				{!! Form::text('users_id') !!}
			</li>
			<li>
				{!! Form::label('nombre', 'Nombre:') !!}
				{!! Form::text('nombre') !!}
			</li>
			<li>
				{!! Form::submit() !!}
			</li>
		</ul>
	{!! Form::close() !!}

@endsection
