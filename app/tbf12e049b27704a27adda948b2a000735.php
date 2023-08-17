<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de Regiones - Lista de Regiones.
 */
class tbf12e049b27704a27adda948b2a000735 extends \Eloquent
{
    protected $appends = ['fld394731f099040049a78c198bbf77164', 'fl0221cdfef57f4507bf935c47cf2c4925', 'fl547044ed2e314e8abe8913c8104b8426', 'fl72a9a1f6a5114b8cae9e3654727f800e', 'fl0b2cd5b8287844eaa0d9e3de129b8094', 'fl095e6c9af31e4956aeaaa5ce9296bf5c', 'flf0b586e755884ee3884c409ca5a48401'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7'];

    /* Actico/incativo - Actico/incativo */
    public function getFld394731f099040049a78c198bbf77164Attribute($value)
    {
        if (true == $this->getFl72a9a1f6a5114b8cae9e3654727f800eAttribute('')) {
            return $this->getFl0221cdfef57f4507bf935c47cf2c4925Attribute('');
        }

        if (false == $this->getFl72a9a1f6a5114b8cae9e3654727f800eAttribute('')) {
            return $this->getFl095e6c9af31e4956aeaaa5ce9296bf5cAttribute('');
        }

        return '';
    }

    /* activo - activo */
    public function getFl0221cdfef57f4507bf935c47cf2c4925Attribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:#00bcd4;"></i>';
    }

    /* FK_NACIONAL - FK_NACIONAL */
    public function getFl547044ed2e314e8abe8913c8104b8426Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_ACTIVO_INACTIVO - FL_ACTIVO_INACTIVO */
    public function getFl72a9a1f6a5114b8cae9e3654727f800eAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0b2cd5b8287844eaa0d9e3de129b8094Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* Inactivo - Inactivo */
    public function getFl095e6c9af31e4956aeaaa5ce9296bf5cAttribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:red;"></i>';
    }

    /* PK_REGION - PK_REGION */
    public function getFlf0b586e755884ee3884c409ca5a48401Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
