<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TR_RECIBAS_PRUEBASNOCAR - TR_RECIBAS_PRUEBASNOCAR.
 */
class tb7790d0c216fa4b9ea781130e9104d1a4 extends \Eloquent
{
    protected $table = 'tr_recibas_pruebasmpcar';
    protected $primaryKey = 'PK_RECIBAS_PRUEBASNOCAR';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_RECIBAS - FK_RECIBAS */
    public function fl29d26a00c8564677bc9fa2a09f416ab0()
    {
        return $this->belongsTo('App\tb26089e4e14394b81a58e8234814c5cc9', 'FK_RECIBA', 'PK_RECIBAS');
    }
}
