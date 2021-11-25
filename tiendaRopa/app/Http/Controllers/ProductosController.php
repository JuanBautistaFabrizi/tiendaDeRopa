<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $idproducto = $request->get('idproducto');
        $modelo = $request->get('modelo');
        $color = $request->get('color');
        $talle = $request->get('talle');
        $precio = $request->get('precio');

        $productos = DB::select("SELECT * FROM producto");
       /*  $productos = DB::table('producto')->select('*')->get(); */
        $param = [
            "productos" => $productos
        ];
        
        return view("productos.productos",$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.crear-producto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idproducto = $request->post('idproducto');
        $modelo = $request->post('modelo');
        $color = $request->post('color');
        $talle = $request->post('talle');
        $precio = $request->post('precio');

        DB::insert("INSERT INTO producto(idproducto,modelo,color,talle,precio) VALUES (?,?,?,?,?)",[$idproducto,$modelo,$color,$talle,$precio]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
