@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>
                <div class="panel-body">

                    {!! Form::open(['method' => 'POST', 'route' => 'posts.store' ])  !!}

                        {!! Field::text('title',['label'=> 'Título']) !!}

                        {!! Field::textarea('content', ['label' => 'Contenido']) !!}



                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Publicar
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
