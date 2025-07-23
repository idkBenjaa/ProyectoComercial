<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Le decimos a Laravel que tabla vamos a trabajar
    protected $table = 'categoria';

    //Le indicamos cual es la clave primaria de la tabla categoria
    protected $primaryKey = 'id_categoria';

    //indicamos que la tabla no tiene atributos create_at update_at
    public $timestamps = false;

    //Se definen campos que seran asignados de forma masiva
    protected $fillable = [
        'categoria'
    ];

    //Aca relacionamos la tabla categoria con la tabla producto (FK)
    public function productos(){
        return $this->hasMany(Producto::class, 'id_categoria','id_categoria');
    }
}
