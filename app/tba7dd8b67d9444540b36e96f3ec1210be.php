<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TR_BOLETA_SEMANAL_RECIBAS - TR_BOLETA_SEMANAL_RECIBAS.
 */
class tba7dd8b67d9444540b36e96f3ec1210be extends \Eloquent
{
    protected $table = 'tr_boleta_semanal_recibas';
    protected $primaryKey = 'PK_BOLETA_SEMANAL_RECIBAS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_BOLETA_SEMANAL - FK_BOLETA_SEMANAL */
    public function fl5f61a52fbe4f4f83816e2ca971bd8e2f()
    {
        return $this->belongsTo('App\tb61745cc261fc473d90545e7ae39af788', 'FK_BOLETA_SEMANAL', 'PK_BOLETA_SEMANAL_RECIBAS');
    }
}
