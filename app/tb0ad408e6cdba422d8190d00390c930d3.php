<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista Centro Acopio User - Lista Centro Acopio User.
 */
class tb0ad408e6cdba422d8190d00390c930d3 extends \Eloquent
{
    protected $appends = ['fl97b9f7f523f14e849d80a350e2068e59', 'flbba5c31ef533494dbb886a074cfafa7a'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl97b9f7f523f14e849d80a350e2068e59Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_CENTRO_ACOPIO - PK_CENTRO_ACOPIO */
    public function getFlbba5c31ef533494dbb886a074cfafa7aAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
