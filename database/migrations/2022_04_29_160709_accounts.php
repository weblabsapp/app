<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accounts extends Migration
{
    const TABLE_NAME = 'accounts';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('email');
            $table->string('name')->nullable();
            $table->string('password');
            $table->string('username')->nullable();
            $table->enum('gender', \App\Enums\GendersEnum::getGenders())->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('job_title')->nullable();
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->string('user_agent')->nullable();
            $table->json('social_profiles')->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('remember_token')->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_email_hidden')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['email', 'is_active']); // email is unique event account is inactive
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(self::TABLE_NAME);
    }
}
