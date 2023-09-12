<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contactoForm($tipo = null)
    {
        return view('contacto', compact('tipo'));
    }

    public function contactoSave(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'comentario' => ['required', 'min:5', 'max:50'],
        ]);
        
        $contacto = new Contacto();
        //aceder a atributos:
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->comentario = $request->comentario;
    
        //hacer la insersion a la base de datos
        $contacto->save();
    
        return redirect()->back();
    }
}
