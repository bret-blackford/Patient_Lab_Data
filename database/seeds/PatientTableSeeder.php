<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patientArray = [
           ['Blackford', 'Bret','16-JUL-1964','Male'],
            ['Blackford', 'Earl', '5-SEP-1937', 'Male'],
            ['Mouse', 'Minnie', '1-JAN-1933','Female'],
        ];
        
        $count = count($patientArray);
        
        foreach($patientArray as $key=>$patientData){
            $patient = new Patient();
            
            //$patient->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $patient->last_name = $patientData[0];
            $patient->first_name = $patientData[1];
            $patient->bithdate = $patientData[2];
            $patient->gender = $patientData[3];
            
            $patient->save();
            $count--;
        }
    }
}
