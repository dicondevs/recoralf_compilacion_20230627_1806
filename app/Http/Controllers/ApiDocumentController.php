<?php

// =============================================
// Autor                Samuel López López
// Creado               martes, 27 de junio de 2023 17:59:24
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.5736
// =============================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @SWG\Swagger(
 *     basePath="",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Recoralf"
 *     )
 * )
 */
class ApiDocumentController extends Controller
{
    /**
     * Index Action of the Controller.
     */
    public function index(Request $request)
    {
        $swagger = \Swagger\scan(dirname(__FILE__));
        header('Content-type: application/json');
        echo $swagger;
    }
}
