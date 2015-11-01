<?php namespace CodeCommerce\Http\Controllers;

class WelcomeController extends Controller {

    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('welcome');
    }

    public function exemplo(){
        $nome = 'Italo';
        $sobrenome = 'Araujo';

        return view('exemplo', compact('nome','sobrenome'));
    }

}

