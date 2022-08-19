<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    const TABLE_NAME = 'notifications';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('receiver_id');
            $table->uuid('sender_id')->nullable();
            $table->string('type');
            $table->json('placeholders');
            $table->boolean('is_viewed')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });

        // Proper indexes
        // Create index for lessons progress search
        DB::statement('ALTER TABLE notifications ADD INDEX notifications_ndx 
                (receiver_id asc, created_at desc, deleted_at desc);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
