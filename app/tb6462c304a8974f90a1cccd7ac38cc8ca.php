<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * sp_lista_cp - sp_lista_cp.
 */
class tb6462c304a8974f90a1cccd7ac38cc8ca extends \Eloquent
{
    protected $appends = ['fl59774c5ba47f4fc9b7980bebc8f93727', 'fl3b314d5a2be9483fa27465dfc5507ef2'];
    protected $hidden = ['C1', 'C2'];

    /* dato - dato */
    public function getFl59774c5ba47f4fc9b7980bebc8f93727Attribute($value)
    {
        return $this->dato;
    }

    /* pk - pk */
    public function getFl3b314d5a2be9483fa27465dfc5507ef2Attribute($value)
    {
        return $this->pk;
    }
}
