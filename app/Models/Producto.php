<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Le decimos a Laravel que tabla vamos a trabajar
    protected $table = 'productos';

    //Le indicamos cual es la clave primaria de la tabla producto
    protected $primaryKey = 'id_producto';

    //indicamos que la tabla no tiene atributos create_at update_at
    public $timestamps = false;

    //Se definen campos que seran asignados de forma masiva
    protected $fillable = [
        'codigo_producto',
        'nombre_producto',
        'stock',
        'precio',
        'fecha_venc',
        'id_categoria'
    ];

    //Aca relacionamos la tabla producto con la tabla categoria (FK)
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria','id_categoria');
    }

    //Aca relacionamos la tabla producto con la tabla venta (FK)
    public function detalle_venta(){
        //La clase debe llevar el mismo nombre que el Modelo.
        return $this->hasMany(DetalleVenta::class, 'id_producto','id_producto');
    }
}
