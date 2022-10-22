<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAccountsTableAvatarUniqueUsername extends Migration
{
    const TABLE_NAME = 'accounts';
    const INDEX_NAME = 'username_unique';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            $table->unique(['username', 'deleted_at'], self::INDEX_NAME);
            $table->string('avatar')->after('social_profiles')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            $table->dropUnique(self::INDEX_NAME);
            $table->dropColumn('avatar');
        });
    }
}
