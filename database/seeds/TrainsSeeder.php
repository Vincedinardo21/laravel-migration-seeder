<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    private $valori_seri = [
        [
            'azienda' => 'Italo',
            'stazione_di_partenza' => 'Milano C.Le',
            'stazione_di_arrivo' => 'Napoli C.Le',
            'orario_di_partenza' => '14:00',
            'orario_di_arrivo' => '20:00',
            'codice_treno' => '9987',
            'numero_carrozze' => 14,
            'in_orario' => true,
            'cancellato' => false,
        ],
        [
            'azienda' => 'Trenitalia',
            'stazione_di_partenza' => 'Firenze C.Le',
            'stazione_di_arrivo' => 'Roma Termini',
            'orario_di_partenza' => '10:00',
            'orario_di_arrivo' => '12:00',
            'codice_treno' => '9461',
            'numero_carrozze' => 12,
            'in_orario' => false,
            'cancellato' => true,
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        foreach($this->valori_seri as $riga){
            Train::create($riga);
        }
        //Prova con faker
        // for($i = 0; $i < 100; $i++){
        //     $train = new Train();
        //     $train->azienda = $faker->city();
        // }
    }
}
