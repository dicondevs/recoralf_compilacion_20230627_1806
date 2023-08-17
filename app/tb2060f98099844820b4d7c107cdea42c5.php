<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista de Bancos - Lista de Bancos.
 */
class tb2060f98099844820b4d7c107cdea42c5 extends \Eloquent
{
    protected $appends = ['flef94bcab6ce74a329419295e28776e9f', 'fl2f6b683f88414e0ea53d80e8eed51aa2'];
    protected $hidden = ['C1', 'C2'];

    /* FL_NOMBRE_CORTO - FL_NOMBRE_CORTO */
    public function getFlef94bcab6ce74a329419295e28776e9fAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_BANCO - PK_BANCO */
    public function getFl2f6b683f88414e0ea53d80e8eed51aa2Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
