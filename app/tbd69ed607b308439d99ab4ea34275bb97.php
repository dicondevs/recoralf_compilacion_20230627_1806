<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Centros de Acopio Recibas - Modelador Centros de Acopio Recibas.
 */
class tbd69ed607b308439d99ab4ea34275bb97 extends \Eloquent
{
    protected $appends = ['fl303c6e28751649869e4607e210c5a9e5', 'fl79f8a6b59f374fdcbbd1670489944abb', 'fl97b9f7f523f14e849d80a350e2068e59', 'flbba5c31ef533494dbb886a074cfafa7a'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4'];

    /* FK_CENTROS_TRABAJO - FK_CENTROS_TRABAJO */
    public function getFl303c6e28751649869e4607e210c5a9e5Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_CLAVE - FL_CLAVE */
    public function getFl79f8a6b59f374fdcbbd1670489944abbAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl97b9f7f523f14e849d80a350e2068e59Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* PK_CENTRO_ACOPIO - PK_CENTRO_ACOPIO */
    public function getFlbba5c31ef533494dbb886a074cfafa7aAttribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
