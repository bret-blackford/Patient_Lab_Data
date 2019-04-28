<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
        public function index() {
        return view('view');
    }
    
        public function test($title = null) {
        return view('test')->with(['title'=>$title]);
    }
    
        public function show($title = null) {
        return view('show')->with(['title'=>$title]);
    }
}
