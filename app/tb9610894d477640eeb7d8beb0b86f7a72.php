<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador de estados - Modelador de estados.
 */
class tb9610894d477640eeb7d8beb0b86f7a72 extends \Eloquent
{
    protected $appends = ['flaad0eb29cc58439abf6ef7b56863b2a2', 'fld95a933caf484a0781e006092fedeecc', 'fl50a776d322e147f58cef1065444d4994', 'fl0179af07461247b1b44e2433c3376cb4', 'flea17abf4c1ee4f398e98e7007ea45675', 'flffbdabcb22584bf9a786b55c0aa13e59', 'fl3a4a429aa1554af1ad09550527c32990'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7'];

    /* activo - activo */
    public function getFlaad0eb29cc58439abf6ef7b56863b2a2Attribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:#00bcd4;"></i>';
    }

    /* Activo/Inactivo - Activo/Inactivo */
    public function getFld95a933caf484a0781e006092fedeeccAttribute($value)
    {
        if (true == $this->getFl0179af07461247b1b44e2433c3376cb4Attribute('')) {
            return $this->getFlaad0eb29cc58439abf6ef7b56863b2a2Attribute('');
        }

        if (false == $this->getFl0179af07461247b1b44e2433c3376cb4Attribute('')) {
            return $this->getFlffbdabcb22584bf9a786b55c0aa13e59Attribute('');
        }

        return '';
    }

    /* FK_REGION - FK_REGION */
    public function getFl50a776d322e147f58cef1065444d4994Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_ACTIVO_INACTIVO - FL_ACTIVO_INACTIVO */
    public function getFl0179af07461247b1b44e2433c3376cb4Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFlea17abf4c1ee4f398e98e7007ea45675Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* Inactivo - Inactivo */
    public function getFlffbdabcb22584bf9a786b55c0aa13e59Attribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:red;"></i>';
    }

    /* PK_ESTADOS - PK_ESTADOS */
    public function getFl3a4a429aa1554af1ad09550527c32990Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
