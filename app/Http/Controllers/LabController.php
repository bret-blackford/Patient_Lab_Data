<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Labs;
use App\Reference;

class LabController extends Controller {

    //http://foolabs/
    public function index() {
        //dump('now in LabController.index()');
        return view('welcome');
    }

    //http://foolabs//change/{id?}
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

    //http://foolabs/changelab/{id?}'
    public function changeLab($id = null) {
        //dump('now in LabController.changelab()');
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

    public function addLab($id = null) {
        //dump('now in LabController.addlab()');
        if (!$id) {
            dump('NO ID PASSED IN');
        }

        $pt = Patient::find($id);
        $lab = new Labs;

        return view('addlab')->with([
                    'lab_data' => $lab,
                    'patient' => $pt
        ]);
    }

    //http://foolabs/checklabs
    public function checkLabs(Request $request) {
        //dump('now in LabController.checklabs()');
        $pt_id = $request->input('pt_id');
        $lab = Labs::find($request->input('lab_id'));

        $lab->a1c = $request->input('a1c');
        $lab->glucose = $request->input('glucose');
        $lab->ldl = $request->input('ldl');
        $lab->hdl = $request->input('hdl');
        $lab->triglicerides = $request->input('triglicerides');

        $lab->save();
        return redirect('/change/' . $pt_id)->with([
                    'id' => $pt_id
        ]);
    }

    //http://foolabs/checknewlabs
    public function checkNewLabs(Request $request) {
        //dump('now in LabController.checkNewLabs()');
        $pt_id = $request->input('pt_id');

        $lab = new Labs;

        $lab->a1c = $request->input('a1c');
        $lab->glucose = $request->input('glucose');
        $lab->ldl = $request->input('ldl');
        $lab->hdl = $request->input('hdl');
        $lab->triglicerides = $request->input('triglicerides');
        $lab->pt_id = $pt_id;

        $lab->save();
        return redirect('/change/' . $pt_id)->with([
                    'id' => $pt_id,
                    'alert' => 'New Lab added'
        ]);
    }

    public function analyzeLab($name_id = null) {
        dump('now in LabController.analyzeLab()');
        if (!$name_id) {
            dump("ERROR in LabController.analyzeLab() - no name_id");
        }
        dump('name_id=[' . $name_id . "]");
        $pt_lab = Labs::where('pt_id', '=', $name_id)->orderBy('id', 'desc')->first();
        dump('pt_lab=[' . $pt_lab . "]");

        $references = Reference::all();
        $alerts = array();

        foreach ($references as $lab_range) {
            $lab_x = $lab_range->lab_test;
            $lab_x_high = $lab_range->high;
            $lab_x_low = $lab_range->low;
            dump('lab_x=[' . $lab_x . "] high=[" . $lab_x_high . '] low=[' . $lab_x_low . ']');
            $lab_value = $pt_lab->$lab_x;
            if ($lab_value) {
                if( $lab_value < $lab_x_low ){
                    $low_error = $lab_x . ' is low ';
                    array_push($alerts, $low_error);
                }
                if( $lab_value > $lab_x_high ){
                    $high_error = $lab_x . " is high ";
                    array_push($alerts, $high_error);
                }             
            }
        }
        if( count($alerts) > 0 ){
            foreach ($alerts as $value) {
                dump('ERROR : ' . $value . ' *** ');
            }
        }
        dump(' == DONE == ');
    }

    //http://foolabs/get/{name?}
    public function patientList($name = null) {
        //dump('now in LabController.patientList()');

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

    //========================================
    public function chexPatient(Request $request) {
        //dump('now in LabController.chexPatient()');

        $request->validate([
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'dob' => 'required',
            'gender' => 'required',
        ]);

        $last_name = $request->input('last_name', null);
        $first_name = $request->input('first_name', null);
        $dob = $request->input('dob', null);
        $gender = $request->input('gender', null);

        $patient = new Patient;
        $patient->last_name = $request->input('last_name');
        $patient->first_name = $request->input('first_name');
        $patient->bithdate = $dob;
        $patient->gender = $request->input('gender');
        $name = $last_name . ", " . $first_name;

        $patient->save();

        return redirect('/get')->with([
                    'alert' => 'New patient added : ' . $name
        ]);
    }

}
