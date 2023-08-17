<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de productores - Lista de productores.
 */
class tbe96769148d30486ebd47bda320d82ff1 extends \Eloquent
{
    protected $appends = ['fl903b434508704b548d31e82d5f4baa6a', 'fl62703f20782248a4bd15d417af5a3886', 'fla4cb215ee6e846c7aaafc80b6f2bcef4', 'flc35b1ba3716043068cad00d9f821d1e9', 'flb05d0130e68143119c01dccaaf4f0d64'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5'];

    /* FL_APELLIDO_MATERNO - FL_APELLIDO_MATERNO */
    public function getFl903b434508704b548d31e82d5f4baa6aAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_APELLIDO_PATERNO - FL_APELLIDO_PATERNO */
    public function getFl62703f20782248a4bd15d417af5a3886Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFla4cb215ee6e846c7aaafc80b6f2bcef4Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* Nombre completo - Nombre completo */
    public function getFlc35b1ba3716043068cad00d9f821d1e9Attribute($value)
    {
        return ''.$this->getFla4cb215ee6e846c7aaafc80b6f2bcef4Attribute('').' '.$this->getFl62703f20782248a4bd15d417af5a3886Attribute('').' '.$this->getFl903b434508704b548d31e82d5f4baa6aAttribute('').'';
    }

    /* PK_PRODUCTOR - PK_PRODUCTOR */
    public function getFlb05d0130e68143119c01dccaaf4f0d64Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
