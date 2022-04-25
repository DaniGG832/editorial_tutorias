<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{

    protected $fillable= ['nombre'];
    
    use HasFactory;

    protected $table = 'autores';

    public function articulos()
    {
        return $this->belongsToMany(Articulo::class);
    }
}
