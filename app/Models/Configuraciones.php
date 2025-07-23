<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuraciones extends Model
{
    //Le decimos a Laravel que tabla vamos a trabajar
    protected $table = 'configuraciones';

    //Le indicamos cual es la clave primaria de la tabla configuraciones
    protected $primaryKey = 'id_conf';

    //indicamos que la tabla no tiene atributos create_at update_at
    public $timestamps = false;

    //Se definen campos que seran asignados de forma masiva
    protected $fillable = [
        'stock_bajo',
        'stock_critico',
        'dias_vencimiento'
    ];

    //La tabla configuraciones no tiene relaciones
}
