<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * sp_c_a_users - Procedimiento Almacenado de Centros de Acopio.
 */
class tb02a574fe1ace4e7fa4d3dbd3827bea60 extends \Eloquent
{
    protected $appends = ['flcb6074d137d34615807b330f8a90bcae', 'fld6ec044255824ee89f9baf63b219b766'];
    protected $hidden = ['C1', 'C2'];

    /* NOMBRE - NOMBRE */
    public function getFlcb6074d137d34615807b330f8a90bcaeAttribute($value)
    {
        return $this->NOMBRE;
    }

    /* PK - PK */
    public function getFld6ec044255824ee89f9baf63b219b766Attribute($value)
    {
        return $this->PK;
    }
}
