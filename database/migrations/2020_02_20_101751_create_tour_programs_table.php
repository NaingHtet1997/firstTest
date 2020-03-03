<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en');
            $table->string('title_sp')->nullable();
            $table->string('subtitle_en');
            $table->string('subtitle_sp')->nullable();
             $table->string('author_en');
            $table->string('author_sp')->nullable();
            $table->text('desc_en');
            $table->text('desc_sp')->nullable();
            $table->string('thumbnail');
             $table->integer('created_by');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('tour_programs');
    }
}
