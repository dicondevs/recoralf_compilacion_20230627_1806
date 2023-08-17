<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de Menu - Lista de Menu.
 */
class tb0c6c6f77495247fa889579c85be10e7e extends \Eloquent
{
    protected $appends = ['fld5cc19ea9c9d4277a74c8f260d29cc25', 'fl62a454af701541e9a08ecdda674f51e2'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFld5cc19ea9c9d4277a74c8f260d29cc25Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_MENU - PK_MENU */
    public function getFl62a454af701541e9a08ecdda674f51e2Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
