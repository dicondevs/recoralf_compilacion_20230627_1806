<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Lista Tipo Estimulo - Modelador Lista Tipo Estimulo.
 */
class tbff0d208e1b5f4df0b5c17a6a88cefa73 extends \Eloquent
{
    protected $appends = ['fl54b1b98c44594a9ba126476057b9ffbf', 'fl366f83447ea14ee5ae3a76209013750a', 'fl8580bec5d10c4578a5123b0c77f37789', 'fl09ae781ab72c4e918cbeb8da0548516a', 'fl281cd4576d804ee5bf8ed254ead296c7', 'fl151ac24872f140d6a34fae9bba0d4083', 'fleac82a0af50e473aaa9b60f01983e866'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7'];

    /* Activo - Activo */
    public function getFl54b1b98c44594a9ba126476057b9ffbfAttribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:#00bcd4;"></i>';
    }

    /* Activo/Inactivo - Activo/Inactivo */
    public function getFl366f83447ea14ee5ae3a76209013750aAttribute($value)
    {
        if (true == $this->getFl8580bec5d10c4578a5123b0c77f37789Attribute('')) {
            return $this->getFl54b1b98c44594a9ba126476057b9ffbfAttribute('');
        }

        if (false == $this->getFl8580bec5d10c4578a5123b0c77f37789Attribute('')) {
            return $this->getFl151ac24872f140d6a34fae9bba0d4083Attribute('');
        }

        return '';
    }

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

    /* Inactivo - Inactivo */
    public function getFl151ac24872f140d6a34fae9bba0d4083Attribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:red;"></i>';
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
