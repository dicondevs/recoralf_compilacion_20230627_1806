<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * sp_pefil_sistema - sp_pefil_sistema.
 */
class tb26750564b2564f5e89ff361999464a6b extends \Eloquent
{
    protected $appends = ['fl0c7586107c9443f8be389366c46668c2'];
    protected $hidden = ['C1'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0c7586107c9443f8be389366c46668c2Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }
}
