<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar Region - Recuperar Region.
 */
class tbc55363199cd64a5888f4f137f1d94426 extends \Eloquent
{
    protected $appends = ['fl547044ed2e314e8abe8913c8104b8426', 'fl72a9a1f6a5114b8cae9e3654727f800e', 'fl0b2cd5b8287844eaa0d9e3de129b8094', 'flf0b586e755884ee3884c409ca5a48401'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4'];

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
