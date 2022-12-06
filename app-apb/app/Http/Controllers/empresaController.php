<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class empresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function indexUpdate(){
        $empresa= Empresa::all();
        return view('update',['empresa'=>$empresa]);
    }
    public function index()
    {  
        $empresa= Empresa::all();
        
        return view('administradores.index',['empresa'=>$empresa]);
        
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
    
        public function operaciones(Request $request)

        {
            if(isset($request->editar)){
                $request->validate([
    
                    'nombreEmpresa' => 'required',
        
                    'cif' => 'required',
                    'cp' => 'required',
                    'dirEmpresa' => 'required',
                    'iban' => 'required',
                    
        
                ]);
                $id=$request->get('id');
                
                $empresa = Empresa::find($id);
                
             
                $empresa->nombreEmpresa =  $request->get('nombreEmpresa');
                $empresa->cp = $request->get('cp');
                $empresa->dirEmpresa = $request->get('dirEmpresa');
                $empresa->save();
               
                $empresa= Empresa::all();
                  
                
                header("Location:/public?update=1");
                die();

            }
            if(isset($request->borrar)){

                $empresaDel = Empresa::find($request->id);
                $empresaDel->delete();
        
        
                $empresa= Empresa::all();
                return view('administradores.index',['empresa'=>$empresa]);

            }else{
    
            $request->validate([
    
                'nombreEmpresa' => 'required',
    
                'cif' => 'required',
                'cp' => 'required',
                'dirEmpresa' => 'required',
                'iban' => 'required',
                
    
            ]);
    
          $empresa=new Empresa;
          $empresa->idUsuario = $request->idSesion;
          $empresa->nombreUsuario = $request->usuarioSesion;
          $empresa->emailUsuario = $request->email;
          $empresa->nombreEmpresa = $request->nombreEmpresa;
          $empresa->cif = $request->cif;
          $empresa->cp = $request->cp;
          $empresa->dirEmpresa = $request->dirEmpresa;
          $empresa->iban = $request->iban;
          
          $empresa->save();
    
            /*empresa::create($request->all());*/
    
            
    
            header("Location:/public?altaEmpresa=1");
            die();
    
                            
    
        }}
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        
    }
}
