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
        Schema::create('main_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->double("subtotal");
            $table->double("tax");
            $table->double("total");
            $table->integer("payment_status")->default(0);
            $table->integer("status")->default(0);
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('main_orders');
        Schema::enableForeignKeyConstraints();
    }
};