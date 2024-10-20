<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(){
        $users = Usuario::all();

        return view('usuario/index',['users' => $users]);
    }

    public function create(){
        return view('usuario/create');
    }

    public function store(Request $request){
        //dd($request->all()); sirve para revisar los datos en la aplicacion
        try{
            $users = new Usuario();
            $users->id=$request->id;
            $users->first_name=$request->first_name;
            $users->last_name=$request->last_name;
            $users->telefone=$request->telefone;
            $users->email=$request->email;
            $users->save();

            return redirect()->action([UsuariosController::class, 'index']);
        }catch(Exception $ex){
            Log::error($ex);
            return redirect()->back();
        }
    }

    public function edit($document){

        $user = Usuario::find($document);
        return view('usuario/edit', compact('user'));
    }

    public function update(Request $request){
        try{
            $users = Usuario::find($request->id);
            $users->first_name=$request->first_name;
            $users->last_name=$request->last_name;
            $users->telefone=$request->telefone;
            $users->email=$request->email;
            $users->save();

            return redirect()->action([UsuariosController::class, 'index']);
        }catch(Exception $ex){
            Log::error($ex);
            return redirect()->back();
        }
    }

    public function delete($id){

        $users = Usuario::find($id);
        $users->delete();
        return redirect()->action([UsuariosController::class, 'index']);
    }
}
