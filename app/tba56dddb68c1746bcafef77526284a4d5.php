<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:22
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App;

/**
 * Recuperar Traspasos - Recuperar Traspasos.
 */
class tba56dddb68c1746bcafef77526284a4d5 extends \Eloquent
{
    protected $appends = ['fl3536ba99fc72459a8680b0381112c0dd', 'fl030cc9c03f3f4a60a58a86396dbf5826', 'flba50b8be6bb0432180b4095cefa81325', 'fld8284d5a6cd741a3ad839d9c74f0f7c5', 'flb926fe19e62f4a739b3eea6fb71f0f04', 'fla4f5b9f492054367a6fddbd9f313b922', 'fl6ca23113e49f4f45975b7c054915f929', 'flbe5434ffbbcd4f0ba2c1ac920780e7f3', 'fl28ff01fabd4843039161a5c1ba0d2020', 'fl6d86bb34541b41e1af55e506a18179c8', 'flc29f26db892641ffae4401da729a9ba5', 'fl258666fd71604f5da9b50d9e0fb9121a', 'fl25aaca82426c495f814ed38265b3f64c', 'fl5a29ebb38cf94285ae4c7c177a6d5f28', 'flbe4fa453f87e4a8494d871533752e667', 'flbe00baef15774bce9911f7b72c5756d3', 'fleef2c5e00570444daa1fbcafb975bf7e', 'fl394964f3bc684e90801a6b32500d640c', 'fl91c636b1a5d44a1796986ef8244379b8', 'fl478ead3e9f5344399695e59c6472635e', 'fld29cfef115484a7da0e6742a27d5401d', 'fl85ce1e9929684a1fa2c0c0807ef8f6a2', 'fla9d8ea808b1148d58d86f9cbd4bccc19', 'flf578afe9b9134c6b81f2f4435dd2b3e9', 'fl79ed9ed6b83a476698d866ed38c91807', 'flb999a2a593fe4929b1687187ce3b2097', 'fl076ee2abfd114da68138b4ae747128dd', 'flfc1895ea5c3748e1acaa1f16c93db402', 'fl262b8bbcc64c464597d688baf453ef8b', 'fl8644cd728db9440a859ae0d3b9342dcc', 'fl31b21777ec9149ebbcfa764db967ef15', 'flf7ccffa912e84d87b1b80d08a5eaa726', 'flf07139b1debd4d69add17d93d356da96', 'fl675c0df982be4d76b025af011c538679', 'fl3a4aecec51154c4a9d2a85681e4c9d59', 'fld6b1337f4dbb412bae79aa5e25a42368', 'fl87558813fb584460af7b5103fda9ea57', 'fl2d5ba12eb26048c1b5e4150c44dd3f3b', 'fl5a2c06864c8844b8990bedd1783968f0', 'fl0428e965d14841debb2b433ce3bdb717', 'fl31c8f0109c2043f1a3595dc7fdc111cc', 'fla1e03ef150cf49d6acc862591ed3bfb8', 'fl06cf3ac6d216450ba9d7c47995ef7bc3', 'fl5f52c900282e48299269d54d56b54c11', 'fl8d4f7dddf90a4bd28df5a960b5477cbc', 'fl82e52ff5e8ae4ffc8e2e06b9fb4ec3ad', 'fld3034eab03d14272bd69ceadef324366', 'flea46c9f3715e4ffaa3c3c4c5b48cac11', 'fl08145a4507b1441392b67f0b92e0a530', 'flaf7ff6e4460a4c29aa4f562d107b08e6', 'fl6da28b1e2cf24a80a69a411e9ad59931', 'fl9d4d30616a4649e38bbaf2c8fbf42378', 'fl7cc349af44e444e0bd9e95e844034531', 'fl920cf5079f374146a5fdeffe7a9e5891', 'fl7b5104060db84fbeace4b8399bba9b85', 'fl9a19694be39944e495772deede9d95da', 'fl11d5c4d3afdd4f9c9e5c1347ec4cec55', 'fl5755462178904e12a047f5ef29ff2eeb', 'flfb86a263ab8e4f6f975fa9b91fbb74ba'];
    protected $hidden = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14', 'C15', 'C16', 'C17', 'C18', 'C19', 'C20', 'C21', 'C22', 'C23', 'C24', 'C25', 'C26', 'C27', 'C28', 'C29', 'C30', 'C31', 'C32', 'C33', 'C34', 'C35', 'C36', 'C37', 'C38', 'C39', 'C40', 'C41', 'C42', 'C43', 'C44', 'C45', 'C46', 'C47', 'C48', 'C49', 'C50', 'C51', 'C52', 'C53', 'C54', 'C55', 'C56', 'C57', 'C58', 'C59'];

