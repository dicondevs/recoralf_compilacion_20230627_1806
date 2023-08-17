<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar Centros de trabajo - Recuperar Centros de trabajo.
 */
class tb3f56423cf125496ead92782f861022be extends \Eloquent
{
    protected $appends = ['fl43420ddb4df54c11b76a6c9ab32c87ee', 'flccc619599f854c5199ee6d0ae5bc1309', 'fl5151dc8c007646d9855ce9c8db749593', 'flbea0930a9f054dae99d1d7f5d23bb3f3', 'fl67977895f00848fcb842421df33eda5d', 'fl0a754e10e6774d44a950add92e1d71e4', 'fl6db6fe0700a2492ab254232484650e02'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7'];

    /* FK_ESTADO - FK_ESTADO */
    public function getFl43420ddb4df54c11b76a6c9ab32c87eeAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FK_USUARIO - FK_USUARIO */
    public function getFlccc619599f854c5199ee6d0ae5bc1309Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_ABREV - FL_ABREV */
    public function getFl5151dc8c007646d9855ce9c8db749593Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FL_ACTIVO_INACTIVO - FL_ACTIVO_INACTIVO */
    public function getFlbea0930a9f054dae99d1d7f5d23bb3f3Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_CENTROS_COSTO_CT - FL_CENTROS_COSTO_CT */
    public function getFl67977895f00848fcb842421df33eda5dAttribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0a754e10e6774d44a950add92e1d71e4Attribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* PK_CENTROS_TRABAJO - PK_CENTROS_TRABAJO */
    public function getFl6db6fe0700a2492ab254232484650e02Attribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }
}
