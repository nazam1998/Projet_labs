<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('texte');
            $table->string('image');
            $table->boolean('valide');
            
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->on('categories')->references('id')->onDelete('cascade')->onUpdate('cascade');
           
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
        
        
        Schema::create('article_tag', function (Blueprint $table) {
            
            $table->id();

            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->on('tags')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->on('articles')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('articles');
    }
}
