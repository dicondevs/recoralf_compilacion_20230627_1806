<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de Lugar - Lista de Lugar.
 */
class tba64061d55b1c4e4883871fdf7ed1dfea extends \Eloquent
{
    protected $appends = ['flea17abf4c1ee4f398e98e7007ea45675', 'fl3a4a429aa1554af1ad09550527c32990'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFlea17abf4c1ee4f398e98e7007ea45675Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_ESTADOS - PK_ESTADOS */
    public function getFl3a4a429aa1554af1ad09550527c32990Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
