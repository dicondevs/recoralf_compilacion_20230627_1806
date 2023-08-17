<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:21
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * API Controller.
 */
class APIController extends Controller
{
    /**
     * Constructor of the Controller.
     */
    public function __construct()
    {
    }

    /**
     * alta estado region.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/820db9d260b9489dad7945b1140f3694/{par50a776d322e147f58cef1065444d4994CRUD_0}/{par0179af07461247b1b44e2433c3376cb4CRUD_0}/{paracc3e1bfe61448c8ab7ccc9a3492f70c}",
     *     description="alta estado region",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par50a776d322e147f58cef1065444d4994CRUD_0",
     *         in="path",
     *         description="FK_REGION",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="par0179af07461247b1b44e2433c3376cb4CRUD_0",
     *         in="path",
     *         description="FL_ACTIVO_INACTIVO",
     *         required=true,
     *         type="boolean"
     *     ),

     *     @SWG\Parameter(
     *         name="paracc3e1bfe61448c8ab7ccc9a3492f70c",
     *         in="path",
     *         description="PK_ESTADOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * alta estado region - alta estado region.
     *
     * @param par50a776d322e147f58cef1065444d4994CRUD_0 FK_REGION
     * @param par0179af07461247b1b44e2433c3376cb4CRUD_0 FL_ACTIVO_INACTIVO
     * @param paracc3e1bfe61448c8ab7ccc9a3492f70c PK_ESTADOS
     */
    public function mt820db9d260b9489dad7945b1140f3694(Request $request, $par50a776d322e147f58cef1065444d4994CRUD_0 = null, $par0179af07461247b1b44e2433c3376cb4CRUD_0 = null, $paracc3e1bfe61448c8ab7ccc9a3492f70c = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        \App\repf782f923fd0247bd9f4010b717e52999::mt820db9d260b9489dad7945b1140f3694($par50a776d322e147f58cef1065444d4994CRUD_0, $par0179af07461247b1b44e2433c3376cb4CRUD_0, $paracc3e1bfe61448c8ab7ccc9a3492f70c);

        return '';
    }

