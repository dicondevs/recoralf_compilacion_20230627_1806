<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Catálogo Semanas - Modelador para Catálogo Semanas.
 */
class tbf653797b67a241e98e0a363b26f2b0b4 extends \Eloquent
{
    protected $appends = ['fl9548975be9294c3b8cb7dd44b5c802c7', 'fleceb21f074054271864a254413280b43', 'flaf87761a57bb46919b3f6c3752d5746c', 'fl9994a67fdf6e4b77a7e66311765e434c', 'fl6836cc348e834ea3a63e6401f99ea491', 'fl54a19e79999945e2b49a8a078915989a'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6'];

    /* Fecha Final - Fecha Final */
    public function getFl9548975be9294c3b8cb7dd44b5c802c7Attribute($value)
    {
        if (null != $this->getFlaf87761a57bb46919b3f6c3752d5746cAttribute('')) {
            setlocale(LC_TIME, str_replace('-', '_', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier')));

            return utf8_encode(strftime(\Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat'), strtotime($this->getFlaf87761a57bb46919b3f6c3752d5746cAttribute(''))));
        } else {
            return '';
        }
    }

    /* Fecha inicio - Fecha inicio */
    public function getFleceb21f074054271864a254413280b43Attribute($value)
    {
        if (null != $this->getFl9994a67fdf6e4b77a7e66311765e434cAttribute('')) {
            setlocale(LC_TIME, str_replace('-', '_', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier')));

            return utf8_encode(strftime(\Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat'), strtotime($this->getFl9994a67fdf6e4b77a7e66311765e434cAttribute(''))));
        } else {
            return '';
        }
    }

    /* FL_FECHA_FIN - FL_FECHA_FIN */
    public function getFlaf87761a57bb46919b3f6c3752d5746cAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_FECHA_INICIO - FL_FECHA_INICIO */
    public function getFl9994a67fdf6e4b77a7e66311765e434cAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl6836cc348e834ea3a63e6401f99ea491Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* PK_SEMANAS - PK_SEMANAS */
    public function getFl54a19e79999945e2b49a8a078915989aAttribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }
}
