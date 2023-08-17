<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Tipo Estatus - Modelador Tipo Estatus.
 */
class tbbf50d34494904519a21c959221f160a6 extends \Eloquent
{
    protected $appends = ['fl5c80a7c9e7aa4b3aa70ed47b3d653877', 'fle81f4e1bada84282af601af5a0c3a927'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - Nombre tipo estatus */
    public function getFl5c80a7c9e7aa4b3aa70ed47b3d653877Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_TIPO_ESTATUS - Llave primaria tipo estatus */
    public function getFle81f4e1bada84282af601af5a0c3a927Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
