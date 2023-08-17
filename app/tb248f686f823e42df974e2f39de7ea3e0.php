<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TB_PRECIOS - TABLA DE PRECIOS.
 */
class tb248f686f823e42df974e2f39de7ea3e0 extends \Eloquent
{
    protected $table = 'tb_precios';
    protected $primaryKey = 'PK_PRECIOS';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_CENTRO_ACOPIO - FK_CENTRO_ACOPIO */
    public function fl2b1f09dc49bc4cf2a3c2e84cabaaffe2()
    {
        return $this->belongsTo('App\tbcae1c2cfbfd74b5fbdd2f84317339030', 'FK_CENTRO_ACOPIO', 'PK_CENTRO_ACOPIO');
    }

    /* FK_CENTRO_TRABAJO - FK_CENTRO_TRABAJO */
    public function fl5b8b1c02ce3444c69e0ed138c773b863()
    {
        return $this->belongsTo('App\tb44e4f4d9d8324792aa7571d8772a0830', 'FK_CENTRO_TRABAJO', 'PK_CENTROS_TRABAJO');
    }

    /* FK_ESTADO - FK_ESTADO */
    public function fl951376550b5a424cb03bf8650ebe2ac6()
    {
        return $this->belongsTo('App\tba35a009702d243a19e9c947d8add3f19', 'FK_ESTADO', 'PK_ESTADOS');
    }

    /* FK_ESTIMULOS - FK_ESTIMULOS */
    public function fle1115e9b80d64e9fb050ad47b8613b86()
    {
        return $this->belongsTo('App\tb40ccdb05a4444e9ea4f733c5026e8296', 'FK_ESTIMULOS', 'PK_TIPO_ESTIMULOS');
    }

    /* FK_NACIONAL - FK_NACIONAL */
    public function fl1b6cde75ce4b4deca97427fec50c4756()
    {
        return $this->belongsTo('App\tb6731ce348d8340e3aaef57f8437a503b', 'FK_NACIONAL', 'PK_NACIONAL');
    }

    /* FK_REGIONAL - FK_REGIONAL */
    public function fl3bdfb994730f4428b741a60beccd2aa1()
    {
        return $this->belongsTo('App\tb780c854ccf53401995b394fa3d882439', 'FK_REGIONAL', 'PK_REGION');
    }

    /* FK_USUARIO - FK_USUARIO */
    public function fl7eda56acd2f345ce9ad4a5c006df5bc8()
    {
        return $this->belongsTo('App\tbe0bd2456a7c8443290015bd6353abcdb', 'FK_USUARIO', 'PK_USUARIOS');
    }
}
