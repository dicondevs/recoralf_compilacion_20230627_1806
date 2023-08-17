<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar Estatus - Recuperar Estatus.
 */
class tb7b332aa4000f420a9afc673748ab5b19 extends \Eloquent
{
    protected $appends = ['fl87e661a21c3a4c248e5b0b6a8f20cf1a', 'flae18cbb72ddb43df901c0badfd297cec', 'fl027a19cd5af54e5f8ff059c056ff3331', 'flf8a1d5202fb546e88fc20116fc658896'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4'];

    /* FK_TIPO_ESTATUS - Relación con tipo de estatus */
    public function getFl87e661a21c3a4c248e5b0b6a8f20cf1aAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_CLASE - FL_CLASE */
    public function getFlae18cbb72ddb43df901c0badfd297cecAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_ESTATUS - FL_ESTATUS */
    public function getFl027a19cd5af54e5f8ff059c056ff3331Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* PK_ESTATUS - PK_ESTATUS */
    public function getFlf8a1d5202fb546e88fc20116fc658896Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
