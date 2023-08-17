<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Precios - Modelador Precios.
 */
class tb20344f2640684f459ec9bc0d181d95c5 extends \Eloquent
{
    protected $appends = ['fl802d0308f3eb46b79f1bbc3e24de190d', 'fl05c7a292b39f487588a1bf7dca0fd509', 'fl7c165790b93e4e30822f73bb63cd9ecb', 'fl8d7945aa4d904368bf11a5fc0a1dbde9', 'fla2146160ccd5416ba65474edc576cd14', 'fl6c7953d928b94d339ea4dddab906b978', 'fl731f80c7afe04411839b7032b0fd628b', 'fl4537932c1f794df49804babd6c0bb185', 'fl679d1ef43a6a4a42b62ba7115e62711c', 'fl061fa482d3584004b1a47407ae3e866b', 'fla6c4e09adee44f0cb0968c974b82fbbf', 'flea17abf4c1ee4f398e98e7007ea45675', 'fl0a754e10e6774d44a950add92e1d71e4', 'fl97b9f7f523f14e849d80a350e2068e59', 'flce62468d82f44a70897635bbf9c04270', 'fl0b2cd5b8287844eaa0d9e3de129b8094', 'fla338e578376d458385de663bfa68b064', 'fl09ae781ab72c4e918cbeb8da0548516a', 'fl9ea22c7536424ac9b1b8e165926711ea', 'fla4e4bafa9094464d8cce56199dc18397', 'fle23a4b8151df4dc5894f59676af6628e', 'fl8883b6bce89848a0916d0b6ddf450986', 'flc849f999efab45f3bf34de6eaf98e937', 'fl5611902a98d2482ab296c8da9833b92c', 'flb8a75a19996943eb8286f6ad51f21386', 'flf3f43fa659a04702a126ad9e5d73e9a2', 'fl53958e2c0320414cbb5173690de59b11'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14', 'C15', 'C16', 'C17', 'C18', 'C19', 'C20', 'C21', 'C22', 'C23', 'C24', 'C25', 'C26', 'C27'];

    /* Activo - Activo */
    public function getFl802d0308f3eb46b79f1bbc3e24de190dAttribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:#00bcd4;"></i>';
    }

    /* Activo/Inactivo - Activo/Inactivo */
    public function getFl05c7a292b39f487588a1bf7dca0fd509Attribute($value)
    {
        if (true == $this->getFl731f80c7afe04411839b7032b0fd628bAttribute('')) {
            return $this->getFl802d0308f3eb46b79f1bbc3e24de190dAttribute('');
        }

        if (false == $this->getFl731f80c7afe04411839b7032b0fd628bAttribute('')) {
            return $this->getFl8883b6bce89848a0916d0b6ddf450986Attribute('');
        }

        return '';
    }

    /* Fecha Final - Fecha Final */
    public function getFl7c165790b93e4e30822f73bb63cd9ecbAttribute($value)
    {
        if (null != $this->getFl061fa482d3584004b1a47407ae3e866bAttribute('')) {
            setlocale(LC_TIME, str_replace('-', '_', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier')));

            return utf8_encode(strftime(\Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat'), strtotime($this->getFl061fa482d3584004b1a47407ae3e866bAttribute(''))));
        } else {
            return '';
        }
    }

    /* Fecha Inicio - Fecha Inicio */
    public function getFl8d7945aa4d904368bf11a5fc0a1dbde9Attribute($value)
    {
        if (null != $this->getFla6c4e09adee44f0cb0968c974b82fbbfAttribute('')) {
            setlocale(LC_TIME, str_replace('-', '_', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier')));

            return utf8_encode(strftime(\Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat'), strtotime($this->getFla6c4e09adee44f0cb0968c974b82fbbfAttribute(''))));
        } else {
            return '';
        }
    }

    /* FK_CENTRO_ACOPIO - FK_CENTRO_ACOPIO */
    public function getFla2146160ccd5416ba65474edc576cd14Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FK_TIPO_LECHE - FK_TIPO_LECHE */
    public function getFl6c7953d928b94d339ea4dddab906b978Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_ACTIVO_INACTIVO - FL_ACTIVO_INACTIVO */
    public function getFl731f80c7afe04411839b7032b0fd628bAttribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FL_APELLIDO_MATERNO - FL_APELLIDO_MATERNO */
    public function getFl4537932c1f794df49804babd6c0bb185Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_APELLIDO_PATERNO - FL_APELLIDO_PATERNO */
    public function getFl679d1ef43a6a4a42b62ba7115e62711cAttribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FL_FECHA_FIN - FL_FECHA_FIN */
    public function getFl061fa482d3584004b1a47407ae3e866bAttribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* FL_FECHA_INICIO - FL_FECHA_INICIO */
    public function getFla6c4e09adee44f0cb0968c974b82fbbfAttribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFlea17abf4c1ee4f398e98e7007ea45675Attribute($value)
    {
        if (null == $this->C8) {
            return $this->c8;
        } else {
            return $this->C8;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0a754e10e6774d44a950add92e1d71e4Attribute($value)
    {
        if (null == $this->C9) {
            return $this->c9;
        } else {
            return $this->C9;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl97b9f7f523f14e849d80a350e2068e59Attribute($value)
    {
        if (null == $this->C10) {
            return $this->c10;
        } else {
            return $this->C10;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFlce62468d82f44a70897635bbf9c04270Attribute($value)
    {
        if (null == $this->C11) {
            return $this->c11;
        } else {
            return $this->C11;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0b2cd5b8287844eaa0d9e3de129b8094Attribute($value)
    {
        if (null == $this->C12) {
            return $this->c12;
        } else {
            return $this->C12;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFla338e578376d458385de663bfa68b064Attribute($value)
    {
        if (null == $this->C13) {
            return $this->c13;
        } else {
            return $this->C13;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl09ae781ab72c4e918cbeb8da0548516aAttribute($value)
    {
        if (null == $this->C14) {
            return $this->c14;
        } else {
            return $this->C14;
        }
    }

    /* FL_PRECIO_GRANDE - FL_PRECIO_GRANDE */
    public function getFl9ea22c7536424ac9b1b8e165926711eaAttribute($value)
    {
        if (null == $this->C15) {
            return $this->c15;
        } else {
            return $this->C15;
        }
    }

    /* FL_PRECIO_MEDIANO - FL_PRECIO_MEDIANO */
    public function getFla4e4bafa9094464d8cce56199dc18397Attribute($value)
    {
        if (null == $this->C16) {
            return $this->c16;
        } else {
            return $this->C16;
        }
    }

    /* FL_PRECIO_PEQUENO - FL_PRECIO_PEQUENO */
    public function getFle23a4b8151df4dc5894f59676af6628eAttribute($value)
    {
        if (null == $this->C17) {
            return $this->c17;
        } else {
            return $this->C17;
        }
    }

    /* Inactivo - Inactivo */
    public function getFl8883b6bce89848a0916d0b6ddf450986Attribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:red;"></i>';
    }

    /* Leche Caliente - Leche Caliente */
    public function getFlc849f999efab45f3bf34de6eaf98e937Attribute($value)
    {
        return 'Leche Caliente';
    }

    /* Leche Fria - Leche Fria */
    public function getFl5611902a98d2482ab296c8da9833b92cAttribute($value)
    {
        return 'Leche Fria';
    }

    /* Nombre Completo - Nombre Completo */
    public function getFlb8a75a19996943eb8286f6ad51f21386Attribute($value)
    {
        return ''.$this->getFlce62468d82f44a70897635bbf9c04270Attribute('').' '.$this->getFl679d1ef43a6a4a42b62ba7115e62711cAttribute('').' '.$this->getFl4537932c1f794df49804babd6c0bb185Attribute('').'';
    }

    /* PK_PRECIOS - PK_PRECIOS */
    public function getFlf3f43fa659a04702a126ad9e5d73e9a2Attribute($value)
    {
        if (null == $this->C18) {
            return $this->c18;
        } else {
            return $this->C18;
        }
    }

    /* TIPO DE LECHE - TIPO DE LECHE */
    public function getFl53958e2c0320414cbb5173690de59b11Attribute($value)
    {
        if (1 == $this->getFl6c7953d928b94d339ea4dddab906b978Attribute('')) {
            return $this->getFl5611902a98d2482ab296c8da9833b92cAttribute('');
        }

        if (2 == $this->getFl6c7953d928b94d339ea4dddab906b978Attribute('')) {
            return $this->getFlc849f999efab45f3bf34de6eaf98e937Attribute('');
        }

        return '';
    }
}
