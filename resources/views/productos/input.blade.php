{!! Field::text('nombre',['label'=> 'Nombre']) !!}
{!! Field::text('precio',['label'=> 'Precio']) !!}
{!! Field::text('cod_barra',['label'=> 'Código de barra']) !!}

{!! Field::select('tienda_id', [], ['label' => 'Tienda']) !!}
{!! Field::select('categoria_id', [], ['label' => 'Categoría']) !!}
{!! Field::select('bodega_id', [], ['label' => 'Bodega']) !!}
