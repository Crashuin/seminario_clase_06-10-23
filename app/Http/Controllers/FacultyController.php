<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index() {

        $facultades = [
            'Ingenieria',
            'Artes',
            'Ciencias Economicas y Contables',
            'Ciencias Agricolas'
        ];

        return view('faculty.list', ['faculty' => $facultades]);        
    }
    
    public function register() {
        return view('faculty.register_form');        
    }

    public function update() {
        return view('faculty.update_form');        
    }
}
