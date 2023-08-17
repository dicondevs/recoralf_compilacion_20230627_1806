<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Lista Semanas Recibas - Modelador Lista Semanas Recibas.
 */
class tbf3b6d1a392b14ca986fa6ded0a35c490 extends \Eloquent
{
    protected $appends = ['flaf87761a57bb46919b3f6c3752d5746c', 'fl9994a67fdf6e4b77a7e66311765e434c', 'fl6836cc348e834ea3a63e6401f99ea491', 'fl54a19e79999945e2b49a8a078915989a'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4'];

    /* FL_FECHA_FIN - FL_FECHA_FIN */
    public function getFlaf87761a57bb46919b3f6c3752d5746cAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_FECHA_INICIO - FL_FECHA_INICIO */
    public function getFl9994a67fdf6e4b77a7e66311765e434cAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl6836cc348e834ea3a63e6401f99ea491Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* PK_SEMANAS - PK_SEMANAS */
    public function getFl54a19e79999945e2b49a8a078915989aAttribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
