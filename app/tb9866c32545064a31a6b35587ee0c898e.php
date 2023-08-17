<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de municipios - Lista de municipios.
 */
class tb9866c32545064a31a6b35587ee0c898e extends \Eloquent
{
    protected $appends = ['fle6c48b9895ad48689820a5ad469b2481', 'fl0c7ddac8094c439ea2e5235510ced136'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFle6c48b9895ad48689820a5ad469b2481Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_MUNICIPIOS - PK_MUNICIPIOS */
    public function getFl0c7ddac8094c439ea2e5235510ced136Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
