<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar Centro de trabajo - Recuperar Centro de trabajo.
 */
class tb3b55399f2c6a4069a74d431df07f5d91 extends \Eloquent
{
    protected $appends = ['fl43420ddb4df54c11b76a6c9ab32c87ee', 'fl5151dc8c007646d9855ce9c8db749593', 'fl0a754e10e6774d44a950add92e1d71e4', 'fl6db6fe0700a2492ab254232484650e02'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4'];

    /* FK_ESTADO - FK_ESTADO */
    public function getFl43420ddb4df54c11b76a6c9ab32c87eeAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_ABREV - FL_ABREV */
    public function getFl5151dc8c007646d9855ce9c8db749593Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0a754e10e6774d44a950add92e1d71e4Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* PK_CENTROS_TRABAJO - PK_CENTROS_TRABAJO */
    public function getFl6db6fe0700a2492ab254232484650e02Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