    /**
     * Atras a nacional.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f35696538cc64241804354007662239e/{parf59fd70d2c1d4a43adf57b74fb9a3f62}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Atras a nacional",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parf59fd70d2c1d4a43adf57b74fb9a3f62",
     *         in="path",
     *         description="PK_REGION",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbf35696538cc64241804354007662239e"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Atras a nacional - Atras a nacional.
     *
     * @param parf59fd70d2c1d4a43adf57b74fb9a3f62 PK_REGION
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbf35696538cc64241804354007662239e
     */
    public function mtf35696538cc64241804354007662239e(Request $request, $parf59fd70d2c1d4a43adf57b74fb9a3f62 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtf35696538cc64241804354007662239e($parf59fd70d2c1d4a43adf57b74fb9a3f62, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Atras a nacional.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f35696538cc64241804354007662239eCount/{parf59fd70d2c1d4a43adf57b74fb9a3f62}",
     *     description="Atras a nacional - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parf59fd70d2c1d4a43adf57b74fb9a3f62",
     *         in="path",
     *         description="PK_REGION",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Atras a nacional - Atras a nacional.
     *
     * @param parf59fd70d2c1d4a43adf57b74fb9a3f62 PK_REGION
     *
     * @return Count of tbf35696538cc64241804354007662239e
     */
    public function mtf35696538cc64241804354007662239eCount(Request $request, $parf59fd70d2c1d4a43adf57b74fb9a3f62 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtf35696538cc64241804354007662239eCount($parf59fd70d2c1d4a43adf57b74fb9a3f62, 0, 0, '', ''));
    }

    /**
     * Atras Cenrto de trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0f85e7f90e4e4850b28e92068761a6fc/{pard38be9539132490683970958b0b0c8e2}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Atras Cenrto de trabajo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pard38be9539132490683970958b0b0c8e2",
     *         in="path",
     *         description="PK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb0f85e7f90e4e4850b28e92068761a6fc"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Atras Cenrto de trabajo - Atras Cenrto de trabajo.
     *
     * @param pard38be9539132490683970958b0b0c8e2 PK_CENTROS_TRABAJO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb0f85e7f90e4e4850b28e92068761a6fc
     */
    public function mt0f85e7f90e4e4850b28e92068761a6fc(Request $request, $pard38be9539132490683970958b0b0c8e2 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt0f85e7f90e4e4850b28e92068761a6fc($pard38be9539132490683970958b0b0c8e2, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Atras Cenrto de trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0f85e7f90e4e4850b28e92068761a6fcCount/{pard38be9539132490683970958b0b0c8e2}",
     *     description="Atras Cenrto de trabajo - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pard38be9539132490683970958b0b0c8e2",
     *         in="path",
     *         description="PK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Atras Cenrto de trabajo - Atras Cenrto de trabajo.
     *
     * @param pard38be9539132490683970958b0b0c8e2 PK_CENTROS_TRABAJO
     *
     * @return Count of tb0f85e7f90e4e4850b28e92068761a6fc
     */
    public function mt0f85e7f90e4e4850b28e92068761a6fcCount(Request $request, $pard38be9539132490683970958b0b0c8e2 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt0f85e7f90e4e4850b28e92068761a6fcCount($pard38be9539132490683970958b0b0c8e2, 0, 0, '', ''));
    }

    /**
     * Atras Estados.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a489748fbc8341d79bd4293b8d598dd6/{par46d6d1c21d4d4ba0a2021763b4935886}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Atras Estados",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par46d6d1c21d4d4ba0a2021763b4935886",
     *         in="path",
     *         description="PK_ESTADOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tba489748fbc8341d79bd4293b8d598dd6"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Atras Estados - Atras Estados.
     *
     * @param par46d6d1c21d4d4ba0a2021763b4935886 PK_ESTADOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tba489748fbc8341d79bd4293b8d598dd6
     */
    public function mta489748fbc8341d79bd4293b8d598dd6(Request $request, $par46d6d1c21d4d4ba0a2021763b4935886 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mta489748fbc8341d79bd4293b8d598dd6($par46d6d1c21d4d4ba0a2021763b4935886, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Atras Estados.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a489748fbc8341d79bd4293b8d598dd6Count/{par46d6d1c21d4d4ba0a2021763b4935886}",
     *     description="Atras Estados - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par46d6d1c21d4d4ba0a2021763b4935886",
     *         in="path",
     *         description="PK_ESTADOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Atras Estados - Atras Estados.
     *
     * @param par46d6d1c21d4d4ba0a2021763b4935886 PK_ESTADOS
     *
     * @return Count of tba489748fbc8341d79bd4293b8d598dd6
     */
    public function mta489748fbc8341d79bd4293b8d598dd6Count(Request $request, $par46d6d1c21d4d4ba0a2021763b4935886 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mta489748fbc8341d79bd4293b8d598dd6Count($par46d6d1c21d4d4ba0a2021763b4935886, 0, 0, '', ''));
    }

    /**
     * Coleccion aceptado/rechazado.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/1e85a51a7460425b9aaca542e4317283/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Coleccion aceptado/rechazado",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb1e85a51a7460425b9aaca542e4317283"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion aceptado/rechazado - Coleccion aceptado/rechazado.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb1e85a51a7460425b9aaca542e4317283
     */
    public function mt1e85a51a7460425b9aaca542e4317283(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt1e85a51a7460425b9aaca542e4317283($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Coleccion aceptado/rechazado.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/1e85a51a7460425b9aaca542e4317283Count",
     *     description="Coleccion aceptado/rechazado - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion aceptado/rechazado - Coleccion aceptado/rechazado.
     *
     * @return Count of tb1e85a51a7460425b9aaca542e4317283
     */
    public function mt1e85a51a7460425b9aaca542e4317283Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt1e85a51a7460425b9aaca542e4317283Count(0, 0, '', ''));
    }

    /**
     * Colección activo e inactivo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/30537a680d42439baf88e670eb555322/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Colección activo e inactivo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb30537a680d42439baf88e670eb555322"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Colección activo e inactivo - Colección activo e inactivo.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb30537a680d42439baf88e670eb555322
     */
    public function mt30537a680d42439baf88e670eb555322(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt30537a680d42439baf88e670eb555322($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Colección activo e inactivo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/30537a680d42439baf88e670eb555322Count",
     *     description="Colección activo e inactivo - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Colección activo e inactivo - Colección activo e inactivo.
     *
     * @return Count of tb30537a680d42439baf88e670eb555322
     */
    public function mt30537a680d42439baf88e670eb555322Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt30537a680d42439baf88e670eb555322Count(0, 0, '', ''));
    }

    /**
     * Coleccion alcohol +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/736ef8c9724044ee90a11292b544103e/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Coleccion alcohol +/-",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb736ef8c9724044ee90a11292b544103e"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion alcohol +/- - Coleccion alcohol +/-.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb736ef8c9724044ee90a11292b544103e
     */
    public function mt736ef8c9724044ee90a11292b544103e(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt736ef8c9724044ee90a11292b544103e($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Coleccion alcohol +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/736ef8c9724044ee90a11292b544103eCount",
     *     description="Coleccion alcohol +/- - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion alcohol +/- - Coleccion alcohol +/-.
     *
     * @return Count of tb736ef8c9724044ee90a11292b544103e
     */
    public function mt736ef8c9724044ee90a11292b544103eCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt736ef8c9724044ee90a11292b544103eCount(0, 0, '', ''));
    }

    /**
     * Coleccion antibioticos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/25fd0a4e7a4e45b2989d9bc8014bf714/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Coleccion antibioticos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb25fd0a4e7a4e45b2989d9bc8014bf714"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion antibioticos - Coleccion antibioticos.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb25fd0a4e7a4e45b2989d9bc8014bf714
     */
    public function mt25fd0a4e7a4e45b2989d9bc8014bf714(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt25fd0a4e7a4e45b2989d9bc8014bf714($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Coleccion antibioticos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/25fd0a4e7a4e45b2989d9bc8014bf714Count",
     *     description="Coleccion antibioticos - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion antibioticos - Coleccion antibioticos.
     *
     * @return Count of tb25fd0a4e7a4e45b2989d9bc8014bf714
     */
    public function mt25fd0a4e7a4e45b2989d9bc8014bf714Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt25fd0a4e7a4e45b2989d9bc8014bf714Count(0, 0, '', ''));
    }

    /**
     * Coleccion compuesto +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7ea65e64bf6f4242ba8a263a5b27eab5/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Coleccion compuesto +/-",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb7ea65e64bf6f4242ba8a263a5b27eab5"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion compuesto +/- - Coleccion compuesto +/-.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb7ea65e64bf6f4242ba8a263a5b27eab5
     */
    public function mt7ea65e64bf6f4242ba8a263a5b27eab5(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt7ea65e64bf6f4242ba8a263a5b27eab5($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Coleccion compuesto +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7ea65e64bf6f4242ba8a263a5b27eab5Count",
     *     description="Coleccion compuesto +/- - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion compuesto +/- - Coleccion compuesto +/-.
     *
     * @return Count of tb7ea65e64bf6f4242ba8a263a5b27eab5
     */
    public function mt7ea65e64bf6f4242ba8a263a5b27eab5Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt7ea65e64bf6f4242ba8a263a5b27eab5Count(0, 0, '', ''));
    }

    /**
     * Coleccion derivado +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7ec75251c10d4427ac558b6ec592e5fe/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Coleccion derivado +/-",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb7ec75251c10d4427ac558b6ec592e5fe"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion derivado +/- - Coleccion derivado +/-.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb7ec75251c10d4427ac558b6ec592e5fe
     */
    public function mt7ec75251c10d4427ac558b6ec592e5fe(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt7ec75251c10d4427ac558b6ec592e5fe($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Coleccion derivado +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7ec75251c10d4427ac558b6ec592e5feCount",
     *     description="Coleccion derivado +/- - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion derivado +/- - Coleccion derivado +/-.
     *
     * @return Count of tb7ec75251c10d4427ac558b6ec592e5fe
     */
    public function mt7ec75251c10d4427ac558b6ec592e5feCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt7ec75251c10d4427ac558b6ec592e5feCount(0, 0, '', ''));
    }

    /**
     * Coleccion formaldehido +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9018af07a8a64e00954e09446c2c45f5/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Coleccion formaldehido +/-",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb9018af07a8a64e00954e09446c2c45f5"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion formaldehido +/- - Coleccion formaldehido +/-.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb9018af07a8a64e00954e09446c2c45f5
     */
    public function mt9018af07a8a64e00954e09446c2c45f5(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt9018af07a8a64e00954e09446c2c45f5($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Coleccion formaldehido +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9018af07a8a64e00954e09446c2c45f5Count",
     *     description="Coleccion formaldehido +/- - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion formaldehido +/- - Coleccion formaldehido +/-.
     *
     * @return Count of tb9018af07a8a64e00954e09446c2c45f5
     */
    public function mt9018af07a8a64e00954e09446c2c45f5Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt9018af07a8a64e00954e09446c2c45f5Count(0, 0, '', ''));
    }

    /**
     * Coleccion organoleptica +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/11426b5b366c43e089350a1ce7d0fd2f/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Coleccion organoleptica +/-",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb11426b5b366c43e089350a1ce7d0fd2f"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion organoleptica +/- - Coleccion organoleptica +/-.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb11426b5b366c43e089350a1ce7d0fd2f
     */
    public function mt11426b5b366c43e089350a1ce7d0fd2f(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt11426b5b366c43e089350a1ce7d0fd2f($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Coleccion organoleptica +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/11426b5b366c43e089350a1ce7d0fd2fCount",
     *     description="Coleccion organoleptica +/- - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion organoleptica +/- - Coleccion organoleptica +/-.
     *
     * @return Count of tb11426b5b366c43e089350a1ce7d0fd2f
     */
    public function mt11426b5b366c43e089350a1ce7d0fd2fCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt11426b5b366c43e089350a1ce7d0fd2fCount(0, 0, '', ''));
    }

    /**
     * Coleccion peroxido +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/20ec8da550b141339911320f086ae2c0/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Coleccion peroxido +/-",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb20ec8da550b141339911320f086ae2c0"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion peroxido +/- - Coleccion peroxido +/-.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb20ec8da550b141339911320f086ae2c0
     */
    public function mt20ec8da550b141339911320f086ae2c0(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt20ec8da550b141339911320f086ae2c0($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Coleccion peroxido +/-.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/20ec8da550b141339911320f086ae2c0Count",
     *     description="Coleccion peroxido +/- - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion peroxido +/- - Coleccion peroxido +/-.
     *
     * @return Count of tb20ec8da550b141339911320f086ae2c0
     */
    public function mt20ec8da550b141339911320f086ae2c0Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt20ec8da550b141339911320f086ae2c0Count(0, 0, '', ''));
    }

    /**
     * Coleccion Turno.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e800c6c9266049ac89aa6b57c3d3512e/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Coleccion Turno",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbe800c6c9266049ac89aa6b57c3d3512e"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion Turno - Coleccion Turno.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbe800c6c9266049ac89aa6b57c3d3512e
     */
    public function mte800c6c9266049ac89aa6b57c3d3512e(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mte800c6c9266049ac89aa6b57c3d3512e($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Coleccion Turno.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e800c6c9266049ac89aa6b57c3d3512eCount",
     *     description="Coleccion Turno - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Coleccion Turno - Coleccion Turno.
     *
     * @return Count of tbe800c6c9266049ac89aa6b57c3d3512e
     */
    public function mte800c6c9266049ac89aa6b57c3d3512eCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mte800c6c9266049ac89aa6b57c3d3512eCount(0, 0, '', ''));
    }

    /**
     * CP.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d4d75f888ae8472984646d2e1c0230ac/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="CP",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbd4d75f888ae8472984646d2e1c0230ac"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * CP - CP.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbd4d75f888ae8472984646d2e1c0230ac
     */
    public function mtd4d75f888ae8472984646d2e1c0230ac(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtd4d75f888ae8472984646d2e1c0230ac($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * CP.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d4d75f888ae8472984646d2e1c0230acCount",
     *     description="CP - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * CP - CP.
     *
     * @return Count of tbd4d75f888ae8472984646d2e1c0230ac
     */
    public function mtd4d75f888ae8472984646d2e1c0230acCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtd4d75f888ae8472984646d2e1c0230acCount(0, 0, '', ''));
    }

    /**
     * Lista Alcohol Pipa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/31f42dbc44324b34b7d33abae4e52bdc/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Alcohol Pipa",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb31f42dbc44324b34b7d33abae4e52bdc"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Alcohol Pipa - Lista Alcohol Pipa.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb31f42dbc44324b34b7d33abae4e52bdc
     */
    public function mt31f42dbc44324b34b7d33abae4e52bdc(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt31f42dbc44324b34b7d33abae4e52bdc($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Alcohol Pipa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/31f42dbc44324b34b7d33abae4e52bdcCount",
     *     description="Lista Alcohol Pipa - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Alcohol Pipa - Lista Alcohol Pipa.
     *
     * @return Count of tb31f42dbc44324b34b7d33abae4e52bdc
     */
    public function mt31f42dbc44324b34b7d33abae4e52bdcCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt31f42dbc44324b34b7d33abae4e52bdcCount(0, 0, '', ''));
    }

    /**
     * Lista Alcohol Silo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c54f7c7473ce482d8350884b8e32bc9c/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Alcohol Silo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbc54f7c7473ce482d8350884b8e32bc9c"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Alcohol Silo - Lista Alcohol Silo.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbc54f7c7473ce482d8350884b8e32bc9c
     */
    public function mtc54f7c7473ce482d8350884b8e32bc9c(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtc54f7c7473ce482d8350884b8e32bc9c($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Alcohol Silo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c54f7c7473ce482d8350884b8e32bc9cCount",
     *     description="Lista Alcohol Silo - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Alcohol Silo - Lista Alcohol Silo.
     *
     * @return Count of tbc54f7c7473ce482d8350884b8e32bc9c
     */
    public function mtc54f7c7473ce482d8350884b8e32bc9cCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtc54f7c7473ce482d8350884b8e32bc9cCount(0, 0, '', ''));
    }

    /**
     * Lista Antibióticos Pipa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e490e8baae984bf296ebdcbfdbdaf826/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Antibióticos Pipa",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbe490e8baae984bf296ebdcbfdbdaf826"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Antibióticos Pipa - Lista Antibióticos Pipa.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbe490e8baae984bf296ebdcbfdbdaf826
     */
    public function mte490e8baae984bf296ebdcbfdbdaf826(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mte490e8baae984bf296ebdcbfdbdaf826($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Antibióticos Pipa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e490e8baae984bf296ebdcbfdbdaf826Count",
     *     description="Lista Antibióticos Pipa - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Antibióticos Pipa - Lista Antibióticos Pipa.
     *
     * @return Count of tbe490e8baae984bf296ebdcbfdbdaf826
     */
    public function mte490e8baae984bf296ebdcbfdbdaf826Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mte490e8baae984bf296ebdcbfdbdaf826Count(0, 0, '', ''));
    }

    /**
     * Lista Antibióticos Silo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2bd88b8bbb23417aa14d7a1d9e547233/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Antibióticos Silo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb2bd88b8bbb23417aa14d7a1d9e547233"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Antibióticos Silo - Lista Antibióticos Silo.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb2bd88b8bbb23417aa14d7a1d9e547233
     */
    public function mt2bd88b8bbb23417aa14d7a1d9e547233(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt2bd88b8bbb23417aa14d7a1d9e547233($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Antibióticos Silo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2bd88b8bbb23417aa14d7a1d9e547233Count",
     *     description="Lista Antibióticos Silo - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Antibióticos Silo - Lista Antibióticos Silo.
     *
     * @return Count of tb2bd88b8bbb23417aa14d7a1d9e547233
     */
    public function mt2bd88b8bbb23417aa14d7a1d9e547233Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt2bd88b8bbb23417aa14d7a1d9e547233Count(0, 0, '', ''));
    }

    /**
     * Lista capuchón.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/55ba4aaba4e246ef95bbc9a5b39bac65/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista capuchón",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb55ba4aaba4e246ef95bbc9a5b39bac65"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista capuchón  - Lista capuchón.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb55ba4aaba4e246ef95bbc9a5b39bac65
     */
    public function mt55ba4aaba4e246ef95bbc9a5b39bac65(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt55ba4aaba4e246ef95bbc9a5b39bac65($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista capuchón.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/55ba4aaba4e246ef95bbc9a5b39bac65Count",
     *     description="Lista capuchón - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista capuchón  - Lista capuchón.
     *
     * @return Count of tb55ba4aaba4e246ef95bbc9a5b39bac65
     */
    public function mt55ba4aaba4e246ef95bbc9a5b39bac65Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt55ba4aaba4e246ef95bbc9a5b39bac65Count(0, 0, '', ''));
    }

    /**
     * Lista Centro Acopio User.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0ad408e6cdba422d8190d00390c930d3/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Centro Acopio User",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb0ad408e6cdba422d8190d00390c930d3"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Centro Acopio User - Lista Centro Acopio User.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb0ad408e6cdba422d8190d00390c930d3
     */
    public function mt0ad408e6cdba422d8190d00390c930d3(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt0ad408e6cdba422d8190d00390c930d3($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Centro Acopio User.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0ad408e6cdba422d8190d00390c930d3Count",
     *     description="Lista Centro Acopio User - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Centro Acopio User - Lista Centro Acopio User.
     *
     * @return Count of tb0ad408e6cdba422d8190d00390c930d3
     */
    public function mt0ad408e6cdba422d8190d00390c930d3Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt0ad408e6cdba422d8190d00390c930d3Count(0, 0, '', ''));
    }

    /**
     * Lista charola.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6c1e9c993ac64caf9861437cfb78157b/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista charola",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb6c1e9c993ac64caf9861437cfb78157b"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista charola - Lista charola.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb6c1e9c993ac64caf9861437cfb78157b
     */
    public function mt6c1e9c993ac64caf9861437cfb78157b(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt6c1e9c993ac64caf9861437cfb78157b($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista charola.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6c1e9c993ac64caf9861437cfb78157bCount",
     *     description="Lista charola - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista charola - Lista charola.
     *
     * @return Count of tb6c1e9c993ac64caf9861437cfb78157b
     */
    public function mt6c1e9c993ac64caf9861437cfb78157bCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt6c1e9c993ac64caf9861437cfb78157bCount(0, 0, '', ''));
    }

    /**
     * Lista contratapa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/44426308c9a9413f862efe5c86db6b20/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista contratapa",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb44426308c9a9413f862efe5c86db6b20"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista contratapa - Lista contratapa.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb44426308c9a9413f862efe5c86db6b20
     */
    public function mt44426308c9a9413f862efe5c86db6b20(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt44426308c9a9413f862efe5c86db6b20($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista contratapa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/44426308c9a9413f862efe5c86db6b20Count",
     *     description="Lista contratapa - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista contratapa - Lista contratapa.
     *
     * @return Count of tb44426308c9a9413f862efe5c86db6b20
     */
    public function mt44426308c9a9413f862efe5c86db6b20Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt44426308c9a9413f862efe5c86db6b20Count(0, 0, '', ''));
    }

    /**
     * Lista Crioscopia Pipa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ba52a1ac8d894a1f9a15709e1b630024/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Crioscopia Pipa",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbba52a1ac8d894a1f9a15709e1b630024"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Crioscopia Pipa - Lista Crioscopia Pipa.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbba52a1ac8d894a1f9a15709e1b630024
     */
    public function mtba52a1ac8d894a1f9a15709e1b630024(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtba52a1ac8d894a1f9a15709e1b630024($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Crioscopia Pipa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ba52a1ac8d894a1f9a15709e1b630024Count",
     *     description="Lista Crioscopia Pipa - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Crioscopia Pipa - Lista Crioscopia Pipa.
     *
     * @return Count of tbba52a1ac8d894a1f9a15709e1b630024
     */
    public function mtba52a1ac8d894a1f9a15709e1b630024Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtba52a1ac8d894a1f9a15709e1b630024Count(0, 0, '', ''));
    }

    /**
     * Lista Crioscopia Silo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/246c982729f5469ebcce749d45b4199c/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Crioscopia Silo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb246c982729f5469ebcce749d45b4199c"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Crioscopia Silo - Lista Crioscopia Silo.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb246c982729f5469ebcce749d45b4199c
     */
    public function mt246c982729f5469ebcce749d45b4199c(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt246c982729f5469ebcce749d45b4199c($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Crioscopia Silo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/246c982729f5469ebcce749d45b4199cCount",
     *     description="Lista Crioscopia Silo - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Crioscopia Silo - Lista Crioscopia Silo.
     *
     * @return Count of tb246c982729f5469ebcce749d45b4199c
     */
    public function mt246c982729f5469ebcce749d45b4199cCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt246c982729f5469ebcce749d45b4199cCount(0, 0, '', ''));
    }

    /**
     * Lista cuerpo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7cffeaf8fdce4dd6bb758433ec243150/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista cuerpo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb7cffeaf8fdce4dd6bb758433ec243150"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista cuerpo  - Lista cuerpo.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb7cffeaf8fdce4dd6bb758433ec243150
     */
    public function mt7cffeaf8fdce4dd6bb758433ec243150(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt7cffeaf8fdce4dd6bb758433ec243150($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista cuerpo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7cffeaf8fdce4dd6bb758433ec243150Count",
     *     description="Lista cuerpo - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista cuerpo  - Lista cuerpo.
     *
     * @return Count of tb7cffeaf8fdce4dd6bb758433ec243150
     */
    public function mt7cffeaf8fdce4dd6bb758433ec243150Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt7cffeaf8fdce4dd6bb758433ec243150Count(0, 0, '', ''));
    }

    /**
     * Lista de Bancos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2060f98099844820b4d7c107cdea42c5/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Bancos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb2060f98099844820b4d7c107cdea42c5"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Bancos - Lista de Bancos.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb2060f98099844820b4d7c107cdea42c5
     */
    public function mt2060f98099844820b4d7c107cdea42c5(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt2060f98099844820b4d7c107cdea42c5($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Bancos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2060f98099844820b4d7c107cdea42c5Count",
     *     description="Lista de Bancos - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Bancos - Lista de Bancos.
     *
     * @return Count of tb2060f98099844820b4d7c107cdea42c5
     */
    public function mt2060f98099844820b4d7c107cdea42c5Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt2060f98099844820b4d7c107cdea42c5Count(0, 0, '', ''));
    }

    /**
     * Lista de carac de leche a entregar.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/48e61ec9722046979c8bb305a6922ac3/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de caracteristicas de leche a entregar",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb48e61ec9722046979c8bb305a6922ac3"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de carac de leche a entregar - Lista de caracteristicas de leche a entregar.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb48e61ec9722046979c8bb305a6922ac3
     */
    public function mt48e61ec9722046979c8bb305a6922ac3(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt48e61ec9722046979c8bb305a6922ac3($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de carac de leche a entregar.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/48e61ec9722046979c8bb305a6922ac3Count",
     *     description="Lista de caracteristicas de leche a entregar - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de carac de leche a entregar - Lista de caracteristicas de leche a entregar.
     *
     * @return Count of tb48e61ec9722046979c8bb305a6922ac3
     */
    public function mt48e61ec9722046979c8bb305a6922ac3Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt48e61ec9722046979c8bb305a6922ac3Count(0, 0, '', ''));
    }

    /**
     * Lista de Centros de Acopio.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ae8e9cfbd4174125aa0ae9597c5ded2f/{pardd3780b5691843b4b7e62ed23891ccc6}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Centros de Acopio",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pardd3780b5691843b4b7e62ed23891ccc6",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbae8e9cfbd4174125aa0ae9597c5ded2f"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Centros de Acopio - Lista de Centros de Acopio.
     *
     * @param pardd3780b5691843b4b7e62ed23891ccc6 FK_CENTROS_TRABAJO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbae8e9cfbd4174125aa0ae9597c5ded2f
     */
    public function mtae8e9cfbd4174125aa0ae9597c5ded2f(Request $request, $pardd3780b5691843b4b7e62ed23891ccc6 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtae8e9cfbd4174125aa0ae9597c5ded2f($pardd3780b5691843b4b7e62ed23891ccc6, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Centros de Acopio.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ae8e9cfbd4174125aa0ae9597c5ded2fCount/{pardd3780b5691843b4b7e62ed23891ccc6}",
     *     description="Lista de Centros de Acopio - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pardd3780b5691843b4b7e62ed23891ccc6",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Centros de Acopio - Lista de Centros de Acopio.
     *
     * @param pardd3780b5691843b4b7e62ed23891ccc6 FK_CENTROS_TRABAJO
     *
     * @return Count of tbae8e9cfbd4174125aa0ae9597c5ded2f
     */
    public function mtae8e9cfbd4174125aa0ae9597c5ded2fCount(Request $request, $pardd3780b5691843b4b7e62ed23891ccc6 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtae8e9cfbd4174125aa0ae9597c5ded2fCount($pardd3780b5691843b4b7e62ed23891ccc6, 0, 0, '', ''));
    }

    /**
     * Lista de Centros de Trabajos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/5a1d9d566ef8489daca48684bc6e3ba1/{par4bf6a056ccbc4668908ee1961f073ffb}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Centros de Trabajos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par4bf6a056ccbc4668908ee1961f073ffb",
     *         in="path",
     *         description="FK_ESTADO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb5a1d9d566ef8489daca48684bc6e3ba1"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Centros de Trabajos - Lista de Centros de Trabajos.
     *
     * @param par4bf6a056ccbc4668908ee1961f073ffb FK_ESTADO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb5a1d9d566ef8489daca48684bc6e3ba1
     */
    public function mt5a1d9d566ef8489daca48684bc6e3ba1(Request $request, $par4bf6a056ccbc4668908ee1961f073ffb = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt5a1d9d566ef8489daca48684bc6e3ba1($par4bf6a056ccbc4668908ee1961f073ffb, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Centros de Trabajos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/5a1d9d566ef8489daca48684bc6e3ba1Count/{par4bf6a056ccbc4668908ee1961f073ffb}",
     *     description="Lista de Centros de Trabajos - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par4bf6a056ccbc4668908ee1961f073ffb",
     *         in="path",
     *         description="FK_ESTADO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Centros de Trabajos - Lista de Centros de Trabajos.
     *
     * @param par4bf6a056ccbc4668908ee1961f073ffb FK_ESTADO
     *
     * @return Count of tb5a1d9d566ef8489daca48684bc6e3ba1
     */
    public function mt5a1d9d566ef8489daca48684bc6e3ba1Count(Request $request, $par4bf6a056ccbc4668908ee1961f073ffb = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt5a1d9d566ef8489daca48684bc6e3ba1Count($par4bf6a056ccbc4668908ee1961f073ffb, 0, 0, '', ''));
    }

    /**
     * Lista de Centros de Trabajos Todo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/85df7a461c854558b85b8e2466ff1014/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Centros de Trabajos Todo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb85df7a461c854558b85b8e2466ff1014"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Centros de Trabajos Todo - Lista de Centros de Trabajos Todo.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb85df7a461c854558b85b8e2466ff1014
     */
    public function mt85df7a461c854558b85b8e2466ff1014(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt85df7a461c854558b85b8e2466ff1014($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Centros de Trabajos Todo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/85df7a461c854558b85b8e2466ff1014Count",
     *     description="Lista de Centros de Trabajos Todo - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Centros de Trabajos Todo - Lista de Centros de Trabajos Todo.
     *
     * @return Count of tb85df7a461c854558b85b8e2466ff1014
     */
    public function mt85df7a461c854558b85b8e2466ff1014Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt85df7a461c854558b85b8e2466ff1014Count(0, 0, '', ''));
    }

    /**
     * Lista de codigo de productores.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9e40ffa9a31b44749cefa339b29163b1/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de codigo de productores",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb9e40ffa9a31b44749cefa339b29163b1"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de codigo de productores - Lista de codigo de productores.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb9e40ffa9a31b44749cefa339b29163b1
     */
    public function mt9e40ffa9a31b44749cefa339b29163b1(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt9e40ffa9a31b44749cefa339b29163b1($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de codigo de productores.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9e40ffa9a31b44749cefa339b29163b1Count",
     *     description="Lista de codigo de productores - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de codigo de productores - Lista de codigo de productores.
     *
     * @return Count of tb9e40ffa9a31b44749cefa339b29163b1
     */
    public function mt9e40ffa9a31b44749cefa339b29163b1Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt9e40ffa9a31b44749cefa339b29163b1Count(0, 0, '', ''));
    }

    /**
     * Lista de Estados.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/abea1b31ebd541018e0ac1aeeb09858a/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Estados",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbabea1b31ebd541018e0ac1aeeb09858a"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Estados - Lista de Estados.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbabea1b31ebd541018e0ac1aeeb09858a
     */
    public function mtabea1b31ebd541018e0ac1aeeb09858a(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtabea1b31ebd541018e0ac1aeeb09858a($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Estados.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/abea1b31ebd541018e0ac1aeeb09858aCount",
     *     description="Lista de Estados - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Estados - Lista de Estados.
     *
     * @return Count of tbabea1b31ebd541018e0ac1aeeb09858a
     */
    public function mtabea1b31ebd541018e0ac1aeeb09858aCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtabea1b31ebd541018e0ac1aeeb09858aCount(0, 0, '', ''));
    }

    /**
     * Lista de Estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/72f2e450ab2b47bda5a2a8c3f517d948/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Estatus",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb72f2e450ab2b47bda5a2a8c3f517d948"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Estatus - Lista de Estatus.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb72f2e450ab2b47bda5a2a8c3f517d948
     */
    public function mt72f2e450ab2b47bda5a2a8c3f517d948(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt72f2e450ab2b47bda5a2a8c3f517d948($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/72f2e450ab2b47bda5a2a8c3f517d948Count",
     *     description="Lista de Estatus - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Estatus - Lista de Estatus.
     *
     * @return Count of tb72f2e450ab2b47bda5a2a8c3f517d948
     */
    public function mt72f2e450ab2b47bda5a2a8c3f517d948Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt72f2e450ab2b47bda5a2a8c3f517d948Count(0, 0, '', ''));
    }

    /**
     * Lista de Estatus Productores.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f71637318de04de6aaa679753a07499b/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Estatus Productores",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbf71637318de04de6aaa679753a07499b"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Estatus Productores - Lista de Estatus Productores.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbf71637318de04de6aaa679753a07499b
     */
    public function mtf71637318de04de6aaa679753a07499b(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtf71637318de04de6aaa679753a07499b($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Estatus Productores.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f71637318de04de6aaa679753a07499bCount",
     *     description="Lista de Estatus Productores - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Estatus Productores - Lista de Estatus Productores.
     *
     * @return Count of tbf71637318de04de6aaa679753a07499b
     */
    public function mtf71637318de04de6aaa679753a07499bCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtf71637318de04de6aaa679753a07499bCount(0, 0, '', ''));
    }

    /**
     * Lista de Lugar.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a64061d55b1c4e4883871fdf7ed1dfea/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Lugar",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tba64061d55b1c4e4883871fdf7ed1dfea"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Lugar - Lista de Lugar.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tba64061d55b1c4e4883871fdf7ed1dfea
     */
    public function mta64061d55b1c4e4883871fdf7ed1dfea(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mta64061d55b1c4e4883871fdf7ed1dfea($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Lugar.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a64061d55b1c4e4883871fdf7ed1dfeaCount",
     *     description="Lista de Lugar - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Lugar - Lista de Lugar.
     *
     * @return Count of tba64061d55b1c4e4883871fdf7ed1dfea
     */
    public function mta64061d55b1c4e4883871fdf7ed1dfeaCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mta64061d55b1c4e4883871fdf7ed1dfeaCount(0, 0, '', ''));
    }

    /**
     * Lista de Menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0c6c6f77495247fa889579c85be10e7e/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Menu",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb0c6c6f77495247fa889579c85be10e7e"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Menu - Lista de Menu.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb0c6c6f77495247fa889579c85be10e7e
     */
    public function mt0c6c6f77495247fa889579c85be10e7e(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt0c6c6f77495247fa889579c85be10e7e($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0c6c6f77495247fa889579c85be10e7eCount",
     *     description="Lista de Menu - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Menu - Lista de Menu.
     *
     * @return Count of tb0c6c6f77495247fa889579c85be10e7e
     */
    public function mt0c6c6f77495247fa889579c85be10e7eCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt0c6c6f77495247fa889579c85be10e7eCount(0, 0, '', ''));
    }

    /**
     * Lista de municipios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9866c32545064a31a6b35587ee0c898e/{parcc42f42ce11443a889eba7ceaeec5dd7}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de municipios",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parcc42f42ce11443a889eba7ceaeec5dd7",
     *         in="path",
     *         description="FK_ESTADO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb9866c32545064a31a6b35587ee0c898e"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de municipios - Lista de municipios.
     *
     * @param parcc42f42ce11443a889eba7ceaeec5dd7 FK_ESTADO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb9866c32545064a31a6b35587ee0c898e
     */
    public function mt9866c32545064a31a6b35587ee0c898e(Request $request, $parcc42f42ce11443a889eba7ceaeec5dd7 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt9866c32545064a31a6b35587ee0c898e($parcc42f42ce11443a889eba7ceaeec5dd7, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de municipios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9866c32545064a31a6b35587ee0c898eCount/{parcc42f42ce11443a889eba7ceaeec5dd7}",
     *     description="Lista de municipios - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parcc42f42ce11443a889eba7ceaeec5dd7",
     *         in="path",
     *         description="FK_ESTADO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de municipios - Lista de municipios.
     *
     * @param parcc42f42ce11443a889eba7ceaeec5dd7 FK_ESTADO
     *
     * @return Count of tb9866c32545064a31a6b35587ee0c898e
     */
    public function mt9866c32545064a31a6b35587ee0c898eCount(Request $request, $parcc42f42ce11443a889eba7ceaeec5dd7 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt9866c32545064a31a6b35587ee0c898eCount($parcc42f42ce11443a889eba7ceaeec5dd7, 0, 0, '', ''));
    }

    /**
     * Lista de perfil.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/43cb5f4c6f0143c5a135334d93bebb71/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de perfil",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb43cb5f4c6f0143c5a135334d93bebb71"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de perfil - Lista de perfil.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb43cb5f4c6f0143c5a135334d93bebb71
     */
    public function mt43cb5f4c6f0143c5a135334d93bebb71(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt43cb5f4c6f0143c5a135334d93bebb71($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de perfil.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/43cb5f4c6f0143c5a135334d93bebb71Count",
     *     description="Lista de perfil - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de perfil - Lista de perfil.
     *
     * @return Count of tb43cb5f4c6f0143c5a135334d93bebb71
     */
    public function mt43cb5f4c6f0143c5a135334d93bebb71Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt43cb5f4c6f0143c5a135334d93bebb71Count(0, 0, '', ''));
    }

    /**
     * Lista de productores.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e96769148d30486ebd47bda320d82ff1/{par0deb795ee65f4979ab5f49e12e31f902}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de productores",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par0deb795ee65f4979ab5f49e12e31f902",
     *         in="path",
     *         description="PK_PRODUCTOR",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbe96769148d30486ebd47bda320d82ff1"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de productores - Lista de productores.
     *
     * @param par0deb795ee65f4979ab5f49e12e31f902 PK_PRODUCTOR
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbe96769148d30486ebd47bda320d82ff1
     */
    public function mte96769148d30486ebd47bda320d82ff1(Request $request, $par0deb795ee65f4979ab5f49e12e31f902 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mte96769148d30486ebd47bda320d82ff1($par0deb795ee65f4979ab5f49e12e31f902, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de productores.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e96769148d30486ebd47bda320d82ff1Count/{par0deb795ee65f4979ab5f49e12e31f902}",
     *     description="Lista de productores - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par0deb795ee65f4979ab5f49e12e31f902",
     *         in="path",
     *         description="PK_PRODUCTOR",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de productores - Lista de productores.
     *
     * @param par0deb795ee65f4979ab5f49e12e31f902 PK_PRODUCTOR
     *
     * @return Count of tbe96769148d30486ebd47bda320d82ff1
     */
    public function mte96769148d30486ebd47bda320d82ff1Count(Request $request, $par0deb795ee65f4979ab5f49e12e31f902 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mte96769148d30486ebd47bda320d82ff1Count($par0deb795ee65f4979ab5f49e12e31f902, 0, 0, '', ''));
    }

    /**
     * Lista de pruebas no caracteristicas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/5f8dfa3d49e34584903973973a9d82a0/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de pruebas no caracteristicas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb5f8dfa3d49e34584903973973a9d82a0"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de pruebas no caracteristicas - Lista de pruebas no caracteristicas.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb5f8dfa3d49e34584903973973a9d82a0
     */
    public function mt5f8dfa3d49e34584903973973a9d82a0(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt5f8dfa3d49e34584903973973a9d82a0($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de pruebas no caracteristicas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/5f8dfa3d49e34584903973973a9d82a0Count",
     *     description="Lista de pruebas no caracteristicas - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de pruebas no caracteristicas - Lista de pruebas no caracteristicas.
     *
     * @return Count of tb5f8dfa3d49e34584903973973a9d82a0
     */
    public function mt5f8dfa3d49e34584903973973a9d82a0Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt5f8dfa3d49e34584903973973a9d82a0Count(0, 0, '', ''));
    }

    /**
     * Lista de Regiones.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f12e049b27704a27adda948b2a000735/{para41b236e627a42338af1b142c4af67cd}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Regiones",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="para41b236e627a42338af1b142c4af67cd",
     *         in="path",
     *         description="FK_NACIONAL",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbf12e049b27704a27adda948b2a000735"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Regiones - Lista de Regiones.
     *
     * @param para41b236e627a42338af1b142c4af67cd FK_NACIONAL
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbf12e049b27704a27adda948b2a000735
     */
    public function mtf12e049b27704a27adda948b2a000735(Request $request, $para41b236e627a42338af1b142c4af67cd = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtf12e049b27704a27adda948b2a000735($para41b236e627a42338af1b142c4af67cd, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Regiones.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f12e049b27704a27adda948b2a000735Count/{para41b236e627a42338af1b142c4af67cd}",
     *     description="Lista de Regiones - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="para41b236e627a42338af1b142c4af67cd",
     *         in="path",
     *         description="FK_NACIONAL",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Regiones - Lista de Regiones.
     *
     * @param para41b236e627a42338af1b142c4af67cd FK_NACIONAL
     *
     * @return Count of tbf12e049b27704a27adda948b2a000735
     */
    public function mtf12e049b27704a27adda948b2a000735Count(Request $request, $para41b236e627a42338af1b142c4af67cd = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtf12e049b27704a27adda948b2a000735Count($para41b236e627a42338af1b142c4af67cd, 0, 0, '', ''));
    }

    /**
     * Lista de tamaño de productor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/61a556104c174df3831a01053dfb6ead/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de tamaño de productor",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb61a556104c174df3831a01053dfb6ead"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de tamaño de productor - Lista de tamaño de productor.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb61a556104c174df3831a01053dfb6ead
     */
    public function mt61a556104c174df3831a01053dfb6ead(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt61a556104c174df3831a01053dfb6ead($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de tamaño de productor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/61a556104c174df3831a01053dfb6eadCount",
     *     description="Lista de tamaño de productor - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de tamaño de productor - Lista de tamaño de productor.
     *
     * @return Count of tb61a556104c174df3831a01053dfb6ead
     */
    public function mt61a556104c174df3831a01053dfb6eadCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt61a556104c174df3831a01053dfb6eadCount(0, 0, '', ''));
    }

    /**
     * Lista de Usuaros por Centro de Trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/5375e2c238d840eab1d71e94438ae827/{parf40be115e4c04dedadee447ccad1bf8f}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista de Usuaros por Centro de Trabajo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parf40be115e4c04dedadee447ccad1bf8f",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb5375e2c238d840eab1d71e94438ae827"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Usuaros por Centro de Trabajo - Lista de Usuaros por Centro de Trabajo.
     *
     * @param parf40be115e4c04dedadee447ccad1bf8f FK_CENTROS_TRABAJO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb5375e2c238d840eab1d71e94438ae827
     */
    public function mt5375e2c238d840eab1d71e94438ae827(Request $request, $parf40be115e4c04dedadee447ccad1bf8f = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt5375e2c238d840eab1d71e94438ae827($parf40be115e4c04dedadee447ccad1bf8f, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista de Usuaros por Centro de Trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/5375e2c238d840eab1d71e94438ae827Count/{parf40be115e4c04dedadee447ccad1bf8f}",
     *     description="Lista de Usuaros por Centro de Trabajo - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parf40be115e4c04dedadee447ccad1bf8f",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista de Usuaros por Centro de Trabajo - Lista de Usuaros por Centro de Trabajo.
     *
     * @param parf40be115e4c04dedadee447ccad1bf8f FK_CENTROS_TRABAJO
     *
     * @return Count of tb5375e2c238d840eab1d71e94438ae827
     */
    public function mt5375e2c238d840eab1d71e94438ae827Count(Request $request, $parf40be115e4c04dedadee447ccad1bf8f = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt5375e2c238d840eab1d71e94438ae827Count($parf40be115e4c04dedadee447ccad1bf8f, 0, 0, '', ''));
    }

    /**
     * Lista destino Traspasos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e3cc05c54ee14625884b2c78a60507f2/{par0bce3d93324147809756c596a16b80511}/{par5da21dd228434592b8abf080098c5b351}/{par082f0933a71f4d17b03065c003ef3bab1}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista destino Traspasos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par0bce3d93324147809756c596a16b80511",
     *         in="path",
     *         description="Param1",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par5da21dd228434592b8abf080098c5b351",
     *         in="path",
     *         description="Param2",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par082f0933a71f4d17b03065c003ef3bab1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbe3cc05c54ee14625884b2c78a60507f2"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista destino Traspasos - Lista destino Traspasos.
     *
     * @param par0bce3d93324147809756c596a16b80511 Param1
     * @param par5da21dd228434592b8abf080098c5b351 Param2
     * @param par082f0933a71f4d17b03065c003ef3bab1 prm_username
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbe3cc05c54ee14625884b2c78a60507f2
     */
    public function mte3cc05c54ee14625884b2c78a60507f2(Request $request, $par0bce3d93324147809756c596a16b80511 = null, $par5da21dd228434592b8abf080098c5b351 = null, $par082f0933a71f4d17b03065c003ef3bab1 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mte3cc05c54ee14625884b2c78a60507f2($par0bce3d93324147809756c596a16b80511, $par5da21dd228434592b8abf080098c5b351, $par082f0933a71f4d17b03065c003ef3bab1, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista destino Traspasos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e3cc05c54ee14625884b2c78a60507f2Count/{par0bce3d93324147809756c596a16b80511}/{par5da21dd228434592b8abf080098c5b351}/{par082f0933a71f4d17b03065c003ef3bab1}",
     *     description="Lista destino Traspasos - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par0bce3d93324147809756c596a16b80511",
     *         in="path",
     *         description="Param1",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par5da21dd228434592b8abf080098c5b351",
     *         in="path",
     *         description="Param2",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par082f0933a71f4d17b03065c003ef3bab1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista destino Traspasos - Lista destino Traspasos.
     *
     * @param par0bce3d93324147809756c596a16b80511 Param1
     * @param par5da21dd228434592b8abf080098c5b351 Param2
     * @param par082f0933a71f4d17b03065c003ef3bab1 prm_username
     *
     * @return Count of tbe3cc05c54ee14625884b2c78a60507f2
     */
    public function mte3cc05c54ee14625884b2c78a60507f2Count(Request $request, $par0bce3d93324147809756c596a16b80511 = null, $par5da21dd228434592b8abf080098c5b351 = null, $par082f0933a71f4d17b03065c003ef3bab1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mte3cc05c54ee14625884b2c78a60507f2Count($par0bce3d93324147809756c596a16b80511, $par5da21dd228434592b8abf080098c5b351, $par082f0933a71f4d17b03065c003ef3bab1, 0, 0, '', ''));
    }

    /**
     * Lista empaques.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7d8e860cbe2d4b0d8a3635179437d484/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista empaques",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb7d8e860cbe2d4b0d8a3635179437d484"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista empaques - Lista empaques.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb7d8e860cbe2d4b0d8a3635179437d484
     */
    public function mt7d8e860cbe2d4b0d8a3635179437d484(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt7d8e860cbe2d4b0d8a3635179437d484($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista empaques.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7d8e860cbe2d4b0d8a3635179437d484Count",
     *     description="Lista empaques - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista empaques - Lista empaques.
     *
     * @return Count of tb7d8e860cbe2d4b0d8a3635179437d484
     */
    public function mt7d8e860cbe2d4b0d8a3635179437d484Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt7d8e860cbe2d4b0d8a3635179437d484Count(0, 0, '', ''));
    }

    /**
     * Lista escalera.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/518f941c789d428eb9b6514f1ac40dd5/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista escalera",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb518f941c789d428eb9b6514f1ac40dd5"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista escalera - Lista escalera.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb518f941c789d428eb9b6514f1ac40dd5
     */
    public function mt518f941c789d428eb9b6514f1ac40dd5(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt518f941c789d428eb9b6514f1ac40dd5($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista escalera.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/518f941c789d428eb9b6514f1ac40dd5Count",
     *     description="Lista escalera - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista escalera - Lista escalera.
     *
     * @return Count of tb518f941c789d428eb9b6514f1ac40dd5
     */
    public function mt518f941c789d428eb9b6514f1ac40dd5Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt518f941c789d428eb9b6514f1ac40dd5Count(0, 0, '', ''));
    }

    /**
     * Lista escotilla.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/b1c02e85ae0f4ff78aa966f2795138a1/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista escotilla",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbb1c02e85ae0f4ff78aa966f2795138a1"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista escotilla - Lista escotilla.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbb1c02e85ae0f4ff78aa966f2795138a1
     */
    public function mtb1c02e85ae0f4ff78aa966f2795138a1(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtb1c02e85ae0f4ff78aa966f2795138a1($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista escotilla.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/b1c02e85ae0f4ff78aa966f2795138a1Count",
     *     description="Lista escotilla - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista escotilla - Lista escotilla.
     *
     * @return Count of tbb1c02e85ae0f4ff78aa966f2795138a1
     */
    public function mtb1c02e85ae0f4ff78aa966f2795138a1Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtb1c02e85ae0f4ff78aa966f2795138a1Count(0, 0, '', ''));
    }

    /**
     * Lista estatus traspaso.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/65e30fd006c1486d83cc4f9d62306c9c/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista estatus traspaso",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb65e30fd006c1486d83cc4f9d62306c9c"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista estatus traspaso - Lista estatus traspaso.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb65e30fd006c1486d83cc4f9d62306c9c
     */
    public function mt65e30fd006c1486d83cc4f9d62306c9c(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt65e30fd006c1486d83cc4f9d62306c9c($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista estatus traspaso.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/65e30fd006c1486d83cc4f9d62306c9cCount",
     *     description="Lista estatus traspaso - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista estatus traspaso - Lista estatus traspaso.
     *
     * @return Count of tb65e30fd006c1486d83cc4f9d62306c9c
     */
    public function mt65e30fd006c1486d83cc4f9d62306c9cCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt65e30fd006c1486d83cc4f9d62306c9cCount(0, 0, '', ''));
    }

    /**
     * Lista faldones.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3c80facc2a2b442385e09e9da5625a06/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista faldones",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb3c80facc2a2b442385e09e9da5625a06"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista faldones - Lista faldones.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb3c80facc2a2b442385e09e9da5625a06
     */
    public function mt3c80facc2a2b442385e09e9da5625a06(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt3c80facc2a2b442385e09e9da5625a06($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista faldones.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3c80facc2a2b442385e09e9da5625a06Count",
     *     description="Lista faldones - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista faldones - Lista faldones.
     *
     * @return Count of tb3c80facc2a2b442385e09e9da5625a06
     */
    public function mt3c80facc2a2b442385e09e9da5625a06Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt3c80facc2a2b442385e09e9da5625a06Count(0, 0, '', ''));
    }

    /**
     * Lista Forma de Pago.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d0c4777555334065bbc2eb29c13aba00/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Forma de Pago",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbd0c4777555334065bbc2eb29c13aba00"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Forma de Pago - Lista Forma de Pago.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbd0c4777555334065bbc2eb29c13aba00
     */
    public function mtd0c4777555334065bbc2eb29c13aba00(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtd0c4777555334065bbc2eb29c13aba00($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Forma de Pago.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d0c4777555334065bbc2eb29c13aba00Count",
     *     description="Lista Forma de Pago - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Forma de Pago - Lista Forma de Pago.
     *
     * @return Count of tbd0c4777555334065bbc2eb29c13aba00
     */
    public function mtd0c4777555334065bbc2eb29c13aba00Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtd0c4777555334065bbc2eb29c13aba00Count(0, 0, '', ''));
    }

    /**
     * Lista interior tanque.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e9ff0b7206354b19b0546c7eb486f4cb/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista interior tanque",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbe9ff0b7206354b19b0546c7eb486f4cb"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista interior tanque - Lista interior tanque.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbe9ff0b7206354b19b0546c7eb486f4cb
     */
    public function mte9ff0b7206354b19b0546c7eb486f4cb(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mte9ff0b7206354b19b0546c7eb486f4cb($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista interior tanque.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e9ff0b7206354b19b0546c7eb486f4cbCount",
     *     description="Lista interior tanque - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista interior tanque - Lista interior tanque.
     *
     * @return Count of tbe9ff0b7206354b19b0546c7eb486f4cb
     */
    public function mte9ff0b7206354b19b0546c7eb486f4cbCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mte9ff0b7206354b19b0546c7eb486f4cbCount(0, 0, '', ''));
    }

    /**
     * Lista llantas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/4340391af3384d74947d9abc4010b220/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista llantas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb4340391af3384d74947d9abc4010b220"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista llantas - Lista llantas.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb4340391af3384d74947d9abc4010b220
     */
    public function mt4340391af3384d74947d9abc4010b220(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt4340391af3384d74947d9abc4010b220($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista llantas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/4340391af3384d74947d9abc4010b220Count",
     *     description="Lista llantas - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista llantas - Lista llantas.
     *
     * @return Count of tb4340391af3384d74947d9abc4010b220
     */
    public function mt4340391af3384d74947d9abc4010b220Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt4340391af3384d74947d9abc4010b220Count(0, 0, '', ''));
    }

    /**
     * Lista Localidad.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2d133b9efb4445e182266241e4b38e05/{par8e53624dfd1a4b888828e844e94e4e57}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Localidad",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8e53624dfd1a4b888828e844e94e4e57",
     *         in="path",
     *         description="FK_MUNICIPIO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb2d133b9efb4445e182266241e4b38e05"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Localidad - Lista Localidad.
     *
     * @param par8e53624dfd1a4b888828e844e94e4e57 FK_MUNICIPIO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb2d133b9efb4445e182266241e4b38e05
     */
    public function mt2d133b9efb4445e182266241e4b38e05(Request $request, $par8e53624dfd1a4b888828e844e94e4e57 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt2d133b9efb4445e182266241e4b38e05($par8e53624dfd1a4b888828e844e94e4e57, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Localidad.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2d133b9efb4445e182266241e4b38e05Count/{par8e53624dfd1a4b888828e844e94e4e57}",
     *     description="Lista Localidad - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8e53624dfd1a4b888828e844e94e4e57",
     *         in="path",
     *         description="FK_MUNICIPIO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Localidad - Lista Localidad.
     *
     * @param par8e53624dfd1a4b888828e844e94e4e57 FK_MUNICIPIO
     *
     * @return Count of tb2d133b9efb4445e182266241e4b38e05
     */
    public function mt2d133b9efb4445e182266241e4b38e05Count(Request $request, $par8e53624dfd1a4b888828e844e94e4e57 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt2d133b9efb4445e182266241e4b38e05Count($par8e53624dfd1a4b888828e844e94e4e57, 0, 0, '', ''));
    }

    /**
     * Lista maguera desague.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/715e85d375384acb8a53d003a826c4a2/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista maguera desague",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb715e85d375384acb8a53d003a826c4a2"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista maguera desague - Lista maguera desague.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb715e85d375384acb8a53d003a826c4a2
     */
    public function mt715e85d375384acb8a53d003a826c4a2(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt715e85d375384acb8a53d003a826c4a2($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista maguera desague.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/715e85d375384acb8a53d003a826c4a2Count",
     *     description="Lista maguera desague - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista maguera desague - Lista maguera desague.
     *
     * @return Count of tb715e85d375384acb8a53d003a826c4a2
     */
    public function mt715e85d375384acb8a53d003a826c4a2Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt715e85d375384acb8a53d003a826c4a2Count(0, 0, '', ''));
    }

    /**
     * Lista periodo de entrega.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/38ed84f2e36443e1986a1d7c3701b4fa/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista periodo de entrega",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb38ed84f2e36443e1986a1d7c3701b4fa"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista periodo de entrega - Lista periodo de entrega.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb38ed84f2e36443e1986a1d7c3701b4fa
     */
    public function mt38ed84f2e36443e1986a1d7c3701b4fa(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt38ed84f2e36443e1986a1d7c3701b4fa($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista periodo de entrega.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/38ed84f2e36443e1986a1d7c3701b4faCount",
     *     description="Lista periodo de entrega - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista periodo de entrega - Lista periodo de entrega.
     *
     * @return Count of tb38ed84f2e36443e1986a1d7c3701b4fa
     */
    public function mt38ed84f2e36443e1986a1d7c3701b4faCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt38ed84f2e36443e1986a1d7c3701b4faCount(0, 0, '', ''));
    }

    /**
     * Lista respiradero.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e5dc3b3c8ca344ccb3ffcdca95f15aa3/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista respiradero",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbe5dc3b3c8ca344ccb3ffcdca95f15aa3"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista respiradero - Lista respiradero.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbe5dc3b3c8ca344ccb3ffcdca95f15aa3
     */
    public function mte5dc3b3c8ca344ccb3ffcdca95f15aa3(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mte5dc3b3c8ca344ccb3ffcdca95f15aa3($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista respiradero.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e5dc3b3c8ca344ccb3ffcdca95f15aa3Count",
     *     description="Lista respiradero - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista respiradero - Lista respiradero.
     *
     * @return Count of tbe5dc3b3c8ca344ccb3ffcdca95f15aa3
     */
    public function mte5dc3b3c8ca344ccb3ffcdca95f15aa3Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mte5dc3b3c8ca344ccb3ffcdca95f15aa3Count(0, 0, '', ''));
    }

    /**
     * Lista Rines Carro.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/b0fb4f59811049ed88c25355af9a85a1/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Rines de Carro",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbb0fb4f59811049ed88c25355af9a85a1"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Rines Carro - Lista Rines de Carro.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbb0fb4f59811049ed88c25355af9a85a1
     */
    public function mtb0fb4f59811049ed88c25355af9a85a1(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtb0fb4f59811049ed88c25355af9a85a1($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Rines Carro.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/b0fb4f59811049ed88c25355af9a85a1Count",
     *     description="Lista Rines de Carro - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Rines Carro - Lista Rines de Carro.
     *
     * @return Count of tbb0fb4f59811049ed88c25355af9a85a1
     */
    public function mtb0fb4f59811049ed88c25355af9a85a1Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtb0fb4f59811049ed88c25355af9a85a1Count(0, 0, '', ''));
    }

    /**
     * Lista rines Tanque.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/00dcdb93a91d4165b99254a42fef7cd0/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista rines Tanque",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb00dcdb93a91d4165b99254a42fef7cd0"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista rines Tanque - Lista rines Tanque.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb00dcdb93a91d4165b99254a42fef7cd0
     */
    public function mt00dcdb93a91d4165b99254a42fef7cd0(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt00dcdb93a91d4165b99254a42fef7cd0($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista rines Tanque.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/00dcdb93a91d4165b99254a42fef7cd0Count",
     *     description="Lista rines Tanque - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista rines Tanque - Lista rines Tanque.
     *
     * @return Count of tb00dcdb93a91d4165b99254a42fef7cd0
     */
    public function mt00dcdb93a91d4165b99254a42fef7cd0Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt00dcdb93a91d4165b99254a42fef7cd0Count(0, 0, '', ''));
    }

    /**
     * Lista sanitización.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/365768f7185545de92339e17a03af353/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista sanitización",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb365768f7185545de92339e17a03af353"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista sanitización - Lista sanitización.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb365768f7185545de92339e17a03af353
     */
    public function mt365768f7185545de92339e17a03af353(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt365768f7185545de92339e17a03af353($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista sanitización.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/365768f7185545de92339e17a03af353Count",
     *     description="Lista sanitización - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista sanitización - Lista sanitización.
     *
     * @return Count of tb365768f7185545de92339e17a03af353
     */
    public function mt365768f7185545de92339e17a03af353Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt365768f7185545de92339e17a03af353Count(0, 0, '', ''));
    }

    /**
     * Lista Si/No Color.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a45ba0c141a849e4a22262c2f3b3dece/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Si/No Color",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tba45ba0c141a849e4a22262c2f3b3dece"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/No Color - Lista Si/No Color.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tba45ba0c141a849e4a22262c2f3b3dece
     */
    public function mta45ba0c141a849e4a22262c2f3b3dece(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mta45ba0c141a849e4a22262c2f3b3dece($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Si/No Color.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a45ba0c141a849e4a22262c2f3b3deceCount",
     *     description="Lista Si/No Color - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/No Color - Lista Si/No Color.
     *
     * @return Count of tba45ba0c141a849e4a22262c2f3b3dece
     */
    public function mta45ba0c141a849e4a22262c2f3b3deceCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mta45ba0c141a849e4a22262c2f3b3deceCount(0, 0, '', ''));
    }

    /**
     * Lista Si/No Exces MAt Ext.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f60ce8cfb24740688244d679a0d17123/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Si/No Exces MAt Ext",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbf60ce8cfb24740688244d679a0d17123"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/No Exces MAt Ext - Lista Si/No Exces MAt Ext.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbf60ce8cfb24740688244d679a0d17123
     */
    public function mtf60ce8cfb24740688244d679a0d17123(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtf60ce8cfb24740688244d679a0d17123($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Si/No Exces MAt Ext.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f60ce8cfb24740688244d679a0d17123Count",
     *     description="Lista Si/No Exces MAt Ext - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/No Exces MAt Ext - Lista Si/No Exces MAt Ext.
     *
     * @return Count of tbf60ce8cfb24740688244d679a0d17123
     */
    public function mtf60ce8cfb24740688244d679a0d17123Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtf60ce8cfb24740688244d679a0d17123Count(0, 0, '', ''));
    }

    /**
     * Lista Si/no Olor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/db296e8ac1854fd7a592a5752ea7bcaf/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Si/no Olor",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbdb296e8ac1854fd7a592a5752ea7bcaf"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/no Olor - Lista Si/no Olor.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbdb296e8ac1854fd7a592a5752ea7bcaf
     */
    public function mtdb296e8ac1854fd7a592a5752ea7bcaf(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtdb296e8ac1854fd7a592a5752ea7bcaf($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Si/no Olor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/db296e8ac1854fd7a592a5752ea7bcafCount",
     *     description="Lista Si/no Olor - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/no Olor - Lista Si/no Olor.
     *
     * @return Count of tbdb296e8ac1854fd7a592a5752ea7bcaf
     */
    public function mtdb296e8ac1854fd7a592a5752ea7bcafCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtdb296e8ac1854fd7a592a5752ea7bcafCount(0, 0, '', ''));
    }

    /**
     * Lista Si/No Otras Espec.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/53997ac5439443aa8f5c702938e1d88e/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Si/No Otras Espec",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb53997ac5439443aa8f5c702938e1d88e"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/No Otras Espec - Lista Si/No Otras Espec.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb53997ac5439443aa8f5c702938e1d88e
     */
    public function mt53997ac5439443aa8f5c702938e1d88e(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt53997ac5439443aa8f5c702938e1d88e($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Si/No Otras Espec.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/53997ac5439443aa8f5c702938e1d88eCount",
     *     description="Lista Si/No Otras Espec - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/No Otras Espec - Lista Si/No Otras Espec.
     *
     * @return Count of tb53997ac5439443aa8f5c702938e1d88e
     */
    public function mt53997ac5439443aa8f5c702938e1d88eCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt53997ac5439443aa8f5c702938e1d88eCount(0, 0, '', ''));
    }

    /**
     * Lista Si/No Sabor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3d05a7040bbe4ea0b8e84c446dd46702/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Si/No Sabor",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb3d05a7040bbe4ea0b8e84c446dd46702"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/No Sabor - Lista Si/No Sabor.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb3d05a7040bbe4ea0b8e84c446dd46702
     */
    public function mt3d05a7040bbe4ea0b8e84c446dd46702(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt3d05a7040bbe4ea0b8e84c446dd46702($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Si/No Sabor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3d05a7040bbe4ea0b8e84c446dd46702Count",
     *     description="Lista Si/No Sabor - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Si/No Sabor - Lista Si/No Sabor.
     *
     * @return Count of tb3d05a7040bbe4ea0b8e84c446dd46702
     */
    public function mt3d05a7040bbe4ea0b8e84c446dd46702Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt3d05a7040bbe4ea0b8e84c446dd46702Count(0, 0, '', ''));
    }

    /**
     * Lista superficie exterior.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/b1cd541dfb554079b3b179005e6d3426/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista superficie exterior",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbb1cd541dfb554079b3b179005e6d3426"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista superficie exterior - Lista superficie exterior.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbb1cd541dfb554079b3b179005e6d3426
     */
    public function mtb1cd541dfb554079b3b179005e6d3426(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtb1cd541dfb554079b3b179005e6d3426($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista superficie exterior.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/b1cd541dfb554079b3b179005e6d3426Count",
     *     description="Lista superficie exterior - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista superficie exterior - Lista superficie exterior.
     *
     * @return Count of tbb1cd541dfb554079b3b179005e6d3426
     */
    public function mtb1cd541dfb554079b3b179005e6d3426Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtb1cd541dfb554079b3b179005e6d3426Count(0, 0, '', ''));
    }

    /**
     * Lista Superficie Exterior Carro.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3dc48d8506c94f9fb696d344fdd1151e/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Superficie Exterior de Carro",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb3dc48d8506c94f9fb696d344fdd1151e"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Superficie Exterior Carro - Lista Superficie Exterior de Carro.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb3dc48d8506c94f9fb696d344fdd1151e
     */
    public function mt3dc48d8506c94f9fb696d344fdd1151e(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt3dc48d8506c94f9fb696d344fdd1151e($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Superficie Exterior Carro.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3dc48d8506c94f9fb696d344fdd1151eCount",
     *     description="Lista Superficie Exterior de Carro - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Superficie Exterior Carro - Lista Superficie Exterior de Carro.
     *
     * @return Count of tb3dc48d8506c94f9fb696d344fdd1151e
     */
    public function mt3dc48d8506c94f9fb696d344fdd1151eCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt3dc48d8506c94f9fb696d344fdd1151eCount(0, 0, '', ''));
    }

    /**
     * LISTA TANQUE EXTERIOR.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/056970e937444b42a835206f8cf1d4e7/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="LISTA TANQUE EXTERIOR",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb056970e937444b42a835206f8cf1d4e7"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * LISTA TANQUE EXTERIOR - LISTA TANQUE EXTERIOR.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb056970e937444b42a835206f8cf1d4e7
     */
    public function mt056970e937444b42a835206f8cf1d4e7(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt056970e937444b42a835206f8cf1d4e7($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * LISTA TANQUE EXTERIOR.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/056970e937444b42a835206f8cf1d4e7Count",
     *     description="LISTA TANQUE EXTERIOR - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * LISTA TANQUE EXTERIOR - LISTA TANQUE EXTERIOR.
     *
     * @return Count of tb056970e937444b42a835206f8cf1d4e7
     */
    public function mt056970e937444b42a835206f8cf1d4e7Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt056970e937444b42a835206f8cf1d4e7Count(0, 0, '', ''));
    }

    /**
     * Lista tapa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/153015fb7978480389370e4150287f2f/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista tapa",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb153015fb7978480389370e4150287f2f"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista tapa - Lista tapa.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb153015fb7978480389370e4150287f2f
     */
    public function mt153015fb7978480389370e4150287f2f(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt153015fb7978480389370e4150287f2f($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista tapa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/153015fb7978480389370e4150287f2fCount",
     *     description="Lista tapa - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista tapa - Lista tapa.
     *
     * @return Count of tb153015fb7978480389370e4150287f2f
     */
    public function mt153015fb7978480389370e4150287f2fCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt153015fb7978480389370e4150287f2fCount(0, 0, '', ''));
    }

    /**
     * Lista tapón ciego.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0d5bd295ef444c62847f24d99cc21c7d/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista tapón ciego",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb0d5bd295ef444c62847f24d99cc21c7d"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista tapón ciego - Lista tapón ciego.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb0d5bd295ef444c62847f24d99cc21c7d
     */
    public function mt0d5bd295ef444c62847f24d99cc21c7d(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt0d5bd295ef444c62847f24d99cc21c7d($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista tapón ciego.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0d5bd295ef444c62847f24d99cc21c7dCount",
     *     description="Lista tapón ciego - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista tapón ciego - Lista tapón ciego.
     *
     * @return Count of tb0d5bd295ef444c62847f24d99cc21c7d
     */
    public function mt0d5bd295ef444c62847f24d99cc21c7dCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt0d5bd295ef444c62847f24d99cc21c7dCount(0, 0, '', ''));
    }

    /**
     * Lista tipo de transporte.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/db4d146678004fa890fcd7a237f83259/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista tipo de transporte",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbdb4d146678004fa890fcd7a237f83259"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista tipo de transporte - Lista tipo de transporte.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbdb4d146678004fa890fcd7a237f83259
     */
    public function mtdb4d146678004fa890fcd7a237f83259(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtdb4d146678004fa890fcd7a237f83259($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista tipo de transporte.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/db4d146678004fa890fcd7a237f83259Count",
     *     description="Lista tipo de transporte - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista tipo de transporte - Lista tipo de transporte.
     *
     * @return Count of tbdb4d146678004fa890fcd7a237f83259
     */
    public function mtdb4d146678004fa890fcd7a237f83259Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtdb4d146678004fa890fcd7a237f83259Count(0, 0, '', ''));
    }

    /**
     * Lista valvula.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e5eedd92f3004863b8d1b148322cdaa6/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista valvula",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbe5eedd92f3004863b8d1b148322cdaa6"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista valvula - Lista valvula.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbe5eedd92f3004863b8d1b148322cdaa6
     */
    public function mte5eedd92f3004863b8d1b148322cdaa6(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mte5eedd92f3004863b8d1b148322cdaa6($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista valvula.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e5eedd92f3004863b8d1b148322cdaa6Count",
     *     description="Lista valvula - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista valvula - Lista valvula.
     *
     * @return Count of tbe5eedd92f3004863b8d1b148322cdaa6
     */
    public function mte5eedd92f3004863b8d1b148322cdaa6Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mte5eedd92f3004863b8d1b148322cdaa6Count(0, 0, '', ''));
    }

    /**
     * Lista vidrios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/296963b06560434787ded17b40323e00/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista vidrios",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb296963b06560434787ded17b40323e00"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista vidrios - Lista vidrios.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb296963b06560434787ded17b40323e00
     */
    public function mt296963b06560434787ded17b40323e00(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt296963b06560434787ded17b40323e00($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista vidrios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/296963b06560434787ded17b40323e00Count",
     *     description="Lista vidrios - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista vidrios - Lista vidrios.
     *
     * @return Count of tb296963b06560434787ded17b40323e00
     */
    public function mt296963b06560434787ded17b40323e00Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt296963b06560434787ded17b40323e00Count(0, 0, '', ''));
    }

    /**
     * Modelador Boletas Semanas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/203dcfc17e354b038afdb62d24b2e913/{par39bedec193a54615beb54d9b6484be8a}/{par708c184650d94901b621b577d4577e2f}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Boletas Semanas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par39bedec193a54615beb54d9b6484be8a",
     *         in="path",
     *         description="FK_PRODUCTOR",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="par708c184650d94901b621b577d4577e2f",
     *         in="path",
     *         description="FK_SEMANA",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb203dcfc17e354b038afdb62d24b2e913"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Boletas Semanas - Modelador Boletas Semanas.
     *
     * @param par39bedec193a54615beb54d9b6484be8a FK_PRODUCTOR
     * @param par708c184650d94901b621b577d4577e2f FK_SEMANA
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb203dcfc17e354b038afdb62d24b2e913
     */
    public function mt203dcfc17e354b038afdb62d24b2e913(Request $request, $par39bedec193a54615beb54d9b6484be8a = null, $par708c184650d94901b621b577d4577e2f = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt203dcfc17e354b038afdb62d24b2e913($par39bedec193a54615beb54d9b6484be8a, $par708c184650d94901b621b577d4577e2f, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Boletas Semanas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/203dcfc17e354b038afdb62d24b2e913Count/{par39bedec193a54615beb54d9b6484be8a}/{par708c184650d94901b621b577d4577e2f}",
     *     description="Modelador Boletas Semanas - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par39bedec193a54615beb54d9b6484be8a",
     *         in="path",
     *         description="FK_PRODUCTOR",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="par708c184650d94901b621b577d4577e2f",
     *         in="path",
     *         description="FK_SEMANA",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Boletas Semanas - Modelador Boletas Semanas.
     *
     * @param par39bedec193a54615beb54d9b6484be8a FK_PRODUCTOR
     * @param par708c184650d94901b621b577d4577e2f FK_SEMANA
     *
     * @return Count of tb203dcfc17e354b038afdb62d24b2e913
     */
    public function mt203dcfc17e354b038afdb62d24b2e913Count(Request $request, $par39bedec193a54615beb54d9b6484be8a = null, $par708c184650d94901b621b577d4577e2f = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt203dcfc17e354b038afdb62d24b2e913Count($par39bedec193a54615beb54d9b6484be8a, $par708c184650d94901b621b577d4577e2f, 0, 0, '', ''));
    }

    /**
     * Modelador Catálogo Semanas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f653797b67a241e98e0a363b26f2b0b4/{parc2dc6bfe440b4046b3462f6f037e3c02}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador para Catálogo Semanas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parc2dc6bfe440b4046b3462f6f037e3c02",
     *         in="path",
     *         description="FL_NOMBRE",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbf653797b67a241e98e0a363b26f2b0b4"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Catálogo Semanas - Modelador para Catálogo Semanas.
     *
     * @param parc2dc6bfe440b4046b3462f6f037e3c02 FL_NOMBRE
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbf653797b67a241e98e0a363b26f2b0b4
     */
    public function mtf653797b67a241e98e0a363b26f2b0b4(Request $request, $parc2dc6bfe440b4046b3462f6f037e3c02 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtf653797b67a241e98e0a363b26f2b0b4($parc2dc6bfe440b4046b3462f6f037e3c02, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Catálogo Semanas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f653797b67a241e98e0a363b26f2b0b4Count/{parc2dc6bfe440b4046b3462f6f037e3c02}",
     *     description="Modelador para Catálogo Semanas - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parc2dc6bfe440b4046b3462f6f037e3c02",
     *         in="path",
     *         description="FL_NOMBRE",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Catálogo Semanas - Modelador para Catálogo Semanas.
     *
     * @param parc2dc6bfe440b4046b3462f6f037e3c02 FL_NOMBRE
     *
     * @return Count of tbf653797b67a241e98e0a363b26f2b0b4
     */
    public function mtf653797b67a241e98e0a363b26f2b0b4Count(Request $request, $parc2dc6bfe440b4046b3462f6f037e3c02 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtf653797b67a241e98e0a363b26f2b0b4Count($parc2dc6bfe440b4046b3462f6f037e3c02, 0, 0, '', ''));
    }

    /**
     * Modelador Centro Trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/996abab0c8e04982b42cb42b87ebb4de/{par2e8ff613b62a43d3856964e5cdbd2d73}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Centro Trabajo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par2e8ff613b62a43d3856964e5cdbd2d73",
     *         in="path",
     *         description="FK_ESTADO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb996abab0c8e04982b42cb42b87ebb4de"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Centro Trabajo - Modelador Centro Trabajo.
     *
     * @param par2e8ff613b62a43d3856964e5cdbd2d73 FK_ESTADO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb996abab0c8e04982b42cb42b87ebb4de
     */
    public function mt996abab0c8e04982b42cb42b87ebb4de(Request $request, $par2e8ff613b62a43d3856964e5cdbd2d73 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt996abab0c8e04982b42cb42b87ebb4de($par2e8ff613b62a43d3856964e5cdbd2d73, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Centro Trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/996abab0c8e04982b42cb42b87ebb4deCount/{par2e8ff613b62a43d3856964e5cdbd2d73}",
     *     description="Modelador Centro Trabajo - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par2e8ff613b62a43d3856964e5cdbd2d73",
     *         in="path",
     *         description="FK_ESTADO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Centro Trabajo - Modelador Centro Trabajo.
     *
     * @param par2e8ff613b62a43d3856964e5cdbd2d73 FK_ESTADO
     *
     * @return Count of tb996abab0c8e04982b42cb42b87ebb4de
     */
    public function mt996abab0c8e04982b42cb42b87ebb4deCount(Request $request, $par2e8ff613b62a43d3856964e5cdbd2d73 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt996abab0c8e04982b42cb42b87ebb4deCount($par2e8ff613b62a43d3856964e5cdbd2d73, 0, 0, '', ''));
    }

    /**
     * Modelador Centros de Acopio.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/86dc8c3c9de1404ba4df78874b48bd08/{par6c770e3e5c38428caa79b963daef1f6a}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Centros de Acopio",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par6c770e3e5c38428caa79b963daef1f6a",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb86dc8c3c9de1404ba4df78874b48bd08"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Centros de Acopio - Modelador Centros de Acopio.
     *
     * @param par6c770e3e5c38428caa79b963daef1f6a FK_CENTROS_TRABAJO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb86dc8c3c9de1404ba4df78874b48bd08
     */
    public function mt86dc8c3c9de1404ba4df78874b48bd08(Request $request, $par6c770e3e5c38428caa79b963daef1f6a = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt86dc8c3c9de1404ba4df78874b48bd08($par6c770e3e5c38428caa79b963daef1f6a, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Centros de Acopio.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/86dc8c3c9de1404ba4df78874b48bd08Count/{par6c770e3e5c38428caa79b963daef1f6a}",
     *     description="Modelador Centros de Acopio - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par6c770e3e5c38428caa79b963daef1f6a",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Centros de Acopio - Modelador Centros de Acopio.
     *
     * @param par6c770e3e5c38428caa79b963daef1f6a FK_CENTROS_TRABAJO
     *
     * @return Count of tb86dc8c3c9de1404ba4df78874b48bd08
     */
    public function mt86dc8c3c9de1404ba4df78874b48bd08Count(Request $request, $par6c770e3e5c38428caa79b963daef1f6a = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt86dc8c3c9de1404ba4df78874b48bd08Count($par6c770e3e5c38428caa79b963daef1f6a, 0, 0, '', ''));
    }

    /**
     * Modelador Centros de Acopio Recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d69ed607b308439d99ab4ea34275bb97/{par22a10fa2a5f04de8b5e9c184d6b19392}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Centros de Acopio Recibas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par22a10fa2a5f04de8b5e9c184d6b19392",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbd69ed607b308439d99ab4ea34275bb97"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Centros de Acopio Recibas - Modelador Centros de Acopio Recibas.
     *
     * @param par22a10fa2a5f04de8b5e9c184d6b19392 FK_CENTROS_TRABAJO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbd69ed607b308439d99ab4ea34275bb97
     */
    public function mtd69ed607b308439d99ab4ea34275bb97(Request $request, $par22a10fa2a5f04de8b5e9c184d6b19392 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtd69ed607b308439d99ab4ea34275bb97($par22a10fa2a5f04de8b5e9c184d6b19392, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Centros de Acopio Recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d69ed607b308439d99ab4ea34275bb97Count/{par22a10fa2a5f04de8b5e9c184d6b19392}",
     *     description="Modelador Centros de Acopio Recibas - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par22a10fa2a5f04de8b5e9c184d6b19392",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Centros de Acopio Recibas - Modelador Centros de Acopio Recibas.
     *
     * @param par22a10fa2a5f04de8b5e9c184d6b19392 FK_CENTROS_TRABAJO
     *
     * @return Count of tbd69ed607b308439d99ab4ea34275bb97
     */
    public function mtd69ed607b308439d99ab4ea34275bb97Count(Request $request, $par22a10fa2a5f04de8b5e9c184d6b19392 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtd69ed607b308439d99ab4ea34275bb97Count($par22a10fa2a5f04de8b5e9c184d6b19392, 0, 0, '', ''));
    }

    /**
     * Modelador Centros de Trabajo Recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/8a72f29cb88a4c25b11f1b5da7be1efe/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Centros de Trabajo Recibas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb8a72f29cb88a4c25b11f1b5da7be1efe"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Centros de Trabajo Recibas - Modelador Centros de Trabajo Recibas.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb8a72f29cb88a4c25b11f1b5da7be1efe
     */
    public function mt8a72f29cb88a4c25b11f1b5da7be1efe(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt8a72f29cb88a4c25b11f1b5da7be1efe($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Centros de Trabajo Recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/8a72f29cb88a4c25b11f1b5da7be1efeCount",
     *     description="Modelador Centros de Trabajo Recibas - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Centros de Trabajo Recibas - Modelador Centros de Trabajo Recibas.
     *
     * @return Count of tb8a72f29cb88a4c25b11f1b5da7be1efe
     */
    public function mt8a72f29cb88a4c25b11f1b5da7be1efeCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt8a72f29cb88a4c25b11f1b5da7be1efeCount(0, 0, '', ''));
    }

    /**
     * Modelador Chofer.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ea0b74ab72a04e34aa10f369a5565537/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Chofer",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbea0b74ab72a04e34aa10f369a5565537"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Chofer - Modelador Chofer.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbea0b74ab72a04e34aa10f369a5565537
     */
    public function mtea0b74ab72a04e34aa10f369a5565537(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtea0b74ab72a04e34aa10f369a5565537($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Chofer.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ea0b74ab72a04e34aa10f369a5565537Count",
     *     description="Modelador Chofer - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Chofer - Modelador Chofer.
     *
     * @return Count of tbea0b74ab72a04e34aa10f369a5565537
     */
    public function mtea0b74ab72a04e34aa10f369a5565537Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtea0b74ab72a04e34aa10f369a5565537Count(0, 0, '', ''));
    }

    /**
     * Modelador de estados.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9610894d477640eeb7d8beb0b86f7a72/{par228a80b706e845d8a2d22a860d88c01e}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador de estados",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par228a80b706e845d8a2d22a860d88c01e",
     *         in="path",
     *         description="FK_REGION",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb9610894d477640eeb7d8beb0b86f7a72"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador de estados - Modelador de estados.
     *
     * @param par228a80b706e845d8a2d22a860d88c01e FK_REGION
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb9610894d477640eeb7d8beb0b86f7a72
     */
    public function mt9610894d477640eeb7d8beb0b86f7a72(Request $request, $par228a80b706e845d8a2d22a860d88c01e = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt9610894d477640eeb7d8beb0b86f7a72($par228a80b706e845d8a2d22a860d88c01e, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador de estados.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9610894d477640eeb7d8beb0b86f7a72Count/{par228a80b706e845d8a2d22a860d88c01e}",
     *     description="Modelador de estados - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par228a80b706e845d8a2d22a860d88c01e",
     *         in="path",
     *         description="FK_REGION",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador de estados - Modelador de estados.
     *
     * @param par228a80b706e845d8a2d22a860d88c01e FK_REGION
     *
     * @return Count of tb9610894d477640eeb7d8beb0b86f7a72
     */
    public function mt9610894d477640eeb7d8beb0b86f7a72Count(Request $request, $par228a80b706e845d8a2d22a860d88c01e = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt9610894d477640eeb7d8beb0b86f7a72Count($par228a80b706e845d8a2d22a860d88c01e, 0, 0, '', ''));
    }

    /**
     * Modelador de regiones.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6cd57025d94b407486182f3ec48d5b2d/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador de regiones",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb6cd57025d94b407486182f3ec48d5b2d"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador de regiones - Modelador de regiones.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb6cd57025d94b407486182f3ec48d5b2d
     */
    public function mt6cd57025d94b407486182f3ec48d5b2d(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt6cd57025d94b407486182f3ec48d5b2d($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador de regiones.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6cd57025d94b407486182f3ec48d5b2dCount",
     *     description="Modelador de regiones - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador de regiones - Modelador de regiones.
     *
     * @return Count of tb6cd57025d94b407486182f3ec48d5b2d
     */
    public function mt6cd57025d94b407486182f3ec48d5b2dCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt6cd57025d94b407486182f3ec48d5b2dCount(0, 0, '', ''));
    }

    /**
     * Modelador Estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/df246c22d0e649e99a67be25e4b15d6e/{parb2f4baaac3fc4c6f9e164920b3ed1ebf}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Estatus",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb2f4baaac3fc4c6f9e164920b3ed1ebf",
     *         in="path",
     *         description="Relación con tipo de estatus",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbdf246c22d0e649e99a67be25e4b15d6e"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Estatus - Modelador Estatus.
     *
     * @param parb2f4baaac3fc4c6f9e164920b3ed1ebf Relación con tipo de estatus
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbdf246c22d0e649e99a67be25e4b15d6e
     */
    public function mtdf246c22d0e649e99a67be25e4b15d6e(Request $request, $parb2f4baaac3fc4c6f9e164920b3ed1ebf = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtdf246c22d0e649e99a67be25e4b15d6e($parb2f4baaac3fc4c6f9e164920b3ed1ebf, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/df246c22d0e649e99a67be25e4b15d6eCount/{parb2f4baaac3fc4c6f9e164920b3ed1ebf}",
     *     description="Modelador Estatus - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb2f4baaac3fc4c6f9e164920b3ed1ebf",
     *         in="path",
     *         description="Relación con tipo de estatus",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Estatus - Modelador Estatus.
     *
     * @param parb2f4baaac3fc4c6f9e164920b3ed1ebf Relación con tipo de estatus
     *
     * @return Count of tbdf246c22d0e649e99a67be25e4b15d6e
     */
    public function mtdf246c22d0e649e99a67be25e4b15d6eCount(Request $request, $parb2f4baaac3fc4c6f9e164920b3ed1ebf = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtdf246c22d0e649e99a67be25e4b15d6eCount($parb2f4baaac3fc4c6f9e164920b3ed1ebf, 0, 0, '', ''));
    }

    /**
     * Modelador Lista de CA por usuario.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/999ad9bad2494114bd1df35bf4d92044/{parae7e52d20fd545efb593363975ba87dd}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Lista de CA por usuario",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parae7e52d20fd545efb593363975ba87dd",
     *         in="path",
     *         description="FK_USUARIOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb999ad9bad2494114bd1df35bf4d92044"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Lista de CA por usuario - Modelador Lista de CA por usuario.
     *
     * @param parae7e52d20fd545efb593363975ba87dd FK_USUARIOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb999ad9bad2494114bd1df35bf4d92044
     */
    public function mt999ad9bad2494114bd1df35bf4d92044(Request $request, $parae7e52d20fd545efb593363975ba87dd = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt999ad9bad2494114bd1df35bf4d92044($parae7e52d20fd545efb593363975ba87dd, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Lista de CA por usuario.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/999ad9bad2494114bd1df35bf4d92044Count/{parae7e52d20fd545efb593363975ba87dd}",
     *     description="Modelador Lista de CA por usuario - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parae7e52d20fd545efb593363975ba87dd",
     *         in="path",
     *         description="FK_USUARIOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Lista de CA por usuario - Modelador Lista de CA por usuario.
     *
     * @param parae7e52d20fd545efb593363975ba87dd FK_USUARIOS
     *
     * @return Count of tb999ad9bad2494114bd1df35bf4d92044
     */
    public function mt999ad9bad2494114bd1df35bf4d92044Count(Request $request, $parae7e52d20fd545efb593363975ba87dd = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt999ad9bad2494114bd1df35bf4d92044Count($parae7e52d20fd545efb593363975ba87dd, 0, 0, '', ''));
    }

    /**
     * Modelador Lista Semanas Recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f3b6d1a392b14ca986fa6ded0a35c490/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Lista Semanas Recibas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbf3b6d1a392b14ca986fa6ded0a35c490"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Lista Semanas Recibas - Modelador Lista Semanas Recibas.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbf3b6d1a392b14ca986fa6ded0a35c490
     */
    public function mtf3b6d1a392b14ca986fa6ded0a35c490(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtf3b6d1a392b14ca986fa6ded0a35c490($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Lista Semanas Recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f3b6d1a392b14ca986fa6ded0a35c490Count",
     *     description="Modelador Lista Semanas Recibas - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Lista Semanas Recibas - Modelador Lista Semanas Recibas.
     *
     * @return Count of tbf3b6d1a392b14ca986fa6ded0a35c490
     */
    public function mtf3b6d1a392b14ca986fa6ded0a35c490Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtf3b6d1a392b14ca986fa6ded0a35c490Count(0, 0, '', ''));
    }

    /**
     * Modelador Lista Tipo Estimulo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ff0d208e1b5f4df0b5c17a6a88cefa73/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Lista Tipo Estimulo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbff0d208e1b5f4df0b5c17a6a88cefa73"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Lista Tipo Estimulo - Modelador Lista Tipo Estimulo.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbff0d208e1b5f4df0b5c17a6a88cefa73
     */
    public function mtff0d208e1b5f4df0b5c17a6a88cefa73(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtff0d208e1b5f4df0b5c17a6a88cefa73($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Lista Tipo Estimulo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ff0d208e1b5f4df0b5c17a6a88cefa73Count",
     *     description="Modelador Lista Tipo Estimulo - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Lista Tipo Estimulo - Modelador Lista Tipo Estimulo.
     *
     * @return Count of tbff0d208e1b5f4df0b5c17a6a88cefa73
     */
    public function mtff0d208e1b5f4df0b5c17a6a88cefa73Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtff0d208e1b5f4df0b5c17a6a88cefa73Count(0, 0, '', ''));
    }

    /**
     * Modelador Menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3fe306b72357482f944c8144f1783915/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Menu",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb3fe306b72357482f944c8144f1783915"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Menu - Modelador Menu.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb3fe306b72357482f944c8144f1783915
     */
    public function mt3fe306b72357482f944c8144f1783915(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt3fe306b72357482f944c8144f1783915($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3fe306b72357482f944c8144f1783915Count",
     *     description="Modelador Menu - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Menu - Modelador Menu.
     *
     * @return Count of tb3fe306b72357482f944c8144f1783915
     */
    public function mt3fe306b72357482f944c8144f1783915Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt3fe306b72357482f944c8144f1783915Count(0, 0, '', ''));
    }

    /**
     * Modelador menu perfil.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e3743240c9474cd88aa4d3b023797f87/{par4ab36ca427b34063bdc6cedc3632a45b}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador menu perfil",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par4ab36ca427b34063bdc6cedc3632a45b",
     *         in="path",
     *         description="FK_PERFIL",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbe3743240c9474cd88aa4d3b023797f87"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador menu perfil - Modelador menu perfil.
     *
     * @param par4ab36ca427b34063bdc6cedc3632a45b FK_PERFIL
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbe3743240c9474cd88aa4d3b023797f87
     */
    public function mte3743240c9474cd88aa4d3b023797f87(Request $request, $par4ab36ca427b34063bdc6cedc3632a45b = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mte3743240c9474cd88aa4d3b023797f87($par4ab36ca427b34063bdc6cedc3632a45b, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador menu perfil.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/e3743240c9474cd88aa4d3b023797f87Count/{par4ab36ca427b34063bdc6cedc3632a45b}",
     *     description="Modelador menu perfil - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par4ab36ca427b34063bdc6cedc3632a45b",
     *         in="path",
     *         description="FK_PERFIL",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador menu perfil - Modelador menu perfil.
     *
     * @param par4ab36ca427b34063bdc6cedc3632a45b FK_PERFIL
     *
     * @return Count of tbe3743240c9474cd88aa4d3b023797f87
     */
    public function mte3743240c9474cd88aa4d3b023797f87Count(Request $request, $par4ab36ca427b34063bdc6cedc3632a45b = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mte3743240c9474cd88aa4d3b023797f87Count($par4ab36ca427b34063bdc6cedc3632a45b, 0, 0, '', ''));
    }

    /**
     * Modelador Nacional.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/4be6449a3e974bd88e8488677d0e1004/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Nacional",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb4be6449a3e974bd88e8488677d0e1004"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Nacional - Modelador Nacional.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb4be6449a3e974bd88e8488677d0e1004
     */
    public function mt4be6449a3e974bd88e8488677d0e1004(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt4be6449a3e974bd88e8488677d0e1004($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Nacional.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/4be6449a3e974bd88e8488677d0e1004Count",
     *     description="Modelador Nacional - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Nacional - Modelador Nacional.
     *
     * @return Count of tb4be6449a3e974bd88e8488677d0e1004
     */
    public function mt4be6449a3e974bd88e8488677d0e1004Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt4be6449a3e974bd88e8488677d0e1004Count(0, 0, '', ''));
    }

    /**
     * Modelador Perfiles Menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d1f2d9029cda4a078d86938214048578/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Perfiles Menu",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbd1f2d9029cda4a078d86938214048578"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Perfiles Menu - Modelador Perfiles Menu.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbd1f2d9029cda4a078d86938214048578
     */
    public function mtd1f2d9029cda4a078d86938214048578(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtd1f2d9029cda4a078d86938214048578($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Perfiles Menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d1f2d9029cda4a078d86938214048578Count",
     *     description="Modelador Perfiles Menu - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Perfiles Menu - Modelador Perfiles Menu.
     *
     * @return Count of tbd1f2d9029cda4a078d86938214048578
     */
    public function mtd1f2d9029cda4a078d86938214048578Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtd1f2d9029cda4a078d86938214048578Count(0, 0, '', ''));
    }

    /**
     * Modelador Precios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/20344f2640684f459ec9bc0d181d95c5/{par64460d6003f9470cbac9ad05c7b7ac99}/{par2a57f56f85564d88b8850464dd421a81}/{parb09fcc153e3541b0971c156dfd21badb}/{paracaafe2db6cd4020aea7c4dba013c573}/{parb2ea07fb09904160b3da3964658945dd}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Precios",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par64460d6003f9470cbac9ad05c7b7ac99",
     *         in="path",
     *         description="FK_ESTIMULOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="par2a57f56f85564d88b8850464dd421a81",
     *         in="path",
     *         description="FK_REGIONAL",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="parb09fcc153e3541b0971c156dfd21badb",
     *         in="path",
     *         description="FK_ESTADO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="paracaafe2db6cd4020aea7c4dba013c573",
     *         in="path",
     *         description="FK_CENTRO_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="parb2ea07fb09904160b3da3964658945dd",
     *         in="path",
     *         description="FK_CENTRO_ACOPIO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb20344f2640684f459ec9bc0d181d95c5"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Precios - Modelador Precios.
     *
     * @param par64460d6003f9470cbac9ad05c7b7ac99 FK_ESTIMULOS
     * @param par2a57f56f85564d88b8850464dd421a81 FK_REGIONAL
     * @param parb09fcc153e3541b0971c156dfd21badb FK_ESTADO
     * @param paracaafe2db6cd4020aea7c4dba013c573 FK_CENTRO_TRABAJO
     * @param parb2ea07fb09904160b3da3964658945dd FK_CENTRO_ACOPIO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb20344f2640684f459ec9bc0d181d95c5
     */
    public function mt20344f2640684f459ec9bc0d181d95c5(Request $request, $par64460d6003f9470cbac9ad05c7b7ac99 = null, $par2a57f56f85564d88b8850464dd421a81 = null, $parb09fcc153e3541b0971c156dfd21badb = null, $paracaafe2db6cd4020aea7c4dba013c573 = null, $parb2ea07fb09904160b3da3964658945dd = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt20344f2640684f459ec9bc0d181d95c5($par64460d6003f9470cbac9ad05c7b7ac99, $par2a57f56f85564d88b8850464dd421a81, $parb09fcc153e3541b0971c156dfd21badb, $paracaafe2db6cd4020aea7c4dba013c573, $parb2ea07fb09904160b3da3964658945dd, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Precios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/20344f2640684f459ec9bc0d181d95c5Count/{par64460d6003f9470cbac9ad05c7b7ac99}/{par2a57f56f85564d88b8850464dd421a81}/{parb09fcc153e3541b0971c156dfd21badb}/{paracaafe2db6cd4020aea7c4dba013c573}/{parb2ea07fb09904160b3da3964658945dd}",
     *     description="Modelador Precios - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par64460d6003f9470cbac9ad05c7b7ac99",
     *         in="path",
     *         description="FK_ESTIMULOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="par2a57f56f85564d88b8850464dd421a81",
     *         in="path",
     *         description="FK_REGIONAL",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="parb09fcc153e3541b0971c156dfd21badb",
     *         in="path",
     *         description="FK_ESTADO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="paracaafe2db6cd4020aea7c4dba013c573",
     *         in="path",
     *         description="FK_CENTRO_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="parb2ea07fb09904160b3da3964658945dd",
     *         in="path",
     *         description="FK_CENTRO_ACOPIO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Precios - Modelador Precios.
     *
     * @param par64460d6003f9470cbac9ad05c7b7ac99 FK_ESTIMULOS
     * @param par2a57f56f85564d88b8850464dd421a81 FK_REGIONAL
     * @param parb09fcc153e3541b0971c156dfd21badb FK_ESTADO
     * @param paracaafe2db6cd4020aea7c4dba013c573 FK_CENTRO_TRABAJO
     * @param parb2ea07fb09904160b3da3964658945dd FK_CENTRO_ACOPIO
     *
     * @return Count of tb20344f2640684f459ec9bc0d181d95c5
     */
    public function mt20344f2640684f459ec9bc0d181d95c5Count(Request $request, $par64460d6003f9470cbac9ad05c7b7ac99 = null, $par2a57f56f85564d88b8850464dd421a81 = null, $parb09fcc153e3541b0971c156dfd21badb = null, $paracaafe2db6cd4020aea7c4dba013c573 = null, $parb2ea07fb09904160b3da3964658945dd = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt20344f2640684f459ec9bc0d181d95c5Count($par64460d6003f9470cbac9ad05c7b7ac99, $par2a57f56f85564d88b8850464dd421a81, $parb09fcc153e3541b0971c156dfd21badb, $paracaafe2db6cd4020aea7c4dba013c573, $parb2ea07fb09904160b3da3964658945dd, 0, 0, '', ''));
    }

    /**
     * Modelador Recuperar Semanas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2297e140658b4393b6336f1c5bba0ba6/{parebb357c1d5a94b67bfdc20efe2bfff0a}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Recuperar Semanas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parebb357c1d5a94b67bfdc20efe2bfff0a",
     *         in="path",
     *         description="PK_SEMANAS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb2297e140658b4393b6336f1c5bba0ba6"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Recuperar Semanas - Modelador Recuperar Semanas.
     *
     * @param parebb357c1d5a94b67bfdc20efe2bfff0a PK_SEMANAS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb2297e140658b4393b6336f1c5bba0ba6
     */
    public function mt2297e140658b4393b6336f1c5bba0ba6(Request $request, $parebb357c1d5a94b67bfdc20efe2bfff0a = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt2297e140658b4393b6336f1c5bba0ba6($parebb357c1d5a94b67bfdc20efe2bfff0a, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Recuperar Semanas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2297e140658b4393b6336f1c5bba0ba6Count/{parebb357c1d5a94b67bfdc20efe2bfff0a}",
     *     description="Modelador Recuperar Semanas - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parebb357c1d5a94b67bfdc20efe2bfff0a",
     *         in="path",
     *         description="PK_SEMANAS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Recuperar Semanas - Modelador Recuperar Semanas.
     *
     * @param parebb357c1d5a94b67bfdc20efe2bfff0a PK_SEMANAS
     *
     * @return Count of tb2297e140658b4393b6336f1c5bba0ba6
     */
    public function mt2297e140658b4393b6336f1c5bba0ba6Count(Request $request, $parebb357c1d5a94b67bfdc20efe2bfff0a = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt2297e140658b4393b6336f1c5bba0ba6Count($parebb357c1d5a94b67bfdc20efe2bfff0a, 0, 0, '', ''));
    }

    /**
     * Modelador Tipo Estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/bf50d34494904519a21c959221f160a6/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Tipo Estatus",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbbf50d34494904519a21c959221f160a6"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Tipo Estatus - Modelador Tipo Estatus.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbbf50d34494904519a21c959221f160a6
     */
    public function mtbf50d34494904519a21c959221f160a6(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtbf50d34494904519a21c959221f160a6($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Tipo Estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/bf50d34494904519a21c959221f160a6Count",
     *     description="Modelador Tipo Estatus - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Tipo Estatus - Modelador Tipo Estatus.
     *
     * @return Count of tbbf50d34494904519a21c959221f160a6
     */
    public function mtbf50d34494904519a21c959221f160a6Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtbf50d34494904519a21c959221f160a6Count(0, 0, '', ''));
    }

    /**
     * Modelador Tipo Recuros Tipo Estimulo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/5ef7e39563104b76806ed5e7742b50e2/{par0e519ef208094b78b9bdeceb5e14aafa}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Tipo Recuros Tipo Estimulo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par0e519ef208094b78b9bdeceb5e14aafa",
     *         in="path",
     *         description="FK_TIPO_ESTIMULO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb5ef7e39563104b76806ed5e7742b50e2"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Tipo Recuros Tipo Estimulo - Modelador Tipo Recuros Tipo Estimulo.
     *
     * @param par0e519ef208094b78b9bdeceb5e14aafa FK_TIPO_ESTIMULO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb5ef7e39563104b76806ed5e7742b50e2
     */
    public function mt5ef7e39563104b76806ed5e7742b50e2(Request $request, $par0e519ef208094b78b9bdeceb5e14aafa = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt5ef7e39563104b76806ed5e7742b50e2($par0e519ef208094b78b9bdeceb5e14aafa, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Tipo Recuros Tipo Estimulo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/5ef7e39563104b76806ed5e7742b50e2Count/{par0e519ef208094b78b9bdeceb5e14aafa}",
     *     description="Modelador Tipo Recuros Tipo Estimulo - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par0e519ef208094b78b9bdeceb5e14aafa",
     *         in="path",
     *         description="FK_TIPO_ESTIMULO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Tipo Recuros Tipo Estimulo - Modelador Tipo Recuros Tipo Estimulo.
     *
     * @param par0e519ef208094b78b9bdeceb5e14aafa FK_TIPO_ESTIMULO
     *
     * @return Count of tb5ef7e39563104b76806ed5e7742b50e2
     */
    public function mt5ef7e39563104b76806ed5e7742b50e2Count(Request $request, $par0e519ef208094b78b9bdeceb5e14aafa = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt5ef7e39563104b76806ed5e7742b50e2Count($par0e519ef208094b78b9bdeceb5e14aafa, 0, 0, '', ''));
    }

    /**
     * Perfil sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f28ae130e32b49bda32f7bd701269ec2/{par16abc2c8f21045798b337f26b81310d5}",
     *     description="Perfil sistema",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par16abc2c8f21045798b337f26b81310d5",
     *         in="path",
     *         description="PK_USUARIOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Perfil sistema - Perfil sistema.
     *
     * @param par16abc2c8f21045798b337f26b81310d5 PK_USUARIOS
     *
     * @return string with result
     */
    public function mtf28ae130e32b49bda32f7bd701269ec2(Request $request, $par16abc2c8f21045798b337f26b81310d5 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtf28ae130e32b49bda32f7bd701269ec2($par16abc2c8f21045798b337f26b81310d5));
    }

    /**
     * Recuperar Centro de trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3b55399f2c6a4069a74d431df07f5d91/{pare08e3ed27b9c4dd38375499dd7d39d91}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Centro de trabajo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pare08e3ed27b9c4dd38375499dd7d39d91",
     *         in="path",
     *         description="PK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb3b55399f2c6a4069a74d431df07f5d91"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Centro de trabajo - Recuperar Centro de trabajo.
     *
     * @param pare08e3ed27b9c4dd38375499dd7d39d91 PK_CENTROS_TRABAJO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb3b55399f2c6a4069a74d431df07f5d91
     */
    public function mt3b55399f2c6a4069a74d431df07f5d91(Request $request, $pare08e3ed27b9c4dd38375499dd7d39d91 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt3b55399f2c6a4069a74d431df07f5d91($pare08e3ed27b9c4dd38375499dd7d39d91, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Centro de trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3b55399f2c6a4069a74d431df07f5d91Count/{pare08e3ed27b9c4dd38375499dd7d39d91}",
     *     description="Recuperar Centro de trabajo - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pare08e3ed27b9c4dd38375499dd7d39d91",
     *         in="path",
     *         description="PK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Centro de trabajo - Recuperar Centro de trabajo.
     *
     * @param pare08e3ed27b9c4dd38375499dd7d39d91 PK_CENTROS_TRABAJO
     *
     * @return Count of tb3b55399f2c6a4069a74d431df07f5d91
     */
    public function mt3b55399f2c6a4069a74d431df07f5d91Count(Request $request, $pare08e3ed27b9c4dd38375499dd7d39d91 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt3b55399f2c6a4069a74d431df07f5d91Count($pare08e3ed27b9c4dd38375499dd7d39d91, 0, 0, '', ''));
    }

    /**
     * Recuperar Centros acopio.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f6804dd3d98a484494e46bbd26c56df1/{pard2482aa827a94b30a75837c93a1b1071}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Centros acopio",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pard2482aa827a94b30a75837c93a1b1071",
     *         in="path",
     *         description="PK_CENTRO_ACOPIO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbf6804dd3d98a484494e46bbd26c56df1"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Centros acopio - Recuperar Centros acopio.
     *
     * @param pard2482aa827a94b30a75837c93a1b1071 PK_CENTRO_ACOPIO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbf6804dd3d98a484494e46bbd26c56df1
     */
    public function mtf6804dd3d98a484494e46bbd26c56df1(Request $request, $pard2482aa827a94b30a75837c93a1b1071 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtf6804dd3d98a484494e46bbd26c56df1($pard2482aa827a94b30a75837c93a1b1071, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Centros acopio.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/f6804dd3d98a484494e46bbd26c56df1Count/{pard2482aa827a94b30a75837c93a1b1071}",
     *     description="Recuperar Centros acopio - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pard2482aa827a94b30a75837c93a1b1071",
     *         in="path",
     *         description="PK_CENTRO_ACOPIO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Centros acopio - Recuperar Centros acopio.
     *
     * @param pard2482aa827a94b30a75837c93a1b1071 PK_CENTRO_ACOPIO
     *
     * @return Count of tbf6804dd3d98a484494e46bbd26c56df1
     */
    public function mtf6804dd3d98a484494e46bbd26c56df1Count(Request $request, $pard2482aa827a94b30a75837c93a1b1071 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtf6804dd3d98a484494e46bbd26c56df1Count($pard2482aa827a94b30a75837c93a1b1071, 0, 0, '', ''));
    }

    /**
     * Recuperar Centros de trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3f56423cf125496ead92782f861022be/{par85fc7ca8ecdf4de989af499d61eb9878}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Centros de trabajo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par85fc7ca8ecdf4de989af499d61eb9878",
     *         in="path",
     *         description="PK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb3f56423cf125496ead92782f861022be"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Centros de trabajo - Recuperar Centros de trabajo.
     *
     * @param par85fc7ca8ecdf4de989af499d61eb9878 PK_CENTROS_TRABAJO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb3f56423cf125496ead92782f861022be
     */
    public function mt3f56423cf125496ead92782f861022be(Request $request, $par85fc7ca8ecdf4de989af499d61eb9878 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt3f56423cf125496ead92782f861022be($par85fc7ca8ecdf4de989af499d61eb9878, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Centros de trabajo.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3f56423cf125496ead92782f861022beCount/{par85fc7ca8ecdf4de989af499d61eb9878}",
     *     description="Recuperar Centros de trabajo - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par85fc7ca8ecdf4de989af499d61eb9878",
     *         in="path",
     *         description="PK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Centros de trabajo - Recuperar Centros de trabajo.
     *
     * @param par85fc7ca8ecdf4de989af499d61eb9878 PK_CENTROS_TRABAJO
     *
     * @return Count of tb3f56423cf125496ead92782f861022be
     */
    public function mt3f56423cf125496ead92782f861022beCount(Request $request, $par85fc7ca8ecdf4de989af499d61eb9878 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt3f56423cf125496ead92782f861022beCount($par85fc7ca8ecdf4de989af499d61eb9878, 0, 0, '', ''));
    }

    /**
     * Recuperar Centros Trabajo por users.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/4b38c8745c3c4a5cb4519b394881fe82/{par8680722284074ed2bc9383a1b02ced50}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Centros Trabajo por users",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8680722284074ed2bc9383a1b02ced50",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb4b38c8745c3c4a5cb4519b394881fe82"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Centros Trabajo por users - Recuperar Centros Trabajo por users.
     *
     * @param par8680722284074ed2bc9383a1b02ced50 FK_CENTROS_TRABAJO
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb4b38c8745c3c4a5cb4519b394881fe82
     */
    public function mt4b38c8745c3c4a5cb4519b394881fe82(Request $request, $par8680722284074ed2bc9383a1b02ced50 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt4b38c8745c3c4a5cb4519b394881fe82($par8680722284074ed2bc9383a1b02ced50, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Centros Trabajo por users.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/4b38c8745c3c4a5cb4519b394881fe82Count/{par8680722284074ed2bc9383a1b02ced50}",
     *     description="Recuperar Centros Trabajo por users - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8680722284074ed2bc9383a1b02ced50",
     *         in="path",
     *         description="FK_CENTROS_TRABAJO",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Centros Trabajo por users - Recuperar Centros Trabajo por users.
     *
     * @param par8680722284074ed2bc9383a1b02ced50 FK_CENTROS_TRABAJO
     *
     * @return Count of tb4b38c8745c3c4a5cb4519b394881fe82
     */
    public function mt4b38c8745c3c4a5cb4519b394881fe82Count(Request $request, $par8680722284074ed2bc9383a1b02ced50 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt4b38c8745c3c4a5cb4519b394881fe82Count($par8680722284074ed2bc9383a1b02ced50, 0, 0, '', ''));
    }

    /**
     * Recuperar Chofer.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6c58a297e6b6426c8bedd55ec084a150/{par1f47e8db62ec4bf69f943fe3890c6cb4}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Chofer",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par1f47e8db62ec4bf69f943fe3890c6cb4",
     *         in="path",
     *         description="PK_CHOFER",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb6c58a297e6b6426c8bedd55ec084a150"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Chofer - Recuperar Chofer.
     *
     * @param par1f47e8db62ec4bf69f943fe3890c6cb4 PK_CHOFER
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb6c58a297e6b6426c8bedd55ec084a150
     */
    public function mt6c58a297e6b6426c8bedd55ec084a150(Request $request, $par1f47e8db62ec4bf69f943fe3890c6cb4 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt6c58a297e6b6426c8bedd55ec084a150($par1f47e8db62ec4bf69f943fe3890c6cb4, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Chofer.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6c58a297e6b6426c8bedd55ec084a150Count/{par1f47e8db62ec4bf69f943fe3890c6cb4}",
     *     description="Recuperar Chofer - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par1f47e8db62ec4bf69f943fe3890c6cb4",
     *         in="path",
     *         description="PK_CHOFER",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Chofer - Recuperar Chofer.
     *
     * @param par1f47e8db62ec4bf69f943fe3890c6cb4 PK_CHOFER
     *
     * @return Count of tb6c58a297e6b6426c8bedd55ec084a150
     */
    public function mt6c58a297e6b6426c8bedd55ec084a150Count(Request $request, $par1f47e8db62ec4bf69f943fe3890c6cb4 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt6c58a297e6b6426c8bedd55ec084a150Count($par1f47e8db62ec4bf69f943fe3890c6cb4, 0, 0, '', ''));
    }

    /**
     * Recuperar Estado.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a2d9331358914cf2b001c4a2c6329a2d/{par5a486a6f68364f9daf6cdb31eceadecf}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Estado",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par5a486a6f68364f9daf6cdb31eceadecf",
     *         in="path",
     *         description="PK_ESTADOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tba2d9331358914cf2b001c4a2c6329a2d"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Estado - Recuperar Estado.
     *
     * @param par5a486a6f68364f9daf6cdb31eceadecf PK_ESTADOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tba2d9331358914cf2b001c4a2c6329a2d
     */
    public function mta2d9331358914cf2b001c4a2c6329a2d(Request $request, $par5a486a6f68364f9daf6cdb31eceadecf = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mta2d9331358914cf2b001c4a2c6329a2d($par5a486a6f68364f9daf6cdb31eceadecf, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Estado.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a2d9331358914cf2b001c4a2c6329a2dCount/{par5a486a6f68364f9daf6cdb31eceadecf}",
     *     description="Recuperar Estado - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par5a486a6f68364f9daf6cdb31eceadecf",
     *         in="path",
     *         description="PK_ESTADOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Estado - Recuperar Estado.
     *
     * @param par5a486a6f68364f9daf6cdb31eceadecf PK_ESTADOS
     *
     * @return Count of tba2d9331358914cf2b001c4a2c6329a2d
     */
    public function mta2d9331358914cf2b001c4a2c6329a2dCount(Request $request, $par5a486a6f68364f9daf6cdb31eceadecf = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mta2d9331358914cf2b001c4a2c6329a2dCount($par5a486a6f68364f9daf6cdb31eceadecf, 0, 0, '', ''));
    }

    /**
     * Recuperar Estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7b332aa4000f420a9afc673748ab5b19/{par55fcc07af34943a8a0e6f4eba09bf0e3}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Estatus",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par55fcc07af34943a8a0e6f4eba09bf0e3",
     *         in="path",
     *         description="PK_ESTATUS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb7b332aa4000f420a9afc673748ab5b19"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Estatus - Recuperar Estatus.
     *
     * @param par55fcc07af34943a8a0e6f4eba09bf0e3 PK_ESTATUS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb7b332aa4000f420a9afc673748ab5b19
     */
    public function mt7b332aa4000f420a9afc673748ab5b19(Request $request, $par55fcc07af34943a8a0e6f4eba09bf0e3 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt7b332aa4000f420a9afc673748ab5b19($par55fcc07af34943a8a0e6f4eba09bf0e3, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7b332aa4000f420a9afc673748ab5b19Count/{par55fcc07af34943a8a0e6f4eba09bf0e3}",
     *     description="Recuperar Estatus - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par55fcc07af34943a8a0e6f4eba09bf0e3",
     *         in="path",
     *         description="PK_ESTATUS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Estatus - Recuperar Estatus.
     *
     * @param par55fcc07af34943a8a0e6f4eba09bf0e3 PK_ESTATUS
     *
     * @return Count of tb7b332aa4000f420a9afc673748ab5b19
     */
    public function mt7b332aa4000f420a9afc673748ab5b19Count(Request $request, $par55fcc07af34943a8a0e6f4eba09bf0e3 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt7b332aa4000f420a9afc673748ab5b19Count($par55fcc07af34943a8a0e6f4eba09bf0e3, 0, 0, '', ''));
    }

    /**
     * Recuperar Menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/bc0208f881cf422ea0b6c0b9802e9e97/{par77350ff06f37420aaf1abe36b6a839d4}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Menu",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par77350ff06f37420aaf1abe36b6a839d4",
     *         in="path",
     *         description="PK_MENU",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbbc0208f881cf422ea0b6c0b9802e9e97"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Menu - Recuperar Menu.
     *
     * @param par77350ff06f37420aaf1abe36b6a839d4 PK_MENU
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbbc0208f881cf422ea0b6c0b9802e9e97
     */
    public function mtbc0208f881cf422ea0b6c0b9802e9e97(Request $request, $par77350ff06f37420aaf1abe36b6a839d4 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtbc0208f881cf422ea0b6c0b9802e9e97($par77350ff06f37420aaf1abe36b6a839d4, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/bc0208f881cf422ea0b6c0b9802e9e97Count/{par77350ff06f37420aaf1abe36b6a839d4}",
     *     description="Recuperar Menu - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par77350ff06f37420aaf1abe36b6a839d4",
     *         in="path",
     *         description="PK_MENU",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Menu - Recuperar Menu.
     *
     * @param par77350ff06f37420aaf1abe36b6a839d4 PK_MENU
     *
     * @return Count of tbbc0208f881cf422ea0b6c0b9802e9e97
     */
    public function mtbc0208f881cf422ea0b6c0b9802e9e97Count(Request $request, $par77350ff06f37420aaf1abe36b6a839d4 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtbc0208f881cf422ea0b6c0b9802e9e97Count($par77350ff06f37420aaf1abe36b6a839d4, 0, 0, '', ''));
    }

    /**
     * Recuperar Menu Perfil.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7a554656bf474c729d8f6f802a183501/{parbd07f901e7a64d0e980d949d26e42bbd}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Menu Perfil",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parbd07f901e7a64d0e980d949d26e42bbd",
     *         in="path",
     *         description="PK_PERFIL_MENU",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb7a554656bf474c729d8f6f802a183501"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Menu Perfil - Recuperar Menu Perfil.
     *
     * @param parbd07f901e7a64d0e980d949d26e42bbd PK_PERFIL_MENU
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb7a554656bf474c729d8f6f802a183501
     */
    public function mt7a554656bf474c729d8f6f802a183501(Request $request, $parbd07f901e7a64d0e980d949d26e42bbd = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt7a554656bf474c729d8f6f802a183501($parbd07f901e7a64d0e980d949d26e42bbd, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Menu Perfil.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7a554656bf474c729d8f6f802a183501Count/{parbd07f901e7a64d0e980d949d26e42bbd}",
     *     description="Recuperar Menu Perfil - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parbd07f901e7a64d0e980d949d26e42bbd",
     *         in="path",
     *         description="PK_PERFIL_MENU",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Menu Perfil - Recuperar Menu Perfil.
     *
     * @param parbd07f901e7a64d0e980d949d26e42bbd PK_PERFIL_MENU
     *
     * @return Count of tb7a554656bf474c729d8f6f802a183501
     */
    public function mt7a554656bf474c729d8f6f802a183501Count(Request $request, $parbd07f901e7a64d0e980d949d26e42bbd = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt7a554656bf474c729d8f6f802a183501Count($parbd07f901e7a64d0e980d949d26e42bbd, 0, 0, '', ''));
    }

    /**
     * Recuperar Nacional.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ad06971b3da64ec9b20e4320a907ba0c/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Nacional",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbad06971b3da64ec9b20e4320a907ba0c"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Nacional - Recuperar Nacional.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbad06971b3da64ec9b20e4320a907ba0c
     */
    public function mtad06971b3da64ec9b20e4320a907ba0c(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtad06971b3da64ec9b20e4320a907ba0c($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Nacional.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ad06971b3da64ec9b20e4320a907ba0cCount",
     *     description="Recuperar Nacional - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Nacional - Recuperar Nacional.
     *
     * @return Count of tbad06971b3da64ec9b20e4320a907ba0c
     */
    public function mtad06971b3da64ec9b20e4320a907ba0cCount(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtad06971b3da64ec9b20e4320a907ba0cCount(0, 0, '', ''));
    }

    /**
     * Recuperar Perfil.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/030959dde9594057af1f65fba7d27120/{pareabc3d8393444d4e9019ef6fdd121969}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Perfil",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pareabc3d8393444d4e9019ef6fdd121969",
     *         in="path",
     *         description="PK_PERFIL",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb030959dde9594057af1f65fba7d27120"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Perfil - Recuperar Perfil.
     *
     * @param pareabc3d8393444d4e9019ef6fdd121969 PK_PERFIL
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb030959dde9594057af1f65fba7d27120
     */
    public function mt030959dde9594057af1f65fba7d27120(Request $request, $pareabc3d8393444d4e9019ef6fdd121969 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt030959dde9594057af1f65fba7d27120($pareabc3d8393444d4e9019ef6fdd121969, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Perfil.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/030959dde9594057af1f65fba7d27120Count/{pareabc3d8393444d4e9019ef6fdd121969}",
     *     description="Recuperar Perfil - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pareabc3d8393444d4e9019ef6fdd121969",
     *         in="path",
     *         description="PK_PERFIL",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Perfil - Recuperar Perfil.
     *
     * @param pareabc3d8393444d4e9019ef6fdd121969 PK_PERFIL
     *
     * @return Count of tb030959dde9594057af1f65fba7d27120
     */
    public function mt030959dde9594057af1f65fba7d27120Count(Request $request, $pareabc3d8393444d4e9019ef6fdd121969 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt030959dde9594057af1f65fba7d27120Count($pareabc3d8393444d4e9019ef6fdd121969, 0, 0, '', ''));
    }

    /**
     * Recuperar Productor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/87f3ff2a9cc344c58921f820b898209f/{par81d62592acd84ddb8e7915b8e90881d2}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Productor",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par81d62592acd84ddb8e7915b8e90881d2",
     *         in="path",
     *         description="PK_PRODUCTOR",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb87f3ff2a9cc344c58921f820b898209f"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Productor - Recuperar Productor.
     *
     * @param par81d62592acd84ddb8e7915b8e90881d2 PK_PRODUCTOR
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb87f3ff2a9cc344c58921f820b898209f
     */
    public function mt87f3ff2a9cc344c58921f820b898209f(Request $request, $par81d62592acd84ddb8e7915b8e90881d2 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt87f3ff2a9cc344c58921f820b898209f($par81d62592acd84ddb8e7915b8e90881d2, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Productor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/87f3ff2a9cc344c58921f820b898209fCount/{par81d62592acd84ddb8e7915b8e90881d2}",
     *     description="Recuperar Productor - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par81d62592acd84ddb8e7915b8e90881d2",
     *         in="path",
     *         description="PK_PRODUCTOR",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Productor - Recuperar Productor.
     *
     * @param par81d62592acd84ddb8e7915b8e90881d2 PK_PRODUCTOR
     *
     * @return Count of tb87f3ff2a9cc344c58921f820b898209f
     */
    public function mt87f3ff2a9cc344c58921f820b898209fCount(Request $request, $par81d62592acd84ddb8e7915b8e90881d2 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt87f3ff2a9cc344c58921f820b898209fCount($par81d62592acd84ddb8e7915b8e90881d2, 0, 0, '', ''));
    }

    /**
     * Recuperar Recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0904ec88d82e4be8ab62f53d159d942b/{par9aa0be873c6247ce9f0cc328417e01c2}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Recibas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par9aa0be873c6247ce9f0cc328417e01c2",
     *         in="path",
     *         description="PK_RECIBAS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb0904ec88d82e4be8ab62f53d159d942b"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Recibas - Recuperar Recibas.
     *
     * @param par9aa0be873c6247ce9f0cc328417e01c2 PK_RECIBAS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb0904ec88d82e4be8ab62f53d159d942b
     */
    public function mt0904ec88d82e4be8ab62f53d159d942b(Request $request, $par9aa0be873c6247ce9f0cc328417e01c2 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt0904ec88d82e4be8ab62f53d159d942b($par9aa0be873c6247ce9f0cc328417e01c2, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0904ec88d82e4be8ab62f53d159d942bCount/{par9aa0be873c6247ce9f0cc328417e01c2}",
     *     description="Recuperar Recibas - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par9aa0be873c6247ce9f0cc328417e01c2",
     *         in="path",
     *         description="PK_RECIBAS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Recibas - Recuperar Recibas.
     *
     * @param par9aa0be873c6247ce9f0cc328417e01c2 PK_RECIBAS
     *
     * @return Count of tb0904ec88d82e4be8ab62f53d159d942b
     */
    public function mt0904ec88d82e4be8ab62f53d159d942bCount(Request $request, $par9aa0be873c6247ce9f0cc328417e01c2 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt0904ec88d82e4be8ab62f53d159d942bCount($par9aa0be873c6247ce9f0cc328417e01c2, 0, 0, '', ''));
    }

    /**
     * Recuperar Region.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c55363199cd64a5888f4f137f1d94426/{parb638ec701c4a476286f3c2ad493e9ce9}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Region",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb638ec701c4a476286f3c2ad493e9ce9",
     *         in="path",
     *         description="PK_REGION",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbc55363199cd64a5888f4f137f1d94426"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Region - Recuperar Region.
     *
     * @param parb638ec701c4a476286f3c2ad493e9ce9 PK_REGION
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbc55363199cd64a5888f4f137f1d94426
     */
    public function mtc55363199cd64a5888f4f137f1d94426(Request $request, $parb638ec701c4a476286f3c2ad493e9ce9 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtc55363199cd64a5888f4f137f1d94426($parb638ec701c4a476286f3c2ad493e9ce9, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Region.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c55363199cd64a5888f4f137f1d94426Count/{parb638ec701c4a476286f3c2ad493e9ce9}",
     *     description="Recuperar Region - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb638ec701c4a476286f3c2ad493e9ce9",
     *         in="path",
     *         description="PK_REGION",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Region - Recuperar Region.
     *
     * @param parb638ec701c4a476286f3c2ad493e9ce9 PK_REGION
     *
     * @return Count of tbc55363199cd64a5888f4f137f1d94426
     */
    public function mtc55363199cd64a5888f4f137f1d94426Count(Request $request, $parb638ec701c4a476286f3c2ad493e9ce9 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtc55363199cd64a5888f4f137f1d94426Count($parb638ec701c4a476286f3c2ad493e9ce9, 0, 0, '', ''));
    }

    /**
     * Recuperar tipo Estimulos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c9fa352996814827b5606b0dd1200c92/{par95be5e9289b14a9c94b39bec9354679e}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar tipo Estimulos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par95be5e9289b14a9c94b39bec9354679e",
     *         in="path",
     *         description="PK_TIPO_ESTIMULOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbc9fa352996814827b5606b0dd1200c92"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar tipo Estimulos - Recuperar tipo Estimulos.
     *
     * @param par95be5e9289b14a9c94b39bec9354679e PK_TIPO_ESTIMULOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbc9fa352996814827b5606b0dd1200c92
     */
    public function mtc9fa352996814827b5606b0dd1200c92(Request $request, $par95be5e9289b14a9c94b39bec9354679e = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtc9fa352996814827b5606b0dd1200c92($par95be5e9289b14a9c94b39bec9354679e, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar tipo Estimulos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c9fa352996814827b5606b0dd1200c92Count/{par95be5e9289b14a9c94b39bec9354679e}",
     *     description="Recuperar tipo Estimulos - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par95be5e9289b14a9c94b39bec9354679e",
     *         in="path",
     *         description="PK_TIPO_ESTIMULOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar tipo Estimulos - Recuperar tipo Estimulos.
     *
     * @param par95be5e9289b14a9c94b39bec9354679e PK_TIPO_ESTIMULOS
     *
     * @return Count of tbc9fa352996814827b5606b0dd1200c92
     */
    public function mtc9fa352996814827b5606b0dd1200c92Count(Request $request, $par95be5e9289b14a9c94b39bec9354679e = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtc9fa352996814827b5606b0dd1200c92Count($par95be5e9289b14a9c94b39bec9354679e, 0, 0, '', ''));
    }

    /**
     * Recuperar Traspasos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a56dddb68c1746bcafef77526284a4d5/{par3bd47269a552433eb638846d4e809382}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Traspasos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par3bd47269a552433eb638846d4e809382",
     *         in="path",
     *         description="LLave primaria de la tabla de traspasos",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tba56dddb68c1746bcafef77526284a4d5"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Traspasos - Recuperar Traspasos.
     *
     * @param par3bd47269a552433eb638846d4e809382 LLave primaria de la tabla de traspasos
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tba56dddb68c1746bcafef77526284a4d5
     */
    public function mta56dddb68c1746bcafef77526284a4d5(Request $request, $par3bd47269a552433eb638846d4e809382 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mta56dddb68c1746bcafef77526284a4d5($par3bd47269a552433eb638846d4e809382, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Traspasos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/a56dddb68c1746bcafef77526284a4d5Count/{par3bd47269a552433eb638846d4e809382}",
     *     description="Recuperar Traspasos - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par3bd47269a552433eb638846d4e809382",
     *         in="path",
     *         description="LLave primaria de la tabla de traspasos",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Traspasos - Recuperar Traspasos.
     *
     * @param par3bd47269a552433eb638846d4e809382 LLave primaria de la tabla de traspasos
     *
     * @return Count of tba56dddb68c1746bcafef77526284a4d5
     */
    public function mta56dddb68c1746bcafef77526284a4d5Count(Request $request, $par3bd47269a552433eb638846d4e809382 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mta56dddb68c1746bcafef77526284a4d5Count($par3bd47269a552433eb638846d4e809382, 0, 0, '', ''));
    }

    /**
     * Recuperar usuarios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7f8b55907bfd48d7b91d6640c223b0e9/{par18d0628ff9114afabc54c2f4ed0d6e4b}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar usuarios",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par18d0628ff9114afabc54c2f4ed0d6e4b",
     *         in="path",
     *         description="PK_USUARIOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb7f8b55907bfd48d7b91d6640c223b0e9"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar usuarios - Recuperar usuarios.
     *
     * @param par18d0628ff9114afabc54c2f4ed0d6e4b PK_USUARIOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb7f8b55907bfd48d7b91d6640c223b0e9
     */
    public function mt7f8b55907bfd48d7b91d6640c223b0e9(Request $request, $par18d0628ff9114afabc54c2f4ed0d6e4b = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt7f8b55907bfd48d7b91d6640c223b0e9($par18d0628ff9114afabc54c2f4ed0d6e4b, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar usuarios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7f8b55907bfd48d7b91d6640c223b0e9Count/{par18d0628ff9114afabc54c2f4ed0d6e4b}",
     *     description="Recuperar usuarios - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par18d0628ff9114afabc54c2f4ed0d6e4b",
     *         in="path",
     *         description="PK_USUARIOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar usuarios - Recuperar usuarios.
     *
     * @param par18d0628ff9114afabc54c2f4ed0d6e4b PK_USUARIOS
     *
     * @return Count of tb7f8b55907bfd48d7b91d6640c223b0e9
     */
    public function mt7f8b55907bfd48d7b91d6640c223b0e9Count(Request $request, $par18d0628ff9114afabc54c2f4ed0d6e4b = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt7f8b55907bfd48d7b91d6640c223b0e9Count($par18d0628ff9114afabc54c2f4ed0d6e4b, 0, 0, '', ''));
    }

    /**
     * RecuperarEstados.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2e5bcf6eb938410ab2e862bc7ac19013/{par3cd7d326632d42c5bc98d1cd45fbc47a}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="RecuperarEstados",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par3cd7d326632d42c5bc98d1cd45fbc47a",
     *         in="path",
     *         description="PK_ESTADOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb2e5bcf6eb938410ab2e862bc7ac19013"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * RecuperarEstados - RecuperarEstados.
     *
     * @param par3cd7d326632d42c5bc98d1cd45fbc47a PK_ESTADOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb2e5bcf6eb938410ab2e862bc7ac19013
     */
    public function mt2e5bcf6eb938410ab2e862bc7ac19013(Request $request, $par3cd7d326632d42c5bc98d1cd45fbc47a = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt2e5bcf6eb938410ab2e862bc7ac19013($par3cd7d326632d42c5bc98d1cd45fbc47a, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * RecuperarEstados.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2e5bcf6eb938410ab2e862bc7ac19013Count/{par3cd7d326632d42c5bc98d1cd45fbc47a}",
     *     description="RecuperarEstados - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par3cd7d326632d42c5bc98d1cd45fbc47a",
     *         in="path",
     *         description="PK_ESTADOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * RecuperarEstados - RecuperarEstados.
     *
     * @param par3cd7d326632d42c5bc98d1cd45fbc47a PK_ESTADOS
     *
     * @return Count of tb2e5bcf6eb938410ab2e862bc7ac19013
     */
    public function mt2e5bcf6eb938410ab2e862bc7ac19013Count(Request $request, $par3cd7d326632d42c5bc98d1cd45fbc47a = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt2e5bcf6eb938410ab2e862bc7ac19013Count($par3cd7d326632d42c5bc98d1cd45fbc47a, 0, 0, '', ''));
    }

    /**
     * sp_acciones_generales.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d499694edfc4401891d20d5a6163aa25/{par3c81feb3a9b84ab9acb814a923c17a031}/{par3743ee06de5c4a498c29d65aa7be45ba1}/{pare22ba75afbd7473fbc209bc45358882e1}",
     *     description="sp_acciones_generales",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par3c81feb3a9b84ab9acb814a923c17a031",
     *         in="path",
     *         description="prm_registro",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par3743ee06de5c4a498c29d65aa7be45ba1",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="pare22ba75afbd7473fbc209bc45358882e1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_acciones_generales - sp_acciones_generales.
     *
     * @param par3c81feb3a9b84ab9acb814a923c17a031 prm_registro
     * @param par3743ee06de5c4a498c29d65aa7be45ba1 prm_tipo
     * @param pare22ba75afbd7473fbc209bc45358882e1 prm_username
     *
     * @return string with result
     */
    public function mtd499694edfc4401891d20d5a6163aa25(Request $request, $par3c81feb3a9b84ab9acb814a923c17a031 = null, $par3743ee06de5c4a498c29d65aa7be45ba1 = null, $pare22ba75afbd7473fbc209bc45358882e1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtd499694edfc4401891d20d5a6163aa25($par3c81feb3a9b84ab9acb814a923c17a031, $par3743ee06de5c4a498c29d65aa7be45ba1, $pare22ba75afbd7473fbc209bc45358882e1));
    }

    /**
     * sp_adminTitle.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3936444a5f7a44069af2a7bbc547c6a6",
     *     description="sp_adminTitle",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_adminTitle - sp_adminTitle.
     *
     * @return string with result
     */
    public function mt3936444a5f7a44069af2a7bbc547c6a6(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt3936444a5f7a44069af2a7bbc547c6a6());
    }

    /**
     * sp_ajax.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/928c0a1bd83e4b7ab047235a7f8be37a/{parfa6e5002c2344831b55e9ceb211f49611}/{par2d847537c7f1480c8a9b5f573e6224811}/{para585969a19574f98a1cb3bfada3c9e821}/{par06216042a8ef4bbc9ab74ff90178bb191}/{pardfacfa9de2c94384be8640da159a67cf1}/{par022620eabd92461788e8b87e6e69c3921}/{parc99d1140eb9447f0a7ef5ff2535e955c1}/{par280e0f2c357d4da7a17c02af6e5813521}/{pard14361f0dd98449b9c97657d462a5e5e1}/{par9d89eb269b2942f4959fe3a52934e7be1}/{par9d860c73c29c47fa8e9d5202d349c7bf1}",
     *     description="sp_ajax",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parfa6e5002c2344831b55e9ceb211f49611",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par2d847537c7f1480c8a9b5f573e6224811",
     *         in="path",
     *         description="Param1",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="para585969a19574f98a1cb3bfada3c9e821",
     *         in="path",
     *         description="Param2",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par06216042a8ef4bbc9ab74ff90178bb191",
     *         in="path",
     *         description="Param3",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="pardfacfa9de2c94384be8640da159a67cf1",
     *         in="path",
     *         description="Param4",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par022620eabd92461788e8b87e6e69c3921",
     *         in="path",
     *         description="Param5",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parc99d1140eb9447f0a7ef5ff2535e955c1",
     *         in="path",
     *         description="Param6",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par280e0f2c357d4da7a17c02af6e5813521",
     *         in="path",
     *         description="Param7",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="pard14361f0dd98449b9c97657d462a5e5e1",
     *         in="path",
     *         description="Param8",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par9d89eb269b2942f4959fe3a52934e7be1",
     *         in="path",
     *         description="Param9",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par9d860c73c29c47fa8e9d5202d349c7bf1",
     *         in="path",
     *         description="Param10",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_ajax - sp_ajax.
     *
     * @param parfa6e5002c2344831b55e9ceb211f49611 prm_username
     * @param par2d847537c7f1480c8a9b5f573e6224811 Param1
     * @param para585969a19574f98a1cb3bfada3c9e821 Param2
     * @param par06216042a8ef4bbc9ab74ff90178bb191 Param3
     * @param pardfacfa9de2c94384be8640da159a67cf1 Param4
     * @param par022620eabd92461788e8b87e6e69c3921 Param5
     * @param parc99d1140eb9447f0a7ef5ff2535e955c1 Param6
     * @param par280e0f2c357d4da7a17c02af6e5813521 Param7
     * @param pard14361f0dd98449b9c97657d462a5e5e1 Param8
     * @param par9d89eb269b2942f4959fe3a52934e7be1 Param9
     * @param par9d860c73c29c47fa8e9d5202d349c7bf1 Param10
     *
     * @return string with result
     */
    public function mt928c0a1bd83e4b7ab047235a7f8be37a(Request $request, $parfa6e5002c2344831b55e9ceb211f49611 = null, $par2d847537c7f1480c8a9b5f573e6224811 = null, $para585969a19574f98a1cb3bfada3c9e821 = null, $par06216042a8ef4bbc9ab74ff90178bb191 = null, $pardfacfa9de2c94384be8640da159a67cf1 = null, $par022620eabd92461788e8b87e6e69c3921 = null, $parc99d1140eb9447f0a7ef5ff2535e955c1 = null, $par280e0f2c357d4da7a17c02af6e5813521 = null, $pard14361f0dd98449b9c97657d462a5e5e1 = null, $par9d89eb269b2942f4959fe3a52934e7be1 = null, $par9d860c73c29c47fa8e9d5202d349c7bf1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt928c0a1bd83e4b7ab047235a7f8be37a($parfa6e5002c2344831b55e9ceb211f49611, $par2d847537c7f1480c8a9b5f573e6224811, $para585969a19574f98a1cb3bfada3c9e821, $par06216042a8ef4bbc9ab74ff90178bb191, $pardfacfa9de2c94384be8640da159a67cf1, $par022620eabd92461788e8b87e6e69c3921, $parc99d1140eb9447f0a7ef5ff2535e955c1, $par280e0f2c357d4da7a17c02af6e5813521, $pard14361f0dd98449b9c97657d462a5e5e1, $par9d89eb269b2942f4959fe3a52934e7be1, $par9d860c73c29c47fa8e9d5202d349c7bf1));
    }

    /**
     * sp_boleta_semanal.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6a24cf2b5ed2483aa37458a4192f5d79/{par5b05acb7ef34496f8a0c891bce8c76041}/{par8706a5f9f68d45d29bec3875d1355e9b1}/{parddd888859df74263b2ecfc55398336661}/{parff5b14ba483b4b28892d000d703ce5f21}/{par5e45418d512f459e94e298fbdd87b4e81}/{par60a97cd872814244b61a7319c624c7d11}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_boleta_semanal",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par5b05acb7ef34496f8a0c891bce8c76041",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par8706a5f9f68d45d29bec3875d1355e9b1",
     *         in="path",
     *         description="prm_productor",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parddd888859df74263b2ecfc55398336661",
     *         in="path",
     *         description="prm_semana",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parff5b14ba483b4b28892d000d703ce5f21",
     *         in="path",
     *         description="prm_fechainicio",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par5e45418d512f459e94e298fbdd87b4e81",
     *         in="path",
     *         description="prm_fecha_final",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par60a97cd872814244b61a7319c624c7d11",
     *         in="path",
     *         description="prm_tipo_leche",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb6a24cf2b5ed2483aa37458a4192f5d79"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_boleta_semanal - sp_boleta_semanal.
     *
     * @param par5b05acb7ef34496f8a0c891bce8c76041 prm_username
     * @param par8706a5f9f68d45d29bec3875d1355e9b1 prm_productor
     * @param parddd888859df74263b2ecfc55398336661 prm_semana
     * @param parff5b14ba483b4b28892d000d703ce5f21 prm_fechainicio
     * @param par5e45418d512f459e94e298fbdd87b4e81 prm_fecha_final
     * @param par60a97cd872814244b61a7319c624c7d11 prm_tipo_leche
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb6a24cf2b5ed2483aa37458a4192f5d79
     */
    public function mt6a24cf2b5ed2483aa37458a4192f5d79(Request $request, $par5b05acb7ef34496f8a0c891bce8c76041 = null, $par8706a5f9f68d45d29bec3875d1355e9b1 = null, $parddd888859df74263b2ecfc55398336661 = null, $parff5b14ba483b4b28892d000d703ce5f21 = null, $par5e45418d512f459e94e298fbdd87b4e81 = null, $par60a97cd872814244b61a7319c624c7d11 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt6a24cf2b5ed2483aa37458a4192f5d79($par5b05acb7ef34496f8a0c891bce8c76041, $par8706a5f9f68d45d29bec3875d1355e9b1, $parddd888859df74263b2ecfc55398336661, $parff5b14ba483b4b28892d000d703ce5f21, $par5e45418d512f459e94e298fbdd87b4e81, $par60a97cd872814244b61a7319c624c7d11, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_boleta_semanal.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6a24cf2b5ed2483aa37458a4192f5d79Count/{par5b05acb7ef34496f8a0c891bce8c76041}/{par8706a5f9f68d45d29bec3875d1355e9b1}/{parddd888859df74263b2ecfc55398336661}/{parff5b14ba483b4b28892d000d703ce5f21}/{par5e45418d512f459e94e298fbdd87b4e81}/{par60a97cd872814244b61a7319c624c7d11}",
     *     description="sp_boleta_semanal - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par5b05acb7ef34496f8a0c891bce8c76041",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par8706a5f9f68d45d29bec3875d1355e9b1",
     *         in="path",
     *         description="prm_productor",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parddd888859df74263b2ecfc55398336661",
     *         in="path",
     *         description="prm_semana",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parff5b14ba483b4b28892d000d703ce5f21",
     *         in="path",
     *         description="prm_fechainicio",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par5e45418d512f459e94e298fbdd87b4e81",
     *         in="path",
     *         description="prm_fecha_final",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par60a97cd872814244b61a7319c624c7d11",
     *         in="path",
     *         description="prm_tipo_leche",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_boleta_semanal - sp_boleta_semanal.
     *
     * @param par5b05acb7ef34496f8a0c891bce8c76041 prm_username
     * @param par8706a5f9f68d45d29bec3875d1355e9b1 prm_productor
     * @param parddd888859df74263b2ecfc55398336661 prm_semana
     * @param parff5b14ba483b4b28892d000d703ce5f21 prm_fechainicio
     * @param par5e45418d512f459e94e298fbdd87b4e81 prm_fecha_final
     * @param par60a97cd872814244b61a7319c624c7d11 prm_tipo_leche
     *
     * @return Count of tb6a24cf2b5ed2483aa37458a4192f5d79
     */
    public function mt6a24cf2b5ed2483aa37458a4192f5d79Count(Request $request, $par5b05acb7ef34496f8a0c891bce8c76041 = null, $par8706a5f9f68d45d29bec3875d1355e9b1 = null, $parddd888859df74263b2ecfc55398336661 = null, $parff5b14ba483b4b28892d000d703ce5f21 = null, $par5e45418d512f459e94e298fbdd87b4e81 = null, $par60a97cd872814244b61a7319c624c7d11 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt6a24cf2b5ed2483aa37458a4192f5d79Count($par5b05acb7ef34496f8a0c891bce8c76041, $par8706a5f9f68d45d29bec3875d1355e9b1, $parddd888859df74263b2ecfc55398336661, $parff5b14ba483b4b28892d000d703ce5f21, $par5e45418d512f459e94e298fbdd87b4e81, $par60a97cd872814244b61a7319c624c7d11, 0, 0, '', ''));
    }

    /**
     * sp_boleta_semanal_title.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/fad84b1b05cb4cc8abb32ee5533e983c/{parc41f66df5ee8429a895b1dd2867d5b651}",
     *     description="sp_boleta_semanal_title",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parc41f66df5ee8429a895b1dd2867d5b651",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_boleta_semanal_title - sp_boleta_semanal_title.
     *
     * @param parc41f66df5ee8429a895b1dd2867d5b651 prm_username
     *
     * @return string with result
     */
    public function mtfad84b1b05cb4cc8abb32ee5533e983c(Request $request, $parc41f66df5ee8429a895b1dd2867d5b651 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtfad84b1b05cb4cc8abb32ee5533e983c($parc41f66df5ee8429a895b1dd2867d5b651));
    }

    /**
     * sp_c_a_users.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/02a574fe1ace4e7fa4d3dbd3827bea60/{parfad7deac61604736b328699438b22b411}/{par97819618a0fe4dd085806b132b9faf371}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Procedimiento Almacenado de Centros de Acopio",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parfad7deac61604736b328699438b22b411",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par97819618a0fe4dd085806b132b9faf371",
     *         in="path",
     *         description="prm_c_t",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb02a574fe1ace4e7fa4d3dbd3827bea60"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_c_a_users - Procedimiento Almacenado de Centros de Acopio.
     *
     * @param parfad7deac61604736b328699438b22b411 prm_username
     * @param par97819618a0fe4dd085806b132b9faf371 prm_c_t
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb02a574fe1ace4e7fa4d3dbd3827bea60
     */
    public function mt02a574fe1ace4e7fa4d3dbd3827bea60(Request $request, $parfad7deac61604736b328699438b22b411 = null, $par97819618a0fe4dd085806b132b9faf371 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt02a574fe1ace4e7fa4d3dbd3827bea60($parfad7deac61604736b328699438b22b411, $par97819618a0fe4dd085806b132b9faf371, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_c_a_users.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/02a574fe1ace4e7fa4d3dbd3827bea60Count/{parfad7deac61604736b328699438b22b411}/{par97819618a0fe4dd085806b132b9faf371}",
     *     description="Procedimiento Almacenado de Centros de Acopio - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parfad7deac61604736b328699438b22b411",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par97819618a0fe4dd085806b132b9faf371",
     *         in="path",
     *         description="prm_c_t",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_c_a_users - Procedimiento Almacenado de Centros de Acopio.
     *
     * @param parfad7deac61604736b328699438b22b411 prm_username
     * @param par97819618a0fe4dd085806b132b9faf371 prm_c_t
     *
     * @return Count of tb02a574fe1ace4e7fa4d3dbd3827bea60
     */
    public function mt02a574fe1ace4e7fa4d3dbd3827bea60Count(Request $request, $parfad7deac61604736b328699438b22b411 = null, $par97819618a0fe4dd085806b132b9faf371 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt02a574fe1ace4e7fa4d3dbd3827bea60Count($parfad7deac61604736b328699438b22b411, $par97819618a0fe4dd085806b132b9faf371, 0, 0, '', ''));
    }

    /**
     * sp_c_t_users.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/45f7488302534acfb9bf854d9871af60/{par34a7a0fc1a0b49c0acbc3183500b9dc31}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Procedimiento Almacenado Centros de Trabajo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par34a7a0fc1a0b49c0acbc3183500b9dc31",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb45f7488302534acfb9bf854d9871af60"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_c_t_users - Procedimiento Almacenado Centros de Trabajo.
     *
     * @param par34a7a0fc1a0b49c0acbc3183500b9dc31 prm_username
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb45f7488302534acfb9bf854d9871af60
     */
    public function mt45f7488302534acfb9bf854d9871af60(Request $request, $par34a7a0fc1a0b49c0acbc3183500b9dc31 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt45f7488302534acfb9bf854d9871af60($par34a7a0fc1a0b49c0acbc3183500b9dc31, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_c_t_users.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/45f7488302534acfb9bf854d9871af60Count/{par34a7a0fc1a0b49c0acbc3183500b9dc31}",
     *     description="Procedimiento Almacenado Centros de Trabajo - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par34a7a0fc1a0b49c0acbc3183500b9dc31",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_c_t_users - Procedimiento Almacenado Centros de Trabajo.
     *
     * @param par34a7a0fc1a0b49c0acbc3183500b9dc31 prm_username
     *
     * @return Count of tb45f7488302534acfb9bf854d9871af60
     */
    public function mt45f7488302534acfb9bf854d9871af60Count(Request $request, $par34a7a0fc1a0b49c0acbc3183500b9dc31 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt45f7488302534acfb9bf854d9871af60Count($par34a7a0fc1a0b49c0acbc3183500b9dc31, 0, 0, '', ''));
    }

    /**
     * sp_contenidos_html.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/8c5bfd6691ca4060b904e60cd3c9e51f/{par7fea58bc6833435ba5da972a89efb1bb1}/{parbdf6a36aabc94bf9aaade7d5240b08531}/{par973821124f0e4a3bbc23cb464b93b4e51}/{par8427abea3a704199a259348d15e8c9a51}/{parc4e8c71f4d394c4889249f37b0e4b9be1}/{pardac4ef7b4c0147f8bec58cc8fbc13a061}",
     *     description="sp_contenidos_html",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par7fea58bc6833435ba5da972a89efb1bb1",
     *         in="path",
     *         description="prm_1",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="parbdf6a36aabc94bf9aaade7d5240b08531",
     *         in="path",
     *         description="prm_2",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par973821124f0e4a3bbc23cb464b93b4e51",
     *         in="path",
     *         description="prm_3",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par8427abea3a704199a259348d15e8c9a51",
     *         in="path",
     *         description="prm_4",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="parc4e8c71f4d394c4889249f37b0e4b9be1",
     *         in="path",
     *         description="prm_5",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="pardac4ef7b4c0147f8bec58cc8fbc13a061",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_contenidos_html - sp_contenidos_html.
     *
     * @param par7fea58bc6833435ba5da972a89efb1bb1 prm_1
     * @param parbdf6a36aabc94bf9aaade7d5240b08531 prm_2
     * @param par973821124f0e4a3bbc23cb464b93b4e51 prm_3
     * @param par8427abea3a704199a259348d15e8c9a51 prm_4
     * @param parc4e8c71f4d394c4889249f37b0e4b9be1 prm_5
     * @param pardac4ef7b4c0147f8bec58cc8fbc13a061 prm_username
     *
     * @return string with result
     */
    public function mt8c5bfd6691ca4060b904e60cd3c9e51f(Request $request, $par7fea58bc6833435ba5da972a89efb1bb1 = null, $parbdf6a36aabc94bf9aaade7d5240b08531 = null, $par973821124f0e4a3bbc23cb464b93b4e51 = null, $par8427abea3a704199a259348d15e8c9a51 = null, $parc4e8c71f4d394c4889249f37b0e4b9be1 = null, $pardac4ef7b4c0147f8bec58cc8fbc13a061 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt8c5bfd6691ca4060b904e60cd3c9e51f($par7fea58bc6833435ba5da972a89efb1bb1, $parbdf6a36aabc94bf9aaade7d5240b08531, $par973821124f0e4a3bbc23cb464b93b4e51, $par8427abea3a704199a259348d15e8c9a51, $parc4e8c71f4d394c4889249f37b0e4b9be1, $pardac4ef7b4c0147f8bec58cc8fbc13a061));
    }

    /**
     * sp_contenidos_pdf.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/b6a79e262e8345c8a5e89909394b8122/{par232e1cf075744d60adcbf43b59fdc1c31}/{parf17cf0047b3d4ae79ebb1ab725cd563f1}/{para3a24efc42b94cb6b807be853afb44ea1}",
     *     description="sp_contenidos_pdf",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par232e1cf075744d60adcbf43b59fdc1c31",
     *         in="path",
     *         description="prm_registro",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="parf17cf0047b3d4ae79ebb1ab725cd563f1",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *         name="para3a24efc42b94cb6b807be853afb44ea1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_contenidos_pdf - sp_contenidos_pdf.
     *
     * @param par232e1cf075744d60adcbf43b59fdc1c31 prm_registro
     * @param parf17cf0047b3d4ae79ebb1ab725cd563f1 prm_tipo
     * @param para3a24efc42b94cb6b807be853afb44ea1 prm_username
     *
     * @return string with result
     */
    public function mtb6a79e262e8345c8a5e89909394b8122(Request $request, $par232e1cf075744d60adcbf43b59fdc1c31 = null, $parf17cf0047b3d4ae79ebb1ab725cd563f1 = null, $para3a24efc42b94cb6b807be853afb44ea1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtb6a79e262e8345c8a5e89909394b8122($par232e1cf075744d60adcbf43b59fdc1c31, $parf17cf0047b3d4ae79ebb1ab725cd563f1, $para3a24efc42b94cb6b807be853afb44ea1));
    }

    /**
     * sp_destinos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/49ed8ecb75e94a14bd986cd09da5f4ab/{par816c8acf07ce460d90f2622f2afaae0a1}/{par7a61d6984da64b0983de26f40e648fcc1}/{par9e75380b809a4a7c87af08c689404d6e1}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_destinos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par816c8acf07ce460d90f2622f2afaae0a1",
     *         in="path",
     *         description="Param1",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par7a61d6984da64b0983de26f40e648fcc1",
     *         in="path",
     *         description="Param2",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par9e75380b809a4a7c87af08c689404d6e1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb49ed8ecb75e94a14bd986cd09da5f4ab"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_destinos - sp_destinos.
     *
     * @param par816c8acf07ce460d90f2622f2afaae0a1 Param1
     * @param par7a61d6984da64b0983de26f40e648fcc1 Param2
     * @param par9e75380b809a4a7c87af08c689404d6e1 prm_username
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb49ed8ecb75e94a14bd986cd09da5f4ab
     */
    public function mt49ed8ecb75e94a14bd986cd09da5f4ab(Request $request, $par816c8acf07ce460d90f2622f2afaae0a1 = null, $par7a61d6984da64b0983de26f40e648fcc1 = null, $par9e75380b809a4a7c87af08c689404d6e1 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt49ed8ecb75e94a14bd986cd09da5f4ab($par816c8acf07ce460d90f2622f2afaae0a1, $par7a61d6984da64b0983de26f40e648fcc1, $par9e75380b809a4a7c87af08c689404d6e1, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_destinos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/49ed8ecb75e94a14bd986cd09da5f4abCount/{par816c8acf07ce460d90f2622f2afaae0a1}/{par7a61d6984da64b0983de26f40e648fcc1}/{par9e75380b809a4a7c87af08c689404d6e1}",
     *     description="sp_destinos - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par816c8acf07ce460d90f2622f2afaae0a1",
     *         in="path",
     *         description="Param1",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par7a61d6984da64b0983de26f40e648fcc1",
     *         in="path",
     *         description="Param2",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par9e75380b809a4a7c87af08c689404d6e1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_destinos - sp_destinos.
     *
     * @param par816c8acf07ce460d90f2622f2afaae0a1 Param1
     * @param par7a61d6984da64b0983de26f40e648fcc1 Param2
     * @param par9e75380b809a4a7c87af08c689404d6e1 prm_username
     *
     * @return Count of tb49ed8ecb75e94a14bd986cd09da5f4ab
     */
    public function mt49ed8ecb75e94a14bd986cd09da5f4abCount(Request $request, $par816c8acf07ce460d90f2622f2afaae0a1 = null, $par7a61d6984da64b0983de26f40e648fcc1 = null, $par9e75380b809a4a7c87af08c689404d6e1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt49ed8ecb75e94a14bd986cd09da5f4abCount($par816c8acf07ce460d90f2622f2afaae0a1, $par7a61d6984da64b0983de26f40e648fcc1, $par9e75380b809a4a7c87af08c689404d6e1, 0, 0, '', ''));
    }

    /**
     * sp_detallecatalogos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7d2563f12d3a4875b0f20bbd03ae0718/{parc5047ec7ff5741edbe7275120eade79d1}",
     *     description="sp_detallecatalogos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parc5047ec7ff5741edbe7275120eade79d1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_detallecatalogos - sp_detallecatalogos.
     *
     * @param parc5047ec7ff5741edbe7275120eade79d1 prm_username
     *
     * @return string with result
     */
    public function mt7d2563f12d3a4875b0f20bbd03ae0718(Request $request, $parc5047ec7ff5741edbe7275120eade79d1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt7d2563f12d3a4875b0f20bbd03ae0718($parc5047ec7ff5741edbe7275120eade79d1));
    }

    /**
     * sp_edit_ct_ca_users.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/cd58c2d719244584b22b7eca5d30f60a/{par9b6900dab5de4694acfab6b3b8717dd41}/{par448e6f6786c645329dba568597524dea1}/{pard0946669660245b19a26fe94b6fe1b8a1}",
     *     description="sp_edit_ct_ca_users",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par9b6900dab5de4694acfab6b3b8717dd41",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par448e6f6786c645329dba568597524dea1",
     *         in="path",
     *         description="prm_pk_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="pard0946669660245b19a26fe94b6fe1b8a1",
     *         in="path",
     *         description="prm_centros_trabajo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_edit_ct_ca_users - sp_edit_ct_ca_users.
     *
     * @param par9b6900dab5de4694acfab6b3b8717dd41 prm_username
     * @param par448e6f6786c645329dba568597524dea1 prm_pk_username
     * @param pard0946669660245b19a26fe94b6fe1b8a1 prm_centros_trabajo
     *
     * @return string with result
     */
    public function mtcd58c2d719244584b22b7eca5d30f60a(Request $request, $par9b6900dab5de4694acfab6b3b8717dd41 = null, $par448e6f6786c645329dba568597524dea1 = null, $pard0946669660245b19a26fe94b6fe1b8a1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtcd58c2d719244584b22b7eca5d30f60a($par9b6900dab5de4694acfab6b3b8717dd41, $par448e6f6786c645329dba568597524dea1, $pard0946669660245b19a26fe94b6fe1b8a1));
    }

    /**
     * sp_historico_precios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c215731e5c4a479d93836e917a97b4d1/{par417861170944496888b9473406bc1aec1}/{parb79ec9414ba949f789300f9dfd85d84f1}/{par633aef5a118c4402801fca5a3dc4c8bf1}",
     *     description="sp_historico_precios",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par417861170944496888b9473406bc1aec1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parb79ec9414ba949f789300f9dfd85d84f1",
     *         in="path",
     *         description="prm_pk_precios",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par633aef5a118c4402801fca5a3dc4c8bf1",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_historico_precios - sp_historico_precios.
     *
     * @param par417861170944496888b9473406bc1aec1 prm_username
     * @param parb79ec9414ba949f789300f9dfd85d84f1 prm_pk_precios
     * @param par633aef5a118c4402801fca5a3dc4c8bf1 prm_tipo
     *
     * @return string with result
     */
    public function mtc215731e5c4a479d93836e917a97b4d1(Request $request, $par417861170944496888b9473406bc1aec1 = null, $parb79ec9414ba949f789300f9dfd85d84f1 = null, $par633aef5a118c4402801fca5a3dc4c8bf1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtc215731e5c4a479d93836e917a97b4d1($par417861170944496888b9473406bc1aec1, $parb79ec9414ba949f789300f9dfd85d84f1, $par633aef5a118c4402801fca5a3dc4c8bf1));
    }

    /**
     * sp_lista_choper_pipa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ea1aef392f9c47bcb8d6db2d604cf516/{par9e24cf3251a6459ab3554c68f0a44bdc1}/{par12bea15ee4fb4cb690c43eb2ef28eac01}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_lista_choper_pipa",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par9e24cf3251a6459ab3554c68f0a44bdc1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par12bea15ee4fb4cb690c43eb2ef28eac01",
     *         in="path",
     *         description="prm_registro",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbea1aef392f9c47bcb8d6db2d604cf516"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_lista_choper_pipa - sp_lista_choper_pipa.
     *
     * @param par9e24cf3251a6459ab3554c68f0a44bdc1 prm_username
     * @param par12bea15ee4fb4cb690c43eb2ef28eac01 prm_registro
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbea1aef392f9c47bcb8d6db2d604cf516
     */
    public function mtea1aef392f9c47bcb8d6db2d604cf516(Request $request, $par9e24cf3251a6459ab3554c68f0a44bdc1 = null, $par12bea15ee4fb4cb690c43eb2ef28eac01 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtea1aef392f9c47bcb8d6db2d604cf516($par9e24cf3251a6459ab3554c68f0a44bdc1, $par12bea15ee4fb4cb690c43eb2ef28eac01, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_lista_choper_pipa.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ea1aef392f9c47bcb8d6db2d604cf516Count/{par9e24cf3251a6459ab3554c68f0a44bdc1}/{par12bea15ee4fb4cb690c43eb2ef28eac01}",
     *     description="sp_lista_choper_pipa - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par9e24cf3251a6459ab3554c68f0a44bdc1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par12bea15ee4fb4cb690c43eb2ef28eac01",
     *         in="path",
     *         description="prm_registro",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_lista_choper_pipa - sp_lista_choper_pipa.
     *
     * @param par9e24cf3251a6459ab3554c68f0a44bdc1 prm_username
     * @param par12bea15ee4fb4cb690c43eb2ef28eac01 prm_registro
     *
     * @return Count of tbea1aef392f9c47bcb8d6db2d604cf516
     */
    public function mtea1aef392f9c47bcb8d6db2d604cf516Count(Request $request, $par9e24cf3251a6459ab3554c68f0a44bdc1 = null, $par12bea15ee4fb4cb690c43eb2ef28eac01 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtea1aef392f9c47bcb8d6db2d604cf516Count($par9e24cf3251a6459ab3554c68f0a44bdc1, $par12bea15ee4fb4cb690c43eb2ef28eac01, 0, 0, '', ''));
    }

    /**
     * sp_lista_cp.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6462c304a8974f90a1cccd7ac38cc8ca/{parf5a55e76f3e542fb9f62b5fa693789361}/{pardb8712e48c034e0682ecfb008e3b94791}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_lista_cp",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parf5a55e76f3e542fb9f62b5fa693789361",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="pardb8712e48c034e0682ecfb008e3b94791",
     *         in="path",
     *         description="prm_cp",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb6462c304a8974f90a1cccd7ac38cc8ca"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_lista_cp - sp_lista_cp.
     *
     * @param parf5a55e76f3e542fb9f62b5fa693789361 prm_username
     * @param pardb8712e48c034e0682ecfb008e3b94791 prm_cp
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb6462c304a8974f90a1cccd7ac38cc8ca
     */
    public function mt6462c304a8974f90a1cccd7ac38cc8ca(Request $request, $parf5a55e76f3e542fb9f62b5fa693789361 = null, $pardb8712e48c034e0682ecfb008e3b94791 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt6462c304a8974f90a1cccd7ac38cc8ca($parf5a55e76f3e542fb9f62b5fa693789361, $pardb8712e48c034e0682ecfb008e3b94791, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_lista_cp.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6462c304a8974f90a1cccd7ac38cc8caCount/{parf5a55e76f3e542fb9f62b5fa693789361}/{pardb8712e48c034e0682ecfb008e3b94791}",
     *     description="sp_lista_cp - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parf5a55e76f3e542fb9f62b5fa693789361",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="pardb8712e48c034e0682ecfb008e3b94791",
     *         in="path",
     *         description="prm_cp",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_lista_cp - sp_lista_cp.
     *
     * @param parf5a55e76f3e542fb9f62b5fa693789361 prm_username
     * @param pardb8712e48c034e0682ecfb008e3b94791 prm_cp
     *
     * @return Count of tb6462c304a8974f90a1cccd7ac38cc8ca
     */
    public function mt6462c304a8974f90a1cccd7ac38cc8caCount(Request $request, $parf5a55e76f3e542fb9f62b5fa693789361 = null, $pardb8712e48c034e0682ecfb008e3b94791 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt6462c304a8974f90a1cccd7ac38cc8caCount($parf5a55e76f3e542fb9f62b5fa693789361, $pardb8712e48c034e0682ecfb008e3b94791, 0, 0, '', ''));
    }

    /**
     * sp_lista_cp_estado.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0f00f028bdfe478b8490bcdbaa764ae0/{par6b5609fb363d4ac18c72085a3e89d8eb1}/{parca3dc4b167f24301aa66ce525ce9bcd41}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_lista_cp_estado",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par6b5609fb363d4ac18c72085a3e89d8eb1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parca3dc4b167f24301aa66ce525ce9bcd41",
     *         in="path",
     *         description="prm_cp",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb0f00f028bdfe478b8490bcdbaa764ae0"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_lista_cp_estado - sp_lista_cp_estado.
     *
     * @param par6b5609fb363d4ac18c72085a3e89d8eb1 prm_username
     * @param parca3dc4b167f24301aa66ce525ce9bcd41 prm_cp
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb0f00f028bdfe478b8490bcdbaa764ae0
     */
    public function mt0f00f028bdfe478b8490bcdbaa764ae0(Request $request, $par6b5609fb363d4ac18c72085a3e89d8eb1 = null, $parca3dc4b167f24301aa66ce525ce9bcd41 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt0f00f028bdfe478b8490bcdbaa764ae0($par6b5609fb363d4ac18c72085a3e89d8eb1, $parca3dc4b167f24301aa66ce525ce9bcd41, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_lista_cp_estado.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0f00f028bdfe478b8490bcdbaa764ae0Count/{par6b5609fb363d4ac18c72085a3e89d8eb1}/{parca3dc4b167f24301aa66ce525ce9bcd41}",
     *     description="sp_lista_cp_estado - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par6b5609fb363d4ac18c72085a3e89d8eb1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parca3dc4b167f24301aa66ce525ce9bcd41",
     *         in="path",
     *         description="prm_cp",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_lista_cp_estado - sp_lista_cp_estado.
     *
     * @param par6b5609fb363d4ac18c72085a3e89d8eb1 prm_username
     * @param parca3dc4b167f24301aa66ce525ce9bcd41 prm_cp
     *
     * @return Count of tb0f00f028bdfe478b8490bcdbaa764ae0
     */
    public function mt0f00f028bdfe478b8490bcdbaa764ae0Count(Request $request, $par6b5609fb363d4ac18c72085a3e89d8eb1 = null, $parca3dc4b167f24301aa66ce525ce9bcd41 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt0f00f028bdfe478b8490bcdbaa764ae0Count($par6b5609fb363d4ac18c72085a3e89d8eb1, $parca3dc4b167f24301aa66ce525ce9bcd41, 0, 0, '', ''));
    }

    /**
     * sp_lista_cp_municipio.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7ca475f4dccc4ce0871a8830d204a78f/{par86273de922bc43edb2d9e24c40402a061}/{parfb0a2e8676714ebfb7294b2638593d951}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_lista_cp_municipio",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par86273de922bc43edb2d9e24c40402a061",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parfb0a2e8676714ebfb7294b2638593d951",
     *         in="path",
     *         description="prm_cp",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb7ca475f4dccc4ce0871a8830d204a78f"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_lista_cp_municipio - sp_lista_cp_municipio.
     *
     * @param par86273de922bc43edb2d9e24c40402a061 prm_username
     * @param parfb0a2e8676714ebfb7294b2638593d951 prm_cp
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb7ca475f4dccc4ce0871a8830d204a78f
     */
    public function mt7ca475f4dccc4ce0871a8830d204a78f(Request $request, $par86273de922bc43edb2d9e24c40402a061 = null, $parfb0a2e8676714ebfb7294b2638593d951 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt7ca475f4dccc4ce0871a8830d204a78f($par86273de922bc43edb2d9e24c40402a061, $parfb0a2e8676714ebfb7294b2638593d951, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_lista_cp_municipio.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7ca475f4dccc4ce0871a8830d204a78fCount/{par86273de922bc43edb2d9e24c40402a061}/{parfb0a2e8676714ebfb7294b2638593d951}",
     *     description="sp_lista_cp_municipio - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par86273de922bc43edb2d9e24c40402a061",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parfb0a2e8676714ebfb7294b2638593d951",
     *         in="path",
     *         description="prm_cp",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_lista_cp_municipio - sp_lista_cp_municipio.
     *
     * @param par86273de922bc43edb2d9e24c40402a061 prm_username
     * @param parfb0a2e8676714ebfb7294b2638593d951 prm_cp
     *
     * @return Count of tb7ca475f4dccc4ce0871a8830d204a78f
     */
    public function mt7ca475f4dccc4ce0871a8830d204a78fCount(Request $request, $par86273de922bc43edb2d9e24c40402a061 = null, $parfb0a2e8676714ebfb7294b2638593d951 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt7ca475f4dccc4ce0871a8830d204a78fCount($par86273de922bc43edb2d9e24c40402a061, $parfb0a2e8676714ebfb7294b2638593d951, 0, 0, '', ''));
    }

    /**
     * sp_menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/5010349a1a934d348fa7face0f3aacfe/{parb04767105e0b4a2080f954b3221a1bdc1}",
     *     description="sp_menu",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb04767105e0b4a2080f954b3221a1bdc1",
     *         in="path",
     *         description="username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_menu - sp_menu.
     *
     * @param parb04767105e0b4a2080f954b3221a1bdc1 username
     *
     * @return string with result
     */
    public function mt5010349a1a934d348fa7face0f3aacfe(Request $request, $parb04767105e0b4a2080f954b3221a1bdc1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt5010349a1a934d348fa7face0f3aacfe($parb04767105e0b4a2080f954b3221a1bdc1));
    }

    /**
     * sp_pefil_sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/26750564b2564f5e89ff361999464a6b/{parb553375065dd4edc8a521042df398f20}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_pefil_sistema",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb553375065dd4edc8a521042df398f20",
     *         in="path",
     *         description="PK_USUARIOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb26750564b2564f5e89ff361999464a6b"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_pefil_sistema - sp_pefil_sistema.
     *
     * @param parb553375065dd4edc8a521042df398f20 PK_USUARIOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb26750564b2564f5e89ff361999464a6b
     */
    public function mt26750564b2564f5e89ff361999464a6b(Request $request, $parb553375065dd4edc8a521042df398f20 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt26750564b2564f5e89ff361999464a6b($parb553375065dd4edc8a521042df398f20, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_pefil_sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/26750564b2564f5e89ff361999464a6bCount/{parb553375065dd4edc8a521042df398f20}",
     *     description="sp_pefil_sistema - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb553375065dd4edc8a521042df398f20",
     *         in="path",
     *         description="PK_USUARIOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_pefil_sistema - sp_pefil_sistema.
     *
     * @param parb553375065dd4edc8a521042df398f20 PK_USUARIOS
     *
     * @return Count of tb26750564b2564f5e89ff361999464a6b
     */
    public function mt26750564b2564f5e89ff361999464a6bCount(Request $request, $parb553375065dd4edc8a521042df398f20 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt26750564b2564f5e89ff361999464a6bCount($parb553375065dd4edc8a521042df398f20, 0, 0, '', ''));
    }

    /**
     * sp_perfil_users.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3efd70b4c98a43f7a7268659f1739285/{par2c538f917e504cf8a065ab41deb1fd7b1}",
     *     description="sp_perfil_users",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par2c538f917e504cf8a065ab41deb1fd7b1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_perfil_users - sp_perfil_users.
     *
     * @param par2c538f917e504cf8a065ab41deb1fd7b1 prm_username
     *
     * @return string with result
     */
    public function mt3efd70b4c98a43f7a7268659f1739285(Request $request, $par2c538f917e504cf8a065ab41deb1fd7b1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt3efd70b4c98a43f7a7268659f1739285($par2c538f917e504cf8a065ab41deb1fd7b1));
    }

    /**
     * sp_perfilmenu_val.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/aa7f2fe267ab46daa2ebbb8120a72f1e/{parec22120a3d3a41f79fc530d2187b0c0a1}/{parfc986f5f4fb34e44b823d6e431b048ee1}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_perfilmenu_val",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parec22120a3d3a41f79fc530d2187b0c0a1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parfc986f5f4fb34e44b823d6e431b048ee1",
     *         in="path",
     *         description="prm_perfil",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbaa7f2fe267ab46daa2ebbb8120a72f1e"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_perfilmenu_val - sp_perfilmenu_val.
     *
     * @param parec22120a3d3a41f79fc530d2187b0c0a1 prm_username
     * @param parfc986f5f4fb34e44b823d6e431b048ee1 prm_perfil
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbaa7f2fe267ab46daa2ebbb8120a72f1e
     */
    public function mtaa7f2fe267ab46daa2ebbb8120a72f1e(Request $request, $parec22120a3d3a41f79fc530d2187b0c0a1 = null, $parfc986f5f4fb34e44b823d6e431b048ee1 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtaa7f2fe267ab46daa2ebbb8120a72f1e($parec22120a3d3a41f79fc530d2187b0c0a1, $parfc986f5f4fb34e44b823d6e431b048ee1, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_perfilmenu_val.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/aa7f2fe267ab46daa2ebbb8120a72f1eCount/{parec22120a3d3a41f79fc530d2187b0c0a1}/{parfc986f5f4fb34e44b823d6e431b048ee1}",
     *     description="sp_perfilmenu_val - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parec22120a3d3a41f79fc530d2187b0c0a1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parfc986f5f4fb34e44b823d6e431b048ee1",
     *         in="path",
     *         description="prm_perfil",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_perfilmenu_val - sp_perfilmenu_val.
     *
     * @param parec22120a3d3a41f79fc530d2187b0c0a1 prm_username
     * @param parfc986f5f4fb34e44b823d6e431b048ee1 prm_perfil
     *
     * @return Count of tbaa7f2fe267ab46daa2ebbb8120a72f1e
     */
    public function mtaa7f2fe267ab46daa2ebbb8120a72f1eCount(Request $request, $parec22120a3d3a41f79fc530d2187b0c0a1 = null, $parfc986f5f4fb34e44b823d6e431b048ee1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtaa7f2fe267ab46daa2ebbb8120a72f1eCount($parec22120a3d3a41f79fc530d2187b0c0a1, $parfc986f5f4fb34e44b823d6e431b048ee1, 0, 0, '', ''));
    }

    /**
     * sp_preregistro_formato.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/0b839269b0264914812909818ffddfd9/{pard1e016be4f234b77b736d7dcdeb428a91}",
     *     description="sp_preregistro_formato",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pard1e016be4f234b77b736d7dcdeb428a91",
     *         in="path",
     *         description="prm_productor",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_preregistro_formato - sp_preregistro_formato.
     *
     * @param pard1e016be4f234b77b736d7dcdeb428a91 prm_productor
     *
     * @return string with result
     */
    public function mt0b839269b0264914812909818ffddfd9(Request $request, $pard1e016be4f234b77b736d7dcdeb428a91 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt0b839269b0264914812909818ffddfd9($pard1e016be4f234b77b736d7dcdeb428a91));
    }

    /**
     * sp_preregistro_funciones.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/925a192d21da4d8cacb0c934a665ece0",
     *     description="sp_preregistro_funciones",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_preregistro_funciones - sp_preregistro_funciones.
     *
     * @return string with result
     */
    public function mt925a192d21da4d8cacb0c934a665ece0(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt925a192d21da4d8cacb0c934a665ece0());
    }

    /**
     * sp_preregistro_menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/65839b2d62ff4681b22a59c4685dea61",
     *     description="sp_preregistro_menu",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_preregistro_menu - sp_preregistro_menu.
     *
     * @return string with result
     */
    public function mt65839b2d62ff4681b22a59c4685dea61(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt65839b2d62ff4681b22a59c4685dea61());
    }

    /**
     * sp_productor_codigo1.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/78425363b8964e69b078a6c87a0bf345/{par4a3af8ffced0440a861dfc0a64a7df881}/{par00626c2ae46a478aa2100971433ea90d1}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_productor_codigo",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par4a3af8ffced0440a861dfc0a64a7df881",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par00626c2ae46a478aa2100971433ea90d1",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb78425363b8964e69b078a6c87a0bf345"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productor_codigo1 - sp_productor_codigo.
     *
     * @param par4a3af8ffced0440a861dfc0a64a7df881 prm_username
     * @param par00626c2ae46a478aa2100971433ea90d1 prm_tipo
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb78425363b8964e69b078a6c87a0bf345
     */
    public function mt78425363b8964e69b078a6c87a0bf345(Request $request, $par4a3af8ffced0440a861dfc0a64a7df881 = null, $par00626c2ae46a478aa2100971433ea90d1 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt78425363b8964e69b078a6c87a0bf345($par4a3af8ffced0440a861dfc0a64a7df881, $par00626c2ae46a478aa2100971433ea90d1, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_productor_codigo1.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/78425363b8964e69b078a6c87a0bf345Count/{par4a3af8ffced0440a861dfc0a64a7df881}/{par00626c2ae46a478aa2100971433ea90d1}",
     *     description="sp_productor_codigo - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par4a3af8ffced0440a861dfc0a64a7df881",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par00626c2ae46a478aa2100971433ea90d1",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productor_codigo1 - sp_productor_codigo.
     *
     * @param par4a3af8ffced0440a861dfc0a64a7df881 prm_username
     * @param par00626c2ae46a478aa2100971433ea90d1 prm_tipo
     *
     * @return Count of tb78425363b8964e69b078a6c87a0bf345
     */
    public function mt78425363b8964e69b078a6c87a0bf345Count(Request $request, $par4a3af8ffced0440a861dfc0a64a7df881 = null, $par00626c2ae46a478aa2100971433ea90d1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt78425363b8964e69b078a6c87a0bf345Count($par4a3af8ffced0440a861dfc0a64a7df881, $par00626c2ae46a478aa2100971433ea90d1, 0, 0, '', ''));
    }

    /**
     * sp_productor_codigo2.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/1b33a20dd3bf44b5a310cca19d43f862/{pard6816c281b6c43109c3619b10d65fcd71}/{parbabd0518f019426bbe1a7b826e2670b91}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_productor_codigo2",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pard6816c281b6c43109c3619b10d65fcd71",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parbabd0518f019426bbe1a7b826e2670b91",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb1b33a20dd3bf44b5a310cca19d43f862"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productor_codigo2 - sp_productor_codigo2.
     *
     * @param pard6816c281b6c43109c3619b10d65fcd71 prm_username
     * @param parbabd0518f019426bbe1a7b826e2670b91 prm_tipo
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb1b33a20dd3bf44b5a310cca19d43f862
     */
    public function mt1b33a20dd3bf44b5a310cca19d43f862(Request $request, $pard6816c281b6c43109c3619b10d65fcd71 = null, $parbabd0518f019426bbe1a7b826e2670b91 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt1b33a20dd3bf44b5a310cca19d43f862($pard6816c281b6c43109c3619b10d65fcd71, $parbabd0518f019426bbe1a7b826e2670b91, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_productor_codigo2.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/1b33a20dd3bf44b5a310cca19d43f862Count/{pard6816c281b6c43109c3619b10d65fcd71}/{parbabd0518f019426bbe1a7b826e2670b91}",
     *     description="sp_productor_codigo2 - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pard6816c281b6c43109c3619b10d65fcd71",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parbabd0518f019426bbe1a7b826e2670b91",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productor_codigo2 - sp_productor_codigo2.
     *
     * @param pard6816c281b6c43109c3619b10d65fcd71 prm_username
     * @param parbabd0518f019426bbe1a7b826e2670b91 prm_tipo
     *
     * @return Count of tb1b33a20dd3bf44b5a310cca19d43f862
     */
    public function mt1b33a20dd3bf44b5a310cca19d43f862Count(Request $request, $pard6816c281b6c43109c3619b10d65fcd71 = null, $parbabd0518f019426bbe1a7b826e2670b91 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt1b33a20dd3bf44b5a310cca19d43f862Count($pard6816c281b6c43109c3619b10d65fcd71, $parbabd0518f019426bbe1a7b826e2670b91, 0, 0, '', ''));
    }

    /**
     * sp_productor_detalle.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/fd3fb9893d9c4da6b0dca782dc587b28/{par95e3503650604d209d84abeedea2e04a1}/{par9e8707669f824b83bee0a7c24cd43ef01}/{par34ae96188d4a46079115205f10f197c31}",
     *     description="sp_productor_detalle",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par95e3503650604d209d84abeedea2e04a1",
     *         in="path",
     *         description="prm_productor",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par9e8707669f824b83bee0a7c24cd43ef01",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par34ae96188d4a46079115205f10f197c31",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productor_detalle - sp_productor_detalle.
     *
     * @param par95e3503650604d209d84abeedea2e04a1 prm_productor
     * @param par9e8707669f824b83bee0a7c24cd43ef01 prm_tipo
     * @param par34ae96188d4a46079115205f10f197c31 prm_username
     *
     * @return string with result
     */
    public function mtfd3fb9893d9c4da6b0dca782dc587b28(Request $request, $par95e3503650604d209d84abeedea2e04a1 = null, $par9e8707669f824b83bee0a7c24cd43ef01 = null, $par34ae96188d4a46079115205f10f197c31 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtfd3fb9893d9c4da6b0dca782dc587b28($par95e3503650604d209d84abeedea2e04a1, $par9e8707669f824b83bee0a7c24cd43ef01, $par34ae96188d4a46079115205f10f197c31));
    }

    /**
     * sp_productor_estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c27ef752528f45dc99bfc610429aea62/{parff8f5817eb9749f6bf3d666ed6acff721}/{para5c63d7712fe407aae4e81f4c8045e701}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_productor_estatus",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parff8f5817eb9749f6bf3d666ed6acff721",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="para5c63d7712fe407aae4e81f4c8045e701",
     *         in="path",
     *         description="prm_productor",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbc27ef752528f45dc99bfc610429aea62"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productor_estatus - sp_productor_estatus.
     *
     * @param parff8f5817eb9749f6bf3d666ed6acff721 prm_username
     * @param para5c63d7712fe407aae4e81f4c8045e701 prm_productor
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbc27ef752528f45dc99bfc610429aea62
     */
    public function mtc27ef752528f45dc99bfc610429aea62(Request $request, $parff8f5817eb9749f6bf3d666ed6acff721 = null, $para5c63d7712fe407aae4e81f4c8045e701 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtc27ef752528f45dc99bfc610429aea62($parff8f5817eb9749f6bf3d666ed6acff721, $para5c63d7712fe407aae4e81f4c8045e701, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_productor_estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c27ef752528f45dc99bfc610429aea62Count/{parff8f5817eb9749f6bf3d666ed6acff721}/{para5c63d7712fe407aae4e81f4c8045e701}",
     *     description="sp_productor_estatus - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parff8f5817eb9749f6bf3d666ed6acff721",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="para5c63d7712fe407aae4e81f4c8045e701",
     *         in="path",
     *         description="prm_productor",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productor_estatus - sp_productor_estatus.
     *
     * @param parff8f5817eb9749f6bf3d666ed6acff721 prm_username
     * @param para5c63d7712fe407aae4e81f4c8045e701 prm_productor
     *
     * @return Count of tbc27ef752528f45dc99bfc610429aea62
     */
    public function mtc27ef752528f45dc99bfc610429aea62Count(Request $request, $parff8f5817eb9749f6bf3d666ed6acff721 = null, $para5c63d7712fe407aae4e81f4c8045e701 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtc27ef752528f45dc99bfc610429aea62Count($parff8f5817eb9749f6bf3d666ed6acff721, $para5c63d7712fe407aae4e81f4c8045e701, 0, 0, '', ''));
    }

    /**
     * sp_productor_update.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/ca6e14dc22ab43d39b6ed9151929ab40/{par9d712dac7967477a853d0d55459b502d1}/{para68909de4efd417781a73306db4ed7a91}/{par14150a6b46234cb68f37c8d870b32cb31}/{par42ee21c3423346b18ad580fa49a765e91}",
     *     description="sp_productor_update",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par9d712dac7967477a853d0d55459b502d1",
     *         in="path",
     *         description="prm_registro",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="para68909de4efd417781a73306db4ed7a91",
     *         in="path",
     *         description="prm_etatus",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par14150a6b46234cb68f37c8d870b32cb31",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par42ee21c3423346b18ad580fa49a765e91",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productor_update - sp_productor_update.
     *
     * @param par9d712dac7967477a853d0d55459b502d1 prm_registro
     * @param para68909de4efd417781a73306db4ed7a91 prm_etatus
     * @param par14150a6b46234cb68f37c8d870b32cb31 prm_tipo
     * @param par42ee21c3423346b18ad580fa49a765e91 prm_username
     */
    public function mtca6e14dc22ab43d39b6ed9151929ab40(Request $request, $par9d712dac7967477a853d0d55459b502d1 = null, $para68909de4efd417781a73306db4ed7a91 = null, $par14150a6b46234cb68f37c8d870b32cb31 = null, $par42ee21c3423346b18ad580fa49a765e91 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        \App\repf782f923fd0247bd9f4010b717e52999::mtca6e14dc22ab43d39b6ed9151929ab40($par9d712dac7967477a853d0d55459b502d1, $para68909de4efd417781a73306db4ed7a91, $par14150a6b46234cb68f37c8d870b32cb31, $par42ee21c3423346b18ad580fa49a765e91);

        return '';
    }

    /**
     * sp_productores.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d2d5f1c690e34c0ebeda831ee2d93002/{parb85fd30e43cb4714bf8dcab37bb9ac121}/{par46f7c6b566664092858c80372204bb001}/{pard3a06ed3dda04cfa9bb599eb2379ad2a1}/{par5d8de31606df4d2f81817e597467e9161}/{par5efb42a4d5d44af1bb329c9cc23b5b831}/{par2f1027332d3749e4a0e59774040bd8561}/{pardcc137c809c241e2b40639cfa0c37c0b1}/{pare53dc1e09d504d95816f73d2028b8e9c1}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_productores",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb85fd30e43cb4714bf8dcab37bb9ac121",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par46f7c6b566664092858c80372204bb001",
     *         in="path",
     *         description="prm_productor",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="pard3a06ed3dda04cfa9bb599eb2379ad2a1",
     *         in="path",
     *         description="prm_centrotrabajo",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par5d8de31606df4d2f81817e597467e9161",
     *         in="path",
     *         description="prm_centroacopio",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par5efb42a4d5d44af1bb329c9cc23b5b831",
     *         in="path",
     *         description="prm_tamanoproductor",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par2f1027332d3749e4a0e59774040bd8561",
     *         in="path",
     *         description="prm_tipoleche",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="pardcc137c809c241e2b40639cfa0c37c0b1",
     *         in="path",
     *         description="prm_estatus",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="pare53dc1e09d504d95816f73d2028b8e9c1",
     *         in="path",
     *         description="prm_codigo_pro",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbd2d5f1c690e34c0ebeda831ee2d93002"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productores - sp_productores.
     *
     * @param parb85fd30e43cb4714bf8dcab37bb9ac121 prm_username
     * @param par46f7c6b566664092858c80372204bb001 prm_productor
     * @param pard3a06ed3dda04cfa9bb599eb2379ad2a1 prm_centrotrabajo
     * @param par5d8de31606df4d2f81817e597467e9161 prm_centroacopio
     * @param par5efb42a4d5d44af1bb329c9cc23b5b831 prm_tamanoproductor
     * @param par2f1027332d3749e4a0e59774040bd8561 prm_tipoleche
     * @param pardcc137c809c241e2b40639cfa0c37c0b1 prm_estatus
     * @param pare53dc1e09d504d95816f73d2028b8e9c1 prm_codigo_pro
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbd2d5f1c690e34c0ebeda831ee2d93002
     */
    public function mtd2d5f1c690e34c0ebeda831ee2d93002(Request $request, $parb85fd30e43cb4714bf8dcab37bb9ac121 = null, $par46f7c6b566664092858c80372204bb001 = null, $pard3a06ed3dda04cfa9bb599eb2379ad2a1 = null, $par5d8de31606df4d2f81817e597467e9161 = null, $par5efb42a4d5d44af1bb329c9cc23b5b831 = null, $par2f1027332d3749e4a0e59774040bd8561 = null, $pardcc137c809c241e2b40639cfa0c37c0b1 = null, $pare53dc1e09d504d95816f73d2028b8e9c1 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtd2d5f1c690e34c0ebeda831ee2d93002($parb85fd30e43cb4714bf8dcab37bb9ac121, $par46f7c6b566664092858c80372204bb001, $pard3a06ed3dda04cfa9bb599eb2379ad2a1, $par5d8de31606df4d2f81817e597467e9161, $par5efb42a4d5d44af1bb329c9cc23b5b831, $par2f1027332d3749e4a0e59774040bd8561, $pardcc137c809c241e2b40639cfa0c37c0b1, $pare53dc1e09d504d95816f73d2028b8e9c1, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_productores.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d2d5f1c690e34c0ebeda831ee2d93002Count/{parb85fd30e43cb4714bf8dcab37bb9ac121}/{par46f7c6b566664092858c80372204bb001}/{pard3a06ed3dda04cfa9bb599eb2379ad2a1}/{par5d8de31606df4d2f81817e597467e9161}/{par5efb42a4d5d44af1bb329c9cc23b5b831}/{par2f1027332d3749e4a0e59774040bd8561}/{pardcc137c809c241e2b40639cfa0c37c0b1}/{pare53dc1e09d504d95816f73d2028b8e9c1}",
     *     description="sp_productores - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb85fd30e43cb4714bf8dcab37bb9ac121",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par46f7c6b566664092858c80372204bb001",
     *         in="path",
     *         description="prm_productor",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="pard3a06ed3dda04cfa9bb599eb2379ad2a1",
     *         in="path",
     *         description="prm_centrotrabajo",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par5d8de31606df4d2f81817e597467e9161",
     *         in="path",
     *         description="prm_centroacopio",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par5efb42a4d5d44af1bb329c9cc23b5b831",
     *         in="path",
     *         description="prm_tamanoproductor",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par2f1027332d3749e4a0e59774040bd8561",
     *         in="path",
     *         description="prm_tipoleche",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="pardcc137c809c241e2b40639cfa0c37c0b1",
     *         in="path",
     *         description="prm_estatus",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="pare53dc1e09d504d95816f73d2028b8e9c1",
     *         in="path",
     *         description="prm_codigo_pro",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productores - sp_productores.
     *
     * @param parb85fd30e43cb4714bf8dcab37bb9ac121 prm_username
     * @param par46f7c6b566664092858c80372204bb001 prm_productor
     * @param pard3a06ed3dda04cfa9bb599eb2379ad2a1 prm_centrotrabajo
     * @param par5d8de31606df4d2f81817e597467e9161 prm_centroacopio
     * @param par5efb42a4d5d44af1bb329c9cc23b5b831 prm_tamanoproductor
     * @param par2f1027332d3749e4a0e59774040bd8561 prm_tipoleche
     * @param pardcc137c809c241e2b40639cfa0c37c0b1 prm_estatus
     * @param pare53dc1e09d504d95816f73d2028b8e9c1 prm_codigo_pro
     *
     * @return Count of tbd2d5f1c690e34c0ebeda831ee2d93002
     */
    public function mtd2d5f1c690e34c0ebeda831ee2d93002Count(Request $request, $parb85fd30e43cb4714bf8dcab37bb9ac121 = null, $par46f7c6b566664092858c80372204bb001 = null, $pard3a06ed3dda04cfa9bb599eb2379ad2a1 = null, $par5d8de31606df4d2f81817e597467e9161 = null, $par5efb42a4d5d44af1bb329c9cc23b5b831 = null, $par2f1027332d3749e4a0e59774040bd8561 = null, $pardcc137c809c241e2b40639cfa0c37c0b1 = null, $pare53dc1e09d504d95816f73d2028b8e9c1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtd2d5f1c690e34c0ebeda831ee2d93002Count($parb85fd30e43cb4714bf8dcab37bb9ac121, $par46f7c6b566664092858c80372204bb001, $pard3a06ed3dda04cfa9bb599eb2379ad2a1, $par5d8de31606df4d2f81817e597467e9161, $par5efb42a4d5d44af1bb329c9cc23b5b831, $par2f1027332d3749e4a0e59774040bd8561, $pardcc137c809c241e2b40639cfa0c37c0b1, $pare53dc1e09d504d95816f73d2028b8e9c1, 0, 0, '', ''));
    }

    /**
     * sp_productores_title.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/dd1b4bd3d5164c59b612acc53b00fd2c/{parda155728f36748dba71fe5e81fbb77be1}/{para183bed0492b4bc29be1b8c39d156cc21}/{par16debc37a7c040be8372756e3e0dedde1}/{par3c3befdcd1524723a0b81975461ffad11}/{pard8d80ef0471a4381b2324550fc63218c1}/{par2848dfff9dea4f4191de27cb41106a711}/{parfee3929ee94d41ac80caa5e7cf60f8831}/{par3fe33f8cdee14917aff0e0bb215619851}/{par62c60baf1da3437f834709b0b4143c991}",
     *     description="sp_productores_title",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parda155728f36748dba71fe5e81fbb77be1",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="para183bed0492b4bc29be1b8c39d156cc21",
     *         in="path",
     *         description="prm_a",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par16debc37a7c040be8372756e3e0dedde1",
     *         in="path",
     *         description="prm_b",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par3c3befdcd1524723a0b81975461ffad11",
     *         in="path",
     *         description="prm_c",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="pard8d80ef0471a4381b2324550fc63218c1",
     *         in="path",
     *         description="prm_d",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par2848dfff9dea4f4191de27cb41106a711",
     *         in="path",
     *         description="prm_e",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="parfee3929ee94d41ac80caa5e7cf60f8831",
     *         in="path",
     *         description="prm_f",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par3fe33f8cdee14917aff0e0bb215619851",
     *         in="path",
     *         description="prm_g",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par62c60baf1da3437f834709b0b4143c991",
     *         in="path",
     *         description="prm_h",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_productores_title - sp_productores_title.
     *
     * @param parda155728f36748dba71fe5e81fbb77be1 prm_username
     * @param para183bed0492b4bc29be1b8c39d156cc21 prm_a
     * @param par16debc37a7c040be8372756e3e0dedde1 prm_b
     * @param par3c3befdcd1524723a0b81975461ffad11 prm_c
     * @param pard8d80ef0471a4381b2324550fc63218c1 prm_d
     * @param par2848dfff9dea4f4191de27cb41106a711 prm_e
     * @param parfee3929ee94d41ac80caa5e7cf60f8831 prm_f
     * @param par3fe33f8cdee14917aff0e0bb215619851 prm_g
     * @param par62c60baf1da3437f834709b0b4143c991 prm_h
     *
     * @return string with result
     */
    public function mtdd1b4bd3d5164c59b612acc53b00fd2c(Request $request, $parda155728f36748dba71fe5e81fbb77be1 = null, $para183bed0492b4bc29be1b8c39d156cc21 = null, $par16debc37a7c040be8372756e3e0dedde1 = null, $par3c3befdcd1524723a0b81975461ffad11 = null, $pard8d80ef0471a4381b2324550fc63218c1 = null, $par2848dfff9dea4f4191de27cb41106a711 = null, $parfee3929ee94d41ac80caa5e7cf60f8831 = null, $par3fe33f8cdee14917aff0e0bb215619851 = null, $par62c60baf1da3437f834709b0b4143c991 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtdd1b4bd3d5164c59b612acc53b00fd2c($parda155728f36748dba71fe5e81fbb77be1, $para183bed0492b4bc29be1b8c39d156cc21, $par16debc37a7c040be8372756e3e0dedde1, $par3c3befdcd1524723a0b81975461ffad11, $pard8d80ef0471a4381b2324550fc63218c1, $par2848dfff9dea4f4191de27cb41106a711, $parfee3929ee94d41ac80caa5e7cf60f8831, $par3fe33f8cdee14917aff0e0bb215619851, $par62c60baf1da3437f834709b0b4143c991));
    }

    /**
     * sp_recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/baec03eedcbb43e6b2fad5411c22cdc1/{par8c47d4e616ea43cbb7bb47f514d55c581}/{par741b7424515e4f09aabf0d882d9054901}/{para2ba9002a43e4e4bbb6a7148eb52773f1}/{par5a3dd495a1224d9696b3b4612797c6341}/{pard54aa832544b480a88a8bf1ec5980f101}/{par80ed1e37ec464d68b07a9972256c482c1}/{par920a511e4f004cab838a0c66239286001}/{pard20133d43c054c248802205c83e19b631}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_recibas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8c47d4e616ea43cbb7bb47f514d55c581",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par741b7424515e4f09aabf0d882d9054901",
     *         in="path",
     *         description="prm_prod_codcon",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="para2ba9002a43e4e4bbb6a7148eb52773f1",
     *         in="path",
     *         description="prm_semana",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par5a3dd495a1224d9696b3b4612797c6341",
     *         in="path",
     *         description="prm_tipoleche",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="pard54aa832544b480a88a8bf1ec5980f101",
     *         in="path",
     *         description="prm_fechainicial",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par80ed1e37ec464d68b07a9972256c482c1",
     *         in="path",
     *         description="prm_fechafinal",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par920a511e4f004cab838a0c66239286001",
     *         in="path",
     *         description="prm_gerenciaestatal",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="pard20133d43c054c248802205c83e19b631",
     *         in="path",
     *         description="prm_centroacopio",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbbaec03eedcbb43e6b2fad5411c22cdc1"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_recibas - sp_recibas.
     *
     * @param par8c47d4e616ea43cbb7bb47f514d55c581 prm_username
     * @param par741b7424515e4f09aabf0d882d9054901 prm_prod_codcon
     * @param para2ba9002a43e4e4bbb6a7148eb52773f1 prm_semana
     * @param par5a3dd495a1224d9696b3b4612797c6341 prm_tipoleche
     * @param pard54aa832544b480a88a8bf1ec5980f101 prm_fechainicial
     * @param par80ed1e37ec464d68b07a9972256c482c1 prm_fechafinal
     * @param par920a511e4f004cab838a0c66239286001 prm_gerenciaestatal
     * @param pard20133d43c054c248802205c83e19b631 prm_centroacopio
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbbaec03eedcbb43e6b2fad5411c22cdc1
     */
    public function mtbaec03eedcbb43e6b2fad5411c22cdc1(Request $request, $par8c47d4e616ea43cbb7bb47f514d55c581 = null, $par741b7424515e4f09aabf0d882d9054901 = null, $para2ba9002a43e4e4bbb6a7148eb52773f1 = null, $par5a3dd495a1224d9696b3b4612797c6341 = null, $pard54aa832544b480a88a8bf1ec5980f101 = null, $par80ed1e37ec464d68b07a9972256c482c1 = null, $par920a511e4f004cab838a0c66239286001 = null, $pard20133d43c054c248802205c83e19b631 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtbaec03eedcbb43e6b2fad5411c22cdc1($par8c47d4e616ea43cbb7bb47f514d55c581, $par741b7424515e4f09aabf0d882d9054901, $para2ba9002a43e4e4bbb6a7148eb52773f1, $par5a3dd495a1224d9696b3b4612797c6341, $pard54aa832544b480a88a8bf1ec5980f101, $par80ed1e37ec464d68b07a9972256c482c1, $par920a511e4f004cab838a0c66239286001, $pard20133d43c054c248802205c83e19b631, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_recibas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/baec03eedcbb43e6b2fad5411c22cdc1Count/{par8c47d4e616ea43cbb7bb47f514d55c581}/{par741b7424515e4f09aabf0d882d9054901}/{para2ba9002a43e4e4bbb6a7148eb52773f1}/{par5a3dd495a1224d9696b3b4612797c6341}/{pard54aa832544b480a88a8bf1ec5980f101}/{par80ed1e37ec464d68b07a9972256c482c1}/{par920a511e4f004cab838a0c66239286001}/{pard20133d43c054c248802205c83e19b631}",
     *     description="sp_recibas - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8c47d4e616ea43cbb7bb47f514d55c581",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par741b7424515e4f09aabf0d882d9054901",
     *         in="path",
     *         description="prm_prod_codcon",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="para2ba9002a43e4e4bbb6a7148eb52773f1",
     *         in="path",
     *         description="prm_semana",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par5a3dd495a1224d9696b3b4612797c6341",
     *         in="path",
     *         description="prm_tipoleche",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="pard54aa832544b480a88a8bf1ec5980f101",
     *         in="path",
     *         description="prm_fechainicial",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par80ed1e37ec464d68b07a9972256c482c1",
     *         in="path",
     *         description="prm_fechafinal",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par920a511e4f004cab838a0c66239286001",
     *         in="path",
     *         description="prm_gerenciaestatal",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="pard20133d43c054c248802205c83e19b631",
     *         in="path",
     *         description="prm_centroacopio",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_recibas - sp_recibas.
     *
     * @param par8c47d4e616ea43cbb7bb47f514d55c581 prm_username
     * @param par741b7424515e4f09aabf0d882d9054901 prm_prod_codcon
     * @param para2ba9002a43e4e4bbb6a7148eb52773f1 prm_semana
     * @param par5a3dd495a1224d9696b3b4612797c6341 prm_tipoleche
     * @param pard54aa832544b480a88a8bf1ec5980f101 prm_fechainicial
     * @param par80ed1e37ec464d68b07a9972256c482c1 prm_fechafinal
     * @param par920a511e4f004cab838a0c66239286001 prm_gerenciaestatal
     * @param pard20133d43c054c248802205c83e19b631 prm_centroacopio
     *
     * @return Count of tbbaec03eedcbb43e6b2fad5411c22cdc1
     */
    public function mtbaec03eedcbb43e6b2fad5411c22cdc1Count(Request $request, $par8c47d4e616ea43cbb7bb47f514d55c581 = null, $par741b7424515e4f09aabf0d882d9054901 = null, $para2ba9002a43e4e4bbb6a7148eb52773f1 = null, $par5a3dd495a1224d9696b3b4612797c6341 = null, $pard54aa832544b480a88a8bf1ec5980f101 = null, $par80ed1e37ec464d68b07a9972256c482c1 = null, $par920a511e4f004cab838a0c66239286001 = null, $pard20133d43c054c248802205c83e19b631 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtbaec03eedcbb43e6b2fad5411c22cdc1Count($par8c47d4e616ea43cbb7bb47f514d55c581, $par741b7424515e4f09aabf0d882d9054901, $para2ba9002a43e4e4bbb6a7148eb52773f1, $par5a3dd495a1224d9696b3b4612797c6341, $pard54aa832544b480a88a8bf1ec5980f101, $par80ed1e37ec464d68b07a9972256c482c1, $par920a511e4f004cab838a0c66239286001, $pard20133d43c054c248802205c83e19b631, 0, 0, '', ''));
    }

    /**
     * sp_recibas_title.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/80329598f9434db5874500497543c494/{pare2e1261e0a4d4b428088dc0f612b61051}",
     *     description="sp_recibas_title",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pare2e1261e0a4d4b428088dc0f612b61051",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_recibas_title - sp_recibas_title.
     *
     * @param pare2e1261e0a4d4b428088dc0f612b61051 prm_username
     *
     * @return string with result
     */
    public function mt80329598f9434db5874500497543c494(Request $request, $pare2e1261e0a4d4b428088dc0f612b61051 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt80329598f9434db5874500497543c494($pare2e1261e0a4d4b428088dc0f612b61051));
    }

    /**
     * sp_recuperar_documentos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/8e09ec1093d24dbc9f03f7cadd4bfde4/{pardde695519e934a00a9ed3118a881562c}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_recuperar_documentos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pardde695519e934a00a9ed3118a881562c",
     *         in="path",
     *         description="PK_DOCUMENTOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb8e09ec1093d24dbc9f03f7cadd4bfde4"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_recuperar_documentos - sp_recuperar_documentos.
     *
     * @param pardde695519e934a00a9ed3118a881562c PK_DOCUMENTOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb8e09ec1093d24dbc9f03f7cadd4bfde4
     */
    public function mt8e09ec1093d24dbc9f03f7cadd4bfde4(Request $request, $pardde695519e934a00a9ed3118a881562c = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt8e09ec1093d24dbc9f03f7cadd4bfde4($pardde695519e934a00a9ed3118a881562c, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_recuperar_documentos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/8e09ec1093d24dbc9f03f7cadd4bfde4Count/{pardde695519e934a00a9ed3118a881562c}",
     *     description="sp_recuperar_documentos - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="pardde695519e934a00a9ed3118a881562c",
     *         in="path",
     *         description="PK_DOCUMENTOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_recuperar_documentos - sp_recuperar_documentos.
     *
     * @param pardde695519e934a00a9ed3118a881562c PK_DOCUMENTOS
     *
     * @return Count of tb8e09ec1093d24dbc9f03f7cadd4bfde4
     */
    public function mt8e09ec1093d24dbc9f03f7cadd4bfde4Count(Request $request, $pardde695519e934a00a9ed3118a881562c = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt8e09ec1093d24dbc9f03f7cadd4bfde4Count($pardde695519e934a00a9ed3118a881562c, 0, 0, '', ''));
    }

    /**
     * sp_redirigir.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/4dc154931ab347f0bac9ec78cc721ef5/{par354d696c9e684306806c0dacf7397ab81}/{paracef50dec05c4ac6aa039c8d7a306b461}/{para98e3976538d4ee0b20ba7ce2dd579341}",
     *     description="sp_redirigir",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par354d696c9e684306806c0dacf7397ab81",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="paracef50dec05c4ac6aa039c8d7a306b461",
     *         in="path",
     *         description="prm_registro",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="para98e3976538d4ee0b20ba7ce2dd579341",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_redirigir - sp_redirigir.
     *
     * @param par354d696c9e684306806c0dacf7397ab81 prm_tipo
     * @param paracef50dec05c4ac6aa039c8d7a306b461 prm_registro
     * @param para98e3976538d4ee0b20ba7ce2dd579341 prm_username
     *
     * @return string with result
     */
    public function mt4dc154931ab347f0bac9ec78cc721ef5(Request $request, $par354d696c9e684306806c0dacf7397ab81 = null, $paracef50dec05c4ac6aa039c8d7a306b461 = null, $para98e3976538d4ee0b20ba7ce2dd579341 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt4dc154931ab347f0bac9ec78cc721ef5($par354d696c9e684306806c0dacf7397ab81, $paracef50dec05c4ac6aa039c8d7a306b461, $para98e3976538d4ee0b20ba7ce2dd579341));
    }

    /**
     * sp_style_script_modal.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/591ad99632d243319383f35dda484b5d/{parbfe99cbbc2764478a1146ed61dcfbe831}",
     *     description="sp_style_script_modal",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parbfe99cbbc2764478a1146ed61dcfbe831",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_style_script_modal - sp_style_script_modal.
     *
     * @param parbfe99cbbc2764478a1146ed61dcfbe831 prm_username
     *
     * @return string with result
     */
    public function mt591ad99632d243319383f35dda484b5d(Request $request, $parbfe99cbbc2764478a1146ed61dcfbe831 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt591ad99632d243319383f35dda484b5d($parbfe99cbbc2764478a1146ed61dcfbe831));
    }

    /**
     * sp_style_script_plantilla.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3fc85b88142d4de7a3c3ef763c8bdf60/{par6d4376ff0f654688b26b40f4eca6d2841}",
     *     description="sp_style_script_plantilla",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par6d4376ff0f654688b26b40f4eca6d2841",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_style_script_plantilla - sp_style_script_plantilla.
     *
     * @param par6d4376ff0f654688b26b40f4eca6d2841 prm_username
     *
     * @return string with result
     */
    public function mt3fc85b88142d4de7a3c3ef763c8bdf60(Request $request, $par6d4376ff0f654688b26b40f4eca6d2841 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt3fc85b88142d4de7a3c3ef763c8bdf60($par6d4376ff0f654688b26b40f4eca6d2841));
    }

    /**
     * sp_titulo_paginas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d1203cac9e0a4d2b8d8d3ac5e285d428/{par8e9cfc8933a449af80f5fd2fdaf0c7461}/{par949ac6762f824f589aa55df91c654a401}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Procedimiento Almacenado Contiene Título Páginas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8e9cfc8933a449af80f5fd2fdaf0c7461",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par949ac6762f824f589aa55df91c654a401",
     *         in="path",
     *         description="prm_pagina",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbd1203cac9e0a4d2b8d8d3ac5e285d428"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_titulo_paginas - Procedimiento Almacenado Contiene Título Páginas.
     *
     * @param par8e9cfc8933a449af80f5fd2fdaf0c7461 prm_username
     * @param par949ac6762f824f589aa55df91c654a401 prm_pagina
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbd1203cac9e0a4d2b8d8d3ac5e285d428
     */
    public function mtd1203cac9e0a4d2b8d8d3ac5e285d428(Request $request, $par8e9cfc8933a449af80f5fd2fdaf0c7461 = null, $par949ac6762f824f589aa55df91c654a401 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtd1203cac9e0a4d2b8d8d3ac5e285d428($par8e9cfc8933a449af80f5fd2fdaf0c7461, $par949ac6762f824f589aa55df91c654a401, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_titulo_paginas.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/d1203cac9e0a4d2b8d8d3ac5e285d428Count/{par8e9cfc8933a449af80f5fd2fdaf0c7461}/{par949ac6762f824f589aa55df91c654a401}",
     *     description="Procedimiento Almacenado Contiene Título Páginas - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8e9cfc8933a449af80f5fd2fdaf0c7461",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par949ac6762f824f589aa55df91c654a401",
     *         in="path",
     *         description="prm_pagina",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_titulo_paginas - Procedimiento Almacenado Contiene Título Páginas.
     *
     * @param par8e9cfc8933a449af80f5fd2fdaf0c7461 prm_username
     * @param par949ac6762f824f589aa55df91c654a401 prm_pagina
     *
     * @return Count of tbd1203cac9e0a4d2b8d8d3ac5e285d428
     */
    public function mtd1203cac9e0a4d2b8d8d3ac5e285d428Count(Request $request, $par8e9cfc8933a449af80f5fd2fdaf0c7461 = null, $par949ac6762f824f589aa55df91c654a401 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtd1203cac9e0a4d2b8d8d3ac5e285d428Count($par8e9cfc8933a449af80f5fd2fdaf0c7461, $par949ac6762f824f589aa55df91c654a401, 0, 0, '', ''));
    }

    /**
     * sp_traspasos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/26dbd177f2484c178f784fc57e1d514c/{par35fdc62bd98e40468f01760361c331e81}/{par8f23c74ab0cb4fae86da46791f4fec6a1}/{par954359e138914ba0bd6723fd140663381}/{par08aeac7a89ab45b98e2b638d6f27a74f1}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Traspasos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par35fdc62bd98e40468f01760361c331e81",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par8f23c74ab0cb4fae86da46791f4fec6a1",
     *         in="path",
     *         description="prm_fecha",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par954359e138914ba0bd6723fd140663381",
     *         in="path",
     *         description="prm_destino",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par08aeac7a89ab45b98e2b638d6f27a74f1",
     *         in="path",
     *         description="prm_estatus",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb26dbd177f2484c178f784fc57e1d514c"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_traspasos - Traspasos.
     *
     * @param par35fdc62bd98e40468f01760361c331e81 prm_username
     * @param par8f23c74ab0cb4fae86da46791f4fec6a1 prm_fecha
     * @param par954359e138914ba0bd6723fd140663381 prm_destino
     * @param par08aeac7a89ab45b98e2b638d6f27a74f1 prm_estatus
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb26dbd177f2484c178f784fc57e1d514c
     */
    public function mt26dbd177f2484c178f784fc57e1d514c(Request $request, $par35fdc62bd98e40468f01760361c331e81 = null, $par8f23c74ab0cb4fae86da46791f4fec6a1 = null, $par954359e138914ba0bd6723fd140663381 = null, $par08aeac7a89ab45b98e2b638d6f27a74f1 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt26dbd177f2484c178f784fc57e1d514c($par35fdc62bd98e40468f01760361c331e81, $par8f23c74ab0cb4fae86da46791f4fec6a1, $par954359e138914ba0bd6723fd140663381, $par08aeac7a89ab45b98e2b638d6f27a74f1, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_traspasos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/26dbd177f2484c178f784fc57e1d514cCount/{par35fdc62bd98e40468f01760361c331e81}/{par8f23c74ab0cb4fae86da46791f4fec6a1}/{par954359e138914ba0bd6723fd140663381}/{par08aeac7a89ab45b98e2b638d6f27a74f1}",
     *     description="Traspasos - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par35fdc62bd98e40468f01760361c331e81",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par8f23c74ab0cb4fae86da46791f4fec6a1",
     *         in="path",
     *         description="prm_fecha",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par954359e138914ba0bd6723fd140663381",
     *         in="path",
     *         description="prm_destino",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par08aeac7a89ab45b98e2b638d6f27a74f1",
     *         in="path",
     *         description="prm_estatus",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_traspasos - Traspasos.
     *
     * @param par35fdc62bd98e40468f01760361c331e81 prm_username
     * @param par8f23c74ab0cb4fae86da46791f4fec6a1 prm_fecha
     * @param par954359e138914ba0bd6723fd140663381 prm_destino
     * @param par08aeac7a89ab45b98e2b638d6f27a74f1 prm_estatus
     *
     * @return Count of tb26dbd177f2484c178f784fc57e1d514c
     */
    public function mt26dbd177f2484c178f784fc57e1d514cCount(Request $request, $par35fdc62bd98e40468f01760361c331e81 = null, $par8f23c74ab0cb4fae86da46791f4fec6a1 = null, $par954359e138914ba0bd6723fd140663381 = null, $par08aeac7a89ab45b98e2b638d6f27a74f1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt26dbd177f2484c178f784fc57e1d514cCount($par35fdc62bd98e40468f01760361c331e81, $par8f23c74ab0cb4fae86da46791f4fec6a1, $par954359e138914ba0bd6723fd140663381, $par08aeac7a89ab45b98e2b638d6f27a74f1, 0, 0, '', ''));
    }

    /**
     * sp_traspasos_title.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/c335621c11d74d36a310fea790e47e7f/{par982d5deef5f84ec689aacbfde2136b981}",
     *     description="Traspasos título",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par982d5deef5f84ec689aacbfde2136b981",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_traspasos_title - Traspasos título.
     *
     * @param par982d5deef5f84ec689aacbfde2136b981 prm_username
     *
     * @return string with result
     */
    public function mtc335621c11d74d36a310fea790e47e7f(Request $request, $par982d5deef5f84ec689aacbfde2136b981 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtc335621c11d74d36a310fea790e47e7f($par982d5deef5f84ec689aacbfde2136b981));
    }

    /**
     * sp_usuarios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/aba03580818d4e008b672cd3e109c818/{par8fc4138e0b664e6cb3d927a63b802c4e1}/{par0af22e71a3f94c3d9b29b0e70134ee6b1}/{par6ba99b570b294aa2af4a3b054662cee51}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_usuarios",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8fc4138e0b664e6cb3d927a63b802c4e1",
     *         in="path",
     *         description="prm_namecorreo",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par0af22e71a3f94c3d9b29b0e70134ee6b1",
     *         in="path",
     *         description="prm_perfil",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par6ba99b570b294aa2af4a3b054662cee51",
     *         in="path",
     *         description="prm_ct",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbaba03580818d4e008b672cd3e109c818"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_usuarios - sp_usuarios.
     *
     * @param par8fc4138e0b664e6cb3d927a63b802c4e1 prm_namecorreo
     * @param par0af22e71a3f94c3d9b29b0e70134ee6b1 prm_perfil
     * @param par6ba99b570b294aa2af4a3b054662cee51 prm_ct
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbaba03580818d4e008b672cd3e109c818
     */
    public function mtaba03580818d4e008b672cd3e109c818(Request $request, $par8fc4138e0b664e6cb3d927a63b802c4e1 = null, $par0af22e71a3f94c3d9b29b0e70134ee6b1 = null, $par6ba99b570b294aa2af4a3b054662cee51 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mtaba03580818d4e008b672cd3e109c818($par8fc4138e0b664e6cb3d927a63b802c4e1, $par0af22e71a3f94c3d9b29b0e70134ee6b1, $par6ba99b570b294aa2af4a3b054662cee51, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_usuarios.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/aba03580818d4e008b672cd3e109c818Count/{par8fc4138e0b664e6cb3d927a63b802c4e1}/{par0af22e71a3f94c3d9b29b0e70134ee6b1}/{par6ba99b570b294aa2af4a3b054662cee51}",
     *     description="sp_usuarios - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8fc4138e0b664e6cb3d927a63b802c4e1",
     *         in="path",
     *         description="prm_namecorreo",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="par0af22e71a3f94c3d9b29b0e70134ee6b1",
     *         in="path",
     *         description="prm_perfil",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="par6ba99b570b294aa2af4a3b054662cee51",
     *         in="path",
     *         description="prm_ct",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_usuarios - sp_usuarios.
     *
     * @param par8fc4138e0b664e6cb3d927a63b802c4e1 prm_namecorreo
     * @param par0af22e71a3f94c3d9b29b0e70134ee6b1 prm_perfil
     * @param par6ba99b570b294aa2af4a3b054662cee51 prm_ct
     *
     * @return Count of tbaba03580818d4e008b672cd3e109c818
     */
    public function mtaba03580818d4e008b672cd3e109c818Count(Request $request, $par8fc4138e0b664e6cb3d927a63b802c4e1 = null, $par0af22e71a3f94c3d9b29b0e70134ee6b1 = null, $par6ba99b570b294aa2af4a3b054662cee51 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mtaba03580818d4e008b672cd3e109c818Count($par8fc4138e0b664e6cb3d927a63b802c4e1, $par0af22e71a3f94c3d9b29b0e70134ee6b1, $par6ba99b570b294aa2af4a3b054662cee51, 0, 0, '', ''));
    }

    /**
     * Titulo Pagina.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/1f2e4a280a3c490cb91d2b2e03e8c897/{par915f2ce45e324305adf910faaabe6120}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Titulo Paginas",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par915f2ce45e324305adf910faaabe6120",
     *         in="path",
     *         description="PK_MENU",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb1f2e4a280a3c490cb91d2b2e03e8c897"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Titulo Pagina - Titulo Paginas.
     *
     * @param par915f2ce45e324305adf910faaabe6120 PK_MENU
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb1f2e4a280a3c490cb91d2b2e03e8c897
     */
    public function mt1f2e4a280a3c490cb91d2b2e03e8c897(Request $request, $par915f2ce45e324305adf910faaabe6120 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\repf782f923fd0247bd9f4010b717e52999::mt1f2e4a280a3c490cb91d2b2e03e8c897($par915f2ce45e324305adf910faaabe6120, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Titulo Pagina.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/1f2e4a280a3c490cb91d2b2e03e8c897Count/{par915f2ce45e324305adf910faaabe6120}",
     *     description="Titulo Paginas - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par915f2ce45e324305adf910faaabe6120",
     *         in="path",
     *         description="PK_MENU",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Titulo Pagina - Titulo Paginas.
     *
     * @param par915f2ce45e324305adf910faaabe6120 PK_MENU
     *
     * @return Count of tb1f2e4a280a3c490cb91d2b2e03e8c897
     */
    public function mt1f2e4a280a3c490cb91d2b2e03e8c897Count(Request $request, $par915f2ce45e324305adf910faaabe6120 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'])) {
            $browser_lang = $_COOKIE['langff2b12513d1a44948a7e7fbabde0697a'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\repf782f923fd0247bd9f4010b717e52999::mt1f2e4a280a3c490cb91d2b2e03e8c897Count($par915f2ce45e324305adf910faaabe6120, 0, 0, '', ''));
    }
}
