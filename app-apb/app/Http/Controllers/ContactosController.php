<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use Illuminate\Http\Request;
use Mail; 

class ContactosController extends Controller
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
     * 
     */
    public function store(Request $request)
    {
        $request->validate([

            'nombre' => 'required',

            'email' => 'required',

        ]);
        $contacto=new Contactos;
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->save();

        $subject = "A Puro Bit - Info Clientes";
        $for = $request->email;
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("arielmartinvera@gmail.com","App-Apb");
            $msj->subject($subject);
            $msj->to($for);
        });


      

        
        header("Location:/public?correoEnviado=1");
            die();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show(Contactos $contactos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactos $contactos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactos $contactos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactos $contactos)
    {
        //
    }
}
