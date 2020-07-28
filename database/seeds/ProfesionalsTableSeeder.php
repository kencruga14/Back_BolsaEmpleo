<?php


use App\Professional;
use Illuminate\Database\Seeder;

class ProfesionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Professional::class, 20)->create();
    }
}
