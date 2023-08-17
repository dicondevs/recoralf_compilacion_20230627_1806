<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * tb_historial - tb_historial.
 */
class tb9591feb42802436699a2b32a255e9101 extends \Eloquent
{
    protected $table = 'tb_historial';
    protected $primaryKey = 'PK_HISTORIAL';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_PRODUCTOR - FK_PRODUCTOR */
    public function fl7bb490f57f45469daf56c518890871c4()
    {
        return $this->belongsTo('App\tb267831275fef4ffaae652b1d4a04b208', 'FK_PRODUCTOR', 'PK_PRODUCTOR');
    }
}
