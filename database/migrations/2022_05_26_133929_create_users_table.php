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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('title', ["Mr", "Mme"])->nullable();
            $table->enum('role', ['customer', 'admin'])->default('customer');
            $table->enum('customer_type', ['professional', 'individuel'])->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->dateTime("last_login")->nullable();
            $table->text('shiping_address')->nullable();
            $table->string('shiping_postal', 50)->nullable();
            $table->string('shiping_city', 100)->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_postal', 50)->nullable();
            $table->string('billing_city', 100)->nullable();
            $table->unsignedSmallInteger("service_id")->nullable()->comment("Allowed: [1, 2, 3, 4, 5]");
            $table->string('social_reason')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};