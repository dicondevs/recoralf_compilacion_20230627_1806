<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista estatus traspaso - Lista estatus traspaso.
 */
class tb65e30fd006c1486d83cc4f9d62306c9c extends \Eloquent
{
    protected $appends = ['fl027a19cd5af54e5f8ff059c056ff3331', 'flf8a1d5202fb546e88fc20116fc658896'];
    protected $hidden = ['C1', 'C2'];

    /* FL_ESTATUS - FL_ESTATUS */
    public function getFl027a19cd5af54e5f8ff059c056ff3331Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_ESTATUS - PK_ESTATUS */
    public function getFlf8a1d5202fb546e88fc20116fc658896Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
