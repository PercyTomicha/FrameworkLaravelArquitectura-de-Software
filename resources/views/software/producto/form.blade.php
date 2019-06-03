        <div class="form-group">
            <div>
                {!!Form::label('nombre','Nombre del Producto',['class'=>'col-md-4 control-label'])!!}
                <div class="col-md-6">
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ej: Chompa','required'])!!}      
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div>
                {!!Form::label('precio','Precio del Producto',['class'=>'col-md-4 control-label'])!!}
                <div class="col-md-6">
                    {!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Ej: 25','required'])!!}      
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div>
                {!!Form::label('id_categoria','Categoría',['class'=>'col-md-4 control-label'])!!}
                <div class="col-md-6">
                    {!!Form::select('id_categoria',$categorias, null, ['class'=>'form-control','placeholder' => 'Seleccione la Categoría...','id'=>'id_categoria']);!!}   
                </div>
            </div>
        </div>
        <hr>
        <div class="hr-line-dashed"></div>