<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactosController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Contactos::all();
        return view('inicio', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inicio');
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
            'nombre' => 'required|max:200',
            'correo' => 'required|max:200',
            'comentario' => 'required|max:500',
        ]);
        $employee = Contactos::create($storeData);

        return redirect('/inicio')->with('completed', 'Contactos created!');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $Contactos = Contactos::findOrFail($id);
    //     return view('update', compact('Contactos'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $data = $request->validate([
    //         'name' => 'required|max:255',
    //         'email' => 'required|max:255',
    //         'phone' => 'required|numeric',
    //     ]);

    //     Contactos::whereId($id)->update($data);
    //     return redirect('/Contactoss')->with('completed', 'Contactos updated');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $Contactos = Contactos::findOrFail($id);
    //     $Contactos->delete();

    //     return redirect('/contactoss')->with('completed', 'Contactos deleted');
    // }   
}
