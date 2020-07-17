<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug')->nullable();
            $table->string('tagline')->nullable();
            $table->string('participants')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();            
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->text('tips')->nullable();
            $table->integer('duration')->nullable();
            $table->string('duration_unit')->nullable();
            $table->foreignId('user_id')->nullable()->onDelete('cascade')->constrained();                
            $table->softDeletes();
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
        Schema::dropIfExists('tools');
    }
}
