<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Menu - Modelador Menu.
 */
class tb3fe306b72357482f944c8144f1783915 extends \Eloquent
{
    protected $appends = ['fla58c0435f5d3420399ecf4e8f2cf55f1', 'fld5cc19ea9c9d4277a74c8f260d29cc25', 'fl82a4ca6f54514dad9a137816ddcaa489', 'fl321116e6328e48f7b8f7cd9d274e9911', 'flc38a91e3b79c465bbd30d7cb6cee7a41', 'flfa25ee818fc0479a9275e022591c3a2f', 'fl62a454af701541e9a08ecdda674f51e2'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7'];

    /* FL_ICON - FL_ICON */
    public function getFla58c0435f5d3420399ecf4e8f2cf55f1Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFld5cc19ea9c9d4277a74c8f260d29cc25Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_ORDEN - FL_ORDEN */
    public function getFl82a4ca6f54514dad9a137816ddcaa489Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FL_TITULO_PAGINA - FL_TITULO_PAGINA */
    public function getFl321116e6328e48f7b8f7cd9d274e9911Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_URL - FL_URL */
    public function getFlc38a91e3b79c465bbd30d7cb6cee7a41Attribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FL_VENTANA - FL_VENTANA */
    public function getFlfa25ee818fc0479a9275e022591c3a2fAttribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* PK_MENU - PK_MENU */
    public function getFl62a454af701541e9a08ecdda674f51e2Attribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }
}
