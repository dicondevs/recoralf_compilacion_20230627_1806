<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_CODIGO - TB_CODIGO.
 */
class tb5da5de078cf643ddbce8847cbaeaade2 extends \Eloquent
{
    protected $table = 'TB_CODIGO';
    protected $primaryKey = 'PK_CODIGO';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_PRODUCTOR - FK_PRODUCTOR */
    public function fl03faae1e3592439ab009b24edf2061c5()
    {
        return $this->belongsTo('App\tb267831275fef4ffaae652b1d4a04b208', 'FK_PRODUCTOR', 'PK_PRODUCTOR');
    }
}
