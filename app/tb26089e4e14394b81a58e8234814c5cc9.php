<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_RECIBAS - TB_RECIBAS.
 */
class tb26089e4e14394b81a58e8234814c5cc9 extends \Eloquent
{
    protected $table = 'tb_recibas';
    protected $primaryKey = 'PK_RECIBAS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_ESTATUS - FK_ESTATUS */
    public function fl1cd9bb9002d24ac181158bd0b4d445bb()
    {
        return $this->belongsTo('App\tbfefd6b763aac4a4388a89a4755e5d254', 'FK_ESTATUS', 'PK_ESTATUS');
    }

    /* FK_PRODUCTOR - FK_PRODUCTOR */
    public function flfc345740b4334fc3a666b9ce8c527673()
    {
        return $this->belongsTo('App\tb267831275fef4ffaae652b1d4a04b208', 'FK_PRODUCTOR', 'PK_PRODUCTOR');
    }
}
