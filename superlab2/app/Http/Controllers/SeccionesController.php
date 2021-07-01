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
        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasfile('bannerr')) {
            $file = $request->file('bannerr');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $request->request->add(['banner' => $filename]);
            $file->move('superlab2/img/', $filename);
        }
        $storeData = $request->validate([
            'titulo' => 'required|max:200',
            'descripcion' => 'required|max:500',
            'seccion' => 'required|max:100',
            'banner' => 'required|max:200'
        ]);

        $secciones = Secciones::create($storeData);

        return redirect('/superlab2/admin')->with('completed', 'Inicio created!');
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
        if ($request->hasfile('bannerr')) {
            $file = $request->file('bannerr');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $request->request->add(['banner' => $filename]);
            $file->move('superlab2/img/', $filename);
            $storeData = $request->validate([
                'titulo' => 'required|max:200',
                'descripcion' => 'required|max:500',
                'seccion' => 'required|max:100',
                'banner' => 'max:200'
            ]);
        } else {
            $storeData = $request->validate([
                'titulo' => 'required|max:200',
                'descripcion' => 'required|max:500',
                'seccion' => 'required|max:100'
            ]);
        }


        Secciones::whereId($id)->update($storeData);
        return redirect('/superlab2/admin')->with('completed', 'Inicio updated');
    }
}