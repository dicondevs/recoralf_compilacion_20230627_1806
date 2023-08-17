<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * tr_productores_centros_acopio - tr_productores_centros_acopio.
 */
class tb63eddac8503e48ef8ba7965cd5d64334 extends \Eloquent
{
    protected $table = 'tr_productores_centros_acopio';
    protected $primaryKey = 'PK_PRODUCTOR_CENTRO_ACOPIO';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_CENTRO_ACOPIO - FK_CENTRO_ACOPIO */
    public function fld1886accdadf4cffb0966f9dac6d316a()
    {
        return $this->belongsTo('App\tbcae1c2cfbfd74b5fbdd2f84317339030', 'FK_CENTRO_ACOPIO', 'PK_CENTRO_ACOPIO');
    }

    /* FK_CENTRO_TRABAJO - FK_CENTRO_TRABAJO */
    public function flf1815e0b548842038da515ecd275046d()
    {
        return $this->belongsTo('App\tb44e4f4d9d8324792aa7571d8772a0830', 'FK_CENTRO_TRABAJO', 'PK_CENTROS_TRABAJO');
    }

    /* FK_ESTADO - FK_ESTADO */
    public function flffb1dcd2919d49919d95324302ca6696()
    {
        return $this->belongsTo('App\tba35a009702d243a19e9c947d8add3f19', 'FK_ESTADO', 'PK_ESTADOS');
    }

    /* FK_PRODUCTOR - FK_PRODUCTOR */
    public function fl6234015fe8ee4df3a01c9bb34197365c()
    {
        return $this->belongsTo('App\tb267831275fef4ffaae652b1d4a04b208', 'FK_PRODUCTOR', 'PK_PRODUCTOR');
    }
}
