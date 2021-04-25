<?php

namespace App\Http\Controllers;

use Cion\TextToSpeech\Facades\TextToSpeech;
use App\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class clienteController extends Controller
{

    /**
     * Undocumented function
     *
     * @param [type] $identificacion
     * @param [type] $texto
     * @return void
     */
    public function index($identificacion, $texto)
    {
        // configurar dónde guardar la salida convertida. En este caso, guardaría el archivo de salida en el archivo storage/ArchivoDeVoz.mp3
        $path = TextToSpeech::saveTo('ArchivoDeVoz.mp3')->convert($texto);

        $cliente = cliente::create([
            'identificacion' => $identificacion,
            'texto' => $texto,
        ]);
        $cliente->save();
        return Storage::download($path);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {

    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function show($id)
    {

    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
