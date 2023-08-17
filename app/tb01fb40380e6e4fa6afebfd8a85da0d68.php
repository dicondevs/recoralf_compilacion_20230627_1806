<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_DOCUMENTOS - TB_DOCUMENTOS.
 */
class tb01fb40380e6e4fa6afebfd8a85da0d68 extends \Eloquent
{
    protected $table = 'tb_documentos';
    protected $primaryKey = 'PK_DOCUMENTOS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_PRODUCTOR - FK_PRODUCTOR */
    public function flfcfa18d9c55641c8bf33558e1be79660()
    {
        return $this->belongsTo('App\tb267831275fef4ffaae652b1d4a04b208', 'FK_PRODUCTOR', 'PK_PRODUCTOR');
    }

    /* FK_TIPO_DOCUMENTO - FK_TIPO_DOCUMENTO */
    public function fl836de7e8134445989ffa3fe68a24099f()
    {
        return $this->belongsTo('App\tb863d2987ce4740bfa181155fe141b135', 'FL_TIPO', 'PK_TIPO_DOCUMENTO');
    }
}
