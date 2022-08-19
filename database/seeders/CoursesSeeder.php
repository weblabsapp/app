<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Nette\Utils\Html;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::factory()->createMany([
            [
                'id' => Str::uuid()->toString(),
                'title' => 'PHP',
                'description' => sprintf(
                    'PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group. %s',
                    Html::el('a')->href('https://en.wikipedia.org/wiki/PHP')->target('_blank')->addText('Wikipedia')->toHtml()
                ),
                'logo' => 'images/php_logo.png',
                'tag' => 'php',
                'is_active' => true
            ],
            [
                'id' => Str::uuid()->toString(),
                'title' => 'Python',
                'description' => sprintf(
                    'Python is a high-level, interpreted, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected. %s',
                    Html::el('a')->href('https://en.wikipedia.org/wiki/Python_(programming_language)')->target('_blank')->addText('Wikipedia')->toHtml()
                ),
                'logo' => 'images/python_logo.png',
                'tag' => 'python',
                'is_active' => false
            ],
            [
                'id' => Str::uuid()->toString(),
                'title' => 'Javascript',
                'description' => sprintf(
                    'JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. Over 97%% of websites use JavaScript on the client side for web page behavior, often incorporating third-party libraries. %s',
                    Html::el('a')->href('https://en.wikipedia.org/wiki/JavaScript')->target('_blank')->addText('Wikipedia')->toHtml()
                ),
                'logo' => 'images/javascript_logo.png',
                'tag' => 'js',
                'is_active' => false
            ],
        ]);
    }
}
