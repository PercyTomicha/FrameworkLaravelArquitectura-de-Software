<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    public $timestamps = false;
    protected $primary='id';
    protected $table='detalle_venta';
    protected $fillable=['cantidad','precio','id_factura','id_producto'];
}