    /* FK_CHOFER - FK_CHOFER */
    public function getFl3536ba99fc72459a8680b0381112c0ddAttribute($value)
    {
        if (null == $this->C1) {
            return $this->c1;
        } else {
            return $this->C1;
        }
    }

    /* FK_DESTINO - FK_DESTINO */
    public function getFl030cc9c03f3f4a60a58a86396dbf5826Attribute($value)
    {
        if (null == $this->C2) {
            return $this->c2;
        } else {
            return $this->C2;
        }
    }

    /* FK_ESTATUS - Relación con la tabla de estatus */
    public function getFlba50b8be6bb0432180b4095cefa81325Attribute($value)
    {
        if (null == $this->C3) {
            return $this->c3;
        } else {
            return $this->C3;
        }
    }

    /* FK_USUARIO - Relación con Usuarios */
    public function getFld8284d5a6cd741a3ad839d9c74f0f7c5Attribute($value)
    {
        if (null == $this->C4) {
            return $this->c4;
        } else {
            return $this->C4;
        }
    }

    /* FL_ACIDEZ_PIPA - FL_ACIDEZ_PIPA */
    public function getFlb926fe19e62f4a739b3eea6fb71f0f04Attribute($value)
    {
        if (null == $this->C5) {
            return $this->c5;
        } else {
            return $this->C5;
        }
    }

    /* FL_ACIDEZ_SILO - FL_ACIDEZ_SILO */
    public function getFla4f5b9f492054367a6fddbd9f313b922Attribute($value)
    {
        if (null == $this->C6) {
            return $this->c6;
        } else {
            return $this->C6;
        }
    }

    /* FL_ALCOHOL_PIPA - FL_ALCOHOL_PIPA */
    public function getFl6ca23113e49f4f45975b7c054915f929Attribute($value)
    {
        if (null == $this->C7) {
            return $this->c7;
        } else {
            return $this->C7;
        }
    }

    /* FL_ALCOHOL_SILO - FL_ALCOHOL_SILO */
    public function getFlbe5434ffbbcd4f0ba2c1ac920780e7f3Attribute($value)
    {
        if (null == $this->C8) {
            return $this->c8;
        } else {
            return $this->C8;
        }
    }

    /* FL_ANTIBIOTICOS_PIPA - FL_ANTIBIOTICOS_PIPA */
    public function getFl28ff01fabd4843039161a5c1ba0d2020Attribute($value)
    {
        if (null == $this->C9) {
            return $this->c9;
        } else {
            return $this->C9;
        }
    }

    /* FL_ANTIBIOTICOS_SILO - FL_ANTIBIOTICOS_SILO */
    public function getFl6d86bb34541b41e1af55e506a18179c8Attribute($value)
    {
        if (null == $this->C10) {
            return $this->c10;
        } else {
            return $this->C10;
        }
    }

    /* FL_CAPUCHON - FL_CAPUCHON */
    public function getFlc29f26db892641ffae4401da729a9ba5Attribute($value)
    {
        if (null == $this->C11) {
            return $this->c11;
        } else {
            return $this->C11;
        }
    }

    /* FL_CHAROLA - FL_CHAROLA */
    public function getFl258666fd71604f5da9b50d9e0fb9121aAttribute($value)
    {
        if (null == $this->C12) {
            return $this->c12;
        } else {
            return $this->C12;
        }
    }

    /* FL_CONTRATAPA - FL_CONTRATAPA */
    public function getFl25aaca82426c495f814ed38265b3f64cAttribute($value)
    {
        if (null == $this->C13) {
            return $this->c13;
        } else {
            return $this->C13;
        }
    }

    /* FL_CRIOSCOPICO_PIPA - FL_CRIOSCOPICO_PIPA */
    public function getFl5a29ebb38cf94285ae4c7c177a6d5f28Attribute($value)
    {
        if (null == $this->C14) {
            return $this->c14;
        } else {
            return $this->C14;
        }
    }

