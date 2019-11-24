<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Orcamento;


class ControladorOrcamento extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orc = Orcamento::all();

        return view('index', compact('orc'));//compact array associativo

    }

    public function search(Request $request)
    {
        //var_dump($request->search);
        //exit;
        $search = $request->search;         
        $orc = Orcamento::
        where('name_cliente', 'like', '%'.$request->search.'%')->
        orWhere('name_vendedor', 'like', '%'.$request->search.'%')->
        orWhere('descricao', 'like', '%'.$request->search.'%')->
        orWhere('preco', 'like', '%'.$request->search.'%')->
        orWhere('created_at', 'like', '%'.$request->search.'%')->get();
        return view('index', compact('orc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastroorcamento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orc = new Orcamento();
        $orc->name_cliente = $request->input('name_cliente');       
        $orc->name_vendedor = $request->input('name_vendedor');
        $orc->descricao = $request->input('descricao');
        $orc->preco = $request->input('preco');  
        $orc->save();
       return redirect('/');

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
        $orc = Orcamento::find($id);      
        if(isset($orc)) {
            return view('editarorcamento', compact('orc'));
        }
        return redirect('/');
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
       $orc = Orcamento::find($id);        
        if(isset($orc)) {            
            $orc->name_cliente = $request->input('name_cliente');
            $orc->name_vendedor = $request->input('name_vendedor');
            $orc->descricao = $request->input('descricao');
            $orc->preco = $request->input('preco');  
            $orc->save();
             }          
      
       return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $orc = Orcamento::find($id);
        if (isset($orc)) {
            $orc->delete();
        } else {
            var_dump($orc);
            exit;
        }
        return redirect('/');
    }
}
