<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = auth()->user();
        return view('home', [
            'user' => $user,
        ], compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('edit_profile', [
            'user' => $user,
        ], compact('user'));
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
        // $request ->validate([
        //     'username'=>'required',
        //     'firstname'=>'required',
        //     'lastname'=>'required',
        //     'telephone'=>'required',
        //     'email'=>'required',
        //     'adresse'=>'required',
        //     'code_postal'=>'required',
        //     'ville'=>'required',

        // ]);

        $user= User::find($id);
        $user->username=$request->get('username');
        $user->prenom=$request->get('prenom');
        $user->nom=$request->get('nom');
        $user->telephone=$request->get('telephone');
        $user->email=$request->get('email');
        $user->adresse=$request->get('adresse');
        $user->code_postal=$request->get('code_postal');
        $user->ville=$request->get('ville');

   
        
        $user->save();


        return view('home', compact('user'));
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
