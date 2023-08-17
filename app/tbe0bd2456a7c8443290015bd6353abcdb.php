<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_USUARIOS - TB_USUARIOS.
 */
class tbe0bd2456a7c8443290015bd6353abcdb extends \Eloquent
{
    protected $table = 'tb_usuarios';
    protected $primaryKey = 'PK_USUARIOS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_CENTRO_ACOPIO - FK_CENTRO_ACOPIO */
    public function fl99267e59a3c94bf5967e19f1483cd224()
    {
        return $this->belongsTo('App\tbcae1c2cfbfd74b5fbdd2f84317339030', 'FK_CENTRO_ACOPIO', 'PK_CENTRO_ACOPIO');
    }

    /* FK_CENTROS_TRABAJO - PK_CENTROS_TRABAJO */
    public function fla4024b8e6e92474895ba5ae0273fa54c()
    {
        return $this->belongsTo('App\tb44e4f4d9d8324792aa7571d8772a0830', 'FK_CENTROS_TRABAJO', 'PK_CENTROS_TRABAJO');
    }

    /* FK_PERFIL - FK_PERFIL */
    public function flf05043337793416eb1386732572b31ca()
    {
        return $this->belongsTo('App\tb29c3576675124e9a946c62c945744f16', 'FK_PERFIL', 'PK_PERFIL');
    }
}
