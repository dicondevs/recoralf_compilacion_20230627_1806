<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * tb_historial_precios - tb_historial_precios.
 */
class tbea6e3a9d47374aa4b5a40f4373b7212c extends \Eloquent
{
    protected $table = 'tb_historial_precios';
    protected $primaryKey = 'PK_HISTORIAL';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_ESTATUS - FK_ESTATUS */
    public function fl9b5a031869424ec1bf5c9f4a0c200478()
    {
        return $this->belongsTo('App\tbfefd6b763aac4a4388a89a4755e5d254', 'FK_ESTATUS', 'PK_ESTATUS');
    }

    /* FK_PRECIO - FK_PRECIO */
    public function fl97a4114557ac4e41a77e8c3e95308aa8()
    {
        return $this->belongsTo('App\tb248f686f823e42df974e2f39de7ea3e0', 'FK_PRECIO', 'PK_PRECIOS');
    }

    /* FK_USUARIO - FK_USUARIO */
    public function fl38e6a5c4b5714b9b9699f8b351d66251()
    {
        return $this->belongsTo('App\tbe0bd2456a7c8443290015bd6353abcdb', 'FK_USUARIO', 'PK_USUARIOS');
    }
}
