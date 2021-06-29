<?php

namespace App\Http\Controllers;

use App\Models\Secciones;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SeccionesController extends Controller
{
    /*  * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Secciones::all();
        return view('inicio', compact('secciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('banner');
        $nombre = $file->getClientOriginalName();
        $storeData = $request->validate([
            'titulo' => 'required|max:200',
            'descripcion' => 'required|max:500',
            'seccion' => 'required|max:100',
            'banner' => $nombre
        ]);
    
        $secciones = Secciones::create($storeData);

        return redirect('/administrador')->with('completed', 'Inicio created!');
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
        $file = $request->file('banner');
        $nombre = $file->getClientOriginalName();
        $storeData = $request->validate([
            'titulo' => 'required|max:200',
            'descripcion' => 'required|max:500',
            'seccion' => 'required|max:100',
            'banner' => $nombre
        ]);
    
        Secciones::whereId($id)->update($storeData);
        return redirect('/administrador')->with('completed', 'Inicio updated');
    }
}
