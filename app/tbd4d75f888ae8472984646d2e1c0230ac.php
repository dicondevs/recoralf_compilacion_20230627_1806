<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * CP - CP.
 */
class tbd4d75f888ae8472984646d2e1c0230ac extends \Eloquent
{
    protected $appends = ['fl5837b88c3b0d4a81a7cb4cecf158fd17', 'fl8f0f51196b364323aef9e730d52d1214'];
    protected $hidden = ['C1', 'C2'];

    /* c_CP - c_CP */
    public function getFl5837b88c3b0d4a81a7cb4cecf158fd17Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* PK_C_P - PK_CP */
    public function getFl8f0f51196b364323aef9e730d52d1214Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }
}
