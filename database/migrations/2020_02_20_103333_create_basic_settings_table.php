<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sitename_en');
            $table->string('sitename_sp')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->text('address_en');
            $table->text('address_sp')->nullable();
            $table->text('about_en');
            $table->text('about_sp')->nullable();
            $table->text('vission_en');
            $table->text('vission_sp')->nullable();
            $table->text('mission_en');
            $table->text('mission_sp')->nullable();
            $table->string('google_map');
            $table->string('copyright');
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
        Schema::dropIfExists('basic_settings');
    }
}
