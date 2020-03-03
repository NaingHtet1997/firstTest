->nullable();<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('car_type_en');
             $table->string('car_type_sp')->nullable();;
            $table->string('image');
            $table->integer('seat_no');
            $table->string('journey_type_en');
            $table->string('journey_type_sp')->nullable();;
            $table->string('time');
            $table->double('price');
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('car_tickets');
    }
}