    /* FL_CRIOSCOPICO_SILO - FL_CRIOSCOPICO_SILO */
    public function getFlbe4fa453f87e4a8494d871533752e667Attribute($value)
    {
        if (null == $this->C15) {
            return $this->c15;
        } else {
            return $this->C15;
        }
    }

    /* FL_CUERPO - FL_CUERPO */
    public function getFlbe00baef15774bce9911f7b72c5756d3Attribute($value)
    {
        if (null == $this->C16) {
            return $this->c16;
        } else {
            return $this->C16;
        }
    }

    /* FL_DENSIDAD_PIPA - FL_DENSIDAD_PIPA */
    public function getFleef2c5e00570444daa1fbcafb975bf7eAttribute($value)
    {
        if (null == $this->C17) {
            return $this->c17;
        } else {
            return $this->C17;
        }
    }

    /* FL_DENSIDAD_SILO - FL_DENSIDAD_SILO */
    public function getFl394964f3bc684e90801a6b32500d640cAttribute($value)
    {
        if (null == $this->C18) {
            return $this->c18;
        } else {
            return $this->C18;
        }
    }

    /* FL_EMPAQUE - FL_EMPAQUE */
    public function getFl91c636b1a5d44a1796986ef8244379b8Attribute($value)
    {
        if (null == $this->C19) {
            return $this->c19;
        } else {
            return $this->C19;
        }
    }

    /* FL_EMPAQUES - FL_EMPAQUES */
    public function getFl478ead3e9f5344399695e59c6472635eAttribute($value)
    {
        if (null == $this->C20) {
            return $this->c20;
        } else {
            return $this->C20;
        }
    }

    /* FL_ESCALERA - FL_ESCALERA */
    public function getFld29cfef115484a7da0e6742a27d5401dAttribute($value)
    {
        if (null == $this->C21) {
            return $this->c21;
        } else {
            return $this->C21;
        }
    }

    /* FL_ESCOTILLA - FL_ESCOTILLA */
    public function getFl85ce1e9929684a1fa2c0c0807ef8f6a2Attribute($value)
    {
        if (null == $this->C22) {
            return $this->c22;
        } else {
            return $this->C22;
        }
    }

    /* FL_FALDONES - FL_FALDONES */
    public function getFla9d8ea808b1148d58d86f9cbd4bccc19Attribute($value)
    {
        if (null == $this->C23) {
            return $this->c23;
        } else {
            return $this->C23;
        }
    }

    /* FL_FECHA_REGISTROS - Fecha de registros */
    public function getFlf578afe9b9134c6b81f2f4435dd2b3e9Attribute($value)
    {
        if (null == $this->C24) {
            return $this->c24;
        } else {
            return $this->C24;
        }
    }

    /* FL_GRASA_PIPA - FL_GRASA_PIPA */
    public function getFl79ed9ed6b83a476698d866ed38c91807Attribute($value)
    {
        if (null == $this->C25) {
            return $this->c25;
        } else {
            return $this->C25;
        }
    }

    /* FL_GRASA_SILO - FL_GRASA_SILO */
    public function getFlb999a2a593fe4929b1687187ce3b2097Attribute($value)
    {
        if (null == $this->C26) {
            return $this->c26;
        } else {
            return $this->C26;
        }
    }

    /* FL_HORA - FL_HORA */
    public function getFl076ee2abfd114da68138b4ae747128ddAttribute($value)
    {
        if (null == $this->C27) {
            return $this->c27;
        } else {
            return $this->C27;
        }
    }

    /* FL_INSPECCIONO - FL_INSPECCIONO */
    public function getFlfc1895ea5c3748e1acaa1f16c93db402Attribute($value)
    {
        if (null == $this->C28) {
            return $this->c28;
        } else {
            return $this->C28;
        }
    }

    /* FL_INT_TANQUE - FL_INT_TANQUE */
    public function getFl262b8bbcc64c464597d688baf453ef8bAttribute($value)
    {
        if (null == $this->C29) {
            return $this->c29;
        } else {
            return $this->C29;
        }
    }

