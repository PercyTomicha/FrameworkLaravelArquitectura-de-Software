<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalle_venta';
    protected $fillable=['cantidad','precio','id_factura','id_producto'];
}
