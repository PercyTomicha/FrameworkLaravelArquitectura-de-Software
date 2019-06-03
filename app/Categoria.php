<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    protected $primary='id';
    protected $table='categoria';
    protected $fillable='nombre';
}
