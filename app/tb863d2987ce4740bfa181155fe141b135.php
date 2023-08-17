<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_TIPO_DOCUMENTO - TB_TIPO_DOCUMENTO.
 */
class tb863d2987ce4740bfa181155fe141b135 extends \Eloquent
{
    protected $table = 'tb_tipo_documento';
    protected $primaryKey = 'PK_TIPO_DOCUMENTO';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_APARTADO - FK_APARTADO */
    public function fl60df046733aa4cbb812ad36c4c51b7cc()
    {
        return $this->belongsTo('App\tbb5cd2dda326848c4a5d679784b2cc2cf', 'FK_APARTADO', 'PK_APARTADO');
    }
}
