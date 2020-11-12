<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Piezas;

class PiezasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function view_create()
    {
        return view("crear");
    }

    public function create(Request $request)
    {
        $punto = new Piezas();
        $punto->nombre = $request->nombre;
        $punto->descripcion = $request->descripcion;
        $punto->cantidad = $request->cantidad;
        $punto->costo = $request->costo;
        $punto->save();
        return back()->withInput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $piezas = Piezas::all();
        return view('listado')->with("piezas",$piezas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view_edit($id)
    {

        $piezas= Piezas::where("id",$id)->first();
        return view('modificacion')->with("piezas",$piezas);
    }

    public function edit(Request $request)
    {
        $piezas= Piezas::where("id",$request->id)->first();
        $piezas->nombre = $request->nombre;
        $piezas->descripcion = $request->descripcion;
        $piezas->cantidad = $request->cantidad;
        $piezas->costo = $request->costo;
        $piezas->save();
        return back()->withInput();
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
        $piezas= Piezas::where("id",$id)->first();
        $piezas->delete();
        return redirect()->route('listado');
    }
}
