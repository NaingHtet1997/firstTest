->nullable();<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('from_en');
            $table->string('from_sp')->nullable();
            $table->string('to_en');
            $table->string('to_sp')->nullable();
            $table->string('name_en');
            $table->string('name_sp')->nullable();
            $table->string('time');
            $table->string('image');
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
        Schema::dropIfExists('bus_tickets');
    }
}
