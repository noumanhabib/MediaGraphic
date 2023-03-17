<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('main_order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId("main_order_id")->constrained();
            $table->string("type")->nullable();
            $table->longText("print_details")->nullable();
            $table->string("no_of_copies")->nullable();
            $table->date("date")->nullable();
            $table->double("amount")->nullable();
            $table->text("files")->nullable();
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
        Schema::dropIfExists('main_order_items');
    }
};