<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contacto;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{tipo?}', function ($tipo = null) {
    //dd($tipo);
    //existe $tipo
    return view('contacto', compact('tipo'));
    //->with(['tipo' -> $tipo]);
});

Route::post('/validar-contacto', function (Request $request) {
    $contacto = new Contacto();
    //aceder a atributos:
    $contacto->nombre = $request->nombre;
    $contacto->correo = $request->correo;
    $contacto->comentario = $request->comentario;

    //hacer la insersion a la base de datos
    $contacto->save();

    return redirect()->back();
});
