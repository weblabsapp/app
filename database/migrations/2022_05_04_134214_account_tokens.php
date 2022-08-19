<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccountTokens extends Migration
{
    const TABLE_NAME = 'accounts';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            $table->addColumn('text', 'access_token')
                ->after('remember_token')
                ->nullable();

            $table->addColumn('text','email_verification_token')
                ->after('access_token')
                ->nullable();

            $table->addColumn('text', 'forget_password_token')
                ->after('email_verification_token')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns(self::TABLE_NAME, [
            'email_verification_token', 'forget_password_token'
        ]);
    }
}
