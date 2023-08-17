<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Tipo Recuros Tipo Estimulo - Modelador Tipo Recuros Tipo Estimulo.
 */
class tb5ef7e39563104b76806ed5e7742b50e2 extends \Eloquent
{
    protected $appends = ['fl5e9c6bb6654e46dd9dfb9cd00a2459f7', 'fl180f3161da8e4d808633ff010dd7e256', 'flac7cd95e697b4bd8ba011b51665a5693', 'fl254300e73ffe4a328fd46392753e47d1', 'fl2cb59277e3084c8f8084881a3d010f70'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5'];

    /* FK_TIPO_ESTIMULO - FK_TIPO_ESTIMULO */
    public function getFl5e9c6bb6654e46dd9dfb9cd00a2459f7Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_NOMENCLATURA - FL_NOMENCLATURA */
    public function getFl180f3161da8e4d808633ff010dd7e256Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_PROGRAMA - FL_PROGRAMA */
    public function getFlac7cd95e697b4bd8ba011b51665a5693Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FL_TIPO_RECURSO - FL_TIPO_RECURSO */
    public function getFl254300e73ffe4a328fd46392753e47d1Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* PK_TIPO_RECURSO - PK_TIPO_RECURSO */
    public function getFl2cb59277e3084c8f8084881a3d010f70Attribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }
}
