->nullable();<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en');
            $table->string('title_sp')->nullable();
            $table->string('subtitle_en');
            $table->string('subtitle_sp')->nullable();
            $table->string('image');
            $table->string('author_en');
            $table->string('author_sp')->nullable();
            $table->text('desc_en');
            $table->text('desc_sp')->nullable();
            $table->integer('view_count')->default(0);
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
        Schema::dropIfExists('blogs');
    }
}
