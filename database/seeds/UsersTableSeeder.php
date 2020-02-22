<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'narciso_gomes',
            'email' => 'narcisoalmeida25@gmail.com'
        ]);
    }
}
