<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de perfil - Lista de perfil.
 */
class tb43cb5f4c6f0143c5a135334d93bebb71 extends \Eloquent
{
    protected $appends = ['fl0c7586107c9443f8be389366c46668c2', 'fl070afcffd48244e69022d4797ca75733'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0c7586107c9443f8be389366c46668c2Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_PERFIL - PK_PERFIL */
    public function getFl070afcffd48244e69022d4797ca75733Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
