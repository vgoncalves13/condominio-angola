<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondoServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condo_service_provider', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('condo_id');
            $table->foreign('condo_id')->references('id')->on('condos');
            $table->unsignedBigInteger('service_provider_id');
            $table->foreign('service_provider_id')
                ->references('id')->on('service_providers');
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
        Schema::dropIfExists('condo_service');
    }
}
