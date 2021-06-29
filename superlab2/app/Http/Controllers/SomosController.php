<?php

namespace App\Http\Controllers;

use App\Models\Somos;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SomosController extends Controller
{
    /*  * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $somos = Somos::all();
        return view('inicio', compact('somos'));
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

            'titulo_somos' => 'required|max:200',
            'descripcion_somos' => 'required|max:500'
        ]);
        $somos = Somos::create($storeData);

        return redirect('/administrador')->with('completed', 'Somos created!');
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
            'titulo_somos' => 'required|max:200',
            'descripcion_somos' => 'required|max:500'
        ]);

        Somos::whereId($id)->update($data);
        return redirect('/administrador')->with('completed', 'Somos updated');
    }
}