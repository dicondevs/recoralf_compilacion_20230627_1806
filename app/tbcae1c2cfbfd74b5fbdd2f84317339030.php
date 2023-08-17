<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:21
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_CENTRO_ACOPIO - TB_CENTRO_ACOPIO.
 */
class tbcae1c2cfbfd74b5fbdd2f84317339030 extends \Eloquent
{
    protected $table = 'tb_centros_acopio';
    protected $primaryKey = 'PK_CENTRO_ACOPIO';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_CENTROS_TRABAJO - FK_CENTROS_TRABAJO */
    public function flaeb6f16e3af74e0badd07ce2eb38c278()
    {
        return $this->belongsTo('App\tb44e4f4d9d8324792aa7571d8772a0830', 'FK_CENTROS_TRABAJO', 'PK_CENTROS_TRABAJO');
    }
}
