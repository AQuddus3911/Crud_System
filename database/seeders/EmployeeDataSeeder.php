<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployeeData;
use Faker\Factory as Faker;

class EmployeeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 1; $i<=20;$i++){
            $employeedata = new EmployeeData;
            $employeedata-> name = $faker->name;
            $employeedata-> mobile = "4677";
            $employeedata-> address = $faker->address;
            $employeedata->save();

        }
        

    }
}
