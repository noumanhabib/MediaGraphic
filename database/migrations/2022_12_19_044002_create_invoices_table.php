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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId("main_order_id")->constrained();
            $table->double("amount");
            $table->enum("status", ["pending", "done", "cancel"])->default("pending");
            $table->string("payment_via")->default('stripe');
            $table->string("charge_id")->nullable();
            $table->date("due_date")->nullable();
            $table->date("payment_date")->nullable();
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
        Schema::dropIfExists('invoices');
    }
};