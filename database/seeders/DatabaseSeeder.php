<?php

namespace Database\Seeders;

use App\Models\Personas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PersonasSeeder::class);
        Personas::factory(100)->create();
    }
}