    /* FL_JEFE_CENTRO_ACOPIO - FL_JEFE_CENTRO_ACOPIO */
    public function getFl8644cd728db9440a859ae0d3b9342dccAttribute($value)
    {
        if (null == $this->C30) {
            return $this->c30;
        } else {
            return $this->C30;
        }
    }

    /* FL_LLANTAS - FL_LLANTAS */
    public function getFl31b21777ec9149ebbcfa764db967ef15Attribute($value)
    {
        if (null == $this->C31) {
            return $this->c31;
        } else {
            return $this->C31;
        }
    }

    /* FL_MANG_DESAGUE - FL_MANG_DESAGUE */
    public function getFlf7ccffa912e84d87b1b80d08a5eaa726Attribute($value)
    {
        if (null == $this->C32) {
            return $this->c32;
        } else {
            return $this->C32;
        }
    }

    /* FL_OBSERVACIONES - FL_OBSERVACIONES */
    public function getFlf07139b1debd4d69add17d93d356da96Attribute($value)
    {
        if (null == $this->C33) {
            return $this->c33;
        } else {
            return $this->C33;
        }
    }

    /* FL_PESO_BRUTO - FL_PESO_BRUTO */
    public function getFl675c0df982be4d76b025af011c538679Attribute($value)
    {
        if (null == $this->C34) {
            return $this->c34;
        } else {
            return $this->C34;
        }
    }

    /* FL_PESO_NETO - FL_PESO_NETO */
    public function getFl3a4aecec51154c4a9d2a85681e4c9d59Attribute($value)
    {
        if (null == $this->C35) {
            return $this->c35;
        } else {
            return $this->C35;
        }
    }

    /* FL_PROTEINAS_PIPA - FL_PROTEINAS_PIPA */
    public function getFld6b1337f4dbb412bae79aa5e25a42368Attribute($value)
    {
        if (null == $this->C36) {
            return $this->c36;
        } else {
            return $this->C36;
        }
    }

    /* FL_PROTEINAS_SILO - FL_PROTEINAS_SILO */
    public function getFl87558813fb584460af7b5103fda9ea57Attribute($value)
    {
        if (null == $this->C37) {
            return $this->c37;
        } else {
            return $this->C37;
        }
    }

    /* FL_REDUCTASA_PIPA - FL_REDUCTASA_PIPA */
    public function getFl2d5ba12eb26048c1b5e4150c44dd3f3bAttribute($value)
    {
        if (null == $this->C38) {
            return $this->c38;
        } else {
            return $this->C38;
        }
    }

    /* FL_REDUCTASA_SILO - FL_REDUCTASA_SILO */
    public function getFl5a2c06864c8844b8990bedd1783968f0Attribute($value)
    {
        if (null == $this->C39) {
            return $this->c39;
        } else {
            return $this->C39;
        }
    }

    /* FL_RESPIRADERO - FL_RESPIRADERO */
    public function getFl0428e965d14841debb2b433ce3bdb717Attribute($value)
    {
        if (null == $this->C40) {
            return $this->c40;
        } else {
            return $this->C40;
        }
    }

    /* FL_RINES_CARRO - FL_RINES_CARRO */
    public function getFl31c8f0109c2043f1a3595dc7fdc111ccAttribute($value)
    {
        if (null == $this->C41) {
            return $this->c41;
        } else {
            return $this->C41;
        }
    }

    /* FL_RINES_TANQUE - FL_RINES_TANQUE */
    public function getFla1e03ef150cf49d6acc862591ed3bfb8Attribute($value)
    {
        if (null == $this->C42) {
            return $this->c42;
        } else {
            return $this->C42;
        }
    }

    /* FL_SANITIZACION - FL_SANITIZACION */
    public function getFl06cf3ac6d216450ba9d7c47995ef7bc3Attribute($value)
    {
        if (null == $this->C43) {
            return $this->c43;
        } else {
            return $this->C43;
        }
    }

    /* FL_SOLIDOS_NO_GRASOS_PIPA - FL_SOLIDOS_NO_GRASOS_PIPA */
    public function getFl5f52c900282e48299269d54d56b54c11Attribute($value)
    {
        if (null == $this->C44) {
            return $this->c44;
        } else {
            return $this->C44;
        }
    }

