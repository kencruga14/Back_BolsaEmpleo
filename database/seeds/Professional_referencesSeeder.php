<?php

use Illuminate\Database\Seeder;

class Professional_referencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProfessionalReference::class, 100)->create();
    }
}
