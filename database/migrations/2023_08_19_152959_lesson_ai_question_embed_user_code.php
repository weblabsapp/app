<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LessonAiQuestionEmbedUserCode extends Migration
{
    const TABLE_NAME = 'lessons_ai_questions';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            $table->boolean('embed_user_code')->after('assistant_extra_text')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns(self::TABLE_NAME, ['embed_user_code']);
    }
}
