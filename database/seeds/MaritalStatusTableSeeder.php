<?php

use Illuminate\Database\Seeder;
use App\MaritalStatus;

class MaritalStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maritalStatus = [
           'Solter@',
           'Casad@',
           'Viud@',
           'Union libre',
        ];

        foreach($maritalStatus as $maritalStatus_){
            $newMaritalStatus = new MaritalStatus();
            $newMaritalStatus->name = $maritalStatus_;
            $newMaritalStatus->save();
        }
    }
}
