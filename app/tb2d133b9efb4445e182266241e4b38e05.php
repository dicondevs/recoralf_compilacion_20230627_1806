<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista Localidad - Lista Localidad.
 */
class tb2d133b9efb4445e182266241e4b38e05 extends \Eloquent
{
    protected $appends = ['fle63c198e4d4449d3ba23cab8bfc5118f', 'flef32d9cc3eea4d4c8e9e746f00f0daa6'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFle63c198e4d4449d3ba23cab8bfc5118fAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_LOCALIDAD - PK_LOCALIDAD */
    public function getFlef32d9cc3eea4d4c8e9e746f00f0daa6Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
