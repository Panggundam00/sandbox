<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index') ;
    }

    public function show($id){
        return view('pages.show', [
            'name' => 'pang',
            'id' => $id,
            'text' => '<script>alert(1)</script>',
            'array' => []
        ]) ;
    }
}
