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
        return $query->where('name', $name);
    }
}
