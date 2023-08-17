<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:10
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * traspasosForm - Pagina de Formulario de Traspasos.
 */
class pg443f21a7872e40adb2b36b6ba035fa2cController extends Controller
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

        // Guardar Datos - Guardar Datos
        if (null != $request->input('ctl3f4c37c6271849e1afdcbaa396e78f3f_8660ea54b1034c0593d3384c40db3424') && null != $request->input('hid8660ea54b1034c0593d3384c40db3424') && '8660ea54b1034c0593d3384c40db3424' == $request->input('hid8660ea54b1034c0593d3384c40db3424')) {
            $key = 0;
            $isNew = false;
            if (null != $request->input('u')) {
                $key = $request->input('u');
            }

            $tb = \App\tbb801ebf3a43243998c444f168f427b41::where('PK_TRASPASOS', $key)->first();
            if (null == $tb) {
                $isNew = true;
                $tb = new \App\tbb801ebf3a43243998c444f168f427b41();
            }

            if (null != $request->input('ctldd4c3794086d4bdca0ed710405f6edce_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FK_CHOFER = $request->input('ctldd4c3794086d4bdca0ed710405f6edce_8660ea54b1034c0593d3384c40db3424'); //FK_CHOFER
            } elseif (null == $request->input('ctldd4c3794086d4bdca0ed710405f6edce_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FK_CHOFER = null;
            }

            if (3 != null) {
                $tb->FK_ESTATUS = 3; //FK_ESTATUS
            } elseif (3 == null) {
                $tb->FK_ESTATUS = null;
            }

            if (null != $request->session()->get('ses5e122755c3a24f5d8789755168e9de27')) {
                $tb->FK_USUARIO = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27'); //FK_USUARIO
            } elseif (null == $request->session()->get('ses5e122755c3a24f5d8789755168e9de27')) {
                $tb->FK_USUARIO = null;
            }

            if (null != $request->input('ctl5b4f1465709b4b018b16fff0c0ecabaa_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ACIDEZ_PIPA = $request->input('ctl5b4f1465709b4b018b16fff0c0ecabaa_8660ea54b1034c0593d3384c40db3424'); //FL_ACIDEZ_PIPA
            } elseif (null == $request->input('ctl5b4f1465709b4b018b16fff0c0ecabaa_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ACIDEZ_PIPA = null;
            }

            if (null != $request->input('ctl77d9fbfb124142508c6eb486d09a7fbe_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ACIDEZ_SILO = $request->input('ctl77d9fbfb124142508c6eb486d09a7fbe_8660ea54b1034c0593d3384c40db3424'); //FL_ACIDEZ_SILO
            } elseif (null == $request->input('ctl77d9fbfb124142508c6eb486d09a7fbe_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ACIDEZ_SILO = null;
            }

            if (null != $request->input('ctldf89115385fc46779bac15c12c57f89e_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ALCOHOL_PIPA = $request->input('ctldf89115385fc46779bac15c12c57f89e_8660ea54b1034c0593d3384c40db3424'); //FL_ALCOHOL_PIPA
            } elseif (null == $request->input('ctldf89115385fc46779bac15c12c57f89e_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ALCOHOL_PIPA = null;
            }

            if (null != $request->input('ctl08dbb56b816442a7abb5a2503dd91906_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ANTIBIOTICOS_PIPA = $request->input('ctl08dbb56b816442a7abb5a2503dd91906_8660ea54b1034c0593d3384c40db3424'); //FL_ANTIBIOTICOS_PIPA
            } elseif (null == $request->input('ctl08dbb56b816442a7abb5a2503dd91906_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ANTIBIOTICOS_PIPA = null;
            }

            if (null != $request->input('ctle4006be88c34458fbad22b02fd0f2eff_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ANTIBIOTICOS_SILO = $request->input('ctle4006be88c34458fbad22b02fd0f2eff_8660ea54b1034c0593d3384c40db3424'); //FL_ANTIBIOTICOS_SILO
            } elseif (null == $request->input('ctle4006be88c34458fbad22b02fd0f2eff_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ANTIBIOTICOS_SILO = null;
            }

            if (null != $request->input('ctl7860d280a4de4bce939cb596062094ec_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CAPUCHON = $request->input('ctl7860d280a4de4bce939cb596062094ec_8660ea54b1034c0593d3384c40db3424'); //FL_CAPUCHON
            } elseif (null == $request->input('ctl7860d280a4de4bce939cb596062094ec_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CAPUCHON = null;
            }

            if (null != $request->input('ctl31abf3e63af94708845a4a2a6f4e5688_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_VOLUMEN = $request->input('ctl31abf3e63af94708845a4a2a6f4e5688_8660ea54b1034c0593d3384c40db3424'); //FL_VOLUMEN
            } elseif (null == $request->input('ctl31abf3e63af94708845a4a2a6f4e5688_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_VOLUMEN = null;
            }

            if (null != $request->input('ctlb31dd0502f7b4101ab5dafc3e031c45f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_VIDRIOS = $request->input('ctlb31dd0502f7b4101ab5dafc3e031c45f_8660ea54b1034c0593d3384c40db3424'); //FL_VIDRIOS
            } elseif (null == $request->input('ctlb31dd0502f7b4101ab5dafc3e031c45f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_VIDRIOS = null;
            }

            if (null != $request->input('ctl149e453460f64259819d2a6678b5b300_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_VALVULA = $request->input('ctl149e453460f64259819d2a6678b5b300_8660ea54b1034c0593d3384c40db3424'); //FL_VALVULA
            } elseif (null == $request->input('ctl149e453460f64259819d2a6678b5b300_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_VALVULA = null;
            }

            if (null != $request->input('ctla9a3be6e9766412f859179e81924e304_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TEMPERATURA_SILO = $request->input('ctla9a3be6e9766412f859179e81924e304_8660ea54b1034c0593d3384c40db3424'); //FL_TEMPERATURA_SILO
            } elseif (null == $request->input('ctla9a3be6e9766412f859179e81924e304_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TEMPERATURA_SILO = null;
            }

            if (null != $request->input('ctl1cb63c32c849431e850ce59b7ea3b43c_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TEMPERATURA_PIPA = $request->input('ctl1cb63c32c849431e850ce59b7ea3b43c_8660ea54b1034c0593d3384c40db3424'); //FL_TEMPERATURA_PIPA
            } elseif (null == $request->input('ctl1cb63c32c849431e850ce59b7ea3b43c_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TEMPERATURA_PIPA = null;
            }

            if (null != $request->input('ctl2f89db7123214eec8e5612b4d5c6886f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TARA = $request->input('ctl2f89db7123214eec8e5612b4d5c6886f_8660ea54b1034c0593d3384c40db3424'); //FL_TARA
            } elseif (null == $request->input('ctl2f89db7123214eec8e5612b4d5c6886f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TARA = null;
            }

            if (null != $request->input('ctl6c819ac848584b23bb6d03538fae802c_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TAPON_CIEGO = $request->input('ctl6c819ac848584b23bb6d03538fae802c_8660ea54b1034c0593d3384c40db3424'); //FL_TAPON_CIEGO
            } elseif (null == $request->input('ctl6c819ac848584b23bb6d03538fae802c_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TAPON_CIEGO = null;
            }

            if (null != $request->input('ctldd523f2bce6f443c896a7f26358c3179_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TAPA = $request->input('ctldd523f2bce6f443c896a7f26358c3179_8660ea54b1034c0593d3384c40db3424'); //FL_TAPA
            } elseif (null == $request->input('ctldd523f2bce6f443c896a7f26358c3179_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TAPA = null;
            }

            if (null != $request->input('ctl7683da849cf646af8ede2a33f874ef42_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TANQUE = $request->input('ctl7683da849cf646af8ede2a33f874ef42_8660ea54b1034c0593d3384c40db3424'); //FL_TANQUE
            } elseif (null == $request->input('ctl7683da849cf646af8ede2a33f874ef42_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_TANQUE = null;
            }

            if (null != $request->input('ctlde6c62662f6d430b9b79776c7ece9afd_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SOLIDOS_TOTALES_SILO = $request->input('ctlde6c62662f6d430b9b79776c7ece9afd_8660ea54b1034c0593d3384c40db3424'); //FL_SOLIDOS_TOTALES_SILO
            } elseif (null == $request->input('ctlde6c62662f6d430b9b79776c7ece9afd_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SOLIDOS_TOTALES_SILO = null;
            }

            if (null != $request->input('ctl5a19f503adce4fa689fff09d31fa25a6_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SOLIDOS_TOTALES_PIPA = $request->input('ctl5a19f503adce4fa689fff09d31fa25a6_8660ea54b1034c0593d3384c40db3424'); //FL_SOLIDOS_TOTALES_PIPA
            } elseif (null == $request->input('ctl5a19f503adce4fa689fff09d31fa25a6_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SOLIDOS_TOTALES_PIPA = null;
            }

            if (null != $request->input('ctl45d639518a584c4eb0b7f3bcab7b23e7_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SOLIDOS_NO_GRASOS_SILO = $request->input('ctl45d639518a584c4eb0b7f3bcab7b23e7_8660ea54b1034c0593d3384c40db3424'); //FL_SOLIDOS_NO_GRASOS_SILO
            } elseif (null == $request->input('ctl45d639518a584c4eb0b7f3bcab7b23e7_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SOLIDOS_NO_GRASOS_SILO = null;
            }

            if (null != $request->input('ctl3318b481b15045238389452d2422abc5_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_PESO_NETO = $request->input('ctl3318b481b15045238389452d2422abc5_8660ea54b1034c0593d3384c40db3424'); //FL_PESO_NETO
            } elseif (null == $request->input('ctl3318b481b15045238389452d2422abc5_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_PESO_NETO = null;
            }

            if (null != $request->input('ctlf75c1e290889494fb3a82aadef852489_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_PROTEINAS_PIPA = $request->input('ctlf75c1e290889494fb3a82aadef852489_8660ea54b1034c0593d3384c40db3424'); //FL_PROTEINAS_PIPA
            } elseif (null == $request->input('ctlf75c1e290889494fb3a82aadef852489_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_PROTEINAS_PIPA = null;
            }

            if (null != $request->input('ctlc1d9e04235e84cc48b0c70b861b7c6b7_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_PROTEINAS_SILO = $request->input('ctlc1d9e04235e84cc48b0c70b861b7c6b7_8660ea54b1034c0593d3384c40db3424'); //FL_PROTEINAS_SILO
            } elseif (null == $request->input('ctlc1d9e04235e84cc48b0c70b861b7c6b7_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_PROTEINAS_SILO = null;
            }

            if (null != $request->input('ctl62d8a59aa0f7478e90326347489b95f3_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_REDUCTASA_PIPA = $request->input('ctl62d8a59aa0f7478e90326347489b95f3_8660ea54b1034c0593d3384c40db3424'); //FL_REDUCTASA_PIPA
            } elseif (null == $request->input('ctl62d8a59aa0f7478e90326347489b95f3_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_REDUCTASA_PIPA = null;
            }

            if (null != $request->input('ctl7fcdf64808f24cc2bd276f047e56a2d5_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_REDUCTASA_SILO = $request->input('ctl7fcdf64808f24cc2bd276f047e56a2d5_8660ea54b1034c0593d3384c40db3424'); //FL_REDUCTASA_SILO
            } elseif (null == $request->input('ctl7fcdf64808f24cc2bd276f047e56a2d5_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_REDUCTASA_SILO = null;
            }

            if (null != $request->input('ctl631e2740ea3d404ca5fd937d353f1045_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_RESPIRADERO = $request->input('ctl631e2740ea3d404ca5fd937d353f1045_8660ea54b1034c0593d3384c40db3424'); //FL_RESPIRADERO
            } elseif (null == $request->input('ctl631e2740ea3d404ca5fd937d353f1045_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_RESPIRADERO = null;
            }

            if (null != $request->input('ctlac6cd92e59264bd4970f1ccec52a8e4b_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_RINES_CARRO = $request->input('ctlac6cd92e59264bd4970f1ccec52a8e4b_8660ea54b1034c0593d3384c40db3424'); //FL_RINES_CARRO
            } elseif (null == $request->input('ctlac6cd92e59264bd4970f1ccec52a8e4b_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_RINES_CARRO = null;
            }

            if (null != $request->input('ctl497dd6f9de6a4b879b5720d0776167f6_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_RINES_TANQUE = $request->input('ctl497dd6f9de6a4b879b5720d0776167f6_8660ea54b1034c0593d3384c40db3424'); //FL_RINES_TANQUE
            } elseif (null == $request->input('ctl497dd6f9de6a4b879b5720d0776167f6_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_RINES_TANQUE = null;
            }

            if (null != $request->input('ctl13d9278bd97748cba18959b77bfab0eb_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SANITIZACION = $request->input('ctl13d9278bd97748cba18959b77bfab0eb_8660ea54b1034c0593d3384c40db3424'); //FL_SANITIZACION
            } elseif (null == $request->input('ctl13d9278bd97748cba18959b77bfab0eb_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SANITIZACION = null;
            }

            if (null != $request->input('ctldc49bd6b30044f518c41f247cdcc7172_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SOLIDOS_NO_GRASOS_PIPA = $request->input('ctldc49bd6b30044f518c41f247cdcc7172_8660ea54b1034c0593d3384c40db3424'); //FL_SOLIDOS_NO_GRASOS_PIPA
            } elseif (null == $request->input('ctldc49bd6b30044f518c41f247cdcc7172_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SOLIDOS_NO_GRASOS_PIPA = null;
            }

            if (null != $request->input('ctleed9c22f09c640d284724e1ec3b1009c_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ESCOTILLA = $request->input('ctleed9c22f09c640d284724e1ec3b1009c_8660ea54b1034c0593d3384c40db3424'); //FL_ESCOTILLA
            } elseif (null == $request->input('ctleed9c22f09c640d284724e1ec3b1009c_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ESCOTILLA = null;
            }

            if (null != $request->input('ctl5aa12f310a404b238052f47a298d3e90_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_FALDONES = $request->input('ctl5aa12f310a404b238052f47a298d3e90_8660ea54b1034c0593d3384c40db3424'); //FL_FALDONES
            } elseif (null == $request->input('ctl5aa12f310a404b238052f47a298d3e90_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_FALDONES = null;
            }

            if (null != $request->input('ctlf814b33789af4994a3aac804343b2aec_8660ea54b1034c0593d3384c40db3424') && '' != $request->input('ctlf814b33789af4994a3aac804343b2aec_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_FECHA_REGISTRO = \DateTime::createFromFormat(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), $request->input('ctlf814b33789af4994a3aac804343b2aec_8660ea54b1034c0593d3384c40db3424'))->format('Y-m-d H:i'); //FL_FECHA_REGISTROS
            } elseif (null != $request->input('ctlf814b33789af4994a3aac804343b2aec_8660ea54b1034c0593d3384c40db3424') && '' == $request->input('ctlf814b33789af4994a3aac804343b2aec_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_FECHA_REGISTRO = null;
            }

            if (null != $request->input('ctl5718db120b27443f8fe45c6b0a225dd0_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_GRASA_PIPA = $request->input('ctl5718db120b27443f8fe45c6b0a225dd0_8660ea54b1034c0593d3384c40db3424'); //FL_GRASA_PIPA
            } elseif (null == $request->input('ctl5718db120b27443f8fe45c6b0a225dd0_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_GRASA_PIPA = null;
            }

            if (null != $request->input('ctl12ba940f2ed84063b47eb7c7a6601fbe_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_GRASA_SILO = $request->input('ctl12ba940f2ed84063b47eb7c7a6601fbe_8660ea54b1034c0593d3384c40db3424'); //FL_GRASA_SILO
            } elseif (null == $request->input('ctl12ba940f2ed84063b47eb7c7a6601fbe_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_GRASA_SILO = null;
            }

            if (null != $request->input('ctlb938934146154a79b9eaa1ea45fa946c_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_INT_TANQUE = $request->input('ctlb938934146154a79b9eaa1ea45fa946c_8660ea54b1034c0593d3384c40db3424'); //FL_INT_TANQUE
            } elseif (null == $request->input('ctlb938934146154a79b9eaa1ea45fa946c_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_INT_TANQUE = null;
            }

            if (null != $request->input('ctle6f497b9ee5845f6a6bb475ec43430e8_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_LLANTAS = $request->input('ctle6f497b9ee5845f6a6bb475ec43430e8_8660ea54b1034c0593d3384c40db3424'); //FL_LLANTAS
            } elseif (null == $request->input('ctle6f497b9ee5845f6a6bb475ec43430e8_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_LLANTAS = null;
            }

            if (null != $request->input('ctlfa506f1d5dba4de5a9405e22ed5234b3_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_MANG_DESAGUE = $request->input('ctlfa506f1d5dba4de5a9405e22ed5234b3_8660ea54b1034c0593d3384c40db3424'); //FL_MANG_DESAGUE
            } elseif (null == $request->input('ctlfa506f1d5dba4de5a9405e22ed5234b3_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_MANG_DESAGUE = null;
            }

            if (null != $request->input('ctl832af7dc5e8f40829612d62948bb8e3f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_OBSERVACIONES = $request->input('ctl832af7dc5e8f40829612d62948bb8e3f_8660ea54b1034c0593d3384c40db3424'); //FL_OBSERVACIONES
            } elseif (null == $request->input('ctl832af7dc5e8f40829612d62948bb8e3f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_OBSERVACIONES = null;
            }

            if (null != $request->input('ctlb3aa14fc17294756b128c18d73137b1f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_PESO_BRUTO = $request->input('ctlb3aa14fc17294756b128c18d73137b1f_8660ea54b1034c0593d3384c40db3424'); //FL_PESO_BRUTO
            } elseif (null == $request->input('ctlb3aa14fc17294756b128c18d73137b1f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_PESO_BRUTO = null;
            }

            if (null != $request->input('ctl6f7bb54a15eb42daa812de77ad680c09_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CHAROLA = $request->input('ctl6f7bb54a15eb42daa812de77ad680c09_8660ea54b1034c0593d3384c40db3424'); //FL_CHAROLA
            } elseif (null == $request->input('ctl6f7bb54a15eb42daa812de77ad680c09_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CHAROLA = null;
            }

            if (null != $request->input('ctl6b085cea4e034a7b88cb07dca8673b3b_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CONTRATAPA = $request->input('ctl6b085cea4e034a7b88cb07dca8673b3b_8660ea54b1034c0593d3384c40db3424'); //FL_CONTRATAPA
            } elseif (null == $request->input('ctl6b085cea4e034a7b88cb07dca8673b3b_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CONTRATAPA = null;
            }

            if (null != $request->input('ctl82bdfe0a39c84d18944c58e9a5861751_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CRIOSCOPICO_PIPA = $request->input('ctl82bdfe0a39c84d18944c58e9a5861751_8660ea54b1034c0593d3384c40db3424'); //FL_CRIOSCOPICO_PIPA
            } elseif (null == $request->input('ctl82bdfe0a39c84d18944c58e9a5861751_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CRIOSCOPICO_PIPA = null;
            }

            if (null != $request->input('ctl58c0c884bfad4c2fa90e0d7d79a0a7ab_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CRIOSCOPICO_SILO = $request->input('ctl58c0c884bfad4c2fa90e0d7d79a0a7ab_8660ea54b1034c0593d3384c40db3424'); //FL_CRIOSCOPICO_SILO
            } elseif (null == $request->input('ctl58c0c884bfad4c2fa90e0d7d79a0a7ab_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CRIOSCOPICO_SILO = null;
            }

            if (null != $request->input('ctlee301debd7bd4fc3a0991a3768be11ae_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CUERPO = $request->input('ctlee301debd7bd4fc3a0991a3768be11ae_8660ea54b1034c0593d3384c40db3424'); //FL_CUERPO
            } elseif (null == $request->input('ctlee301debd7bd4fc3a0991a3768be11ae_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_CUERPO = null;
            }

            if (null != $request->input('ctl675ff6cb56e242c19d3cfcdfa735f121_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_DENSIDAD_PIPA = $request->input('ctl675ff6cb56e242c19d3cfcdfa735f121_8660ea54b1034c0593d3384c40db3424'); //FL_DENSIDAD_PIPA
            } elseif (null == $request->input('ctl675ff6cb56e242c19d3cfcdfa735f121_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_DENSIDAD_PIPA = null;
            }

            if (null != $request->input('ctla09a939b63b348178b20038dfd285092_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_DENSIDAD_SILO = $request->input('ctla09a939b63b348178b20038dfd285092_8660ea54b1034c0593d3384c40db3424'); //FL_DENSIDAD_SILO
            } elseif (null == $request->input('ctla09a939b63b348178b20038dfd285092_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_DENSIDAD_SILO = null;
            }

            if (null != $request->input('ctl0ea84bcaa7674970ad42551fd4e3f72b_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_EMPAQUE = $request->input('ctl0ea84bcaa7674970ad42551fd4e3f72b_8660ea54b1034c0593d3384c40db3424'); //FL_EMPAQUE
            } elseif (null == $request->input('ctl0ea84bcaa7674970ad42551fd4e3f72b_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_EMPAQUE = null;
            }

            if (null != $request->input('ctl3c43085241bf46dbbfb1427f931ed2dd_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ESCALERA = $request->input('ctl3c43085241bf46dbbfb1427f931ed2dd_8660ea54b1034c0593d3384c40db3424'); //FL_ESCALERA
            } elseif (null == $request->input('ctl3c43085241bf46dbbfb1427f931ed2dd_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ESCALERA = null;
            }

            if (null != $request->input('ctl7fe496642f434b27b2ba6c664cf2a784_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SUPERF_EXT_CARRO = $request->input('ctl7fe496642f434b27b2ba6c664cf2a784_8660ea54b1034c0593d3384c40db3424'); //FL_SUPERF_EXT_CARRO
            } elseif (null == $request->input('ctl7fe496642f434b27b2ba6c664cf2a784_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SUPERF_EXT_CARRO = null;
            }

            if (null != $request->input('ctl0dadd67cf69344d8aad255b47c0efa6f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SUPERF_EXT_TANQUE = $request->input('ctl0dadd67cf69344d8aad255b47c0efa6f_8660ea54b1034c0593d3384c40db3424'); //FL_SUPERF_EXT_TANQUE
            } elseif (null == $request->input('ctl0dadd67cf69344d8aad255b47c0efa6f_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_SUPERF_EXT_TANQUE = null;
            }

            if (null != $request->input('ctlfd8d8b2c01ef406dbcd7f631ec6a2f2b_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_JEFE_CENTRO_ACOPIO = $request->input('ctlfd8d8b2c01ef406dbcd7f631ec6a2f2b_8660ea54b1034c0593d3384c40db3424'); //FL_JEFE_CENTRO_ACOPIO
            } elseif (null == $request->input('ctlfd8d8b2c01ef406dbcd7f631ec6a2f2b_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_JEFE_CENTRO_ACOPIO = null;
            }

            if (null != $request->input('ctld8ec720bda6a48dcaeb9fb9c12859ff4_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_INSPECCIONO = $request->input('ctld8ec720bda6a48dcaeb9fb9c12859ff4_8660ea54b1034c0593d3384c40db3424'); //FL_INSPECCIONO
            } elseif (null == $request->input('ctld8ec720bda6a48dcaeb9fb9c12859ff4_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_INSPECCIONO = null;
            }

            if (null != $request->input('ctl0b7c7cc817b14953baabc6d7283e5188_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FK_DESTINO = $request->input('ctl0b7c7cc817b14953baabc6d7283e5188_8660ea54b1034c0593d3384c40db3424'); //FK_DESTINO
            } elseif (null == $request->input('ctl0b7c7cc817b14953baabc6d7283e5188_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FK_DESTINO = null;
            }

            if (null != $request->input('ctledeff3ffc9124ca390c82edf4cd014ca_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_HORA = $request->input('ctledeff3ffc9124ca390c82edf4cd014ca_8660ea54b1034c0593d3384c40db3424'); //FL_HORA
            } elseif (null == $request->input('ctledeff3ffc9124ca390c82edf4cd014ca_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_HORA = null;
            }

            if (null != $request->input('traspaso')) {
                $tb->FK_MISMO_TRASPASO = $request->input('traspaso'); //FK_MISMO_TRASPASO
            } elseif (null == $request->input('traspaso')) {
                $tb->FK_MISMO_TRASPASO = null;
            }

            if (null != $request->input('ctlb4211147a0c349b893aabeb74dc0d417_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ALCOHOL_SILO = $request->input('ctlb4211147a0c349b893aabeb74dc0d417_8660ea54b1034c0593d3384c40db3424'); //FL_ALCOHOL_SILO
            } elseif (null == $request->input('ctlb4211147a0c349b893aabeb74dc0d417_8660ea54b1034c0593d3384c40db3424')) {
                $tb->FL_ALCOHOL_SILO = null;
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

        // Lista Alcohol Pipa - Lista Alcohol Pipa

        $par6185a7056560433494dba94e9ae59107c91da3e26cb3454f87381503a6354daa = 0;

        if (null == $par6185a7056560433494dba94e9ae59107c91da3e26cb3454f87381503a6354daa) {
            $par6185a7056560433494dba94e9ae59107c91da3e26cb3454f87381503a6354daa = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860c91da3e26cb3454f87381503a6354daa = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860c91da3e26cb3454f87381503a6354daa) {
            $par0a0ce2af85ab462a808e0270326fb860c91da3e26cb3454f87381503a6354daa = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcec91da3e26cb3454f87381503a6354daa = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcec91da3e26cb3454f87381503a6354daa) {
            $par5551ae677d6b488ebd38625d0f5d9fcec91da3e26cb3454f87381503a6354daa = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcec91da3e26cb3454f87381503a6354daa) {
            $par5551ae677d6b488ebd38625d0f5d9fcec91da3e26cb3454f87381503a6354daa = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5c91da3e26cb3454f87381503a6354daa = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5c91da3e26cb3454f87381503a6354daa) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5c91da3e26cb3454f87381503a6354daa = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5c91da3e26cb3454f87381503a6354daa) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5c91da3e26cb3454f87381503a6354daa = '';
        }

        $vc91da3e26cb3454f87381503a6354daa = \App\repf782f923fd0247bd9f4010b717e52999::mt31f42dbc44324b34b7d33abae4e52bdc($par6185a7056560433494dba94e9ae59107c91da3e26cb3454f87381503a6354daa, $par0a0ce2af85ab462a808e0270326fb860c91da3e26cb3454f87381503a6354daa, $par5551ae677d6b488ebd38625d0f5d9fcec91da3e26cb3454f87381503a6354daa, $par8fce8a73ac264e4a8f3b56d8b991b8a5c91da3e26cb3454f87381503a6354daa);

        $vc91da3e26cb3454f87381503a6354daaAjax = \URL::to('/').'/api/31f42dbc44324b34b7d33abae4e52bdc/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista Alcohol Silo - Lista Alcohol Silo

        $par6185a7056560433494dba94e9ae59107537e255c78d04994ae100faae558cc3f = 0;

        if (null == $par6185a7056560433494dba94e9ae59107537e255c78d04994ae100faae558cc3f) {
            $par6185a7056560433494dba94e9ae59107537e255c78d04994ae100faae558cc3f = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860537e255c78d04994ae100faae558cc3f = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860537e255c78d04994ae100faae558cc3f) {
            $par0a0ce2af85ab462a808e0270326fb860537e255c78d04994ae100faae558cc3f = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce537e255c78d04994ae100faae558cc3f = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce537e255c78d04994ae100faae558cc3f) {
            $par5551ae677d6b488ebd38625d0f5d9fce537e255c78d04994ae100faae558cc3f = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce537e255c78d04994ae100faae558cc3f) {
            $par5551ae677d6b488ebd38625d0f5d9fce537e255c78d04994ae100faae558cc3f = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5537e255c78d04994ae100faae558cc3f = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5537e255c78d04994ae100faae558cc3f) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5537e255c78d04994ae100faae558cc3f = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5537e255c78d04994ae100faae558cc3f) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5537e255c78d04994ae100faae558cc3f = '';
        }

        $v537e255c78d04994ae100faae558cc3f = \App\repf782f923fd0247bd9f4010b717e52999::mtc54f7c7473ce482d8350884b8e32bc9c($par6185a7056560433494dba94e9ae59107537e255c78d04994ae100faae558cc3f, $par0a0ce2af85ab462a808e0270326fb860537e255c78d04994ae100faae558cc3f, $par5551ae677d6b488ebd38625d0f5d9fce537e255c78d04994ae100faae558cc3f, $par8fce8a73ac264e4a8f3b56d8b991b8a5537e255c78d04994ae100faae558cc3f);

        $v537e255c78d04994ae100faae558cc3fAjax = \URL::to('/').'/api/c54f7c7473ce482d8350884b8e32bc9c/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista Antibióticos Pipa - Lista Antibióticos Pipa

        $par6185a7056560433494dba94e9ae591070bc4765040f54aac964803b5736cc84c = 0;

        if (null == $par6185a7056560433494dba94e9ae591070bc4765040f54aac964803b5736cc84c) {
            $par6185a7056560433494dba94e9ae591070bc4765040f54aac964803b5736cc84c = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8600bc4765040f54aac964803b5736cc84c = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8600bc4765040f54aac964803b5736cc84c) {
            $par0a0ce2af85ab462a808e0270326fb8600bc4765040f54aac964803b5736cc84c = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce0bc4765040f54aac964803b5736cc84c = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce0bc4765040f54aac964803b5736cc84c) {
            $par5551ae677d6b488ebd38625d0f5d9fce0bc4765040f54aac964803b5736cc84c = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce0bc4765040f54aac964803b5736cc84c) {
            $par5551ae677d6b488ebd38625d0f5d9fce0bc4765040f54aac964803b5736cc84c = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a50bc4765040f54aac964803b5736cc84c = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a50bc4765040f54aac964803b5736cc84c) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a50bc4765040f54aac964803b5736cc84c = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a50bc4765040f54aac964803b5736cc84c) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a50bc4765040f54aac964803b5736cc84c = '';
        }

        $v0bc4765040f54aac964803b5736cc84c = \App\repf782f923fd0247bd9f4010b717e52999::mte490e8baae984bf296ebdcbfdbdaf826($par6185a7056560433494dba94e9ae591070bc4765040f54aac964803b5736cc84c, $par0a0ce2af85ab462a808e0270326fb8600bc4765040f54aac964803b5736cc84c, $par5551ae677d6b488ebd38625d0f5d9fce0bc4765040f54aac964803b5736cc84c, $par8fce8a73ac264e4a8f3b56d8b991b8a50bc4765040f54aac964803b5736cc84c);

        $v0bc4765040f54aac964803b5736cc84cAjax = \URL::to('/').'/api/e490e8baae984bf296ebdcbfdbdaf826/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista Antibióticos Silo - Lista Antibióticos Silo

        $par6185a7056560433494dba94e9ae59107be56779bb6c646b79a39fc57bf070fc4 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107be56779bb6c646b79a39fc57bf070fc4) {
            $par6185a7056560433494dba94e9ae59107be56779bb6c646b79a39fc57bf070fc4 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860be56779bb6c646b79a39fc57bf070fc4 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860be56779bb6c646b79a39fc57bf070fc4) {
            $par0a0ce2af85ab462a808e0270326fb860be56779bb6c646b79a39fc57bf070fc4 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcebe56779bb6c646b79a39fc57bf070fc4 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcebe56779bb6c646b79a39fc57bf070fc4) {
            $par5551ae677d6b488ebd38625d0f5d9fcebe56779bb6c646b79a39fc57bf070fc4 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcebe56779bb6c646b79a39fc57bf070fc4) {
            $par5551ae677d6b488ebd38625d0f5d9fcebe56779bb6c646b79a39fc57bf070fc4 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5be56779bb6c646b79a39fc57bf070fc4 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5be56779bb6c646b79a39fc57bf070fc4) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5be56779bb6c646b79a39fc57bf070fc4 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5be56779bb6c646b79a39fc57bf070fc4) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5be56779bb6c646b79a39fc57bf070fc4 = '';
        }

        $vbe56779bb6c646b79a39fc57bf070fc4 = \App\repf782f923fd0247bd9f4010b717e52999::mt2bd88b8bbb23417aa14d7a1d9e547233($par6185a7056560433494dba94e9ae59107be56779bb6c646b79a39fc57bf070fc4, $par0a0ce2af85ab462a808e0270326fb860be56779bb6c646b79a39fc57bf070fc4, $par5551ae677d6b488ebd38625d0f5d9fcebe56779bb6c646b79a39fc57bf070fc4, $par8fce8a73ac264e4a8f3b56d8b991b8a5be56779bb6c646b79a39fc57bf070fc4);

        $vbe56779bb6c646b79a39fc57bf070fc4Ajax = \URL::to('/').'/api/2bd88b8bbb23417aa14d7a1d9e547233/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA CAPUCHON - LISTA CAPUCHON

        $par6185a7056560433494dba94e9ae5910793f10c61ef9345b884cd206ddb4d151f = 0;

        if (null == $par6185a7056560433494dba94e9ae5910793f10c61ef9345b884cd206ddb4d151f) {
            $par6185a7056560433494dba94e9ae5910793f10c61ef9345b884cd206ddb4d151f = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86093f10c61ef9345b884cd206ddb4d151f = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86093f10c61ef9345b884cd206ddb4d151f) {
            $par0a0ce2af85ab462a808e0270326fb86093f10c61ef9345b884cd206ddb4d151f = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce93f10c61ef9345b884cd206ddb4d151f = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce93f10c61ef9345b884cd206ddb4d151f) {
            $par5551ae677d6b488ebd38625d0f5d9fce93f10c61ef9345b884cd206ddb4d151f = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce93f10c61ef9345b884cd206ddb4d151f) {
            $par5551ae677d6b488ebd38625d0f5d9fce93f10c61ef9345b884cd206ddb4d151f = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a593f10c61ef9345b884cd206ddb4d151f = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a593f10c61ef9345b884cd206ddb4d151f) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a593f10c61ef9345b884cd206ddb4d151f = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a593f10c61ef9345b884cd206ddb4d151f) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a593f10c61ef9345b884cd206ddb4d151f = '';
        }

        $v93f10c61ef9345b884cd206ddb4d151f = \App\repf782f923fd0247bd9f4010b717e52999::mt55ba4aaba4e246ef95bbc9a5b39bac65($par6185a7056560433494dba94e9ae5910793f10c61ef9345b884cd206ddb4d151f, $par0a0ce2af85ab462a808e0270326fb86093f10c61ef9345b884cd206ddb4d151f, $par5551ae677d6b488ebd38625d0f5d9fce93f10c61ef9345b884cd206ddb4d151f, $par8fce8a73ac264e4a8f3b56d8b991b8a593f10c61ef9345b884cd206ddb4d151f);

        $v93f10c61ef9345b884cd206ddb4d151fAjax = \URL::to('/').'/api/55ba4aaba4e246ef95bbc9a5b39bac65/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA CHAROLA - LISTA CHAROLA INTERIOR DE TANQUE

        $par6185a7056560433494dba94e9ae59107eae1e677102f4028864792a12d6a06b1 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107eae1e677102f4028864792a12d6a06b1) {
            $par6185a7056560433494dba94e9ae59107eae1e677102f4028864792a12d6a06b1 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860eae1e677102f4028864792a12d6a06b1 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860eae1e677102f4028864792a12d6a06b1) {
            $par0a0ce2af85ab462a808e0270326fb860eae1e677102f4028864792a12d6a06b1 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fceeae1e677102f4028864792a12d6a06b1 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fceeae1e677102f4028864792a12d6a06b1) {
            $par5551ae677d6b488ebd38625d0f5d9fceeae1e677102f4028864792a12d6a06b1 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fceeae1e677102f4028864792a12d6a06b1) {
            $par5551ae677d6b488ebd38625d0f5d9fceeae1e677102f4028864792a12d6a06b1 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5eae1e677102f4028864792a12d6a06b1 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5eae1e677102f4028864792a12d6a06b1) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5eae1e677102f4028864792a12d6a06b1 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5eae1e677102f4028864792a12d6a06b1) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5eae1e677102f4028864792a12d6a06b1 = '';
        }

        $veae1e677102f4028864792a12d6a06b1 = \App\repf782f923fd0247bd9f4010b717e52999::mt6c1e9c993ac64caf9861437cfb78157b($par6185a7056560433494dba94e9ae59107eae1e677102f4028864792a12d6a06b1, $par0a0ce2af85ab462a808e0270326fb860eae1e677102f4028864792a12d6a06b1, $par5551ae677d6b488ebd38625d0f5d9fceeae1e677102f4028864792a12d6a06b1, $par8fce8a73ac264e4a8f3b56d8b991b8a5eae1e677102f4028864792a12d6a06b1);

        $veae1e677102f4028864792a12d6a06b1Ajax = \URL::to('/').'/api/6c1e9c993ac64caf9861437cfb78157b/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA CONTRATAPA - LISTA CONTRATAPA INTERIOR  DE TANQUE

        $par6185a7056560433494dba94e9ae591072d63ee675cf748c6abb5a5552a061c35 = 0;

        if (null == $par6185a7056560433494dba94e9ae591072d63ee675cf748c6abb5a5552a061c35) {
            $par6185a7056560433494dba94e9ae591072d63ee675cf748c6abb5a5552a061c35 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8602d63ee675cf748c6abb5a5552a061c35 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8602d63ee675cf748c6abb5a5552a061c35) {
            $par0a0ce2af85ab462a808e0270326fb8602d63ee675cf748c6abb5a5552a061c35 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce2d63ee675cf748c6abb5a5552a061c35 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce2d63ee675cf748c6abb5a5552a061c35) {
            $par5551ae677d6b488ebd38625d0f5d9fce2d63ee675cf748c6abb5a5552a061c35 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce2d63ee675cf748c6abb5a5552a061c35) {
            $par5551ae677d6b488ebd38625d0f5d9fce2d63ee675cf748c6abb5a5552a061c35 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a52d63ee675cf748c6abb5a5552a061c35 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a52d63ee675cf748c6abb5a5552a061c35) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a52d63ee675cf748c6abb5a5552a061c35 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a52d63ee675cf748c6abb5a5552a061c35) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a52d63ee675cf748c6abb5a5552a061c35 = '';
        }

        $v2d63ee675cf748c6abb5a5552a061c35 = \App\repf782f923fd0247bd9f4010b717e52999::mt44426308c9a9413f862efe5c86db6b20($par6185a7056560433494dba94e9ae591072d63ee675cf748c6abb5a5552a061c35, $par0a0ce2af85ab462a808e0270326fb8602d63ee675cf748c6abb5a5552a061c35, $par5551ae677d6b488ebd38625d0f5d9fce2d63ee675cf748c6abb5a5552a061c35, $par8fce8a73ac264e4a8f3b56d8b991b8a52d63ee675cf748c6abb5a5552a061c35);

        $v2d63ee675cf748c6abb5a5552a061c35Ajax = \URL::to('/').'/api/44426308c9a9413f862efe5c86db6b20/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista Crioscopia Pipa - Lista Crioscopia Pipa

        $par6185a7056560433494dba94e9ae59107a5c2468124d74d6f9e882d45cc92afbb = 0;

        if (null == $par6185a7056560433494dba94e9ae59107a5c2468124d74d6f9e882d45cc92afbb) {
            $par6185a7056560433494dba94e9ae59107a5c2468124d74d6f9e882d45cc92afbb = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860a5c2468124d74d6f9e882d45cc92afbb = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860a5c2468124d74d6f9e882d45cc92afbb) {
            $par0a0ce2af85ab462a808e0270326fb860a5c2468124d74d6f9e882d45cc92afbb = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcea5c2468124d74d6f9e882d45cc92afbb = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcea5c2468124d74d6f9e882d45cc92afbb) {
            $par5551ae677d6b488ebd38625d0f5d9fcea5c2468124d74d6f9e882d45cc92afbb = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcea5c2468124d74d6f9e882d45cc92afbb) {
            $par5551ae677d6b488ebd38625d0f5d9fcea5c2468124d74d6f9e882d45cc92afbb = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5a5c2468124d74d6f9e882d45cc92afbb = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5a5c2468124d74d6f9e882d45cc92afbb) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a5c2468124d74d6f9e882d45cc92afbb = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5a5c2468124d74d6f9e882d45cc92afbb) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a5c2468124d74d6f9e882d45cc92afbb = '';
        }

        $va5c2468124d74d6f9e882d45cc92afbb = \App\repf782f923fd0247bd9f4010b717e52999::mtba52a1ac8d894a1f9a15709e1b630024($par6185a7056560433494dba94e9ae59107a5c2468124d74d6f9e882d45cc92afbb, $par0a0ce2af85ab462a808e0270326fb860a5c2468124d74d6f9e882d45cc92afbb, $par5551ae677d6b488ebd38625d0f5d9fcea5c2468124d74d6f9e882d45cc92afbb, $par8fce8a73ac264e4a8f3b56d8b991b8a5a5c2468124d74d6f9e882d45cc92afbb);

        $va5c2468124d74d6f9e882d45cc92afbbAjax = \URL::to('/').'/api/ba52a1ac8d894a1f9a15709e1b630024/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista Crioscopia Silo - Lista Crioscopia Silo

        $par6185a7056560433494dba94e9ae5910765d268c6d7474eca9d0286f28a8aa39e = 0;

        if (null == $par6185a7056560433494dba94e9ae5910765d268c6d7474eca9d0286f28a8aa39e) {
            $par6185a7056560433494dba94e9ae5910765d268c6d7474eca9d0286f28a8aa39e = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86065d268c6d7474eca9d0286f28a8aa39e = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86065d268c6d7474eca9d0286f28a8aa39e) {
            $par0a0ce2af85ab462a808e0270326fb86065d268c6d7474eca9d0286f28a8aa39e = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce65d268c6d7474eca9d0286f28a8aa39e = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce65d268c6d7474eca9d0286f28a8aa39e) {
            $par5551ae677d6b488ebd38625d0f5d9fce65d268c6d7474eca9d0286f28a8aa39e = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce65d268c6d7474eca9d0286f28a8aa39e) {
            $par5551ae677d6b488ebd38625d0f5d9fce65d268c6d7474eca9d0286f28a8aa39e = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a565d268c6d7474eca9d0286f28a8aa39e = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a565d268c6d7474eca9d0286f28a8aa39e) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a565d268c6d7474eca9d0286f28a8aa39e = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a565d268c6d7474eca9d0286f28a8aa39e) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a565d268c6d7474eca9d0286f28a8aa39e = '';
        }

        $v65d268c6d7474eca9d0286f28a8aa39e = \App\repf782f923fd0247bd9f4010b717e52999::mt246c982729f5469ebcce749d45b4199c($par6185a7056560433494dba94e9ae5910765d268c6d7474eca9d0286f28a8aa39e, $par0a0ce2af85ab462a808e0270326fb86065d268c6d7474eca9d0286f28a8aa39e, $par5551ae677d6b488ebd38625d0f5d9fce65d268c6d7474eca9d0286f28a8aa39e, $par8fce8a73ac264e4a8f3b56d8b991b8a565d268c6d7474eca9d0286f28a8aa39e);

        $v65d268c6d7474eca9d0286f28a8aa39eAjax = \URL::to('/').'/api/246c982729f5469ebcce749d45b4199c/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA CUERPO - LISTA CUERPO

        $par6185a7056560433494dba94e9ae591077933ddc1c8d04340940dd8189cb8bb02 = 0;

        if (null == $par6185a7056560433494dba94e9ae591077933ddc1c8d04340940dd8189cb8bb02) {
            $par6185a7056560433494dba94e9ae591077933ddc1c8d04340940dd8189cb8bb02 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8607933ddc1c8d04340940dd8189cb8bb02 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8607933ddc1c8d04340940dd8189cb8bb02) {
            $par0a0ce2af85ab462a808e0270326fb8607933ddc1c8d04340940dd8189cb8bb02 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce7933ddc1c8d04340940dd8189cb8bb02 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce7933ddc1c8d04340940dd8189cb8bb02) {
            $par5551ae677d6b488ebd38625d0f5d9fce7933ddc1c8d04340940dd8189cb8bb02 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce7933ddc1c8d04340940dd8189cb8bb02) {
            $par5551ae677d6b488ebd38625d0f5d9fce7933ddc1c8d04340940dd8189cb8bb02 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a57933ddc1c8d04340940dd8189cb8bb02 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a57933ddc1c8d04340940dd8189cb8bb02) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a57933ddc1c8d04340940dd8189cb8bb02 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a57933ddc1c8d04340940dd8189cb8bb02) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a57933ddc1c8d04340940dd8189cb8bb02 = '';
        }

        $v7933ddc1c8d04340940dd8189cb8bb02 = \App\repf782f923fd0247bd9f4010b717e52999::mt7cffeaf8fdce4dd6bb758433ec243150($par6185a7056560433494dba94e9ae591077933ddc1c8d04340940dd8189cb8bb02, $par0a0ce2af85ab462a808e0270326fb8607933ddc1c8d04340940dd8189cb8bb02, $par5551ae677d6b488ebd38625d0f5d9fce7933ddc1c8d04340940dd8189cb8bb02, $par8fce8a73ac264e4a8f3b56d8b991b8a57933ddc1c8d04340940dd8189cb8bb02);

        $v7933ddc1c8d04340940dd8189cb8bb02Ajax = \URL::to('/').'/api/7cffeaf8fdce4dd6bb758433ec243150/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista destino Traspasos - Lista destino Traspasos

        $par0bce3d93324147809756c596a16b80511 = '1';

        if ('-' == $par0bce3d93324147809756c596a16b80511) {
            $par0bce3d93324147809756c596a16b80511 = null;
        }

        if (null == $par0bce3d93324147809756c596a16b80511) {
            $par0bce3d93324147809756c596a16b80511 = '1';
        }

        $par5da21dd228434592b8abf080098c5b351 = '0';

        if ('-' == $par5da21dd228434592b8abf080098c5b351) {
            $par5da21dd228434592b8abf080098c5b351 = null;
        }

        if (null == $par5da21dd228434592b8abf080098c5b351) {
            $par5da21dd228434592b8abf080098c5b351 = '0';
        }

        $par082f0933a71f4d17b03065c003ef3bab1 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $par082f0933a71f4d17b03065c003ef3bab1) {
            $par082f0933a71f4d17b03065c003ef3bab1 = '0';
        }

        $par6185a7056560433494dba94e9ae59107371d5a73185c40c5823312c126da3762 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107371d5a73185c40c5823312c126da3762) {
            $par6185a7056560433494dba94e9ae59107371d5a73185c40c5823312c126da3762 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860371d5a73185c40c5823312c126da3762 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860371d5a73185c40c5823312c126da3762) {
            $par0a0ce2af85ab462a808e0270326fb860371d5a73185c40c5823312c126da3762 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce371d5a73185c40c5823312c126da3762 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce371d5a73185c40c5823312c126da3762) {
            $par5551ae677d6b488ebd38625d0f5d9fce371d5a73185c40c5823312c126da3762 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce371d5a73185c40c5823312c126da3762) {
            $par5551ae677d6b488ebd38625d0f5d9fce371d5a73185c40c5823312c126da3762 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5371d5a73185c40c5823312c126da3762 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5371d5a73185c40c5823312c126da3762) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5371d5a73185c40c5823312c126da3762 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5371d5a73185c40c5823312c126da3762) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5371d5a73185c40c5823312c126da3762 = '';
        }

        $v371d5a73185c40c5823312c126da3762 = \App\repf782f923fd0247bd9f4010b717e52999::mte3cc05c54ee14625884b2c78a60507f2($par0bce3d93324147809756c596a16b80511, $par5da21dd228434592b8abf080098c5b351, $par082f0933a71f4d17b03065c003ef3bab1, $par6185a7056560433494dba94e9ae59107371d5a73185c40c5823312c126da3762, $par0a0ce2af85ab462a808e0270326fb860371d5a73185c40c5823312c126da3762, $par5551ae677d6b488ebd38625d0f5d9fce371d5a73185c40c5823312c126da3762, $par8fce8a73ac264e4a8f3b56d8b991b8a5371d5a73185c40c5823312c126da3762);

        $v371d5a73185c40c5823312c126da3762Ajax = \URL::to('/').'/api/e3cc05c54ee14625884b2c78a60507f2/'.(null == $par0bce3d93324147809756c596a16b80511 ? '-' : ('' == $par0bce3d93324147809756c596a16b80511 ? '-' : $par0bce3d93324147809756c596a16b80511)).'/'.(null == $par5da21dd228434592b8abf080098c5b351 ? '-' : ('' == $par5da21dd228434592b8abf080098c5b351 ? '-' : $par5da21dd228434592b8abf080098c5b351)).'/'.(null == $par082f0933a71f4d17b03065c003ef3bab1 ? '-' : ('' == $par082f0933a71f4d17b03065c003ef3bab1 ? '-' : $par082f0933a71f4d17b03065c003ef3bab1)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA EMPAQUE - LISTA EMPAQUE

        $par6185a7056560433494dba94e9ae59107ee5a09fe20f447128d2549d1f8214bf9 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107ee5a09fe20f447128d2549d1f8214bf9) {
            $par6185a7056560433494dba94e9ae59107ee5a09fe20f447128d2549d1f8214bf9 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860ee5a09fe20f447128d2549d1f8214bf9 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860ee5a09fe20f447128d2549d1f8214bf9) {
            $par0a0ce2af85ab462a808e0270326fb860ee5a09fe20f447128d2549d1f8214bf9 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fceee5a09fe20f447128d2549d1f8214bf9 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fceee5a09fe20f447128d2549d1f8214bf9) {
            $par5551ae677d6b488ebd38625d0f5d9fceee5a09fe20f447128d2549d1f8214bf9 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fceee5a09fe20f447128d2549d1f8214bf9) {
            $par5551ae677d6b488ebd38625d0f5d9fceee5a09fe20f447128d2549d1f8214bf9 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5ee5a09fe20f447128d2549d1f8214bf9 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5ee5a09fe20f447128d2549d1f8214bf9) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5ee5a09fe20f447128d2549d1f8214bf9 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5ee5a09fe20f447128d2549d1f8214bf9) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5ee5a09fe20f447128d2549d1f8214bf9 = '';
        }

        $vee5a09fe20f447128d2549d1f8214bf9 = \App\repf782f923fd0247bd9f4010b717e52999::mt7d8e860cbe2d4b0d8a3635179437d484($par6185a7056560433494dba94e9ae59107ee5a09fe20f447128d2549d1f8214bf9, $par0a0ce2af85ab462a808e0270326fb860ee5a09fe20f447128d2549d1f8214bf9, $par5551ae677d6b488ebd38625d0f5d9fceee5a09fe20f447128d2549d1f8214bf9, $par8fce8a73ac264e4a8f3b56d8b991b8a5ee5a09fe20f447128d2549d1f8214bf9);

        $vee5a09fe20f447128d2549d1f8214bf9Ajax = \URL::to('/').'/api/7d8e860cbe2d4b0d8a3635179437d484/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA ESCALERA - LISTA ESCALERA EXTERIOR DE TANQUE

        $par6185a7056560433494dba94e9ae5910719280d8b51cd4820bfc6c76bedb181bf = 0;

        if (null == $par6185a7056560433494dba94e9ae5910719280d8b51cd4820bfc6c76bedb181bf) {
            $par6185a7056560433494dba94e9ae5910719280d8b51cd4820bfc6c76bedb181bf = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86019280d8b51cd4820bfc6c76bedb181bf = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86019280d8b51cd4820bfc6c76bedb181bf) {
            $par0a0ce2af85ab462a808e0270326fb86019280d8b51cd4820bfc6c76bedb181bf = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce19280d8b51cd4820bfc6c76bedb181bf = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce19280d8b51cd4820bfc6c76bedb181bf) {
            $par5551ae677d6b488ebd38625d0f5d9fce19280d8b51cd4820bfc6c76bedb181bf = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce19280d8b51cd4820bfc6c76bedb181bf) {
            $par5551ae677d6b488ebd38625d0f5d9fce19280d8b51cd4820bfc6c76bedb181bf = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a519280d8b51cd4820bfc6c76bedb181bf = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a519280d8b51cd4820bfc6c76bedb181bf) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a519280d8b51cd4820bfc6c76bedb181bf = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a519280d8b51cd4820bfc6c76bedb181bf) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a519280d8b51cd4820bfc6c76bedb181bf = '';
        }

        $v19280d8b51cd4820bfc6c76bedb181bf = \App\repf782f923fd0247bd9f4010b717e52999::mt518f941c789d428eb9b6514f1ac40dd5($par6185a7056560433494dba94e9ae5910719280d8b51cd4820bfc6c76bedb181bf, $par0a0ce2af85ab462a808e0270326fb86019280d8b51cd4820bfc6c76bedb181bf, $par5551ae677d6b488ebd38625d0f5d9fce19280d8b51cd4820bfc6c76bedb181bf, $par8fce8a73ac264e4a8f3b56d8b991b8a519280d8b51cd4820bfc6c76bedb181bf);

        $v19280d8b51cd4820bfc6c76bedb181bfAjax = \URL::to('/').'/api/518f941c789d428eb9b6514f1ac40dd5/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA ESCOTILLA - LISTA ESCOTILLA

        $par6185a7056560433494dba94e9ae591072a3caa6ccb2c4c76863f0588267f6307 = 0;

        if (null == $par6185a7056560433494dba94e9ae591072a3caa6ccb2c4c76863f0588267f6307) {
            $par6185a7056560433494dba94e9ae591072a3caa6ccb2c4c76863f0588267f6307 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8602a3caa6ccb2c4c76863f0588267f6307 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8602a3caa6ccb2c4c76863f0588267f6307) {
            $par0a0ce2af85ab462a808e0270326fb8602a3caa6ccb2c4c76863f0588267f6307 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce2a3caa6ccb2c4c76863f0588267f6307 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce2a3caa6ccb2c4c76863f0588267f6307) {
            $par5551ae677d6b488ebd38625d0f5d9fce2a3caa6ccb2c4c76863f0588267f6307 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce2a3caa6ccb2c4c76863f0588267f6307) {
            $par5551ae677d6b488ebd38625d0f5d9fce2a3caa6ccb2c4c76863f0588267f6307 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a52a3caa6ccb2c4c76863f0588267f6307 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a52a3caa6ccb2c4c76863f0588267f6307) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a52a3caa6ccb2c4c76863f0588267f6307 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a52a3caa6ccb2c4c76863f0588267f6307) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a52a3caa6ccb2c4c76863f0588267f6307 = '';
        }

        $v2a3caa6ccb2c4c76863f0588267f6307 = \App\repf782f923fd0247bd9f4010b717e52999::mtb1c02e85ae0f4ff78aa966f2795138a1($par6185a7056560433494dba94e9ae591072a3caa6ccb2c4c76863f0588267f6307, $par0a0ce2af85ab462a808e0270326fb8602a3caa6ccb2c4c76863f0588267f6307, $par5551ae677d6b488ebd38625d0f5d9fce2a3caa6ccb2c4c76863f0588267f6307, $par8fce8a73ac264e4a8f3b56d8b991b8a52a3caa6ccb2c4c76863f0588267f6307);

        $v2a3caa6ccb2c4c76863f0588267f6307Ajax = \URL::to('/').'/api/b1c02e85ae0f4ff78aa966f2795138a1/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA FALDONES - LISTA FALDONES EXTERIOR DE TANQUE

        $par6185a7056560433494dba94e9ae59107a2cb87717074401a9e274e11af31b161 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107a2cb87717074401a9e274e11af31b161) {
            $par6185a7056560433494dba94e9ae59107a2cb87717074401a9e274e11af31b161 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860a2cb87717074401a9e274e11af31b161 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860a2cb87717074401a9e274e11af31b161) {
            $par0a0ce2af85ab462a808e0270326fb860a2cb87717074401a9e274e11af31b161 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcea2cb87717074401a9e274e11af31b161 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcea2cb87717074401a9e274e11af31b161) {
            $par5551ae677d6b488ebd38625d0f5d9fcea2cb87717074401a9e274e11af31b161 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcea2cb87717074401a9e274e11af31b161) {
            $par5551ae677d6b488ebd38625d0f5d9fcea2cb87717074401a9e274e11af31b161 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5a2cb87717074401a9e274e11af31b161 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5a2cb87717074401a9e274e11af31b161) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a2cb87717074401a9e274e11af31b161 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5a2cb87717074401a9e274e11af31b161) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a2cb87717074401a9e274e11af31b161 = '';
        }

        $va2cb87717074401a9e274e11af31b161 = \App\repf782f923fd0247bd9f4010b717e52999::mt3c80facc2a2b442385e09e9da5625a06($par6185a7056560433494dba94e9ae59107a2cb87717074401a9e274e11af31b161, $par0a0ce2af85ab462a808e0270326fb860a2cb87717074401a9e274e11af31b161, $par5551ae677d6b488ebd38625d0f5d9fcea2cb87717074401a9e274e11af31b161, $par8fce8a73ac264e4a8f3b56d8b991b8a5a2cb87717074401a9e274e11af31b161);

        $va2cb87717074401a9e274e11af31b161Ajax = \URL::to('/').'/api/3c80facc2a2b442385e09e9da5625a06/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA INTERIOR TANQUE - LISTA INTERIOR DE TANQUE

        $par6185a7056560433494dba94e9ae59107b576715b7e774e768a7dae1ef4e3a8fe = 0;

        if (null == $par6185a7056560433494dba94e9ae59107b576715b7e774e768a7dae1ef4e3a8fe) {
            $par6185a7056560433494dba94e9ae59107b576715b7e774e768a7dae1ef4e3a8fe = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860b576715b7e774e768a7dae1ef4e3a8fe = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860b576715b7e774e768a7dae1ef4e3a8fe) {
            $par0a0ce2af85ab462a808e0270326fb860b576715b7e774e768a7dae1ef4e3a8fe = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fceb576715b7e774e768a7dae1ef4e3a8fe = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fceb576715b7e774e768a7dae1ef4e3a8fe) {
            $par5551ae677d6b488ebd38625d0f5d9fceb576715b7e774e768a7dae1ef4e3a8fe = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fceb576715b7e774e768a7dae1ef4e3a8fe) {
            $par5551ae677d6b488ebd38625d0f5d9fceb576715b7e774e768a7dae1ef4e3a8fe = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5b576715b7e774e768a7dae1ef4e3a8fe = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5b576715b7e774e768a7dae1ef4e3a8fe) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5b576715b7e774e768a7dae1ef4e3a8fe = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5b576715b7e774e768a7dae1ef4e3a8fe) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5b576715b7e774e768a7dae1ef4e3a8fe = '';
        }

        $vb576715b7e774e768a7dae1ef4e3a8fe = \App\repf782f923fd0247bd9f4010b717e52999::mte9ff0b7206354b19b0546c7eb486f4cb($par6185a7056560433494dba94e9ae59107b576715b7e774e768a7dae1ef4e3a8fe, $par0a0ce2af85ab462a808e0270326fb860b576715b7e774e768a7dae1ef4e3a8fe, $par5551ae677d6b488ebd38625d0f5d9fceb576715b7e774e768a7dae1ef4e3a8fe, $par8fce8a73ac264e4a8f3b56d8b991b8a5b576715b7e774e768a7dae1ef4e3a8fe);

        $vb576715b7e774e768a7dae1ef4e3a8feAjax = \URL::to('/').'/api/e9ff0b7206354b19b0546c7eb486f4cb/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA LLANTAS - LISTA LLANTAS DE CARRO

        $par6185a7056560433494dba94e9ae591074a3015782e0e4c1a8684eab8e6073b1d = 0;

        if (null == $par6185a7056560433494dba94e9ae591074a3015782e0e4c1a8684eab8e6073b1d) {
            $par6185a7056560433494dba94e9ae591074a3015782e0e4c1a8684eab8e6073b1d = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8604a3015782e0e4c1a8684eab8e6073b1d = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8604a3015782e0e4c1a8684eab8e6073b1d) {
            $par0a0ce2af85ab462a808e0270326fb8604a3015782e0e4c1a8684eab8e6073b1d = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce4a3015782e0e4c1a8684eab8e6073b1d = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce4a3015782e0e4c1a8684eab8e6073b1d) {
            $par5551ae677d6b488ebd38625d0f5d9fce4a3015782e0e4c1a8684eab8e6073b1d = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce4a3015782e0e4c1a8684eab8e6073b1d) {
            $par5551ae677d6b488ebd38625d0f5d9fce4a3015782e0e4c1a8684eab8e6073b1d = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a54a3015782e0e4c1a8684eab8e6073b1d = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a54a3015782e0e4c1a8684eab8e6073b1d) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a54a3015782e0e4c1a8684eab8e6073b1d = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a54a3015782e0e4c1a8684eab8e6073b1d) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a54a3015782e0e4c1a8684eab8e6073b1d = '';
        }

        $v4a3015782e0e4c1a8684eab8e6073b1d = \App\repf782f923fd0247bd9f4010b717e52999::mt4340391af3384d74947d9abc4010b220($par6185a7056560433494dba94e9ae591074a3015782e0e4c1a8684eab8e6073b1d, $par0a0ce2af85ab462a808e0270326fb8604a3015782e0e4c1a8684eab8e6073b1d, $par5551ae677d6b488ebd38625d0f5d9fce4a3015782e0e4c1a8684eab8e6073b1d, $par8fce8a73ac264e4a8f3b56d8b991b8a54a3015782e0e4c1a8684eab8e6073b1d);

        $v4a3015782e0e4c1a8684eab8e6073b1dAjax = \URL::to('/').'/api/4340391af3384d74947d9abc4010b220/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA MANGUERA DESAGÜE - LISTA MANGUERA DESAGÜE  EXTERIOR DE TANQUE

        $par6185a7056560433494dba94e9ae59107a55e27b009bd4458ad333ea4a831e07c = 0;

        if (null == $par6185a7056560433494dba94e9ae59107a55e27b009bd4458ad333ea4a831e07c) {
            $par6185a7056560433494dba94e9ae59107a55e27b009bd4458ad333ea4a831e07c = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860a55e27b009bd4458ad333ea4a831e07c = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860a55e27b009bd4458ad333ea4a831e07c) {
            $par0a0ce2af85ab462a808e0270326fb860a55e27b009bd4458ad333ea4a831e07c = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcea55e27b009bd4458ad333ea4a831e07c = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcea55e27b009bd4458ad333ea4a831e07c) {
            $par5551ae677d6b488ebd38625d0f5d9fcea55e27b009bd4458ad333ea4a831e07c = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcea55e27b009bd4458ad333ea4a831e07c) {
            $par5551ae677d6b488ebd38625d0f5d9fcea55e27b009bd4458ad333ea4a831e07c = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5a55e27b009bd4458ad333ea4a831e07c = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5a55e27b009bd4458ad333ea4a831e07c) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a55e27b009bd4458ad333ea4a831e07c = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5a55e27b009bd4458ad333ea4a831e07c) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a55e27b009bd4458ad333ea4a831e07c = '';
        }

        $va55e27b009bd4458ad333ea4a831e07c = \App\repf782f923fd0247bd9f4010b717e52999::mt715e85d375384acb8a53d003a826c4a2($par6185a7056560433494dba94e9ae59107a55e27b009bd4458ad333ea4a831e07c, $par0a0ce2af85ab462a808e0270326fb860a55e27b009bd4458ad333ea4a831e07c, $par5551ae677d6b488ebd38625d0f5d9fcea55e27b009bd4458ad333ea4a831e07c, $par8fce8a73ac264e4a8f3b56d8b991b8a5a55e27b009bd4458ad333ea4a831e07c);

        $va55e27b009bd4458ad333ea4a831e07cAjax = \URL::to('/').'/api/715e85d375384acb8a53d003a826c4a2/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA RESPIRADERO - LISTA RESPIRADERO INTERIOR DE TANQUE

        $par6185a7056560433494dba94e9ae59107312ec60a44e14197a1e08a8dad45fb2c = 0;

        if (null == $par6185a7056560433494dba94e9ae59107312ec60a44e14197a1e08a8dad45fb2c) {
            $par6185a7056560433494dba94e9ae59107312ec60a44e14197a1e08a8dad45fb2c = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860312ec60a44e14197a1e08a8dad45fb2c = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860312ec60a44e14197a1e08a8dad45fb2c) {
            $par0a0ce2af85ab462a808e0270326fb860312ec60a44e14197a1e08a8dad45fb2c = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce312ec60a44e14197a1e08a8dad45fb2c = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce312ec60a44e14197a1e08a8dad45fb2c) {
            $par5551ae677d6b488ebd38625d0f5d9fce312ec60a44e14197a1e08a8dad45fb2c = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce312ec60a44e14197a1e08a8dad45fb2c) {
            $par5551ae677d6b488ebd38625d0f5d9fce312ec60a44e14197a1e08a8dad45fb2c = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5312ec60a44e14197a1e08a8dad45fb2c = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5312ec60a44e14197a1e08a8dad45fb2c) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5312ec60a44e14197a1e08a8dad45fb2c = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5312ec60a44e14197a1e08a8dad45fb2c) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5312ec60a44e14197a1e08a8dad45fb2c = '';
        }

        $v312ec60a44e14197a1e08a8dad45fb2c = \App\repf782f923fd0247bd9f4010b717e52999::mte5dc3b3c8ca344ccb3ffcdca95f15aa3($par6185a7056560433494dba94e9ae59107312ec60a44e14197a1e08a8dad45fb2c, $par0a0ce2af85ab462a808e0270326fb860312ec60a44e14197a1e08a8dad45fb2c, $par5551ae677d6b488ebd38625d0f5d9fce312ec60a44e14197a1e08a8dad45fb2c, $par8fce8a73ac264e4a8f3b56d8b991b8a5312ec60a44e14197a1e08a8dad45fb2c);

        $v312ec60a44e14197a1e08a8dad45fb2cAjax = \URL::to('/').'/api/e5dc3b3c8ca344ccb3ffcdca95f15aa3/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA RINES CARRO - LISTA RINES DE CARRO

        $par6185a7056560433494dba94e9ae591075661d133b8bc4fd6892266a866e9d1df = 0;

        if (null == $par6185a7056560433494dba94e9ae591075661d133b8bc4fd6892266a866e9d1df) {
            $par6185a7056560433494dba94e9ae591075661d133b8bc4fd6892266a866e9d1df = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8605661d133b8bc4fd6892266a866e9d1df = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8605661d133b8bc4fd6892266a866e9d1df) {
            $par0a0ce2af85ab462a808e0270326fb8605661d133b8bc4fd6892266a866e9d1df = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce5661d133b8bc4fd6892266a866e9d1df = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce5661d133b8bc4fd6892266a866e9d1df) {
            $par5551ae677d6b488ebd38625d0f5d9fce5661d133b8bc4fd6892266a866e9d1df = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce5661d133b8bc4fd6892266a866e9d1df) {
            $par5551ae677d6b488ebd38625d0f5d9fce5661d133b8bc4fd6892266a866e9d1df = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a55661d133b8bc4fd6892266a866e9d1df = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a55661d133b8bc4fd6892266a866e9d1df) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a55661d133b8bc4fd6892266a866e9d1df = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a55661d133b8bc4fd6892266a866e9d1df) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a55661d133b8bc4fd6892266a866e9d1df = '';
        }

        $v5661d133b8bc4fd6892266a866e9d1df = \App\repf782f923fd0247bd9f4010b717e52999::mtb0fb4f59811049ed88c25355af9a85a1($par6185a7056560433494dba94e9ae591075661d133b8bc4fd6892266a866e9d1df, $par0a0ce2af85ab462a808e0270326fb8605661d133b8bc4fd6892266a866e9d1df, $par5551ae677d6b488ebd38625d0f5d9fce5661d133b8bc4fd6892266a866e9d1df, $par8fce8a73ac264e4a8f3b56d8b991b8a55661d133b8bc4fd6892266a866e9d1df);

        $v5661d133b8bc4fd6892266a866e9d1dfAjax = \URL::to('/').'/api/b0fb4f59811049ed88c25355af9a85a1/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA RINES TANQUE - LISTA RINES EXTERIOR DE TANQUE

        $par6185a7056560433494dba94e9ae59107071642c5a0364e47b50753503692735b = 0;

        if (null == $par6185a7056560433494dba94e9ae59107071642c5a0364e47b50753503692735b) {
            $par6185a7056560433494dba94e9ae59107071642c5a0364e47b50753503692735b = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860071642c5a0364e47b50753503692735b = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860071642c5a0364e47b50753503692735b) {
            $par0a0ce2af85ab462a808e0270326fb860071642c5a0364e47b50753503692735b = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce071642c5a0364e47b50753503692735b = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce071642c5a0364e47b50753503692735b) {
            $par5551ae677d6b488ebd38625d0f5d9fce071642c5a0364e47b50753503692735b = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce071642c5a0364e47b50753503692735b) {
            $par5551ae677d6b488ebd38625d0f5d9fce071642c5a0364e47b50753503692735b = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5071642c5a0364e47b50753503692735b = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5071642c5a0364e47b50753503692735b) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5071642c5a0364e47b50753503692735b = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5071642c5a0364e47b50753503692735b) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5071642c5a0364e47b50753503692735b = '';
        }

        $v071642c5a0364e47b50753503692735b = \App\repf782f923fd0247bd9f4010b717e52999::mt00dcdb93a91d4165b99254a42fef7cd0($par6185a7056560433494dba94e9ae59107071642c5a0364e47b50753503692735b, $par0a0ce2af85ab462a808e0270326fb860071642c5a0364e47b50753503692735b, $par5551ae677d6b488ebd38625d0f5d9fce071642c5a0364e47b50753503692735b, $par8fce8a73ac264e4a8f3b56d8b991b8a5071642c5a0364e47b50753503692735b);

        $v071642c5a0364e47b50753503692735bAjax = \URL::to('/').'/api/00dcdb93a91d4165b99254a42fef7cd0/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA SANITIZACION - LISTA SANITIZACIÓN INTERIOR DE TANQUE

        $par6185a7056560433494dba94e9ae591076d5a684f0d8b412091d7abb34511e67d = 0;

        if (null == $par6185a7056560433494dba94e9ae591076d5a684f0d8b412091d7abb34511e67d) {
            $par6185a7056560433494dba94e9ae591076d5a684f0d8b412091d7abb34511e67d = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8606d5a684f0d8b412091d7abb34511e67d = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8606d5a684f0d8b412091d7abb34511e67d) {
            $par0a0ce2af85ab462a808e0270326fb8606d5a684f0d8b412091d7abb34511e67d = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce6d5a684f0d8b412091d7abb34511e67d = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce6d5a684f0d8b412091d7abb34511e67d) {
            $par5551ae677d6b488ebd38625d0f5d9fce6d5a684f0d8b412091d7abb34511e67d = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce6d5a684f0d8b412091d7abb34511e67d) {
            $par5551ae677d6b488ebd38625d0f5d9fce6d5a684f0d8b412091d7abb34511e67d = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a56d5a684f0d8b412091d7abb34511e67d = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a56d5a684f0d8b412091d7abb34511e67d) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a56d5a684f0d8b412091d7abb34511e67d = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a56d5a684f0d8b412091d7abb34511e67d) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a56d5a684f0d8b412091d7abb34511e67d = '';
        }

        $v6d5a684f0d8b412091d7abb34511e67d = \App\repf782f923fd0247bd9f4010b717e52999::mt365768f7185545de92339e17a03af353($par6185a7056560433494dba94e9ae591076d5a684f0d8b412091d7abb34511e67d, $par0a0ce2af85ab462a808e0270326fb8606d5a684f0d8b412091d7abb34511e67d, $par5551ae677d6b488ebd38625d0f5d9fce6d5a684f0d8b412091d7abb34511e67d, $par8fce8a73ac264e4a8f3b56d8b991b8a56d5a684f0d8b412091d7abb34511e67d);

        $v6d5a684f0d8b412091d7abb34511e67dAjax = \URL::to('/').'/api/365768f7185545de92339e17a03af353/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA SUPERFICIE EXTERIOR CARRO - LISTA SUPERFICIE EXTERIOR DE CARRO

        $par6185a7056560433494dba94e9ae59107a71d526ed8bb46e7a024bb238995d372 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107a71d526ed8bb46e7a024bb238995d372) {
            $par6185a7056560433494dba94e9ae59107a71d526ed8bb46e7a024bb238995d372 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860a71d526ed8bb46e7a024bb238995d372 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860a71d526ed8bb46e7a024bb238995d372) {
            $par0a0ce2af85ab462a808e0270326fb860a71d526ed8bb46e7a024bb238995d372 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcea71d526ed8bb46e7a024bb238995d372 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcea71d526ed8bb46e7a024bb238995d372) {
            $par5551ae677d6b488ebd38625d0f5d9fcea71d526ed8bb46e7a024bb238995d372 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcea71d526ed8bb46e7a024bb238995d372) {
            $par5551ae677d6b488ebd38625d0f5d9fcea71d526ed8bb46e7a024bb238995d372 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5a71d526ed8bb46e7a024bb238995d372 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5a71d526ed8bb46e7a024bb238995d372) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a71d526ed8bb46e7a024bb238995d372 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5a71d526ed8bb46e7a024bb238995d372) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a71d526ed8bb46e7a024bb238995d372 = '';
        }

        $va71d526ed8bb46e7a024bb238995d372 = \App\repf782f923fd0247bd9f4010b717e52999::mt3dc48d8506c94f9fb696d344fdd1151e($par6185a7056560433494dba94e9ae59107a71d526ed8bb46e7a024bb238995d372, $par0a0ce2af85ab462a808e0270326fb860a71d526ed8bb46e7a024bb238995d372, $par5551ae677d6b488ebd38625d0f5d9fcea71d526ed8bb46e7a024bb238995d372, $par8fce8a73ac264e4a8f3b56d8b991b8a5a71d526ed8bb46e7a024bb238995d372);

        $va71d526ed8bb46e7a024bb238995d372Ajax = \URL::to('/').'/api/3dc48d8506c94f9fb696d344fdd1151e/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA SUPERFICIE EXTERIOR TANQUE - LISTA SUPERFICIE EXTERIOR DE TANQUE

        $par6185a7056560433494dba94e9ae59107fdd7110bd0f740709debe7c750ede4db = 0;

        if (null == $par6185a7056560433494dba94e9ae59107fdd7110bd0f740709debe7c750ede4db) {
            $par6185a7056560433494dba94e9ae59107fdd7110bd0f740709debe7c750ede4db = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860fdd7110bd0f740709debe7c750ede4db = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860fdd7110bd0f740709debe7c750ede4db) {
            $par0a0ce2af85ab462a808e0270326fb860fdd7110bd0f740709debe7c750ede4db = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcefdd7110bd0f740709debe7c750ede4db = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcefdd7110bd0f740709debe7c750ede4db) {
            $par5551ae677d6b488ebd38625d0f5d9fcefdd7110bd0f740709debe7c750ede4db = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcefdd7110bd0f740709debe7c750ede4db) {
            $par5551ae677d6b488ebd38625d0f5d9fcefdd7110bd0f740709debe7c750ede4db = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5fdd7110bd0f740709debe7c750ede4db = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5fdd7110bd0f740709debe7c750ede4db) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5fdd7110bd0f740709debe7c750ede4db = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5fdd7110bd0f740709debe7c750ede4db) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5fdd7110bd0f740709debe7c750ede4db = '';
        }

        $vfdd7110bd0f740709debe7c750ede4db = \App\repf782f923fd0247bd9f4010b717e52999::mtb1cd541dfb554079b3b179005e6d3426($par6185a7056560433494dba94e9ae59107fdd7110bd0f740709debe7c750ede4db, $par0a0ce2af85ab462a808e0270326fb860fdd7110bd0f740709debe7c750ede4db, $par5551ae677d6b488ebd38625d0f5d9fcefdd7110bd0f740709debe7c750ede4db, $par8fce8a73ac264e4a8f3b56d8b991b8a5fdd7110bd0f740709debe7c750ede4db);

        $vfdd7110bd0f740709debe7c750ede4dbAjax = \URL::to('/').'/api/b1cd541dfb554079b3b179005e6d3426/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA TANQUE EXTERIOR - LISTA TANQUE EXTERIOR

        $par6185a7056560433494dba94e9ae59107c51a3709db6e4d3280e9749b7656c799 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107c51a3709db6e4d3280e9749b7656c799) {
            $par6185a7056560433494dba94e9ae59107c51a3709db6e4d3280e9749b7656c799 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860c51a3709db6e4d3280e9749b7656c799 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860c51a3709db6e4d3280e9749b7656c799) {
            $par0a0ce2af85ab462a808e0270326fb860c51a3709db6e4d3280e9749b7656c799 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcec51a3709db6e4d3280e9749b7656c799 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcec51a3709db6e4d3280e9749b7656c799) {
            $par5551ae677d6b488ebd38625d0f5d9fcec51a3709db6e4d3280e9749b7656c799 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcec51a3709db6e4d3280e9749b7656c799) {
            $par5551ae677d6b488ebd38625d0f5d9fcec51a3709db6e4d3280e9749b7656c799 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5c51a3709db6e4d3280e9749b7656c799 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5c51a3709db6e4d3280e9749b7656c799) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5c51a3709db6e4d3280e9749b7656c799 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5c51a3709db6e4d3280e9749b7656c799) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5c51a3709db6e4d3280e9749b7656c799 = '';
        }

        $vc51a3709db6e4d3280e9749b7656c799 = \App\repf782f923fd0247bd9f4010b717e52999::mt056970e937444b42a835206f8cf1d4e7($par6185a7056560433494dba94e9ae59107c51a3709db6e4d3280e9749b7656c799, $par0a0ce2af85ab462a808e0270326fb860c51a3709db6e4d3280e9749b7656c799, $par5551ae677d6b488ebd38625d0f5d9fcec51a3709db6e4d3280e9749b7656c799, $par8fce8a73ac264e4a8f3b56d8b991b8a5c51a3709db6e4d3280e9749b7656c799);

        $vc51a3709db6e4d3280e9749b7656c799Ajax = \URL::to('/').'/api/056970e937444b42a835206f8cf1d4e7/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA TAPA - LISTA TAPA

        $par6185a7056560433494dba94e9ae5910711a99ab1305f438b80b9d57bb36a5554 = 0;

        if (null == $par6185a7056560433494dba94e9ae5910711a99ab1305f438b80b9d57bb36a5554) {
            $par6185a7056560433494dba94e9ae5910711a99ab1305f438b80b9d57bb36a5554 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86011a99ab1305f438b80b9d57bb36a5554 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86011a99ab1305f438b80b9d57bb36a5554) {
            $par0a0ce2af85ab462a808e0270326fb86011a99ab1305f438b80b9d57bb36a5554 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce11a99ab1305f438b80b9d57bb36a5554 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce11a99ab1305f438b80b9d57bb36a5554) {
            $par5551ae677d6b488ebd38625d0f5d9fce11a99ab1305f438b80b9d57bb36a5554 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce11a99ab1305f438b80b9d57bb36a5554) {
            $par5551ae677d6b488ebd38625d0f5d9fce11a99ab1305f438b80b9d57bb36a5554 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a511a99ab1305f438b80b9d57bb36a5554 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a511a99ab1305f438b80b9d57bb36a5554) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a511a99ab1305f438b80b9d57bb36a5554 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a511a99ab1305f438b80b9d57bb36a5554) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a511a99ab1305f438b80b9d57bb36a5554 = '';
        }

        $v11a99ab1305f438b80b9d57bb36a5554 = \App\repf782f923fd0247bd9f4010b717e52999::mt153015fb7978480389370e4150287f2f($par6185a7056560433494dba94e9ae5910711a99ab1305f438b80b9d57bb36a5554, $par0a0ce2af85ab462a808e0270326fb86011a99ab1305f438b80b9d57bb36a5554, $par5551ae677d6b488ebd38625d0f5d9fce11a99ab1305f438b80b9d57bb36a5554, $par8fce8a73ac264e4a8f3b56d8b991b8a511a99ab1305f438b80b9d57bb36a5554);

        $v11a99ab1305f438b80b9d57bb36a5554Ajax = \URL::to('/').'/api/153015fb7978480389370e4150287f2f/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA TAPON CIEGO - LISTA TAPON CIEGO

        $par6185a7056560433494dba94e9ae5910773c9be7a7413460faa9056f57f391f89 = 0;

        if (null == $par6185a7056560433494dba94e9ae5910773c9be7a7413460faa9056f57f391f89) {
            $par6185a7056560433494dba94e9ae5910773c9be7a7413460faa9056f57f391f89 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86073c9be7a7413460faa9056f57f391f89 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86073c9be7a7413460faa9056f57f391f89) {
            $par0a0ce2af85ab462a808e0270326fb86073c9be7a7413460faa9056f57f391f89 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce73c9be7a7413460faa9056f57f391f89 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce73c9be7a7413460faa9056f57f391f89) {
            $par5551ae677d6b488ebd38625d0f5d9fce73c9be7a7413460faa9056f57f391f89 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce73c9be7a7413460faa9056f57f391f89) {
            $par5551ae677d6b488ebd38625d0f5d9fce73c9be7a7413460faa9056f57f391f89 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a573c9be7a7413460faa9056f57f391f89 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a573c9be7a7413460faa9056f57f391f89) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a573c9be7a7413460faa9056f57f391f89 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a573c9be7a7413460faa9056f57f391f89) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a573c9be7a7413460faa9056f57f391f89 = '';
        }

        $v73c9be7a7413460faa9056f57f391f89 = \App\repf782f923fd0247bd9f4010b717e52999::mt0d5bd295ef444c62847f24d99cc21c7d($par6185a7056560433494dba94e9ae5910773c9be7a7413460faa9056f57f391f89, $par0a0ce2af85ab462a808e0270326fb86073c9be7a7413460faa9056f57f391f89, $par5551ae677d6b488ebd38625d0f5d9fce73c9be7a7413460faa9056f57f391f89, $par8fce8a73ac264e4a8f3b56d8b991b8a573c9be7a7413460faa9056f57f391f89);

        $v73c9be7a7413460faa9056f57f391f89Ajax = \URL::to('/').'/api/0d5bd295ef444c62847f24d99cc21c7d/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista valvula - Lista valvula

        $par6185a7056560433494dba94e9ae5910703087d2549eb41729e93c87b5870dda9 = 0;

        if (null == $par6185a7056560433494dba94e9ae5910703087d2549eb41729e93c87b5870dda9) {
            $par6185a7056560433494dba94e9ae5910703087d2549eb41729e93c87b5870dda9 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb86003087d2549eb41729e93c87b5870dda9 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb86003087d2549eb41729e93c87b5870dda9) {
            $par0a0ce2af85ab462a808e0270326fb86003087d2549eb41729e93c87b5870dda9 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce03087d2549eb41729e93c87b5870dda9 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce03087d2549eb41729e93c87b5870dda9) {
            $par5551ae677d6b488ebd38625d0f5d9fce03087d2549eb41729e93c87b5870dda9 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce03087d2549eb41729e93c87b5870dda9) {
            $par5551ae677d6b488ebd38625d0f5d9fce03087d2549eb41729e93c87b5870dda9 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a503087d2549eb41729e93c87b5870dda9 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a503087d2549eb41729e93c87b5870dda9) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a503087d2549eb41729e93c87b5870dda9 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a503087d2549eb41729e93c87b5870dda9) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a503087d2549eb41729e93c87b5870dda9 = '';
        }

        $v03087d2549eb41729e93c87b5870dda9 = \App\repf782f923fd0247bd9f4010b717e52999::mte5eedd92f3004863b8d1b148322cdaa6($par6185a7056560433494dba94e9ae5910703087d2549eb41729e93c87b5870dda9, $par0a0ce2af85ab462a808e0270326fb86003087d2549eb41729e93c87b5870dda9, $par5551ae677d6b488ebd38625d0f5d9fce03087d2549eb41729e93c87b5870dda9, $par8fce8a73ac264e4a8f3b56d8b991b8a503087d2549eb41729e93c87b5870dda9);

        $v03087d2549eb41729e93c87b5870dda9Ajax = \URL::to('/').'/api/e5eedd92f3004863b8d1b148322cdaa6/{page}/{pagesize}/{orderColumn}/{orderType}';

        // LISTA VIDRIOS - LISTA VIDRIOS DE CARRO

        $par6185a7056560433494dba94e9ae59107691842cc3d744a1284f5557757795508 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107691842cc3d744a1284f5557757795508) {
            $par6185a7056560433494dba94e9ae59107691842cc3d744a1284f5557757795508 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860691842cc3d744a1284f5557757795508 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860691842cc3d744a1284f5557757795508) {
            $par0a0ce2af85ab462a808e0270326fb860691842cc3d744a1284f5557757795508 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce691842cc3d744a1284f5557757795508 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce691842cc3d744a1284f5557757795508) {
            $par5551ae677d6b488ebd38625d0f5d9fce691842cc3d744a1284f5557757795508 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce691842cc3d744a1284f5557757795508) {
            $par5551ae677d6b488ebd38625d0f5d9fce691842cc3d744a1284f5557757795508 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5691842cc3d744a1284f5557757795508 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5691842cc3d744a1284f5557757795508) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5691842cc3d744a1284f5557757795508 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5691842cc3d744a1284f5557757795508) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5691842cc3d744a1284f5557757795508 = '';
        }

        $v691842cc3d744a1284f5557757795508 = \App\repf782f923fd0247bd9f4010b717e52999::mt296963b06560434787ded17b40323e00($par6185a7056560433494dba94e9ae59107691842cc3d744a1284f5557757795508, $par0a0ce2af85ab462a808e0270326fb860691842cc3d744a1284f5557757795508, $par5551ae677d6b488ebd38625d0f5d9fce691842cc3d744a1284f5557757795508, $par8fce8a73ac264e4a8f3b56d8b991b8a5691842cc3d744a1284f5557757795508);

        $v691842cc3d744a1284f5557757795508Ajax = \URL::to('/').'/api/296963b06560434787ded17b40323e00/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Recuperar Traspasos - Recuperar Traspasos

        $par3bd47269a552433eb638846d4e809382 = $request->input('u');

        if (null == $par3bd47269a552433eb638846d4e809382) {
            $par3bd47269a552433eb638846d4e809382 = '0';
        }

        $par6185a7056560433494dba94e9ae591071b2f200194344844b4506b2740034d61 = 0;

        if (null == $par6185a7056560433494dba94e9ae591071b2f200194344844b4506b2740034d61) {
            $par6185a7056560433494dba94e9ae591071b2f200194344844b4506b2740034d61 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8601b2f200194344844b4506b2740034d61 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8601b2f200194344844b4506b2740034d61) {
            $par0a0ce2af85ab462a808e0270326fb8601b2f200194344844b4506b2740034d61 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce1b2f200194344844b4506b2740034d61 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce1b2f200194344844b4506b2740034d61) {
            $par5551ae677d6b488ebd38625d0f5d9fce1b2f200194344844b4506b2740034d61 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce1b2f200194344844b4506b2740034d61) {
            $par5551ae677d6b488ebd38625d0f5d9fce1b2f200194344844b4506b2740034d61 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a51b2f200194344844b4506b2740034d61 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a51b2f200194344844b4506b2740034d61) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a51b2f200194344844b4506b2740034d61 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a51b2f200194344844b4506b2740034d61) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a51b2f200194344844b4506b2740034d61 = '';
        }

        $v1b2f200194344844b4506b2740034d61 = \App\repf782f923fd0247bd9f4010b717e52999::mta56dddb68c1746bcafef77526284a4d5($par3bd47269a552433eb638846d4e809382, $par6185a7056560433494dba94e9ae591071b2f200194344844b4506b2740034d61, $par0a0ce2af85ab462a808e0270326fb8601b2f200194344844b4506b2740034d61, $par5551ae677d6b488ebd38625d0f5d9fce1b2f200194344844b4506b2740034d61, $par8fce8a73ac264e4a8f3b56d8b991b8a51b2f200194344844b4506b2740034d61);

        $v1b2f200194344844b4506b2740034d61Ajax = \URL::to('/').'/api/a56dddb68c1746bcafef77526284a4d5/'.(null == $par3bd47269a552433eb638846d4e809382 ? '-' : ('' == $par3bd47269a552433eb638846d4e809382 ? '-' : $par3bd47269a552433eb638846d4e809382)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // sp_lista_choper_pipa - sp_lista_choper_pipa

        $par9e24cf3251a6459ab3554c68f0a44bdc1 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $par9e24cf3251a6459ab3554c68f0a44bdc1) {
            $par9e24cf3251a6459ab3554c68f0a44bdc1 = '0';
        }

        $par12bea15ee4fb4cb690c43eb2ef28eac01 = $request->input('traspaso');

        if (null == $par12bea15ee4fb4cb690c43eb2ef28eac01) {
            $par12bea15ee4fb4cb690c43eb2ef28eac01 = '0';
        }

        $par6185a7056560433494dba94e9ae59107b001e81e9fe44b169ec70f61b8cb19e3 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107b001e81e9fe44b169ec70f61b8cb19e3) {
            $par6185a7056560433494dba94e9ae59107b001e81e9fe44b169ec70f61b8cb19e3 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860b001e81e9fe44b169ec70f61b8cb19e3 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860b001e81e9fe44b169ec70f61b8cb19e3) {
            $par0a0ce2af85ab462a808e0270326fb860b001e81e9fe44b169ec70f61b8cb19e3 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fceb001e81e9fe44b169ec70f61b8cb19e3 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fceb001e81e9fe44b169ec70f61b8cb19e3) {
            $par5551ae677d6b488ebd38625d0f5d9fceb001e81e9fe44b169ec70f61b8cb19e3 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fceb001e81e9fe44b169ec70f61b8cb19e3) {
            $par5551ae677d6b488ebd38625d0f5d9fceb001e81e9fe44b169ec70f61b8cb19e3 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5b001e81e9fe44b169ec70f61b8cb19e3 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5b001e81e9fe44b169ec70f61b8cb19e3) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5b001e81e9fe44b169ec70f61b8cb19e3 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5b001e81e9fe44b169ec70f61b8cb19e3) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5b001e81e9fe44b169ec70f61b8cb19e3 = '';
        }

        $vb001e81e9fe44b169ec70f61b8cb19e3 = \App\repf782f923fd0247bd9f4010b717e52999::mtea1aef392f9c47bcb8d6db2d604cf516($par9e24cf3251a6459ab3554c68f0a44bdc1, $par12bea15ee4fb4cb690c43eb2ef28eac01, $par6185a7056560433494dba94e9ae59107b001e81e9fe44b169ec70f61b8cb19e3, $par0a0ce2af85ab462a808e0270326fb860b001e81e9fe44b169ec70f61b8cb19e3, $par5551ae677d6b488ebd38625d0f5d9fceb001e81e9fe44b169ec70f61b8cb19e3, $par8fce8a73ac264e4a8f3b56d8b991b8a5b001e81e9fe44b169ec70f61b8cb19e3);

        $vb001e81e9fe44b169ec70f61b8cb19e3Ajax = \URL::to('/').'/api/ea1aef392f9c47bcb8d6db2d604cf516/'.(null == $par9e24cf3251a6459ab3554c68f0a44bdc1 ? '-' : ('' == $par9e24cf3251a6459ab3554c68f0a44bdc1 ? '-' : $par9e24cf3251a6459ab3554c68f0a44bdc1)).'/'.(null == $par12bea15ee4fb4cb690c43eb2ef28eac01 ? '-' : ('' == $par12bea15ee4fb4cb690c43eb2ef28eac01 ? '-' : $par12bea15ee4fb4cb690c43eb2ef28eac01)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Titulo Pagina - Titulo Pagina

        $par915f2ce45e324305adf910faaabe6120 = $request->input('t');

        if (null == $par915f2ce45e324305adf910faaabe6120) {
            $par915f2ce45e324305adf910faaabe6120 = '0';
        }

        $par6185a7056560433494dba94e9ae591071000e4c784c94660b49032cef134471a = 0;

        if (null == $par6185a7056560433494dba94e9ae591071000e4c784c94660b49032cef134471a) {
            $par6185a7056560433494dba94e9ae591071000e4c784c94660b49032cef134471a = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8601000e4c784c94660b49032cef134471a = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8601000e4c784c94660b49032cef134471a) {
            $par0a0ce2af85ab462a808e0270326fb8601000e4c784c94660b49032cef134471a = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce1000e4c784c94660b49032cef134471a = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce1000e4c784c94660b49032cef134471a) {
            $par5551ae677d6b488ebd38625d0f5d9fce1000e4c784c94660b49032cef134471a = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce1000e4c784c94660b49032cef134471a) {
            $par5551ae677d6b488ebd38625d0f5d9fce1000e4c784c94660b49032cef134471a = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a51000e4c784c94660b49032cef134471a = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a51000e4c784c94660b49032cef134471a) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a51000e4c784c94660b49032cef134471a = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a51000e4c784c94660b49032cef134471a) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a51000e4c784c94660b49032cef134471a = '';
        }

        $v1000e4c784c94660b49032cef134471a = \App\repf782f923fd0247bd9f4010b717e52999::mt1f2e4a280a3c490cb91d2b2e03e8c897($par915f2ce45e324305adf910faaabe6120, $par6185a7056560433494dba94e9ae591071000e4c784c94660b49032cef134471a, $par0a0ce2af85ab462a808e0270326fb8601000e4c784c94660b49032cef134471a, $par5551ae677d6b488ebd38625d0f5d9fce1000e4c784c94660b49032cef134471a, $par8fce8a73ac264e4a8f3b56d8b991b8a51000e4c784c94660b49032cef134471a);

        $v1000e4c784c94660b49032cef134471aAjax = \URL::to('/').'/api/1f2e4a280a3c490cb91d2b2e03e8c897/'.(null == $par915f2ce45e324305adf910faaabe6120 ? '-' : ('' == $par915f2ce45e324305adf910faaabe6120 ? '-' : $par915f2ce45e324305adf910faaabe6120)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // sp_menu - sp_menu

        $parb04767105e0b4a2080f954b3221a1bdc1 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $parb04767105e0b4a2080f954b3221a1bdc1) {
            $parb04767105e0b4a2080f954b3221a1bdc1 = '0';
        }

        $vc6b6e29e400848f28bd9fd731f1866d2 = \App\repf782f923fd0247bd9f4010b717e52999::mt5010349a1a934d348fa7face0f3aacfe($parb04767105e0b4a2080f954b3221a1bdc1);

        $vc6b6e29e400848f28bd9fd731f1866d2Ajax = \URL::to('/').'/api/5010349a1a934d348fa7face0f3aacfe/'.(null == $parb04767105e0b4a2080f954b3221a1bdc1 ? '-' : ('' == $parb04767105e0b4a2080f954b3221a1bdc1 ? '-' : $parb04767105e0b4a2080f954b3221a1bdc1)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // sp_pefil_sistema - sp_pefil_sistema

        $parb553375065dd4edc8a521042df398f20 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $parb553375065dd4edc8a521042df398f20) {
            $parb553375065dd4edc8a521042df398f20 = '0';
        }

        $par6185a7056560433494dba94e9ae59107e926bc3fad6e4b979b6119419cdb0b3a = 0;

        if (null == $par6185a7056560433494dba94e9ae59107e926bc3fad6e4b979b6119419cdb0b3a) {
            $par6185a7056560433494dba94e9ae59107e926bc3fad6e4b979b6119419cdb0b3a = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860e926bc3fad6e4b979b6119419cdb0b3a = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860e926bc3fad6e4b979b6119419cdb0b3a) {
            $par0a0ce2af85ab462a808e0270326fb860e926bc3fad6e4b979b6119419cdb0b3a = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcee926bc3fad6e4b979b6119419cdb0b3a = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcee926bc3fad6e4b979b6119419cdb0b3a) {
            $par5551ae677d6b488ebd38625d0f5d9fcee926bc3fad6e4b979b6119419cdb0b3a = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcee926bc3fad6e4b979b6119419cdb0b3a) {
            $par5551ae677d6b488ebd38625d0f5d9fcee926bc3fad6e4b979b6119419cdb0b3a = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5e926bc3fad6e4b979b6119419cdb0b3a = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5e926bc3fad6e4b979b6119419cdb0b3a) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5e926bc3fad6e4b979b6119419cdb0b3a = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5e926bc3fad6e4b979b6119419cdb0b3a) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5e926bc3fad6e4b979b6119419cdb0b3a = '';
        }

        $ve926bc3fad6e4b979b6119419cdb0b3a = \App\repf782f923fd0247bd9f4010b717e52999::mt26750564b2564f5e89ff361999464a6b($parb553375065dd4edc8a521042df398f20, $par6185a7056560433494dba94e9ae59107e926bc3fad6e4b979b6119419cdb0b3a, $par0a0ce2af85ab462a808e0270326fb860e926bc3fad6e4b979b6119419cdb0b3a, $par5551ae677d6b488ebd38625d0f5d9fcee926bc3fad6e4b979b6119419cdb0b3a, $par8fce8a73ac264e4a8f3b56d8b991b8a5e926bc3fad6e4b979b6119419cdb0b3a);

        $ve926bc3fad6e4b979b6119419cdb0b3aAjax = \URL::to('/').'/api/26750564b2564f5e89ff361999464a6b/'.(null == $parb553375065dd4edc8a521042df398f20 ? '-' : ('' == $parb553375065dd4edc8a521042df398f20 ? '-' : $parb553375065dd4edc8a521042df398f20)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // sp_perfil_users - sp_perfil_users

        $par2c538f917e504cf8a065ab41deb1fd7b1 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $par2c538f917e504cf8a065ab41deb1fd7b1) {
            $par2c538f917e504cf8a065ab41deb1fd7b1 = '0';
        }

        $v92a91ae1869649cfba97f4807bb4c17f = \App\repf782f923fd0247bd9f4010b717e52999::mt3efd70b4c98a43f7a7268659f1739285($par2c538f917e504cf8a065ab41deb1fd7b1);

        $v92a91ae1869649cfba97f4807bb4c17fAjax = \URL::to('/').'/api/3efd70b4c98a43f7a7268659f1739285/'.(null == $par2c538f917e504cf8a065ab41deb1fd7b1 ? '-' : ('' == $par2c538f917e504cf8a065ab41deb1fd7b1 ? '-' : $par2c538f917e504cf8a065ab41deb1fd7b1)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // sp_style_script_plantilla - sp_style_script_plantilla

        $par6d4376ff0f654688b26b40f4eca6d2841 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $par6d4376ff0f654688b26b40f4eca6d2841) {
            $par6d4376ff0f654688b26b40f4eca6d2841 = '0';
        }

        $vdde5233d314b47b5838b6b75eb095b54 = \App\repf782f923fd0247bd9f4010b717e52999::mt3fc85b88142d4de7a3c3ef763c8bdf60($par6d4376ff0f654688b26b40f4eca6d2841);

        $vdde5233d314b47b5838b6b75eb095b54Ajax = \URL::to('/').'/api/3fc85b88142d4de7a3c3ef763c8bdf60/'.(null == $par6d4376ff0f654688b26b40f4eca6d2841 ? '-' : ('' == $par6d4376ff0f654688b26b40f4eca6d2841 ? '-' : $par6d4376ff0f654688b26b40f4eca6d2841)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        $arrWiths['vc91da3e26cb3454f87381503a6354daa'] = isset($vc91da3e26cb3454f87381503a6354daa) ? $vc91da3e26cb3454f87381503a6354daa : '';
        $arrWiths['vc91da3e26cb3454f87381503a6354daaAjax'] = isset($vc91da3e26cb3454f87381503a6354daaAjax) ? $vc91da3e26cb3454f87381503a6354daaAjax : '';
        $arrWiths['v537e255c78d04994ae100faae558cc3f'] = isset($v537e255c78d04994ae100faae558cc3f) ? $v537e255c78d04994ae100faae558cc3f : '';
        $arrWiths['v537e255c78d04994ae100faae558cc3fAjax'] = isset($v537e255c78d04994ae100faae558cc3fAjax) ? $v537e255c78d04994ae100faae558cc3fAjax : '';
        $arrWiths['v0bc4765040f54aac964803b5736cc84c'] = isset($v0bc4765040f54aac964803b5736cc84c) ? $v0bc4765040f54aac964803b5736cc84c : '';
        $arrWiths['v0bc4765040f54aac964803b5736cc84cAjax'] = isset($v0bc4765040f54aac964803b5736cc84cAjax) ? $v0bc4765040f54aac964803b5736cc84cAjax : '';
        $arrWiths['vbe56779bb6c646b79a39fc57bf070fc4'] = isset($vbe56779bb6c646b79a39fc57bf070fc4) ? $vbe56779bb6c646b79a39fc57bf070fc4 : '';
        $arrWiths['vbe56779bb6c646b79a39fc57bf070fc4Ajax'] = isset($vbe56779bb6c646b79a39fc57bf070fc4Ajax) ? $vbe56779bb6c646b79a39fc57bf070fc4Ajax : '';
        $arrWiths['v93f10c61ef9345b884cd206ddb4d151f'] = isset($v93f10c61ef9345b884cd206ddb4d151f) ? $v93f10c61ef9345b884cd206ddb4d151f : '';
        $arrWiths['v93f10c61ef9345b884cd206ddb4d151fAjax'] = isset($v93f10c61ef9345b884cd206ddb4d151fAjax) ? $v93f10c61ef9345b884cd206ddb4d151fAjax : '';
        $arrWiths['veae1e677102f4028864792a12d6a06b1'] = isset($veae1e677102f4028864792a12d6a06b1) ? $veae1e677102f4028864792a12d6a06b1 : '';
        $arrWiths['veae1e677102f4028864792a12d6a06b1Ajax'] = isset($veae1e677102f4028864792a12d6a06b1Ajax) ? $veae1e677102f4028864792a12d6a06b1Ajax : '';
        $arrWiths['v2d63ee675cf748c6abb5a5552a061c35'] = isset($v2d63ee675cf748c6abb5a5552a061c35) ? $v2d63ee675cf748c6abb5a5552a061c35 : '';
        $arrWiths['v2d63ee675cf748c6abb5a5552a061c35Ajax'] = isset($v2d63ee675cf748c6abb5a5552a061c35Ajax) ? $v2d63ee675cf748c6abb5a5552a061c35Ajax : '';
        $arrWiths['va5c2468124d74d6f9e882d45cc92afbb'] = isset($va5c2468124d74d6f9e882d45cc92afbb) ? $va5c2468124d74d6f9e882d45cc92afbb : '';
        $arrWiths['va5c2468124d74d6f9e882d45cc92afbbAjax'] = isset($va5c2468124d74d6f9e882d45cc92afbbAjax) ? $va5c2468124d74d6f9e882d45cc92afbbAjax : '';
        $arrWiths['v65d268c6d7474eca9d0286f28a8aa39e'] = isset($v65d268c6d7474eca9d0286f28a8aa39e) ? $v65d268c6d7474eca9d0286f28a8aa39e : '';
        $arrWiths['v65d268c6d7474eca9d0286f28a8aa39eAjax'] = isset($v65d268c6d7474eca9d0286f28a8aa39eAjax) ? $v65d268c6d7474eca9d0286f28a8aa39eAjax : '';
        $arrWiths['v7933ddc1c8d04340940dd8189cb8bb02'] = isset($v7933ddc1c8d04340940dd8189cb8bb02) ? $v7933ddc1c8d04340940dd8189cb8bb02 : '';
        $arrWiths['v7933ddc1c8d04340940dd8189cb8bb02Ajax'] = isset($v7933ddc1c8d04340940dd8189cb8bb02Ajax) ? $v7933ddc1c8d04340940dd8189cb8bb02Ajax : '';
        $arrWiths['v371d5a73185c40c5823312c126da3762'] = isset($v371d5a73185c40c5823312c126da3762) ? $v371d5a73185c40c5823312c126da3762 : '';
        $arrWiths['v371d5a73185c40c5823312c126da3762Ajax'] = isset($v371d5a73185c40c5823312c126da3762Ajax) ? $v371d5a73185c40c5823312c126da3762Ajax : '';
        $arrWiths['vee5a09fe20f447128d2549d1f8214bf9'] = isset($vee5a09fe20f447128d2549d1f8214bf9) ? $vee5a09fe20f447128d2549d1f8214bf9 : '';
        $arrWiths['vee5a09fe20f447128d2549d1f8214bf9Ajax'] = isset($vee5a09fe20f447128d2549d1f8214bf9Ajax) ? $vee5a09fe20f447128d2549d1f8214bf9Ajax : '';
        $arrWiths['v19280d8b51cd4820bfc6c76bedb181bf'] = isset($v19280d8b51cd4820bfc6c76bedb181bf) ? $v19280d8b51cd4820bfc6c76bedb181bf : '';
        $arrWiths['v19280d8b51cd4820bfc6c76bedb181bfAjax'] = isset($v19280d8b51cd4820bfc6c76bedb181bfAjax) ? $v19280d8b51cd4820bfc6c76bedb181bfAjax : '';
        $arrWiths['v2a3caa6ccb2c4c76863f0588267f6307'] = isset($v2a3caa6ccb2c4c76863f0588267f6307) ? $v2a3caa6ccb2c4c76863f0588267f6307 : '';
        $arrWiths['v2a3caa6ccb2c4c76863f0588267f6307Ajax'] = isset($v2a3caa6ccb2c4c76863f0588267f6307Ajax) ? $v2a3caa6ccb2c4c76863f0588267f6307Ajax : '';
        $arrWiths['va2cb87717074401a9e274e11af31b161'] = isset($va2cb87717074401a9e274e11af31b161) ? $va2cb87717074401a9e274e11af31b161 : '';
        $arrWiths['va2cb87717074401a9e274e11af31b161Ajax'] = isset($va2cb87717074401a9e274e11af31b161Ajax) ? $va2cb87717074401a9e274e11af31b161Ajax : '';
        $arrWiths['vb576715b7e774e768a7dae1ef4e3a8fe'] = isset($vb576715b7e774e768a7dae1ef4e3a8fe) ? $vb576715b7e774e768a7dae1ef4e3a8fe : '';
        $arrWiths['vb576715b7e774e768a7dae1ef4e3a8feAjax'] = isset($vb576715b7e774e768a7dae1ef4e3a8feAjax) ? $vb576715b7e774e768a7dae1ef4e3a8feAjax : '';
        $arrWiths['v4a3015782e0e4c1a8684eab8e6073b1d'] = isset($v4a3015782e0e4c1a8684eab8e6073b1d) ? $v4a3015782e0e4c1a8684eab8e6073b1d : '';
        $arrWiths['v4a3015782e0e4c1a8684eab8e6073b1dAjax'] = isset($v4a3015782e0e4c1a8684eab8e6073b1dAjax) ? $v4a3015782e0e4c1a8684eab8e6073b1dAjax : '';
        $arrWiths['va55e27b009bd4458ad333ea4a831e07c'] = isset($va55e27b009bd4458ad333ea4a831e07c) ? $va55e27b009bd4458ad333ea4a831e07c : '';
        $arrWiths['va55e27b009bd4458ad333ea4a831e07cAjax'] = isset($va55e27b009bd4458ad333ea4a831e07cAjax) ? $va55e27b009bd4458ad333ea4a831e07cAjax : '';
        $arrWiths['v312ec60a44e14197a1e08a8dad45fb2c'] = isset($v312ec60a44e14197a1e08a8dad45fb2c) ? $v312ec60a44e14197a1e08a8dad45fb2c : '';
        $arrWiths['v312ec60a44e14197a1e08a8dad45fb2cAjax'] = isset($v312ec60a44e14197a1e08a8dad45fb2cAjax) ? $v312ec60a44e14197a1e08a8dad45fb2cAjax : '';
        $arrWiths['v5661d133b8bc4fd6892266a866e9d1df'] = isset($v5661d133b8bc4fd6892266a866e9d1df) ? $v5661d133b8bc4fd6892266a866e9d1df : '';
        $arrWiths['v5661d133b8bc4fd6892266a866e9d1dfAjax'] = isset($v5661d133b8bc4fd6892266a866e9d1dfAjax) ? $v5661d133b8bc4fd6892266a866e9d1dfAjax : '';
        $arrWiths['v071642c5a0364e47b50753503692735b'] = isset($v071642c5a0364e47b50753503692735b) ? $v071642c5a0364e47b50753503692735b : '';
        $arrWiths['v071642c5a0364e47b50753503692735bAjax'] = isset($v071642c5a0364e47b50753503692735bAjax) ? $v071642c5a0364e47b50753503692735bAjax : '';
        $arrWiths['v6d5a684f0d8b412091d7abb34511e67d'] = isset($v6d5a684f0d8b412091d7abb34511e67d) ? $v6d5a684f0d8b412091d7abb34511e67d : '';
        $arrWiths['v6d5a684f0d8b412091d7abb34511e67dAjax'] = isset($v6d5a684f0d8b412091d7abb34511e67dAjax) ? $v6d5a684f0d8b412091d7abb34511e67dAjax : '';
        $arrWiths['va71d526ed8bb46e7a024bb238995d372'] = isset($va71d526ed8bb46e7a024bb238995d372) ? $va71d526ed8bb46e7a024bb238995d372 : '';
        $arrWiths['va71d526ed8bb46e7a024bb238995d372Ajax'] = isset($va71d526ed8bb46e7a024bb238995d372Ajax) ? $va71d526ed8bb46e7a024bb238995d372Ajax : '';
        $arrWiths['vfdd7110bd0f740709debe7c750ede4db'] = isset($vfdd7110bd0f740709debe7c750ede4db) ? $vfdd7110bd0f740709debe7c750ede4db : '';
        $arrWiths['vfdd7110bd0f740709debe7c750ede4dbAjax'] = isset($vfdd7110bd0f740709debe7c750ede4dbAjax) ? $vfdd7110bd0f740709debe7c750ede4dbAjax : '';
        $arrWiths['vc51a3709db6e4d3280e9749b7656c799'] = isset($vc51a3709db6e4d3280e9749b7656c799) ? $vc51a3709db6e4d3280e9749b7656c799 : '';
        $arrWiths['vc51a3709db6e4d3280e9749b7656c799Ajax'] = isset($vc51a3709db6e4d3280e9749b7656c799Ajax) ? $vc51a3709db6e4d3280e9749b7656c799Ajax : '';
        $arrWiths['v11a99ab1305f438b80b9d57bb36a5554'] = isset($v11a99ab1305f438b80b9d57bb36a5554) ? $v11a99ab1305f438b80b9d57bb36a5554 : '';
        $arrWiths['v11a99ab1305f438b80b9d57bb36a5554Ajax'] = isset($v11a99ab1305f438b80b9d57bb36a5554Ajax) ? $v11a99ab1305f438b80b9d57bb36a5554Ajax : '';
        $arrWiths['v73c9be7a7413460faa9056f57f391f89'] = isset($v73c9be7a7413460faa9056f57f391f89) ? $v73c9be7a7413460faa9056f57f391f89 : '';
        $arrWiths['v73c9be7a7413460faa9056f57f391f89Ajax'] = isset($v73c9be7a7413460faa9056f57f391f89Ajax) ? $v73c9be7a7413460faa9056f57f391f89Ajax : '';
        $arrWiths['v03087d2549eb41729e93c87b5870dda9'] = isset($v03087d2549eb41729e93c87b5870dda9) ? $v03087d2549eb41729e93c87b5870dda9 : '';
        $arrWiths['v03087d2549eb41729e93c87b5870dda9Ajax'] = isset($v03087d2549eb41729e93c87b5870dda9Ajax) ? $v03087d2549eb41729e93c87b5870dda9Ajax : '';
        $arrWiths['v691842cc3d744a1284f5557757795508'] = isset($v691842cc3d744a1284f5557757795508) ? $v691842cc3d744a1284f5557757795508 : '';
        $arrWiths['v691842cc3d744a1284f5557757795508Ajax'] = isset($v691842cc3d744a1284f5557757795508Ajax) ? $v691842cc3d744a1284f5557757795508Ajax : '';
        $arrWiths['v1b2f200194344844b4506b2740034d61'] = isset($v1b2f200194344844b4506b2740034d61) ? $v1b2f200194344844b4506b2740034d61 : '';
        $arrWiths['v1b2f200194344844b4506b2740034d61Ajax'] = isset($v1b2f200194344844b4506b2740034d61Ajax) ? $v1b2f200194344844b4506b2740034d61Ajax : '';
        $arrWiths['vb001e81e9fe44b169ec70f61b8cb19e3'] = isset($vb001e81e9fe44b169ec70f61b8cb19e3) ? $vb001e81e9fe44b169ec70f61b8cb19e3 : '';
        $arrWiths['vb001e81e9fe44b169ec70f61b8cb19e3Ajax'] = isset($vb001e81e9fe44b169ec70f61b8cb19e3Ajax) ? $vb001e81e9fe44b169ec70f61b8cb19e3Ajax : '';
        $arrWiths['v1000e4c784c94660b49032cef134471a'] = isset($v1000e4c784c94660b49032cef134471a) ? $v1000e4c784c94660b49032cef134471a : '';
        $arrWiths['v1000e4c784c94660b49032cef134471aAjax'] = isset($v1000e4c784c94660b49032cef134471aAjax) ? $v1000e4c784c94660b49032cef134471aAjax : '';
        $arrWiths['vc6b6e29e400848f28bd9fd731f1866d2'] = isset($vc6b6e29e400848f28bd9fd731f1866d2) ? $vc6b6e29e400848f28bd9fd731f1866d2 : '';
        $arrWiths['ve926bc3fad6e4b979b6119419cdb0b3a'] = isset($ve926bc3fad6e4b979b6119419cdb0b3a) ? $ve926bc3fad6e4b979b6119419cdb0b3a : '';
        $arrWiths['ve926bc3fad6e4b979b6119419cdb0b3aAjax'] = isset($ve926bc3fad6e4b979b6119419cdb0b3aAjax) ? $ve926bc3fad6e4b979b6119419cdb0b3aAjax : '';
        $arrWiths['v92a91ae1869649cfba97f4807bb4c17f'] = isset($v92a91ae1869649cfba97f4807bb4c17f) ? $v92a91ae1869649cfba97f4807bb4c17f : '';
        $arrWiths['vdde5233d314b47b5838b6b75eb095b54'] = isset($vdde5233d314b47b5838b6b75eb095b54) ? $vdde5233d314b47b5838b6b75eb095b54 : '';
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
        $response = new \Illuminate\Http\Response(view('443f21a7872e40adb2b36b6ba035fa2c.Index', $arrWiths)->with('title', $arrWiths['title'])->with('vSessionTimeout', \Config::get('session.lifetime') * 60));

        return $response;
    }
}
