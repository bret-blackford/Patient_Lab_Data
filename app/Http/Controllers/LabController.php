<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class LabController extends Controller {

    public function index() {
        return view('view');
    }
    
    public function change() {
        return view('change');
    }

    public function test($title = null) {
        return view('test')->with(['title' => $title]);
    }

    public function show($title = null) {
        return view('show')->with(['title' => $title]);
    }

    public function patientList($name = null) {

        if (!$name) {
            dump('No matches found');
            $query = '%';
        } else {
            dump($name);
            $query = $name . '%';
        }
        dump($query);

        $results = Patient::where('last_name', 'like', $query)->get();
        foreach($results as $patientX) {
            dump($patientX->last_name . " | " . $patientX->first_name . " : " . 
                    $patientX->birthdate . " : " . $patientX->gender);
        }
        //dump($results);
        dump('done with patientList()');
        return view('patient')->with([
            'patients' => $results
                ]);
        //return view('patient');
    }

}
