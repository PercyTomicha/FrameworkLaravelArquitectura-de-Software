<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    public $timestamps = false;
    protected $primary='id';
    protected $table='factura';
    protected $fillable=['fecha','monto'];
}
