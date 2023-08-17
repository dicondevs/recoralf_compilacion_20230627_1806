<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Modelador Chofer - Modelador Chofer.
 */
class tbea0b74ab72a04e34aa10f369a5565537 extends \Eloquent
{
    protected $appends = ['fl4a77a76e36d0448392ae75bb5122c1ed', 'fl62a7f8b9b8d64542ba3e5b9dd38f90ad', 'flad2aef9103b542fa982133c8a770b809', 'flf980b4c6b5b34399bdd09a678e5f1845', 'fl15fd490db5eb41d58666174bf95ff20b', 'fl7509fd5af7ad49768872e6975fa38e06', 'flb6a9c9c0cc7e43399fe8a1aa490f03ab', 'fl2a804360e1144fb8961cf7db9795f599', 'fl8a7cefb0fc06420ab2ed65ff03186bf4', 'flf0faf16607dd4080a1331ea60819ed47'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10'];

    /* FL_APELLIDO_MATERNO - FL_APELLIDO_MATERNO */
    public function getFl4a77a76e36d0448392ae75bb5122c1edAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FL_APELLIDO_PATERNO - FL_APELLIDO_PATERNO */
    public function getFl62a7f8b9b8d64542ba3e5b9dd38f90adAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FL_CAPACIDAD - FL_CAPACIDAD */
    public function getFlad2aef9103b542fa982133c8a770b809Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FL_MARCA - FL_MARCA */
    public function getFlf980b4c6b5b34399bdd09a678e5f1845Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_MODELO - FL_MODELO */
    public function getFl15fd490db5eb41d58666174bf95ff20bAttribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FL_NO_PIPA - FL_NO_PIPA */
    public function getFl7509fd5af7ad49768872e6975fa38e06Attribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* FL_NOMBRE - FL_NOMBRE */
    public function getFlb6a9c9c0cc7e43399fe8a1aa490f03abAttribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }

    /* FL_PLACAS - FL_PLACAS */
    public function getFl2a804360e1144fb8961cf7db9795f599Attribute($value)
    {
        if (null == $this->C8) {
            return $this->c8;
        } else {
            return $this->C8;
        }
    }

    /* Nombre completo - Nombre completo */
    public function getFl8a7cefb0fc06420ab2ed65ff03186bf4Attribute($value)
    {
        return ''.$this->getFlb6a9c9c0cc7e43399fe8a1aa490f03abAttribute('').' '.$this->getFl62a7f8b9b8d64542ba3e5b9dd38f90adAttribute('').' '.$this->getFl4a77a76e36d0448392ae75bb5122c1edAttribute('').'';
    }

    /* PK_CHOFER - PK_CHOFER */
    public function getFlf0faf16607dd4080a1331ea60819ed47Attribute($value)
    {
        if (null == $this->C9) {
            return $this->c9;
        } else {
            return $this->C9;
        }
    }
}
