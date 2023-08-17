<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_ESTADOS - TB_ESTADOS.
 */
class tba35a009702d243a19e9c947d8add3f19 extends \Eloquent
{
    protected $table = 'tb_estados';
    protected $primaryKey = 'PK_ESTADOS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_REGION - FK_REGION */
    public function fl4d45f4b436f8490fb97d55d4f1983307()
    {
        return $this->belongsTo('App\tb780c854ccf53401995b394fa3d882439', 'FK_REGION', 'PK_REGION');
    }
}
