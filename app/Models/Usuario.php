<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //Le decimos a Laravel que tabla vamos a trabajar
    protected $table = 'usuario';

    //Le indicamos cual es la clave primaria de la tabla usuario
    protected $primaryKey = 'id_usuario';

    //indicamos que la tabla no tiene atributos create_at update_at
    protected $timestamps = false;

    //Se definen campos que seran asignados de forma masiva
    protected $fillable = [
        'contraseña',
        'req_cambio',
        'id_rol'
    ];

    //Aca relacionamos la tabla usuario con la tabla rol (FK)
    public function rol(){
        return $this->belongsTo(Rol::class, 'id_rol','id_rol');
    }

    // Relación con el modelo Venta: un usuario puede tener muchas ventas
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_usuario', 'id_usuario');
    }
}
