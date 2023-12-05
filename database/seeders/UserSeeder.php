<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $users = new User;
        $users->name = $faker->name;
        $users->email= $faker->email;
        $users->password = $faker->password;
        $users->mobile = $faker->phonenumber;
        $users->save();
    }
}
