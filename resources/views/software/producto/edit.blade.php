@extends('layouts.principal')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Producto</div>

                <div class="panel-body">
                    
                    {!!Form::model($producto, ['method' => 'PATCH','class'=>'form-horizontal','route' => ['producto.update', $producto->id]]) !!}

                        @include('software.producto.form')

                        {!!Form::submit('Actualizar',['class'=>'btn btn-w-m btn-primary'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection