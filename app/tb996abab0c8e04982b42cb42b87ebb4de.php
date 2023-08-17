<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Centro Trabajo - Modelador Centro Trabajo.
 */
class tb996abab0c8e04982b42cb42b87ebb4de extends \Eloquent
{
    protected $appends = ['flc8979f99814b4c06bbcf0c69714a6d7c', 'fl1ee2c96dd6634baa92354d8e33164002', 'fl43420ddb4df54c11b76a6c9ab32c87ee', 'flccc619599f854c5199ee6d0ae5bc1309', 'fl5151dc8c007646d9855ce9c8db749593', 'flbea0930a9f054dae99d1d7f5d23bb3f3', 'fl0a754e10e6774d44a950add92e1d71e4', 'fl3b876363326141bcb4e30c8aef736910', 'fl6db6fe0700a2492ab254232484650e02', 'fl2f1244c1317e494ebad0653307841e94'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10'];

    /* Activo - Activo */
    public function getFlc8979f99814b4c06bbcf0c69714a6d7cAttribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:#00bcd4;"></i>';
    }

    /* Activo/Inactivo - Activo/Inactivo */
    public function getFl1ee2c96dd6634baa92354d8e33164002Attribute($value)
    {
        if (true == $this->getFlbea0930a9f054dae99d1d7f5d23bb3f3Attribute('')) {
            return $this->getFlc8979f99814b4c06bbcf0c69714a6d7cAttribute('');
        }

        if (false == $this->getFlbea0930a9f054dae99d1d7f5d23bb3f3Attribute('')) {
            return $this->getFl3b876363326141bcb4e30c8aef736910Attribute('');
        }

        return '';
    }

    /* FK_ESTADO - FK_ESTADO */
    public function getFl43420ddb4df54c11b76a6c9ab32c87eeAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FK_USUARIO - FK_USUARIO */
    public function getFlccc619599f854c5199ee6d0ae5bc1309Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_ABREV - FL_ABREV */
    public function getFl5151dc8c007646d9855ce9c8db749593Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FL_ACTIVO_INACTIVO - FL_ACTIVO_INACTIVO */
    public function getFlbea0930a9f054dae99d1d7f5d23bb3f3Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFl0a754e10e6774d44a950add92e1d71e4Attribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* Inactivo - Inactivo */
    public function getFl3b876363326141bcb4e30c8aef736910Attribute($value)
    {
        return '<i class="fa fa-circle" aria-hidden="true" style="color:red;"></i>';
    }

    /* PK_CENTROS_TRABAJO - PK_CENTROS_TRABAJO */
    public function getFl6db6fe0700a2492ab254232484650e02Attribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* Responsable - Responsable */
    public function getFl2f1244c1317e494ebad0653307841e94Attribute($value)
    {
        $par18d0628ff9114afabc54c2f4ed0d6e4b = $this->getFlccc619599f854c5199ee6d0ae5bc1309Attribute('');

        if (null == $par18d0628ff9114afabc54c2f4ed0d6e4b) {
            $par18d0628ff9114afabc54c2f4ed0d6e4b = '0';
        }

        $result = '';
        $lst = \App\repf782f923fd0247bd9f4010b717e52999::mt7f8b55907bfd48d7b91d6640c223b0e9($par18d0628ff9114afabc54c2f4ed0d6e4b, 0, 0, '', '');
        foreach ($lst as $tb) {
            $result .= ''.$tb['flce62468d82f44a70897635bbf9c04270'].' '.$tb['fl679d1ef43a6a4a42b62ba7115e62711c'].' '.$tb['fl4537932c1f794df49804babd6c0bb185'].'';
        }

        return $result;
    }
}
