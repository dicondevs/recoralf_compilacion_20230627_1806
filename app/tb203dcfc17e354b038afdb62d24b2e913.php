<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Boletas Semanas - Modelador Boletas Semanas.
 */
class tb203dcfc17e354b038afdb62d24b2e913 extends \Eloquent
{
    protected $appends = ['fl9548975be9294c3b8cb7dd44b5c802c7', 'fleceb21f074054271864a254413280b43', 'flda4797bc3a954646bcb636c3baf9170b', 'fl903b434508704b548d31e82d5f4baa6a', 'fl62703f20782248a4bd15d417af5a3886', 'flaf87761a57bb46919b3f6c3752d5746c', 'fl9994a67fdf6e4b77a7e66311765e434c', 'fldb588e02a40c4aab946406f01664c73b', 'fla4cb215ee6e846c7aaafc80b6f2bcef4', 'fl6836cc348e834ea3a63e6401f99ea491', 'flc35b1ba3716043068cad00d9f821d1e9', 'fl3140848a4fa04dac873cd017993d2942'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12'];

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

    /* Fecha Registro - Fecha Registro */
    public function getFlda4797bc3a954646bcb636c3baf9170bAttribute($value)
    {
        if (null != $this->getFldb588e02a40c4aab946406f01664c73bAttribute('')) {
            setlocale(LC_TIME, str_replace('-', '_', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier')));

            return utf8_encode(strftime(\Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat'), strtotime($this->getFldb588e02a40c4aab946406f01664c73bAttribute(''))));
        } else {
            return '';
        }
    }

    /* FL_APELLIDO_MATERNO - FL_APELLIDO_MATERNO */
    public function getFl903b434508704b548d31e82d5f4baa6aAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_APELLIDO_PATERNO - FL_APELLIDO_PATERNO */
    public function getFl62703f20782248a4bd15d417af5a3886Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_FECHA_FIN - FL_FECHA_FIN */
    public function getFlaf87761a57bb46919b3f6c3752d5746cAttribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FL_FECHA_INICIO - FL_FECHA_INICIO */
    public function getFl9994a67fdf6e4b77a7e66311765e434cAttribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_FECHA_REGISTRO - FL_FECHA_REGISTRO */
    public function getFldb588e02a40c4aab946406f01664c73bAttribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFla4cb215ee6e846c7aaafc80b6f2bcef4Attribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl6836cc348e834ea3a63e6401f99ea491Attribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }

    /* Nombre completo - Nombre completo */
    public function getFlc35b1ba3716043068cad00d9f821d1e9Attribute($value)
    {
        return ''.$this->getFla4cb215ee6e846c7aaafc80b6f2bcef4Attribute('').' '.$this->getFl62703f20782248a4bd15d417af5a3886Attribute('').' '.$this->getFl903b434508704b548d31e82d5f4baa6aAttribute('').'';
    }

    /* PK_BOLETA_SEMANAL_RECIBAS - PK_BOLETA_SEMANAL_RECIBAS */
    public function getFl3140848a4fa04dac873cd017993d2942Attribute($value)
    {
        if (null == $this->C8) {
            return $this->c8;
        } else {
            return $this->C8;
        }
    }
}
