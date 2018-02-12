<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function verusuario(){
    	return 'usuarios';
    }

    public function detalleusuario($id){
    	return "usuario con id {$id}";
    }
}
