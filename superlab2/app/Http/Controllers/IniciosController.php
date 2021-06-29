<?php

namespace App\Http\Controllers;

use App\Models\Inicios;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IniciosController extends Controller
{
    /*  * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Inicios::all();
        return view('inicio', compact('inicio'));
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
        $storeData = $request->validate([
            'titulo_inicio' => 'required|max:200',
            'descripcion_inicio' => 'required|max:500'
        ]);
        $inicio = Inicios::create($storeData);

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
        $data = $request->validate([
            'titulo_inicio' => 'required|max:200',
            'descripcion_inicio' => 'required|max:500'
        ]);

        Inicios::whereId($id)->update($data);
        return redirect('/administrador')->with('completed', 'Inicio updated');
    }
}
