<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_ESTATUS - TB_ESTATUS.
 */
class tbfefd6b763aac4a4388a89a4755e5d254 extends \Eloquent
{
    protected $table = 'tb_estatus';
    protected $primaryKey = 'PK_ESTATUS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_TIPO_ESTATUS - Relación tipo estatus */
    public function fl6a99529abdf14407a92aeb3d43824f25()
    {
        return $this->belongsTo('App\tb9a5d6a884a5a45fe95080b82d6cb5b90', 'FK_TIPO_ESTATUS', 'PK_TIPO_ESTATUS');
    }
}
