<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar tipo Estimulos - Recuperar tipo Estimulos.
 */
class tbc9fa352996814827b5606b0dd1200c92 extends \Eloquent
{
    protected $appends = ['fl8580bec5d10c4578a5123b0c77f37789', 'fl09ae781ab72c4e918cbeb8da0548516a', 'fl281cd4576d804ee5bf8ed254ead296c7', 'fleac82a0af50e473aaa9b60f01983e866'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4'];

    /* FL_ACTIVO_INACTIVO - FL_ACTIVO_INACTIVO */
    public function getFl8580bec5d10c4578a5123b0c77f37789Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl09ae781ab72c4e918cbeb8da0548516aAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_PRECIO_ESTIMULO - FL_PRECIO_ESTIMULO */
    public function getFl281cd4576d804ee5bf8ed254ead296c7Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* PK_TIPO_ESTIMULOS - PK_TIPO_ESTIMULOS */
    public function getFleac82a0af50e473aaa9b60f01983e866Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
