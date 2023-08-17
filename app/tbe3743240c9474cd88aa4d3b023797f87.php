<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador menu perfil - Modelador menu perfil.
 */
class tbe3743240c9474cd88aa4d3b023797f87 extends \Eloquent
{
    protected $appends = ['fla58c0435f5d3420399ecf4e8f2cf55f1', 'fld5cc19ea9c9d4277a74c8f260d29cc25'];
    protected $hidden = ['C1', 'C2'];

    /* FL_ICON - FL_ICON */
    public function getFla58c0435f5d3420399ecf4e8f2cf55f1Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFld5cc19ea9c9d4277a74c8f260d29cc25Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
