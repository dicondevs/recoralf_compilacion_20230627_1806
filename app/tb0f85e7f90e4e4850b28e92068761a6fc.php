<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Atras Cenrto de trabajo - Atras Cenrto de trabajo.
 */
class tb0f85e7f90e4e4850b28e92068761a6fc extends \Eloquent
{
    protected $appends = ['fl43420ddb4df54c11b76a6c9ab32c87ee'];
    protected $hidden = ['C1'];

    /* FK_ESTADO - FK_ESTADO */
    public function getFl43420ddb4df54c11b76a6c9ab32c87eeAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }
}
