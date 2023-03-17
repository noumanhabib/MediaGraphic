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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('email', 255);
            $table->string('phone');
            $table->string('postalcode', 50);
            $table->string('city', 50);
            $table->text('description')->nullable();
            $table->text('image');
            $table->double('amount_include_tax', 11, 2)->nullable();
            $table->double('amount_exclude_tax', 11, 2)->nullable();
            $table->string('type')->nullable();
            $table->string('quantity')->nullable();
            $table->string('Impression')->nullable();
            $table->string('shaping')->nullable();
            $table->string('finishing')->nullable();
            $table->string('catridge')->nullable();
            $table->string('comment')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('quotations');
    }
};
