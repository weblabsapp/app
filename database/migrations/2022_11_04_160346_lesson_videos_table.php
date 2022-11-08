<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LessonVideosTable extends Migration
{
    const TABLE_NAME = 'lessons_videos';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('lesson_id');
            $table->string('file_name');
            $table->string('poster')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('lessons', function (Blueprint $table) {
            $table->uuid('video_id')->after('topic_id')->nullable();
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
        Schema::dropColumns('lessons', ['video_id']);
    }
}
