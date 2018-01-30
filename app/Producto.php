<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];
    
    public function categoria() {
        return $this->belongsTo('App\Categoria');
    }
    public function scopeName($query, $name) {       
       $productos = $query->where('name', $name);
       return $productos;
    }
}
