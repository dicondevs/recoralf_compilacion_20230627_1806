<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar Nacional - Recuperar Nacional.
 */
class tbad06971b3da64ec9b20e4320a907ba0c extends \Eloquent
{
    protected $appends = ['fla338e578376d458385de663bfa68b064', 'fl35d066909512415983cbadb7df2d4dee'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFla338e578376d458385de663bfa68b064Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_NACIONAL - PK_NACIONAL */
    public function getFl35d066909512415983cbadb7df2d4deeAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
