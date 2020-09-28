<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\veiculos;
use App\Models\entregadores;

class veiculoController extends Controller
{   
    private $objVeiculo;
    private $objEntregador;
    public function __construct(){
         $this->objVeiculo = new veiculos();
        $this->objEntregador = new entregadores();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculo= $this->objVeiculo->all();
        return view('veiculo.entrega.index',compact('veiculo'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entregador=$this->objEntregador->all();
        return view('veiculo.entrega.create',compact('entregador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //`id`, `placa`, `modelo`, `marca`, `tipo`, `renavam`, `ano`, `cor`,
        // `remember_token`, `created_at`, `updated_at`, `entregador_id`
        $cad= $this->objVeiculo->create([
            'placa'=>$request->placa,
            'modelo'=>$request->modelo,
            'marca'=>$request->marca,
            'tipo'=>$request->tipo,
            'renavam'=>$request->renavam,
            'ano'=>$request->ano,
            'cor'=>$request->cor,
            // 'remember_token'=>$request->remember_token,
            // 'created_at'=>$request->created_at,
            // 'updated_at'=>$request->updated_at,
            'entregador_id'=>$request->entregador_id,
        ]);
        if($cad){
            return redirect('veiculo');
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
        $veiculo = $this->objVeiculo->find($id);
        return view('veiculo.entrega.show',compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo=$this->objVeiculo->find($id);
        $entregador=$this->objEntregador->all();
        return view('create',compact('veiculo','entregador'));
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
        $this->objVeiculo->where(['id'=>$id])->update([
            'placa'=>$request->placa,
            'modelo'=>$request->modelo,
            'marca'=>$request->marca,
            'tipo'=>$request->tipo,
            'renavam'=>$request->renavam,
            'ano'=>$request->ano,
            'cor'=>$request->cor,
            'entregador_id'=>$request->entregador_id,
        ]);
            return redirect('veiculo');
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
