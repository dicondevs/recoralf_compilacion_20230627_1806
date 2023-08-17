<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Centros de Acopio - Modelador Centros de Acopio.
 */
class tb86dc8c3c9de1404ba4df78874b48bd08 extends \Eloquent
{
    protected $appends = ['fl3e48f9d67dbf4bd283b75683152f9b78', 'fl11608a2747854c99899117ec042f68e3', 'fl303c6e28751649869e4607e210c5a9e5', 'fld0822def11204e39b3ecc441b47d0b62', 'fl8c5acd56f1004790895a95fb01af5aa1', 'fl7e51e013f8c84994a48095dcbd60c29a', 'fl9fc56e264c4c4625b76c4ad6ee08d457', 'fl79f8a6b59f374fdcbbd1670489944abb', 'fl65f8c05aa971470492b09d7b5e956a09', 'flf7732dd752844700a767ecd9f6b81208', 'fl5bfd6daa269544cb837f277aa3a98c2c', 'fl97b9f7f523f14e849d80a350e2068e59', 'fl0dce585557eb464895ef7636a61301cc', 'flbba5c31ef533494dbb886a074cfafa7a'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14'];

    /* Activo - Activo */
    public function getFl3e48f9d67dbf4bd283b75683152f9b78Attribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:#00bcd4;"></i>';
    }

    /* Activo/Inactivo - Activo/Inactivo */
    public function getFl11608a2747854c99899117ec042f68e3Attribute($value)
    {
        if (true == $this->getFl9fc56e264c4c4625b76c4ad6ee08d457Attribute('')) {
            return $this->getFl3e48f9d67dbf4bd283b75683152f9b78Attribute('');
        }

        if (false == $this->getFl9fc56e264c4c4625b76c4ad6ee08d457Attribute('')) {
            return $this->getFl0dce585557eb464895ef7636a61301ccAttribute('');
        }

        return '';
    }

    /* FK_CENTROS_TRABAJO - FK_CENTROS_TRABAJO */
    public function getFl303c6e28751649869e4607e210c5a9e5Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FK_ESTADO - FK_ESTADO */
    public function getFld0822def11204e39b3ecc441b47d0b62Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FK_LOCALIDAD - FK_LOCALIDAD */
    public function getFl8c5acd56f1004790895a95fb01af5aa1Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FK_MUNICIPIO - FK_MUNICIPIO */
    public function getFl7e51e013f8c84994a48095dcbd60c29aAttribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_ACTIVO_INACTIVO - FL_ACTIVO_INACTIVO */
    public function getFl9fc56e264c4c4625b76c4ad6ee08d457Attribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FL_CLAVE - FL_CLAVE */
    public function getFl79f8a6b59f374fdcbbd1670489944abbAttribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* FL_DIRECCION - FL_DIRECCION */
    public function getFl65f8c05aa971470492b09d7b5e956a09Attribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }

    /* FL_LATITUD - FL_LATITUD */
    public function getFlf7732dd752844700a767ecd9f6b81208Attribute($value)
    {
        if (null == $this->C8) {
            return $this->c8;
        } else {
            return $this->C8;
        }
    }

    /* FL_LONGITUD - FL_LONGITUD */
    public function getFl5bfd6daa269544cb837f277aa3a98c2cAttribute($value)
    {
        if (null == $this->C9) {
            return $this->c9;
        } else {
            return $this->C9;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl97b9f7f523f14e849d80a350e2068e59Attribute($value)
    {
        if (null == $this->C10) {
            return $this->c10;
        } else {
            return $this->C10;
        }
    }

    /* Inactivo - Inactivo */
    public function getFl0dce585557eb464895ef7636a61301ccAttribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:red;"></i>';
    }

    /* PK_CENTRO_ACOPIO - PK_CENTRO_ACOPIO */
    public function getFlbba5c31ef533494dbb886a074cfafa7aAttribute($value)
    {
        if (null == $this->C11) {
            return $this->c11;
        } else {
            return $this->C11;
        }
    }
}
