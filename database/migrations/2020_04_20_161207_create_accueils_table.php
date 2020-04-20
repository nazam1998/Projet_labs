<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccueilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accueils', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('big_logo');
            $table->string('titre_carousel');
            $table->string('titre_about');
            $table->text('text1_about');
            $table->text('text2_about');
            $table->string('titre_service');
            $table->string('titre_testimonials');
            $table->string('titre_team');
            $table->string('titre_promotion');
            $table->text('text_promotion');
            $table->boolean('showbutton');
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
        Schema::dropIfExists('accueils');
    }
}
