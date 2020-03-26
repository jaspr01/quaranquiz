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
        DB::table('users')->insert([
            'name' => 'Jasper Verschuere',
            'email' => 'verschuere.jasper@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('covid19'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name' => 'Tristan Hofman',
            'email' => 'hofmantristan@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('quaranquiz'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
