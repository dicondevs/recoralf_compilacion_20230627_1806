<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:21
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_BOLETAS_SEMANALES - TB_BOLETAS_SEMANALES.
 */
class tb61745cc261fc473d90545e7ae39af788 extends \Eloquent
{
    protected $table = 'tb_boletas_semanales';
    protected $primaryKey = 'PK_BOLETA_SEMANAL_RECIBAS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_PRODUCTOR - FK_PRODUCTOR */
    public function fl80b5c2b0024a41429bde78afc996dc8a()
    {
        return $this->belongsTo('App\tb267831275fef4ffaae652b1d4a04b208', 'FK_PRODUCTOR', 'PK_PRODUCTOR');
    }

    /* FK_SEMANA - FK_SEMANA */
    public function flb020331f0292496397f3fefe05eb8086()
    {
        return $this->belongsTo('App\tb5fe6fec8e3d0400186be9324e445fa75', 'FK_SEMANA', 'PK_SEMANAS');
    }

    /* FK_USUARIO - FK_USUARIO */
    public function fla29aa265f3d94be1a918b2bb3382ba41()
    {
        return $this->belongsTo('App\tbe0bd2456a7c8443290015bd6353abcdb', 'FK_USUARIO', 'PK_USUARIOS');
    }
}
