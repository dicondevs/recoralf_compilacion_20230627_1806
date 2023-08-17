<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_PRODUCTORES - TB_PRODUCTORES.
 */
class tb267831275fef4ffaae652b1d4a04b208 extends \Eloquent
{
    protected $table = 'tb_productores';
    protected $primaryKey = 'PK_PRODUCTOR';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_BANCO - FK_BANCO */
    public function fl5ed9dfd56ce1454b84875c25b6b6ec40()
    {
        return $this->belongsTo('App\tbc268762576e74ca88e8dcb8827459245', 'FK_BANCO', 'PK_BANCO');
    }

    /* FK_ESTADO - FK_ESTADO */
    public function fl54a65d834b2948409e50123d7ba5ad07()
    {
        return $this->belongsTo('App\tba35a009702d243a19e9c947d8add3f19', 'FK_ESTADO', 'PK_ESTADOS');
    }

    /* FK_ESTATUS - FK_ESTATUS */
    public function fle0ddb78249054beca9bb018820cb4162()
    {
        return $this->belongsTo('App\tbfefd6b763aac4a4388a89a4755e5d254', 'FK_ESTATUS', 'PK_ESTATUS');
    }
}
