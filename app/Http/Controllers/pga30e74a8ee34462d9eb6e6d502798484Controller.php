<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:58:04
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * recibasForm - recibasForm.
 */
class pga30e74a8ee34462d9eb6e6d502798484Controller extends Controller
{
    /**
     * Constructor of the Controller.
     */
    public function __construct()
    {
    }

    /**
     * Post Action of the Controller.
     */
    public function post(Request $request)
    {
        $current_params = \Route::current()->parameters();

        $input = $request->all();

        foreach ($current_params as $key => $value) {
            $input[$key] = $current_params[$key];
        }

        $request->replace($input);

        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        //Assign predefined value to documentosP_sesion
        if (!$request->session()->has('sesa742059dcfa84f048e6f1fe31eb19054')) {
            $request->session()->put('sesa742059dcfa84f048e6f1fe31eb19054', 'cadena');
        }

        //Assign predefined value to username
        if (!$request->session()->has('ses5e122755c3a24f5d8789755168e9de27')) {
            $request->session()->put('ses5e122755c3a24f5d8789755168e9de27', 0);
        }

        // Guardar datos - Guardar datos
        if (null != $request->input('ctl3f4c37c6271849e1afdcbaa396e78f3f_379ee0978aff47ffb961c9bfa995720c') && null != $request->input('hid379ee0978aff47ffb961c9bfa995720c') && '379ee0978aff47ffb961c9bfa995720c' == $request->input('hid379ee0978aff47ffb961c9bfa995720c')) {
            $key = 0;
            $isNew = false;
            if (null != $request->input('u')) {
                $key = $request->input('u');
            }

            $tb = \App\tb26089e4e14394b81a58e8234814c5cc9::where('PK_RECIBAS', $key)->first();
            if (null == $tb) {
                $isNew = true;
                $tb = new \App\tb26089e4e14394b81a58e8234814c5cc9();
            }

            if (null != $request->input('ctlf243c64ab6f74f3ca2fe1883bf8cf3b6_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_PRODUCTOR = $request->input('ctlf243c64ab6f74f3ca2fe1883bf8cf3b6_379ee0978aff47ffb961c9bfa995720c'); //FK_PRODUCTOR
            } elseif (null == $request->input('ctlf243c64ab6f74f3ca2fe1883bf8cf3b6_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_PRODUCTOR = null;
            }

            if (null != $request->input('ctla427f0e2d3c547b48490a1698fc56078_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_TIPO_LECHE = $request->input('ctla427f0e2d3c547b48490a1698fc56078_379ee0978aff47ffb961c9bfa995720c'); //FK_TIPO_LECHE
            } elseif (null == $request->input('ctla427f0e2d3c547b48490a1698fc56078_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_TIPO_LECHE = null;
            }

            if (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                $tb->FL_FECHA_REGISTRO = \DateTime::createFromFormat(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')))->format('Y-m-d H:i'); //FL_FECHA_REGISTRO
            } elseif (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' == date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                $tb->FL_FECHA_REGISTRO = null;
            }

            if (null != $request->input('ctl4fcf0c505b8742b6be86aa30e7510437_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_ACIDEZ = $request->input('ctl4fcf0c505b8742b6be86aa30e7510437_379ee0978aff47ffb961c9bfa995720c'); //FL_ACIDEZ
            } elseif (null == $request->input('ctl4fcf0c505b8742b6be86aa30e7510437_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_ACIDEZ = null;
            }

            if (null != $request->input('ctlad79f50bb098465d844b336d8360dbb0_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_CRIOSCOPIA = $request->input('ctlad79f50bb098465d844b336d8360dbb0_379ee0978aff47ffb961c9bfa995720c'); //FL_CRIOSCOPIA
            } elseif (null == $request->input('ctlad79f50bb098465d844b336d8360dbb0_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_CRIOSCOPIA = null;
            }

            if (null != $request->input('ctl868203e4d32442a5998aa8c7437416b6_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_DENSIDAD = $request->input('ctl868203e4d32442a5998aa8c7437416b6_379ee0978aff47ffb961c9bfa995720c'); //FL_DENSIDAD
            } elseif (null == $request->input('ctl868203e4d32442a5998aa8c7437416b6_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_DENSIDAD = null;
            }

            if (null != $request->input('ctl5e58b08ea5104ef282ffd114ca357367_379ee0978aff47ffb961c9bfa995720c') && '' != $request->input('ctl5e58b08ea5104ef282ffd114ca357367_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_FECHA_RECIBA = \DateTime::createFromFormat(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), $request->input('ctl5e58b08ea5104ef282ffd114ca357367_379ee0978aff47ffb961c9bfa995720c'))->format('Y-m-d H:i'); //FL_FECHA_RECIBA
            } elseif (null != $request->input('ctl5e58b08ea5104ef282ffd114ca357367_379ee0978aff47ffb961c9bfa995720c') && '' == $request->input('ctl5e58b08ea5104ef282ffd114ca357367_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_FECHA_RECIBA = null;
            }

            if (null != $request->input('ctl8734b09c187b4742b70f35395d9a2fa0_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_GRASA = $request->input('ctl8734b09c187b4742b70f35395d9a2fa0_379ee0978aff47ffb961c9bfa995720c'); //FL_GRASA
            } elseif (null == $request->input('ctl8734b09c187b4742b70f35395d9a2fa0_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_GRASA = null;
            }

            if (null != $request->input('ctla4804c7ddbcb40f784eafc8de5ad47ac_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_KILOGRAMOS = $request->input('ctla4804c7ddbcb40f784eafc8de5ad47ac_379ee0978aff47ffb961c9bfa995720c'); //FL_KILOGRAMOS
            } elseif (null == $request->input('ctla4804c7ddbcb40f784eafc8de5ad47ac_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_KILOGRAMOS = null;
            }

            if (null != $request->input('ctlb02b24e2aff248c489dfb44d82b1d9be_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_PROTEÍNA = $request->input('ctlb02b24e2aff248c489dfb44d82b1d9be_379ee0978aff47ffb961c9bfa995720c'); //FL_PROTEÍNA
            } elseif (null == $request->input('ctlb02b24e2aff248c489dfb44d82b1d9be_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_PROTEÍNA = null;
            }

            if (null != $request->input('ctl8f23da66ff534c0fa80585ebc1069c00_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_TEMPERATURA = $request->input('ctl8f23da66ff534c0fa80585ebc1069c00_379ee0978aff47ffb961c9bfa995720c'); //FL_TEMPERATURA
            } elseif (null == $request->input('ctl8f23da66ff534c0fa80585ebc1069c00_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_TEMPERATURA = null;
            }

            if (null != $request->input('ctla0d4e4331a0f4bc38f40ce901dcd361e_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_TURNO = $request->input('ctla0d4e4331a0f4bc38f40ce901dcd361e_379ee0978aff47ffb961c9bfa995720c'); //FK_TURNO
            } elseif (null == $request->input('ctla0d4e4331a0f4bc38f40ce901dcd361e_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_TURNO = null;
            }

            if (null != $request->input('ctlbde5a35ff26a4232bc85cd008a33d72d_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_ALCOHOL = $request->input('ctlbde5a35ff26a4232bc85cd008a33d72d_379ee0978aff47ffb961c9bfa995720c'); //FL_ALCOHOL
            } elseif (null == $request->input('ctlbde5a35ff26a4232bc85cd008a33d72d_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_ALCOHOL = null;
            }

            if (null != $request->input('ctle0cf4b380a2241e0bc5ca1ce7bbdb350_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_ANTIBIOTICOS = $request->input('ctle0cf4b380a2241e0bc5ca1ce7bbdb350_379ee0978aff47ffb961c9bfa995720c'); //FL_ANTIBIOTICOS
            } elseif (null == $request->input('ctle0cf4b380a2241e0bc5ca1ce7bbdb350_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_ANTIBIOTICOS = null;
            }

            if (null != $request->input('ctldad7c26eed6b4c25a3153d113c0317ff_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_CELULAS_SOMATICAS = $request->input('ctldad7c26eed6b4c25a3153d113c0317ff_379ee0978aff47ffb961c9bfa995720c'); //FL_CELULAS_SOMATICAS
            } elseif (null == $request->input('ctldad7c26eed6b4c25a3153d113c0317ff_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_CELULAS_SOMATICAS = null;
            }

            if (null != $request->input('ctl1b97a56f6eed46e98121b3f47f8a5f85_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_COMPUESTOSALCALINOS = $request->input('ctl1b97a56f6eed46e98121b3f47f8a5f85_379ee0978aff47ffb961c9bfa995720c'); //FL_COMPUESTOSALCALINOS
            } elseif (null == $request->input('ctl1b97a56f6eed46e98121b3f47f8a5f85_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_COMPUESTOSALCALINOS = null;
            }

            if (null != $request->input('ctl3008423d44144f2ab8f8244d504f997c_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_DERIVADOSCLORADOS = $request->input('ctl3008423d44144f2ab8f8244d504f997c_379ee0978aff47ffb961c9bfa995720c'); //FL_DERIVADOSCLORADOS
            } elseif (null == $request->input('ctl3008423d44144f2ab8f8244d504f997c_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_DERIVADOSCLORADOS = null;
            }

            if (null != $request->input('ctl1ac84e1606f640ed8b77e379d6caeb15_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_FORMALDEHIDO = $request->input('ctl1ac84e1606f640ed8b77e379d6caeb15_379ee0978aff47ffb961c9bfa995720c'); //FL_FORMALDEHIDO
            } elseif (null == $request->input('ctl1ac84e1606f640ed8b77e379d6caeb15_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_FORMALDEHIDO = null;
            }

            if (null != $request->input('ctld8131d7a3d4243a5944116e5da500cca_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_ORGANOLEPTICO = $request->input('ctld8131d7a3d4243a5944116e5da500cca_379ee0978aff47ffb961c9bfa995720c'); //FL_ORGANOLEPTICO
            } elseif (null == $request->input('ctld8131d7a3d4243a5944116e5da500cca_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_ORGANOLEPTICO = null;
            }

            if (null != $request->input('ctl4bf439995eb5405abf0aeaaaec9d8a6b_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_PEROXIDODEHIDROGENO = $request->input('ctl4bf439995eb5405abf0aeaaaec9d8a6b_379ee0978aff47ffb961c9bfa995720c'); //FL_PEROXIDODEHIDROGENO
            } elseif (null == $request->input('ctl4bf439995eb5405abf0aeaaaec9d8a6b_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_PEROXIDODEHIDROGENO = null;
            }

            if (null != $request->input('ctl6745aaad4a8f422d929d3169f529dc33_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_REDUCTASA = $request->input('ctl6745aaad4a8f422d929d3169f529dc33_379ee0978aff47ffb961c9bfa995720c'); //FL_REDUCTASA
            } elseif (null == $request->input('ctl6745aaad4a8f422d929d3169f529dc33_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_REDUCTASA = null;
            }

            if (null != $request->input('ctl53b9fd590df848e5a652f8b8ec353c6f_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_S_N_G = $request->input('ctl53b9fd590df848e5a652f8b8ec353c6f_379ee0978aff47ffb961c9bfa995720c'); //FL_S_N_G
            } elseif (null == $request->input('ctl53b9fd590df848e5a652f8b8ec353c6f_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_S_N_G = null;
            }

            if (null != $request->input('ctl769f9a1c9d4c4b58a88514997110fb2f_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_S_T = $request->input('ctl769f9a1c9d4c4b58a88514997110fb2f_379ee0978aff47ffb961c9bfa995720c'); //FL_S_T
            } elseif (null == $request->input('ctl769f9a1c9d4c4b58a88514997110fb2f_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_S_T = null;
            }

            if (null != $request->input('ctl31abf3e63af94708845a4a2a6f4e5688_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_VOLUMEN = $request->input('ctl31abf3e63af94708845a4a2a6f4e5688_379ee0978aff47ffb961c9bfa995720c'); //FL_VOLUMEN
            } elseif (null == $request->input('ctl31abf3e63af94708845a4a2a6f4e5688_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_VOLUMEN = null;
            }

            if (null != $request->input('ctlcae98d64bfce44ef9e63f9fd487cc1b1_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_EXCESO_MAT_EXTR = $request->input('ctlcae98d64bfce44ef9e63f9fd487cc1b1_379ee0978aff47ffb961c9bfa995720c'); //FL_EXCESO_MAT_EXTR
            } elseif (null == $request->input('ctlcae98d64bfce44ef9e63f9fd487cc1b1_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_EXCESO_MAT_EXTR = null;
            }

            if (null != $request->input('ctl083ec1a2979d4e53ab9ea8e4ddb1f57a_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_EXC_MAT_EXTR_TEXT = $request->input('ctl083ec1a2979d4e53ab9ea8e4ddb1f57a_379ee0978aff47ffb961c9bfa995720c'); //FL_EXC_MAT_EXTR_TEXT
            } elseif (null == $request->input('ctl083ec1a2979d4e53ab9ea8e4ddb1f57a_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_EXC_MAT_EXTR_TEXT = null;
            }

            if (null != $request->input('ctla585d9fe8366480f8164c152bd7c4051_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_OTRAS_ESPECIF_TEXT = $request->input('ctla585d9fe8366480f8164c152bd7c4051_379ee0978aff47ffb961c9bfa995720c'); //FL_OTRAS_ESPECIF_TEXT
            } elseif (null == $request->input('ctla585d9fe8366480f8164c152bd7c4051_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_OTRAS_ESPECIF_TEXT = null;
            }

            if (null != $request->input('ctl7080ebc1aa6a4a72b064f86d310558ba_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_OTRAS_ESPECIF = $request->input('ctl7080ebc1aa6a4a72b064f86d310558ba_379ee0978aff47ffb961c9bfa995720c'); //FL_OTRAS_ESPECIF
            } elseif (null == $request->input('ctl7080ebc1aa6a4a72b064f86d310558ba_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_OTRAS_ESPECIF = null;
            }

            if (null != $request->input('ctl320445eb90d547c09247f380dbb479b9_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_ESTATUS = $request->input('ctl320445eb90d547c09247f380dbb479b9_379ee0978aff47ffb961c9bfa995720c'); //FK_ESTATUS
            } elseif (null == $request->input('ctl320445eb90d547c09247f380dbb479b9_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_ESTATUS = null;
            }

            if (null != $request->input('ctl2aae2e2fe02643aab70c60bf5f8d762d_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_SABOR = $request->input('ctl2aae2e2fe02643aab70c60bf5f8d762d_379ee0978aff47ffb961c9bfa995720c'); //FL_SABOR
            } elseif (null == $request->input('ctl2aae2e2fe02643aab70c60bf5f8d762d_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_SABOR = null;
            }

            if (null != $request->input('ctlf459c0299c31485c943e72638572a02c_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_OLOR = $request->input('ctlf459c0299c31485c943e72638572a02c_379ee0978aff47ffb961c9bfa995720c'); //FL_OLOR
            } elseif (null == $request->input('ctlf459c0299c31485c943e72638572a02c_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_OLOR = null;
            }

            if (null != $request->input('ctl9fec85c6acb24335b2af5bc5ffd57ef3_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_COLOR = $request->input('ctl9fec85c6acb24335b2af5bc5ffd57ef3_379ee0978aff47ffb961c9bfa995720c'); //FL_COLOR
            } elseif (null == $request->input('ctl9fec85c6acb24335b2af5bc5ffd57ef3_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FL_COLOR = null;
            }

            $tb->save();

            $lst[] = $tb;

            $key = 0;
            $isNew = false;
            if (0 != null) {
                $key = 0;
            }

            $tb = \App\tb9591feb42802436699a2b32a255e9101::where('PK_HISTORIAL', $key)->first();
            if (null == $tb) {
                $isNew = true;
                $tb = new \App\tb9591feb42802436699a2b32a255e9101();
            }

            if (1 != null) {
                $tb->FK_ACCION = 1; //FK_ACCION
            } elseif (1 == null) {
                $tb->FK_ACCION = null;
            }

            if (null != $request->input('ctl320445eb90d547c09247f380dbb479b9_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_ESTATUS = $request->input('ctl320445eb90d547c09247f380dbb479b9_379ee0978aff47ffb961c9bfa995720c'); //FK_ESTATUS
            } elseif (null == $request->input('ctl320445eb90d547c09247f380dbb479b9_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_ESTATUS = null;
            }

            if (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                $tb->FL_FECHA = \DateTime::createFromFormat(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')))->format('Y-m-d H:i'); //FL_FECHA
            } elseif (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' == date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                $tb->FL_FECHA = null;
            }

            if (null != $request->input('ctl320445eb90d547c09247f380dbb479b9_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_USUARIO = $request->input('ctl320445eb90d547c09247f380dbb479b9_379ee0978aff47ffb961c9bfa995720c'); //FK_USUARIO
            } elseif (null == $request->input('ctl320445eb90d547c09247f380dbb479b9_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_USUARIO = null;
            }

            if (null != $lst[0]->PK_RECIBAS) {
                $tb->FK_RECIBAS = $lst[0]->PK_RECIBAS; //FK_RECIBAS
            } elseif (null == $lst[0]->PK_RECIBAS) {
                $tb->FK_RECIBAS = null;
            }

            if (null != $request->input('ctlf243c64ab6f74f3ca2fe1883bf8cf3b6_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_PRODUCTOR = $request->input('ctlf243c64ab6f74f3ca2fe1883bf8cf3b6_379ee0978aff47ffb961c9bfa995720c'); //FK_PRODUCTOR
            } elseif (null == $request->input('ctlf243c64ab6f74f3ca2fe1883bf8cf3b6_379ee0978aff47ffb961c9bfa995720c')) {
                $tb->FK_PRODUCTOR = null;
            }

            $tb->save();

            $lst[] = $tb;

            return \Response::json($lst);
        }

        return null;
    }

    /**
     * Index Action of the Controller.
     *
     * @param request Request object
     */
    public function index(Request $request)
    {
        $current_params = \Route::current()->parameters();

        $input = $request->all();

        foreach ($current_params as $key => $value) {
            $input[$key] = $current_params[$key];
        }

        $request->replace($input);

        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        //Assign predefined value to documentosP_sesion
        if (!$request->session()->has('sesa742059dcfa84f048e6f1fe31eb19054')) {
            $request->session()->put('sesa742059dcfa84f048e6f1fe31eb19054', 'cadena');
        }

        //Assign predefined value to username
        if (!$request->session()->has('ses5e122755c3a24f5d8789755168e9de27')) {
            $request->session()->put('ses5e122755c3a24f5d8789755168e9de27', 0);
        }

        $title = '';
        $arrWiths = [];

        // Coleccion organoleptica +/- - Coleccion organoleptica +/-

        $par6185a7056560433494dba94e9ae59107158bc40801d94ebeaf1a1ca5b03d8b23 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107158bc40801d94ebeaf1a1ca5b03d8b23) {
            $par6185a7056560433494dba94e9ae59107158bc40801d94ebeaf1a1ca5b03d8b23 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860158bc40801d94ebeaf1a1ca5b03d8b23 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860158bc40801d94ebeaf1a1ca5b03d8b23) {
            $par0a0ce2af85ab462a808e0270326fb860158bc40801d94ebeaf1a1ca5b03d8b23 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce158bc40801d94ebeaf1a1ca5b03d8b23 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce158bc40801d94ebeaf1a1ca5b03d8b23) {
            $par5551ae677d6b488ebd38625d0f5d9fce158bc40801d94ebeaf1a1ca5b03d8b23 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce158bc40801d94ebeaf1a1ca5b03d8b23) {
            $par5551ae677d6b488ebd38625d0f5d9fce158bc40801d94ebeaf1a1ca5b03d8b23 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5158bc40801d94ebeaf1a1ca5b03d8b23 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5158bc40801d94ebeaf1a1ca5b03d8b23) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5158bc40801d94ebeaf1a1ca5b03d8b23 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5158bc40801d94ebeaf1a1ca5b03d8b23) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5158bc40801d94ebeaf1a1ca5b03d8b23 = '';
        }

        $v158bc40801d94ebeaf1a1ca5b03d8b23 = \App\repf782f923fd0247bd9f4010b717e52999::mt11426b5b366c43e089350a1ce7d0fd2f($par6185a7056560433494dba94e9ae59107158bc40801d94ebeaf1a1ca5b03d8b23, $par0a0ce2af85ab462a808e0270326fb860158bc40801d94ebeaf1a1ca5b03d8b23, $par5551ae677d6b488ebd38625d0f5d9fce158bc40801d94ebeaf1a1ca5b03d8b23, $par8fce8a73ac264e4a8f3b56d8b991b8a5158bc40801d94ebeaf1a1ca5b03d8b23);

        $v158bc40801d94ebeaf1a1ca5b03d8b23Ajax = \URL::to('/').'/api/11426b5b366c43e089350a1ce7d0fd2f/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Coleccion Si/No Color - Coleccion Si/No Color

        $par6185a7056560433494dba94e9ae5910719dc48dcaad24ef09f2089e7b086d50e = 0;

        if (null == $par6185a7056560433494dba94e9ae5910719dc48dcaad24ef09f2089e7b086d50e) {
            $par6185a7056560433494dba94e9ae5910719dc48dcaad24ef09f2089e7b086d50e = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86019dc48dcaad24ef09f2089e7b086d50e = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86019dc48dcaad24ef09f2089e7b086d50e) {
            $par0a0ce2af85ab462a808e0270326fb86019dc48dcaad24ef09f2089e7b086d50e = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce19dc48dcaad24ef09f2089e7b086d50e = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce19dc48dcaad24ef09f2089e7b086d50e) {
            $par5551ae677d6b488ebd38625d0f5d9fce19dc48dcaad24ef09f2089e7b086d50e = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce19dc48dcaad24ef09f2089e7b086d50e) {
            $par5551ae677d6b488ebd38625d0f5d9fce19dc48dcaad24ef09f2089e7b086d50e = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a519dc48dcaad24ef09f2089e7b086d50e = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a519dc48dcaad24ef09f2089e7b086d50e) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a519dc48dcaad24ef09f2089e7b086d50e = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a519dc48dcaad24ef09f2089e7b086d50e) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a519dc48dcaad24ef09f2089e7b086d50e = '';
        }

        $v19dc48dcaad24ef09f2089e7b086d50e = \App\repf782f923fd0247bd9f4010b717e52999::mta45ba0c141a849e4a22262c2f3b3dece($par6185a7056560433494dba94e9ae5910719dc48dcaad24ef09f2089e7b086d50e, $par0a0ce2af85ab462a808e0270326fb86019dc48dcaad24ef09f2089e7b086d50e, $par5551ae677d6b488ebd38625d0f5d9fce19dc48dcaad24ef09f2089e7b086d50e, $par8fce8a73ac264e4a8f3b56d8b991b8a519dc48dcaad24ef09f2089e7b086d50e);

        $v19dc48dcaad24ef09f2089e7b086d50eAjax = \URL::to('/').'/api/a45ba0c141a849e4a22262c2f3b3dece/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Coleccion Si/No Exceso Mat - Coleccion Si/No Exceso Mat

        $par6185a7056560433494dba94e9ae59107ed29a3725bfb461d95a6f73467ef4936 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107ed29a3725bfb461d95a6f73467ef4936) {
            $par6185a7056560433494dba94e9ae59107ed29a3725bfb461d95a6f73467ef4936 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860ed29a3725bfb461d95a6f73467ef4936 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860ed29a3725bfb461d95a6f73467ef4936) {
            $par0a0ce2af85ab462a808e0270326fb860ed29a3725bfb461d95a6f73467ef4936 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fceed29a3725bfb461d95a6f73467ef4936 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fceed29a3725bfb461d95a6f73467ef4936) {
            $par5551ae677d6b488ebd38625d0f5d9fceed29a3725bfb461d95a6f73467ef4936 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fceed29a3725bfb461d95a6f73467ef4936) {
            $par5551ae677d6b488ebd38625d0f5d9fceed29a3725bfb461d95a6f73467ef4936 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5ed29a3725bfb461d95a6f73467ef4936 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5ed29a3725bfb461d95a6f73467ef4936) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5ed29a3725bfb461d95a6f73467ef4936 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5ed29a3725bfb461d95a6f73467ef4936) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5ed29a3725bfb461d95a6f73467ef4936 = '';
        }

        $ved29a3725bfb461d95a6f73467ef4936 = \App\repf782f923fd0247bd9f4010b717e52999::mtf60ce8cfb24740688244d679a0d17123($par6185a7056560433494dba94e9ae59107ed29a3725bfb461d95a6f73467ef4936, $par0a0ce2af85ab462a808e0270326fb860ed29a3725bfb461d95a6f73467ef4936, $par5551ae677d6b488ebd38625d0f5d9fceed29a3725bfb461d95a6f73467ef4936, $par8fce8a73ac264e4a8f3b56d8b991b8a5ed29a3725bfb461d95a6f73467ef4936);

        $ved29a3725bfb461d95a6f73467ef4936Ajax = \URL::to('/').'/api/f60ce8cfb24740688244d679a0d17123/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Coleccion Si/No Olor - Coleccion Si/No Olor

        $par6185a7056560433494dba94e9ae5910776ef6df60b2e4889bbe99766b55c5c84 = 0;

        if (null == $par6185a7056560433494dba94e9ae5910776ef6df60b2e4889bbe99766b55c5c84) {
            $par6185a7056560433494dba94e9ae5910776ef6df60b2e4889bbe99766b55c5c84 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86076ef6df60b2e4889bbe99766b55c5c84 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86076ef6df60b2e4889bbe99766b55c5c84) {
            $par0a0ce2af85ab462a808e0270326fb86076ef6df60b2e4889bbe99766b55c5c84 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce76ef6df60b2e4889bbe99766b55c5c84 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce76ef6df60b2e4889bbe99766b55c5c84) {
            $par5551ae677d6b488ebd38625d0f5d9fce76ef6df60b2e4889bbe99766b55c5c84 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce76ef6df60b2e4889bbe99766b55c5c84) {
            $par5551ae677d6b488ebd38625d0f5d9fce76ef6df60b2e4889bbe99766b55c5c84 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a576ef6df60b2e4889bbe99766b55c5c84 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a576ef6df60b2e4889bbe99766b55c5c84) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a576ef6df60b2e4889bbe99766b55c5c84 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a576ef6df60b2e4889bbe99766b55c5c84) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a576ef6df60b2e4889bbe99766b55c5c84 = '';
        }

        $v76ef6df60b2e4889bbe99766b55c5c84 = \App\repf782f923fd0247bd9f4010b717e52999::mtdb296e8ac1854fd7a592a5752ea7bcaf($par6185a7056560433494dba94e9ae5910776ef6df60b2e4889bbe99766b55c5c84, $par0a0ce2af85ab462a808e0270326fb86076ef6df60b2e4889bbe99766b55c5c84, $par5551ae677d6b488ebd38625d0f5d9fce76ef6df60b2e4889bbe99766b55c5c84, $par8fce8a73ac264e4a8f3b56d8b991b8a576ef6df60b2e4889bbe99766b55c5c84);

        $v76ef6df60b2e4889bbe99766b55c5c84Ajax = \URL::to('/').'/api/db296e8ac1854fd7a592a5752ea7bcaf/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Coleccion Si/No otras Esp - Coleccion Si/No otras Esp

        $par6185a7056560433494dba94e9ae59107dbab4e710ed842afb29fdd37991df69d = 0;

        if (null == $par6185a7056560433494dba94e9ae59107dbab4e710ed842afb29fdd37991df69d) {
            $par6185a7056560433494dba94e9ae59107dbab4e710ed842afb29fdd37991df69d = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860dbab4e710ed842afb29fdd37991df69d = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860dbab4e710ed842afb29fdd37991df69d) {
            $par0a0ce2af85ab462a808e0270326fb860dbab4e710ed842afb29fdd37991df69d = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcedbab4e710ed842afb29fdd37991df69d = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcedbab4e710ed842afb29fdd37991df69d) {
            $par5551ae677d6b488ebd38625d0f5d9fcedbab4e710ed842afb29fdd37991df69d = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcedbab4e710ed842afb29fdd37991df69d) {
            $par5551ae677d6b488ebd38625d0f5d9fcedbab4e710ed842afb29fdd37991df69d = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5dbab4e710ed842afb29fdd37991df69d = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5dbab4e710ed842afb29fdd37991df69d) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5dbab4e710ed842afb29fdd37991df69d = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5dbab4e710ed842afb29fdd37991df69d) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5dbab4e710ed842afb29fdd37991df69d = '';
        }

        $vdbab4e710ed842afb29fdd37991df69d = \App\repf782f923fd0247bd9f4010b717e52999::mt53997ac5439443aa8f5c702938e1d88e($par6185a7056560433494dba94e9ae59107dbab4e710ed842afb29fdd37991df69d, $par0a0ce2af85ab462a808e0270326fb860dbab4e710ed842afb29fdd37991df69d, $par5551ae677d6b488ebd38625d0f5d9fcedbab4e710ed842afb29fdd37991df69d, $par8fce8a73ac264e4a8f3b56d8b991b8a5dbab4e710ed842afb29fdd37991df69d);

        $vdbab4e710ed842afb29fdd37991df69dAjax = \URL::to('/').'/api/53997ac5439443aa8f5c702938e1d88e/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Coleccion Si/No Sabor - Coleccion Si/No Sabor

        $par6185a7056560433494dba94e9ae59107c402501838c34257a3af83ac95b57141 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107c402501838c34257a3af83ac95b57141) {
            $par6185a7056560433494dba94e9ae59107c402501838c34257a3af83ac95b57141 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860c402501838c34257a3af83ac95b57141 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860c402501838c34257a3af83ac95b57141) {
            $par0a0ce2af85ab462a808e0270326fb860c402501838c34257a3af83ac95b57141 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcec402501838c34257a3af83ac95b57141 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcec402501838c34257a3af83ac95b57141) {
            $par5551ae677d6b488ebd38625d0f5d9fcec402501838c34257a3af83ac95b57141 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcec402501838c34257a3af83ac95b57141) {
            $par5551ae677d6b488ebd38625d0f5d9fcec402501838c34257a3af83ac95b57141 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5c402501838c34257a3af83ac95b57141 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5c402501838c34257a3af83ac95b57141) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5c402501838c34257a3af83ac95b57141 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5c402501838c34257a3af83ac95b57141) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5c402501838c34257a3af83ac95b57141 = '';
        }

        $vc402501838c34257a3af83ac95b57141 = \App\repf782f923fd0247bd9f4010b717e52999::mt3d05a7040bbe4ea0b8e84c446dd46702($par6185a7056560433494dba94e9ae59107c402501838c34257a3af83ac95b57141, $par0a0ce2af85ab462a808e0270326fb860c402501838c34257a3af83ac95b57141, $par5551ae677d6b488ebd38625d0f5d9fcec402501838c34257a3af83ac95b57141, $par8fce8a73ac264e4a8f3b56d8b991b8a5c402501838c34257a3af83ac95b57141);

        $vc402501838c34257a3af83ac95b57141Ajax = \URL::to('/').'/api/3d05a7040bbe4ea0b8e84c446dd46702/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista Aceptado/rechazado - Lista Aceptado/rechazado

        $par6185a7056560433494dba94e9ae591078bf4bd9c35c0422d951399b88da8eb58 = 0;

        if (null == $par6185a7056560433494dba94e9ae591078bf4bd9c35c0422d951399b88da8eb58) {
            $par6185a7056560433494dba94e9ae591078bf4bd9c35c0422d951399b88da8eb58 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8608bf4bd9c35c0422d951399b88da8eb58 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8608bf4bd9c35c0422d951399b88da8eb58) {
            $par0a0ce2af85ab462a808e0270326fb8608bf4bd9c35c0422d951399b88da8eb58 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce8bf4bd9c35c0422d951399b88da8eb58 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce8bf4bd9c35c0422d951399b88da8eb58) {
            $par5551ae677d6b488ebd38625d0f5d9fce8bf4bd9c35c0422d951399b88da8eb58 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce8bf4bd9c35c0422d951399b88da8eb58) {
            $par5551ae677d6b488ebd38625d0f5d9fce8bf4bd9c35c0422d951399b88da8eb58 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a58bf4bd9c35c0422d951399b88da8eb58 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a58bf4bd9c35c0422d951399b88da8eb58) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a58bf4bd9c35c0422d951399b88da8eb58 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a58bf4bd9c35c0422d951399b88da8eb58) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a58bf4bd9c35c0422d951399b88da8eb58 = '';
        }

        $v8bf4bd9c35c0422d951399b88da8eb58 = \App\repf782f923fd0247bd9f4010b717e52999::mt1e85a51a7460425b9aaca542e4317283($par6185a7056560433494dba94e9ae591078bf4bd9c35c0422d951399b88da8eb58, $par0a0ce2af85ab462a808e0270326fb8608bf4bd9c35c0422d951399b88da8eb58, $par5551ae677d6b488ebd38625d0f5d9fce8bf4bd9c35c0422d951399b88da8eb58, $par8fce8a73ac264e4a8f3b56d8b991b8a58bf4bd9c35c0422d951399b88da8eb58);

        $v8bf4bd9c35c0422d951399b88da8eb58Ajax = \URL::to('/').'/api/1e85a51a7460425b9aaca542e4317283/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista alcohol - Lista alcohol

        $par6185a7056560433494dba94e9ae5910737450752c71a407ea14595b037f5c853 = 0;

        if (null == $par6185a7056560433494dba94e9ae5910737450752c71a407ea14595b037f5c853) {
            $par6185a7056560433494dba94e9ae5910737450752c71a407ea14595b037f5c853 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86037450752c71a407ea14595b037f5c853 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86037450752c71a407ea14595b037f5c853) {
            $par0a0ce2af85ab462a808e0270326fb86037450752c71a407ea14595b037f5c853 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce37450752c71a407ea14595b037f5c853 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce37450752c71a407ea14595b037f5c853) {
            $par5551ae677d6b488ebd38625d0f5d9fce37450752c71a407ea14595b037f5c853 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce37450752c71a407ea14595b037f5c853) {
            $par5551ae677d6b488ebd38625d0f5d9fce37450752c71a407ea14595b037f5c853 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a537450752c71a407ea14595b037f5c853 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a537450752c71a407ea14595b037f5c853) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a537450752c71a407ea14595b037f5c853 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a537450752c71a407ea14595b037f5c853) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a537450752c71a407ea14595b037f5c853 = '';
        }

        $v37450752c71a407ea14595b037f5c853 = \App\repf782f923fd0247bd9f4010b717e52999::mt736ef8c9724044ee90a11292b544103e($par6185a7056560433494dba94e9ae5910737450752c71a407ea14595b037f5c853, $par0a0ce2af85ab462a808e0270326fb86037450752c71a407ea14595b037f5c853, $par5551ae677d6b488ebd38625d0f5d9fce37450752c71a407ea14595b037f5c853, $par8fce8a73ac264e4a8f3b56d8b991b8a537450752c71a407ea14595b037f5c853);

        $v37450752c71a407ea14595b037f5c853Ajax = \URL::to('/').'/api/736ef8c9724044ee90a11292b544103e/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista antibioticos - Lista antibioticos

        $par6185a7056560433494dba94e9ae59107b2503189ccbd42c597a3eac5a8b3d239 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107b2503189ccbd42c597a3eac5a8b3d239) {
            $par6185a7056560433494dba94e9ae59107b2503189ccbd42c597a3eac5a8b3d239 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860b2503189ccbd42c597a3eac5a8b3d239 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860b2503189ccbd42c597a3eac5a8b3d239) {
            $par0a0ce2af85ab462a808e0270326fb860b2503189ccbd42c597a3eac5a8b3d239 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fceb2503189ccbd42c597a3eac5a8b3d239 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fceb2503189ccbd42c597a3eac5a8b3d239) {
            $par5551ae677d6b488ebd38625d0f5d9fceb2503189ccbd42c597a3eac5a8b3d239 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fceb2503189ccbd42c597a3eac5a8b3d239) {
            $par5551ae677d6b488ebd38625d0f5d9fceb2503189ccbd42c597a3eac5a8b3d239 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5b2503189ccbd42c597a3eac5a8b3d239 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5b2503189ccbd42c597a3eac5a8b3d239) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5b2503189ccbd42c597a3eac5a8b3d239 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5b2503189ccbd42c597a3eac5a8b3d239) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5b2503189ccbd42c597a3eac5a8b3d239 = '';
        }

        $vb2503189ccbd42c597a3eac5a8b3d239 = \App\repf782f923fd0247bd9f4010b717e52999::mt25fd0a4e7a4e45b2989d9bc8014bf714($par6185a7056560433494dba94e9ae59107b2503189ccbd42c597a3eac5a8b3d239, $par0a0ce2af85ab462a808e0270326fb860b2503189ccbd42c597a3eac5a8b3d239, $par5551ae677d6b488ebd38625d0f5d9fceb2503189ccbd42c597a3eac5a8b3d239, $par8fce8a73ac264e4a8f3b56d8b991b8a5b2503189ccbd42c597a3eac5a8b3d239);

        $vb2503189ccbd42c597a3eac5a8b3d239Ajax = \URL::to('/').'/api/25fd0a4e7a4e45b2989d9bc8014bf714/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista de compuestos - Lista de compuestos

        $par6185a7056560433494dba94e9ae591076d114fc5128546e9bc257374da053a11 = 0;

        if (null == $par6185a7056560433494dba94e9ae591076d114fc5128546e9bc257374da053a11) {
            $par6185a7056560433494dba94e9ae591076d114fc5128546e9bc257374da053a11 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8606d114fc5128546e9bc257374da053a11 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8606d114fc5128546e9bc257374da053a11) {
            $par0a0ce2af85ab462a808e0270326fb8606d114fc5128546e9bc257374da053a11 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce6d114fc5128546e9bc257374da053a11 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce6d114fc5128546e9bc257374da053a11) {
            $par5551ae677d6b488ebd38625d0f5d9fce6d114fc5128546e9bc257374da053a11 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce6d114fc5128546e9bc257374da053a11) {
            $par5551ae677d6b488ebd38625d0f5d9fce6d114fc5128546e9bc257374da053a11 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a56d114fc5128546e9bc257374da053a11 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a56d114fc5128546e9bc257374da053a11) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a56d114fc5128546e9bc257374da053a11 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a56d114fc5128546e9bc257374da053a11) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a56d114fc5128546e9bc257374da053a11 = '';
        }

        $v6d114fc5128546e9bc257374da053a11 = \App\repf782f923fd0247bd9f4010b717e52999::mt7ea65e64bf6f4242ba8a263a5b27eab5($par6185a7056560433494dba94e9ae591076d114fc5128546e9bc257374da053a11, $par0a0ce2af85ab462a808e0270326fb8606d114fc5128546e9bc257374da053a11, $par5551ae677d6b488ebd38625d0f5d9fce6d114fc5128546e9bc257374da053a11, $par8fce8a73ac264e4a8f3b56d8b991b8a56d114fc5128546e9bc257374da053a11);

        $v6d114fc5128546e9bc257374da053a11Ajax = \URL::to('/').'/api/7ea65e64bf6f4242ba8a263a5b27eab5/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista de productores - Lista de productores

        $par4a3af8ffced0440a861dfc0a64a7df881 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $par4a3af8ffced0440a861dfc0a64a7df881) {
            $par4a3af8ffced0440a861dfc0a64a7df881 = '0';
        }

        $par00626c2ae46a478aa2100971433ea90d1 = 1;

        if (null == $par00626c2ae46a478aa2100971433ea90d1) {
            $par00626c2ae46a478aa2100971433ea90d1 = '1';
        }

        $par6185a7056560433494dba94e9ae59107dd308c598aab4bdba01246d9f3598d1f = 0;

        if (null == $par6185a7056560433494dba94e9ae59107dd308c598aab4bdba01246d9f3598d1f) {
            $par6185a7056560433494dba94e9ae59107dd308c598aab4bdba01246d9f3598d1f = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860dd308c598aab4bdba01246d9f3598d1f = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860dd308c598aab4bdba01246d9f3598d1f) {
            $par0a0ce2af85ab462a808e0270326fb860dd308c598aab4bdba01246d9f3598d1f = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcedd308c598aab4bdba01246d9f3598d1f = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcedd308c598aab4bdba01246d9f3598d1f) {
            $par5551ae677d6b488ebd38625d0f5d9fcedd308c598aab4bdba01246d9f3598d1f = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcedd308c598aab4bdba01246d9f3598d1f) {
            $par5551ae677d6b488ebd38625d0f5d9fcedd308c598aab4bdba01246d9f3598d1f = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5dd308c598aab4bdba01246d9f3598d1f = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5dd308c598aab4bdba01246d9f3598d1f) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5dd308c598aab4bdba01246d9f3598d1f = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5dd308c598aab4bdba01246d9f3598d1f) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5dd308c598aab4bdba01246d9f3598d1f = '';
        }

        $vdd308c598aab4bdba01246d9f3598d1f = \App\repf782f923fd0247bd9f4010b717e52999::mt78425363b8964e69b078a6c87a0bf345($par4a3af8ffced0440a861dfc0a64a7df881, $par00626c2ae46a478aa2100971433ea90d1, $par6185a7056560433494dba94e9ae59107dd308c598aab4bdba01246d9f3598d1f, $par0a0ce2af85ab462a808e0270326fb860dd308c598aab4bdba01246d9f3598d1f, $par5551ae677d6b488ebd38625d0f5d9fcedd308c598aab4bdba01246d9f3598d1f, $par8fce8a73ac264e4a8f3b56d8b991b8a5dd308c598aab4bdba01246d9f3598d1f);

        $vdd308c598aab4bdba01246d9f3598d1fAjax = \URL::to('/').'/api/78425363b8964e69b078a6c87a0bf345/'.(null == $par4a3af8ffced0440a861dfc0a64a7df881 ? '-' : ('' == $par4a3af8ffced0440a861dfc0a64a7df881 ? '-' : $par4a3af8ffced0440a861dfc0a64a7df881)).'/'.(null == $par00626c2ae46a478aa2100971433ea90d1 ? '-' : ('' == $par00626c2ae46a478aa2100971433ea90d1 ? '-' : $par00626c2ae46a478aa2100971433ea90d1)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista de pruebas no caracteristicas - Lista de pruebas no caracteristicas

        $par6185a7056560433494dba94e9ae591077a1a583d3a254a30b4aab92d0db5493e = 0;

        if (null == $par6185a7056560433494dba94e9ae591077a1a583d3a254a30b4aab92d0db5493e) {
            $par6185a7056560433494dba94e9ae591077a1a583d3a254a30b4aab92d0db5493e = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8607a1a583d3a254a30b4aab92d0db5493e = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8607a1a583d3a254a30b4aab92d0db5493e) {
            $par0a0ce2af85ab462a808e0270326fb8607a1a583d3a254a30b4aab92d0db5493e = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce7a1a583d3a254a30b4aab92d0db5493e = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce7a1a583d3a254a30b4aab92d0db5493e) {
            $par5551ae677d6b488ebd38625d0f5d9fce7a1a583d3a254a30b4aab92d0db5493e = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce7a1a583d3a254a30b4aab92d0db5493e) {
            $par5551ae677d6b488ebd38625d0f5d9fce7a1a583d3a254a30b4aab92d0db5493e = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a57a1a583d3a254a30b4aab92d0db5493e = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a57a1a583d3a254a30b4aab92d0db5493e) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a57a1a583d3a254a30b4aab92d0db5493e = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a57a1a583d3a254a30b4aab92d0db5493e) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a57a1a583d3a254a30b4aab92d0db5493e = '';
        }

        $v7a1a583d3a254a30b4aab92d0db5493e = \App\repf782f923fd0247bd9f4010b717e52999::mt5f8dfa3d49e34584903973973a9d82a0($par6185a7056560433494dba94e9ae591077a1a583d3a254a30b4aab92d0db5493e, $par0a0ce2af85ab462a808e0270326fb8607a1a583d3a254a30b4aab92d0db5493e, $par5551ae677d6b488ebd38625d0f5d9fce7a1a583d3a254a30b4aab92d0db5493e, $par8fce8a73ac264e4a8f3b56d8b991b8a57a1a583d3a254a30b4aab92d0db5493e);

        $v7a1a583d3a254a30b4aab92d0db5493eAjax = \URL::to('/').'/api/5f8dfa3d49e34584903973973a9d82a0/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista de turnos - Lista de turnos

        $par6185a7056560433494dba94e9ae591079b381af7a05f44d6858ce06f0b22366f = 0;

        if (null == $par6185a7056560433494dba94e9ae591079b381af7a05f44d6858ce06f0b22366f) {
            $par6185a7056560433494dba94e9ae591079b381af7a05f44d6858ce06f0b22366f = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8609b381af7a05f44d6858ce06f0b22366f = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8609b381af7a05f44d6858ce06f0b22366f) {
            $par0a0ce2af85ab462a808e0270326fb8609b381af7a05f44d6858ce06f0b22366f = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce9b381af7a05f44d6858ce06f0b22366f = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce9b381af7a05f44d6858ce06f0b22366f) {
            $par5551ae677d6b488ebd38625d0f5d9fce9b381af7a05f44d6858ce06f0b22366f = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce9b381af7a05f44d6858ce06f0b22366f) {
            $par5551ae677d6b488ebd38625d0f5d9fce9b381af7a05f44d6858ce06f0b22366f = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a59b381af7a05f44d6858ce06f0b22366f = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a59b381af7a05f44d6858ce06f0b22366f) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a59b381af7a05f44d6858ce06f0b22366f = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a59b381af7a05f44d6858ce06f0b22366f) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a59b381af7a05f44d6858ce06f0b22366f = '';
        }

        $v9b381af7a05f44d6858ce06f0b22366f = \App\repf782f923fd0247bd9f4010b717e52999::mte800c6c9266049ac89aa6b57c3d3512e($par6185a7056560433494dba94e9ae591079b381af7a05f44d6858ce06f0b22366f, $par0a0ce2af85ab462a808e0270326fb8609b381af7a05f44d6858ce06f0b22366f, $par5551ae677d6b488ebd38625d0f5d9fce9b381af7a05f44d6858ce06f0b22366f, $par8fce8a73ac264e4a8f3b56d8b991b8a59b381af7a05f44d6858ce06f0b22366f);

        $v9b381af7a05f44d6858ce06f0b22366fAjax = \URL::to('/').'/api/e800c6c9266049ac89aa6b57c3d3512e/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista derivados - Lista derivados

        $par6185a7056560433494dba94e9ae591072bdbffe837f84d2aabe18b72cddc7e84 = 0;

        if (null == $par6185a7056560433494dba94e9ae591072bdbffe837f84d2aabe18b72cddc7e84) {
            $par6185a7056560433494dba94e9ae591072bdbffe837f84d2aabe18b72cddc7e84 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8602bdbffe837f84d2aabe18b72cddc7e84 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8602bdbffe837f84d2aabe18b72cddc7e84) {
            $par0a0ce2af85ab462a808e0270326fb8602bdbffe837f84d2aabe18b72cddc7e84 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce2bdbffe837f84d2aabe18b72cddc7e84 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce2bdbffe837f84d2aabe18b72cddc7e84) {
            $par5551ae677d6b488ebd38625d0f5d9fce2bdbffe837f84d2aabe18b72cddc7e84 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce2bdbffe837f84d2aabe18b72cddc7e84) {
            $par5551ae677d6b488ebd38625d0f5d9fce2bdbffe837f84d2aabe18b72cddc7e84 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a52bdbffe837f84d2aabe18b72cddc7e84 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a52bdbffe837f84d2aabe18b72cddc7e84) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a52bdbffe837f84d2aabe18b72cddc7e84 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a52bdbffe837f84d2aabe18b72cddc7e84) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a52bdbffe837f84d2aabe18b72cddc7e84 = '';
        }

        $v2bdbffe837f84d2aabe18b72cddc7e84 = \App\repf782f923fd0247bd9f4010b717e52999::mt7ec75251c10d4427ac558b6ec592e5fe($par6185a7056560433494dba94e9ae591072bdbffe837f84d2aabe18b72cddc7e84, $par0a0ce2af85ab462a808e0270326fb8602bdbffe837f84d2aabe18b72cddc7e84, $par5551ae677d6b488ebd38625d0f5d9fce2bdbffe837f84d2aabe18b72cddc7e84, $par8fce8a73ac264e4a8f3b56d8b991b8a52bdbffe837f84d2aabe18b72cddc7e84);

        $v2bdbffe837f84d2aabe18b72cddc7e84Ajax = \URL::to('/').'/api/7ec75251c10d4427ac558b6ec592e5fe/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista formaldehido - Lista formaldehido

        $par6185a7056560433494dba94e9ae591075cd9d30be49d4fa1a0b94dca12646dee = 0;

        if (null == $par6185a7056560433494dba94e9ae591075cd9d30be49d4fa1a0b94dca12646dee) {
            $par6185a7056560433494dba94e9ae591075cd9d30be49d4fa1a0b94dca12646dee = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8605cd9d30be49d4fa1a0b94dca12646dee = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8605cd9d30be49d4fa1a0b94dca12646dee) {
            $par0a0ce2af85ab462a808e0270326fb8605cd9d30be49d4fa1a0b94dca12646dee = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce5cd9d30be49d4fa1a0b94dca12646dee = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce5cd9d30be49d4fa1a0b94dca12646dee) {
            $par5551ae677d6b488ebd38625d0f5d9fce5cd9d30be49d4fa1a0b94dca12646dee = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce5cd9d30be49d4fa1a0b94dca12646dee) {
            $par5551ae677d6b488ebd38625d0f5d9fce5cd9d30be49d4fa1a0b94dca12646dee = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a55cd9d30be49d4fa1a0b94dca12646dee = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a55cd9d30be49d4fa1a0b94dca12646dee) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a55cd9d30be49d4fa1a0b94dca12646dee = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a55cd9d30be49d4fa1a0b94dca12646dee) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a55cd9d30be49d4fa1a0b94dca12646dee = '';
        }

        $v5cd9d30be49d4fa1a0b94dca12646dee = \App\repf782f923fd0247bd9f4010b717e52999::mt9018af07a8a64e00954e09446c2c45f5($par6185a7056560433494dba94e9ae591075cd9d30be49d4fa1a0b94dca12646dee, $par0a0ce2af85ab462a808e0270326fb8605cd9d30be49d4fa1a0b94dca12646dee, $par5551ae677d6b488ebd38625d0f5d9fce5cd9d30be49d4fa1a0b94dca12646dee, $par8fce8a73ac264e4a8f3b56d8b991b8a55cd9d30be49d4fa1a0b94dca12646dee);

        $v5cd9d30be49d4fa1a0b94dca12646deeAjax = \URL::to('/').'/api/9018af07a8a64e00954e09446c2c45f5/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista peroxido - Lista peroxido

        $par6185a7056560433494dba94e9ae591077e6e861bdb614541ad72e52cefa31ea5 = 0;

        if (null == $par6185a7056560433494dba94e9ae591077e6e861bdb614541ad72e52cefa31ea5) {
            $par6185a7056560433494dba94e9ae591077e6e861bdb614541ad72e52cefa31ea5 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8607e6e861bdb614541ad72e52cefa31ea5 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8607e6e861bdb614541ad72e52cefa31ea5) {
            $par0a0ce2af85ab462a808e0270326fb8607e6e861bdb614541ad72e52cefa31ea5 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce7e6e861bdb614541ad72e52cefa31ea5 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce7e6e861bdb614541ad72e52cefa31ea5) {
            $par5551ae677d6b488ebd38625d0f5d9fce7e6e861bdb614541ad72e52cefa31ea5 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce7e6e861bdb614541ad72e52cefa31ea5) {
            $par5551ae677d6b488ebd38625d0f5d9fce7e6e861bdb614541ad72e52cefa31ea5 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a57e6e861bdb614541ad72e52cefa31ea5 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a57e6e861bdb614541ad72e52cefa31ea5) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a57e6e861bdb614541ad72e52cefa31ea5 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a57e6e861bdb614541ad72e52cefa31ea5) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a57e6e861bdb614541ad72e52cefa31ea5 = '';
        }

        $v7e6e861bdb614541ad72e52cefa31ea5 = \App\repf782f923fd0247bd9f4010b717e52999::mt20ec8da550b141339911320f086ae2c0($par6185a7056560433494dba94e9ae591077e6e861bdb614541ad72e52cefa31ea5, $par0a0ce2af85ab462a808e0270326fb8607e6e861bdb614541ad72e52cefa31ea5, $par5551ae677d6b488ebd38625d0f5d9fce7e6e861bdb614541ad72e52cefa31ea5, $par8fce8a73ac264e4a8f3b56d8b991b8a57e6e861bdb614541ad72e52cefa31ea5);

        $v7e6e861bdb614541ad72e52cefa31ea5Ajax = \URL::to('/').'/api/20ec8da550b141339911320f086ae2c0/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista tipo de leche - Lista tipo de leche

        $par6185a7056560433494dba94e9ae591076e1f0b0aad864884a8ea86205de01ef3 = 0;

        if (null == $par6185a7056560433494dba94e9ae591076e1f0b0aad864884a8ea86205de01ef3) {
            $par6185a7056560433494dba94e9ae591076e1f0b0aad864884a8ea86205de01ef3 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8606e1f0b0aad864884a8ea86205de01ef3 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8606e1f0b0aad864884a8ea86205de01ef3) {
            $par0a0ce2af85ab462a808e0270326fb8606e1f0b0aad864884a8ea86205de01ef3 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce6e1f0b0aad864884a8ea86205de01ef3 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce6e1f0b0aad864884a8ea86205de01ef3) {
            $par5551ae677d6b488ebd38625d0f5d9fce6e1f0b0aad864884a8ea86205de01ef3 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce6e1f0b0aad864884a8ea86205de01ef3) {
            $par5551ae677d6b488ebd38625d0f5d9fce6e1f0b0aad864884a8ea86205de01ef3 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a56e1f0b0aad864884a8ea86205de01ef3 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a56e1f0b0aad864884a8ea86205de01ef3) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a56e1f0b0aad864884a8ea86205de01ef3 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a56e1f0b0aad864884a8ea86205de01ef3) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a56e1f0b0aad864884a8ea86205de01ef3 = '';
        }

        $v6e1f0b0aad864884a8ea86205de01ef3 = \App\repf782f923fd0247bd9f4010b717e52999::mt48e61ec9722046979c8bb305a6922ac3($par6185a7056560433494dba94e9ae591076e1f0b0aad864884a8ea86205de01ef3, $par0a0ce2af85ab462a808e0270326fb8606e1f0b0aad864884a8ea86205de01ef3, $par5551ae677d6b488ebd38625d0f5d9fce6e1f0b0aad864884a8ea86205de01ef3, $par8fce8a73ac264e4a8f3b56d8b991b8a56e1f0b0aad864884a8ea86205de01ef3);

        $v6e1f0b0aad864884a8ea86205de01ef3Ajax = \URL::to('/').'/api/48e61ec9722046979c8bb305a6922ac3/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Recuperar Recibas - Recuperar Recibas

        $par9aa0be873c6247ce9f0cc328417e01c2 = $request->input('u');

        if (null == $par9aa0be873c6247ce9f0cc328417e01c2) {
            $par9aa0be873c6247ce9f0cc328417e01c2 = '0';
        }

        $par6185a7056560433494dba94e9ae5910728e7b191b137423d892267a2dd38442a = 0;

        if (null == $par6185a7056560433494dba94e9ae5910728e7b191b137423d892267a2dd38442a) {
            $par6185a7056560433494dba94e9ae5910728e7b191b137423d892267a2dd38442a = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86028e7b191b137423d892267a2dd38442a = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86028e7b191b137423d892267a2dd38442a) {
            $par0a0ce2af85ab462a808e0270326fb86028e7b191b137423d892267a2dd38442a = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce28e7b191b137423d892267a2dd38442a = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce28e7b191b137423d892267a2dd38442a) {
            $par5551ae677d6b488ebd38625d0f5d9fce28e7b191b137423d892267a2dd38442a = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce28e7b191b137423d892267a2dd38442a) {
            $par5551ae677d6b488ebd38625d0f5d9fce28e7b191b137423d892267a2dd38442a = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a528e7b191b137423d892267a2dd38442a = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a528e7b191b137423d892267a2dd38442a) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a528e7b191b137423d892267a2dd38442a = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a528e7b191b137423d892267a2dd38442a) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a528e7b191b137423d892267a2dd38442a = '';
        }

        $v28e7b191b137423d892267a2dd38442a = \App\repf782f923fd0247bd9f4010b717e52999::mt0904ec88d82e4be8ab62f53d159d942b($par9aa0be873c6247ce9f0cc328417e01c2, $par6185a7056560433494dba94e9ae5910728e7b191b137423d892267a2dd38442a, $par0a0ce2af85ab462a808e0270326fb86028e7b191b137423d892267a2dd38442a, $par5551ae677d6b488ebd38625d0f5d9fce28e7b191b137423d892267a2dd38442a, $par8fce8a73ac264e4a8f3b56d8b991b8a528e7b191b137423d892267a2dd38442a);

        $v28e7b191b137423d892267a2dd38442aAjax = \URL::to('/').'/api/0904ec88d82e4be8ab62f53d159d942b/'.(null == $par9aa0be873c6247ce9f0cc328417e01c2 ? '-' : ('' == $par9aa0be873c6247ce9f0cc328417e01c2 ? '-' : $par9aa0be873c6247ce9f0cc328417e01c2)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // sp_style_script_modal - sp_style_script_modal

        $parbfe99cbbc2764478a1146ed61dcfbe831 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $parbfe99cbbc2764478a1146ed61dcfbe831) {
            $parbfe99cbbc2764478a1146ed61dcfbe831 = '0';
        }

        $v4a021de58a344c32960a08292f88ce1f = \App\repf782f923fd0247bd9f4010b717e52999::mt591ad99632d243319383f35dda484b5d($parbfe99cbbc2764478a1146ed61dcfbe831);

        $v4a021de58a344c32960a08292f88ce1fAjax = \URL::to('/').'/api/591ad99632d243319383f35dda484b5d/'.(null == $parbfe99cbbc2764478a1146ed61dcfbe831 ? '-' : ('' == $parbfe99cbbc2764478a1146ed61dcfbe831 ? '-' : $parbfe99cbbc2764478a1146ed61dcfbe831)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        $arrWiths['v158bc40801d94ebeaf1a1ca5b03d8b23'] = isset($v158bc40801d94ebeaf1a1ca5b03d8b23) ? $v158bc40801d94ebeaf1a1ca5b03d8b23 : '';
        $arrWiths['v158bc40801d94ebeaf1a1ca5b03d8b23Ajax'] = isset($v158bc40801d94ebeaf1a1ca5b03d8b23Ajax) ? $v158bc40801d94ebeaf1a1ca5b03d8b23Ajax : '';
        $arrWiths['v19dc48dcaad24ef09f2089e7b086d50e'] = isset($v19dc48dcaad24ef09f2089e7b086d50e) ? $v19dc48dcaad24ef09f2089e7b086d50e : '';
        $arrWiths['v19dc48dcaad24ef09f2089e7b086d50eAjax'] = isset($v19dc48dcaad24ef09f2089e7b086d50eAjax) ? $v19dc48dcaad24ef09f2089e7b086d50eAjax : '';
        $arrWiths['ved29a3725bfb461d95a6f73467ef4936'] = isset($ved29a3725bfb461d95a6f73467ef4936) ? $ved29a3725bfb461d95a6f73467ef4936 : '';
        $arrWiths['ved29a3725bfb461d95a6f73467ef4936Ajax'] = isset($ved29a3725bfb461d95a6f73467ef4936Ajax) ? $ved29a3725bfb461d95a6f73467ef4936Ajax : '';
        $arrWiths['v76ef6df60b2e4889bbe99766b55c5c84'] = isset($v76ef6df60b2e4889bbe99766b55c5c84) ? $v76ef6df60b2e4889bbe99766b55c5c84 : '';
        $arrWiths['v76ef6df60b2e4889bbe99766b55c5c84Ajax'] = isset($v76ef6df60b2e4889bbe99766b55c5c84Ajax) ? $v76ef6df60b2e4889bbe99766b55c5c84Ajax : '';
        $arrWiths['vdbab4e710ed842afb29fdd37991df69d'] = isset($vdbab4e710ed842afb29fdd37991df69d) ? $vdbab4e710ed842afb29fdd37991df69d : '';
        $arrWiths['vdbab4e710ed842afb29fdd37991df69dAjax'] = isset($vdbab4e710ed842afb29fdd37991df69dAjax) ? $vdbab4e710ed842afb29fdd37991df69dAjax : '';
        $arrWiths['vc402501838c34257a3af83ac95b57141'] = isset($vc402501838c34257a3af83ac95b57141) ? $vc402501838c34257a3af83ac95b57141 : '';
        $arrWiths['vc402501838c34257a3af83ac95b57141Ajax'] = isset($vc402501838c34257a3af83ac95b57141Ajax) ? $vc402501838c34257a3af83ac95b57141Ajax : '';
        $arrWiths['v8bf4bd9c35c0422d951399b88da8eb58'] = isset($v8bf4bd9c35c0422d951399b88da8eb58) ? $v8bf4bd9c35c0422d951399b88da8eb58 : '';
        $arrWiths['v8bf4bd9c35c0422d951399b88da8eb58Ajax'] = isset($v8bf4bd9c35c0422d951399b88da8eb58Ajax) ? $v8bf4bd9c35c0422d951399b88da8eb58Ajax : '';
        $arrWiths['v37450752c71a407ea14595b037f5c853'] = isset($v37450752c71a407ea14595b037f5c853) ? $v37450752c71a407ea14595b037f5c853 : '';
        $arrWiths['v37450752c71a407ea14595b037f5c853Ajax'] = isset($v37450752c71a407ea14595b037f5c853Ajax) ? $v37450752c71a407ea14595b037f5c853Ajax : '';
        $arrWiths['vb2503189ccbd42c597a3eac5a8b3d239'] = isset($vb2503189ccbd42c597a3eac5a8b3d239) ? $vb2503189ccbd42c597a3eac5a8b3d239 : '';
        $arrWiths['vb2503189ccbd42c597a3eac5a8b3d239Ajax'] = isset($vb2503189ccbd42c597a3eac5a8b3d239Ajax) ? $vb2503189ccbd42c597a3eac5a8b3d239Ajax : '';
        $arrWiths['v6d114fc5128546e9bc257374da053a11'] = isset($v6d114fc5128546e9bc257374da053a11) ? $v6d114fc5128546e9bc257374da053a11 : '';
        $arrWiths['v6d114fc5128546e9bc257374da053a11Ajax'] = isset($v6d114fc5128546e9bc257374da053a11Ajax) ? $v6d114fc5128546e9bc257374da053a11Ajax : '';
        $arrWiths['vdd308c598aab4bdba01246d9f3598d1f'] = isset($vdd308c598aab4bdba01246d9f3598d1f) ? $vdd308c598aab4bdba01246d9f3598d1f : '';
        $arrWiths['vdd308c598aab4bdba01246d9f3598d1fAjax'] = isset($vdd308c598aab4bdba01246d9f3598d1fAjax) ? $vdd308c598aab4bdba01246d9f3598d1fAjax : '';
        $arrWiths['v7a1a583d3a254a30b4aab92d0db5493e'] = isset($v7a1a583d3a254a30b4aab92d0db5493e) ? $v7a1a583d3a254a30b4aab92d0db5493e : '';
        $arrWiths['v7a1a583d3a254a30b4aab92d0db5493eAjax'] = isset($v7a1a583d3a254a30b4aab92d0db5493eAjax) ? $v7a1a583d3a254a30b4aab92d0db5493eAjax : '';
        $arrWiths['v9b381af7a05f44d6858ce06f0b22366f'] = isset($v9b381af7a05f44d6858ce06f0b22366f) ? $v9b381af7a05f44d6858ce06f0b22366f : '';
        $arrWiths['v9b381af7a05f44d6858ce06f0b22366fAjax'] = isset($v9b381af7a05f44d6858ce06f0b22366fAjax) ? $v9b381af7a05f44d6858ce06f0b22366fAjax : '';
        $arrWiths['v2bdbffe837f84d2aabe18b72cddc7e84'] = isset($v2bdbffe837f84d2aabe18b72cddc7e84) ? $v2bdbffe837f84d2aabe18b72cddc7e84 : '';
        $arrWiths['v2bdbffe837f84d2aabe18b72cddc7e84Ajax'] = isset($v2bdbffe837f84d2aabe18b72cddc7e84Ajax) ? $v2bdbffe837f84d2aabe18b72cddc7e84Ajax : '';
        $arrWiths['v5cd9d30be49d4fa1a0b94dca12646dee'] = isset($v5cd9d30be49d4fa1a0b94dca12646dee) ? $v5cd9d30be49d4fa1a0b94dca12646dee : '';
        $arrWiths['v5cd9d30be49d4fa1a0b94dca12646deeAjax'] = isset($v5cd9d30be49d4fa1a0b94dca12646deeAjax) ? $v5cd9d30be49d4fa1a0b94dca12646deeAjax : '';
        $arrWiths['v7e6e861bdb614541ad72e52cefa31ea5'] = isset($v7e6e861bdb614541ad72e52cefa31ea5) ? $v7e6e861bdb614541ad72e52cefa31ea5 : '';
        $arrWiths['v7e6e861bdb614541ad72e52cefa31ea5Ajax'] = isset($v7e6e861bdb614541ad72e52cefa31ea5Ajax) ? $v7e6e861bdb614541ad72e52cefa31ea5Ajax : '';
        $arrWiths['v6e1f0b0aad864884a8ea86205de01ef3'] = isset($v6e1f0b0aad864884a8ea86205de01ef3) ? $v6e1f0b0aad864884a8ea86205de01ef3 : '';
        $arrWiths['v6e1f0b0aad864884a8ea86205de01ef3Ajax'] = isset($v6e1f0b0aad864884a8ea86205de01ef3Ajax) ? $v6e1f0b0aad864884a8ea86205de01ef3Ajax : '';
        $arrWiths['v28e7b191b137423d892267a2dd38442a'] = isset($v28e7b191b137423d892267a2dd38442a) ? $v28e7b191b137423d892267a2dd38442a : '';
        $arrWiths['v28e7b191b137423d892267a2dd38442aAjax'] = isset($v28e7b191b137423d892267a2dd38442aAjax) ? $v28e7b191b137423d892267a2dd38442aAjax : '';
        $arrWiths['v4a021de58a344c32960a08292f88ce1f'] = isset($v4a021de58a344c32960a08292f88ce1f) ? $v4a021de58a344c32960a08292f88ce1f : '';
        $arrWiths['v648f5312afa54211b0629bca4c7afa68'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg648f5312afa54211b0629bca4c7afa68');
        $arrWiths['v484758ac16274fb3881a6c34500c0817'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg484758ac16274fb3881a6c34500c0817');
        $arrWiths['vc1ed3016f93d4996bed3960d858c5719'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgc1ed3016f93d4996bed3960d858c5719');
        $arrWiths['vb8faa17e81fd493a869792a710a755ec'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb8faa17e81fd493a869792a710a755ec');
        $arrWiths['v75645c71087041fc9e40a547f328a427'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg75645c71087041fc9e40a547f328a427');
        $arrWiths['vd4bebf2ba4284f458a722a1e54dfcc82'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd4bebf2ba4284f458a722a1e54dfcc82');
        $arrWiths['vd636c4762b8a47a7bed826d374e5eaa9'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd636c4762b8a47a7bed826d374e5eaa9');
        $arrWiths['v3ac8885d97884ca59647d5b4aaf881aa'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3ac8885d97884ca59647d5b4aaf881aa');
        $arrWiths['v1c7cc3c6372748509589f205c7749402'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1c7cc3c6372748509589f205c7749402');
        $arrWiths['vbd0364c00e244234a127d10c4f94f5b8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbd0364c00e244234a127d10c4f94f5b8');
        $arrWiths['v212f3fd772c44b3e94f5484dfa21708e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg212f3fd772c44b3e94f5484dfa21708e');
        $arrWiths['vbe0a527a72b54c0dbc9960bfe18f2f74'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbe0a527a72b54c0dbc9960bfe18f2f74');
        $arrWiths['v2305fb34c5f24d4a8e54ccfb6b1bbd2d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg2305fb34c5f24d4a8e54ccfb6b1bbd2d');
        $arrWiths['v6e10c282285344ecb2843be648122444'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6e10c282285344ecb2843be648122444');
        $arrWiths['v9d046e3adb7647fc95991757861b6f28'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9d046e3adb7647fc95991757861b6f28');
        $arrWiths['v1aa0880a68954516984e75442f5b5321'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1aa0880a68954516984e75442f5b5321');
        $arrWiths['v33c3c3ea6ee14f858ed31ce2adc245c9'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg33c3c3ea6ee14f858ed31ce2adc245c9');
        $arrWiths['v98dfb7fc30024417b11714fe501a971c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg98dfb7fc30024417b11714fe501a971c');
        $arrWiths['vf7b48a069c9e4bb2a73b01a14e13334f'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgf7b48a069c9e4bb2a73b01a14e13334f');
        $arrWiths['vece05343830a49c283e90fe3af86405d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgece05343830a49c283e90fe3af86405d');
        $arrWiths['v906c4df5e3e3479fb4a3bbd8908d8d49'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg906c4df5e3e3479fb4a3bbd8908d8d49');
        $arrWiths['vac213f1b84cc4130b9f41e9301e19f2c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgac213f1b84cc4130b9f41e9301e19f2c');
        $arrWiths['v6e86b3ec99864cad92980f6ede327135'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6e86b3ec99864cad92980f6ede327135');
        $arrWiths['v9de03f0b3c0f47acb79e80b1ae0707a7'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9de03f0b3c0f47acb79e80b1ae0707a7');
        $arrWiths['v4b1bd17cc93a49c7886add8e80a29f8e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4b1bd17cc93a49c7886add8e80a29f8e');
        $arrWiths['v035af3efee9f488f968a1e70d79fcb2a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg035af3efee9f488f968a1e70d79fcb2a');
        $arrWiths['vb1bff1fcecdb42fead8bd3122c9a5ef7'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb1bff1fcecdb42fead8bd3122c9a5ef7');
        $arrWiths['vbd13de02b21c46fc8875f7322b36190b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbd13de02b21c46fc8875f7322b36190b');
        $arrWiths['vd2db03180b074915983cdd914c98a8a1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2db03180b074915983cdd914c98a8a1');
        $arrWiths['v93b71af9353a415e8d21820943c0de5a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg93b71af9353a415e8d21820943c0de5a');
        $arrWiths['vcfb77622201e4aa98ef434cb1a033537'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgcfb77622201e4aa98ef434cb1a033537');
        $arrWiths['vf4a9ea1031a643f2addb91af34d8d4bb'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgf4a9ea1031a643f2addb91af34d8d4bb');
        $arrWiths['ve561065a64ab4bca95ff74fec189f193'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msge561065a64ab4bca95ff74fec189f193');
        $arrWiths['v45aa073197d24bb59adedfd720ae5b84'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg45aa073197d24bb59adedfd720ae5b84');
        $arrWiths['v1dbbf5966410436098009f3f0f51c7fe'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1dbbf5966410436098009f3f0f51c7fe');
        $arrWiths['v96cb4d3e11a845cb8a4ab1772f86432d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg96cb4d3e11a845cb8a4ab1772f86432d');
        $arrWiths['v5fab7ee14afc4c2e8ae46b489520fe40'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5fab7ee14afc4c2e8ae46b489520fe40');
        $arrWiths['vbdf88d511268495cab45e5e51256730b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbdf88d511268495cab45e5e51256730b');
        $arrWiths['v64ba226f18b24bad98955cf51da7399a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg64ba226f18b24bad98955cf51da7399a');
        $arrWiths['v745b1477b553429c8e6b06e17647b7ec'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg745b1477b553429c8e6b06e17647b7ec');
        $arrWiths['vb888a749dd864d4c80534213173d18cf'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb888a749dd864d4c80534213173d18cf');
        $arrWiths['v7e33ddaab425456d8757aaed2eb49e96'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7e33ddaab425456d8757aaed2eb49e96');
        $arrWiths['v22b04648cae14735b4accfe287416439'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg22b04648cae14735b4accfe287416439');
        $arrWiths['v47c91aecd8684bfbb2503f7f4847f597'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg47c91aecd8684bfbb2503f7f4847f597');
        $arrWiths['v45efd902e7b94fc4912152ff4a513431'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg45efd902e7b94fc4912152ff4a513431');
        $arrWiths['v51e4e1ba3df547f9b464af200436036b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg51e4e1ba3df547f9b464af200436036b');
        $arrWiths['v051583ed487149498ea510b996207346'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg051583ed487149498ea510b996207346');
        $arrWiths['v9b4f2f3642a94a609484c1fc0328ff9d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9b4f2f3642a94a609484c1fc0328ff9d');
        $arrWiths['vcf8df500774b4ea3b7b3ad0ed744fadd'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgcf8df500774b4ea3b7b3ad0ed744fadd');
        $arrWiths['vaa589601f23a4baea2ba489d68bc48ce'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgaa589601f23a4baea2ba489d68bc48ce');
        $arrWiths['ve9790eefba924bd09459e5cdc2cd7242'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msge9790eefba924bd09459e5cdc2cd7242');
        $arrWiths['v1a20535748e34b89aa966fcf2be1a1c0'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1a20535748e34b89aa966fcf2be1a1c0');
        $arrWiths['v39cc58adb2d2457cac8046e1aca821e1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg39cc58adb2d2457cac8046e1aca821e1');
        $arrWiths['v5078a83f13014b9185a01e9f82375a96'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5078a83f13014b9185a01e9f82375a96');
        $arrWiths['vc529add70ec3452599c9654f0dcb42bd'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgc529add70ec3452599c9654f0dcb42bd');
        $arrWiths['vbb2025bd20114de3a14cba4d2e27c09b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbb2025bd20114de3a14cba4d2e27c09b');
        $arrWiths['v11712ed4199d44da904bc53e7f769fc1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg11712ed4199d44da904bc53e7f769fc1');
        $arrWiths['vba6525002ed0401b82d21874507eb819'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgba6525002ed0401b82d21874507eb819');
        $arrWiths['v12af90313939475b85285e3ae0ce9ff8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg12af90313939475b85285e3ae0ce9ff8');
        $arrWiths['vb1fe4f83e3c24f15a8db6aa22d1747d8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb1fe4f83e3c24f15a8db6aa22d1747d8');
        $arrWiths['v1e64d417d0574ac0ab0559ae9ccae503'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1e64d417d0574ac0ab0559ae9ccae503');
        $arrWiths['v5748a5a344be4c7d9ef0875c9bbd4678'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5748a5a344be4c7d9ef0875c9bbd4678');
        $arrWiths['v2641473714f44cc9a4364454e70f9c01'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg2641473714f44cc9a4364454e70f9c01');
        $arrWiths['v1ee7b176480b4a4cb8e279aced7425f6'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1ee7b176480b4a4cb8e279aced7425f6');
        $arrWiths['v0b55853d2e614fb884b124cba10d398d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg0b55853d2e614fb884b124cba10d398d');
        $arrWiths['v72dedd3026cb41fca9d76f482cb9717b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg72dedd3026cb41fca9d76f482cb9717b');
        $arrWiths['va8a415f702614b2ea46dbcf925a3ff11'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga8a415f702614b2ea46dbcf925a3ff11');
        $arrWiths['v44b8f2f85ee54ea985dc9448360d3893'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg44b8f2f85ee54ea985dc9448360d3893');
        $arrWiths['v8f8f6785f3f8408fb2fd6eddbc7c71c0'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg8f8f6785f3f8408fb2fd6eddbc7c71c0');
        $arrWiths['v8c719242a6534e4b94df897b42ebee43'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg8c719242a6534e4b94df897b42ebee43');
        $arrWiths['vf9cc7228495c406b94fdc1989a50f453'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgf9cc7228495c406b94fdc1989a50f453');
        $arrWiths['v3f082326a9114deaa64d38400bd30455'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3f082326a9114deaa64d38400bd30455');
        $arrWiths['v43945b308b0e4964a77064a4ecf1a554'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg43945b308b0e4964a77064a4ecf1a554');
        $arrWiths['vfb8ad6142ff542f3b127069c963d0fa3'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgfb8ad6142ff542f3b127069c963d0fa3');
        $arrWiths['v43543fba245e47b69867539199a2e520'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg43543fba245e47b69867539199a2e520');
        $arrWiths['v7831e574cc7a4ff09f9cfe535c72f6ca'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7831e574cc7a4ff09f9cfe535c72f6ca');
        $arrWiths['v3fd24e2410c34e0cbdda9501bd1fc747'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3fd24e2410c34e0cbdda9501bd1fc747');
        $arrWiths['v76f9412e1e7c4097a06b68337fa27fd4'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg76f9412e1e7c4097a06b68337fa27fd4');
        $arrWiths['v912c92a8b0f74aa1b3cb6d8760eb832a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg912c92a8b0f74aa1b3cb6d8760eb832a');
        $arrWiths['vd621b54c4a8a4c6bbbd8a8e17ee619ea'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd621b54c4a8a4c6bbbd8a8e17ee619ea');
        $arrWiths['v43562adde4d94f258f499802cbea3b1c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg43562adde4d94f258f499802cbea3b1c');
        $arrWiths['v2a0424ef3b33443e96aea071b7ef13f7'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg2a0424ef3b33443e96aea071b7ef13f7');
        $arrWiths['v26550fad3e5f428595ba98da9791b5f9'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg26550fad3e5f428595ba98da9791b5f9');
        $arrWiths['v65d362a23f094dc6a54446801e86f213'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg65d362a23f094dc6a54446801e86f213');
        $arrWiths['va742059dcfa84f048e6f1fe31eb19054'] = $request->session()->get('sesa742059dcfa84f048e6f1fe31eb19054');
        $arrWiths['v7a572c097a134435b36d2d8ceea8486e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7a572c097a134435b36d2d8ceea8486e');
        $arrWiths['v8d3793aa57834b8aa63634159e84304a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg8d3793aa57834b8aa63634159e84304a');
        $arrWiths['v4168c21f3df4480eb821ef9557020fa3'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4168c21f3df4480eb821ef9557020fa3');
        $arrWiths['v27e083242492428aa5a6bad60a5fceaa'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg27e083242492428aa5a6bad60a5fceaa');
        $arrWiths['v6985b2c8803341e287bc7ec60e78b883'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6985b2c8803341e287bc7ec60e78b883');
        $arrWiths['v27c2c5b259e4474681692c5f05455d55'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg27c2c5b259e4474681692c5f05455d55');
        $arrWiths['vee0ef6f2bfbf41ab9b6ce2925b1b8042'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgee0ef6f2bfbf41ab9b6ce2925b1b8042');
        $arrWiths['v446a8b2284f441e3a3b476877c288511'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg446a8b2284f441e3a3b476877c288511');
        $arrWiths['v86e45c53897c42deb9b37050d46579b5'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg86e45c53897c42deb9b37050d46579b5');
        $arrWiths['ve77f3987545c4c0ea74d36c77718e860'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msge77f3987545c4c0ea74d36c77718e860');
        $arrWiths['v5512d11bff4348278ac7a2c0fc5c95d0'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5512d11bff4348278ac7a2c0fc5c95d0');
        $arrWiths['v04e044060cd746e98e8f66ed27642ba9'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg04e044060cd746e98e8f66ed27642ba9');
        $arrWiths['vc60deabb9dc4455a959a619b9aefe0c8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgc60deabb9dc4455a959a619b9aefe0c8');
        $arrWiths['v40b5187e9f8a420fa6a65d070bb8251a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg40b5187e9f8a420fa6a65d070bb8251a');
        $arrWiths['v3ecb2a7d27bd445bbb2ddf735a7e74e1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3ecb2a7d27bd445bbb2ddf735a7e74e1');
        $arrWiths['vbeeb4af96a8a4cae8bdda1920e120cb1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbeeb4af96a8a4cae8bdda1920e120cb1');
        $arrWiths['v7a49b493a61c4ade913d1c1e30d5ea03'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7a49b493a61c4ade913d1c1e30d5ea03');
        $arrWiths['vad13638491fc440fa1d632cc052af6a5'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgad13638491fc440fa1d632cc052af6a5');
        $arrWiths['v3eedc30642f74a85be5452499f37a09c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3eedc30642f74a85be5452499f37a09c');
        $arrWiths['vfaac5477f3a74642a7401cc8bc70d517'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgfaac5477f3a74642a7401cc8bc70d517');
        $arrWiths['v87d94158d35d4a858c91b719febaac8c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg87d94158d35d4a858c91b719febaac8c');
        $arrWiths['v79de54804f2f4f26a0d4e0182e54bd60'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg79de54804f2f4f26a0d4e0182e54bd60');
        $arrWiths['v544b5ae1cb8a440fb992aca993cfe0a5'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg544b5ae1cb8a440fb992aca993cfe0a5');
        $arrWiths['v2a5730f00ba9463c9669d72850f4854d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg2a5730f00ba9463c9669d72850f4854d');
        $arrWiths['vd45904ecc7364fd7a8cf7b7a8c5145e4'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd45904ecc7364fd7a8cf7b7a8c5145e4');
        $arrWiths['v469c15941e0f47bbbc66dfa1650719b8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg469c15941e0f47bbbc66dfa1650719b8');
        $arrWiths['v6816b6f71ba545249f178bb45c57669a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6816b6f71ba545249f178bb45c57669a');
        $arrWiths['v4e70298ab1e140baa5b62785514a794b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4e70298ab1e140baa5b62785514a794b');
        $arrWiths['v1798e6d220d946f9b0b4470e45db2358'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1798e6d220d946f9b0b4470e45db2358');
        $arrWiths['vcd0ba0dce5bc4e07a4b9b15275483753'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgcd0ba0dce5bc4e07a4b9b15275483753');
        $arrWiths['vef2960eb43c6421897322de014661835'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgef2960eb43c6421897322de014661835');
        $arrWiths['v0f3ebcd0410d4dbb8615970ae219ec08'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg0f3ebcd0410d4dbb8615970ae219ec08');
        $arrWiths['vc9074dfc5e164b31848c6dfb62493530'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgc9074dfc5e164b31848c6dfb62493530');
        $arrWiths['v70285f4a09f54f84a05df422cb844554'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg70285f4a09f54f84a05df422cb844554');
        $arrWiths['vdc54a07da69f4d7fa5c22fd75d4aa09d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgdc54a07da69f4d7fa5c22fd75d4aa09d');
        $arrWiths['v0b4cf5c8b03241deae3fabf60391dc79'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg0b4cf5c8b03241deae3fabf60391dc79');
        $arrWiths['ve4f94e5b1ca64a0c80fcc38521aa6bd3'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msge4f94e5b1ca64a0c80fcc38521aa6bd3');
        $arrWiths['v23d50b1a5a80452599f80d55415e1537'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg23d50b1a5a80452599f80d55415e1537');
        $arrWiths['v4fe0bc5fcf0443e7ae2cd17106d5236e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4fe0bc5fcf0443e7ae2cd17106d5236e');
        $arrWiths['vff36c364f78a44ad9094806039c3e811'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgff36c364f78a44ad9094806039c3e811');
        $arrWiths['v6a655086420a4ecd936b78a7f4c8399d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6a655086420a4ecd936b78a7f4c8399d');
        $arrWiths['v7944980fefd04578a55d6306133c453b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7944980fefd04578a55d6306133c453b');
        $arrWiths['va17b7aaf1e824a75a5aa63b0d5382379'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga17b7aaf1e824a75a5aa63b0d5382379');
        $arrWiths['v08cd43743268457ca5f0170faae0a076'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg08cd43743268457ca5f0170faae0a076');
        $arrWiths['vd9d16c5adcbb4697abb47a39467c5cff'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd9d16c5adcbb4697abb47a39467c5cff');
        $arrWiths['veb135ebe852640b0a8e09f7e423cfade'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgeb135ebe852640b0a8e09f7e423cfade');
        $arrWiths['vb90423a2acad4e38860c76f397eb886b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb90423a2acad4e38860c76f397eb886b');
        $arrWiths['vcecb23036e384bbda97ddeee701cbd66'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgcecb23036e384bbda97ddeee701cbd66');
        $arrWiths['v1b1c83d655894580a3612167c1f4a95c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1b1c83d655894580a3612167c1f4a95c');
        $arrWiths['v71da12b1513c4ea0a705c1e66468633c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg71da12b1513c4ea0a705c1e66468633c');
        $arrWiths['v16bdfb61f662468d8f80e80bd3b8b1f6'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16bdfb61f662468d8f80e80bd3b8b1f6');
        $arrWiths['v9baaed189c4f4f6482430a53f95d11c1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9baaed189c4f4f6482430a53f95d11c1');
        $arrWiths['v762464e64adb405e8c62253634b0fefb'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg762464e64adb405e8c62253634b0fefb');
        $arrWiths['v52c17f9784c94ddf91cefc8df9a72de7'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg52c17f9784c94ddf91cefc8df9a72de7');
        $arrWiths['ve21dbfce6f53453088dff75df56b29b1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msge21dbfce6f53453088dff75df56b29b1');
        $arrWiths['v6add79e2beaf403cab5e72d449abca3f'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6add79e2beaf403cab5e72d449abca3f');
        $arrWiths['v8785ee4e49f54843ae9e1e92a547299b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg8785ee4e49f54843ae9e1e92a547299b');
        $arrWiths['v64f79bf0782b40bc910c1c05b90f065e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg64f79bf0782b40bc910c1c05b90f065e');
        $arrWiths['va2693cd45d204b2e8eade4945942795b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga2693cd45d204b2e8eade4945942795b');
        $arrWiths['v82350d347a1c4f13aca828440cc5a989'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg82350d347a1c4f13aca828440cc5a989');
        $arrWiths['v624e7b81f5774b8abf93062959bcdd10'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg624e7b81f5774b8abf93062959bcdd10');
        $arrWiths['v4524b50c3f534438ac0f4aed489205df'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4524b50c3f534438ac0f4aed489205df');
        $arrWiths['v1a413f2fcd044fca9a08d564f4452be6'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1a413f2fcd044fca9a08d564f4452be6');
        $arrWiths['v394ec01eec874a868973e0e1cf71d83f'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg394ec01eec874a868973e0e1cf71d83f');
        $arrWiths['v31c9251d39ba43d6b0ed50ec768a0684'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg31c9251d39ba43d6b0ed50ec768a0684');
        $arrWiths['v7d518b002ff5440bb0d458794aa94497'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7d518b002ff5440bb0d458794aa94497');
        $arrWiths['vfc58cf985e1a4ec79e4d00d590517961'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgfc58cf985e1a4ec79e4d00d590517961');
        $arrWiths['v6fd5698a1e954e7da44582f63515303c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6fd5698a1e954e7da44582f63515303c');
        $arrWiths['v1f0691c58bed4867911aabe31db9c4b6'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1f0691c58bed4867911aabe31db9c4b6');
        $arrWiths['vaf0bade9884945e0b59e36bae08dbdaf'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgaf0bade9884945e0b59e36bae08dbdaf');
        $arrWiths['v45e15a4acf6c4f70a8be3a6b0dce1671'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg45e15a4acf6c4f70a8be3a6b0dce1671');
        $arrWiths['v6cd8ef19abeb43ca8096a247100a311d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6cd8ef19abeb43ca8096a247100a311d');
        $arrWiths['v136a0ced5a174047bab7955592b11194'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg136a0ced5a174047bab7955592b11194');
        $arrWiths['v5b18cf55c0c24d51afecc327e05ab09a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5b18cf55c0c24d51afecc327e05ab09a');
        $arrWiths['v632cd9110aad48d39bcd8145e7312189'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg632cd9110aad48d39bcd8145e7312189');
        $arrWiths['v79da4f6edb694ee0bfe506e77aa6bbc1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg79da4f6edb694ee0bfe506e77aa6bbc1');
        $arrWiths['v0035f3abf23d4895a92aa996afbccb6b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg0035f3abf23d4895a92aa996afbccb6b');
        $arrWiths['v49b8c0a83580482e95e93540205151e5'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg49b8c0a83580482e95e93540205151e5');
        $arrWiths['v53a001ed5802492dbd17759a893862a7'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg53a001ed5802492dbd17759a893862a7');
        $arrWiths['vdfd9cd263dcc4077a1232e14caa8f5e7'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgdfd9cd263dcc4077a1232e14caa8f5e7');
        $arrWiths['v061a4aa7fde2466899ba23644fa633a2'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg061a4aa7fde2466899ba23644fa633a2');
        $arrWiths['v9afdef6278254095be063c7dbf6e5cff'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9afdef6278254095be063c7dbf6e5cff');
        $arrWiths['vb4b532b80c2b4f8eaa09453371b2c94d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb4b532b80c2b4f8eaa09453371b2c94d');
        $arrWiths['v56e169ea1c364a9e8b71ff24a67bea56'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg56e169ea1c364a9e8b71ff24a67bea56');
        $arrWiths['v58395ed2c35e4860ae2f2ac9bb3df906'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg58395ed2c35e4860ae2f2ac9bb3df906');
        $arrWiths['v46e1f1b20f52427b991bf7582e95cda7'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg46e1f1b20f52427b991bf7582e95cda7');
        $arrWiths['v40bd50e841194de9a97fb2a40ed97b98'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg40bd50e841194de9a97fb2a40ed97b98');
        $arrWiths['v7138e6d2ed72487991fc1ec9d89e7385'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7138e6d2ed72487991fc1ec9d89e7385');
        $arrWiths['v290c236a0bdb46368fa8f7e1900594ec'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg290c236a0bdb46368fa8f7e1900594ec');
        $arrWiths['v3b1a52c6fe204307ac0b524452560320'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3b1a52c6fe204307ac0b524452560320');
        $arrWiths['v787a0a3e158a4492b11380b709d0d9a3'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg787a0a3e158a4492b11380b709d0d9a3');
        $arrWiths['v55b7df7507404c3695fcd985de873e01'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg55b7df7507404c3695fcd985de873e01');
        $arrWiths['v7f488e6340434e68ac9f2a0bec57ae2a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7f488e6340434e68ac9f2a0bec57ae2a');
        $arrWiths['v3a2b2425c72c4d0184c034e9eda3b763'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3a2b2425c72c4d0184c034e9eda3b763');
        $arrWiths['v7df0b52b8d194ac7afc0d5474bd449ae'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7df0b52b8d194ac7afc0d5474bd449ae');
        $arrWiths['va80513786e2347c283e75b060e4abab5'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga80513786e2347c283e75b060e4abab5');
        $arrWiths['v5c87e158b3ee4b0cbdce9485facb3ec6'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5c87e158b3ee4b0cbdce9485facb3ec6');
        $arrWiths['v9e21373bc88541cb9e55b08992d3a0b0'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9e21373bc88541cb9e55b08992d3a0b0');
        $arrWiths['v9b546bb18f6043afacce1d49c400ff01'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9b546bb18f6043afacce1d49c400ff01');
        $arrWiths['vd0fb4191985a4d5a816947bd7561ce9c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd0fb4191985a4d5a816947bd7561ce9c');
        $arrWiths['v6375ccbe281b4c63afae6ad960a6ce99'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6375ccbe281b4c63afae6ad960a6ce99');
        $arrWiths['v8bcc2a4d22934716bfc3c7de5255a2b8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg8bcc2a4d22934716bfc3c7de5255a2b8');
        $arrWiths['v0e37de2d2f154e3b9a61605ca4043f91'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg0e37de2d2f154e3b9a61605ca4043f91');
        $arrWiths['v299c305627644674b912e34a1b1a97cb'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg299c305627644674b912e34a1b1a97cb');
        $arrWiths['vb96c3b47ddd64455a96186d95a5f474d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb96c3b47ddd64455a96186d95a5f474d');
        $arrWiths['vfed4fcd4273547429c51b27821e8ead8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgfed4fcd4273547429c51b27821e8ead8');
        $arrWiths['v35bf65fe146b4d0a841670d153561a0f'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg35bf65fe146b4d0a841670d153561a0f');
        $arrWiths['va04aab22292b43ea8999533fe0a69ea5'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga04aab22292b43ea8999533fe0a69ea5');
        $arrWiths['v97c7b275b2c2440184635d5bf75cf548'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg97c7b275b2c2440184635d5bf75cf548');
        $arrWiths['v46664bd7504843b0ae2bba7307f0dd2c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg46664bd7504843b0ae2bba7307f0dd2c');
        $arrWiths['v110f575216844c45b3e9d5adbec26500'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg110f575216844c45b3e9d5adbec26500');
        $arrWiths['v726c96dc56704151872b157acbb283b0'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg726c96dc56704151872b157acbb283b0');
        $arrWiths['v6c77e7f7abbb4f99b8aa5cf279609efd'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6c77e7f7abbb4f99b8aa5cf279609efd');
        $arrWiths['vb9dd9f613f154d3c953a556305f29332'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb9dd9f613f154d3c953a556305f29332');
        $arrWiths['vc462119bc79447db95aba0be9eb627a4'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgc462119bc79447db95aba0be9eb627a4');
        $arrWiths['v51151da907c04fcda5937bad7037902e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg51151da907c04fcda5937bad7037902e');
        $arrWiths['v9c300c69d2ee40e78ced30680a21d5c5'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9c300c69d2ee40e78ced30680a21d5c5');
        $arrWiths['vb8ffc8e5292e409285c9c781afbc0001'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb8ffc8e5292e409285c9c781afbc0001');
        $arrWiths['v28adb8ba664b44e6acc4b68e24ae43eb'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg28adb8ba664b44e6acc4b68e24ae43eb');
        $arrWiths['v979aa709b485472d943aa30854b80ca1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg979aa709b485472d943aa30854b80ca1');
        $arrWiths['v83e78e0ba46d4b50867d0e520257a885'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg83e78e0ba46d4b50867d0e520257a885');
        $arrWiths['v673755107d9e4f5cb0eef6837c91b302'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg673755107d9e4f5cb0eef6837c91b302');
        $arrWiths['v5f91e3098ee74310b3d96087e7895256'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5f91e3098ee74310b3d96087e7895256');
        $arrWiths['vd2535b5b59b045c1b7d2307a28250b09'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2535b5b59b045c1b7d2307a28250b09');
        $arrWiths['v76264ed9d4e94961afb16156e22c62b3'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg76264ed9d4e94961afb16156e22c62b3');
        $arrWiths['vf86b540a2b1c4cdcb5e9a71ef99a3b3e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgf86b540a2b1c4cdcb5e9a71ef99a3b3e');
        $arrWiths['va310852c3f1f47a6bc0fac00a5078794'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga310852c3f1f47a6bc0fac00a5078794');
        $arrWiths['vef327b72a9fc4fefab558dae0b55c197'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgef327b72a9fc4fefab558dae0b55c197');
        $arrWiths['v16da76fc90894e1096dc12cde4afe85d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg16da76fc90894e1096dc12cde4afe85d');
        $arrWiths['v4ce6dc049f80430288f022e7f86d6f9e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg4ce6dc049f80430288f022e7f86d6f9e');
        $arrWiths['vc3e69277b32a4982b908c08cf323d836'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgc3e69277b32a4982b908c08cf323d836');
        $arrWiths['va50d1194d0704255848b03f49846002b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50d1194d0704255848b03f49846002b');
        $arrWiths['v0afeee682cfe4e1eb50d5fdb599f8349'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg0afeee682cfe4e1eb50d5fdb599f8349');
        $arrWiths['v6670424d713844adbb4517776da82cdf'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6670424d713844adbb4517776da82cdf');
        $arrWiths['va49eaa3f3e484d00adbba8986f3f7ffc'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga49eaa3f3e484d00adbba8986f3f7ffc');
        $arrWiths['vd029af4ab32f4c97975220718b0da190'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd029af4ab32f4c97975220718b0da190');
        $arrWiths['vb511fe0b98b44915bee0864037c0a0af'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb511fe0b98b44915bee0864037c0a0af');
        $arrWiths['v03be45115f434e81aa52ffaf6da8dd4d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg03be45115f434e81aa52ffaf6da8dd4d');
        $arrWiths['v8460062174d34f648202e1d76b0890b3'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg8460062174d34f648202e1d76b0890b3');
        $arrWiths['v97ad03132342409092198b85134df491'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg97ad03132342409092198b85134df491');
        $arrWiths['v3d8412adbe7643e689d995bde2d88fbf'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3d8412adbe7643e689d995bde2d88fbf');
        $arrWiths['v3178031bd5fc48d086a78c7eca0e2577'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3178031bd5fc48d086a78c7eca0e2577');
        $arrWiths['v5b5d008bbdce4290b95f36b5c78a4b94'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5b5d008bbdce4290b95f36b5c78a4b94');
        $arrWiths['vca0d6e14caad4c27b273d5b913197bdf'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgca0d6e14caad4c27b273d5b913197bdf');
        $arrWiths['v78906659af5e49e39c4a09b316662d72'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg78906659af5e49e39c4a09b316662d72');
        $arrWiths['vf6b29f8e02e04b4eb808db54f5ffc9b8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgf6b29f8e02e04b4eb808db54f5ffc9b8');
        $arrWiths['vf5b8f06afc3b4b8e9e43f83217f3f4c0'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgf5b8f06afc3b4b8e9e43f83217f3f4c0');
        $arrWiths['v1816c656087d4bfd86b8c67301ff4cca'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1816c656087d4bfd86b8c67301ff4cca');
        $arrWiths['ve34d18bc6d8f450b8963e0ad2039b1f9'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msge34d18bc6d8f450b8963e0ad2039b1f9');
        $arrWiths['v7ac6054e6b7847c0aa21473606e0a9e1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7ac6054e6b7847c0aa21473606e0a9e1');
        $arrWiths['vd2e6f32c640e4887aae1446f4a002625'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2e6f32c640e4887aae1446f4a002625');
        $arrWiths['v15aaaea753fc485f8f75b36fe2f45d6b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg15aaaea753fc485f8f75b36fe2f45d6b');
        $arrWiths['vab8ae742b33a4c1d9389edcad636f893'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgab8ae742b33a4c1d9389edcad636f893');
        $arrWiths['v6d4792f9962a46f2b37bbf9af604eda9'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6d4792f9962a46f2b37bbf9af604eda9');
        $arrWiths['vd2646df37ab049a9aea0ee0eb8d99d0e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd2646df37ab049a9aea0ee0eb8d99d0e');
        $arrWiths['v47eb42ef3c31496dac00c639b9e1ab57'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg47eb42ef3c31496dac00c639b9e1ab57');
        $arrWiths['vf1f6f4cdaa35482d8147db7f487e3276'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgf1f6f4cdaa35482d8147db7f487e3276');
        $arrWiths['v3e0b1525b8324fa2b854a852b6b6b447'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg3e0b1525b8324fa2b854a852b6b6b447');
        $arrWiths['v6e2e48a6cb2043658d61726417f8c6a1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6e2e48a6cb2043658d61726417f8c6a1');
        $arrWiths['vd56f0d9c9d0941bea02e033acfbe87a1'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd56f0d9c9d0941bea02e033acfbe87a1');
        $arrWiths['v1978b2debee348f8a56b0339a25346df'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1978b2debee348f8a56b0339a25346df');
        $arrWiths['v73ed603753f048e7bfeaa94c6db1697b'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg73ed603753f048e7bfeaa94c6db1697b');
        $arrWiths['v88e54b0d447447289924aee48999c10c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg88e54b0d447447289924aee48999c10c');
        $arrWiths['v6286a4a65ef740d987fcb2f3bb748350'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg6286a4a65ef740d987fcb2f3bb748350');
        $arrWiths['vec07272e85e343d8afe6f6086d50d65a'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgec07272e85e343d8afe6f6086d50d65a');
        $arrWiths['vbb3dc58fea1c4221a831970ffea7b654'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgbb3dc58fea1c4221a831970ffea7b654');
        $arrWiths['va2c2fe1428dd402aa3814364b9d9f257'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga2c2fe1428dd402aa3814364b9d9f257');
        $arrWiths['v501a3d0918a4451aafc1b1f33b20298e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg501a3d0918a4451aafc1b1f33b20298e');
        $arrWiths['vc8de644483e445bbb7aacab98171f8e7'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgc8de644483e445bbb7aacab98171f8e7');
        $arrWiths['v0e1504a78c9d454285f6eff96d79a802'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg0e1504a78c9d454285f6eff96d79a802');
        $arrWiths['v01da31bfbf554828b2b71aebbcc311d7'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg01da31bfbf554828b2b71aebbcc311d7');
        $arrWiths['v7bbe20f5bf7545d5917dd26660ed2800'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7bbe20f5bf7545d5917dd26660ed2800');
        $arrWiths['va09d3cea66d44dd4868cb2a531bf7d8c'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga09d3cea66d44dd4868cb2a531bf7d8c');
        $arrWiths['v60655df668cf401fbeeac35cf6a0be57'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg60655df668cf401fbeeac35cf6a0be57');
        $arrWiths['v837c079e96394e2da5842f4f66c7f034'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg837c079e96394e2da5842f4f66c7f034');
        $arrWiths['va50b13adc5284e92844239ca59bf38e5'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msga50b13adc5284e92844239ca59bf38e5');
        $arrWiths['v7eb4c8e050ab456f9a4745fcefd22cf0'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7eb4c8e050ab456f9a4745fcefd22cf0');
        $arrWiths['v85e7f6d4f7f04c2d9f1117ab50f5528d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg85e7f6d4f7f04c2d9f1117ab50f5528d');
        $arrWiths['v5b6154cddb5e4d45a82b8946e11b89c4'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg5b6154cddb5e4d45a82b8946e11b89c4');
        $arrWiths['v5e122755c3a24f5d8789755168e9de27'] = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');
        $arrWiths['v1f95f9eb21b24ca5a440c01105c3a640'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg1f95f9eb21b24ca5a440c01105c3a640');
        $arrWiths['vd07a064dcf424aa9aa7bf16d27c7ef7d'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd07a064dcf424aa9aa7bf16d27c7ef7d');
        $arrWiths['ve7928071c5074f8fb4cc9d70a009f06e'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msge7928071c5074f8fb4cc9d70a009f06e');
        $arrWiths['v611cb2d677124a66880c379279a6b851'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg611cb2d677124a66880c379279a6b851');
        $arrWiths['vcc1e83a94d0840099e05f5cdb184e373'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgcc1e83a94d0840099e05f5cdb184e373');
        $arrWiths['vecff7e045ee7403f8f1391eb90968055'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgecff7e045ee7403f8f1391eb90968055');
        $arrWiths['v9925e2a8a23f4b49890740e3acaca5a8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg9925e2a8a23f4b49890740e3acaca5a8');
        $arrWiths['vc9dd52e22dfe4295b98a64e9604f73af'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgc9dd52e22dfe4295b98a64e9604f73af');
        $arrWiths['vd3847ad16a57433fbebd4aaab99c4ca8'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgd3847ad16a57433fbebd4aaab99c4ca8');
        $arrWiths['vb0a2a82270c1460ea939283181293d81'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgb0a2a82270c1460ea939283181293d81');
        $arrWiths['v84b01adc367044f49eabc1e5eb4134e2'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg84b01adc367044f49eabc1e5eb4134e2');
        $arrWiths['v573afb24096e42ffa624cbbf70fcb9c4'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg573afb24096e42ffa624cbbf70fcb9c4');
        $arrWiths['v7bd4fcd5deb94076a4f987c95efd5869'] = \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msg7bd4fcd5deb94076a4f987c95efd5869');

        $arrWiths['title'] = $title;
        $response = new \Illuminate\Http\Response(view('a30e74a8ee34462d9eb6e6d502798484.Index', $arrWiths)->with('title', $arrWiths['title'])->with('vSessionTimeout', \Config::get('session.lifetime') * 60));

        return $response;
    }
}
