<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonFilesTable extends Migration
{
    const TABLE_NAME = 'lessons_files';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('account_id');
            $table->uuid('lesson_id');
            $table->string('file_name');
            $table->timestamps();
            $table->softDeletes();

            // Unique index for file name
            $table->unique(['account_id', 'lesson_id', 'file_name', 'deleted_at'], 'file_name_unique_ndx');
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
