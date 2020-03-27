<?php

use Illuminate\Database\Seeder;
use App\Degree;

class DegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degrees = [
            'Preparatorio',
            'Licenciatura',
            'Posgrado'
        ];

        foreach($degrees as $degree){
            $newDegrre = new Degree();
            $newDegrre->name = $degree;
            $newDegrre->save();
        }
        //
    }
}
