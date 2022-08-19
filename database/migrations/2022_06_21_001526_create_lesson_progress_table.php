<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLessonProgressTable extends Migration
{
    const TABLE_NAME = 'lessons_progress';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->uuid('account_id');
            $table->uuid('lesson_id');
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
            $table->softDeletes();

            // Proper indexes
            $table->index(['account_id']);
            $table->index(['lesson_id']);
            $table->index(['account_id', 'lesson_id', 'is_completed', 'deleted_at'], 'filter_ndx');
            $table->index(['account_id', 'created_at'], 'lesson_progress_ndx');
        });
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
