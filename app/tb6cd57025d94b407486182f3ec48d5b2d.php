<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador de regiones - Modelador de regiones.
 */
class tb6cd57025d94b407486182f3ec48d5b2d extends \Eloquent
{
    protected $appends = ['fl547044ed2e314e8abe8913c8104b8426', 'fl0b2cd5b8287844eaa0d9e3de129b8094', 'flf0b586e755884ee3884c409ca5a48401'];
    protected $hidden = ['C1', 'C2', 'C3'];

    /* FK_NACIONAL - FK_NACIONAL */
    public function getFl547044ed2e314e8abe8913c8104b8426Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0b2cd5b8287844eaa0d9e3de129b8094Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* PK_REGION - PK_REGION */
    public function getFlf0b586e755884ee3884c409ca5a48401Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }
}
