<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:57:36
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * productorForm - productorForm.
 */
class pg5c9ed508879e4e4eb5d18feef45caecdController extends Controller
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

        // Guardar de preregistro - Guardar de preregistro
        if (null != $request->input('ctl3f4c37c6271849e1afdcbaa396e78f3f_28b14532b6d84ad8a1c99add9963fd21') && null != $request->input('hid28b14532b6d84ad8a1c99add9963fd21') && '28b14532b6d84ad8a1c99add9963fd21' == $request->input('hid28b14532b6d84ad8a1c99add9963fd21')) {
            $key = 0;
            $isNew = false;
            if (null != $request->input('u')) {
                $key = $request->input('u');
            }

            $tb = \App\tb267831275fef4ffaae652b1d4a04b208::where('PK_PRODUCTOR', $key)->first();
            if (null == $tb) {
                $tbCheck = \App\tb267831275fef4ffaae652b1d4a04b208::where([['FL_CURP', '=', $request->input('ctl39a9d43c7472479bae71b0f192852b95_28b14532b6d84ad8a1c99add9963fd21')], ['FL_UPP', '=', $request->input('ctl53bd1fd3c0e2491c9c82091876c75448_28b14532b6d84ad8a1c99add9963fd21')], ['FL_RFC', '=', $request->input('ctla41443af583e4cb8b5bf2e18f087c6dd_28b14532b6d84ad8a1c99add9963fd21')]])->first();
                if (null != $tbCheck) {
                    return \Response::json('AlreadyExists');
                }

                $isNew = true;
                $tb = new \App\tb267831275fef4ffaae652b1d4a04b208();
            }

            if (null != $request->input('ctl29b952a7e8da4b0b8efab56183c6c24e_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_APELLIDO_MATERNO = $request->input('ctl29b952a7e8da4b0b8efab56183c6c24e_28b14532b6d84ad8a1c99add9963fd21'); //FL_APELLIDO_MATERNO
            } elseif (null == $request->input('ctl29b952a7e8da4b0b8efab56183c6c24e_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_APELLIDO_MATERNO = null;
            }

            if (null != $request->input('ctlec760426ee1c49d4ab22bb872206cde0_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_APELLIDO_PATERNO = $request->input('ctlec760426ee1c49d4ab22bb872206cde0_28b14532b6d84ad8a1c99add9963fd21'); //FL_APELLIDO_PATERNO
            } elseif (null == $request->input('ctlec760426ee1c49d4ab22bb872206cde0_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_APELLIDO_PATERNO = null;
            }

            if (null != $request->input('ctle6f8629ec86c46fd9732496eb76babd4_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CALLE = $request->input('ctle6f8629ec86c46fd9732496eb76babd4_28b14532b6d84ad8a1c99add9963fd21'); //FL_CALLE
            } elseif (null == $request->input('ctle6f8629ec86c46fd9732496eb76babd4_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CALLE = null;
            }

            if (null != $request->input('ctl932dbaba958147859ae7cd8eddeb366f_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CELULAR = $request->input('ctl932dbaba958147859ae7cd8eddeb366f_28b14532b6d84ad8a1c99add9963fd21'); //FL_CELULAR
            } elseif (null == $request->input('ctl932dbaba958147859ae7cd8eddeb366f_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CELULAR = null;
            }

            if (null != $request->input('ctl1497f99f3ebb415faa795efea8ed7ea6_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_COLONIA = $request->input('ctl1497f99f3ebb415faa795efea8ed7ea6_28b14532b6d84ad8a1c99add9963fd21'); //FL_COLONIA
            } elseif (null == $request->input('ctl1497f99f3ebb415faa795efea8ed7ea6_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_COLONIA = null;
            }

            if (null != $request->input('ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CP = $request->input('ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21'); //FL_CP
            } elseif (null == $request->input('ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CP = null;
            }

            if (null != $request->input('ctl39a9d43c7472479bae71b0f192852b95_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CURP = $request->input('ctl39a9d43c7472479bae71b0f192852b95_28b14532b6d84ad8a1c99add9963fd21'); //FL_CURP
            } elseif (null == $request->input('ctl39a9d43c7472479bae71b0f192852b95_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CURP = null;
            }

            if (null != $request->input('ctl884b789ee7a9444eaa8c95c1b2db09a3_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_EMAIL = $request->input('ctl884b789ee7a9444eaa8c95c1b2db09a3_28b14532b6d84ad8a1c99add9963fd21'); //FL_EMAIL
            } elseif (null == $request->input('ctl884b789ee7a9444eaa8c95c1b2db09a3_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_EMAIL = null;
            }

            if (null != $request->input('ctl1a69519cac7344288d16aa91cf4ed26f_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_LOCALIDAD = $request->input('ctl1a69519cac7344288d16aa91cf4ed26f_28b14532b6d84ad8a1c99add9963fd21'); //FL_LOCALIDAD
            } elseif (null == $request->input('ctl1a69519cac7344288d16aa91cf4ed26f_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_LOCALIDAD = null;
            }

            if (null != $request->input('ctl544f1f4a44da4a3e89439bd9d1a18838_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_No_EXT = $request->input('ctl544f1f4a44da4a3e89439bd9d1a18838_28b14532b6d84ad8a1c99add9963fd21'); //FL_No_EXT
            } elseif (null == $request->input('ctl544f1f4a44da4a3e89439bd9d1a18838_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_No_EXT = null;
            }

            if (null != $request->input('ctl19e4d5a24bc94e8dbab857c6db4573d9_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_No_INT = $request->input('ctl19e4d5a24bc94e8dbab857c6db4573d9_28b14532b6d84ad8a1c99add9963fd21'); //FL_No_INT
            } elseif (null == $request->input('ctl19e4d5a24bc94e8dbab857c6db4573d9_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_No_INT = null;
            }

            if (null != $request->input('ctlb847eb04392d433686683daec7887c6f_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_NOMBRE = $request->input('ctlb847eb04392d433686683daec7887c6f_28b14532b6d84ad8a1c99add9963fd21'); //FL_NOMBRE
            } elseif (null == $request->input('ctlb847eb04392d433686683daec7887c6f_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_NOMBRE = null;
            }

            if (null != $request->input('ctl53bd1fd3c0e2491c9c82091876c75448_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_UPP = $request->input('ctl53bd1fd3c0e2491c9c82091876c75448_28b14532b6d84ad8a1c99add9963fd21'); //FL_UPP
            } elseif (null == $request->input('ctl53bd1fd3c0e2491c9c82091876c75448_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_UPP = null;
            }

            if (null != $request->input('ctla41443af583e4cb8b5bf2e18f087c6dd_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_RFC = $request->input('ctla41443af583e4cb8b5bf2e18f087c6dd_28b14532b6d84ad8a1c99add9963fd21'); //FL_RFC
            } elseif (null == $request->input('ctla41443af583e4cb8b5bf2e18f087c6dd_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_RFC = null;
            }

            if (null != $request->input('ctl6ddb202c5c2246a69ecb8e2515f3b9b5_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_RAZONVENDERLICONSA = $request->input('ctl6ddb202c5c2246a69ecb8e2515f3b9b5_28b14532b6d84ad8a1c99add9963fd21'); //FL_RAZONVENDERLICONSA
            } elseif (null == $request->input('ctl6ddb202c5c2246a69ecb8e2515f3b9b5_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_RAZONVENDERLICONSA = null;
            }

            if (1 != null) {
                $tb->FK_ESTATUS = 1; //FK_ESTATUS
            } elseif (1 == null) {
                $tb->FK_ESTATUS = null;
            }

            if (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && $isNew) {
                $tb->FL_FECHA_REGISTRO = \DateTime::createFromFormat(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')))->format('Y-m-d H:i'); //FL_FECHA_REGISTRO
            } elseif (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' == date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && $isNew) {
                $tb->FL_FECHA_REGISTRO = null;
            }

            if (null != $request->input('ctl67120e193b094cabb96eff7f0790ee5c_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_RAZON_SOCIAL = $request->input('ctl67120e193b094cabb96eff7f0790ee5c_28b14532b6d84ad8a1c99add9963fd21'); //FL_RAZON_SOCIAL
            } elseif (null == $request->input('ctl67120e193b094cabb96eff7f0790ee5c_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_RAZON_SOCIAL = null;
            }

            if (1 != null) {
                $tb->FL_ACTIVO = 1; //FL_ACTIVO
            } elseif (1 == null) {
                $tb->FL_ACTIVO = null;
            }

            $tb->save();

            //FK_PRODUCTOR
            $tot6234015fe8ee4df3a01c9bb34197365c = (int) $request->input('hd28b14532b6d84ad8a1c99add9963fd21_1');
            $for6234015fe8ee4df3a01c9bb34197365c = false;
            for ($i = 1; $i <= $tot6234015fe8ee4df3a01c9bb34197365c; ++$i) {
                $val = $request->input('hd28b14532b6d84ad8a1c99add9963fd21_1_'.$i);
                if ('1' == $request->input('del28b14532b6d84ad8a1c99add9963fd21_1_'.$i) && !$for6234015fe8ee4df3a01c9bb34197365c) {
                    if ('' != $request->input('hd28b14532b6d84ad8a1c99add9963fd21_1_'.$i)) {
                        \App\tb63eddac8503e48ef8ba7965cd5d64334::where('PK_PRODUCTOR_CENTRO_ACOPIO', $val)->delete();
                    }
                } else {
                    if ('' == $request->input('hd28b14532b6d84ad8a1c99add9963fd21_1_'.$i) || $for6234015fe8ee4df3a01c9bb34197365c) {
                        $tbRel = new \App\tb63eddac8503e48ef8ba7965cd5d64334();

                        if (null != $request->input('ctl746fe94e5d4c449bb337c179b2c4beb0_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_CENTRO_ACOPIO = $request->input('ctl746fe94e5d4c449bb337c179b2c4beb0_28b14532b6d84ad8a1c99add9963fd21_'.$i.''); //FK_CENTRO_ACOPIO
                        } elseif (null == $request->input('ctl746fe94e5d4c449bb337c179b2c4beb0_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_CENTRO_ACOPIO = null;
                        }

                        if (null != $request->input('ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_CENTRO_TRABAJO = $request->input('ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21_'.$i.''); //FK_CENTRO_TRABAJO
                        } elseif (null == $request->input('ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_CENTRO_TRABAJO = null;
                        }

                        if (null != $request->input('ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_ESTADO = $request->input('ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21_'.$i.''); //FK_ESTADO
                        } elseif (null == $request->input('ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_ESTADO = null;
                        }

                        if (true != null) {
                            $tbRel->FL_ACTIVO_INACTIVO = true; //FL_ACTIVO_INACTIVO
                        } elseif (true == null) {
                            $tbRel->FL_ACTIVO_INACTIVO = null;
                        }

                        if (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                            $tbRel->FL_FECHA_REGISTRO = \DateTime::createFromFormat(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')))->format('Y-m-d H:i'); //FL_FECHA_REGISTRO
                        } elseif (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' == date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                            $tbRel->FL_FECHA_REGISTRO = null;
                        }

                        $tbRel->FK_PRODUCTOR = $tb->PK_PRODUCTOR;
                        $tbRel->save();
                    } else {
                        $tbRel = \App\tb63eddac8503e48ef8ba7965cd5d64334::find($val);

                        if (null != $request->input('ctl746fe94e5d4c449bb337c179b2c4beb0_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_CENTRO_ACOPIO = $request->input('ctl746fe94e5d4c449bb337c179b2c4beb0_28b14532b6d84ad8a1c99add9963fd21_'.$i.''); //FK_CENTRO_ACOPIO
                        } elseif (null == $request->input('ctl746fe94e5d4c449bb337c179b2c4beb0_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_CENTRO_ACOPIO = null;
                        }

                        if (null != $request->input('ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_CENTRO_TRABAJO = $request->input('ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21_'.$i.''); //FK_CENTRO_TRABAJO
                        } elseif (null == $request->input('ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_CENTRO_TRABAJO = null;
                        }

                        if (null != $request->input('ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_ESTADO = $request->input('ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21_'.$i.''); //FK_ESTADO
                        } elseif (null == $request->input('ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21_'.$i.'')) {
                            $tbRel->FK_ESTADO = null;
                        }

                        if (true != null) {
                            $tbRel->FL_ACTIVO_INACTIVO = true; //FL_ACTIVO_INACTIVO
                        } elseif (true == null) {
                            $tbRel->FL_ACTIVO_INACTIVO = null;
                        }

                        if (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                            $tbRel->FL_FECHA_REGISTRO = \DateTime::createFromFormat(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')))->format('Y-m-d H:i'); //FL_FECHA_REGISTRO
                        } elseif (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' == date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                            $tbRel->FL_FECHA_REGISTRO = null;
                        }

                        $tbRel->save();
                    }
                }
            }

            $lst[] = $tb;

            $key = 0;
            $isNew = false;
            if (null != $request->input('u')) {
                $key = $request->input('u');
            }

            $tb = \App\tba5345050e7b94369b7ba4fabd723cb69::where('PK_DATOS_PRODUCTIVOS', $key)->first();
            if (null == $tb) {
                $isNew = true;
                $tb = new \App\tba5345050e7b94369b7ba4fabd723cb69();
            }

            if (null != $lst[0]->PK_PRODUCTOR) {
                $tb->FK_PRODUCTOR = $lst[0]->PK_PRODUCTOR; //FK_PRODUCTOR
            } elseif (null == $lst[0]->PK_PRODUCTOR) {
                $tb->FK_PRODUCTOR = null;
            }

            if (null != $request->input('ctle8949595cc1a464da06a301479e33af6_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CARACT_LECHEFRESCA = $request->input('ctle8949595cc1a464da06a301479e33af6_28b14532b6d84ad8a1c99add9963fd21'); //FL_CARACT_LECHEFRESCA
            } elseif (null == $request->input('ctle8949595cc1a464da06a301479e33af6_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_CARACT_LECHEFRESCA = null;
            }

            if (null != $request->input('ctldfbf969457f149dfacaf00c399824752_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_DISTANCIA_INSTALACIONES = $request->input('ctldfbf969457f149dfacaf00c399824752_28b14532b6d84ad8a1c99add9963fd21'); //FL_DISTANCIA_INSTALACIONES
            } elseif (null == $request->input('ctldfbf969457f149dfacaf00c399824752_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_DISTANCIA_INSTALACIONES = null;
            }

            if (null != $request->input('ctl24d352a214404b1da9f241347119fe0e_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_PERIODO_ENTREGA = $request->input('ctl24d352a214404b1da9f241347119fe0e_28b14532b6d84ad8a1c99add9963fd21'); //FL_PERIODO_ENTREGA
            } elseif (null == $request->input('ctl24d352a214404b1da9f241347119fe0e_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_PERIODO_ENTREGA = null;
            }

            if (null != $request->input('ctl8419cc107d9a46faa383dfa23d11817c_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_TAMANO_PRODUCTOR = $request->input('ctl8419cc107d9a46faa383dfa23d11817c_28b14532b6d84ad8a1c99add9963fd21'); //FL_TAMANO_PRODUCTOR
            } elseif (null == $request->input('ctl8419cc107d9a46faa383dfa23d11817c_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_TAMANO_PRODUCTOR = null;
            }

            if (null != $request->input('ctlbd87e85c5f2740ceaf66b0e83d1b30f4_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_TIPO_TRANSPORTE = $request->input('ctlbd87e85c5f2740ceaf66b0e83d1b30f4_28b14532b6d84ad8a1c99add9963fd21'); //FL_TIPO_TRANSPORTE
            } elseif (null == $request->input('ctlbd87e85c5f2740ceaf66b0e83d1b30f4_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_TIPO_TRANSPORTE = null;
            }

            if (null != $request->input('ctl0daf917b5b7d4aee94c2adbdc6e3f1b6_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_TOTAL_VACAS = $request->input('ctl0daf917b5b7d4aee94c2adbdc6e3f1b6_28b14532b6d84ad8a1c99add9963fd21'); //FL_TOTAL_VACAS
            } elseif (null == $request->input('ctl0daf917b5b7d4aee94c2adbdc6e3f1b6_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_TOTAL_VACAS = null;
            }

            if (null != $request->input('ctl25ded16791c045c5bac30f933d5b17b3_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_VACAS_PROD_LECHE = $request->input('ctl25ded16791c045c5bac30f933d5b17b3_28b14532b6d84ad8a1c99add9963fd21'); //FL_VACAS_PROD_LECHE
            } elseif (null == $request->input('ctl25ded16791c045c5bac30f933d5b17b3_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_VACAS_PROD_LECHE = null;
            }

            if (null != $request->input('ctlf8b5165bd4884ecc9c639257a7df09f3_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_VACAS_SECAS = $request->input('ctlf8b5165bd4884ecc9c639257a7df09f3_28b14532b6d84ad8a1c99add9963fd21'); //FL_VACAS_SECAS
            } elseif (null == $request->input('ctlf8b5165bd4884ecc9c639257a7df09f3_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_VACAS_SECAS = null;
            }

            if (null != $request->input('ctl22e9e7b92ab04fe49e8980067890bcf5_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_VOLUMEN_ESTIMADO = $request->input('ctl22e9e7b92ab04fe49e8980067890bcf5_28b14532b6d84ad8a1c99add9963fd21'); //FL_VOLUMEN_ESTIMADO
            } elseif (null == $request->input('ctl22e9e7b92ab04fe49e8980067890bcf5_28b14532b6d84ad8a1c99add9963fd21')) {
                $tb->FL_VOLUMEN_ESTIMADO = null;
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

            if (1 != null) {
                $tb->FK_ESTATUS = 1; //FK_ESTATUS
            } elseif (1 == null) {
                $tb->FK_ESTATUS = null;
            }

            if (null != $lst[0]->PK_PRODUCTOR) {
                $tb->FK_PRODUCTOR = $lst[0]->PK_PRODUCTOR; //FK_PRODUCTOR
            } elseif (null == $lst[0]->PK_PRODUCTOR) {
                $tb->FK_PRODUCTOR = null;
            }

            if (null != $request->session()->get('ses5e122755c3a24f5d8789755168e9de27')) {
                $tb->FK_USUARIO = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27'); //FK_USUARIO
            } elseif (null == $request->session()->get('ses5e122755c3a24f5d8789755168e9de27')) {
                $tb->FK_USUARIO = null;
            }

            if (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                $tb->FL_FECHA = \DateTime::createFromFormat(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')))->format('Y-m-d H:i'); //FL_FECHA
            } elseif (null != date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days')) && '' == date(str_replace('%', '', \Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgSystemShortDatetimeFormat')), strtotime('+0 days'))) {
                $tb->FL_FECHA = null;
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

        // 	Lista de caracteristicas de leche a entregar - 	Lista de caracteristicas de leche a entregar

        $par6185a7056560433494dba94e9ae59107c96534fcd7604c38b359278eabc5d440 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107c96534fcd7604c38b359278eabc5d440) {
            $par6185a7056560433494dba94e9ae59107c96534fcd7604c38b359278eabc5d440 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860c96534fcd7604c38b359278eabc5d440 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860c96534fcd7604c38b359278eabc5d440) {
            $par0a0ce2af85ab462a808e0270326fb860c96534fcd7604c38b359278eabc5d440 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcec96534fcd7604c38b359278eabc5d440 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcec96534fcd7604c38b359278eabc5d440) {
            $par5551ae677d6b488ebd38625d0f5d9fcec96534fcd7604c38b359278eabc5d440 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcec96534fcd7604c38b359278eabc5d440) {
            $par5551ae677d6b488ebd38625d0f5d9fcec96534fcd7604c38b359278eabc5d440 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5c96534fcd7604c38b359278eabc5d440 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5c96534fcd7604c38b359278eabc5d440) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5c96534fcd7604c38b359278eabc5d440 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5c96534fcd7604c38b359278eabc5d440) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5c96534fcd7604c38b359278eabc5d440 = '';
        }

        $vc96534fcd7604c38b359278eabc5d440 = \App\repf782f923fd0247bd9f4010b717e52999::mt48e61ec9722046979c8bb305a6922ac3($par6185a7056560433494dba94e9ae59107c96534fcd7604c38b359278eabc5d440, $par0a0ce2af85ab462a808e0270326fb860c96534fcd7604c38b359278eabc5d440, $par5551ae677d6b488ebd38625d0f5d9fcec96534fcd7604c38b359278eabc5d440, $par8fce8a73ac264e4a8f3b56d8b991b8a5c96534fcd7604c38b359278eabc5d440);

        $vc96534fcd7604c38b359278eabc5d440Ajax = \URL::to('/').'/api/48e61ec9722046979c8bb305a6922ac3/{page}/{pagesize}/{orderColumn}/{orderType}';

        // CP - CP

        $parf5a55e76f3e542fb9f62b5fa693789361 = null;

        if (null == $parf5a55e76f3e542fb9f62b5fa693789361) {
            $parf5a55e76f3e542fb9f62b5fa693789361 = '';
        }

        $pardb8712e48c034e0682ecfb008e3b94791 = null;

        if (null == $pardb8712e48c034e0682ecfb008e3b94791) {
            $pardb8712e48c034e0682ecfb008e3b94791 = '';
        }

        $par6185a7056560433494dba94e9ae59107042103f734734c7caa0dbcaae67beaf4 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107042103f734734c7caa0dbcaae67beaf4) {
            $par6185a7056560433494dba94e9ae59107042103f734734c7caa0dbcaae67beaf4 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860042103f734734c7caa0dbcaae67beaf4 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860042103f734734c7caa0dbcaae67beaf4) {
            $par0a0ce2af85ab462a808e0270326fb860042103f734734c7caa0dbcaae67beaf4 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce042103f734734c7caa0dbcaae67beaf4 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce042103f734734c7caa0dbcaae67beaf4) {
            $par5551ae677d6b488ebd38625d0f5d9fce042103f734734c7caa0dbcaae67beaf4 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce042103f734734c7caa0dbcaae67beaf4) {
            $par5551ae677d6b488ebd38625d0f5d9fce042103f734734c7caa0dbcaae67beaf4 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5042103f734734c7caa0dbcaae67beaf4 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5042103f734734c7caa0dbcaae67beaf4) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5042103f734734c7caa0dbcaae67beaf4 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5042103f734734c7caa0dbcaae67beaf4) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5042103f734734c7caa0dbcaae67beaf4 = '';
        }

        $v042103f734734c7caa0dbcaae67beaf4 = \App\repf782f923fd0247bd9f4010b717e52999::mt6462c304a8974f90a1cccd7ac38cc8ca($parf5a55e76f3e542fb9f62b5fa693789361, $pardb8712e48c034e0682ecfb008e3b94791, $par6185a7056560433494dba94e9ae59107042103f734734c7caa0dbcaae67beaf4, $par0a0ce2af85ab462a808e0270326fb860042103f734734c7caa0dbcaae67beaf4, $par5551ae677d6b488ebd38625d0f5d9fce042103f734734c7caa0dbcaae67beaf4, $par8fce8a73ac264e4a8f3b56d8b991b8a5042103f734734c7caa0dbcaae67beaf4);

        $v042103f734734c7caa0dbcaae67beaf4Ajax = \URL::to('/').'/api/6462c304a8974f90a1cccd7ac38cc8ca/'.(null == $parf5a55e76f3e542fb9f62b5fa693789361 ? '-' : ('' == $parf5a55e76f3e542fb9f62b5fa693789361 ? '-' : $parf5a55e76f3e542fb9f62b5fa693789361)).'/'.(null == $pardb8712e48c034e0682ecfb008e3b94791 ? '-' : ('' == $pardb8712e48c034e0682ecfb008e3b94791 ? '-' : $pardb8712e48c034e0682ecfb008e3b94791)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista de Centros de Acopio - Lista de Centros de Acopio

        $pardd3780b5691843b4b7e62ed23891ccc6 = $request->input('u');

        if (null == $pardd3780b5691843b4b7e62ed23891ccc6) {
            $pardd3780b5691843b4b7e62ed23891ccc6 = '0';
        }

        $par6185a7056560433494dba94e9ae59107437f088dc63d480a8ae1e7d1206e6c98 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107437f088dc63d480a8ae1e7d1206e6c98) {
            $par6185a7056560433494dba94e9ae59107437f088dc63d480a8ae1e7d1206e6c98 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860437f088dc63d480a8ae1e7d1206e6c98 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860437f088dc63d480a8ae1e7d1206e6c98) {
            $par0a0ce2af85ab462a808e0270326fb860437f088dc63d480a8ae1e7d1206e6c98 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce437f088dc63d480a8ae1e7d1206e6c98 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce437f088dc63d480a8ae1e7d1206e6c98) {
            $par5551ae677d6b488ebd38625d0f5d9fce437f088dc63d480a8ae1e7d1206e6c98 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce437f088dc63d480a8ae1e7d1206e6c98) {
            $par5551ae677d6b488ebd38625d0f5d9fce437f088dc63d480a8ae1e7d1206e6c98 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5437f088dc63d480a8ae1e7d1206e6c98 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5437f088dc63d480a8ae1e7d1206e6c98) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5437f088dc63d480a8ae1e7d1206e6c98 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5437f088dc63d480a8ae1e7d1206e6c98) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5437f088dc63d480a8ae1e7d1206e6c98 = '';
        }

        $v437f088dc63d480a8ae1e7d1206e6c98Ajax = \URL::to('/')."/api/ae8e9cfbd4174125aa0ae9597c5ded2f/'+encodeURIComponent((($('#ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()) != undefined && ($('#ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).length > 0 ? ($('#ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).replace(/\\./g,'---').replace(/\\//g,'___') : ($('#ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctlf629596e10c040759fdb8c929935e636_28b14532b6d84ad8a1c99add9963fd21{Extra}').val())))+'/{page}/{pagesize}/{orderColumn}/{orderType}";

        // Lista de Centros de Trabajos - Lista de Centros de Trabajos

        $par4bf6a056ccbc4668908ee1961f073ffb = $request->input('u');

        if (null == $par4bf6a056ccbc4668908ee1961f073ffb) {
            $par4bf6a056ccbc4668908ee1961f073ffb = '0';
        }

        $par6185a7056560433494dba94e9ae591070a9e3bd569ae4768b00e8071c5d02018 = 0;

        if (null == $par6185a7056560433494dba94e9ae591070a9e3bd569ae4768b00e8071c5d02018) {
            $par6185a7056560433494dba94e9ae591070a9e3bd569ae4768b00e8071c5d02018 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8600a9e3bd569ae4768b00e8071c5d02018 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8600a9e3bd569ae4768b00e8071c5d02018) {
            $par0a0ce2af85ab462a808e0270326fb8600a9e3bd569ae4768b00e8071c5d02018 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce0a9e3bd569ae4768b00e8071c5d02018 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce0a9e3bd569ae4768b00e8071c5d02018) {
            $par5551ae677d6b488ebd38625d0f5d9fce0a9e3bd569ae4768b00e8071c5d02018 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce0a9e3bd569ae4768b00e8071c5d02018) {
            $par5551ae677d6b488ebd38625d0f5d9fce0a9e3bd569ae4768b00e8071c5d02018 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a50a9e3bd569ae4768b00e8071c5d02018 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a50a9e3bd569ae4768b00e8071c5d02018) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a50a9e3bd569ae4768b00e8071c5d02018 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a50a9e3bd569ae4768b00e8071c5d02018) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a50a9e3bd569ae4768b00e8071c5d02018 = '';
        }

        $v0a9e3bd569ae4768b00e8071c5d02018Ajax = \URL::to('/')."/api/5a1d9d566ef8489daca48684bc6e3ba1/'+encodeURIComponent((($('#ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()) != undefined && ($('#ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).length > 0 ? ($('#ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).replace(/\\./g,'---').replace(/\\//g,'___') : ($('#ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctld277190de82c4b5a9ffe51dd74b15986_28b14532b6d84ad8a1c99add9963fd21{Extra}').val())))+'/{page}/{pagesize}/{orderColumn}/{orderType}";

        // Lista de Estados - Lista de Estados

        $par6185a7056560433494dba94e9ae591078c08d353e3e54b699c114ddb4ae3d752 = 0;

        if (null == $par6185a7056560433494dba94e9ae591078c08d353e3e54b699c114ddb4ae3d752) {
            $par6185a7056560433494dba94e9ae591078c08d353e3e54b699c114ddb4ae3d752 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8608c08d353e3e54b699c114ddb4ae3d752 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8608c08d353e3e54b699c114ddb4ae3d752) {
            $par0a0ce2af85ab462a808e0270326fb8608c08d353e3e54b699c114ddb4ae3d752 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce8c08d353e3e54b699c114ddb4ae3d752 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce8c08d353e3e54b699c114ddb4ae3d752) {
            $par5551ae677d6b488ebd38625d0f5d9fce8c08d353e3e54b699c114ddb4ae3d752 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce8c08d353e3e54b699c114ddb4ae3d752) {
            $par5551ae677d6b488ebd38625d0f5d9fce8c08d353e3e54b699c114ddb4ae3d752 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a58c08d353e3e54b699c114ddb4ae3d752 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a58c08d353e3e54b699c114ddb4ae3d752) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a58c08d353e3e54b699c114ddb4ae3d752 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a58c08d353e3e54b699c114ddb4ae3d752) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a58c08d353e3e54b699c114ddb4ae3d752 = '';
        }

        $v8c08d353e3e54b699c114ddb4ae3d752 = \App\repf782f923fd0247bd9f4010b717e52999::mtabea1b31ebd541018e0ac1aeeb09858a($par6185a7056560433494dba94e9ae591078c08d353e3e54b699c114ddb4ae3d752, $par0a0ce2af85ab462a808e0270326fb8608c08d353e3e54b699c114ddb4ae3d752, $par5551ae677d6b488ebd38625d0f5d9fce8c08d353e3e54b699c114ddb4ae3d752, $par8fce8a73ac264e4a8f3b56d8b991b8a58c08d353e3e54b699c114ddb4ae3d752);

        $v8c08d353e3e54b699c114ddb4ae3d752Ajax = \URL::to('/').'/api/abea1b31ebd541018e0ac1aeeb09858a/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista de Lugar - Lista de Lugar

        $par6185a7056560433494dba94e9ae59107cb7846af4d8d4d27b05add9f809cf430 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107cb7846af4d8d4d27b05add9f809cf430) {
            $par6185a7056560433494dba94e9ae59107cb7846af4d8d4d27b05add9f809cf430 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860cb7846af4d8d4d27b05add9f809cf430 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860cb7846af4d8d4d27b05add9f809cf430) {
            $par0a0ce2af85ab462a808e0270326fb860cb7846af4d8d4d27b05add9f809cf430 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcecb7846af4d8d4d27b05add9f809cf430 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcecb7846af4d8d4d27b05add9f809cf430) {
            $par5551ae677d6b488ebd38625d0f5d9fcecb7846af4d8d4d27b05add9f809cf430 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcecb7846af4d8d4d27b05add9f809cf430) {
            $par5551ae677d6b488ebd38625d0f5d9fcecb7846af4d8d4d27b05add9f809cf430 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5cb7846af4d8d4d27b05add9f809cf430 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5cb7846af4d8d4d27b05add9f809cf430) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5cb7846af4d8d4d27b05add9f809cf430 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5cb7846af4d8d4d27b05add9f809cf430) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5cb7846af4d8d4d27b05add9f809cf430 = '';
        }

        $vcb7846af4d8d4d27b05add9f809cf430 = \App\repf782f923fd0247bd9f4010b717e52999::mta64061d55b1c4e4883871fdf7ed1dfea($par6185a7056560433494dba94e9ae59107cb7846af4d8d4d27b05add9f809cf430, $par0a0ce2af85ab462a808e0270326fb860cb7846af4d8d4d27b05add9f809cf430, $par5551ae677d6b488ebd38625d0f5d9fcecb7846af4d8d4d27b05add9f809cf430, $par8fce8a73ac264e4a8f3b56d8b991b8a5cb7846af4d8d4d27b05add9f809cf430);

        $vcb7846af4d8d4d27b05add9f809cf430Ajax = \URL::to('/').'/api/a64061d55b1c4e4883871fdf7ed1dfea/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista de Municipios - Lista de Municipios

        $parcc42f42ce11443a889eba7ceaeec5dd7 = $request->input('u');

        if (null == $parcc42f42ce11443a889eba7ceaeec5dd7) {
            $parcc42f42ce11443a889eba7ceaeec5dd7 = '0';
        }

        $par6185a7056560433494dba94e9ae59107e5a769e478394e3dae5b09cf390f25e2 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107e5a769e478394e3dae5b09cf390f25e2) {
            $par6185a7056560433494dba94e9ae59107e5a769e478394e3dae5b09cf390f25e2 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860e5a769e478394e3dae5b09cf390f25e2 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860e5a769e478394e3dae5b09cf390f25e2) {
            $par0a0ce2af85ab462a808e0270326fb860e5a769e478394e3dae5b09cf390f25e2 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcee5a769e478394e3dae5b09cf390f25e2 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcee5a769e478394e3dae5b09cf390f25e2) {
            $par5551ae677d6b488ebd38625d0f5d9fcee5a769e478394e3dae5b09cf390f25e2 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcee5a769e478394e3dae5b09cf390f25e2) {
            $par5551ae677d6b488ebd38625d0f5d9fcee5a769e478394e3dae5b09cf390f25e2 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5e5a769e478394e3dae5b09cf390f25e2 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5e5a769e478394e3dae5b09cf390f25e2) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5e5a769e478394e3dae5b09cf390f25e2 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5e5a769e478394e3dae5b09cf390f25e2) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5e5a769e478394e3dae5b09cf390f25e2 = '';
        }

        $ve5a769e478394e3dae5b09cf390f25e2Ajax = \URL::to('/')."/api/9866c32545064a31a6b35587ee0c898e/'+encodeURIComponent((($('#ctl75a6e0797cc54d8d828a39dfda3307fe_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctl75a6e0797cc54d8d828a39dfda3307fe_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()) != undefined && ($('#ctl75a6e0797cc54d8d828a39dfda3307fe_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctl75a6e0797cc54d8d828a39dfda3307fe_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).length > 0 ? ($('#ctl75a6e0797cc54d8d828a39dfda3307fe_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctl75a6e0797cc54d8d828a39dfda3307fe_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).replace(/\\./g,'---').replace(/\\//g,'___') : ($('#ctl75a6e0797cc54d8d828a39dfda3307fe_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctl75a6e0797cc54d8d828a39dfda3307fe_28b14532b6d84ad8a1c99add9963fd21{Extra}').val())))+'/{page}/{pagesize}/{orderColumn}/{orderType}";

        // Lista de tamaño de productor - Lista de tamaño de productor

        $par6185a7056560433494dba94e9ae59107e29b31809f8f41b0936cc0fba27f1cb5 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107e29b31809f8f41b0936cc0fba27f1cb5) {
            $par6185a7056560433494dba94e9ae59107e29b31809f8f41b0936cc0fba27f1cb5 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860e29b31809f8f41b0936cc0fba27f1cb5 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860e29b31809f8f41b0936cc0fba27f1cb5) {
            $par0a0ce2af85ab462a808e0270326fb860e29b31809f8f41b0936cc0fba27f1cb5 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcee29b31809f8f41b0936cc0fba27f1cb5 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcee29b31809f8f41b0936cc0fba27f1cb5) {
            $par5551ae677d6b488ebd38625d0f5d9fcee29b31809f8f41b0936cc0fba27f1cb5 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcee29b31809f8f41b0936cc0fba27f1cb5) {
            $par5551ae677d6b488ebd38625d0f5d9fcee29b31809f8f41b0936cc0fba27f1cb5 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5e29b31809f8f41b0936cc0fba27f1cb5 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5e29b31809f8f41b0936cc0fba27f1cb5) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5e29b31809f8f41b0936cc0fba27f1cb5 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5e29b31809f8f41b0936cc0fba27f1cb5) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5e29b31809f8f41b0936cc0fba27f1cb5 = '';
        }

        $ve29b31809f8f41b0936cc0fba27f1cb5 = \App\repf782f923fd0247bd9f4010b717e52999::mt61a556104c174df3831a01053dfb6ead($par6185a7056560433494dba94e9ae59107e29b31809f8f41b0936cc0fba27f1cb5, $par0a0ce2af85ab462a808e0270326fb860e29b31809f8f41b0936cc0fba27f1cb5, $par5551ae677d6b488ebd38625d0f5d9fcee29b31809f8f41b0936cc0fba27f1cb5, $par8fce8a73ac264e4a8f3b56d8b991b8a5e29b31809f8f41b0936cc0fba27f1cb5);

        $ve29b31809f8f41b0936cc0fba27f1cb5Ajax = \URL::to('/').'/api/61a556104c174df3831a01053dfb6ead/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista periodo de entrega - Lista periodo de entrega

        $par6185a7056560433494dba94e9ae59107d42eb9675e10404c932331259fed7107 = 0;

        if (null == $par6185a7056560433494dba94e9ae59107d42eb9675e10404c932331259fed7107) {
            $par6185a7056560433494dba94e9ae59107d42eb9675e10404c932331259fed7107 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860d42eb9675e10404c932331259fed7107 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860d42eb9675e10404c932331259fed7107) {
            $par0a0ce2af85ab462a808e0270326fb860d42eb9675e10404c932331259fed7107 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fced42eb9675e10404c932331259fed7107 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fced42eb9675e10404c932331259fed7107) {
            $par5551ae677d6b488ebd38625d0f5d9fced42eb9675e10404c932331259fed7107 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fced42eb9675e10404c932331259fed7107) {
            $par5551ae677d6b488ebd38625d0f5d9fced42eb9675e10404c932331259fed7107 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5d42eb9675e10404c932331259fed7107 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5d42eb9675e10404c932331259fed7107) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5d42eb9675e10404c932331259fed7107 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5d42eb9675e10404c932331259fed7107) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5d42eb9675e10404c932331259fed7107 = '';
        }

        $vd42eb9675e10404c932331259fed7107 = \App\repf782f923fd0247bd9f4010b717e52999::mt38ed84f2e36443e1986a1d7c3701b4fa($par6185a7056560433494dba94e9ae59107d42eb9675e10404c932331259fed7107, $par0a0ce2af85ab462a808e0270326fb860d42eb9675e10404c932331259fed7107, $par5551ae677d6b488ebd38625d0f5d9fced42eb9675e10404c932331259fed7107, $par8fce8a73ac264e4a8f3b56d8b991b8a5d42eb9675e10404c932331259fed7107);

        $vd42eb9675e10404c932331259fed7107Ajax = \URL::to('/').'/api/38ed84f2e36443e1986a1d7c3701b4fa/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Lista tipo de transporte - Lista tipo de transporte

        $par6185a7056560433494dba94e9ae59107a8bb1efe18a841afa8e61044e3ba3ddb = 0;

        if (null == $par6185a7056560433494dba94e9ae59107a8bb1efe18a841afa8e61044e3ba3ddb) {
            $par6185a7056560433494dba94e9ae59107a8bb1efe18a841afa8e61044e3ba3ddb = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860a8bb1efe18a841afa8e61044e3ba3ddb = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860a8bb1efe18a841afa8e61044e3ba3ddb) {
            $par0a0ce2af85ab462a808e0270326fb860a8bb1efe18a841afa8e61044e3ba3ddb = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcea8bb1efe18a841afa8e61044e3ba3ddb = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcea8bb1efe18a841afa8e61044e3ba3ddb) {
            $par5551ae677d6b488ebd38625d0f5d9fcea8bb1efe18a841afa8e61044e3ba3ddb = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcea8bb1efe18a841afa8e61044e3ba3ddb) {
            $par5551ae677d6b488ebd38625d0f5d9fcea8bb1efe18a841afa8e61044e3ba3ddb = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5a8bb1efe18a841afa8e61044e3ba3ddb = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5a8bb1efe18a841afa8e61044e3ba3ddb) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a8bb1efe18a841afa8e61044e3ba3ddb = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5a8bb1efe18a841afa8e61044e3ba3ddb) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5a8bb1efe18a841afa8e61044e3ba3ddb = '';
        }

        $va8bb1efe18a841afa8e61044e3ba3ddb = \App\repf782f923fd0247bd9f4010b717e52999::mtdb4d146678004fa890fcd7a237f83259($par6185a7056560433494dba94e9ae59107a8bb1efe18a841afa8e61044e3ba3ddb, $par0a0ce2af85ab462a808e0270326fb860a8bb1efe18a841afa8e61044e3ba3ddb, $par5551ae677d6b488ebd38625d0f5d9fcea8bb1efe18a841afa8e61044e3ba3ddb, $par8fce8a73ac264e4a8f3b56d8b991b8a5a8bb1efe18a841afa8e61044e3ba3ddb);

        $va8bb1efe18a841afa8e61044e3ba3ddbAjax = \URL::to('/').'/api/db4d146678004fa890fcd7a237f83259/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Recuperar Productor - Recuperar Productor

        $par81d62592acd84ddb8e7915b8e90881d2 = $request->input('u');

        if (null == $par81d62592acd84ddb8e7915b8e90881d2) {
            $par81d62592acd84ddb8e7915b8e90881d2 = '0';
        }

        $par6185a7056560433494dba94e9ae59107db06555daaae482a931ac9e00d2f7e6a = 0;

        if (null == $par6185a7056560433494dba94e9ae59107db06555daaae482a931ac9e00d2f7e6a) {
            $par6185a7056560433494dba94e9ae59107db06555daaae482a931ac9e00d2f7e6a = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb860db06555daaae482a931ac9e00d2f7e6a = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb860db06555daaae482a931ac9e00d2f7e6a) {
            $par0a0ce2af85ab462a808e0270326fb860db06555daaae482a931ac9e00d2f7e6a = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fcedb06555daaae482a931ac9e00d2f7e6a = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fcedb06555daaae482a931ac9e00d2f7e6a) {
            $par5551ae677d6b488ebd38625d0f5d9fcedb06555daaae482a931ac9e00d2f7e6a = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fcedb06555daaae482a931ac9e00d2f7e6a) {
            $par5551ae677d6b488ebd38625d0f5d9fcedb06555daaae482a931ac9e00d2f7e6a = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a5db06555daaae482a931ac9e00d2f7e6a = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a5db06555daaae482a931ac9e00d2f7e6a) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5db06555daaae482a931ac9e00d2f7e6a = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a5db06555daaae482a931ac9e00d2f7e6a) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a5db06555daaae482a931ac9e00d2f7e6a = '';
        }

        $vdb06555daaae482a931ac9e00d2f7e6a = \App\repf782f923fd0247bd9f4010b717e52999::mt87f3ff2a9cc344c58921f820b898209f($par81d62592acd84ddb8e7915b8e90881d2, $par6185a7056560433494dba94e9ae59107db06555daaae482a931ac9e00d2f7e6a, $par0a0ce2af85ab462a808e0270326fb860db06555daaae482a931ac9e00d2f7e6a, $par5551ae677d6b488ebd38625d0f5d9fcedb06555daaae482a931ac9e00d2f7e6a, $par8fce8a73ac264e4a8f3b56d8b991b8a5db06555daaae482a931ac9e00d2f7e6a);

        $vdb06555daaae482a931ac9e00d2f7e6aAjax = \URL::to('/').'/api/87f3ff2a9cc344c58921f820b898209f/'.(null == $par81d62592acd84ddb8e7915b8e90881d2 ? '-' : ('' == $par81d62592acd84ddb8e7915b8e90881d2 ? '-' : $par81d62592acd84ddb8e7915b8e90881d2)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // SP_LISTACP_ESTADOS - SP_LISTACP_ESTADOS

        $par6b5609fb363d4ac18c72085a3e89d8eb1 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $par6b5609fb363d4ac18c72085a3e89d8eb1) {
            $par6b5609fb363d4ac18c72085a3e89d8eb1 = '0';
        }

        $parca3dc4b167f24301aa66ce525ce9bcd41 = $request->input('u');

        if (null == $parca3dc4b167f24301aa66ce525ce9bcd41) {
            $parca3dc4b167f24301aa66ce525ce9bcd41 = '0';
        }

        $par6185a7056560433494dba94e9ae591072e9f772f21104d79b22d97cd50c597a5 = 0;

        if (null == $par6185a7056560433494dba94e9ae591072e9f772f21104d79b22d97cd50c597a5) {
            $par6185a7056560433494dba94e9ae591072e9f772f21104d79b22d97cd50c597a5 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8602e9f772f21104d79b22d97cd50c597a5 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8602e9f772f21104d79b22d97cd50c597a5) {
            $par0a0ce2af85ab462a808e0270326fb8602e9f772f21104d79b22d97cd50c597a5 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce2e9f772f21104d79b22d97cd50c597a5 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce2e9f772f21104d79b22d97cd50c597a5) {
            $par5551ae677d6b488ebd38625d0f5d9fce2e9f772f21104d79b22d97cd50c597a5 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce2e9f772f21104d79b22d97cd50c597a5) {
            $par5551ae677d6b488ebd38625d0f5d9fce2e9f772f21104d79b22d97cd50c597a5 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a52e9f772f21104d79b22d97cd50c597a5 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a52e9f772f21104d79b22d97cd50c597a5) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a52e9f772f21104d79b22d97cd50c597a5 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a52e9f772f21104d79b22d97cd50c597a5) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a52e9f772f21104d79b22d97cd50c597a5 = '';
        }

        $v2e9f772f21104d79b22d97cd50c597a5Ajax = \URL::to('/').'/api/0f00f028bdfe478b8490bcdbaa764ae0/'.(null == $par6b5609fb363d4ac18c72085a3e89d8eb1 ? '-' : ('' == $par6b5609fb363d4ac18c72085a3e89d8eb1 ? '-' : $par6b5609fb363d4ac18c72085a3e89d8eb1))."/'+encodeURIComponent((($('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()) != undefined && ($('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).length > 0 ? ($('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).replace(/\\./g,'---').replace(/\\//g,'___') : ($('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val())))+'/{page}/{pagesize}/{orderColumn}/{orderType}";

        // SP_LISTACP_MUNICIPIOS - SP_LISTACP_MUNICIPIOS

        $par86273de922bc43edb2d9e24c40402a061 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $par86273de922bc43edb2d9e24c40402a061) {
            $par86273de922bc43edb2d9e24c40402a061 = '0';
        }

        $parfb0a2e8676714ebfb7294b2638593d951 = $request->input('u');

        if (null == $parfb0a2e8676714ebfb7294b2638593d951) {
            $parfb0a2e8676714ebfb7294b2638593d951 = '0';
        }

        $par6185a7056560433494dba94e9ae591078ea533716ca84798b212ef2edc277cb6 = 0;

        if (null == $par6185a7056560433494dba94e9ae591078ea533716ca84798b212ef2edc277cb6) {
            $par6185a7056560433494dba94e9ae591078ea533716ca84798b212ef2edc277cb6 = '0';
        }

        $par0a0ce2af85ab462a808e0270326fb8608ea533716ca84798b212ef2edc277cb6 = 0;

        if (null == $par0a0ce2af85ab462a808e0270326fb8608ea533716ca84798b212ef2edc277cb6) {
            $par0a0ce2af85ab462a808e0270326fb8608ea533716ca84798b212ef2edc277cb6 = '0';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce8ea533716ca84798b212ef2edc277cb6 = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce8ea533716ca84798b212ef2edc277cb6) {
            $par5551ae677d6b488ebd38625d0f5d9fce8ea533716ca84798b212ef2edc277cb6 = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce8ea533716ca84798b212ef2edc277cb6) {
            $par5551ae677d6b488ebd38625d0f5d9fce8ea533716ca84798b212ef2edc277cb6 = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a58ea533716ca84798b212ef2edc277cb6 = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a58ea533716ca84798b212ef2edc277cb6) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a58ea533716ca84798b212ef2edc277cb6 = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a58ea533716ca84798b212ef2edc277cb6) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a58ea533716ca84798b212ef2edc277cb6 = '';
        }

        $v8ea533716ca84798b212ef2edc277cb6Ajax = \URL::to('/').'/api/7ca475f4dccc4ce0871a8830d204a78f/'.(null == $par86273de922bc43edb2d9e24c40402a061 ? '-' : ('' == $par86273de922bc43edb2d9e24c40402a061 ? '-' : $par86273de922bc43edb2d9e24c40402a061))."/'+encodeURIComponent((($('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()) != undefined && ($('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).length > 0 ? ($('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val()).replace(/\\./g,'---').replace(/\\//g,'___') : ($('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val() == '' ? '-' : $('#ctla9402eafc58d4182af463b802884e6c5_28b14532b6d84ad8a1c99add9963fd21{Extra}').val())))+'/{page}/{pagesize}/{orderColumn}/{orderType}";

        // sp_style_script_modal - sp_style_script_modal

        $parbfe99cbbc2764478a1146ed61dcfbe831 = $request->session()->get('ses5e122755c3a24f5d8789755168e9de27');

        if (null == $parbfe99cbbc2764478a1146ed61dcfbe831) {
            $parbfe99cbbc2764478a1146ed61dcfbe831 = '0';
        }

        $v4a021de58a344c32960a08292f88ce1f = \App\repf782f923fd0247bd9f4010b717e52999::mt591ad99632d243319383f35dda484b5d($parbfe99cbbc2764478a1146ed61dcfbe831);

        $v4a021de58a344c32960a08292f88ce1fAjax = \URL::to('/').'/api/591ad99632d243319383f35dda484b5d/'.(null == $parbfe99cbbc2764478a1146ed61dcfbe831 ? '-' : ('' == $parbfe99cbbc2764478a1146ed61dcfbe831 ? '-' : $parbfe99cbbc2764478a1146ed61dcfbe831)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        $arrWiths['vc96534fcd7604c38b359278eabc5d440'] = isset($vc96534fcd7604c38b359278eabc5d440) ? $vc96534fcd7604c38b359278eabc5d440 : '';
        $arrWiths['vc96534fcd7604c38b359278eabc5d440Ajax'] = isset($vc96534fcd7604c38b359278eabc5d440Ajax) ? $vc96534fcd7604c38b359278eabc5d440Ajax : '';
        $arrWiths['v042103f734734c7caa0dbcaae67beaf4'] = isset($v042103f734734c7caa0dbcaae67beaf4) ? $v042103f734734c7caa0dbcaae67beaf4 : '';
        $arrWiths['v042103f734734c7caa0dbcaae67beaf4Ajax'] = isset($v042103f734734c7caa0dbcaae67beaf4Ajax) ? $v042103f734734c7caa0dbcaae67beaf4Ajax : '';
        $arrWiths['v437f088dc63d480a8ae1e7d1206e6c98Ajax'] = isset($v437f088dc63d480a8ae1e7d1206e6c98Ajax) ? $v437f088dc63d480a8ae1e7d1206e6c98Ajax : '';
        $arrWiths['v0a9e3bd569ae4768b00e8071c5d02018Ajax'] = isset($v0a9e3bd569ae4768b00e8071c5d02018Ajax) ? $v0a9e3bd569ae4768b00e8071c5d02018Ajax : '';
        $arrWiths['v8c08d353e3e54b699c114ddb4ae3d752'] = isset($v8c08d353e3e54b699c114ddb4ae3d752) ? $v8c08d353e3e54b699c114ddb4ae3d752 : '';
        $arrWiths['v8c08d353e3e54b699c114ddb4ae3d752Ajax'] = isset($v8c08d353e3e54b699c114ddb4ae3d752Ajax) ? $v8c08d353e3e54b699c114ddb4ae3d752Ajax : '';
        $arrWiths['vcb7846af4d8d4d27b05add9f809cf430'] = isset($vcb7846af4d8d4d27b05add9f809cf430) ? $vcb7846af4d8d4d27b05add9f809cf430 : '';
        $arrWiths['vcb7846af4d8d4d27b05add9f809cf430Ajax'] = isset($vcb7846af4d8d4d27b05add9f809cf430Ajax) ? $vcb7846af4d8d4d27b05add9f809cf430Ajax : '';
        $arrWiths['ve5a769e478394e3dae5b09cf390f25e2Ajax'] = isset($ve5a769e478394e3dae5b09cf390f25e2Ajax) ? $ve5a769e478394e3dae5b09cf390f25e2Ajax : '';
        $arrWiths['ve29b31809f8f41b0936cc0fba27f1cb5'] = isset($ve29b31809f8f41b0936cc0fba27f1cb5) ? $ve29b31809f8f41b0936cc0fba27f1cb5 : '';
        $arrWiths['ve29b31809f8f41b0936cc0fba27f1cb5Ajax'] = isset($ve29b31809f8f41b0936cc0fba27f1cb5Ajax) ? $ve29b31809f8f41b0936cc0fba27f1cb5Ajax : '';
        $arrWiths['vd42eb9675e10404c932331259fed7107'] = isset($vd42eb9675e10404c932331259fed7107) ? $vd42eb9675e10404c932331259fed7107 : '';
        $arrWiths['vd42eb9675e10404c932331259fed7107Ajax'] = isset($vd42eb9675e10404c932331259fed7107Ajax) ? $vd42eb9675e10404c932331259fed7107Ajax : '';
        $arrWiths['va8bb1efe18a841afa8e61044e3ba3ddb'] = isset($va8bb1efe18a841afa8e61044e3ba3ddb) ? $va8bb1efe18a841afa8e61044e3ba3ddb : '';
        $arrWiths['va8bb1efe18a841afa8e61044e3ba3ddbAjax'] = isset($va8bb1efe18a841afa8e61044e3ba3ddbAjax) ? $va8bb1efe18a841afa8e61044e3ba3ddbAjax : '';
        $arrWiths['vdb06555daaae482a931ac9e00d2f7e6a'] = isset($vdb06555daaae482a931ac9e00d2f7e6a) ? $vdb06555daaae482a931ac9e00d2f7e6a : '';
        $arrWiths['vdb06555daaae482a931ac9e00d2f7e6aAjax'] = isset($vdb06555daaae482a931ac9e00d2f7e6aAjax) ? $vdb06555daaae482a931ac9e00d2f7e6aAjax : '';
        $arrWiths['v2e9f772f21104d79b22d97cd50c597a5Ajax'] = isset($v2e9f772f21104d79b22d97cd50c597a5Ajax) ? $v2e9f772f21104d79b22d97cd50c597a5Ajax : '';
        $arrWiths['v8ea533716ca84798b212ef2edc277cb6Ajax'] = isset($v8ea533716ca84798b212ef2edc277cb6Ajax) ? $v8ea533716ca84798b212ef2edc277cb6Ajax : '';
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
        $response = new \Illuminate\Http\Response(view('5c9ed508879e4e4eb5d18feef45caecd.Index', $arrWiths)->with('title', $arrWiths['title'])->with('vSessionTimeout', \Config::get('session.lifetime') * 60));

        return $response;
    }
}
