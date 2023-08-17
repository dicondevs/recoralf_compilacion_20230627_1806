<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Centros de Trabajo Recibas - Modelador Centros de Trabajo Recibas.
 */
class tb8a72f29cb88a4c25b11f1b5da7be1efe extends \Eloquent
{
    protected $appends = ['fl0a754e10e6774d44a950add92e1d71e4', 'fl6db6fe0700a2492ab254232484650e02'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0a754e10e6774d44a950add92e1d71e4Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_CENTROS_TRABAJO - PK_CENTROS_TRABAJO */
    public function getFl6db6fe0700a2492ab254232484650e02Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
