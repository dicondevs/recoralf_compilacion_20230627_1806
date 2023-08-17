<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de Centros de Acopio - Lista de Centros de Acopio.
 */
class tbae8e9cfbd4174125aa0ae9597c5ded2f extends \Eloquent
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
