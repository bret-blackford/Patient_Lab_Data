<?php

use Illuminate\Database\Seeder;
use App\Reference;

class ReferenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ranges = [
            ['glucose',65,99],
            ['a1c',4.8,5.6],
            ['ldl',0,99],
            ['hdl',39,999],
            ['triglycerides',0,150],
        ];
        $count = count($ranges);
        
        foreach( $ranges as $range ){
            $reference = new Reference();
            $reference->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $reference->lab_test = $range[0];
            $reference->low = $range[1];
            $reference->high = $range[2];
                    
            $reference->save();
            $count--;
        }
    }
}
