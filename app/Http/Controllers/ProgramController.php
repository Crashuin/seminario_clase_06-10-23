<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){

        $programas = array(
            [
                'codigo'=> '1',
                'nombre' => 'Sistemas',
                'facultad' => 'Ingenieria'
            ],
            [
                'codigo'=> '2',
                'nombre' => 'Economia',
                'facultad' => 'Ciencias Contables'
            ]
        );
        $estudiantes = array(
            [
                'codigo'=> '1',
                'nombre' => 'juan',

            ],
            [
                'codigo'=> '2',
                'nombre' => 'lucas',

            ]
        );

        return view('program.list', ['programs' => $programas,
                                      'students'=> $estudiantes ]);
    }
    public function register(){
        return view('program.register_form');
    }
    public function update(){
        return view('program.update_form');
    }
}
