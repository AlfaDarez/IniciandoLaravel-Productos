<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable = ['Nombre','Descripcion','cantidad','created_at','updated_at'];
}
