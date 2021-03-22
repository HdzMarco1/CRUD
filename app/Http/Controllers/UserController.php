<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

    //mostrar lista de usuarios 
    public function index()
    {
        $users = User::all();

        return view('usuario.index', ['users' => $users]);
    }

    //formulario de registro
    public function crear(){

    }

    //guardar los registros en la db
    public function guardar() {
        
    }



    /*public function saludo(){

        return view('usuario.index', ['name' => 'marco']);

    }*/

    /*public function show ($name){

        //$user = \DB::table('users')->where('name', $name)->first();

        $user = User::where('name', $name)->firstOrFail();
            //dd($user);
            return view('usuario.index', ['user' => $user]);

        

    }*/
}
