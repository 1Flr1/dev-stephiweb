<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propriete;
use App\User;
class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietes=Propriete::all();
        
        
        return view('proprietes.index', compact('proprietes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proprietes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'content'=>'required'
        // ]);

        $propriete = new Propriete([
            'user_id'=>auth()->id(),
            'type'=>$request->get('type'),
            'surface'=>$request->get('surface'),
            'prix'=>$request->get('prix'),
            'adresse'=>$request->get('adresse'),
            'chambres'=>$request->get('chambres'),
            'salles_de_bains'=>$request->get('salles_de_bains'),
            'balcons'=>$request->get('balcons'),
            'piscines'=>$request->get('piscines'),
            'jardin'=>$request->get('jardin'),
            'garages'=>$request->get('garages'),
            'description'=>$request->get('description'),
        ]);
        $propriete->save();

        return redirect('/proprietes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propriete=Propriete::find($id);
        
        return view('proprietes.show',[
            'propriete'=>$propriete,

        ], compact('propriete'));
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
        $propriete=Propriete::find($id);
        $propriete->delete();
        return redirect('/proprietes');
    }

    
}
