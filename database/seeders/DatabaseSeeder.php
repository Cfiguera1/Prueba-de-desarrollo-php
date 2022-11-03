<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use app\models\prueba;
use Illuminate\Database\Seeder;
use Database\Seeders\pruebaseeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(pruebaseeder::class);
    }
}
