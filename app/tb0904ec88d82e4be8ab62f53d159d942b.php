<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar Recibas - Recuperar Recibas.
 */
class tb0904ec88d82e4be8ab62f53d159d942b extends \Eloquent
{
    protected $appends = ['fl5d27c1c5ae7d4b8190462c5b2fa40ec7', 'fle22884ceee614f19ab2f7fb99654feeb', 'fle18a476f5e8349efbacd9f5a34bd7c08', 'fl36d6fc90081b4568b189705807fc0962', 'flfff80279b6cb4aeb9a1dc814c519a1d6', 'fl7f946f4e3f1940edb7ca1258c2692b26', 'fld129778831b84bcbb3b4da59df4857df', 'fled97edd650e64250a90e531bdb7e8208', 'fl1ef5087742d14e5286fd7ced0a39f167', 'fla267a375854346f6bc3dbca873ffd1b4', 'flc45b94a564d94f38820667953e389973', 'fl6b566b61095f418d91e12018590f7c57', 'fl5c5902f5741141b08c7b2037455ff792', 'fl68bb038c98d34d12a8194985c5e1cb70', 'flb9529abc52ff43fd832419af1a1fef08', 'fl822d9e124198494a9fa7f6ee9a3aac70', 'fld40e8b03de074c84834042c0427f39fb', 'fl2234142220b74c7eb3dfac368dc4b35f', 'fle9a86f7ef160423990fd83e9a880240d', 'fl3a3ebf9223cf4d6b8805dd6d043d8d55', 'fl396a340ae9794bc9842f0933ea18907c', 'fl81e7dbc49ca4491bbf214f55445b0580', 'fla07479cacec5497a92314d6d91372698', 'flff14f1d5ec394f8c929129b676a10035', 'flbf2ca2f97a924193bfc23412ed3a2210', 'fl4e5ee6e31dae42999907212790c8067c', 'fl68a10b74e7d74390a13b4e5013459694', 'fl0fceaaf112e644ea87409e2febeea58c', 'flf7a60254e890462aa7c3e02622c03688', 'fla6db6c14e1424eccb4db4c9a8aa28c38', 'fl3b17286357214a46a119e361b1ace876', 'fle14252fd2d4f41d5afdd6dd1c8dc7d0e', 'flc50e910b34e840f2bb219334635e8a62', 'fl32b8ee330b504b23840144b12acee828', 'fl11bb4b6041784343a02b888398679f5c', 'fl70bab605251143199d57b57584f61516', 'fl93d6503cc4f949d18797ef4aed198b9c'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14', 'C15', 'C16', 'C17', 'C18', 'C19', 'C20', 'C21', 'C22', 'C23', 'C24', 'C25', 'C26', 'C27', 'C28', 'C29', 'C30', 'C31', 'C32', 'C33', 'C34', 'C35', 'C36', 'C37'];

    /* FK_CENTRO_ACOPIO - FK_CENTRO_ACOPIO */
    public function getFl5d27c1c5ae7d4b8190462c5b2fa40ec7Attribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FK_ESTATUS - FK_ESTATUS */
    public function getFle22884ceee614f19ab2f7fb99654feebAttribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FK_GERENCIA_ESTATAL - FK_GERENCIA_ESTATAL */
    public function getFle18a476f5e8349efbacd9f5a34bd7c08Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FK_PRODUCTOR - FK_PRODUCTOR */
    public function getFl36d6fc90081b4568b189705807fc0962Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FK_TIPO_LECHE - FK_TIPO_LECHE */
    public function getFlfff80279b6cb4aeb9a1dc814c519a1d6Attribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FK_TURNO - FK_TURNO */
    public function getFl7f946f4e3f1940edb7ca1258c2692b26Attribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* FL_ACEPTADORECHAZADO - FL_ACEPTADORECHAZADO */
    public function getFld129778831b84bcbb3b4da59df4857dfAttribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }

    /* FL_ACIDEZ - FL_ACIDEZ */
    public function getFled97edd650e64250a90e531bdb7e8208Attribute($value)
    {
        if (null == $this->C8) {
            return $this->c8;
        } else {
            return $this->C8;
        }
    }

