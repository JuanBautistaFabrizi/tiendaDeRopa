<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $idCliente = $request->get('idCliente');
        $nombre = $request->get('nombre');
        $apellido = $request->get('apellido');
        $domicilio = $request->get('domicilio');
        $telefono = $request->get('telefono');
        $mail = $request->get('mail');
        $edad = $request->get('edad');

        //$clientes = DB::select("SELECT * FROM cliente");
        //$clientes = DB::table("cliente")->select("*")->get();
        
        //$request->has("idCliente")
        
          $clientes = DB::table("cliente")->select('*')
            ->where("idCliente",$idCliente)
            ->where("nombre","like",$nombre."%")
            ->where("apellido",$apellido)
            ->where("domicilio",$domicilio)
            ->where("telefono",$telefono)
            ->where("mail",$mail)
            ->where("edad",$edad)
            ->get();  
        $param = [
            "clientes" => $clientes,
            "titulo" => "Buscador de clientes"
        ];
        return view("clientes.clientes",$param);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $param = [
            
            "titulo" => "Formulario para crear cliente nuevo"
        ];
        return view('clientes.crear-cliente',$param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request->post('nombre');
        $apellido = $request->post('apellido');
        $domicilio = $request->post('domicilio');
        $telefono = $request->post('telefono');
        $mail = $request->post('mail');
        $edad = $request->post('edad');

        //DB::insert("INSERT INTO cliente(nombre,apellido,domicilio,telefono,mail,edad) VALUES (?,?,?,?,?,?)",[$nombre,$apellido,$domicilio,$telefono,$mail,$edad]);
        DB::table("cliente")->insert([
            "nombre" => $nombre,
            "apellido" => $apellido,
            "domicilio" => $domicilio,
            "telefono" => $telefono,
            "mail" => $mail,
            "edad" => $edad
        ]);
        return redirect()->action([ClientesController::class, 'index']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Este es el metodo show del ClientesController del cliente ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clienteid = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$clienteid);
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
        $cliente = Cliente::find($id);

        $cliente->nombre = $request->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->domicilio = $request->get('domicilio');
        $cliente->telefono = $request->get('telefono');
        $cliente->mail = $request->get('mail');
        $cliente->edad = $request->get('edad');

        $cliente->save();

        //return redirect('clientes');
        return redirect()->action([ClientesController::class, 'index']);
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
