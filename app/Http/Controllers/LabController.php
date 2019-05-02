<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Labs;

class LabController extends Controller {

    public function index() {
        return view('welcome');
    }

    public function change($pt_id = null) {
        //dump('now in LabController.change()');
        if (!$pt_id) {
            dump('no ID submitted ');
        } else {
            $ptLabs = Labs::where('pt_id', '=', $pt_id)->get();
            $ptInfo = Patient::find($pt_id);

            return view('change')->with(['labs' => $ptLabs, 'ptInfo' => $ptInfo]);
        }
        return "ERROR in LabController.change()";
    }

    public function show($title = null) {
        return view('show')->with(['title' => $title]);
    }

    public function changelab($id = null) {
        if (!$id) {
            dump('NO ID PASSED IN');
        }
        $lab = Labs::find($id);
        $pt = Patient::find($lab->pt_id);

        return view('changelab')->with([
                    'lab_data' => $lab,
                    'patient' => $pt
        ]);
    }
    
    public function checklabs(Request $request){
        dump('in LabController.checklab()');
    }

    public function patientList($name = null) {

        if (!$name) {
            //dump('No matches found');
            $query = '%';
        } else {
            dump($name);
            $query = $name . '%';
        }

        $results = Patient::where('last_name', 'like', $query)->orderBy('last_name')->get();

        return view('patient')->with([
                    'patients' => $results
        ]);
    }

}
