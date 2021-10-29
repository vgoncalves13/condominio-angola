<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialResidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_residence', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('financial_id');
            $table->foreign('financial_id')->references('id')->on('financials');
            $table->unsignedBigInteger('residence_id');
            $table->foreign('residence_id')->references('id')->on('residences');
            $table->string('spent');
            $table->string('reading')->nullable();
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
        Schema::dropIfExists('financial_residence');
    }
}