    /* FL_ALCOHOL - FL_ALCOHOL */
    public function getFl1ef5087742d14e5286fd7ced0a39f167Attribute($value)
    {
        if (null == $this->C9) {
            return $this->c9;
        } else {
            return $this->C9;
        }
    }

    /* FL_ANTIBIOTICOS - FL_ANTIBIOTICOS */
    public function getFla267a375854346f6bc3dbca873ffd1b4Attribute($value)
    {
        if (null == $this->C10) {
            return $this->c10;
        } else {
            return $this->C10;
        }
    }

    /* FL_CELULAS_SOMATICAS - FL_CELULAS_SOMATICAS */
    public function getFlc45b94a564d94f38820667953e389973Attribute($value)
    {
        if (null == $this->C11) {
            return $this->c11;
        } else {
            return $this->C11;
        }
    }

    /* FL_COLOR - FL_COLOR */
    public function getFl6b566b61095f418d91e12018590f7c57Attribute($value)
    {
        if (null == $this->C12) {
            return $this->c12;
        } else {
            return $this->C12;
        }
    }

    /* FL_COMPUESTOSALCALINOS - FL_COMPUESTOSALCALINOS */
    public function getFl5c5902f5741141b08c7b2037455ff792Attribute($value)
    {
        if (null == $this->C13) {
            return $this->c13;
        } else {
            return $this->C13;
        }
    }

    /* FL_CRIOSCOPIA - FL_CRIOSCOPIA */
    public function getFl68bb038c98d34d12a8194985c5e1cb70Attribute($value)
    {
        if (null == $this->C14) {
            return $this->c14;
        } else {
            return $this->C14;
        }
    }

    /* FL_DENSIDAD - FL_DENSIDAD */
    public function getFlb9529abc52ff43fd832419af1a1fef08Attribute($value)
    {
        if (null == $this->C15) {
            return $this->c15;
        } else {
            return $this->C15;
        }
    }

    /* FL_DERIVADOSCLORADOS - FL_DERIVADOSCLORADOS */
    public function getFl822d9e124198494a9fa7f6ee9a3aac70Attribute($value)
    {
        if (null == $this->C16) {
            return $this->c16;
        } else {
            return $this->C16;
        }
    }

    /* FL_EXC_MAT_EXTR_TEXT - FL_EXC_MAT_EXTR_TEXT */
    public function getFld40e8b03de074c84834042c0427f39fbAttribute($value)
    {
        if (null == $this->C17) {
            return $this->c17;
        } else {
            return $this->C17;
        }
    }

    /* FL_EXCESO_MAT_EXTR - FL_EXCESO_MAT_EXTR */
    public function getFl2234142220b74c7eb3dfac368dc4b35fAttribute($value)
    {
        if (null == $this->C18) {
            return $this->c18;
        } else {
            return $this->C18;
        }
    }

    /* FL_FECHA_RECIBA - FL_FECHA_RECIBA */
    public function getFle9a86f7ef160423990fd83e9a880240dAttribute($value)
    {
        if (null == $this->C19) {
            return $this->c19;
        } else {
            return $this->C19;
        }
    }

    /* FL_FECHA_REGISTRO - FL_FECHA_REGISTRO */
    public function getFl3a3ebf9223cf4d6b8805dd6d043d8d55Attribute($value)
    {
        if (null == $this->C20) {
            return $this->c20;
        } else {
            return $this->C20;
        }
    }

    /* FL_FORMALDEHIDO - FL_FORMALDEHIDO */
    public function getFl396a340ae9794bc9842f0933ea18907cAttribute($value)
    {
        if (null == $this->C21) {
            return $this->c21;
        } else {
            return $this->C21;
        }
    }

    /* FL_GRASA - FL_GRASA */
    public function getFl81e7dbc49ca4491bbf214f55445b0580Attribute($value)
    {
        if (null == $this->C22) {
            return $this->c22;
        } else {
            return $this->C22;
        }
    }

