<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * sp_c_t_users - Procedimiento Almacenado Centros de Trabajo.
 */
class tb45f7488302534acfb9bf854d9871af60 extends \Eloquent
{
    protected $appends = ['fl612167a26162462a8c0cfa013f926228', 'fldf916fe90fb041509c32bcec85fb81da'];
    protected $hidden = ['C1', 'C2'];

    /* NOMBRE - NOMBRE */
    public function getFl612167a26162462a8c0cfa013f926228Attribute($value)
    {
        return $this->NOMBRE;
    }

    /* PK - PK */
    public function getFldf916fe90fb041509c32bcec85fb81daAttribute($value)
    {
        return $this->PK;
    }
}
