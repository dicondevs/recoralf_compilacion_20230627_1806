<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_DATOS_PRODUCTIVOS - TB_DATOS_PRODUCTIVOS.
 */
class tba5345050e7b94369b7ba4fabd723cb69 extends \Eloquent
{
    protected $table = 'tb_datos_productivos';
    protected $primaryKey = 'PK_DATOS_PRODUCTIVOS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_PRODUCTORES - FK_PRODUCTORES */
    public function fl367ab1e1529947e3a2c3ff5ca3dc7dfd()
    {
        return $this->belongsTo('App\tb267831275fef4ffaae652b1d4a04b208', 'FK_PRODUCTOR', 'PK_PRODUCTOR');
    }
}
