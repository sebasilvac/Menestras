{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nombre', 'Nombre:') !!}
			{!! Form::text('nombre') !!}
		</li>
		<li>
			{!! Form::label('direccion', 'Direccion:') !!}
			{!! Form::text('direccion') !!}
		</li>
		<li>
			{!! Form::label('tienda_id', 'Tienda_id:') !!}
			{!! Form::text('tienda_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}