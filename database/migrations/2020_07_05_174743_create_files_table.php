<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->nullable();
            $table->string('version', 10)->nullable();
            $table->string('author', 100)->nullable();
            $table->enum('type', ["pdf","example","kit"])->default('pdf');
            $table->enum('lang', ["en","fr","es","pt","it","hr","de","ja","nl","cn","rs"])->default('en');
            $table->string('file');
            $table->string('thumbnail')->nullable();            
            $table->foreignId('tool_id')->nullable();
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
        Schema::dropIfExists('files');
    }
}
