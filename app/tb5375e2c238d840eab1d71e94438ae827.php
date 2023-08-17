<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de Usuaros por Centro de Trabajo - Lista de Usuaros por Centro de Trabajo.
 */
class tb5375e2c238d840eab1d71e94438ae827 extends \Eloquent
{
    protected $appends = ['fl4537932c1f794df49804babd6c0bb185', 'fl679d1ef43a6a4a42b62ba7115e62711c', 'flce62468d82f44a70897635bbf9c04270', 'flb8a75a19996943eb8286f6ad51f21386', 'fl95d4a7a0601f4f57a7e4789811069693'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5'];

    /* FL_APELLIDO_MATERNO - FL_APELLIDO_MATERNO */
    public function getFl4537932c1f794df49804babd6c0bb185Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_APELLIDO_PATERNO - FL_APELLIDO_PATERNO */
    public function getFl679d1ef43a6a4a42b62ba7115e62711cAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFlce62468d82f44a70897635bbf9c04270Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* Nombre Completo - Nombre Completo */
    public function getFlb8a75a19996943eb8286f6ad51f21386Attribute($value)
    {
        return ''.$this->getFlce62468d82f44a70897635bbf9c04270Attribute('').' '.$this->getFl679d1ef43a6a4a42b62ba7115e62711cAttribute('').' '.$this->getFl4537932c1f794df49804babd6c0bb185Attribute('').'';
    }

    /* PK_USUARIOS - PK_USUARIOS */
    public function getFl95d4a7a0601f4f57a7e4789811069693Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
