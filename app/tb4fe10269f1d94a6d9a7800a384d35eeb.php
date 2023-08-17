<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_LOCALIDAD - TB_LOCALIDAD.
 */
class tb4fe10269f1d94a6d9a7800a384d35eeb extends \Eloquent
{
    protected $table = 'tb_localidad';
    protected $primaryKey = 'PK_LOCALIDAD';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_ESTADOS - FK_ESTADOS */
    public function fl6f9bd8a7562242519345e5cb1a050f4f()
    {
        return $this->belongsTo('App\tba35a009702d243a19e9c947d8add3f19', 'FK_ESTADO', 'PK_ESTADOS');
    }

    /* FK_MUNICIPIO - FK_MUNICIPIO */
    public function flbd5ebe40857c44aebd13fb8e250e9095()
    {
        return $this->belongsTo('App\tb488a91495c9f4dec9d2bba668edf6897', 'FK_MUNICIPIO', 'PK_MUNICIPIOS');
    }
}
