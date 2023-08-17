<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar Menu Perfil - Recuperar Menu Perfil.
 */
class tb7a554656bf474c729d8f6f802a183501 extends \Eloquent
{
    protected $appends = ['fl9fd1022b0ee24580855222a469cbbdee', 'fl633e4eb09d8648df92085672df4a8e9e', 'flb0474c23ed204c13b8539fb7d617fe94', 'fl1400f3c833ef4fd782424f707f86b77d', 'fl233ef87e54d74fceba486f341476ffd8', 'fle6500ee5daf84774a7085bd3d5515376', 'fl74215ab27af445969cb2fd59cd4b71a3', 'fl277a1a85dbb94a86b234cfb6c3b0c359', 'fl5913bd247fa746a08c4e8087f6bcdae7'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9'];

    /* FK_MENU - FK_MENU */
    public function getFl9fd1022b0ee24580855222a469cbbdeeAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FK_PERFIL - FK_PERFIL */
    public function getFl633e4eb09d8648df92085672df4a8e9eAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_ALTA - FL_ALTA */
    public function getFlb0474c23ed204c13b8539fb7d617fe94Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FL_CESTATUS - FL_CESTATUS */
    public function getFl1400f3c833ef4fd782424f707f86b77dAttribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_DETALLE - FL_DETALLE */
    public function getFl233ef87e54d74fceba486f341476ffd8Attribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FL_EDITAR - FL_EDITAR */
    public function getFle6500ee5daf84774a7085bd3d5515376Attribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* FL_ELIMINAR - FL_ELIMINAR */
    public function getFl74215ab27af445969cb2fd59cd4b71a3Attribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }

    /* FL_VALIDAR - FL_VALIDAR */
    public function getFl277a1a85dbb94a86b234cfb6c3b0c359Attribute($value)
    {
        if (null == $this->C8) {
            return $this->c8;
        } else {
            return $this->C8;
        }
    }

    /* PK_PERFIL_MENU - PK_PERFIL_MENU */
    public function getFl5913bd247fa746a08c4e8087f6bcdae7Attribute($value)
    {
        if (null == $this->C9) {
            return $this->c9;
        } else {
            return $this->C9;
        }
    }
}
