<?php

use Illuminate\Database\Seeder;
use App\Labs;

//seeders are run via "$ php artisan migrate:fresh --seed"

class LabsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $labs = [
            [6.2, 89, 235, 1, 132, 98],
            [5.2, 89, 145, 2, 36, 89],
            [5.1, 88, 235, 1, 133, 102],
            [5.1, 88, 235, 3, 133, 102],
            [5.1, 88, 235, 1, 133, 103],
            [5.9, 78, 215, 3, 13, 88],
        ];

        $count = count($labs);

        foreach ($labs as $labData) {
            $lab = new Labs();

            $lab->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $lab->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $lab->a1c = $labData[0];
            $lab->hdl = $labData[1];
            $lab->ldl = $labData[2];
            $lab->pt_id = $labData[3];
            $lab->triglicerides = $labData[4];
            $lab->glucose = $labData[5];

            $lab->save();
            $count--;
        }
    }

}
