<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //Le decimos a Laravel que tabla vamos a trabajar    
    protected $table = 'rol';

    //Le indicamos cual es la clave primaria de la tabla rol
    protected $primaryKey = 'id_rol';

    //indicamos que la tabla no tiene atributos create_at update_at
    public $timestamps = false;

    //Se definen campos que seran asignados de forma masiva
    protected $fillable = [
        'rol'
    ];

    //Aca relacionamos la tabla rol con la tabla usuario (FK)
    public function usuario(){
        return $this->hasMany(usuario::class, 'id_rol','id_rol');
    }
}
