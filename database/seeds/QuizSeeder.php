<?php

use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Quiz::make([
            'title' => 'Pré 48 UREN Quiz 2020',
        ]);

        \App\Quiz::make([
            'title' => 'Pré 48 UREN Quiz 2019',
        ]);

        \App\Quiz::make([
            'title' => 'Pré 48 UREN Quiz 2018',
        ]);
    }
}
