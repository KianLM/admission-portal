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
        Schema::create('applicationform', function (Blueprint $table) {
            $table->id('aplicant_id');
            $table->integer('application_no');
            $table->string('semester');
            $table->integer('old_student');
            $table->string('entry_classification');
            $table->string('educ_type');
            $table->string('course');
            $table->string('year_level');
            $table->string('lrn');
            $table->string('sname');
            $table->string('fname');
            $table->string('mname');
            $table->string('sex');
            $table->string('birth_date');
            $table->string('nationality');
            $table->string('birth_place');
            $table->string('religion');
            $table->string('siblings');
            $table->string('civil_status');
            $table->string('ordinal_position');
            $table->string('presentadd1');
            $table->string('presentadd2');
            $table->string('presentadd3');
            $table->string('presentadd4');
            $table->string('presentadd5');
            $table->string('presentadd6');
            $table->string('permanentadd1');
            $table->string('permanentadd2');
            $table->string('permanentadd3');
            $table->string('permanentadd4');
            $table->string('permanentadd5');
            $table->string('permanentadd6');
            $table->integer('home_phone');
            $table->integer('mobile_phone');
            $table->string('email_add');
            $table->string('contact_person');
            $table->string('relationship');
            $table->string('homeno');
            $table->integer('mobileno');
            $table->integer('referenceno');
            $table->binary('slip');
            $table->binary('cog');
            $table->binary('psa');
            $table->string('reasonOption');
            $table->string('Others');
            $table->string('first_choice');
            $table->string('second_choice');
            $table->string('third_choice');
            $table->string('decisionOption');
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
        Schema::dropIfExists('applicationform');
    }
};
