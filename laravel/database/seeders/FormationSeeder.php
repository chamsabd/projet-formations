<?php

namespace Database\Seeders;

use App\Models\formation;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        formation::factory()->count(10)->create();
  
    }
}
