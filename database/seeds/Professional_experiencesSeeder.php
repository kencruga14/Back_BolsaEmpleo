<?php

use Illuminate\Database\Seeder;

class Professional_experiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProfessionalExperience::class, 100)->create();
    }
}
