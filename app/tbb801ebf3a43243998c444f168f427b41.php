<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_TRASPASOS - Tabla de traspasos.
 */
class tbb801ebf3a43243998c444f168f427b41 extends \Eloquent
{
    protected $table = 'tb_traspasos';
    protected $primaryKey = 'PK_TRASPASOS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_CHOFER - FK_CHOFER */
    public function fl615440e38a6c4a38849fcecfed5ab0d6()
    {
        return $this->belongsTo('App\tb2e10d438cf3d420b98ad8fadbcb0d857', 'FK_CHOFER', 'PK_CHOFER');
    }

    /* FK_ESTATUS - Relación con tabla estatus */
    public function fl9b830453d863472bbff7d88d913d5318()
    {
        return $this->belongsTo('App\tbfefd6b763aac4a4388a89a4755e5d254', 'FK_ESTATUS', 'PK_ESTATUS');
    }

    /* FK_MISMO_TRASPASO - Relación Mismo Traspaso */
    public function fl0b0ac3a67c5e4b3d951aae676756dec2()
    {
        return $this->belongsTo('App\tbb801ebf3a43243998c444f168f427b41', 'FK_MISMO_TRASPASO', 'PK_TRASPASOS');
    }

    /* FK_USUARIO - FK_USUARIO */
    public function fl28f6720d1c114b85ba3a7c2bfa3e7e73()
    {
        return $this->belongsTo('App\tbe0bd2456a7c8443290015bd6353abcdb', 'FK_USUARIO', 'PK_USUARIOS');
    }
}
