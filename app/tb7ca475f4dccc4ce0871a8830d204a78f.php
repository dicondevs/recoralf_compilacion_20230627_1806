<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * sp_lista_cp_municipio - sp_lista_cp_municipio.
 */
class tb7ca475f4dccc4ce0871a8830d204a78f extends \Eloquent
{
    protected $appends = ['flb2865af9f3344dbab1ff723a69f806d0', 'flcd2d4695b89741499adbc618677035d0'];
    protected $hidden = ['C1', 'C2'];

    /* dato - dato */
    public function getFlb2865af9f3344dbab1ff723a69f806d0Attribute($value)
    {
        return $this->dato;
    }

    /* pk - pk */
    public function getFlcd2d4695b89741499adbc618677035d0Attribute($value)
    {
        return $this->pk;
    }
}
