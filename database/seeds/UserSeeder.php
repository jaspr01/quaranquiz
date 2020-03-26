<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::make([
            'name' => 'Jasper Verschuere',
            'email' => 'verschuere.jasper@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('covid19'),
        ]);

        \App\User::make([
            'name' => 'Tristan Hofman',
            'email' => 'hofmantristan@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('quaranquiz'),
        ]);
    }
}
