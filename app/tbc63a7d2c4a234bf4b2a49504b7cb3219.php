<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * tb_cons_productores - tb_cons_productores.
 */
class tbc63a7d2c4a234bf4b2a49504b7cb3219 extends \Eloquent
{
    protected $table = 'tb_cons_productores';
    protected $primaryKey = 'PK_CONS_PRODUCTORES';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_PRODUCTOR - FK_PRODUCTOR */
    public function flac496016086a4889a82233042eab1cee()
    {
        return $this->belongsTo('App\tb267831275fef4ffaae652b1d4a04b208', 'FK_PRODUCTOR', 'PK_PRODUCTOR');
    }
}
