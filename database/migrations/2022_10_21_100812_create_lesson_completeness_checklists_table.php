<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonCompletenessChecklistsTable extends Migration
{
    const TABLE_NAME = 'lesson_completeness_checklist';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->uuid('lesson_id');
            $table->timestamps();
            $table->softDeletes();

            // Create appropriate index
            $table->index(['lesson_id', 'deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_completeness_checklists');
    }
}
