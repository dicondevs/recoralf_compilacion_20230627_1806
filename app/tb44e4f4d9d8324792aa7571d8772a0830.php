<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:21
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_CENTROS_TRABAJO - TB_CENTROS_TRABAJO.
 */
class tb44e4f4d9d8324792aa7571d8772a0830 extends \Eloquent
{
    protected $table = 'tb_centro_trabajo';
    protected $primaryKey = 'PK_CENTROS_TRABAJO';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_ESTADO - FK_ESTADO */
    public function fl0ca40c7b67e34b2abe6bb913b672dc42()
    {
        return $this->belongsTo('App\tba35a009702d243a19e9c947d8add3f19', 'FK_ESTADO', 'PK_ESTADOS');
    }
}