    /* FL_SOLIDOS_NO_GRASOS_SILO - FL_SOLIDOS_NO_GRASOS_SILO */
    public function getFl8d4f7dddf90a4bd28df5a960b5477cbcAttribute($value)
    {
        if (null == $this->C45) {
            return $this->c45;
        } else {
            return $this->C45;
        }
    }

    /* FL_SOLIDOS_TOTALES_PIPA - FL_SOLIDOS_TOTALES_PIPA */
    public function getFl82e52ff5e8ae4ffc8e2e06b9fb4ec3adAttribute($value)
    {
        if (null == $this->C46) {
            return $this->c46;
        } else {
            return $this->C46;
        }
    }

    /* FL_SOLIDOS_TOTALES_SILO - FL_SOLIDOS_TOTALES_SILO */
    public function getFld3034eab03d14272bd69ceadef324366Attribute($value)
    {
        if (null == $this->C47) {
            return $this->c47;
        } else {
            return $this->C47;
        }
    }

    /* FL_SUPERF_EXT_CARRO - FL_SUPERF_EXT_CARRO */
    public function getFlea46c9f3715e4ffaa3c3c4c5b48cac11Attribute($value)
    {
        if (null == $this->C48) {
            return $this->c48;
        } else {
            return $this->C48;
        }
    }

    /* FL_SUPERF_EXT_TANQUE - FL_SUPERF_EXT_TANQUE */
    public function getFl08145a4507b1441392b67f0b92e0a530Attribute($value)
    {
        if (null == $this->C49) {
            return $this->c49;
        } else {
            return $this->C49;
        }
    }

    /* FL_TANQUE - FL_TANQUE */
    public function getFlaf7ff6e4460a4c29aa4f562d107b08e6Attribute($value)
    {
        if (null == $this->C50) {
            return $this->c50;
        } else {
            return $this->C50;
        }
    }

    /* FL_TAPA - FL_TAPA */
    public function getFl6da28b1e2cf24a80a69a411e9ad59931Attribute($value)
    {
        if (null == $this->C51) {
            return $this->c51;
        } else {
            return $this->C51;
        }
    }

    /* FL_TAPON_CIEGO - FL_TAPON_CIEGO */
    public function getFl9d4d30616a4649e38bbaf2c8fbf42378Attribute($value)
    {
        if (null == $this->C52) {
            return $this->c52;
        } else {
            return $this->C52;
        }
    }

    /* FL_TARA - FL_TARA */
    public function getFl7cc349af44e444e0bd9e95e844034531Attribute($value)
    {
        if (null == $this->C53) {
            return $this->c53;
        } else {
            return $this->C53;
        }
    }

    /* FL_TEMPERATURA_PIPA - FL_TEMPERATURA_PIPA */
    public function getFl920cf5079f374146a5fdeffe7a9e5891Attribute($value)
    {
        if (null == $this->C54) {
            return $this->c54;
        } else {
            return $this->C54;
        }
    }

    /* FL_TEMPERATURA_SILO - FL_TEMPERATURA_SILO */
    public function getFl7b5104060db84fbeace4b8399bba9b85Attribute($value)
    {
        if (null == $this->C55) {
            return $this->c55;
        } else {
            return $this->C55;
        }
    }

    /* FL_VALVULA - FL_VALVULA */
    public function getFl9a19694be39944e495772deede9d95daAttribute($value)
    {
        if (null == $this->C56) {
            return $this->c56;
        } else {
            return $this->C56;
        }
    }

    /* FL_VIDRIOS - FL_VIDRIOS */
    public function getFl11d5c4d3afdd4f9c9e5c1347ec4cec55Attribute($value)
    {
        if (null == $this->C57) {
            return $this->c57;
        } else {
            return $this->C57;
        }
    }

    /* FL_VOLUMEN - Volumen */
    public function getFl5755462178904e12a047f5ef29ff2eebAttribute($value)
    {
        if (null == $this->C58) {
            return $this->c58;
        } else {
            return $this->C58;
        }
    }

    /* PK_TRASPASOS - LLave primaria de la tabla de traspasos */
    public function getFlfb86a263ab8e4f6f975fa9b91fbb74baAttribute($value)
    {
        if (null == $this->C59) {
            return $this->c59;
        } else {
            return $this->C59;
        }
    }
}
