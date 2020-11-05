<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use app\Models\Users;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        for ($i=0;$i<20;$i++) {
            User::create([
                'names' => $faker->name,
                'lastnames' => $faker->lastName,
                'email' => $faker->email
            ]);
        }
    }
}
