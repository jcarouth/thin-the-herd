<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment() === 'production') {
            exit('Do not run seeds in production');
        }

        Model::unguard();

        $tables = [
            'users',
            'password_resets', 
        ];

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
