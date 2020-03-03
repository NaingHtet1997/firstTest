->nullable();<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_en');
            $table->string('name_sp')->nullable();
            $table->string('address_en');
            $table->string('address_sp')->nullable();
            $table->text('desc_en');
            $table->text('desc_sp')->nullable();
            $table->string('type_en');
            $table->string('type_sp')->nullable();
            $table->double('price');
            $table->string('image');
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
        Schema::dropIfExists('hotel_bookings');
    }
}
