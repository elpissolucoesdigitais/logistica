<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entregas;
use App\Models\clientes;
use App\Models\fornecedores;
use App\Models\entregadores;

class entregaController extends Controller
{
    private $objEntrega;
    private $objCliente;
    private $objEntregador;
    public function __construct(){
        $this->objEntrega = new Entregas();
        $this->objCliente = new Clientes();
        $this->objEntregador = new entregadores();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($this->objEntregador->all());
        //dd($this->objEntrega->all());
        $entrega= $this->objEntrega->all();
        return view('fornecedor.entrega.index',compact('entrega'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('fornecedor.entrega.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $cad= $this->objEntrega->create([
            'produto'=>$request->produto,
            'quantidade'=>$request->quantidadeproduto,
            'categoria'=>$request->categoria,
            'enderecoentrega'=>$request->enderecoentrga,
            'enderecocoleta'=>$request->enderecocoleta,
        ]);
        if($cad){
            return redirect('entrega');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrega = $this->objEntrega->find($id);
        return view('fornecedor.entrega.show',compact('entrega'));
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
