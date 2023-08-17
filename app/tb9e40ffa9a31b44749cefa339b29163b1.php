<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de codigo de productores - Lista de codigo de productores.
 */
class tb9e40ffa9a31b44749cefa339b29163b1 extends \Eloquent
{
    protected $appends = ['fl69ef67efd7944f6db45ae3dc7c9b2c59', 'flb05d0130e68143119c01dccaaf4f0d64'];
    protected $hidden = ['C1', 'C2'];

    /* FL_CODIGO_CONTABLE - FL_CODIGO_CONTABLE */
    public function getFl69ef67efd7944f6db45ae3dc7c9b2c59Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_PRODUCTOR - PK_PRODUCTOR */
    public function getFlb05d0130e68143119c01dccaaf4f0d64Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
