<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_REGION - TB_REGION.
 */
class tb780c854ccf53401995b394fa3d882439 extends \Eloquent
{
    protected $table = 'tb_region';
    protected $primaryKey = 'PK_REGION';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_NACIONAL - FK_NACIONAL */
    public function fl7a952e9f32e0488db6deb1b0d216b1e3()
    {
        return $this->belongsTo('App\tb6731ce348d8340e3aaef57f8437a503b', 'FK_NACIONAL', 'PK_NACIONAL');
    }
}
