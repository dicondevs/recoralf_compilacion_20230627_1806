<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Lista Crioscopia Silo - Lista Crioscopia Silo.
 */
class tb246c982729f5469ebcce749d45b4199c extends \Eloquent
{
    protected $appends = ['fl4c8c7e0f915840d8ac378d60fa63660a', 'fl36412fbdccc24ca69d92061a72dd3d88'];
    protected $hidden = ['C1', 'C2'];

    /* Etiqueta - Elemento generado en forma automática por Codium */
    public function getFl4c8c7e0f915840d8ac378d60fa63660aAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* Valor - Elemento generado en forma automática por Codium */
    public function getFl36412fbdccc24ca69d92061a72dd3d88Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
