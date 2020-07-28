<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_formations', function (Blueprint $table) {
            $table->id();
            $table->string('institution', 100);
            $table->string('career', 100);
            $table->string('professional_degree', 100);
            $table->date('registration_date');
            $table->string('senescyt_code', 20);
            $table->string('has_titling', 50);
            $table->string('state')->default('ACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-bolsa_empleo')->dropIfExists('academic_formations');
    }
}
