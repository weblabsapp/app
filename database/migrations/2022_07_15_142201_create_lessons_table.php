<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    const TABLE_NAME = 'lessons';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('course_id');
            $table->string('title');
            $table->string('tag');
            $table->integer('topic_id');
            $table->integer('lesson_order')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();
            $table->softDeletes();

            // Proper indexes
            $table->index(['course_id', 'is_active']);
            $table->unique(['course_id', 'tag', 'deleted_at']);
        });

        // Create index for lessons progress search
        DB::statement('ALTER TABLE lessons ADD INDEX sort_ndx 
                (created_at desc, is_active desc, deleted_at asc);');
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
