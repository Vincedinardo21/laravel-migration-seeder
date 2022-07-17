<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 100; $i++){
            $train = new Train();
            $train->azienza = "Italo";
        }
    }
}
