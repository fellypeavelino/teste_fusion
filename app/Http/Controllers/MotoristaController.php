<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motoristas = Motorista::latest()->paginate(5);
    
        return view('motoristas.index',compact('motoristas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motoristas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required', 
            'cpf' => 'required', 
            'email' => 'required', 
            'situacao' => 'required',
            'status'
        ]);
        $req = $request->all();
        $req['status'] = $request->input('status', null);
        Motorista::create($req);
     
        return redirect()->route('motoristas.index')
                        ->with('success','Motorista inserido com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function show(Motorista $motorista)
    {
        return view('motoristas.show',compact('motorista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function edit(Motorista $motorista)
    {
        return view('motoristas.edit',compact('motorista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motorista $motorista)
    {
        $request->validate([
            'nome' => 'required', 
            'cpf' => 'required', 
            'email' => 'required', 
            'situacao' => 'required',
            'status'
        ]);

        $req = $request->all();
        $req['status'] = $request->input('status', null);
        $motorista->update($req);
    
        return redirect()->route('motoristas.index')
                        ->with('success','Motorista alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motorista $motorista)
    {
        $motorista->delete();
    
        return redirect()->route('motoristas.index')
                        ->with('success','Motorista deletado com sucesso');
    }
}
