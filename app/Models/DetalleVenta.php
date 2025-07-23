<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    //Le decimos a Laravel que tabla vamos a trabajar
    protected $table = 'detalle_venta';

    //Le indicamos cual es la clave primaria de la tabla detalle_venta
    protected $primaryKey = 'id_detalle';

    //indicamos que la tabla no tiene atributos create_at update_at
    public $timestamps = false;

    //Se definen campos que seran asignados de forma masiva
    protected $fillable = [
        'id_venta',
        'id_producto',
        'cantidad',
        'precio_unitario'
    ];

    //Aca relacionamos la tabla detalle_venta con la tabla venta (FK)
    public function venta(){
        return $this->belongsTo(Venta::class, 'id_venta','id_venta');
    }

    //Aca relacionamos la tabla detalle_venta con la tabla producto (FK)
    public function productos(){
        return $this->belongsTo(Producto::class, 'id_producto','id_producto');
    }
}
