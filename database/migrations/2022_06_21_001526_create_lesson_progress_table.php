<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLessonProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_progress', function (Blueprint $table) {
            $table->id();
            $table->uuid('account_id');
            $table->uuid('lesson_id');
            $table->boolean('is_completed');
            $table->timestamps();
            $table->softDeletes();

            // Proper indexes
            $table->index(['account_id']);
            $table->index(['lesson_id']);
            $table->index(['account_id', 'lesson_id', 'is_completed', 'deleted_at']);
        });

        // Create index for lessons progress search
        DB::statement('ALTER TABLE lessons_progress ADD INDEX lesson_progress_ndx 
                (account_id asc, created_at desc);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_progress');
    }
}
