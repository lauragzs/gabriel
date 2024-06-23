<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table= "categorias";
    protected $primarykey='id';
    protected $fillable =['nombre','descripcion','codigo'];
    protected $hidden =['id'];
    public function producto(){
        return $this->hasMany(Producto::class);
    }
}
