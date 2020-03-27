<?php

use Illuminate\Database\Seeder;
use App\Gender;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [
            'Masculino',
            'Femenino',
        ];

        foreach($genders as $gender){
            $newGender = new Gender();
            $newGender->name = $gender;
            $newGender->save();
        }
    }
}
