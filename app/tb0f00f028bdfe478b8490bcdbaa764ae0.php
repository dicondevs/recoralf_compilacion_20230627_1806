<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * sp_lista_cp_estado - sp_lista_cp_estado.
 */
class tb0f00f028bdfe478b8490bcdbaa764ae0 extends \Eloquent
{
    protected $appends = ['flfa3934dace9a46ac946a8760de432d54', 'fl4efa5fae45be4223a1b99ae49026cd2b'];
    protected $hidden = ['C1', 'C2'];

    /* dato - dato */
    public function getFlfa3934dace9a46ac946a8760de432d54Attribute($value)
    {
        return $this->dato;
    }

    /* pk - pk */
    public function getFl4efa5fae45be4223a1b99ae49026cd2bAttribute($value)
    {
        return $this->pk;
    }
}
