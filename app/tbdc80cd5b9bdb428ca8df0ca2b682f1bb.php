<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * tb_tipo_recursos - tb_tipo_recursos.
 */
class tbdc80cd5b9bdb428ca8df0ca2b682f1bb extends \Eloquent
{
    protected $table = 'tb_tipo_recursos';
    protected $primaryKey = 'PK_TIPO_RECURSO';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_TIPO_ESTIMULO - FK_TIPO_ESTIMULO */
    public function flf55bebcf8fc64f6c9e4580aed1a40315()
    {
        return $this->belongsTo('App\tb40ccdb05a4444e9ea4f733c5026e8296', 'FK_TIPO_ESTIMULO', 'PK_TIPO_ESTIMULOS');
    }
}
