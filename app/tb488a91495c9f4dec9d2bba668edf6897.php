<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_MUNICIPIOS - TB_MUNICIPIOS.
 */
class tb488a91495c9f4dec9d2bba668edf6897 extends \Eloquent
{
    protected $table = 'tb_municipio';
    protected $primaryKey = 'PK_MUNICIPIOS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_ESTADO - FK_ESTADO */
    public function flb902e3b1d24f45e38616d499145964a9()
    {
        return $this->belongsTo('App\tba35a009702d243a19e9c947d8add3f19', 'FK_ESTADO', 'PK_ESTADOS');
    }
}
