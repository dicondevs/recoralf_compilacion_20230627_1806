<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar usuarios - Recuperar usuarios.
 */
class tb7f8b55907bfd48d7b91d6640c223b0e9 extends \Eloquent
{
    protected $appends = ['fld4ab9f9372e54419aea0eca8443a72a1', 'fl1fe3de980a284ed48c484641105bbd6e', 'fl4934b3936fd643618000d802c08cb55a', 'fl0699852d5b654964bf7ea982f2dfa232', 'fle6727ebe2150466b91978e84cab5fad8', 'fl4537932c1f794df49804babd6c0bb185', 'fl679d1ef43a6a4a42b62ba7115e62711c', 'flc37a71d96b2145da8cb51576636b5d80', 'fla156a2a7542846d69d386422c990f8ff', 'flce62468d82f44a70897635bbf9c04270', 'fl95d4a7a0601f4f57a7e4789811069693'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11'];

    /* Centros acopio - Centros acopio */
    public function getFld4ab9f9372e54419aea0eca8443a72a1Attribute($value)
    {
        return tb62998425b7114a85a63e84519fe2708a::whereRaw('`FK_USUARIOS`='.$this->getFl95d4a7a0601f4f57a7e4789811069693Attribute(''))->get();
    }

    /* FK_CENTRO_ACOPIO - FK_CENTRO_ACOPIO */
    public function getFl1fe3de980a284ed48c484641105bbd6eAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FK_CENTROS_TRABAJO - FK_CENTROS_TRABAJO */
    public function getFl4934b3936fd643618000d802c08cb55aAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FK_PERFIL - FK_PERFIL */
    public function getFl0699852d5b654964bf7ea982f2dfa232Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FL_ACTIVO_INACTIVO - FL_ACTIVO_INACTIVO */
    public function getFle6727ebe2150466b91978e84cab5fad8Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_APELLIDO_MATERNO - FL_APELLIDO_MATERNO */
    public function getFl4537932c1f794df49804babd6c0bb185Attribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FL_APELLIDO_PATERNO - FL_APELLIDO_PATERNO */
    public function getFl679d1ef43a6a4a42b62ba7115e62711cAttribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* FL_CONTRASENA - FL_CONTRASENA */
    public function getFlc37a71d96b2145da8cb51576636b5d80Attribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }

    /* FL_EMAIL - FL_EMAIL */
    public function getFla156a2a7542846d69d386422c990f8ffAttribute($value)
    {
        if (null == $this->C8) {
            return $this->c8;
        } else {
            return $this->C8;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFlce62468d82f44a70897635bbf9c04270Attribute($value)
    {
        if (null == $this->C9) {
            return $this->c9;
        } else {
            return $this->C9;
        }
    }

    /* PK_USUARIOS - PK_USUARIOS */
    public function getFl95d4a7a0601f4f57a7e4789811069693Attribute($value)
    {
        if (null == $this->C10) {
            return $this->c10;
        } else {
            return $this->C10;
        }
    }
}
