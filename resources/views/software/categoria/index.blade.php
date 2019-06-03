@extends('layouts.principal')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Categoría
                </div>
                <div class="panel-body">
                    <div align="right">
                        <a href="{{route('categoria.create')}}" class="btn btn-w-m btn-success">+ Agregar Nueva <strong>Categoría</strong></a>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                            <td><strong>Id</strong></td>
                            <td><strong>Nombre de la Categoría</strong></td>
                            <td><strong>Operacion</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->nombre}}</td>
                            <td>
                                <a class="btn btn-w-m btn-info" href="{{ route('categoria.edit',$c->id) }}"><i class="fa fa-edit"></i> Editar</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['categoria.destroy', $c->id],'style'=>'display:inline']) !!}
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