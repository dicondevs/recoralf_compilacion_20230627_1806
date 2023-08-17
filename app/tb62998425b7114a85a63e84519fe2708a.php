<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TR_USUARIOS_CENTROSACOPIO - TR_USUARIOS_CENTROSACOPIO.
 */
class tb62998425b7114a85a63e84519fe2708a extends \Eloquent
{
    protected $table = 'tr_usuario_centrosacopio';
    protected $primaryKey = 'PK_USUARIO_CENTROSACOPIO';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_CENTROS_ACOPIO - FK_CENTROS_ACOPIO */
    public function flfc45ef07c5f94501bdf0a8e2bdbfef26()
    {
        return $this->belongsTo('App\tbcae1c2cfbfd74b5fbdd2f84317339030', 'FK_CENTROS_ACOPIO', 'PK_CENTRO_ACOPIO');
    }

    /* FK_USUARIOS - FK_USUARIOS */
    public function fle95614a9f8764bfba30910361b7957df()
    {
        return $this->belongsTo('App\tbe0bd2456a7c8443290015bd6353abcdb', 'FK_USUARIOS', 'PK_USUARIOS');
    }
}
