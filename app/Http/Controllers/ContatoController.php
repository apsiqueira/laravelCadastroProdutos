<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{

    //recebe a requisição contato e envia para a view
    public function index(){

       $data["titulo"]="Minha pagina de Contatos";


       return view("contato",$data);

    }
}
