<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * TR_PERFIL_MENU - TR_PERFIL_MENU.
 */
class tb8a5867a15a584cf1b0cc1c6dad6c612b extends \Eloquent
{
    protected $table = 'tr_perfil_menu';
    protected $primaryKey = 'PK_PERFIL_MENU';
    protected $connection = 'connf782f923fd0247bd9f4010b717e52999';
    public $timestamps = false;

    /* FK_MENU - FK_MENU */
    public function flc198e42351cc4b37ab54ed4a5cf60699()
    {
        return $this->belongsTo('App\tbde4c71c3ea154a69a1431728c2deb90b', 'FK_MENU', 'PK_MENU');
    }

    /* FK_PERFIL - FK_PERFIL */
    public function fl15bb288b221843d2b82e7525c202e513()
    {
        return $this->belongsTo('App\tb29c3576675124e9a946c62c945744f16', 'FK_PERFIL', 'PK_PERFIL');
    }
}
