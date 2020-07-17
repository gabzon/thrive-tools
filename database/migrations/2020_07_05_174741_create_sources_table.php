<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ["book","chapter","article","newspaper","website","conference","none"])->default('none');
            $table->string('author')->nullable();
            $table->string('title')->nullable();
            $table->string('location')->nullable();
            $table->string('publisher')->nullable();
            $table->integer('year')->nullable();
            $table->string('isbn10')->nullable();
            $table->string('isbn13')->nullable();
            $table->string('url')->nullable();
            $table->string('chapter_title')->nullable();
            $table->string('pages')->nullable();
            $table->string('affiliate_link')->nullable();
            $table->string('image')->nullable();
            $table->date('visited_on')->nullable();
            $table->integer('number')->nullable();
            $table->string('volume')->nullable();
            $table->string('edition')->nullable();
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
        Schema::dropIfExists('sources');
    }
}
