{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('tienda_id', 'Tienda_id:') !!}
			{!! Form::text('tienda_id') !!}
		</li>
		<li>
			{!! Form::label('nombre', 'Nombre:') !!}
			{!! Form::text('nombre') !!}
		</li>
		<li>
			{!! Form::label('cod_barra', 'Cod_barra:') !!}
			{!! Form::text('cod_barra') !!}
		</li>
		<li>
			{!! Form::label('categoria_id', 'Categoria_id:') !!}
			{!! Form::text('categoria_id') !!}
		</li>
		<li>
			{!! Form::label('bodega_id', 'Bodega_id:') !!}
			{!! Form::text('bodega_id') !!}
		</li>
		<li>
			{!! Form::label('precio', 'Precio:') !!}
			{!! Form::text('precio') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}