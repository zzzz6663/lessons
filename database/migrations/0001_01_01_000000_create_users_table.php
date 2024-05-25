<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('role')->nullable();
            $table->string('cover',50)->nullable();;
            $table->string('avatar',50)->nullable();;
            $table->string('video',50)->nullable();;
            $table->string('username',50)->nullable()->unique();
            $table->string('gender',10)->nullable();
            $table->string('test_session_status',30)->nullable();
            $table->string('test_session_price',30)->nullable();
            $table->string('price_1_session',30)->nullable();
            $table->string('price_5_session',30)->nullable();
            $table->string('price_10_session',30)->nullable();
            $table->string('display',10)->nullable();
            $table->string('teaher',10)->nullable();


            $table->string('seen',30)->nullable();
            $table->string('port_img',30)->nullable();
            $table->string('port_vid',30)->nullable();
            $table->string('active_profile',10)->nullable();
            $table->string('bio',1500)->nullable();
            $table->string('email')->unique();
            $table->timestamp('confirm')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
