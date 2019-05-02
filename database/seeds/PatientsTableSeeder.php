<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $patientArray = [
            ['Blackford', 'Bret', '1964-07-16', 'Male'],
            ['Blackford', 'Earl', '1937-01-01', 'Male'],
            ['Mouse', 'Minnie', '1931-01-30', 'Female'],
            ['Adams', 'Quincy', '1767-07-11', 'Male'],
            ['Duck', 'Donald', '1934-01-01', 'Male'],
        ];

        $count = count($patientArray);

        foreach ($patientArray as $key => $patientData) {
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
