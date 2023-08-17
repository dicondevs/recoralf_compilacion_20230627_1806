<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * sp_recuperar_documentos - sp_recuperar_documentos.
 */
class tb8e09ec1093d24dbc9f03f7cadd4bfde4 extends \Eloquent
{
    protected $appends = ['fl752706c083e940d4ba6c85c137505885', 'flbd3abbed2a234a60b1857dc4364e4319', 'flb1fc7b1b344b40098a7baff22ef85853', 'fl623ab8767dc74001a36411092eb34316'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4'];

    /* FK_PRODUCTOR - FK_PRODUCTOR */
    public function getFl752706c083e940d4ba6c85c137505885Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_DOC_FILE - FL_DOC_FILE */
    public function getFlbd3abbed2a234a60b1857dc4364e4319Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_TIPO - FL_TIPO */
    public function getFlb1fc7b1b344b40098a7baff22ef85853Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* PK_DOCUMENTOS - PK_DOCUMENTOS */
    public function getFl623ab8767dc74001a36411092eb34316Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