    /* FL_KILOGRAMOS - FL_KILOGRAMOS */
    public function getFla07479cacec5497a92314d6d91372698Attribute($value)
    {
        if (null == $this->C23) {
            return $this->c23;
        } else {
            return $this->C23;
        }
    }

    /* FL_OLOR - FL_OLOR */
    public function getFlff14f1d5ec394f8c929129b676a10035Attribute($value)
    {
        if (null == $this->C24) {
            return $this->c24;
        } else {
            return $this->C24;
        }
    }

    /* FL_ORGANOLEPTICO - FL_ORGANOLEPTICO */
    public function getFlbf2ca2f97a924193bfc23412ed3a2210Attribute($value)
    {
        if (null == $this->C25) {
            return $this->c25;
        } else {
            return $this->C25;
        }
    }

    /* FL_OTRAS_ESPECIF - FL_OTRAS_ESPECIF */
    public function getFl4e5ee6e31dae42999907212790c8067cAttribute($value)
    {
        if (null == $this->C26) {
            return $this->c26;
        } else {
            return $this->C26;
        }
    }

    /* FL_OTRAS_ESPECIF_TEXT - FL_OTRAS_ESPECIF_TEXT */
    public function getFl68a10b74e7d74390a13b4e5013459694Attribute($value)
    {
        if (null == $this->C27) {
            return $this->c27;
        } else {
            return $this->C27;
        }
    }

    /* FL_PEROXIDODEHIDROGENO - FL_PEROXIDODEHIDROGENO */
    public function getFl0fceaaf112e644ea87409e2febeea58cAttribute($value)
    {
        if (null == $this->C28) {
            return $this->c28;
        } else {
            return $this->C28;
        }
    }

    /* FL_PROTEINA - FL_PROTEÍNA */
    public function getFlf7a60254e890462aa7c3e02622c03688Attribute($value)
    {
        if (null == $this->C29) {
            return $this->c29;
        } else {
            return $this->C29;
        }
    }

    /* FL_REDUCTASA - FL_REDUCTASA */
    public function getFla6db6c14e1424eccb4db4c9a8aa28c38Attribute($value)
    {
        if (null == $this->C30) {
            return $this->c30;
        } else {
            return $this->C30;
        }
    }

    /* FL_S_N_G - FL_S_N_G */
    public function getFl3b17286357214a46a119e361b1ace876Attribute($value)
    {
        if (null == $this->C31) {
            return $this->c31;
        } else {
            return $this->C31;
        }
    }

    /* FL_S_T - FL_S_T */
    public function getFle14252fd2d4f41d5afdd6dd1c8dc7d0eAttribute($value)
    {
        if (null == $this->C32) {
            return $this->c32;
        } else {
            return $this->C32;
        }
    }

    /* FL_SABOR - FL_SABOR */
    public function getFlc50e910b34e840f2bb219334635e8a62Attribute($value)
    {
        if (null == $this->C33) {
            return $this->c33;
        } else {
            return $this->C33;
        }
    }

    /* FL_TEMPERATURA - FL_TEMPERATURA */
    public function getFl32b8ee330b504b23840144b12acee828Attribute($value)
    {
        if (null == $this->C34) {
            return $this->c34;
        } else {
            return $this->C34;
        }
    }

    /* FL_VOLUMEN - FL_VOLUMEN */
    public function getFl11bb4b6041784343a02b888398679f5cAttribute($value)
    {
        if (null == $this->C35) {
            return $this->c35;
        } else {
            return $this->C35;
        }
    }

    /* PK_RECIBAS - PK_RECIBAS */
    public function getFl70bab605251143199d57b57584f61516Attribute($value)
    {
        if (null == $this->C36) {
            return $this->c36;
        } else {
            return $this->C36;
        }
    }

    /* Pruebas No Caract - Pruebas No Caract */
    public function getFl93d6503cc4f949d18797ef4aed198b9cAttribute($value)
    {
        return tb7790d0c216fa4b9ea781130e9104d1a4::whereRaw('`FK_RECIBA`='.$this->getFl70bab605251143199d57b57584f61516Attribute(''))->get();
    }
}
