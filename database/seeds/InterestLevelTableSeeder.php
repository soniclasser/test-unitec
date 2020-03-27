<?php

use Illuminate\Database\Seeder;
use App\InterestLevel;

class InterestLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interestLevels = [
            [ 'name' => 'Lic. En Derecho', 'degree' => 2 ],
            [ 'name' => 'Lic. En Finanzas', 'degree' => 2 ],
            [ 'name' => 'Mtria. Admon. De Negocios', 'degree' => 3 ],
            [ 'name' => 'Mtria. Direccion de proyectos', 'degree' => 3 ],
        ];

        foreach($interestLevels as $interestLevel){
            $newInterestLevel = new InterestLevel();
            $newInterestLevel->name = $interestLevel['name'];
            $newInterestLevel->degree_id = $interestLevel['degree'];
            $newInterestLevel->save();
        }
    }
}
