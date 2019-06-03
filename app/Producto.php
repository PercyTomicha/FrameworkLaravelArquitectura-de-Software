<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;
    protected $primary='id';
    protected $table='producto';
    protected $fillable=['nombre','precio','id_categoria'];
}
