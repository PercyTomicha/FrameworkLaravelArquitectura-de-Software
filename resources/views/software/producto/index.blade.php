@extends('layouts.principal')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Producto
                </div>
                <div class="panel-body">
                    <div align="right">
                        <a href="{{route('producto.create')}}" class="btn btn-w-m btn-success">+ Agregar Nuevo <strong>Producto</strong></a>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                            <td><strong>Id</strong></td>
                            <td><strong>Nombre del Producto</strong></td>
                            <td><strong>Precio del Producto</strong></td>
                            <td><strong>Categoría</strong></td>
                            <td><strong>Operacion</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->nombre}}</td>
                            <td>{{$p->precio}}</td>
                            <td>{{$p->CN}}</td>
                            <td>
                                <a class="btn btn-w-m btn-info" href="{{ route('producto.edit',$p->id) }}"><i class="fa fa-edit"></i> Editar</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['producto.destroy', $p->id],'style'=>'display:inline']) !!}
                                    {!!Form::button('<i class="fa fa-trash-o"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-w-m btn-danger'] )!!}
                                {!! Form::close() !!}
                            </td>
                        </tr>    
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection