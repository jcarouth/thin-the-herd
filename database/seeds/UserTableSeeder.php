<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'user@thin-the-herd.app',
            'password' => bcrypt('thinherd'),
        ]);

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < Config::get('seeds.users'); $i++) {
            User::create([
                'name' => "{$faker->firstName} {$faker->lastName}",
                'email' => $faker->email,
                'password' => bcrypt('thinherd')
            ]);
        }
    }
}
