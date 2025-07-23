<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //Le decimos a Laravel que tabla vamos a trabajar
    protected $table = 'venta';

    //Le indicamos cual es la clave primaria de la tabla venta
    protected $primaryKey = 'id_venta';

    //indicamos que la tabla no tiene atributos create_at update_at
    public $timestamps = false;

    //Se definen campos que seran asignados de forma masiva
    protected $fillable = [
        'fecha',
        'total',
        'id_usuario',
        'id_metodopago'
    ];

    //Aca relacionamos la tabla venta con la tabla usuario (FK)
    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario','id_usuario');
    }    

    //Aca relacionamos la tabla venta con la tabla Metodo pago (FK)
    public function metodo_pago(){
        return $this->belongsTo(MetodoPago::class, 'id_metodopago','id_metodopago');
    }   
    
    //Aca relacionamos la tabla venta con la tabla Detalle Venta (FK)
    public function productos(){
        return $this->hasMany(DetalleVenta::class, 'id_venta','id_venta');
    }
    
}
