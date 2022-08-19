<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Topic;
use Illuminate\Database\Seeder;

class PhpTopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Course $course */
        $course = Course::query()->where('tag', 'php')->first();

        Topic::factory()->createMany([
            [
                'title' => 'Language Reference',
                'course_id' => $course->id,
                'topic_order' => 1
            ],
            [
                'title' => 'Security',
                'course_id' => $course->id,
                'topic_order' => 2
            ],
            [
                'title' => 'Features',
                'course_id' => $course->id,
                'topic_order' => 3
            ],
            [
                'title' => 'Function Reference',
                'course_id' => $course->id,
                'topic_order' => 4
            ]
        ]);
    }
}
