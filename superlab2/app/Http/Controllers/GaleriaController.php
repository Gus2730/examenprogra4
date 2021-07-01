<?php

namespace App\Http\Controllers;

use App\Models\Galerias;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeria = Galerias::all();
        return view('administrador', compact('galeria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasfile('imagenes')) {
            $file = $request->file('imagenes');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $request->request->add(['imagen' => $filename]);
            $file->move('superlab2/img/', $filename);
        }
        $storeData = $request->validate([
            'imagen' => 'required|max:200',
            'descripcion' => 'required|max:500',

        ]);
        $galeria = Galerias::create($storeData);

        return redirect('/superlab2/admin')->with('completed', 'Contactos created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeria = Galerias::findOrFail($id);
        $galeria->delete();

        return redirect('/superlab2/admin')->with('completed', 'Employee deleted');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasfile('imagenes')) {
            $file = $request->file('imagenes');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $request->request->add(['imagen' => $filename]);
            $file->move('superlab2/img/', $filename);
        }
        $storeData = $request->validate([
            'imagen' => 'required|max:200',
            'descripcion' => 'required|max:500',

        ]);


        Galerias::whereId($id)->update($storeData);
        return redirect('/superlab2/admin')->with('completed', 'Inicio updated');
    }
}
