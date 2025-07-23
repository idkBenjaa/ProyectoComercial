<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    //Le decimos a Laravel que tabla vamos a trabajar
    protected $table = 'metodo_pago';

    //Le indicamos cual es la clave primaria de la tabla metodo_pago
    protected $primaryKey = 'id_metodopago';

    //indicamos que la tabla no tiene atributos create_at update_at
    public $timestamps = false;

    //Se definen campos que seran asignados de forma masiva
    protected $fillable = [
        'metodo'
    ];

    //Aca relacionamos la tabla metodo_pago con la tabla Venta (FK)
    public function venta(){
        return $this->hasMany(Venta::class, 'id_metodopago','id_metodopago');
    }
}
