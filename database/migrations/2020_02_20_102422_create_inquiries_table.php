->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id');
            $table->string('name_en');
            $table->string('name_sp')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('subject_en');
            $table->string('subject_sp')->nullable();
            $table->text('message_en');
            $table->text('message_sp')->nullable();
            $table->string('inquiry_type_en');
            $table->string('inquiry_type_sp')->nullable();
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
        Schema::dropIfExists('inquiries');
    }
}
