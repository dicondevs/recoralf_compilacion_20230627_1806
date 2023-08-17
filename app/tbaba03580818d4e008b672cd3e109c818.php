<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * sp_usuarios - sp_usuarios.
 */
class tbaba03580818d4e008b672cd3e109c818 extends \Eloquent
{
    protected $appends = ['fl6e1990955c7f42e5a9381b8539079e09', 'fl6cc9db215c7740568ec9770e02e1b5e8', 'flc36a755eea0c423f963065c00a65e66e', 'flfd815a041d054100939a679f870a6530', 'flf86c50eb26bb40828a0a4cf4bbdb3da6', 'fle1969d7d62c34929ad701b75559cb28e', 'fl07564b8180794befa17da0f51433ff99'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7'];

    /* centro_trabajo - centro_trabajo */
    public function getFl6e1990955c7f42e5a9381b8539079e09Attribute($value)
    {
        return $this->centro_trabajo;
    }

    /* ct_usuario - ct_usuario */
    public function getFl6cc9db215c7740568ec9770e02e1b5e8Attribute($value)
    {
        return $this->ct_usuario;
    }

    /* email - email */
    public function getFlc36a755eea0c423f963065c00a65e66eAttribute($value)
    {
        return $this->email;
    }

    /* estatus - estatus */
    public function getFlfd815a041d054100939a679f870a6530Attribute($value)
    {
        return $this->estatus;
    }

    /* nombre - nombre */
    public function getFlf86c50eb26bb40828a0a4cf4bbdb3da6Attribute($value)
    {
        return $this->nombre;
    }

    /* perfil - perfil */
    public function getFle1969d7d62c34929ad701b75559cb28eAttribute($value)
    {
        return $this->perfil;
    }

    /* PK_USUARIOS - PK_USUARIOS */
    public function getFl07564b8180794befa17da0f51433ff99Attribute($value)
    {
        return $this->PK_USUARIOS;
    }
}
