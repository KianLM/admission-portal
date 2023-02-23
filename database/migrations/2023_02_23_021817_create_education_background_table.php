<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_background', function (Blueprint $table) {
            $table->id();
            $table->integer('application_no');
            $table->integer('year_from');
            $table->integer('year_to');
            $table->string('educ');
            $table->string('school');
            $table->string('sch_type');
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
        Schema::dropIfExists('education_background');
    }
};
