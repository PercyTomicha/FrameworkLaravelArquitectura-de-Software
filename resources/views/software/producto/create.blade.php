@extends('layouts.principal')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Producto</div>

                <div class="panel-body">
                    
                    {!!Form::open(['route'=>['producto.store'],'files'=>true,'method'=>'POST','class'=>'form-horizontal'])!!}

                        @include('software.producto.form')

                        {!!Form::submit('Registrar',['class'=>'btn btn-w-m btn-success'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection