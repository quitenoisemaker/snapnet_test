<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('states')->insert([
            ['name' => 'Abia'],
            ['name' => 'Adamawa'],
            ['name' => 'Akwa Ibom'],
            ['name' => 'Anambra'],   
            ['name' => 'Bauchi'],
            ['name' => 'Lagos'],        
        ]);

        DB::table('lgas')->insert([
            ['name' => 'Aba South', 'state_id'=> 1],
            ['name' => 'Bende', 'state_id'=> 1],
            ['name' => 'Ganye', 'state_id'=> 2],
            ['name' => 'Gombi', 'state_id'=> 2],      
            ['name' => 'Eket', 'state_id'=> 3],
            ['name' => 'Amuwo-Odofin', 'state_id'=> 6],
            ['name' => 'Ikorodu', 'state_id'=> 6],
            ['name' => 'Lagos Island', 'state_id'=> 6],
            ['name' => 'Ibeju-Lekki', 'state_id'=> 6],
        ]);

        DB::table('wards')->insert([
            ['name' => 'Ariaria market', 'lga_id'=> 1],
            ['name' => 'Eziama', 'lga_id'=> 1],
            ['name' => 'Abule-osun', 'lga_id'=> 6],
            ['name' => 'Ibeshe', 'lga_id'=> 6],      
            ['name' => 'Irede', 'lga_id'=> 6],
            ['name' => 'Epetedo', 'lga_id'=> 8],
            ['name' => 'Idumota', 'lga_id'=> 8],
            ['name' => 'Ilupesi', 'lga_id'=> 8],
            ['name' => 'Lekki', 'lga_id'=> 9],
        ]);
    }
}
