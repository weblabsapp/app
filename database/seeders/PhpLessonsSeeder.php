<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Topic;
use Illuminate\Database\Seeder;

class PhpLessonsSeeder extends Seeder
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

        /** @var Topic[] $topics */
        $topics = array_column(
            Topic::query()->where('course_id', $course->id)->get()->all(),
        null,
            'slug'
        )
        ;
        Lesson::factory()->createMany([
            [
                'course_id' => $course->id,
                'title' => 'Basic Syntax',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 1,
                'content' => <<<'HTML'
When PHP parses a file, it looks for opening and closing tags, which are <code>&lt;?php</code> and <code>?&gt;</code> 
which tell PHP to start and stop interpreting the code between them. Parsing in this manner allows PHP to be embedded in all sorts of different documents, as everything outside of a pair of opening and closing tags is ignored by the PHP parser.

PHP includes a short echo tag <code>&lt;?=</code> which is a short-hand to the more verbose <code>&lt;?php echo</code>
<hr />
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.basic-syntax.phpmode.php" target="_blank">Escaping from HTML</a></li>
    <li><a href="https://www.php.net/manual/en/language.basic-syntax.instruction-separation.php" target="_blank">Instruction separation</a></li>
    <li><a href="https://www.php.net/manual/en/language.basic-syntax.comments.php" target="_blank">Comments</a></li>
</ul>
HTML,
                'is_active' => 1
            ],
            [
                'course_id' => $course->id,
                'title' => 'Types',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 2,
                'content' => <<<'HTML'
<p class="simpara">PHP supports ten primitive types.</p>
<p class="para">Four scalar types:</p>
<ul class="itemizedlist">
    <li class="listitem"><span class="simpara"><span class="type">bool</span></span></li>
    <li class="listitem"><span class="simpara"><span class="type">int</span></span></li>
    <li class="listitem"><span class="simpara"><span class="type">float</span> (floating-point number, aka <span class="type">double</span>)</span></li>
    <li class="listitem"><span class="simpara"><span class="type">string</span></span></li>
</ul>
<p class="para">Four compound types:</p>
<ul class="itemizedlist">
    <li class="listitem"><span class="simpara"><span class="type">array</span></span></li>
    <li class="listitem"><span class="simpara"><span class="type">object</span></span></li>
    <li class="listitem"><span class="simpara"><span class="type"><a class="type callable" href="https://www.php.net/manual/en/language.types.callable.php" target="_blank">callable</a></span></span></li>
    <li class="listitem"><span class="simpara"><span class="type"><a class="type iterable" href="https://www.php.net/manual/en/language.types.iterable.php" target="_blank">iterable</a></span></span></li>
</ul>
<p class="para">And finally two special types:</p>
<ul class="itemizedlist">
    <li class="listitem"><span class="simpara"><span class="type">resource</span></span></li>
    <li class="listitem"><span class="simpara"><span class="type">NULL</span></span></li>
</ul>
<p class="simpara">Some references to the type "double" may remain in the manual. Consider double the same as float; the two names exist only for historic reasons.</p>
<p class="simpara">The type of a variable is not usually set by the programmer; rather, it is decided at runtime by PHP depending on the context in which that variable is used.</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Variables',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 3,
                'content' => <<<'HTML'
<p class="simpara">Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.</p>
<p class="para">Variable names follow the same rules as other labels in PHP. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thus:&nbsp;<code class="code">^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</code></p>
<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.variables.predefined.php" target="_blank">Predefined Variables</a></li>
    <li><a href="https://www.php.net/manual/en/language.variables.scope.php" target="_blank">Variable scope</a></li>
    <li><a href="https://www.php.net/manual/en/language.variables.variable.php" target="_blank">Variable variables</a></li>
    <li><a href="https://www.php.net/manual/en/language.variables.external.php" target="_blank">Variables From External Sources</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Constants',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 4,
                'content' => <<<'HTML'
<p>A constant is an identifier (name) for a simple value. As the name suggests, that value cannot change during the execution of the script (except for magic constants, which aren't actually constants). Constants are case-sensitive. By convention, constant identifiers are always uppercase.</p>
<p>The name of a constant follows the same rules as any label in PHP. A valid constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thusly: <code>^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</code></p>
<p>It is possible to <code>define()</code> constants with reserved or even invalid names, whose value can only be retrieved with the <code>constant()</code> function. However, doing so is not recommended.</p>
<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.constants.syntax.php" target="_blank">Syntax</a></li>
    <li><a href="https://www.php.net/manual/en/language.constants.predefined.php" target="_blank">Predefined constants</a></li>
    <li><a href="https://www.php.net/manual/en/language.constants.magic.php" target="_blank">Magic constants</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Expressions',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 5,
                'content' => <<<'HTML'
<p>Expressions are the most important building blocks of PHP. In PHP, almost anything you write is an expression. The simplest yet most accurate way to define an expression is "anything that has a value".</p>
<p>The most basic forms of expressions are constants and variables. When you type <code>$a = 5</code>, you're assigning '5' into <code>$a</code>. '5', obviously, has the value 5, or in other words '5' is an expression with the value of 5 (in this case, '5' is an integer constant).</p>
<p>After this assignment, you'd expect $a's value to be 5 as well, so if you wrote <code>$b = $a</code>, you'd expect it to behave just as if you wrote <code>$b = 5</code>. In other words, <code>$a</code> is an expression with the value of 5 as well. If everything works right, this is exactly what will happen.</p>
<hr>
<h5>
    <a href="https://www.php.net/manual/en/language.expressions.php" target="_blank">Read more about expressions in details</a>
</h5>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Operators',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 6,
                'content' => <<<'HTML'
<p class="simpara">An operator is something that takes one or more values (or expressions, in programming jargon) and yields another value (so that the construction itself becomes an expression).</p>
<p class="para">Operators can be grouped according to the number of values they take. Unary operators take only one value, for example&nbsp;<code class="literal">!</code>&nbsp;(the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.logical.php" target="_blank">logical not operator</a>) or&nbsp;<code class="literal">++</code>&nbsp;(the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.increment.php" target="_blank">increment operator</a>). Binary operators take two values, such as the familiar&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.arithmetic.php" target="_blank">arithmetical operators</a>&nbsp;<code class="literal">+</code>&nbsp;(plus) and&nbsp;<code class="literal">-</code>&nbsp;(minus), and the majority of PHP operators fall into this category. Finally, there is a single&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary">ternary operator</a>,&nbsp;<code class="literal">? :</code>, which takes three values; this is usually referred to simply as "the ternary operator" (although it could perhaps more properly be called the conditional operator).</p>
<p class="para">A full list of PHP operators follows in the section&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.precedence.php" target="_blank">Operator Precedence</a>. The section also explains operator precedence and associativity, which govern exactly how expressions containing several different operators are evaluated.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.operators.precedence.php" target="_blank">Operator Precedence</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.arithmetic.php" target="_blank">Arithmetic Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.assignment.php" target="_blank">Assignment Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.bitwise.php" target="_blank">Bitwise Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.comparison.php" target="_blank">Comparison Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.errorcontrol.php" target="_blank">Error Control Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.execution.php" target="_blank">Execution Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.increment.php" target="_blank">Incrementing/Decrementing Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.logical.php" target="_blank">Logical Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.string.php" target="_blank">String Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.array.php" target="_blank">Array Operators</a></li>
    <li><a href="https://www.php.net/manual/en/language.operators.type.php" target="_blank">Type Operators</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Control Structures',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 7,
                'content' => <<<'HTML'
<p>Any PHP script is built out of a series of statements. A statement can be an assignment, a function call, a loop, a conditional statement or even a statement that does nothing (an empty statement). Statements usually end with a semicolon. In addition, statements can be grouped into a statement-group by encapsulating a group of statements with curly braces. A statement-group is a statement by itself as well.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/control-structures.if.php" target="_blank">if</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.else.php" target="_blank">else</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.elseif.php" target="_blank">elseif/else if</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.alternative-syntax.php" target="_blank">Alternative syntax for control structures</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.while.php" target="_blank">while</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.do.while.php" target="_blank">do-while</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.for.php" target="_blank">for</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.foreach.php" target="_blank">foreach</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.break.php" target="_blank">break</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.continue.php" target="_blank">continue</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.switch.php" target="_blank">switch</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.match.php" target="_blank">match</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.declare.php" target="_blank">declare</a></li>
    <li><a href="https://www.php.net/manual/en/function.return.php" target="_blank">return</a></li>
    <li><a href="https://www.php.net/manual/en/function.require.php" target="_blank">require</a></li>
    <li><a href="https://www.php.net/manual/en/function.include.php" target="_blank">include</a></li>
    <li><a href="https://www.php.net/manual/en/function.require-once.php" target="_blank">require_once</a></li>
    <li><a href="https://www.php.net/manual/en/function.include-once.php" target="_blank">include_once</a></li>
    <li><a href="https://www.php.net/manual/en/control-structures.goto.php" target="_blank">goto</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Functions',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 8,
                'content' => <<<'HTML'
<p>PHP function is a piece of code that can be reused many times. It can take input as argument list and return value. There are thousands of built-in functions in PHP.</p>
<p>In PHP, we can define Conditional function, Function within Function and Recursive function also.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/functions.user-defined.php" target="_blank">User-defined functions</a></li>
    <li><a href="https://www.php.net/manual/en/functions.arguments.php" target="_blank">Function arguments</a></li>
    <li><a href="https://www.php.net/manual/en/functions.returning-values.php" target="_blank">Returning values</a></li>
    <li><a href="https://www.php.net/manual/en/functions.variable-functions.php" target="_blank">Variable functions</a></li>
    <li><a href="https://www.php.net/manual/en/functions.internal.php" target="_blank">Internal (built-in) functions</a></li>
    <li><a href="https://www.php.net/manual/en/functions.anonymous.php" target="_blank">Anonymous functions</a></li>
    <li><a href="https://www.php.net/manual/en/functions.arrow.php" target="_blank">Arrow Functions</a></li>
    <li><a href="https://www.php.net/manual/en/functions.first_class_callable_syntax.php" target="_blank">First class callable syntax</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Classes and Objects',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 9,
                'content' => <<<'HTML'
<p class="para">PHP includes a complete object model. Some of its features are:&nbsp;<a class="link" href="https://www.php.net/manual/en/language.oop5.visibility.php" target="_blank">visibility</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/language.oop5.abstract.php" target="_blank">abstract</a>&nbsp;and&nbsp;<a class="link" href="https://www.php.net/manual/en/language.oop5.final.php" target="_blank">final</a>&nbsp;classes and methods, additional&nbsp;<a class="link" href="https://www.php.net/manual/en/language.oop5.magic.php" target="_blank">magic methods</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/language.oop5.interfaces.php" target="_blank">interfaces</a>, and&nbsp;<a class="link" href="https://www.php.net/manual/en/language.oop5.cloning.php" target="_blank">cloning</a>.</p>
<p class="para">PHP treats objects in the same way as references or handles, meaning that each variable contains an object reference rather than a copy of the entire object. See&nbsp;<a class="link" href="https://www.php.net/manual/en/language.oop5.references.php" target="_blank">Objects and References</a></p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.oop5.basic.php" target="_blank">The Basics</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.properties.php" target="_blank">Properties</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.constants.php" target="_blank">Class Constants</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.autoload.php" target="_blank">Autoloading Classes</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.decon.php" target="_blank">Constructors and Destructors</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.visibility.php" target="_blank">Visibility</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.inheritance.php" target="_blank">Object Inheritance</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php" target="_blank">Scope Resolution Operator (::)</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.static.php" target="_blank">Static Keyword</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.abstract.php" target="_blank">Class Abstraction</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.interfaces.php" target="_blank">Object Interfaces</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.traits.php" target="_blank">Traits</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.anonymous.php" target="_blank">Anonymous classes</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.overloading.php" target="_blank">Overloading</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.iterations.php" target="_blank">Object Iteration</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.magic.php" target="_blank">Magic Methods</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.final.php" target="_blank">Final Keyword</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.cloning.php" target="_blank">Object Cloning</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.object-comparison.php" target="_blank">Comparing Objects</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.late-static-bindings.php" target="_blank">Late Static Bindings</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.references.php" target="_blank">Objects and references</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.serialization.php" target="_blank">Object Serialization</a></li>
    <li><a href="https://www.php.net/manual/en/language.oop5.variance.php" target="_blank">Covariance and Contravariance</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Namespaces',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 10,
                'content' => <<<'HTML'
<p class="simpara">What are namespaces? In the broadest definition namespaces are a way of encapsulating items. This can be seen as an abstract concept in many places. For example, in any operating system directories serve to group related files, and act as a namespace for the files within them. As a concrete example, the file&nbsp;<code class="literal">foo.txt</code>&nbsp;can exist in both directory&nbsp;<code class="literal">/home/greg</code>&nbsp;and in&nbsp;<code class="literal">/home/other</code>, but two copies of&nbsp;<code class="literal">foo.txt</code>&nbsp;cannot co-exist in the same directory. In addition, to access the&nbsp;<code class="literal">foo.txt</code>&nbsp;file outside of the&nbsp;<code class="literal">/home/greg</code>&nbsp;directory, we must prepend the directory name to the file name using the directory separator to get&nbsp;<code class="literal">/home/greg/foo.txt</code>. This same principle extends to namespaces in the programming world.</p>
<p class="simpara">In the PHP world, namespaces are designed to solve two problems that authors of libraries and applications encounter when creating re-usable code elements such as classes or functions:</p>
<ol>
    <li class="listitem"><span class="simpara">Name collisions between code you create, and internal PHP classes/functions/constants or third-party classes/functions/constants.</span></li>
    <li class="listitem"><span class="simpara">Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem, improving readability of source code.</span></li>
</ol>
<p class="simpara">PHP Namespaces provide a way in which to group related classes, interfaces, functions and constants.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.namespaces.definition.php" target="_blank">Defining namespaces</a></li>
    <li><a href="https://www.php.net/manual/en/language.namespaces.nested.php" target="_blank">Declaring sub-namespaces</a></li>
    <li><a href="https://www.php.net/manual/en/language.namespaces.definitionmultiple.php" target="_blank">Defining multiple namespaces in the same file</a></li>
    <li><a href="https://www.php.net/manual/en/language.namespaces.basics.php" target="_blank">Using namespaces: Basics</a></li>
    <li><a href="https://www.php.net/manual/en/language.namespaces.dynamic.php" target="_blank">Namespaces and dynamic language features</a></li>
    <li><a href="https://www.php.net/manual/en/language.namespaces.nsconstants.php" target="_blank">namespace keyword and __NAMESPACE__ constant</a></li>
    <li><a href="https://www.php.net/manual/en/language.namespaces.importing.php" target="_blank">Using namespaces: Aliasing/Importing</a></li>
    <li><a href="https://www.php.net/manual/en/language.namespaces.global.php" target="_blank">Global space</a></li>
    <li><a href="https://www.php.net/manual/en/language.namespaces.fallback.php" target="_blank">Using namespaces: fallback to global function/constant</a></li>
    <li><a href="https://www.php.net/manual/en/language.namespaces.rules.php" target="_blank">Name resolution rules</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Enumerations',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 11,
                'content' => <<<'HTML'
<p class="para">Enumerations, or "Enums" allow a developer to define a custom type that is limited to one of a discrete number of possible values. That can be especially helpful when defining a domain model, as it enables "making invalid states unrepresentable."</p>
<p class="para">Enums appear in many languages with a variety of different features. In PHP, Enums are a special kind of object. The Enum itself is a class, and its possible cases are all single-instance objects of that class. That means Enum cases are valid objects and may be used anywhere an object may be used, including type checks.</p>
<p class="para">The most popular example of enumerations is the built-in boolean type, which is an enumerated type with legal values&nbsp;<strong><code>true</code></strong>&nbsp;and&nbsp;<strong><code>false</code></strong>. Enums allows developers to define their own arbitrarily robust enumerations.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.enumerations.basics.php" target="_blank">Basic enumerations</a></li>
    <li><a href="https://www.php.net/manual/en/language.enumerations.backed.php" target="_blank">Backed enumerations</a></li>
    <li><a href="https://www.php.net/manual/en/language.enumerations.methods.php" target="_blank">Enumeration methods</a></li>
    <li><a href="https://www.php.net/manual/en/language.enumerations.static-methods.php" target="_blank">Enumeration static methods</a></li>
    <li><a href="https://www.php.net/manual/en/language.enumerations.constants.php" target="_blank">Enumeration constants</a></li>
    <li><a href="https://www.php.net/manual/en/language.enumerations.traits.php" target="_blank">Traits</a></li>
    <li><a href="https://www.php.net/manual/en/language.enumerations.expressions.php" target="_blank">Enum values in constant expressions</a></li>
    <li><a href="https://www.php.net/manual/en/language.enumerations.object-differences.php" target="_blank">Differences from objects</a></li>
    <li><a href="https://www.php.net/manual/en/language.enumerations.listing.php" target="_blank">Value listing</a></li>
    <li><a href="https://www.php.net/manual/en/language.enumerations.serialization.php" target="_blank">Serialization</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Errors',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 12,
                'content' => <<<'HTML'
<h5><a href="https://www.php.net/manual/en/language.errors.php" target="_blank">Read more about Errors in PHP</a></h5>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Exceptions',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 13,
                'content' => <<<'HTML'
<p class="para">PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught within PHP. Code may be surrounded in a <code class="literal">try</code> block, to facilitate the catching of potential exceptions. Each <code class="literal">try</code> must have at least one corresponding <code class="literal">catch</code> or <code class="literal">finally</code> block.</p>
<p class="para">If an exception is thrown and its current function scope has no <code class="literal">catch</code> block, the exception will "bubble up" the call stack to the calling function until it finds a matching <code class="literal">catch</code> block. All <code class="literal">finally</code> blocks it encounters along the way will be executed. If the call stack is unwound all the way to the global scope without encountering a matching <code class="literal">catch</code> block, the program will terminate with a fatal error unless a global exception handler has been set.</p>
<p class="para">The thrown object must be an instance of the Exception class or a subclass of Exception. Trying to throw an object that is not will result in a PHP Fatal Error.</p>
<p class="para">As of PHP 8.0.0, the <code class="literal">throw</code> keyword is an expression and may be used in any expression context. In prior versions it was a statement and was required to be on its own line.</p>

<hr>
<h5>This topics also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.exceptions.extending.php" target="_blank">Extending Exceptions</a></li>
</ul>
<hr>
<h5><a href="https://www.php.net/manual/en/language.exceptions.php" target="_blank">Read more about exceptions</a></h5>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Fibers',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 14,
                'content' => <<<'HTML'
<p class="para">Fibers represent full-stack, interruptible functions. Fibers may be suspended from anywhere in the call-stack, pausing execution within the fiber until the fiber is resumed at a later time.</p>
<p class="para">Fibers pause the entire execution stack, so the direct caller of the function does not need to change how it invokes the function.</p>
<p class="para">Execution may be interrupted anywhere in the call stack using <code>Fiber::suspend()</code> (that is, the call to <code>Fiber::suspend()</code>&gt; may be in a deeply nested function or not even exist at all).</p>
<p class="para">Unlike stack-less <a class="classname" href="https://www.php.net/manual/en/class.generator.php" target="_blank">Generator</a>s, each <a class="classname" href="https://www.php.net/manual/en/class.fiber.php" target="_blank">Fiber</a> has its own call stack, allowing them to be paused within deeply nested function calls. A function declaring an interruption point (that is, calling <code>Fiber::suspend()</code>&gt;) need not change its return type, unlike a function using <code>yield</code>&gt; which must return a <a class="classname" href="https://www.php.net/manual/en/class.generator.php" target="_blank">Generator</a> instance.</p>
<p class="para">Fibers can be suspended in any function call, including those called from within the PHP VM, such as functions provided to <code>array_map()</code>&gt; or methods called by foreach on an <a class="classname" href="https://www.php.net/manual/en/class.iterator.php" target="_blank">Iterator</a> object.</p>
<p class="para">Once suspended, execution of the fiber may be resumed with any value using <code>Fiber::resume()</code> or by throwing an exception into the fiber using <code>Fiber::throw()</code>&gt;. The value is returned (or exception thrown) from <code>Fiber::suspend()</code>.</p>

<hr>
<h5><a href="https://www.php.net/manual/en/language.fibers.php" target="_blank">Read more about Fibers</a></h5>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Generators',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 15,
                'content' => <<<'HTML'
<p class="para">Generators provide an easy way to implement simple <a class="link" href="https://www.php.net/manual/en/language.oop5.iterations.php" target="_blank">iterators</a> without the overhead or complexity of implementing a class that implements the <a class="classname" href="https://www.php.net/manual/en/class.iterator.php" target="_blank">Iterator</a> interface.</p>
<p class="para">A generator allows you to write code that uses <code>foreach</code> to iterate over a set of data without needing to build an array in memory, which may cause you to exceed a memory limit, or require a considerable amount of processing time to generate. Instead, you can write a generator function, which is the same as a normal <a class="link" href="https://www.php.net/manual/en/functions.user-defined.php" target="_blank">function</a>, except that instead of <code>return</code>ing once, a generator can <code>yield</code> as many times as it needs to in order to provide the values to be iterated over.</p>
<p class="para">A simple example of this is to reimplement the <a class="function" href="https://www.php.net/manual/en/function.range.php" target="_blank">range()</a> function as a generator. The standard <code>range()</code> function has to generate an array with every value in it and return it, which can result in large arrays: for example, calling <strong class="command">range(0, 1000000)</strong> will result in well over 100 MB of memory being used.</p>
<p class="para">As an alternative, we can implement an&nbsp;<code class="literal">xrange()</code>&nbsp;generator, which will only ever need enough memory to create an <a class="classname" href="https://www.php.net/manual/en/class.iterator.php" target="_blank">Iterator</a> object and track the current state of the generator internally, which turns out to be less than 1 kilobyte.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.generators.overview.php" target="_blank">Generators overview</a></li>
    <li><a href="https://www.php.net/manual/en/language.generators.syntax.php" target="_blank">Generator syntax</a></li>
    <li><a href="https://www.php.net/manual/en/language.generators.comparison.php" target="_blank">Comparing generators with Iterator objects</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Attributes',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 16,
                'content' => <<<'HTML'
<p class="para">Attributes offer the ability to add structured, machine-readable metadata information on declarations in code: Classes, methods, functions, parameters, properties and class constants can be the target of an attribute. The metadata defined by attributes can then be inspected at runtime using the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.reflection.php" target="_blank">Reflection APIs</a>. Attributes could therefore be thought of as a configuration language embedded directly into code.</p>
<p class="para">With attributes the generic implementation of a feature and its concrete use in an application can be decoupled. In a way it is comparable to interfaces and their implementations. But where interfaces and implementations are about code, attributes are about annotating extra information and configuration. Interfaces can be implemented by classes, yet attributes can also be declared on methods, functions, parameters, properties and class constants. As such they are more flexible than interfaces.</p>
<p class="para">A simple example of attribute usage is to convert an interface that has optional methods to use attributes. Lets assume an&nbsp;<code class="literal">ActionHandler</code>&nbsp;interface representing an operation in an application, where some implementations of an action handler require setup and others do not. Instead of requiring all classes that implement&nbsp;<code class="literal">ActionHandler</code>&nbsp;to implement a method&nbsp;<code class="literal">setUp()</code>, an attribute can be used. One benefit of this approach is that we can use the attribute several times.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.attributes.overview.php" target="_blank">Attributes overview</a></li>
    <li><a href="https://www.php.net/manual/en/language.attributes.syntax.php" target="_blank">Attribute syntax</a></li>
    <li><a href="https://www.php.net/manual/en/language.attributes.reflection.php" target="_blank">Reading Attributes with the Reflection API</a></li>
    <li><a href="https://www.php.net/manual/en/language.attributes.classes.php" target="_blank">Declaring Attribute Classes</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'References Explained',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 17,
                'content' => <<<'HTML'
<p>References in PHP are a means to access the same variable content by different names. They are not like C pointers; for instance, you cannot perform pointer arithmetic using them, they are not actual memory addresses, and so on. See&nbsp;<a class="xref" href="https://www.php.net/manual/en/language.references.arent.php" target="_blank">What References Are Not</a>&nbsp;for more information. Instead, they are symbol table aliases. Note that in PHP, variable name and variable content are different, so the same content can have different names. The closest analogy is with Unix filenames and files - variable names are directory entries, while variable content is the file itself. References can be likened to hardlinking in Unix filesystem.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/language.references.whatare.php" target="_blank">What References Are</a></li>
    <li><a href="https://www.php.net/manual/en/language.references.whatdo.php" target="_blank">What References Do</a></li>
    <li><a href="https://www.php.net/manual/en/language.references.arent.php" target="_blank">What References Are Not</a></li>
    <li><a href="https://www.php.net/manual/en/language.references.pass.php" target="_blank">Passing by Reference</a></li>
    <li><a href="https://www.php.net/manual/en/language.references.return.php" target="_blank">Returning References</a></li>
    <li><a href="https://www.php.net/manual/en/language.references.unset.php" target="_blank">Unsetting References</a></li>
    <li><a href="https://www.php.net/manual/en/language.references.spot.php" target="_blank">Spotting References</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Predefined Variables',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 18,
                'content' => <<<'HTML'
<p>PHP provides a large number of predefined variables to all scripts. The variables represent everything from&nbsp;<a class="link" href="https://www.php.net/manual/en/language.variables.external.php" target="_blank">external variables</a>&nbsp;to built-in environment variables, last error messages to last retrieved headers.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_reference">
    <li><a href="https://www.php.net/manual/en/language.variables.superglobals.php" target="_blank">Superglobals</a>&nbsp;— Built-in variables that are always available in all scopes</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.globals.php" target="_blank">$GLOBALS</a>&nbsp;— References all variables available in global scope</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.server.php" target="_blank">$_SERVER</a>&nbsp;— Server and execution environment information</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.get.php" target="_blank">$_GET</a>&nbsp;— HTTP GET variables</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.post.php" target="_blank">$_POST</a>&nbsp;— HTTP POST variables</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.files.php" target="_blank">$_FILES</a>&nbsp;— HTTP File Upload variables</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.request.php" target="_blank">$_REQUEST</a>&nbsp;— HTTP Request variables</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.session.php" target="_blank">$_SESSION</a>&nbsp;— Session variables</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.environment.php" target="_blank">$_ENV</a>&nbsp;— Environment variables</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.cookies.php" target="_blank">$_COOKIE</a>&nbsp;— HTTP Cookies</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.phperrormsg.php" target="_blank">$php_errormsg</a>&nbsp;— The previous error message</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.httpresponseheader.php" target="_blank">$http_response_header</a>&nbsp;— HTTP response headers</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.argc.php" target="_blank">$argc</a>&nbsp;— The number of arguments passed to script</li>
    <li><a href="https://www.php.net/manual/en/reserved.variables.argv.php" target="_blank">$argv</a>&nbsp;— Array of arguments passed to script</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Predefined Exceptions',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 19,
                'content' => <<<'HTML'
<ul class="chunklist chunklist_part">
    <li><a href="https://www.php.net/manual/en/class.exception.php" target="_blank">Exception</a></li>
    <li><a href="https://www.php.net/manual/en/class.errorexception.php" target="_blank">ErrorException</a></li>
    <li><a href="https://www.php.net/manual/en/class.error.php" target="_blank">Error</a></li>
    <li><a href="https://www.php.net/manual/en/class.argumentcounterror.php" target="_blank">ArgumentCountError</a></li>
    <li><a href="https://www.php.net/manual/en/class.arithmeticerror.php" target="_blank">ArithmeticError</a></li>
    <li><a href="https://www.php.net/manual/en/class.assertionerror.php" target="_blank">AssertionError</a></li>
    <li><a href="https://www.php.net/manual/en/class.divisionbyzeroerror.php" target="_blank">DivisionByZeroError</a></li>
    <li><a href="https://www.php.net/manual/en/class.compileerror.php" target="_blank">CompileError</a></li>
    <li><a href="https://www.php.net/manual/en/class.parseerror.php" target="_blank">ParseError</a></li>
    <li><a href="https://www.php.net/manual/en/class.typeerror.php" target="_blank">TypeError</a></li>
    <li><a href="https://www.php.net/manual/en/class.valueerror.php" target="_blank">ValueError</a></li>
    <li><a href="https://www.php.net/manual/en/class.unhandledmatcherror.php" target="_blank">UnhandledMatchError</a></li>
    <li><a href="https://www.php.net/manual/en/class.fibererror.php" target="_blank">FiberError</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Predefined Interfaces and Classes',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 20,
                'content' => <<<'HTML'
<ul class="chunklist chunklist_part">
    <li><a href="https://www.php.net/manual/en/class.traversable.php" target="_blank">Traversable</a></li>
    <li><a href="https://www.php.net/manual/en/class.iterator.php" target="_blank">Iterator</a></li>
    <li><a href="https://www.php.net/manual/en/class.iteratoraggregate.php" target="_blank">IteratorAggregate</a></li>
    <li><a href="https://www.php.net/manual/en/class.throwable.php" target="_blank">Throwable</a></li>
    <li><a href="https://www.php.net/manual/en/class.arrayaccess.php" target="_blank">ArrayAccess</a></li>
    <li><a href="https://www.php.net/manual/en/class.serializable.php" target="_blank">Serializable</a></li>
    <li><a href="https://www.php.net/manual/en/class.closure.php" target="_blank">Closure</a></li>
    <li><a href="https://www.php.net/manual/en/class.generator.php" target="_blank">Generator</a></li>
    <li><a href="https://www.php.net/manual/en/class.fiber.php" target="_blank">Fiber</a></li>
    <li><a href="https://www.php.net/manual/en/class.weakreference.php" target="_blank">WeakReference</a></li>
    <li><a href="https://www.php.net/manual/en/class.weakmap.php" target="_blank">WeakMap</a></li>
    <li><a href="https://www.php.net/manual/en/class.stringable.php" target="_blank">Stringable</a></li>
    <li><a href="https://www.php.net/manual/en/class.unitenum.php" target="_blank">UnitEnum</a></li>
    <li><a href="https://www.php.net/manual/en/class.backedenum.php" target="_blank">BackedEnum</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Supported Protocols and Wrappers',
                'topic_id' => $topics['language-reference']->id,
                'lesson_order' => 21,
                'content' => <<<'HTML'
<p>PHP comes with many built-in wrappers for various URL-style protocols for use with the filesystem functions such as <code>fopen()</code>, <code>copy()</code>, <code>file_exists()</code> and <code>filesize()</code>. In addition to these wrappers, it is possible to register custom wrappers using the <code>stream_wrapper_register()</code> function.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_reference">
    <li><a href="https://www.php.net/manual/en/wrappers.file.php" target="_blank">file://</a>&nbsp;— Accessing local filesystem</li>
    <li><a href="https://www.php.net/manual/en/wrappers.http.php" target="_blank">http://</a>&nbsp;— Accessing HTTP(s) URLs</li>
    <li><a href="https://www.php.net/manual/en/wrappers.ftp.php" target="_blank">ftp://</a>&nbsp;— Accessing FTP(s) URLs</li>
    <li><a href="https://www.php.net/manual/en/wrappers.php.php" target="_blank">php://</a>&nbsp;— Accessing various I/O streams</li>
    <li><a href="https://www.php.net/manual/en/wrappers.compression.php" target="_blank">zlib://</a>&nbsp;— Compression Streams</li>
    <li><a href="https://www.php.net/manual/en/wrappers.data.php" target="_blank">data://</a>&nbsp;— Data (RFC 2397)</li>
    <li><a href="https://www.php.net/manual/en/wrappers.glob.php" target="_blank">glob://</a>&nbsp;— Find pathnames matching pattern</li>
    <li><a href="https://www.php.net/manual/en/wrappers.phar.php" target="_blank">phar://</a>&nbsp;— PHP Archive</li>
    <li><a href="https://www.php.net/manual/en/wrappers.ssh2.php" target="_blank">ssh2://</a>&nbsp;— Secure Shell 2</li>
    <li><a href="https://www.php.net/manual/en/wrappers.rar.php" target="_blank">rar://</a>&nbsp;— RAR</li>
    <li><a href="https://www.php.net/manual/en/wrappers.audio.php" target="_blank">ogg://</a>&nbsp;— Audio streams</li>
    <li><a href="https://www.php.net/manual/en/wrappers.expect.php" target="_blank">expect://</a>&nbsp;— Process Interaction Streams</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Security Introduction',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 22,
                'content' => <<<'HTML'
<p class="simpara">PHP is a powerful language and the interpreter, whether included in a web server as a module or executed as a separate&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;binary, is able to access files, execute commands and open network connections on the server. These properties make anything run on a web server insecure by default. PHP is designed specifically to be a more secure language for writing&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;programs than Perl or C, and with correct selection of compile-time and runtime configuration options, and proper coding practices, it can give you exactly the combination of freedom and security you need.</p>
<p class="simpara">As there are many different ways of utilizing PHP, there are many configuration options controlling its behaviour. A large selection of options guarantees you can use PHP for a lot of purposes, but it also means there are combinations of these options and server configurations that result in an insecure setup.</p>
<p class="simpara">The configuration flexibility of PHP is equally rivalled by the code flexibility. PHP can be used to build complete server applications, with all the power of a shell user, or it can be used for simple server-side includes with little risk in a tightly controlled environment. How you build that environment, and how secure it is, is largely up to the PHP developer.</p>
<p class="simpara">This chapter starts with some general security advice, explains the different configuration option combinations and the situations they can be safely used, and describes different considerations in coding for different levels of security.</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'General Consideration',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 23,
                'content' => <<<'HTML'
<p class="simpara">A completely secure system is a virtual impossibility, so an approach often used in the security profession is one of balancing risk and usability. If every variable submitted by a user required two forms of biometric validation (such as a retinal scan and a fingerprint), you would have an extremely high level of accountability. It would also take half an hour to fill out a fairly complex form, which would tend to encourage users to find ways of bypassing the security.</p>
<p class="simpara">The best security is often unobtrusive enough to suit the requirements without the user being prevented from accomplishing their work, or over-burdening the code author with excessive complexity. Indeed, some security attacks are merely exploits of this kind of overly built security, which tends to erode over time.</p>
<p class="simpara">A phrase worth remembering: A system is only as good as the weakest link in a chain. If all transactions are heavily logged based on time, location, transaction type, etc. but the user is only verified based on a single cookie, the validity of tying the users to the transaction log is severely weakened.</p>
<p class="simpara">When testing, keep in mind that you will not be able to test all possibilities for even the simplest of pages. The input you may expect will be completely unrelated to the input given by a disgruntled employee, a cracker with months of time on their hands, or a housecat walking across the keyboard. This is why it's best to look at the code from a logical perspective, to discern where unexpected data can be introduced, and then follow how it is modified, reduced, or amplified.</p>
<p class="simpara">The Internet is filled with people trying to make a name for themselves by breaking your code, crashing your site, posting inappropriate content, and otherwise making your day interesting. It doesn't matter if you have a small or large site, you are a target by simply being online, by having a server that can be connected to. Many cracking programs do not discern by size, they simply trawl massive IP blocks looking for victims. Try not to become one.</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Install as CGI Library',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 24,
                'content' => <<<'HTML'
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/security.cgi-bin.attacks.php" target="_blank">Possible attacks</a></li>
    <li><a href="https://www.php.net/manual/en/security.cgi-bin.default.php" target="_blank">Case 1: only public files served</a></li>
    <li><a href="https://www.php.net/manual/en/security.cgi-bin.force-redirect.php" target="_blank">Case 2: using cgi.force_redirect</a></li>
    <li><a href="https://www.php.net/manual/en/security.cgi-bin.doc-root.php" target="_blank">Case 3: setting doc_root or user_dir</a></li>
    <li><a href="https://www.php.net/manual/en/security.cgi-bin.shell.php" target="_blank">Case 4: PHP parser outside of web tree</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Install as Apache Module',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 25,
                'content' => <<<'HTML'
<p class="simpara">When&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;is used as an Apache module it inherits Apache's user permissions (typically those of the "nobody" user). This has several impacts on security and authorization. For example, if you are using&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;to access a database, unless that database has built-in access control, you will have to make the database accessible to the "nobody" user. This means a malicious script could access and modify the database, even without a username and password. It's entirely possible that a web spider could stumble across a database administrator's web page, and drop all of your databases. You can protect against this with Apache authorization, or you can design your own access model using LDAP,&nbsp;<var class="filename">.htaccess</var>&nbsp;files, etc. and include that code as part of your&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;scripts.</p>
<p class="simpara">Often, once security is established to the point where the&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;user (in this case, the apache user) has very little risk attached to it, it is discovered that&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;is now prevented from writing any files to user directories. Or perhaps it has been prevented from accessing or changing databases. It has equally been secured from writing good and bad files, or entering good and bad database transactions.</p>
<p class="simpara">A frequent security mistake made at this point is to allow apache root permissions, or to escalate apache's abilities in some other way.</p>
<p class="simpara">Escalating the Apache user's permissions to root is extremely dangerous and may compromise the entire system, so sudo'ing, chroot'ing, or otherwise running as root should not be considered by those who are not security professionals.</p>
<p class="simpara">There are some simpler solutions. By using&nbsp;<a class="link" href="https://www.php.net/manual/en/ini.core.php#ini.open-basedir" target="_blank">open_basedir</a>&nbsp;you can control and restrict what directories are allowed to be used for&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>. You can also set up apache-only areas, to restrict all web based activity to non-user, or non-system, files.</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Session Security',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 26,
                'content' => <<<'HTML'
<p class="simpara">It is important keeping HTTP session management secure. Session related security is described in&nbsp;<a class="link" href="https://www.php.net/manual/en/session.security.php" target="_blank">Session Security</a>&nbsp;section of&nbsp;<a class="link" href="https://www.php.net/manual/en/book.session.php" target="_blank">Session module</a>&nbsp;reference.</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Filesystem Security',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 27,
                'content' => <<<'HTML'
<p class="simpara"><abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;is subject to the security built into most server systems with respect to permissions on a file and directory basis. This allows you to control which files in the filesystem may be read. Care should be taken with any files which are world readable to ensure that they are safe for reading by all users who have access to that filesystem.</p>
<p class="simpara">Since&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;was designed to allow user level access to the filesystem, it's entirely possible to write a&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;script that will allow you to read system files such as /etc/passwd, modify your ethernet connections, send massive printer jobs out, etc. This has some obvious implications, in that you need to ensure that the files that you read from and write to are the appropriate ones.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/security.filesystem.nullbytes.php" target="_blank">Null bytes related issues</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Security',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 28,
                'content' => <<<'HTML'
<p class="simpara">Nowadays, databases are cardinal components of any web based application by enabling websites to provide varying dynamic content. Since very sensitive or secret information can be stored in a database, you should strongly consider protecting your databases.</p>
<p class="simpara">To retrieve or to store any information you need to connect to the database, send a legitimate query, fetch the result, and close the connection. Nowadays, the commonly used query language in this interaction is the Structured Query Language (SQL). See how an attacker can&nbsp;<a class="link" href="https://www.php.net/manual/en/security.database.sql-injection.php" target="_blank">tamper with an SQL query</a>.</p>
<p class="simpara">As you can surmise,&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;cannot protect your database by itself. The following sections aim to be an introduction into the very basics of how to access and manipulate databases within&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;scripts.</p>
<p class="simpara">Keep in mind this simple rule: defense in depth. The more places you take action to increase the protection of your database, the less probability of an attacker succeeding in exposing or abusing any stored information. Good design of the database schema and the application deals with your greatest fears.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
<li><a href="https://www.php.net/manual/en/security.database.design.php" target="_blank">Designing Databases</a></li>
<li><a href="https://www.php.net/manual/en/security.database.connection.php" target="_blank">Connecting to Database</a></li>
<li><a href="https://www.php.net/manual/en/security.database.storage.php" target="_blank">Encrypted Storage Model</a></li>
<li><a href="https://www.php.net/manual/en/security.database.sql-injection.php" target="_blank">SQL Injection</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Error Reporting',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 29,
                'content' => <<<'HTML'
<p class="para">With PHP security, there are two sides to error reporting. One is beneficial to increasing security, the other is detrimental.</p>
<p class="para">A standard attack tactic involves profiling a system by feeding it improper data, and checking for the kinds, and contexts, of the errors which are returned. This allows the system cracker to probe for information about the server, to determine possible weaknesses. For example, if an attacker had gleaned information about a page based on a prior form submission, they may attempt to override variables, or modify them:</p>
<div id="example-434" class="example">
    <p><strong>Example #1 Attacking Variables with a custom HTML page</strong></p>
    <div class="example-contents">
        <div class="htmlcode">
<pre class="htmlcode p-1" style="background-color: #e9ecef;">&lt;form method="post" action="attacktarget?username=badfoo&amp;amp;password=badfoo"&gt;
&lt;input type="hidden" name="username" value="badfoo" /&gt;
&lt;input type="hidden" name="password" value="badfoo" /&gt;
&lt;/form&gt;</pre>
        </div>
    </div>
</div>
<p class="para">The PHP errors which are normally returned can be quite helpful to a developer who is trying to debug a script, indicating such things as the function or file that failed, the PHP file it failed in, and the line number which the failure occurred in. This is all information that can be exploited. It is not uncommon for a php developer to use&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.show-source.php" target="_blank">show_source()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.highlight-string.php" target="_blank">highlight_string()</a></span>, or&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.highlight-file.php" target="_blank">highlight_file()</a></span>&nbsp;as a debugging measure, but in a live site, this can expose hidden variables, unchecked syntax, and other dangerous information. Especially dangerous is running code from known sources with built-in debugging handlers, or using common debugging techniques. If the attacker can determine what general technique you are using, they may try to brute-force a page, by sending various common debugging strings:</p>
<div id="example-435" class="example">
    <p><strong>Example #2 Exploiting common debugging variables</strong></p>
    <div class="example-contents">
        <div class="htmlcode">
<pre class="htmlcode p-1" style="background-color: #e9ecef;">&lt;form method="post" action="attacktarget?errors=Y&amp;amp;showerrors=1&amp;amp;debug=1"&gt;
&lt;input type="hidden" name="errors" value="Y" /&gt;
&lt;input type="hidden" name="showerrors" value="1" /&gt;
&lt;input type="hidden" name="debug" value="1" /&gt;
&lt;/form&gt;</pre>
        </div>
    </div>
</div>
<p class="para">Regardless of the method of error handling, the ability to probe a system for errors leads to providing an attacker with more information.</p>
<p class="para">For example, the very style of a generic PHP error indicates a system is running PHP. If the attacker was looking at an .html page, and wanted to probe for the back-end (to look for known weaknesses in the system), by feeding it the wrong data they may be able to determine that a system was built with PHP.</p>
<p class="para">A function error can indicate whether a system may be running a specific database engine, or give clues as to how a web page or programmed or designed. This allows for deeper investigation into open database ports, or to look for specific bugs or weaknesses in a web page. By feeding different pieces of bad data, for example, an attacker can determine the order of authentication in a script, (from the line number errors) as well as probe for exploits that may be exploited in different locations in the script.</p>
<p class="para">A filesystem or general PHP error can indicate what permissions the web server has, as well as the structure and organization of files on the web server. Developer written error code can aggravate this problem, leading to easy exploitation of formerly "hidden" information.</p>
<p class="para">There are three major solutions to this issue. The first is to scrutinize all functions, and attempt to compensate for the bulk of the errors. The second is to disable error reporting entirely on the running code. The third is to use PHP's custom error handling functions to create your own error handler. Depending on your security policy, you may find all three to be applicable to your situation.</p>
<p class="para">One way of catching this issue ahead of time is to make use of PHP's own&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.error-reporting.php" target="_blank">error_reporting()</a></span>, to help you secure your code and find variable usage that may be dangerous. By testing your code, prior to deployment, with&nbsp;<strong><code>E_ALL</code></strong>, you can quickly find areas where your variables may be open to poisoning or modification in other ways. Once you are ready for deployment, you should either disable error reporting completely by setting&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.error-reporting.php" target="_blank">error_reporting()</a></span>&nbsp;to 0, or turn off the error display using the&nbsp;<var class="filename">php.ini</var>&nbsp;option&nbsp;<code class="literal">display_errors</code>, to insulate your code from probing. If you choose to do the latter, you should also define the path to your log file using the&nbsp;<code class="literal">error_log</code>&nbsp;ini directive, and turn&nbsp;<code class="literal">log_errors</code>&nbsp;on.</p>
<div id="example-436" class="example">
    <p><strong>Example #3 Finding dangerous variables with E_ALL</strong></p>
    <div class="example-contents">
        <div class="phpcode"><code>&lt;?php<br>if&nbsp;($username)&nbsp;{&nbsp;&nbsp;//&nbsp;Not&nbsp;initialized&nbsp;or&nbsp;checked&nbsp;before&nbsp;usage<br>&nbsp;&nbsp;&nbsp;&nbsp;$good_login&nbsp;=&nbsp;1;<br>}<br>if&nbsp;($good_login&nbsp;==&nbsp;1)&nbsp;{&nbsp;//&nbsp;If&nbsp;above&nbsp;test&nbsp;fails,&nbsp;not&nbsp;initialized&nbsp;or&nbsp;checked&nbsp;before&nbsp;usage<br>&nbsp;&nbsp;&nbsp;&nbsp;readfile&nbsp;("/highly/sensitive/data/index.html");<br>}<br>?&gt;</code></div>
    </div>
</div>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'User Submitted Data',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 30,
                'content' => <<<'HTML'
<p class="para">The greatest weakness in many&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;programs is not inherent in the language itself, but merely an issue of code not being written with security in mind. For this reason, you should always take the time to consider the implications of a given piece of code, to ascertain the possible damage if an unexpected variable is submitted to it.</p>
<div id="example-437" class="example">
    <p><strong>Example #1 Dangerous Variable Usage</strong></p>
    <div class="example-contents">
        <div class="phpcode"><code>&lt;?php<br>//&nbsp;remove&nbsp;a&nbsp;file&nbsp;from&nbsp;the&nbsp;user's&nbsp;home&nbsp;directory...&nbsp;or&nbsp;maybe<br>//&nbsp;somebody&nbsp;else's?<br>unlink&nbsp;($evil_var);<br><br>//&nbsp;Write&nbsp;logging&nbsp;of&nbsp;their&nbsp;access...&nbsp;or&nbsp;maybe&nbsp;an&nbsp;/etc/passwd&nbsp;entry?<br>fwrite&nbsp;($fp,&nbsp;$evil_var);<br><br>//&nbsp;Execute&nbsp;something&nbsp;trivial..&nbsp;or&nbsp;rm&nbsp;-rf&nbsp;*?<br>system&nbsp;($evil_var);<br>exec&nbsp;($evil_var);<br><br>?&gt;</code></div>
    </div>
</div>
<br>
<p class="para">You should always carefully examine your code to make sure that any variables being submitted from a web browser are being properly checked, and ask yourself the following questions:</p>
<ul class="itemizedlist">
    <li class="listitem"><span class="simpara">Will this script only affect the intended files?</span></li>
    <li class="listitem"><span class="simpara">Can unusual or undesirable data be acted upon?</span></li>
    <li class="listitem"><span class="simpara">Can this script be used in unintended ways?</span></li>
    <li class="listitem"><span class="simpara">Can this be used in conjunction with other scripts in a negative manner?</span></li>
    <li class="listitem"><span class="simpara">Will any transactions be adequately logged?</span></li>
</ul>
<p class="para">By adequately asking these questions while writing the script, rather than later, you prevent an unfortunate re-write when you need to increase your security. By starting out with this mindset, you won't guarantee the security of your system, but you can help improve it.</p>
<p class="para">You may also want to consider turning off register_globals, magic_quotes, or other convenience settings which may confuse you as to the validity, source, or value of a given variable. Working with&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;in error_reporting(E_ALL) mode can also help warn you about variables being used before they are checked or initialized (so you can prevent unusual data from being operated upon).</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Hiding PHP',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 31,
                'content' => <<<'HTML'
<p class="para">In general, security by obscurity is one of the weakest forms of security. But in some cases, every little bit of extra security is desirable.</p>
<p class="para">A few simple techniques can help to hide&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>, possibly slowing down an attacker who is attempting to discover weaknesses in your system. By setting expose_php to&nbsp;<code class="literal">off</code>&nbsp;in your&nbsp;<var class="filename">php.ini</var>&nbsp;file, you reduce the amount of information available to them.</p>
<p class="para">Another tactic is to configure web servers such as apache to parse different filetypes through&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>, either with an&nbsp;<var class="filename">.htaccess</var>&nbsp;directive, or in the apache configuration file itself. You can then use misleading file extensions:</p>
<div id="example-438" class="example">
    <p><strong>Example #1 Hiding PHP as another language</strong></p>
    <div class="example-contents">
        <div class="apache-confcode">
<pre class="apache-confcode p-1" style="background-color: #e9ecef;"># Make PHP code look like other code types
AddType application/x-httpd-php .asp .py .pl</pre>
        </div>
    </div>
</div>
<p>Or obscure it completely:</p>
<div id="example-439" class="example">
    <p><strong>Example #2 Using unknown types for PHP extensions</strong></p>
    <div class="example-contents">
        <div class="apache-confcode">
<pre class="apache-confcode p-1" style="background-color: #e9ecef;"># Make PHP code look like unknown types
AddType application/x-httpd-php .bop .foo .133t</pre>
        </div>
    </div>
</div>
<p>Or hide it as&nbsp;<abbr title="Hyper Text Markup Language">HTML</abbr>&nbsp;code, which has a slight performance hit because all&nbsp;<abbr title="Hyper Text Markup Language">HTML</abbr>&nbsp;will be parsed through the&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;engine:</p>
<div id="example-440" class="example">
    <p><strong>Example #3 Using&nbsp;<abbr title="Hyper Text Markup Language">HTML</abbr>&nbsp;types for PHP extensions</strong></p>
    <div class="example-contents">
        <div class="apache-confcode">
<pre class="apache-confcode" style="background-color: #e9ecef;"># Make all PHP code look like HTML
AddType application/x-httpd-php .htm .html</pre>
        </div>
    </div>
</div>
<p>For this to work effectively, you must rename your&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;files with the above extensions. While it is a form of security through obscurity, it's a minor preventative measure with few drawbacks.</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Keeping Current',
                'topic_id' => $topics['security']->id,
                'lesson_order' => 32,
                'content' => <<<'HTML'
<p class="simpara">PHP, like any other large system, is under constant scrutiny and improvement. Each new version will often include both major and minor changes to enhance security and repair any flaws, configuration mishaps, and other issues that will affect the overall security and stability of your system.</p>
<p class="simpara">Like other system-level scripting languages and programs, the best approach is to update often, and maintain awareness of the latest versions and their changes.</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'HTTP Authentication with PHP',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 33,
                'content' => <<<'HTML'
<p>It is possible to use the&nbsp;
    <span class="function"><a class="function" href="https://www.php.net/manual/en/function.header.php" target="_blank">header()</a></span>
    &nbsp;function to send an&nbsp;<code class="literal">"Authentication Required"</code>&nbsp;
    message to the client browser causing it to pop up a Username/Password input window.
    Once the user has filled in a username and a password, the URL containing the PHP script will be called again with the&nbsp;
    <a class="link" href="https://www.php.net/manual/en/reserved.variables.php" target="_blank">predefined variables</a>&nbsp;
    <var class="varname">PHP_AUTH_USER</var>,&nbsp;<var class="varname">PHP_AUTH_PW</var>, and&nbsp;<var class="varname">AUTH_TYPE</var>&nbsp;
    set to the user name, password and authentication type respectively. These predefined variables are found in the&nbsp;
    <var class="varname"><a class="classname" href="https://www.php.net/manual/en/reserved.variables.server.php" target="_blank">$_SERVER</a></var>&nbsp;
    array.&nbsp;<em class="emphasis">Only</em>&nbsp;"Basic" and "Digest" authentication methods are supported. See the&nbsp;
    <span class="function"><a class="function" href="https://www.php.net/manual/en/function.header.php" target="_blank">header()</a></span>&nbsp;function for more information.
</p>

<hr>
<a href="https://www.php.net/manual/en/features.http-auth.php" target="_blank"><h5>Read more about HTTP Authentication using PHP</h5></a>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Cookies',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 34,
                'content' => <<<'HTML'
<p>It is possible to use the&nbsp;
    <span class="function"><a class="function" href="https://www.php.net/manual/en/function.header.php" target="_blank">header()</a></span>
    &nbsp;function to send an&nbsp;<code class="literal">"Authentication Required"</code>&nbsp;
    message to the client browser causing it to pop up a Username/Password input window.
    Once the user has filled in a username and a password, the URL containing the PHP script will be called again with the&nbsp;
    <a class="link" href="https://www.php.net/manual/en/reserved.variables.php" target="_blank">predefined variables</a>&nbsp;
    <var class="varname">PHP_AUTH_USER</var>,&nbsp;<var class="varname">PHP_AUTH_PW</var>, and&nbsp;<var class="varname">AUTH_TYPE</var>&nbsp;
    set to the user name, password and authentication type respectively. These predefined variables are found in the&nbsp;
    <var class="varname"><a class="classname" href="https://www.php.net/manual/en/reserved.variables.server.php" target="_blank">$_SERVER</a></var>&nbsp;
    array.&nbsp;<em class="emphasis">Only</em>&nbsp;"Basic" and "Digest" authentication methods are supported. See the&nbsp;
    <span class="function"><a class="function" href="https://www.php.net/manual/en/function.header.php" target="_blank">header()</a></span>&nbsp;function for more information.
</p>

<hr>
<a href="https://www.php.net/manual/en/features.http-auth.php" target="_blank"><h5>Read more about HTTP Authentication using PHP</h5></a>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Sessions',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 35,
                'content' => <<<'HTML'
<p>Session support in PHP consists of a way to preserve certain data across subsequent accesses. This enables you to build more customized applications and increase the appeal of your web site. All information is in the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.session.php" target="_blank">Session reference</a>&nbsp;section.</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Handling File Uploads',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 36,
                'content' => <<<'HTML'
<p>A PHP script can be used with a HTML form to allow users to upload files to the server. Initially files are uploaded into a temporary directory and then relocated to a target destination by a PHP script.</p>
<p>Information in the&nbsp;<strong>phpinfo.php</strong>&nbsp;page describes the temporary directory that is used for file uploads as&nbsp;<strong>upload_tmp_dir</strong>&nbsp;and the maximum permitted size of files that can be uploaded is stated as&nbsp;<strong>upload_max_filesize</strong>. These parameters are set into PHP configuration file&nbsp;<strong>php.ini</strong></p>
<p>The process of uploading a file follows these steps −</p>
<ul class="list">
    <li>
        <p>The user opens the page containing a HTML form featuring a text files, a browse button and a submit button.</p>
    </li>
    <li>
        <p>The user clicks the browse button and selects a file to upload from the local PC.</p>
    </li>
    <li>
        <p>The full path to the selected file appears in the text filed then the user clicks the submit button.</p>
    </li>
    <li>
        <p>The selected file is sent to the temporary directory on the server.</p>
    </li>
    <li>
        <p>The PHP script that was specified as the form handler in the form's action attribute checks that the file has arrived and then copies the file into an intended directory.</p>
    </li>
    <li>
        <p>The PHP script confirms the success to the user.</p>
    </li>
</ul>
<p>As usual when writing files it is necessary for both temporary and final locations to have permissions set that enable file writing. If either is set to be read-only then process will fail.</p>
<p>An uploaded file could be a text file or image file or any document.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/features.file-upload.post-method.php" target="_blank">POST method uploads</a></li>
    <li><a href="https://www.php.net/manual/en/features.file-upload.errors.php" target="_blank">Error Messages Explained</a></li>
    <li><a href="https://www.php.net/manual/en/features.file-upload.common-pitfalls.php" target="_blank">Common Pitfalls</a></li>
    <li><a href="https://www.php.net/manual/en/features.file-upload.multiple.php" target="_blank">Uploading multiple files</a></li>
    <li><a href="https://www.php.net/manual/en/features.file-upload.put-method.php" target="_blank">PUT method support</a></li>
    <li><a href="https://www.php.net/manual/en/features.file-upload.errors.seealso.php" target="_blank">See Also</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Using Remote Files',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 37,
                'content' => <<<'HTML'
<div id="features.remote-files" class="chapter">
    <p class="para">As long as&nbsp;<strong class="option unknown">allow_url_fopen</strong>&nbsp;is enabled in&nbsp;<var class="filename">php.ini</var>, you can use&nbsp;<abbr title="Hypertext Transfer Protocol">HTTP</abbr>&nbsp;and&nbsp;<abbr title="File Transfer Protocol">FTP</abbr>&nbsp;URLs with most of the functions that take a filename as a parameter. In addition, URLs can be used with the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.include.php" target="_blank">include</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.include-once.php" target="_blank">include_once</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.require.php" target="_blank">require</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.require-once.php" target="_blank">require_once</a></span>&nbsp;statements (<strong class="option unknown">allow_url_include</strong>&nbsp;must be enabled for these). See&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.php" target="_blank">Supported Protocols and Wrappers</a>&nbsp;for more information about the protocols supported by PHP.</p>
    <p class="para">For example, you can use this to open a file on a remote web server, parse the output for the data you want, and then use that data in a database query, or simply to output it in a style matching the rest of your website.</p>
    <p class="para">&nbsp;</p>
    <div id="example-452" class="example">
        <p><strong>Example #1 Getting the title of a remote page</strong></p>
        <div class="example-contents">
            <div class="phpcode"><code>&lt;?php<br>$file&nbsp;=&nbsp;fopen&nbsp;("http://www.example.com/",&nbsp;"r");<br>if&nbsp;(!$file)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;p&gt;Unable&nbsp;to&nbsp;open&nbsp;remote&nbsp;file.\n";<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>}<br>while&nbsp;(!feof&nbsp;($file))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;$line&nbsp;=&nbsp;fgets&nbsp;($file,&nbsp;1024);<br>&nbsp;&nbsp;&nbsp;&nbsp;/*&nbsp;This&nbsp;only&nbsp;works&nbsp;if&nbsp;the&nbsp;title&nbsp;and&nbsp;its&nbsp;tags&nbsp;are&nbsp;on&nbsp;one&nbsp;line&nbsp;*/<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(preg_match&nbsp;("@\&lt;title\&gt;(.*)\&lt;/title\&gt;@i",&nbsp;$line,&nbsp;$out))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$title&nbsp;=&nbsp;$out[1];<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}<br>fclose($file);<br>?&gt;</code></div>
        </div>
    </div>
    <p class="para">You can also write to files on an FTP server (provided that you have connected as a user with the correct access rights). You can only create new files using this method; if you try to overwrite a file that already exists, the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fopen.php" target="_blank">fopen()</a></span>&nbsp;call will fail.</p>
    <p class="para">To connect as a user other than 'anonymous', you need to specify the username (and possibly password) within the URL, such as '<code class="literal">ftp://user:password@ftp.example.com/path/to/file</code>'. (You can use the same sort of syntax to access files via&nbsp;<abbr title="Hypertext Transfer Protocol">HTTP</abbr>&nbsp;when they require Basic authentication.)</p>
    <p class="para">&nbsp;</p>
    <div id="example-453" class="example">
        <p><strong>Example #2 Storing data on a remote server</strong></p>
        <div class="example-contents">
            <div class="phpcode"><code>&lt;?php<br>$file&nbsp;=&nbsp;fopen&nbsp;("ftp://ftp.example.com/incoming/outputfile",&nbsp;"w");<br>if&nbsp;(!$file)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;p&gt;Unable&nbsp;to&nbsp;open&nbsp;remote&nbsp;file&nbsp;for&nbsp;writing.\n";<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>}<br>/*&nbsp;Write&nbsp;the&nbsp;data&nbsp;here.&nbsp;*/<br>fwrite&nbsp;($file,&nbsp;$_SERVER['HTTP_USER_AGENT']&nbsp;.&nbsp;"\n");<br>fclose&nbsp;($file);<br>?&gt;</code></div>
        </div>
    </div>
    <p class="para">&nbsp;</p>
    <blockquote class="note">
        <p><strong class="note">Note</strong>:</p>
        <p class="para">You might get the idea from the example above that you can use this technique to write to a remote log file. Unfortunately that would not work because the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fopen.php" target="_blank">fopen()</a></span>&nbsp;call will fail if the remote file already exists. To do distributed logging like that, you should take a look at&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.syslog.php" target="_blank">syslog()</a></span>.</p>
    </blockquote>
</div>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Connection Handling',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 38,
                'content' => <<<'HTML'
<p class="para">Internally in PHP a connection status is maintained. There are 4 possible states:</p>
<ul class="itemizedlist">
    <li class="listitem"><span class="simpara">0 - NORMAL</span></li>
    <li class="listitem"><span class="simpara">1 - ABORTED</span></li>
    <li class="listitem"><span class="simpara">2 - TIMEOUT</span></li>
    <li class="listitem"><span class="simpara">3 - ABORTED and TIMEOUT</span></li>
</ul>
<p class="simpara">When a PHP script is running normally, the NORMAL state is active. If the remote client disconnects, the ABORTED state flag is turned on. A remote client disconnect is usually caused by users hitting their STOP button. If the PHP-imposed time limit (see&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.set-time-limit.php" target="_blank">set_time_limit()</a></span>) is hit, the TIMEOUT state flag is turned on.</p>
<p class="simpara">You can decide whether or not you want a client disconnect to cause your script to be aborted. Sometimes it is handy to always have your scripts run to completion even if there is no remote browser receiving the output. The default behaviour is however for your script to be aborted when the remote client disconnects. This behaviour can be set via the ignore_user_abort&nbsp;<var class="filename">php.ini</var>&nbsp;directive as well as through the corresponding&nbsp;<code class="literal">php_value ignore_user_abort</code>&nbsp;Apache&nbsp;<var class="filename">httpd.conf</var>&nbsp;directive or with the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.ignore-user-abort.php" target="_blank">ignore_user_abort()</a></span>&nbsp;function. If you do not tell PHP to ignore a user abort and the user aborts, your script will terminate. The one exception is if you have registered a shutdown function using&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.register-shutdown-function.php" target="_blank">register_shutdown_function()</a></span>. With a shutdown function, when the remote user hits his STOP button, the next time your script tries to output something PHP will detect that the connection has been aborted and the shutdown function is called. This shutdown function will also get called at the end of your script terminating normally, so to do something different in case of a client disconnect you can use the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.connection-aborted.php" target="_blank">connection_aborted()</a></span>&nbsp;function. This function will return&nbsp;<strong><code>true</code></strong>&nbsp;if the connection was aborted.</p>
<p class="simpara">Your script can also be terminated by the built-in script timer. The default timeout is 30 seconds. It can be changed using the&nbsp;<strong class="option unknown">max_execution_time</strong>&nbsp;<var class="filename">php.ini</var>&nbsp;directive or the corresponding&nbsp;<code class="literal">php_value max_execution_time</code>&nbsp;Apache&nbsp;<var class="filename">httpd.conf</var>&nbsp;directive as well as with the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.set-time-limit.php" target="_blank">set_time_limit()</a></span>&nbsp;function. When the timer expires the script will be aborted and as with the above client disconnect case, if a shutdown function has been registered it will be called. Within this shutdown function you can check to see if a timeout caused the shutdown function to be called by calling the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.connection-status.php" target="_blank">connection_status()</a></span>&nbsp;function. This function will return 2 if a timeout caused the shutdown function to be called.</p>
<p class="simpara">One thing to note is that both the ABORTED and the TIMEOUT states can be active at the same time. This is possible if you tell PHP to ignore user aborts. PHP will still note the fact that a user may have broken the connection, but the script will keep running. If it then hits the time limit it will be aborted and your shutdown function, if any, will be called. At this point you will find that&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.connection-status.php" target="_blank">connection_status()</a></span>&nbsp;returns 3.</p>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Persistent Database Connections',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 39,
                'content' => <<<'HTML'
<p class="simpara">Persistent connections are links that do not close when the execution of your script ends. When a persistent connection is requested, PHP checks if there's already an identical persistent connection (that remained open from earlier) - and if it exists, it uses it. If it does not exist, it creates the link. An 'identical' connection is a connection that was opened to the same host, with the same username and the same password (where applicable).</p>
<p class="simpara">People who aren't thoroughly familiar with the way web servers work and distribute the load may mistake persistent connects for what they're not. In particular, they do&nbsp;<em class="emphasis">not</em>&nbsp;give you an ability to open 'user sessions' on the same link, they do&nbsp;<em class="emphasis">not</em>&nbsp;give you an ability to build up a transaction efficiently, and they don't do a whole lot of other things. In fact, to be extremely clear about the subject, persistent connections don't give you&nbsp;<em class="emphasis">any</em>&nbsp;functionality that wasn't possible with their non-persistent brothers.</p>
<p class="simpara">Why?</p>

<hr>
<a href="https://www.php.net/manual/en/features.persistent-connections.php" target="_blank">
    <h5>Read more about Persistent Database Connections</h5>
</a>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Command Line Usage',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 40,
                'content' => <<<'HTML'
<p class="para">The main focus of&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;<abbr title="Server Application Programming Interface">SAPI</abbr>&nbsp;is for developing shell applications with PHP. There are quite a few differences between the&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;<abbr title="Server Application Programming Interface">SAPI</abbr>&nbsp;and other&nbsp;<abbr title="Server Application Programming Interface">SAPI</abbr>s which are explained in this chapter. It is worth mentioning that&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;and&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;are different&nbsp;<abbr title="Server Application Programming Interface">SAPI</abbr>s although they do share many of the same behaviors.</p>
<p class="para">The&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;<abbr title="Server Application Programming Interface">SAPI</abbr>&nbsp;is enabled by default using&nbsp;<strong class="option configure">--enable-cli</strong>, but may be disabled using the&nbsp;<strong class="option configure">--disable-cli</strong>&nbsp;option when running&nbsp;<strong class="command">./configure</strong>.</p>
<p class="para">The name, location and existence of the&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>/<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;binaries will differ depending on how PHP is installed on your system. By default when executing&nbsp;<strong class="command">make</strong>, both the&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;and&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;are built and placed as&nbsp;<var class="filename">sapi/cgi/php-cgi</var>&nbsp;and&nbsp;<var class="filename">sapi/cli/php</var>&nbsp;respectively, in your PHP source directory. You will note that both are named&nbsp;<var class="filename">php</var>. What happens during&nbsp;<strong class="command">make install</strong>&nbsp;depends on your configure line. If a module&nbsp;<abbr title="Server Application Programming Interface">SAPI</abbr>&nbsp;is chosen during configure, such as apxs, or the&nbsp;<strong class="option configure">--disable-cgi</strong>&nbsp;option is used, the&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;is copied to&nbsp;<var class="filename">{PREFIX}/bin/php</var>&nbsp;during&nbsp;<strong class="command">make install</strong>&nbsp;otherwise the&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;is placed there. So, for example, if&nbsp;<strong class="option configure">--with-apxs&nbsp;</strong>is in your configure line then the&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;is copied to&nbsp;<var class="filename">{PREFIX}/bin/php&nbsp;</var>during&nbsp;<strong class="command">make install</strong>. If you want to override the installation of the&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;binary, use&nbsp;<strong class="command">make install-cli</strong>&nbsp;after&nbsp;<strong class="command">make install</strong>. Alternatively you can specify&nbsp;<strong class="option configure">--disable-cgi</strong>&nbsp;in your configure line.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">Because both&nbsp;<strong class="option configure">--enable-cli</strong>&nbsp;and&nbsp;<strong class="option configure">--enable-cgi</strong>&nbsp;are enabled by default, simply having&nbsp;<strong class="option configure">--enable-cli</strong>&nbsp;in your configure line does not necessarily mean the&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;will be copied as&nbsp;<var class="filename">{PREFIX}/bin/php</var>&nbsp;during&nbsp;<strong class="command">make install</strong>.</p>
</blockquote>
<p class="para">The&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;binary is distributed in the main folder as&nbsp;<var class="filename">php.exe</var>&nbsp;on Windows. The&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;version is distributed as&nbsp;<var class="filename">php-cgi.exe</var>. Additionally, a&nbsp;<var class="filename">php-win.exe</var>&nbsp;is distributed if PHP is configured using&nbsp;<strong class="option configure">--enable-cli-win32</strong>. This does the same as the&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>&nbsp;version, except that it doesn't output anything and thus provides no console.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<strong>What SAPI do I have?</strong></p>
    <p class="para">From a shell, typing&nbsp;<strong class="command">php -v</strong>&nbsp;will tell you whether&nbsp;<var class="filename">php</var>&nbsp;is&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;or&nbsp;<abbr title="Command Line Interpreter/Interface">CLI</abbr>. See also the function&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.php-sapi-name.php" target="_blank">php_sapi_name()</a></span>&nbsp;and the constant&nbsp;<strong><code>PHP_SAPI</code></strong>.</p>
</blockquote>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">A Unix manual page is available by typing&nbsp;<strong class="command">man php</strong>&nbsp;in the shell environment.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/features.commandline.introduction.php" target="_blank">Introduction</a></li>
    <li><a href="https://www.php.net/manual/en/features.commandline.differences.php" target="_blank">Differences to other SAPIs</a></li>
    <li><a href="https://www.php.net/manual/en/features.commandline.options.php" target="_blank">Options</a></li>
    <li><a href="https://www.php.net/manual/en/features.commandline.usage.php" target="_blank">Usage</a></li>
    <li><a href="https://www.php.net/manual/en/features.commandline.io-streams.php" target="_blank">I/O streams</a></li>
    <li><a href="https://www.php.net/manual/en/features.commandline.interactive.php" target="_blank">Interactive shell</a></li>
    <li><a href="https://www.php.net/manual/en/features.commandline.webserver.php" target="_blank">Built-in web server</a></li>
    <li><a href="https://www.php.net/manual/en/features.commandline.ini.php" target="_blank">INI settings</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Garbage Collection',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 41,
                'content' => <<<'HTML'
<p>As of PHP 7.3, PHP provides basic garbage collection information in user land PHP, via <code>gc_status</code>. The function returns: The number of garbage collection runs. The number of objects collected</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/features.gc.refcounting-basics.php" target="_blank">Reference Counting Basics</a></li>
    <li><a href="https://www.php.net/manual/en/features.gc.collecting-cycles.php" target="_blank">Collecting Cycles</a></li>
    <li><a href="https://www.php.net/manual/en/features.gc.performance-considerations.php" target="_blank">Performance Considerations</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'DTrace Dynamic Tracing',
                'topic_id' => $topics['features']->id,
                'lesson_order' => 42,
                'content' => <<<'HTML'
<p class="para">DTrace is an always-available, low overhead, tracing framework available on a number of platforms including Solaris, macOS, Oracle Linux and BSD. DTrace can trace operating system behavior and user program execution. It can display argument values and be used to infer performance statistics. Probes are monitored by user created scripts written in the DTrace D scripting language. This allows efficient analysis of data points.</p>
<p class="para">PHP probes that are not being actively monitored by a user's DTrace D script do not contain instrumented code so there is no performance degradation during normal application execution. Probes that are being monitored incur an overhead low enough to generally allow DTrace monitoring on live production systems.</p>
<p class="para">PHP incorporates "User-level Statically Defined Tracing" (USDT) probes that are triggered at runtime. For example, when a D script is monitoring PHP's&nbsp;<code class="literal">function-entry</code>&nbsp;probe, then, every time a PHP script function is called, this probe is fired and the associated D script action code is executed. This action code could, for example, print probe arguments such as the source file location of the PHP function. Or the action could aggregate data such as the number of times each function is called.</p>
<p class="para">Only the PHP USDT probes are described here. Refer to external general and operating system-specific DTrace literature to see how DTrace can be used to trace arbitrary functions, and how it can be used to trace operating system behavior. Note not all DTrace features are available in all DTrace implementations.</p>
<p class="para">DTrace static probes are included in PHP 5.4. Prior to this they were available via a&nbsp;<a class="link external" href="https://pecl.php.net/" target="_blank">»&nbsp;PECL</a>&nbsp;extension, which is now obsolete.</p>
<p class="para">The static DTrace probes in PHP can alternatively be used with the SystemTap facility on some Linux distributions.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_chapter">
    <li><a href="https://www.php.net/manual/en/features.dtrace.introduction.php" target="_blank">Introduction to PHP and DTrace</a></li>
    <li><a href="https://www.php.net/manual/en/features.dtrace.dtrace.php" target="_blank">Using PHP and DTrace</a></li>
    <li><a href="https://www.php.net/manual/en/features.dtrace.systemtap.php" target="_blank">Using SystemTap with PHP DTrace Static Probes</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > APCu',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 43,
                'content' => <<<'HTML'
<p class="para">APCu is an in-memory key-value store for PHP. Keys are of type&nbsp;<span class="type">string</span>&nbsp;and values can be any PHP variables. APCu only supports userland caching of variables.</p>
<p class="para">APCu is APC stripped of opcode caching.</p>
<p class="para">The first APCu codebase was versioned 4.0.0, it was forked from the head of the APC master branch at the time. PHP 7 support is available as of APCu 5.0.0. PHP 8 support is available as of APCu 5.1.19.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/intro.apcu.php" target="_blank">Introduction</a></li>
    <li><a href="https://www.php.net/manual/en/apcu.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/apcu.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.apcu.php" target="_blank">APCu Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.apcuiterator.php" target="_blank">APCUIterator</a>&nbsp;— The APCUIterator class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > Componere',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 44,
                'content' => <<<'HTML'
<p class="para">Componere&nbsp;<sub class="subscript">(latin, English: compose)</sub>&nbsp;targets production environments and provides an API for composition of classes, monkey patching, and casting.</p>
<p class="formalpara">&nbsp;</p>
<h5 class="title">Composition:</h5>
<p class="para"><span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.componere-definition.php" target="_blank">Componere\Definition</a></span>&nbsp;is used to define (or redefine) a class at runtime; The class can then be registered, and in the case of redefinition it replaces the original class for as long as the&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.componere-definition.php" target="_blank">Componere\Definition</a></span>&nbsp;exists.</p>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span>&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/componere-definition.construct.php" target="_blank">Componere\Definition::__construct</a></span>(<span class="methodparam"><span class="type">string</span>&nbsp;<code class="parameter">$name</code></span>)</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span>&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/componere-definition.construct.php" target="_blank">Componere\Definition::__construct</a></span>(<span class="methodparam"><span class="type">string</span>&nbsp;<code class="parameter">$name</code></span>,&nbsp;<span class="methodparam"><span class="type">string</span>&nbsp;<code class="parameter">$parent</code></span>)</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span>&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/componere-definition.construct.php" target="_blank">Componere\Definition::__construct</a></span>(<span class="methodparam"><span class="type">string</span>&nbsp;<code class="parameter">$name</code></span>,&nbsp;<span class="methodparam"><span class="type">array</span>&nbsp;<code class="parameter">$interfaces</code></span>)</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span>&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/componere-definition.construct.php" target="_blank">Componere\Definition::__construct</a></span>(<span class="methodparam"><span class="type">string</span>&nbsp;<code class="parameter">$name</code></span>,&nbsp;<span class="methodparam"><span class="type">string</span>&nbsp;<code class="parameter">$parent</code></span>,&nbsp;<span class="methodparam"><span class="type">array</span>&nbsp;<code class="parameter">$interfaces</code></span>)</div>
<p class="formalpara">&nbsp;</p>
<h5 class="title">Patching:</h5>
<p class="para"><span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.componere-patch.php" target="_blank">Componere\Patch</a></span>&nbsp;is used to change the class of a specific instance of an object at runtime; Upon application the patch will remain applied for as long as the&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.componere-patch.php" target="_blank">Componere\Patch</a></span>&nbsp;exists, and can be reverted explicitly.</p>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span>&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/componere-patch.construct.php" target="">Componere\Patch::__construct</a></span>(<span class="methodparam"><span class="type">object</span>&nbsp;<code class="parameter">$instance</code></span>)</div>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span>&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/componere-patch.construct.php" target="_blank">Componere\Patch::__construct</a></span>(<span class="methodparam"><span class="type">object</span>&nbsp;<code class="parameter">$instance</code></span>,&nbsp;<span class="methodparam"><span class="type">array</span>&nbsp;<code class="parameter">$interfaces</code></span>)</div>
<p class="formalpara">&nbsp;</p>
<h5 class="title">Casting:</h5>
<p class="para"><span class="classname"><strong class="classname">Componere\</strong></span>&nbsp;casting functions can cast among user defined compatible types; Where compatible means&nbsp;<span class="classname"><strong class="classname">Type</strong></span>&nbsp;is sub or super to the type of&nbsp;<code class="parameter">object</code>.</p>
<div class="methodsynopsis dc-description"><span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/componere.cast.php" target="_blank">Componere\cast</a></span>(<span class="methodparam"><span class="type"><span class="type Type">Type</span></span>&nbsp;<code class="parameter">$type</code></span>,&nbsp;<span class="methodparam"><code class="parameter">$object</code></span>):&nbsp;<span class="type"><span class="type Type">Type</span></span></div>
<div class="methodsynopsis dc-description"><span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/componere.cast_by_ref.php" target="_blank">Componere\cast_by_ref</a></span>(<span class="methodparam"><span class="type"><span class="type Type">Type</span></span>&nbsp;<code class="parameter">$type</code></span>,&nbsp;<span class="methodparam"><code class="parameter">$object</code></span>):&nbsp;<span class="type"><span class="type Type">Type</span></span></div>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > Error Handling',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 45,
                'content' => <<<'HTML'
<p class="para">These are functions dealing with error handling and logging. They allow you to define your own error handling rules, as well as modify the way the errors can be logged. This allows you to change and enhance error reporting to suit your needs.</p>
<p class="para">With the logging functions, you can send messages directly to other machines, to an email (or email to pager gateway!), to system logs, etc., so you can selectively log and monitor the most important parts of your applications and websites.</p>
<p class="para">The error reporting functions allow you to customize what level and kind of error feedback is given, ranging from simple notices to customized functions returned during errors.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/errorfunc.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/errorfunc.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/errorfunc.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.errorfunc.php" target="_blank">Error Handling Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > FFI — Foreign Function Interface',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 46,
                'content' => <<<'HTML'
<p class="para">This extension allows the loading of shared libraries (<var class="filename">.DLL</var>&nbsp;or&nbsp;<var class="filename">.so</var>), calling of C functions and accessing of C data structures in pure PHP, without having to have deep knowledge of the Zend extension API, and without having to learn a third “intermediate” language. The public API is implemented as a single class&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.ffi.php" target="_blank">FFI</a></span>&nbsp;with several static methods (some of them may be called dynamically), and overloaded object methods, which perform the actual interaction with C data.</p>
<div class="alert alert-warning"><strong class="caution">Caution</strong>
    <p class="para">FFI is dangerous, since it allows to interface with the system on a very low level. The FFI extension should only be used by developers having a working knowledge of C and the used C APIs. To minimize the risk, the FFI API usage may be restricted with the&nbsp;<a class="link" href="https://www.php.net/manual/en/ffi.configuration.php#ini.ffi.enable">ffi.enable</a>&nbsp;<var class="filename">php.ini</var>&nbsp;directive.</p>
</div>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">The FFI extension does not render the classic PHP extension API obsolete; it is merely provided for ad-hoc interfacing with C functions and data structures.</p>
</blockquote>
<div class="alert alert-info"><strong class="tip">Tip</strong>
    <p class="para">Currently, accessing FFI data structures is significantly (about 2 times) slower than accessing native PHP arrays and objects. Therefore, it makes no sense to use the FFI extension for speed; however, it may make sense to use it to reduce memory consumption.</p>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ffi.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ffi.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ffi.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.ffi.php" target="_blank">FFI</a>&nbsp;— Main interface to C code and data</li>
    <li><a href="https://www.php.net/manual/en/class.ffi-cdata.php" target="_blank">FFI\CData</a>&nbsp;— C Data Handles</li>
    <li><a href="https://www.php.net/manual/en/class.ffi-ctype.php" target="_blank">FFI\CType</a>&nbsp;— C Type Handles</li>
    <li><a href="https://www.php.net/manual/en/class.ffi-exception.php" target="_blank">FFI\Exception</a>&nbsp;— FFI Exceptions</li>
    <li><a href="https://www.php.net/manual/en/class.ffi-parserexception.php" target="_blank">FFI\ParserException</a>&nbsp;— FFI Parser Exceptions</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > OPcache',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 47,
                'content' => <<<'HTML'
<p class="para">OPcache improves PHP performance by storing precompiled script bytecode in shared memory, thereby removing the need for PHP to load and parse scripts on each request.</p>
<p class="para">This extension is bundled with PHP 5.5.0 and later, and is&nbsp;<a class="link external" href="https://pecl.php.net/package/ZendOpcache" target="_blank">»&nbsp;available in PECL</a>&nbsp;for PHP versions 5.2, 5.3 and 5.4.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/opcache.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/opcache.preloading.php" target="_blank">Preloading</a></li>
    <li><a href="https://www.php.net/manual/en/ref.opcache.php" target="_blank">OPcache Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > Output Control - Output Buffering Control',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 48,
                'content' => <<<'HTML'
<p>The Output Control functions allow you to control when output is sent from the script. This can be useful in several different situations, especially if you need to send headers to the browser after your script has begun outputting data. The Output Control functions do not affect headers sent using&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.header.php" target="_blank">header()</a></span>&nbsp;or&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.setcookie.php" target="_blank">setcookie()</a></span>, only functions such as&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.echo.php" target="_blank">echo</a></span>&nbsp;and data between blocks of PHP code.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/outcontrol.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/outcontrol.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/outcontrol.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.outcontrol.php" target="_blank">Output Control Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > PHP Options/Info',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 49,
                'content' => <<<'HTML'
<p>This functions enable you to get a lot of information about PHP itself, e.g. runtime configuration, loaded extensions, version and much more. You'll also find functions to set options for your running PHP. The probably best known function of PHP -&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.phpinfo.php" target="_blank">phpinfo()</a></span>&nbsp;- can be found here.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/info.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/info.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.info.php" target="_blank">PHP Options/Info Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > phpdbg - Interactive PHP Debugger',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 50,
                'content' => <<<'HTML'
<p class="para">Implemented as a SAPI module, phpdbg can exert complete control over the environment without impacting the functionality or performance of your code.</p>
<p class="para">phpdbg aims to be a lightweight, powerful, easy to use debugging platform for PHP. It offers the following features:</p>
<ul class="itemizedlist">
    <li class="listitem"><span class="simpara">Step-Through Debugging</span></li>
    <li class="listitem"><span class="simpara">Flexible Breakpoints (Class Method, Function, File:Line, Address, Opcode)</span></li>
    <li class="listitem"><span class="simpara">Easy Access to PHP with built-in eval()</span></li>
    <li class="listitem"><span class="simpara">Userland API</span></li>
    <li class="listitem"><span class="simpara">SAPI Agnostic - Easily Integrated</span></li>
    <li class="listitem"><span class="simpara">PHP Configuration File Support</span></li>
    <li class="listitem"><span class="simpara">JIT Super Globals - Set Your Own !!</span></li>
    <li class="listitem"><span class="simpara">Optional readline Support - Comfortable Terminal Operation</span></li>
    <li class="listitem"><span class="simpara">Easy Operation - See Help :)</span></li>
</ul>
<p class="para">&nbsp;</p>
<h5>Command line options</h5>
<table class="doctable table">
    <thead>
    <tr>
        <th>Option</th>
        <th>Example Argument</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody class="tbody">
    <tr>
        <td>-c</td>
        <td>-c/my/php.ini</td>
        <td>Set php.ini file to load</td>
    </tr>
    <tr>
        <td>-d</td>
        <td>-dmemory_limit=4G</td>
        <td>Set a php.ini directive</td>
    </tr>
    <tr>
        <td>-n</td>
        <td class="empty">&nbsp;</td>
        <td>Disable default php.ini</td>
    </tr>
    <tr>
        <td>-q</td>
        <td class="empty">&nbsp;</td>
        <td>Suppress welcome banner</td>
    </tr>
    <tr>
        <td>-v</td>
        <td class="empty">&nbsp;</td>
        <td>Enable oplog output</td>
    </tr>
    <tr>
        <td>-b</td>
        <td class="empty">&nbsp;</td>
        <td>Disable color</td>
    </tr>
    <tr>
        <td>-i</td>
        <td>-imy.init</td>
        <td>Set .phpdbginit file</td>
    </tr>
    <tr>
        <td>-I</td>
        <td class="empty">&nbsp;</td>
        <td>Ignore default .phpdbginit</td>
    </tr>
    <tr>
        <td>-O</td>
        <td>-Omy.oplog</td>
        <td>Set oplog output file</td>
    </tr>
    <tr>
        <td>-r</td>
        <td class="empty">&nbsp;</td>
        <td>Run execution context</td>
    </tr>
    <tr>
        <td>-rr</td>
        <td class="empty">&nbsp;</td>
        <td>Run execution context and quit after execution (not respecting breakpoints)</td>
    </tr>
    <tr>
        <td>-e</td>
        <td class="empty">&nbsp;</td>
        <td>Generate extended information for debugger/profiler</td>
    </tr>
    <tr>
        <td>-E</td>
        <td class="empty">&nbsp;</td>
        <td>Enable step through eval, careful!</td>
    </tr>
    <tr>
        <td>-s</td>
        <td>-s=, -s=foo</td>
        <td>Read code to execute from stdin with an optional delimiter</td>
    </tr>
    <tr>
        <td>-S</td>
        <td>-Scli</td>
        <td>Override SAPI name, careful!</td>
    </tr>
    <tr>
        <td class="empty">&nbsp;</td>
        <td class="empty">&nbsp;</td>
        <td>
            <p class="para">&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td>-l</td>
        <td>-l4000</td>
        <td>Setup remote console ports</td>
    </tr>
    <tr>
        <td>-a</td>
        <td>-a192.168.0.3</td>
        <td>Setup remote console bind address</td>
    </tr>
    <tr>
        <td>-x</td>
        <td class="empty">&nbsp;</td>
        <td>Enable xml output (instead of normal text output)</td>
    </tr>
    <tr>
        <td>-p</td>
        <td>-p, -p=func, -p*</td>
        <td>Output opcodes and quit</td>
    </tr>
    <tr>
        <td>-h</td>
        <td class="empty">&nbsp;</td>
        <td>Print the help overview</td>
    </tr>
    <tr>
        <td>-V</td>
        <td class="empty">&nbsp;</td>
        <td>Print version number</td>
    </tr>
    <tr>
        <td>--</td>
        <td>-- arg1 arg2</td>
        <td>Use to delimit phpdbg arguments and php $argv; append any $argv argument after it</td>
    </tr>
    </tbody>
</table>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/phpdbg.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/phpdbg.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.phpdbg.php" target="_blank">phpdbg Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > runkit7',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 51,
                'content' => <<<'HTML'
<p class="simpara">The runkit7 extension provides means to modify constants, user-defined functions, and user-defined classes. It also provides for custom superglobal variables.</p>
<p class="simpara">This package is a fork of the&nbsp;<a class="link external" href="https://pecl.php.net/package/runkit" target="_blank">»&nbsp;runkit</a>&nbsp;package providing PHP 7 support.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/runkit7.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/runkit7.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.runkit7.php" target="_blank">runkit7 Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > uopz - User Operations for Zend',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 52,
                'content' => <<<'HTML'
<p class="para">The uopz - User Operations for Zend - extension exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM.</p>
<p class="para">uopz supports the following activities:</p>
<ul class="simplelist">
    <li class="member">Overloading some opcodes including ZEND_EXIT and ZEND_NEW</li>
    <li class="member">Backup and restore functions and methods</li>
    <li class="member">Renaming functions and methods</li>
    <li class="member">Copying of functions and methods</li>
    <li class="member">Deletion of functions and methods</li>
    <li class="member">Redefinition of global and class constants</li>
    <li class="member">Deletion of global and class constants</li>
    <li class="member">Runtime composition and modification of classes</li>
</ul>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">All of the activities supported are compatible with opcache</p>
</blockquote>
<div class="alert alert-warning"><strong class="caution">Caution</strong>
    <p class="simpara">PECL uopz 6.1.1 is not compatible with Xdebug &gt;= 2.9.4. Later uopz versions are not compatible with Xdebug &lt; 2.9.4.</p>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/uopz.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/uopz.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.uopz.php" target="_blank">Uopz Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > Xhprof - Hierarchical ',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 53,
                'content' => <<<'HTML'
<p class="para">XHProf is a light-weight hierarchical and instrumentation based profiler. During the data collection phase, it keeps track of call counts and inclusive metrics for arcs in the dynamic callgraph of a program. It computes exclusive metrics in the reporting/post processing phase, such as wall (elapsed) time, CPU time and memory usage. A functions profile can be broken down by callers or callees. XHProf handles recursive functions by detecting cycles in the callgraph at data collection time itself and avoiding the cycles by giving unique depth qualified names for the recursive invocations.</p>
<p class="para">XHProf includes a simple HTML based user interface (written in PHP). The browser based UI for viewing profiler results makes it easy to view results or to share results with peers. A callgraph image view is also supported.</p>
<p class="para">XHProf reports can often be helpful in understanding the structure of the code being executed. The hierarchical nature of the reports can be used to determine, for example, what chain of calls led to a particular function getting called.</p>
<p class="para">XHProf supports ability to compare two runs (a.k.a. "diff" reports) or aggregate data from multiple runs. Diff and aggregate reports, much like single run reports, offer "flat" as well as "hierarchical" views of the profile.</p>
<p class="para">Additional documentation can be found via the&nbsp;<a class="link external" href="http://web.archive.org/web/20110514095512/http://mirror.facebook.net/facebook/xhprof/doc.html" target="_blank">»&nbsp;facebook xhprof</a>&nbsp;website.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/xhprof.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/xhprof.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/xhprof.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.xhprof.php" target="_blank">Xhprof Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Affecting PHP\'s Behavior > Yac - Yet Another Cache',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 54,
                'content' => <<<'HTML'
<p>Yac (Yet Another cache), is a lock-free, shared memory user data cache, could be used to replace APC, local memcache.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/yac.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/yac.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.yac.php" target="_blank">Yac</a>&nbsp;— The Yac class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Authentication Service - Radius',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 55,
                'content' => <<<'HTML'
<p class="para">This package is based on the libradius (Remote Authentication Dial In User Service) of FreeBSD. It allows clients to perform authentication and accounting by means of network requests to remote servers.</p>
<p class="para">This PECL extension adds full support for Radius Authentication (<a class="link external" href="http://www.faqs.org/rfcs/rfc2865" target="_blank">»&nbsp;RFC 2865</a>) and Radius Accounting (<a class="link external" href="http://www.faqs.org/rfcs/rfc2866" target="_blank">»&nbsp;RFC 2866</a>). This package is available for Unix (tested on FreeBSD and Linux) and for Windows.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">An exact description for libradius can be found&nbsp;<a class="link external" href="http://www.freebsd.org/cgi/man.cgi?query=libradius" target="_blank">»&nbsp;here</a>. A detailed description of the configuration file can be found&nbsp;<a class="link external" href="http://www.freebsd.org/cgi/man.cgi?query=radius.conf" target="_blank">»&nbsp;here</a>.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/radius.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/radius.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/radius.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.radius.php" target="_blank">Radius Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Command Line Specific Extensions - Readline',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 56,
                'content' => <<<'HTML'
<p class="para">The readline functions implement an interface to the GNU Readline library. These are functions that provide editable command lines. An example being the way Bash allows you to use the arrow keys to insert characters or scroll through command history. Because of the interactive nature of this library, it will be of little use for writing Web applications, but may be useful when writing scripts used from a&nbsp;<a class="link" href="https://www.php.net/manual/en/features.commandline.php" target="_blank">command line</a>.</p>
<p class="para">As of PHP 7.1.0 this extension is supported on Windows.</p>
<div class="alert alert-warning"><strong class="caution">Caution</strong>
    <p class="para">The readline extension is not thread-safe! Thus, the usage of it with any true thread safe SAPI (like Apache mod_winnt) is strongly discouraged.</p>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/readline.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/readline.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.readline.php" target="_blank">Readline Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Compression and Archive Extensions - Bzip2',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 57,
                'content' => <<<'HTML'
<p>The bzip2 functions are used to transparently read and write bzip2 (.bz2) compressed files.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/bzip2.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/bzip2.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/bzip2.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.bzip2.php" target="_blank">Bzip2 Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Compression and Archive Extensions - LZF',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 58,
                'content' => <<<'HTML'
<p>LZF is a very fast compression algorithm, ideal for saving space with only slight speed cost. It can be optimized for speed or space at the time of compilation. This extension is using&nbsp;<a class="link external" href="http://oldhome.schmorp.de/marc/liblzf.html" target="_blank">»&nbsp;liblzf</a>&nbsp;library by Marc Lehmann for its operations.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/lzf.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/lzf.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.lzf.php" target="_blank">LZF Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Compression and Archive Extensions - Phar',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 59,
                'content' => <<<'HTML'
<p class="para">The phar extension provides a way to put entire PHP applications into a single file called a "phar" (PHP Archive) for easy distribution and installation. In addition to providing this service, the phar extension also provides a file-format abstraction method for creating and manipulating tar and zip files through the&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.phardata.php" target="_blank">PharData</a></span>&nbsp;class, much as PDO provides a unified interface for accessing different databases. Unlike PDO, which cannot convert between different databases, Phar also can convert between tar, zip and phar file formats with a single line of code. see&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/phar.converttoexecutable.php" target="_blank">Phar::convertToExecutable()</a></span>&nbsp;for one example.</p>
<p class="para">What is phar? Phar archives are best characterized as a convenient way to group several files into a single file. As such, a phar archive provides a way to distribute a complete PHP application in a single file and run it from that file without the need to extract it to disk. Additionally, phar archives can be executed by PHP as easily as any other file, both on the commandline and from a web server. Phar is kind of like a thumb drive for PHP applications.</p>

<a href="https://www.php.net/manual/en/intro.phar.php" target="_blank">
    <h5>Read more about Phar compression</h5>
</a>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/phar.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/phar.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/phar.using.php" target="_blank">Using Phar Archives</a></li>
    <li><a href="https://www.php.net/manual/en/phar.creating.php" target="_blank">Creating Phar Archives</a></li>
    <li><a href="https://www.php.net/manual/en/phar.fileformat.php" target="_blank">What makes a phar a phar and not a tar or a zip?</a></li>
    <li><a href="https://www.php.net/manual/en/class.phar.php" target="_blank">Phar</a>&nbsp;— The Phar class</li>
    <li><a href="https://www.php.net/manual/en/class.phardata.php" target="_blank">PharData</a>&nbsp;— The PharData class</li>
    <li><a href="https://www.php.net/manual/en/class.pharfileinfo.php" target="_blank">PharFileInfo</a>&nbsp;— The PharFileInfo class</li>
    <li><a href="https://www.php.net/manual/en/class.pharexception.php" target="_blank">PharException</a>&nbsp;— The PharException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Compression and Archive Extensions - Rar',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 60,
                'content' => <<<'HTML'
<p class="para">Rar is a powerful and effective archiver created by Eugene Roshal. This extension gives you possibility to read Rar archives but doesn't support writing Rar archives, because this is not supported by the UnRar library and is directly prohibited by its license.</p>
<p class="para">More information about Rar and UnRar can be found at&nbsp;<a class="link external" href="http://www.rarlabs.com/" target="_blank">»&nbsp;http://www.rarlabs.com/</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/rar.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/rar.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/rar.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.rar.php" target="_blank">Rar Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.rararchive.php" target="_blank">RarArchive</a>&nbsp;— The RarArchive class</li>
    <li><a href="https://www.php.net/manual/en/class.rarentry.php" target="_blank">RarEntry</a>&nbsp;— The RarEntry class</li>
    <li><a href="https://www.php.net/manual/en/class.rarexception.php" target="_blank">RarException</a>&nbsp;— The RarException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Compression and Archive Extensions - Zip',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 61,
                'content' => <<<'HTML'
<p>This extension enables you to transparently read or write ZIP compressed archives and the files inside them.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/zip.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/zip.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/zip.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.ziparchive.php" target="_blank">ZipArchive</a>&nbsp;— The ZipArchive class</li>
    <li><a href="https://www.php.net/manual/en/ref.zip.php" target="_blank">Zip Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Compression and Archive Extensions - Zlib',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 62,
                'content' => <<<'HTML'
<p class="para">This module enables you to transparently read and write gzip (.gz) compressed files, through versions of most of the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.filesystem.php" target="_blank">filesystem</a>&nbsp;functions which work with gzip-compressed files (and uncompressed files, too, but not with sockets).</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">PHP comes with a fopen-wrapper for&nbsp;<var class="filename">.gz</var>-files. More information is available in the section about&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.compression.php" target="_blank">zlib://</a>.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/zlib.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/zlib.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/zlib.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.zlib.php" target="_blank">Zlib Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.deflatecontext.php" target="_blank">DeflateContext</a>&nbsp;— The DeflateContext class</li>
    <li><a href="https://www.php.net/manual/en/class.inflatecontext.php" target="_blank">InflateContext</a>&nbsp;— The InflateContext class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Cryptography Extensions - CSPRNG',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 63,
                'content' => <<<'HTML'
<p class="para">The&nbsp;<a class="link external" href="https://en.wikipedia.org/wiki/Cryptographically_secure_pseudorandom_number_generator" target="_blank">»&nbsp;cryptographically secure pseudo-random number generator</a>&nbsp;(CSPRNG) API provides an easy and reliable way to generate crypto-strong random integers and bytes for use within cryptographic contexts.</p>
<p class="para">This exists as of PHP 7.0.0 but there is also a&nbsp;<a class="link external" href="https://github.com/paragonie/random_compat" target="_blank">»&nbsp;userland implementation</a>&nbsp;for PHP &gt;= 5.2.0.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/csprng.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/csprng.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.csprng.php" target="_blank">CSPRNG Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Cryptography Extensions - Hash - HASH Message Digest Framework',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 64,
                'content' => <<<'HTML'
<p>Message Digest (hash) engine. Allows direct or incremental processing of arbitrary length messages using a variety of hashing algorithms.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/hash.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/hash.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.hashcontext.php" target="_blank">HashContext</a>&nbsp;— The HashContext class</li>
    <li><a href="https://www.php.net/manual/en/ref.hash.php" target="_blank">Hash Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Cryptography Extensions - Mhash',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 65,
                'content' => <<<'HTML'
<p class="para">These functions are intended to work with&nbsp;<a class="link external" href="http://mhash.sourceforge.net/" target="_blank">»&nbsp;mhash</a>. Mhash can be used to create checksums, message digests, message authentication codes, and more.</p>
<p class="para">This is an interface to the mhash library. Mhash supports a wide variety of hash algorithms such as MD5, SHA1, GOST, and many others. For a complete list of supported hashes, refer to the&nbsp;<a class="link" href="https://www.php.net/manual/en/mhash.constants.php" target="_blank">constants page</a>. The general rule is that you can access the hash algorithm from PHP with&nbsp;<strong><code>MHASH_hashname</code></strong>. For example, to access TIGER you use the PHP constant&nbsp;<strong><code>MHASH_TIGER</code></strong>.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">This extension is obsoleted by&nbsp;<a class="link" href="https://www.php.net/manual/en/book.hash.php" target="_blank">Hash</a>.</p>
</blockquote>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">As of PHP 7.0.0 the Mhash extension has been fully integrated into the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.hash.php" target="_blank">Hash</a>&nbsp;extension. Therefore, it is no longer possible to detect Mhash support with&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.extension-loaded.php" target="_blank">extension_loaded()</a></span>; use&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.function-exists.php" target="_blank">function_exists()</a></span>&nbsp;instead. Furthermore, Mhash is no longer reported by&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.get-loaded-extensions.php" target="_blank">get_loaded_extensions()</a></span>&nbsp;and related features.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/mhash.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/mhash.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/mhash.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.mhash.php" target="_blank">Mhash Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Cryptography Extensions - OpenSSL',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 66,
                'content' => <<<'HTML'
<p class="para">This extension binds functions of&nbsp;<a class="link external" href="http://www.openssl.org/" target="_blank">»&nbsp;OpenSSL</a>&nbsp;library for symmetric and asymmetric encryption and decryption, PBKDF2, PKCS7, PKCS12, X509 and other crypto operations. In addition to that it provides implementation of TLS streams.</p>
<p class="para">OpenSSL offers many features that this module currently doesn't support. Some of these may be added in the future.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/openssl.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/openssl.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/openssl.certparams.php" target="_blank">Key/Certificate parameters</a></li>
    <li><a href="https://www.php.net/manual/en/openssl.cert.verification.php" target="_blank">Certificate Verification</a></li>
    <li><a href="https://www.php.net/manual/en/ref.openssl.php" target="_blank">OpenSSL Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.opensslcertificate.php" target="_blank">OpenSSLCertificate</a>&nbsp;— The OpenSSLCertificate class</li>
    <li><a href="https://www.php.net/manual/en/class.opensslcertificatesigningrequest.php" target="_blank">OpenSSLCertificateSigningRequest</a>&nbsp;— The OpenSSLCertificateSigningRequest class</li>
    <li><a href="https://www.php.net/manual/en/class.opensslasymmetrickey.php" target="_blank">OpenSSLAsymmetricKey</a>&nbsp;— The OpenSSLAsymmetricKey class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Cryptography Extensions - Password Hashing',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 67,
                'content' => <<<'HTML'
<p>The password hashing API provides an easy to use wrapper around&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.crypt.php" target="_blank">crypt()</a></span>&nbsp;and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/password.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/password.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.password.php" target="_blank">Password Hashing Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Cryptography Extensions - Sodium',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 68,
                'content' => <<<'HTML'
<p>Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more. Its goal is to provide all of the core operations needed to build higher-level cryptographic tools.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/sodium.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/sodium.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.sodium.php" target="_blank">Sodium Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.sodiumexception.php" target="_blank">SodiumException</a>&nbsp;— The SodiumException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Abstraction Layers - Database (dbm-style) Abstraction Layer',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 69,
                'content' => <<<'HTML'
<p class="para">These functions build the foundation for accessing Berkeley DB style databases.</p>
<p class="para">This is a general abstraction layer for several file-based databases. As such, functionality is limited to a common subset of features supported by modern databases such as&nbsp;<a class="link external" href="https://www.oracle.com/database/berkeley-db/db.html" target="_blank">»&nbsp;Oracle Berkeley DB</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_book">
    <li><a href="https://www.php.net/manual/en/dba.setup.php" target="_blank">Installing/Configuring</a>
        <ul class="chunklist chunklist_book chunklist_children">
            <li><a href="https://www.php.net/manual/en/dba.requirements.php" target="_blank">Requirements</a></li>
            <li><a href="https://www.php.net/manual/en/dba.installation.php" target="_blank">Installation</a></li>
            <li><a href="https://www.php.net/manual/en/dba.configuration.php" target="_blank">Runtime Configuration</a></li>
            <li><a href="https://www.php.net/manual/en/dba.resources.php" target="_blank">Resource Types</a></li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/dba.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/dba.examples.php" target="_blank">Examples</a>
        <ul class="chunklist chunklist_book chunklist_children">
            <li><a href="https://www.php.net/manual/en/dba.example.php" target="_blank">Basic usage</a></li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/ref.dba.php" target="_blank">DBA Functions</a>
        <ul class="chunklist chunklist_book chunklist_children">
            <li><a href="https://www.php.net/manual/en/function.dba-close.php" target="_blank">dba_close</a>&nbsp;— Close a DBA database</li>
            <li><a href="https://www.php.net/manual/en/function.dba-delete.php" target="_blank">dba_delete</a>&nbsp;— Delete DBA entry specified by key</li>
            <li><a href="https://www.php.net/manual/en/function.dba-exists.php" target="_blank">dba_exists</a>&nbsp;— Check whether key exists</li>
            <li><a href="https://www.php.net/manual/en/function.dba-fetch.php" target="_blank">dba_fetch</a>&nbsp;— Fetch data specified by key</li>
            <li><a href="https://www.php.net/manual/en/function.dba-firstkey.php" target="_blank">dba_firstkey</a>&nbsp;— Fetch first key</li>
            <li><a href="https://www.php.net/manual/en/function.dba-handlers.php" target="_blank">dba_handlers</a>&nbsp;— List all the handlers available</li>
            <li><a href="https://www.php.net/manual/en/function.dba-insert.php" target="_blank">dba_insert</a>&nbsp;— Insert entry</li>
            <li><a href="https://www.php.net/manual/en/function.dba-key-split.php" target="_blank">dba_key_split</a>&nbsp;— Splits a key in string representation into array representation</li>
            <li><a href="https://www.php.net/manual/en/function.dba-list.php" target="_blank">dba_list</a>&nbsp;— List all open database files</li>
            <li><a href="https://www.php.net/manual/en/function.dba-nextkey.php" target="_blank">dba_nextkey</a>&nbsp;— Fetch next key</li>
            <li><a href="https://www.php.net/manual/en/function.dba-open.php" target="_blank">dba_open</a>&nbsp;— Open database</li>
            <li><a href="https://www.php.net/manual/en/function.dba-optimize.php" target="_blank">dba_optimize</a>&nbsp;— Optimize database</li>
            <li><a href="https://www.php.net/manual/en/function.dba-popen.php" target="_blank">dba_popen</a>&nbsp;— Open database persistently</li>
            <li><a href="https://www.php.net/manual/en/function.dba-replace.php" target="_blank">dba_replace</a>&nbsp;— Replace or insert entry</li>
            <li><a href="https://www.php.net/manual/en/function.dba-sync.php" target="_blank">dba_sync</a>&nbsp;— Synchronize database</li>
        </ul>
    </li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Abstraction Layers - ODBC (Unified)',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 70,
                'content' => <<<'HTML'
<p class="para">In addition to normal ODBC support, the Unified ODBC functions in PHP allow you to access several databases that have borrowed the semantics of the ODBC API to implement their own API. Instead of maintaining multiple database drivers that were all nearly identical, these drivers have been unified into a single set of ODBC functions.</p>
<p class="para">The following databases are supported by the Unified ODBC functions:&nbsp;<a class="link external" href="http://www.adabas.com/" target="_blank">»&nbsp;Adabas D</a>,&nbsp;<a class="link external" href="http://www-306.ibm.com/software/data/db2/" target="_blank">»&nbsp;IBM DB2</a>,&nbsp;<a class="link external" href="http://www.iodbc.org/" target="_blank">»&nbsp;iODBC</a>,&nbsp;<a class="link external" href="http://www.solidtech.com/" target="_blank">»&nbsp;Solid</a>, and&nbsp;<a class="link external" href="http://www.sybase.com/" target="_blank">»&nbsp;Sybase SQL Anywhere</a>.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">With the exception of iODBC, there is no ODBC involved when connecting to the above databases. The functions that you use to speak natively to them just happen to share the same names and syntax as the ODBC functions. However, building PHP with iODBC support enables you to use any ODBC-compliant drivers with your PHP applications. More information on iODBC, is available at&nbsp;<a class="link external" href="http://www.iodbc.org/" target="_blank">»&nbsp;www.iodbc.org</a>&nbsp;with the alternative unixODBC available at&nbsp;<a class="link external" href="http://www.unixodbc.org/" target="_blank">»&nbsp;www.unixodbc.org</a>.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_book">
    <li><a href="https://www.php.net/manual/en/uodbc.setup.php" target="_blank">Installing/Configuring</a>
        <ul class="chunklist chunklist_book chunklist_children">
            <li><a href="https://www.php.net/manual/en/uodbc.requirements.php" target="_blank">Requirements</a></li>
            <li><a href="https://www.php.net/manual/en/odbc.installation.php" target="_blank">Installation</a></li>
            <li><a href="https://www.php.net/manual/en/odbc.configuration.php" target="_blank">Runtime Configuration</a></li>
            <li><a href="https://www.php.net/manual/en/uodbc.resources.php" target="_blank">Resource Types</a></li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/uodbc.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.uodbc.php" target="_blank">ODBC Functions</a>
        <ul class="chunklist chunklist_book chunklist_children">
            <li><a href="https://www.php.net/manual/en/function.odbc-autocommit.php" target="_blank">odbc_autocommit</a>&nbsp;— Toggle autocommit behaviour</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-binmode.php" target="_blank">odbc_binmode</a>&nbsp;— Handling of binary column data</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-close-all.php" target="_blank">odbc_close_all</a>&nbsp;— Close all ODBC connections</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-close.php" target="_blank">odbc_close</a>&nbsp;— Close an ODBC connection</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-columnprivileges.php" target="_blank">odbc_columnprivileges</a>&nbsp;— Lists columns and associated privileges for the given table</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-columns.php" target="_blank">odbc_columns</a>&nbsp;— Lists the column names in specified tables</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-commit.php" target="_blank">odbc_commit</a>&nbsp;— Commit an ODBC transaction</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-connect.php" target="_blank">odbc_connect</a>&nbsp;— Connect to a datasource</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-cursor.php" target="_blank">odbc_cursor</a>&nbsp;— Get cursorname</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-data-source.php" target="_blank">odbc_data_source</a>&nbsp;— Returns information about available DSNs</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-do.php" target="_blank">odbc_do</a>&nbsp;— Alias of odbc_exec</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-error.php" target="_blank">odbc_error</a>&nbsp;— Get the last error code</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-errormsg.php" target="_blank">odbc_errormsg</a>&nbsp;— Get the last error message</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-exec.php" target="_blank">odbc_exec</a>&nbsp;— Directly execute an SQL statement</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-execute.php" target="_blank">odbc_execute</a>&nbsp;— Execute a prepared statement</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-fetch-array.php" target="_blank">odbc_fetch_array</a>&nbsp;— Fetch a result row as an associative array</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-fetch-into.php" target="_blank">odbc_fetch_into</a>&nbsp;— Fetch one result row into array</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-fetch-object.php" target="_blank">odbc_fetch_object</a>&nbsp;— Fetch a result row as an object</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-fetch-row.php" target="_blank">odbc_fetch_row</a>&nbsp;— Fetch a row</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-field-len.php" target="_blank">odbc_field_len</a>&nbsp;— Get the length (precision) of a field</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-field-name.php" target="_blank">odbc_field_name</a>&nbsp;— Get the columnname</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-field-num.php" target="_blank">odbc_field_num</a>&nbsp;— Return column number</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-field-precision.php" target="_blank">odbc_field_precision</a>&nbsp;— Alias of odbc_field_len</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-field-scale.php" target="_blank">odbc_field_scale</a>&nbsp;— Get the scale of a field</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-field-type.php" target="_blank">odbc_field_type</a>&nbsp;— Datatype of a field</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-foreignkeys.php" target="_blank">odbc_foreignkeys</a>&nbsp;— Retrieves a list of foreign keys</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-free-result.php" target="_blank">odbc_free_result</a>&nbsp;— Free resources associated with a result</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-gettypeinfo.php" target="_blank">odbc_gettypeinfo</a>&nbsp;— Retrieves information about data types supported by the data source</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-longreadlen.php" target="_blank">odbc_longreadlen</a>&nbsp;— Handling of LONG columns</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-next-result.php" target="_blank">odbc_next_result</a>&nbsp;— Checks if multiple results are available</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-num-fields.php" target="_blank">odbc_num_fields</a>&nbsp;— Number of columns in a result</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-num-rows.php" target="_blank">odbc_num_rows</a>&nbsp;— Number of rows in a result</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-pconnect.php" target="_blank">odbc_pconnect</a>&nbsp;— Open a persistent database connection</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-prepare.php" target="_blank">odbc_prepare</a>&nbsp;— Prepares a statement for execution</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-primarykeys.php" target="_blank">odbc_primarykeys</a>&nbsp;— Gets the primary keys for a table</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-procedurecolumns.php" target="_blank">odbc_procedurecolumns</a>&nbsp;— Retrieve information about parameters to procedures</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-procedures.php" target="_blank">odbc_procedures</a>&nbsp;— Get the list of procedures stored in a specific data source</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-result-all.php" target="_blank">odbc_result_all</a>&nbsp;— Print result as HTML table</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-result.php" target="_blank">odbc_result</a>&nbsp;— Get result data</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-rollback.php" target="_blank">odbc_rollback</a>&nbsp;— Rollback a transaction</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-setoption.php" target="_blank">odbc_setoption</a>&nbsp;— Adjust ODBC settings</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-specialcolumns.php" target="_blank">odbc_specialcolumns</a>&nbsp;— Retrieves special columns</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-statistics.php" target="_blank">odbc_statistics</a>&nbsp;— Retrieve statistics about a table</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-tableprivileges.php" target="_blank">odbc_tableprivileges</a>&nbsp;— Lists tables and the privileges associated with each table</li>
            <li><a href="https://www.php.net/manual/en/function.odbc-tables.php" target="_blank">odbc_tables</a>&nbsp;— Get the list of table names stored in a specific data source</li>
        </ul>
    </li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Abstraction Layers - PHP Data Objects (PDO)',
                'topic_id' => $topics['function-reference']->id,
                'lesson_order' => 71,
                'content' => <<<'HTML'
<p class="para">The&nbsp;<code class="literal">PHP Data Objects</code>&nbsp;(<abbr>PDO</abbr>) extension defines a lightweight, consistent interface for accessing databases in PHP. Each database driver that implements the PDO interface can expose database-specific features as regular extension functions. Note that you cannot perform any database functions using the PDO extension by itself; you must use a&nbsp;<a class="link" href="https://www.php.net/manual/en/pdo.drivers.php" target="_blank">database-specific PDO driver</a>&nbsp;to access a database server.</p>
<p class="para">PDO provides a&nbsp;<em class="emphasis">data-access</em>&nbsp;abstraction layer, which means that, regardless of which database you're using, you use the same functions to issue queries and fetch data. PDO does&nbsp;<em class="emphasis">not</em>&nbsp;provide a&nbsp;<em class="emphasis">database</em>&nbsp;abstraction; it doesn't rewrite SQL or emulate missing features. You should use a full-blown abstraction layer if you need that facility.</p>
<p class="para">PDO ships with PHP.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_book">
    <li><a href="https://www.php.net/manual/en/pdo.setup.php" target="_blank">Installing/Configuring</a>
        <ul class="chunklist chunklist_book chunklist_children">
            <li><a href="https://www.php.net/manual/en/pdo.requirements.php" target="_blank">Requirements</a></li>
            <li><a href="https://www.php.net/manual/en/pdo.installation.php" target="_blank">Installation</a></li>
            <li><a href="https://www.php.net/manual/en/pdo.configuration.php" target="_blank">Runtime Configuration</a></li>
            <li><a href="https://www.php.net/manual/en/pdo.resources.php" target="_blank">Resource Types</a></li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/pdo.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/pdo.connections.php" target="_blank">Connections and Connection management</a></li>
    <li><a href="https://www.php.net/manual/en/pdo.transactions.php" target="_blank">Transactions and auto-commit</a></li>
    <li><a href="https://www.php.net/manual/en/pdo.prepared-statements.php" target="_blank">Prepared statements and stored procedures</a></li>
    <li><a href="https://www.php.net/manual/en/pdo.error-handling.php" target="_blank">Errors and error handling</a></li>
    <li><a href="https://www.php.net/manual/en/pdo.lobs.php" target="_blank">Large Objects (LOBs)</a></li>
    <li><a href="https://www.php.net/manual/en/class.pdo.php" target="_blank">PDO</a>&nbsp;— The PDO class
        <ul class="chunklist chunklist_book chunklist_children">
            <li><a href="https://www.php.net/manual/en/pdo.begintransaction.php" target="_blank">PDO::beginTransaction</a>&nbsp;— Initiates a transaction</li>
            <li><a href="https://www.php.net/manual/en/pdo.commit.php" target="_blank">PDO::commit</a>&nbsp;— Commits a transaction</li>
            <li><a href="https://www.php.net/manual/en/pdo.construct.php" target="_blank">PDO::__construct</a>&nbsp;— Creates a PDO instance representing a connection to a database</li>
            <li><a href="https://www.php.net/manual/en/pdo.errorcode.php" target="_blank">PDO::errorCode</a>&nbsp;— Fetch the SQLSTATE associated with the last operation on the database handle</li>
            <li><a href="https://www.php.net/manual/en/pdo.errorinfo.php" target="_blank">PDO::errorInfo</a>&nbsp;— Fetch extended error information associated with the last operation on the database handle</li>
            <li><a href="https://www.php.net/manual/en/pdo.exec.php" target="_blank">PDO::exec</a>&nbsp;— Execute an SQL statement and return the number of affected rows</li>
            <li><a href="https://www.php.net/manual/en/pdo.getattribute.php" target="_blank">PDO::getAttribute</a>&nbsp;— Retrieve a database connection attribute</li>
            <li><a href="https://www.php.net/manual/en/pdo.getavailabledrivers.php" target="_blank">PDO::getAvailableDrivers</a>&nbsp;— Return an array of available PDO drivers</li>
            <li><a href="https://www.php.net/manual/en/pdo.intransaction.php" target="_blank">PDO::inTransaction</a>&nbsp;— Checks if inside a transaction</li>
            <li><a href="https://www.php.net/manual/en/pdo.lastinsertid.php" target="_blank">PDO::lastInsertId</a>&nbsp;— Returns the ID of the last inserted row or sequence value</li>
            <li><a href="https://www.php.net/manual/en/pdo.prepare.php" target="_blank">PDO::prepare</a>&nbsp;— Prepares a statement for execution and returns a statement object</li>
            <li><a href="https://www.php.net/manual/en/pdo.query.php" target="_blank">PDO::query</a>&nbsp;— Prepares and executes an SQL statement without placeholders</li>
            <li><a href="https://www.php.net/manual/en/pdo.quote.php" target="_blank">PDO::quote</a>&nbsp;— Quotes a string for use in a query</li>
            <li><a href="https://www.php.net/manual/en/pdo.rollback.php" target="_blank">PDO::rollBack</a>&nbsp;— Rolls back a transaction</li>
            <li><a href="https://www.php.net/manual/en/pdo.setattribute.php" target="_blank">PDO::setAttribute</a>&nbsp;— Set an attribute</li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/class.pdostatement.php" target="_blank">PDOStatement</a>&nbsp;— The PDOStatement class
        <ul class="chunklist chunklist_book chunklist_children">
            <li><a href="https://www.php.net/manual/en/pdostatement.bindcolumn.php" target="_blank">PDOStatement::bindColumn</a>&nbsp;— Bind a column to a PHP variable</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.bindparam.php" target="_blank">PDOStatement::bindParam</a>&nbsp;— Binds a parameter to the specified variable name</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.bindvalue.php" target="_blank">PDOStatement::bindValue</a>&nbsp;— Binds a value to a parameter</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.closecursor.php" target="_blank">PDOStatement::closeCursor</a>&nbsp;— Closes the cursor, enabling the statement to be executed again</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.columncount.php" target="_blank">PDOStatement::columnCount</a>&nbsp;— Returns the number of columns in the result set</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.debugdumpparams.php" target="_blank">PDOStatement::debugDumpParams</a>&nbsp;— Dump an SQL prepared command</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.errorcode.php" target="_blank">PDOStatement::errorCode</a>&nbsp;— Fetch the SQLSTATE associated with the last operation on the statement handle</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.errorinfo.php" target="_blank">PDOStatement::errorInfo</a>&nbsp;— Fetch extended error information associated with the last operation on the statement handle</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.execute.php" target="_blank">PDOStatement::execute</a>&nbsp;— Executes a prepared statement</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.fetch.php" target="_blank">PDOStatement::fetch</a>&nbsp;— Fetches the next row from a result set</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.fetchall.php" target="_blank">PDOStatement::fetchAll</a>&nbsp;— Fetches the remaining rows from a result set</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.fetchcolumn.php" target="_blank">PDOStatement::fetchColumn</a>&nbsp;— Returns a single column from the next row of a result set</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.fetchobject.php" target="_blank">PDOStatement::fetchObject</a>&nbsp;— Fetches the next row and returns it as an object</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.getattribute.php" target="_blank">PDOStatement::getAttribute</a>&nbsp;— Retrieve a statement attribute</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.getcolumnmeta.php" target="_blank">PDOStatement::getColumnMeta</a>&nbsp;— Returns metadata for a column in a result set</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.getiterator.php" target="_blank">PDOStatement::getIterator</a>&nbsp;— Gets result set iterator</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.nextrowset.php" target="_blank">PDOStatement::nextRowset</a>&nbsp;— Advances to the next rowset in a multi-rowset statement handle</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.rowcount.php" target="_blank">PDOStatement::rowCount</a>&nbsp;— Returns the number of rows affected by the last SQL statement</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.setattribute.php" target="_blank">PDOStatement::setAttribute</a>&nbsp;— Set a statement attribute</li>
            <li><a href="https://www.php.net/manual/en/pdostatement.setfetchmode.php" target="_blank">PDOStatement::setFetchMode</a>&nbsp;— Set the default fetch mode for this statement</li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/class.pdoexception.php" target="_blank">PDOException</a>&nbsp;— The PDOException class</li>
    <li><a href="https://www.php.net/manual/en/pdo.drivers.php" target="_blank">PDO Drivers</a>
        <ul class="chunklist chunklist_book chunklist_children">
            <li><a href="https://www.php.net/manual/en/ref.pdo-cubrid.php" target="_blank">CUBRID (PDO)</a>&nbsp;— CUBRID Functions (PDO_CUBRID)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-dblib.php" target="_blank">MS SQL Server (PDO)</a>&nbsp;— Microsoft SQL Server and Sybase Functions (PDO_DBLIB)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-firebird.php" target="_blank">Firebird (PDO)</a>&nbsp;— Firebird Functions (PDO_FIREBIRD)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-ibm.php" target="_blank">IBM (PDO)</a>&nbsp;— IBM Functions (PDO_IBM)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-informix.php" target="_blank">Informix (PDO)</a>&nbsp;— Informix Functions (PDO_INFORMIX)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-mysql.php" target="_blank">MySQL (PDO)</a>&nbsp;— MySQL Functions (PDO_MYSQL)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-sqlsrv.php" target="_blank">MS SQL Server (PDO)</a>&nbsp;— Microsoft SQL Server Functions (PDO_SQLSRV)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-oci.php" target="_blank">Oracle (PDO)</a>&nbsp;— Oracle Functions (PDO_OCI)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-odbc.php" target="_blank">ODBC and DB2 (PDO)</a>&nbsp;— ODBC and DB2 Functions (PDO_ODBC)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-pgsql.php" target="_blank">PostgreSQL (PDO)</a>&nbsp;— PostgreSQL Functions (PDO_PGSQL)</li>
            <li><a href="https://www.php.net/manual/en/ref.pdo-sqlite.php" target="_blank">SQLite (PDO)</a>&nbsp;— SQLite Functions (PDO_SQLITE)</li>
        </ul>
    </li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Vendor Specified Database Extensions - CUBRID',
                'lesson_order' => 72,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">These functions allow you to access CUBRID database servers. More information about CUBRID can be found at&nbsp;<a class="link external" href="http://www.cubrid.org/" target="_blank">»&nbsp;CUBRID</a>.</p>
<p class="para">Documentation for CUBRID can be found at&nbsp;<a class="link external" href="http://www.cubrid.org/documentation/" target="_blank">»&nbsp;CUBRID Documentation</a>.</p>/

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/cubrid.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/cubrid.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/cubrid.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.cubrid.php" target="_blank">CUBRID Functions</a></li>
    <li><a href="https://www.php.net/manual/en/cubridmysql.cubrid.php" target="_blank">CUBRID MySQL Compatibility Functions</a></li>
    <li><a href="https://www.php.net/manual/en/oldaliases.cubrid.php" target="_blank">CUBRID Obsolete Aliases and Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Vendor Specified Database Extensions - IBM DB2 — IBM DB2, Cloudscape and Apache Derby',
                'lesson_order' => 73,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>These functions enable you to access IBM DB2 Universal Database, IBM Cloudscape, and Apache Derby databases using the DB2 Call Level Interface (DB2 CLI).</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ibm-db2.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ibm-db2.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.ibm-db2.php" target="_blank">IBM DB2 Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Vendor Specified Database Extensions - MongoDB Driver',
                'lesson_order' => 74,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<div class="info">
    <div class="abstract">
        <p class="simpara">This extension is developed atop the&nbsp;<a class="link external" href="https://github.com/mongodb/mongo-c-driver" target="_blank">»&nbsp;libmongoc</a>&nbsp;and&nbsp;<a class="link external" href="https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson" target="_blank">»&nbsp;libbson</a>&nbsp;libraries. It provides a minimal API for core driver functionality:&nbsp;<a class="link" href="https://www.php.net/manual/en/class.mongodb-driver-command.php" target="_blank">commands</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/class.mongodb-driver-query.php" target="_blank">queries</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/class.mongodb-driver-bulkwrite.php" target="_blank">writes</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/class.mongodb-driver-manager.php" target="_blank">connection management</a>, and&nbsp;<a class="link" href="https://www.php.net/manual/en/book.bson.php" target="_blank">BSON serialization</a>.</p>
        <p class="simpara">Userland PHP libraries that depend on this extension may provide higher level APIs, such as query builders, individual command helper methods, and GridFS. Application developers should consider using this extension in conjunction with the&nbsp;<a class="link external" href="https://github.com/mongodb/mongo-php-library" target="_blank">»&nbsp;MongoDB PHP library</a>, which implements the same higher level APIs found in MongoDB drivers for other languages. This separation of concerns allows the driver to focus on essential features for which an extension implementation is paramount for performance.</p>
    </div>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set">
    <li><a href="https://www.php.net/manual/en/mongodb.setup.php" target="_blank">Installing/Configuring</a>
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/mongodb.requirements.php" target="_blank">Requirements</a></li>
            <li><a href="https://www.php.net/manual/en/mongodb.installation.php" target="_blank">Installation</a></li>
            <li><a href="https://www.php.net/manual/en/mongodb.configuration.php" target="_blank">Runtime Configuration</a></li>
            <li><a href="https://www.php.net/manual/en/mongodb.constants.php" target="_blank">Predefined Constants</a></li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/mongodb.tutorial.php" target="_blank">Tutorials</a>
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/mongodb.tutorial.library.php" target="_blank">Using the PHP Library for MongoDB (PHPLIB)</a></li>
            <li><a href="https://www.php.net/manual/en/mongodb.tutorial.apm.php" target="_blank">Application Performance Monitoring (APM)</a></li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/mongodb.architecture.php" target="_blank">Driver Architecture and Internals</a>&nbsp;— Explains the driver architecture, and special features
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/mongodb.overview.php" target="_blank">Architecture</a>&nbsp;— Architecture Overview</li>
            <li><a href="https://www.php.net/manual/en/mongodb.connection-handling.php" target="_blank">Connections</a>&nbsp;— Connection handling and persistence</li>
            <li><a href="https://www.php.net/manual/en/mongodb.persistence.php" target="_blank">Persisting Data</a>&nbsp;— Serialization and deserialization of PHP variables into MongoDB</li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/mongodb.security.php" target="_blank">Security</a>
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/mongodb.security.request_injection.php" target="_blank">Request Injection Attacks</a></li>
            <li><a href="https://www.php.net/manual/en/mongodb.security.script_injection.php" target="_blank">Script Injection Attacks</a></li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/book.mongodb.php" target="_blank">MongoDB\Driver</a>&nbsp;— MongoDB driver classes
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-manager.php" target="_blank">MongoDB\Driver\Manager</a>&nbsp;— The MongoDB\Driver\Manager class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-command.php" target="_blank">MongoDB\Driver\Command</a>&nbsp;— The MongoDB\Driver\Command class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-query.php" target="_blank">MongoDB\Driver\Query</a>&nbsp;— The MongoDB\Driver\Query class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-bulkwrite.php" target="_blank">MongoDB\Driver\BulkWrite</a>&nbsp;— The MongoDB\Driver\BulkWrite class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-session.php" target="_blank">MongoDB\Driver\Session</a>&nbsp;— The MongoDB\Driver\Session class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-clientencryption.php" target="_blank">MongoDB\Driver\ClientEncryption</a>&nbsp;— The MongoDB\Driver\ClientEncryption class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-serverapi.php" target="_blank">MongoDB\Driver\ServerApi</a>&nbsp;— The MongoDB\Driver\ServerApi class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-writeconcern.php" target="_blank">MongoDB\Driver\WriteConcern</a>&nbsp;— The MongoDB\Driver\WriteConcern class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-readpreference.php" target="_blank">MongoDB\Driver\ReadPreference</a>&nbsp;— The MongoDB\Driver\ReadPreference class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-readconcern.php" target="_blank">MongoDB\Driver\ReadConcern</a>&nbsp;— The MongoDB\Driver\ReadConcern class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-cursor.php" target="_blank">MongoDB\Driver\Cursor</a>&nbsp;— The MongoDB\Driver\Cursor class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-cursorid.php" target="_blank">MongoDB\Driver\CursorId</a>&nbsp;— The MongoDB\Driver\CursorId class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-cursorinterface.php" target="_blank">MongoDB\Driver\CursorInterface</a>&nbsp;— The MongoDB\Driver\CursorInterface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-server.php" target="_blank">MongoDB\Driver\Server</a>&nbsp;— The MongoDB\Driver\Server class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-serverdescription.php" target="_blank">MongoDB\Driver\ServerDescription</a>&nbsp;— The MongoDB\Driver\ServerDescription class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-topologydescription.php" target="_blank">MongoDB\Driver\TopologyDescription</a>&nbsp;— The MongoDB\Driver\TopologyDescription class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-writeconcernerror.php" target="_blank">MongoDB\Driver\WriteConcernError</a>&nbsp;— The MongoDB\Driver\WriteConcernError class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-writeerror.php" target="_blank">MongoDB\Driver\WriteError</a>&nbsp;— The MongoDB\Driver\WriteError class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-writeresult.php" target="_blank">MongoDB\Driver\WriteResult</a>&nbsp;— The MongoDB\Driver\WriteResult class</li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/book.bson.php" target="_blank">MongoDB\BSON</a>&nbsp;— BSON type classes and serialization functions
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/ref.bson.functions.php" target="_blank">Functions</a></li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-binary.php" target="_blank">MongoDB\BSON\Binary</a>&nbsp;— The MongoDB\BSON\Binary class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-decimal128.php" target="_blank">MongoDB\BSON\Decimal128</a>&nbsp;— The MongoDB\BSON\Decimal128 class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-javascript.php" target="_blank">MongoDB\BSON\Javascript</a>&nbsp;— The MongoDB\BSON\Javascript class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-maxkey.php" target="_blank">MongoDB\BSON\MaxKey</a>&nbsp;— The MongoDB\BSON\MaxKey class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-minkey.php" target="_blank">MongoDB\BSON\MinKey</a>&nbsp;— The MongoDB\BSON\MinKey class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-objectid.php" target="_blank">MongoDB\BSON\ObjectId</a>&nbsp;— The MongoDB\BSON\ObjectId class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-regex.php" target="_blank">MongoDB\BSON\Regex</a>&nbsp;— The MongoDB\BSON\Regex class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-timestamp.php" target="_blank">MongoDB\BSON\Timestamp</a>&nbsp;— The MongoDB\BSON\Timestamp class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-utcdatetime.php" target="_blank">MongoDB\BSON\UTCDateTime</a>&nbsp;— The MongoDB\BSON\UTCDateTime class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-type.php" target="_blank">MongoDB\BSON\Type</a>&nbsp;— The MongoDB\BSON\Type interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-persistable.php" target="_blank">MongoDB\BSON\Persistable</a>&nbsp;— The MongoDB\BSON\Persistable interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-serializable.php" target="_blank">MongoDB\BSON\Serializable</a>&nbsp;— The MongoDB\BSON\Serializable interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-unserializable.php" target="_blank">MongoDB\BSON\Unserializable</a>&nbsp;— The MongoDB\BSON\Unserializable interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-binaryinterface.php" target="_blank">MongoDB\BSON\BinaryInterface</a>&nbsp;— The MongoDB\BSON\BinaryInterface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-decimal128interface.php" target="_blank">MongoDB\BSON\Decimal128Interface</a>&nbsp;— The MongoDB\BSON\Decimal128Interface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-javascriptinterface.php" target="_blank">MongoDB\BSON\JavascriptInterface</a>&nbsp;— The MongoDB\BSON\JavascriptInterface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-maxkeyinterface.php" target="_blank">MongoDB\BSON\MaxKeyInterface</a>&nbsp;— The MongoDB\BSON\MaxKeyInterface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-minkeyinterface.php" target="_blank">MongoDB\BSON\MinKeyInterface</a>&nbsp;— The MongoDB\BSON\MinKeyInterface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-objectidinterface.php" target="_blank">MongoDB\BSON\ObjectIdInterface</a>&nbsp;— The MongoDB\BSON\ObjectIdInterface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-regexinterface.php" target="_blank">MongoDB\BSON\RegexInterface</a>&nbsp;— The MongoDB\BSON\RegexInterface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-timestampinterface.php" target="_blank">MongoDB\BSON\TimestampInterface</a>&nbsp;— The MongoDB\BSON\TimestampInterface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-utcdatetimeinterface.php" target="_blank">MongoDB\BSON\UTCDateTimeInterface</a>&nbsp;— The MongoDB\BSON\UTCDateTimeInterface interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-dbpointer.php" target="_blank">MongoDB\BSON\DBPointer</a>&nbsp;— The MongoDB\BSON\DBPointer class (deprecated)</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-int64.php" target="_blank">MongoDB\BSON\Int64</a>&nbsp;— The MongoDB\BSON\Int64 class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-symbol.php" target="_blank">MongoDB\BSON\Symbol</a>&nbsp;— The MongoDB\BSON\Symbol class (deprecated)</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-bson-undefined.php" target="_blank">MongoDB\BSON\Undefined</a>&nbsp;— The MongoDB\BSON\Undefined class (deprecated)</li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/mongodb.monitoring.php" target="_blank">MongoDB\Driver\Monitoring</a>&nbsp;— Monitoring classes and subscriber functions
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/ref.monitoring.functions.php" target="_blank">Functions</a></li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-commandfailedevent.php" target="_blank">MongoDB\Driver\Monitoring\CommandFailedEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\CommandFailedEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-commandstartedevent.php" target="_blank">MongoDB\Driver\Monitoring\CommandStartedEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\CommandStartedEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-commandsucceededevent.php" target="_blank">MongoDB\Driver\Monitoring\CommandSucceededEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\CommandSucceededEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverchangedevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerChangedEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\ServerChangedEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverclosedevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerClosedEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\ServerClosedEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serveropeningevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerOpeningEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\ServerOpeningEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverheartbeatfailedevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverheartbeatstartedevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverheartbeatsucceededevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-topologychangedevent.php" target="_blank">MongoDB\Driver\Monitoring\TopologyChangedEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\TopologyChangedEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-topologyclosedevent.php" target="_blank">MongoDB\Driver\Monitoring\TopologyClosedEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\TopologyClosedEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-topologyopeningevent.php" target="_blank">MongoDB\Driver\Monitoring\TopologyOpeningEvent</a>&nbsp;— The MongoDB\Driver\Monitoring\TopologyOpeningEvent class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-commandsubscriber.php" target="_blank">MongoDB\Driver\Monitoring\CommandSubscriber</a>&nbsp;— The MongoDB\Driver\Monitoring\CommandSubscriber interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-sdamsubscriber.php" target="_blank">MongoDB\Driver\Monitoring\SDAMSubscriber</a>&nbsp;— The MongoDB\Driver\Monitoring\SDAMSubscriber interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-subscriber.php" target="_blank">MongoDB\Driver\Monitoring\Subscriber</a>&nbsp;— The MongoDB\Driver\Monitoring\Subscriber interface</li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/mongodb.exceptions.php" target="_blank">MongoDB\Driver\Exception</a>&nbsp;— Exception classes
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-authenticationexception.php" target="_blank">MongoDB\Driver\Exception\AuthenticationException</a>&nbsp;— The MongoDB\Driver\Exception\AuthenticationException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-bulkwriteexception.php" target="_blank">MongoDB\Driver\Exception\BulkWriteException</a>&nbsp;— The MongoDB\Driver\Exception\BulkWriteException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-commandexception.php" target="_blank">MongoDB\Driver\Exception\CommandException</a>&nbsp;— The MongoDB\Driver\Exception\CommandException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-connectionexception.php" target="_blank">MongoDB\Driver\Exception\ConnectionException</a>&nbsp;— The MongoDB\Driver\Exception\ConnectionException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-connectiontimeoutexception.php" target="_blank">MongoDB\Driver\Exception\ConnectionTimeoutException</a>&nbsp;— The MongoDB\Driver\Exception\ConnectionTimeoutException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-encryptionexception.php" target="_blank">MongoDB\Driver\Exception\EncryptionException</a>&nbsp;— The MongoDB\Driver\Exception\EncryptionException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-exception.php" target="_blank">MongoDB\Driver\Exception\Exception</a>&nbsp;— The MongoDB\Driver\Exception\Exception interface</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-executiontimeoutexception.php" target="_blank">MongoDB\Driver\Exception\ExecutionTimeoutException</a>&nbsp;— The MongoDB\Driver\Exception\ExecutionTimeoutException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-invalidargumentexception.php" target="_blank">MongoDB\Driver\Exception\InvalidArgumentException</a>&nbsp;— The MongoDB\Driver\Exception\InvalidArgumentException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-logicexception.php" target="_blank">MongoDB\Driver\Exception\LogicException</a>&nbsp;— The MongoDB\Driver\Exception\LogicException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php" target="_blank">MongoDB\Driver\Exception\RuntimeException</a>&nbsp;— The MongoDB\Driver\Exception\RuntimeException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-serverexception.php" target="_blank">MongoDB\Driver\Exception\ServerException</a>&nbsp;— The MongoDB\Driver\Exception\ServerException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-sslconnectionexception.php" target="_blank">MongoDB\Driver\Exception\SSLConnectionException</a>&nbsp;— The MongoDB\Driver\Exception\SSLConnectionException class (deprecated)</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-unexpectedvalueexception.php" target="_blank">MongoDB\Driver\Exception\UnexpectedValueException</a>&nbsp;— The MongoDB\Driver\Exception\UnexpectedValueException class</li>
            <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-writeexception.php" target="_blank">MongoDB\Driver\Exception\WriteException</a>&nbsp;— The MongoDB\Driver\Exception\WriteException class</li>
            <li><a href="https://www.php.net/manual/en/mongodb.exceptions.tree.php" target="_blank">Class Tree</a>&nbsp;— MongoDB Exception Class Tree</li>
        </ul>
    </li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Vendor Specified Database Extensions - MySQL - MySQL Drivers and Plugins',
                'lesson_order' => 75,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">PHP offers several MySQL drivers and plugins for accessing and handling MySQL.</p>
<p class="para">The differences and functionality of the MySQL extensions are described within the overview of this section.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set">
    <li><a href="https://www.php.net/manual/en/book.mysqli.php" target="_blank">MySQLi</a>&nbsp;— MySQL Improved Extension
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/intro.mysqli.php" target="_blank">Introduction</a></li>
            <li><a href="https://www.php.net/manual/en/mysqli.overview.php" target="_blank">Overview</a></li>
            <li><a href="https://www.php.net/manual/en/mysqli.quickstart.php" target="_blank">Quick start guide</a></li>
            <li><a href="https://www.php.net/manual/en/mysqli.setup.php" target="_blank">Installing/Configuring</a></li>
            <li><a href="https://www.php.net/manual/en/mysqli.persistconns.php" target="_blank">The mysqli Extension and Persistent Connections</a></li>
            <li><a href="https://www.php.net/manual/en/mysqli.constants.php" target="_blank">Predefined Constants</a></li>
            <li><a href="https://www.php.net/manual/en/mysqli.notes.php" target="_blank">Notes</a></li>
            <li><a href="https://www.php.net/manual/en/mysqli.summary.php" target="_blank">The MySQLi Extension Function Summary</a></li>
            <li><a href="https://www.php.net/manual/en/class.mysqli.php" target="_blank">mysqli</a>&nbsp;— The mysqli class</li>
            <li><a href="https://www.php.net/manual/en/class.mysqli-stmt.php" target="_blank">mysqli_stmt</a>&nbsp;— The mysqli_stmt class</li>
            <li><a href="https://www.php.net/manual/en/class.mysqli-result.php" target="_blank">mysqli_result</a>&nbsp;— The mysqli_result class</li>
            <li><a href="https://www.php.net/manual/en/class.mysqli-driver.php" target="_blank">mysqli_driver</a>&nbsp;— The mysqli_driver class</li>
            <li><a href="https://www.php.net/manual/en/class.mysqli-warning.php" target="_blank">mysqli_warning</a>&nbsp;— The mysqli_warning class</li>
            <li><a href="https://www.php.net/manual/en/class.mysqli-sql-exception.php" target="_blank">mysqli_sql_exception</a>&nbsp;— The mysqli_sql_exception class</li>
            <li><a href="https://www.php.net/manual/en/ref.mysqli.php" target="_blank">Aliases and deprecated Mysqli Functions</a></li>
            <li><a href="https://www.php.net/manual/en/changelog.mysqli.php" target="_blank">Changelog</a></li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/book.mysql-xdevapi.php" target="_blank">Mysql_xdevapi</a>
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/intro.mysql-xdevapi.php" target="_blank">Introduction</a></li>
            <li><a href="https://www.php.net/manual/en/mysql-xdevapi.setup.php" target="_blank">Installing/Configuring</a></li>
            <li><a href="https://www.php.net/manual/en/mysql-xdevapi.constants.php" target="_blank">Predefined Constants</a></li>
            <li><a href="https://www.php.net/manual/en/changelog.mysql_xdevapi.php" target="_blank">Changelog</a></li>
            <li><a href="https://www.php.net/manual/en/mysql-xdevapi.examples.php" target="_blank">Examples</a></li>
            <li><a href="https://www.php.net/manual/en/ref.mysql-xdevapi.php" target="_blank">Mysql_xdevapi Functions</a></li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-baseresult.php" target="_blank">mysql_xdevapi\BaseResult</a>&nbsp;— BaseResult interface</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-client.php" target="_blank">mysql_xdevapi\Client</a>&nbsp;— Client class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collection.php" target="_blank">mysql_xdevapi\Collection</a>&nbsp;— Collection class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collectionadd.php" target="_blank">mysql_xdevapi\CollectionAdd</a>&nbsp;— CollectionAdd class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collectionfind.php" target="_blank">mysql_xdevapi\CollectionFind</a>&nbsp;— CollectionFind class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collectionmodify.php" target="_blank">mysql_xdevapi\CollectionModify</a>&nbsp;— CollectionModify class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collectionremove.php" target="_blank">mysql_xdevapi\CollectionRemove</a>&nbsp;— CollectionRemove class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-columnresult.php" target="_blank">mysql_xdevapi\ColumnResult</a>&nbsp;— ColumnResult class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-crudoperationbindable.php" target="_blank">mysql_xdevapi\CrudOperationBindable</a>&nbsp;— CrudOperationBindable interface</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-crudoperationlimitable.php" target="_blank">mysql_xdevapi\CrudOperationLimitable</a>&nbsp;— CrudOperationLimitable interface</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-crudoperationskippable.php" target="_blank">mysql_xdevapi\CrudOperationSkippable</a>&nbsp;— CrudOperationSkippable interface</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-crudoperationsortable.php" target="_blank">mysql_xdevapi\CrudOperationSortable</a>&nbsp;— CrudOperationSortable interface</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-databaseobject.php" target="_blank">mysql_xdevapi\DatabaseObject</a>&nbsp;— DatabaseObject interface</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-docresult.php" target="_blank">mysql_xdevapi\DocResult</a>&nbsp;— DocResult class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-exception.php" target="_blank">mysql_xdevapi\Exception</a>&nbsp;— Exception class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-executable.php" target="_blank">mysql_xdevapi\Executable</a>&nbsp;— Executable interface</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-executionstatus.php" target="_blank">mysql_xdevapi\ExecutionStatus</a>&nbsp;— ExecutionStatus class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-expression.php" target="_blank">mysql_xdevapi\Expression</a>&nbsp;— Expression class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-result.php" target="_blank">mysql_xdevapi\Result</a>&nbsp;— Result class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-rowresult.php" target="_blank">mysql_xdevapi\RowResult</a>&nbsp;— RowResult class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-schema.php" target="_blank">mysql_xdevapi\Schema</a>&nbsp;— Schema class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-schemaobject.php" target="_blank">mysql_xdevapi\SchemaObject</a>&nbsp;— SchemaObject interface</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-session.php" target="_blank">mysql_xdevapi\Session</a>&nbsp;— Session class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-sqlstatement.php" target="_blank">mysql_xdevapi\SqlStatement</a>&nbsp;— SqlStatement class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-sqlstatementresult.php" target="_blank">mysql_xdevapi\SqlStatementResult</a>&nbsp;— SqlStatementResult class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-statement.php" target="_blank">mysql_xdevapi\Statement</a>&nbsp;— Statement class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-table.php" target="_blank">mysql_xdevapi\Table</a>&nbsp;— Table class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-tabledelete.php" target="_blank">mysql_xdevapi\TableDelete</a>&nbsp;— TableDelete class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-tableinsert.php" target="_blank">mysql_xdevapi\TableInsert</a>&nbsp;— TableInsert class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-tableselect.php" target="_blank">mysql_xdevapi\TableSelect</a>&nbsp;— TableSelect class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-tableupdate.php" target="_blank">mysql_xdevapi\TableUpdate</a>&nbsp;— TableUpdate class</li>
            <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-warning.php" target="_blank">mysql_xdevapi\Warning</a>&nbsp;— Warning class</li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/book.mysql.php" target="_blank">MySQL (Original)</a>&nbsp;— Original MySQL API
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/intro.mysql.php" target="_blank">Introduction</a></li>
            <li><a href="https://www.php.net/manual/en/mysql.setup.php" target="_blank">Installing/Configuring</a></li>
            <li><a href="https://www.php.net/manual/en/changelog.mysql.php" target="_blank">Changelog</a></li>
            <li><a href="https://www.php.net/manual/en/mysql.constants.php" target="_blank">Predefined Constants</a></li>
            <li><a href="https://www.php.net/manual/en/mysql.examples.php" target="_blank">Examples</a></li>
            <li><a href="https://www.php.net/manual/en/ref.mysql.php" target="_blank">MySQL Functions</a></li>
        </ul>
    </li>
    <li><a href="https://www.php.net/manual/en/book.mysqlnd.php" target="_blank">Mysqlnd</a>&nbsp;— MySQL Native Driver
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/intro.mysqlnd.php" target="_blank">Introduction</a></li>
            <li><a href="https://www.php.net/manual/en/mysqlnd.overview.php" target="_blank">Overview</a></li>
            <li><a href="https://www.php.net/manual/en/mysqlnd.install.php" target="_blank">Installation</a></li>
            <li><a href="https://www.php.net/manual/en/mysqlnd.config.php" target="_blank">Runtime Configuration</a></li>
            <li><a href="https://www.php.net/manual/en/mysqlnd.incompatibilities.php" target="_blank">Incompatibilities</a></li>
            <li><a href="https://www.php.net/manual/en/mysqlnd.persist.php" target="_blank">Persistent Connections</a></li>
            <li><a href="https://www.php.net/manual/en/mysqlnd.stats.php" target="_blank">Statistics</a></li>
            <li><a href="https://www.php.net/manual/en/mysqlnd.notes.php" target="_blank">Notes</a></li>
            <li><a href="https://www.php.net/manual/en/mysqlnd.memory.php" target="_blank">Memory management</a></li>
            <li><a href="https://www.php.net/manual/en/mysqlnd.plugin.php" target="_blank">MySQL Native Driver Plugin API</a></li>
        </ul>
    </li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Vendor Specified Database Extensions - OCI8 - Oracle OCI8',
                'lesson_order' => 76,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>These functions allow you to access Oracle Database. They support SQL and PL/SQL statements. Basic features include transaction control, binding of PHP variables to Oracle placeholders, and support for large object (LOB) types and collections. Oracle's scalability features such as Database Resident Connection Pooling (DRCP) and result caching are also supported.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/oci8.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/oci8.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/oci8.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/oci8.connection.php" target="_blank">OCI8 Connection Handling and Connection Pooling</a></li>
    <li><a href="https://www.php.net/manual/en/oci8.fan.php" target="_blank">OCI8 Fast Application Notification (FAN) Support</a></li>
    <li><a href="https://www.php.net/manual/en/oci8.taf.php" target="_blank">OCI8 Transparent Application Failover (TAF) Support</a></li>
    <li><a href="https://www.php.net/manual/en/oci8.dtrace.php" target="_blank">OCI8 and DTrace Dynamic Tracing</a></li>
    <li><a href="https://www.php.net/manual/en/oci8.datatypes.php" target="_blank">Supported Datatypes</a></li>
    <li><a href="https://www.php.net/manual/en/ref.oci8.php" target="_blank">OCI8 Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.ocicollection.php" target="_blank">OCICollection</a>&nbsp;— The OCICollection class</li>
    <li><a href="https://www.php.net/manual/en/class.ocilob.php" target="_blank">OCILob</a>&nbsp;— The OCILob class</li>
    <li><a href="https://www.php.net/manual/en/oldaliases.oci8.php" target="_blank">OCI8 Obsolete Aliases and Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Vendor Specified Database Extensions - PostgreSQL',
                'lesson_order' => 77,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>PostgreSQL database is an Open Source product and available without cost. Postgres, developed originally in the UC Berkeley Computer Science Department, pioneered many of the object-relational concepts now becoming available in some commercial databases. It provides SQL92/SQL99 language support, transactions, referential integrity, stored procedures and type extensibility. PostgreSQL is an open source descendant of this original Berkeley code.</p>

<hr>
<h5>This topci also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/pgsql.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/pgsql.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/pgsql.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.pgsql.php" target="_blank">PostgreSQL Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.pgsql-connection.php" target="_blank">PgSql\Connection</a>&nbsp;— The PgSql\Connection class</li>
    <li><a href="https://www.php.net/manual/en/class.pgsql-result.php" target="_blank">PgSql\Result</a>&nbsp;— The PgSql\Result class</li>
    <li><a href="https://www.php.net/manual/en/class.pgsql-lob.php" target="_blank">PgSql\Lob</a>&nbsp;— The PgSql\Lob class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Vendor Specified Database Extensions - SQLite3',
                'lesson_order' => 78,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Support for SQLite version 3 databases</p>

<hr>
<h5>This topci also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/sqlite3.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/sqlite3.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.sqlite3.php" target="_blank">SQLite3</a>&nbsp;— The SQLite3 class</li>
    <li><a href="https://www.php.net/manual/en/class.sqlite3stmt.php" target="_blank">SQLite3Stmt</a>&nbsp;— The SQLite3Stmt class</li>
    <li><a href="https://www.php.net/manual/en/class.sqlite3result.php" target="_blank">SQLite3Result</a>&nbsp;— The SQLite3Result class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Database Extensions - Vendor Specified Database Extensions - SQLSRV — Microsoft SQL Server Driver for PHP',
                'lesson_order' => 79,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The SQLSRV extension allows you to access Microsoft SQL Server and SQL Azure databases. The 3.0 release of the driver supports SQL Server, beginning with SQL Server 2005, including SQL Server 2012 and SQL Server 2012 LocalDB. (For more information about LocalDB, see&nbsp;<a class="link external" href="http://msdn.microsoft.com/en-us/library/hh487161.aspx" target="_blank">»&nbsp;PHP Driver for SQL Server Support for LocalDB</a>&nbsp;and&nbsp;<a class="link external" href="http://msdn.microsoft.com/en-us/library/hh510202(SQL.110).aspx" target="_blank">»&nbsp;SQL Server 2012 Express LocalDB</a>.)</p>
<p class="para">The SQLSRV extension is supported by Microsoft and available for download here:&nbsp;<a class="link external" href="http://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx" target="_blank">»&nbsp;http://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx</a>. SQL Server 2012 LocalDB can be downloaded here:&nbsp;<a class="link external" href="http://go.microsoft.com/fwlink/?LinkID=237665" target="_blank">»&nbsp;http://go.microsoft.com/fwlink/?LinkID=237665</a>.</p>

<hr>
<h5>This topci also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/sqlsrv.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/sqlsrv.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.sqlsrv.php" target="_blank">SQLSRV Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Date and Time Related Extensions - Calendar',
                'lesson_order' => 80,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The calendar extension presents a series of functions to simplify converting between different calendar formats. The intermediary or standard it is based on is the Julian Day Count. The Julian Day Count is a count of days starting from January 1st, 4713 B.C. To convert between calendar systems, you must first convert to Julian Day Count, then to the calendar system of your choice. Julian Day Count is very different from the Julian Calendar! For more information on Julian Day Count, visit&nbsp;<a class="link external" href="http://www.hermetic.ch/cal_stud/jdn.htm" target="_blank">»&nbsp;http://www.hermetic.ch/cal_stud/jdn.htm</a>. For more information on calendar systems visit&nbsp;<a class="link external" href="http://www.fourmilab.ch/documents/calendar/" target="_blank">»&nbsp;http://www.fourmilab.ch/documents/calendar/</a>. Excerpts from this page are included in these instructions, and are in quotes.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/calendar.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/calendar.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.calendar.php" target="_blank">Calendar Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Date and Time Related Extensions - Date and Time',
                'lesson_order' => 81,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">These functions allow you to get the date and time from the server where your PHP scripts are running. You can use these functions to format the date and time in many different ways.</p>
<p class="para">The date and time information is internally stored as a 64-bit number so all conceivably useful dates (including negative years) are supported. The range is from about 292 billion years in the past to the same in the future.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">Please keep in mind that these functions are dependent on the locale settings of your server. Make sure to take daylight saving time (use e.g.&nbsp;<code class="literal">$date = $date-&gt;modify('+7 days')</code>&nbsp;and not&nbsp;<code class="literal">$date += 7*24*60*60</code>) and leap years into consideration when working with these functions.</span></p>
</blockquote>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">The timezones referenced in this section can be found in the&nbsp;<a class="xref" href="https://www.php.net/manual/en/timezones.php" target="_blank">List of Supported Timezones</a>.</span></p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/datetime.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/datetime.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/datetime.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.datetime.php" target="_blank">DateTime</a>&nbsp;— The DateTime class</li>
    <li><a href="https://www.php.net/manual/en/class.datetimeimmutable.php" target="_blank">DateTimeImmutable</a>&nbsp;— The DateTimeImmutable class</li>
    <li><a href="https://www.php.net/manual/en/class.datetimeinterface.php" target="_blank">DateTimeInterface</a>&nbsp;— The DateTimeInterface interface</li>
    <li><a href="https://www.php.net/manual/en/class.datetimezone.php" target="_blank">DateTimeZone</a>&nbsp;— The DateTimeZone class</li>
    <li><a href="https://www.php.net/manual/en/class.dateinterval.php" target="_blank">DateInterval</a>&nbsp;— The DateInterval class</li>
    <li><a href="https://www.php.net/manual/en/class.dateperiod.php" target="_blank">DatePeriod</a>&nbsp;— The DatePeriod class</li>
    <li><a href="https://www.php.net/manual/en/ref.datetime.php" target="_blank">Date/Time Functions</a></li>
    <li><a href="https://www.php.net/manual/en/datetime.formats.php" target="_blank">Supported Date and Time Formats</a></li>
    <li><a href="https://www.php.net/manual/en/timezones.php" target="_blank">List of Supported Timezones</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Date and Time Related Extensions - HRTime - High Resolution Timing',
                'lesson_order' => 82,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The HRTime extension implements a high resolution StopWatch class. It uses the best possible APIs on different platforms which brings resolution up to nanoseconds. It also makes possible to implement a custom stopwatch using low level ticks delivered by the underlaying APIs.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">As of PHP 7.3.0 the related function&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.hrtime.php" target="_blank">hrtime()</a></span>&nbsp;is part of the core.</span></p>
</blockquote>

<hr>
<h5>This topcis also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/hrtime.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/hrtime.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.hrtime-performancecounter.php" target="_blank">HRTime\PerformanceCounter</a>&nbsp;— The HRTime\PerformanceCounter class</li>
    <li><a href="https://www.php.net/manual/en/class.hrtime-stopwatch.php" target="_blank">HRTime\StopWatch</a>&nbsp;— The HRTime\StopWatch class</li>
    <li><a href="https://www.php.net/manual/en/class.hrtime-unit.php" target="_blank">HRTime\Unit</a>&nbsp;— The HRTime\Unit class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'File System Related Extensions - Direct IO',
                'lesson_order' => 83,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>PHP supports the direct io functions as described in the Posix Standard (Section 6) for performing I/O functions at a lower level than the C-Language stream I/O functions (<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fopen.php" target="_blank">fopen()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fread.php" target="_blank">fread()</a></span>,..). The use of the DIO functions should be considered only when direct control of a device is needed. In all other cases, the standard&nbsp;<a class="link" href="https://www.php.net/manual/en/book.filesystem.php" target="_blank">filesystem</a>&nbsp;functions are more than adequate.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/dio.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/dio.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.dio.php" target="_blank">Direct IO Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'File System Related Extensions - Directories',
                'lesson_order' => 84,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>PHP provides a great way to read directory contents. You can list directory contents (files / subdirectories) using built-in functions in PHP.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/dir.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/dir.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.directory.php" target="_blank">Directory</a>&nbsp;— The Directory class</li>
    <li><a href="https://www.php.net/manual/en/ref.dir.php" target="_blank">Directory Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'File System Related Extensions - FileInfo - File Information',
                'lesson_order' => 85,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The functions in this module try to guess the content type and encoding of a file by looking for certain&nbsp;<em class="emphasis">magic</em>&nbsp;byte sequences at specific positions within the file. While this is not a bulletproof approach the heuristics used do a very good job.</p>

<hr>
<h5>Thi topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/fileinfo.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/fileinfo.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.fileinfo.php" target="_blank">Fileinfo Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.finfo.php" target="_blank">finfo</a>&nbsp;— The finfo class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'File System Related Extensions - Filesystem',
                'lesson_order' => 86,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>No external libraries are needed to build this extension, but if you want PHP to support LFS (large files) on Linux, then you need to have a recent glibc and you need compile PHP with the following compiler flags:&nbsp;<code class="literal">-D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64</code>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/filesystem.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/filesystem.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.filesystem.php" target="_blank">Filesystem Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'File System Related Extensions - Inotify',
                'lesson_order' => 87,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The inotify extension exposes the inotify functions&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-init.php" target="_blank">inotify_init()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-add-watch.php" target="_blank">inotify_add_watch()</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-rm-watch.php" target="_blank">inotify_rm_watch()</a></span>.</p>
<p class="para">As the C&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-init.php" target="_blank">inotify_init()</a></span>&nbsp;function returns a file descriptor, PHP's&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-init.php" target="_blank">inotify_init()</a></span>&nbsp;returns a stream resource, usable with standard stream functions, like&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-select.php" target="_blank">stream_select()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-set-blocking.php" target="_blank">stream_set_blocking()</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fclose.php" target="_blank">fclose()</a></span>.&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-read.php" target="_blank">inotify_read()</a></span>&nbsp;replaces the C way of reading inotify events.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/inotify.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/inotify.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.inotify.php" target="_blank">Inotify Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'File System Related Extensions - xattr',
                'lesson_order' => 88,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The xattr extension allows for the manipulation of extended attributes on a filesystem.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/xattr.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/xattr.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.xattr.php" target="_blank">xattr Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'File System Related Extensions - xdiff',
                'lesson_order' => 89,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">xdiff extension enables you to create and apply patch files containing differences between different revisions of files.</p>
<p class="para">This extension supports two modes of operation - on strings and on files, as well as two different patch formats - unified and binary. Unified patches are excellent for text files as they are human-readable and easy to review. For binary files like archives or images, binary patches will be adequate choice as they are binary safe and handle non-printable characters well.</p>
<p class="para">Starting from version 1.5.0 there are two different sets of functions for generating binary patches. New functions -&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.xdiff-string-rabdiff.php" target="_blank">xdiff_string_rabdiff()</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.xdiff-file-rabdiff.php" target="_blank">xdiff_file_rabdiff()</a></span>&nbsp;generate output compatible with older functions but are typically faster and generate smaller results. For more details about methods of generating binary patches and differences between them, please check&nbsp;<a class="link external" href="http://www.xmailserver.org/xdiff-lib.html" target="_blank">»&nbsp;libxdiff</a>&nbsp;website.</p>
<p class="para">This extension uses libxdiff to implement these functions. Please see&nbsp;<a class="link external" href="http://www.xmailserver.org/xdiff-lib.html" target="_blank">»&nbsp;http://www.xmailserver.org/xdiff-lib.html</a>&nbsp;for more information.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/xdiff.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/xdiff.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.xdiff.php" target="_blank">xdiff Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Human Language and Character Encoding Support - Enhanct (Spelling Library)',
                'lesson_order' => 90,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Enchant is the PHP binding for the&nbsp;<a class="link external" href="http://www.abisource.com/projects/enchant/" target="_blank">»&nbsp;Enchant library</a>. Enchant steps in to provide uniformity and conformity on top of all spelling libraries, and implement certain features that may be lacking in any individual provider library. Everything should "just work" for any and every definition of "just working."</p>
<p class="para">Enchant supports the following backends:</p>
<ul class="itemizedlist">
    <li class="listitem">
        <p class="para"><code class="literal">Aspell/Pspell (intends to replace Ispell)</code></p>
    </li>
    <li class="listitem">
        <p class="para"><code class="literal">Ispell (old as sin, could be interpreted as a defacto standard)</code></p>
    </li>
    <li class="listitem">
        <p class="para"><code class="literal">MySpell/Hunspell (an OOo projects, also used by Mozilla)</code></p>
    </li>
    <li class="listitem">
        <p class="para"><code class="literal">Uspell (primarily Yiddish, Hebrew, and Eastern European languages - hosted in AbiWord's CVS under the module "uspell")</code></p>
    </li>
    <li class="listitem">
        <p class="para"><code class="literal">Hspell (Hebrew)</code></p>
    </li>
    <li class="listitem">
        <p class="para"><code class="literal">AppleSpell (Mac OSX)</code></p>
    </li>
</ul>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/enchant.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/enchant.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/enchant.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.enchant.php" target="_blank">Enchant Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.enchantbroker.php" target="_blank">EnchantBroker</a>&nbsp;— The EnchantBroker class</li>
    <li><a href="https://www.php.net/manual/en/class.enchantdictionary.php" target="_blank">EnchantDictionary</a>&nbsp;— The EnchantDictionary class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Human Language and Character Encoding Support - Gender - Determine Gender of First Names',
                'lesson_order' => 91,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Gender PHP extension is a port of the gender.c program originally written by Joerg Michael. The main purpose is to find out the gender of firstnames. The current database contains &gt;40000 firstnames from 54 countries.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/gender.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/gender.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.gender.php" target="_blank">Gender\Gender</a>&nbsp;— The Gender\Gender class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Human Language and Character Encoding Support - Gettext',
                'lesson_order' => 92,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The gettext functions implement an NLS (Native Language Support) API which can be used to internationalize your PHP applications. Please see the gettext documentation for your system for a thorough explanation of these functions or view the docs at&nbsp;<a class="link external" href="http://www.gnu.org/software/gettext/manual/gettext.html" target="_blank">»&nbsp;http://www.gnu.org/software/gettext/manual/gettext.html</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/gettext.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/gettext.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.gettext.php" target="_blank">Gettext Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Human Language and Character Encoding Support - Iconv',
                'lesson_order' => 93,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This module contains an interface to iconv character set conversion facility. With this module, you can turn a string represented by a local character set into the one represented by another character set, which may be the Unicode character set. Supported character sets depend on the iconv implementation of your system. Note that the iconv function on some systems may not work as you expect. In such case, it'd be a good idea to install the&nbsp;<a class="link external" href="http://www.gnu.org/software/libiconv/" target="_blank">»&nbsp;GNU libiconv</a>&nbsp;library. It will most likely end up with more consistent results.</p>
<p class="para">This extension comes with various utility functions that help you to write multilingual scripts. Let's have a look at the following sections to explore the new features.</p>
<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/iconv.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/iconv.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.iconv.php" target="_blank">iconv Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Human Language and Character Encoding Support - Intl - Internationalization Functions',
                'lesson_order' => 94,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Internationalization extension (further is referred as Intl) is a wrapper for&nbsp;<a class="link external" href="http://www.icu-project.org/" target="_blank">»&nbsp;ICU</a>&nbsp;library, enabling PHP programmers to perform various locale-aware operations including but not limited to formatting, transliteration, encoding conversion, calendar operations,&nbsp;<a class="link external" href="http://www.unicode.org/reports/tr10/" target="_blank">»&nbsp;UCA</a>-conformant collation, locating text boundaries and working with locale identifiers, timezones and graphemes,</p>
<p class="para">It tends to closely follow ICU APIs, so that people having experience working with ICU in either C/C++ or Java could easily use the PHP API. Also, this way ICU documentation would be useful to understand various ICU functions.</p>
<p class="para">Intl consists of several modules, each of them exposes the corresponding ICU API:</p>
<ul class="itemizedlist">
    <li class="listitem"><span class="simpara">Collator: provides string comparison capability with support for appropriate locale-sensitive sort orderings.</span></li>
    <li class="listitem"><span class="simpara">Number Formatter: allows to display number according to the localized format or given pattern or set of rules, and to parse strings into numbers.</span></li>
    <li class="listitem"><span class="simpara">Message Formatter: allows to create messages incorporating data (such as numbers or dates) formatted according to given pattern and locale rules, and parse messages extracting data from them. It can handle plurals, locale-aware numbers, currencies, conditions and much more.</span></li>
    <li class="listitem"><span class="simpara">Normalizer: provides a function to transform text into one of the Unicode normalization forms, and provides a routine to test if a given string is already normalized.</span></li>
    <li class="listitem"><span class="simpara">Locale: provides interaction with locale identifiers in the form of functions to get subtags from locale identifier; parse, compose, match(lookup and filter) locale identifiers.</span></li>
    <li class="listitem"><span class="simpara">Calendar: provides a class which could be used for locale-aware calendar operations and getting various information such as timezone for locale chosen, first day of week or if it's daylight saving time now.</span></li>
    <li class="listitem"><span class="simpara">Timezone: provides a wrapper around the&nbsp;<a class="link external" href="http://www.iana.org/time-zones" target="_blank">»&nbsp;"Olson" database</a>&nbsp;which has information about all the timezones around the world.</span></li>
    <li class="listitem"><span class="simpara">Date formatter: allows to display date and time according to the localized format or given pattern or set of rules, and to parse strings into date and time.</span></li>
    <li class="listitem"><span class="simpara">Transliterator: allows getting latin representation of strings in various languages.</span></li>
</ul>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/intl.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/intl.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/intl.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.collator.php" target="_blank">Collator</a>&nbsp;— The Collator class</li>
    <li><a href="https://www.php.net/manual/en/class.numberformatter.php" target="_blank">NumberFormatter</a>&nbsp;— The NumberFormatter class</li>
    <li><a href="https://www.php.net/manual/en/class.locale.php" target="_blank">Locale</a>&nbsp;— The Locale class</li>
    <li><a href="https://www.php.net/manual/en/class.normalizer.php" target="_blank">Normalizer</a>&nbsp;— The Normalizer class</li>
    <li><a href="https://www.php.net/manual/en/class.messageformatter.php" target="_blank">MessageFormatter</a>&nbsp;— The MessageFormatter class</li>
    <li><a href="https://www.php.net/manual/en/class.intlcalendar.php" target="_blank">IntlCalendar</a>&nbsp;— The IntlCalendar class</li>
    <li><a href="https://www.php.net/manual/en/class.intlgregoriancalendar.php" target="_blank">IntlGregorianCalendar</a>&nbsp;— The IntlGregorianCalendar class</li>
    <li><a href="https://www.php.net/manual/en/class.intltimezone.php" target="_blank">IntlTimeZone</a>&nbsp;— The IntlTimeZone class</li>
    <li><a href="https://www.php.net/manual/en/class.intldateformatter.php" target="_blank">IntlDateFormatter</a>&nbsp;— The IntlDateFormatter class</li>
    <li><a href="https://www.php.net/manual/en/class.resourcebundle.php" target="_blank">ResourceBundle</a>&nbsp;— The ResourceBundle class</li>
    <li><a href="https://www.php.net/manual/en/class.spoofchecker.php" target="_blank">Spoofchecker</a>&nbsp;— The Spoofchecker class</li>
    <li><a href="https://www.php.net/manual/en/class.transliterator.php" target="_blank">Transliterator</a>&nbsp;— The Transliterator class</li>
    <li><a href="https://www.php.net/manual/en/class.intlbreakiterator.php" target="_blank">IntlBreakIterator</a>&nbsp;— The IntlBreakIterator class</li>
    <li><a href="https://www.php.net/manual/en/class.intlrulebasedbreakiterator.php" target="_blank">IntlRuleBasedBreakIterator</a>&nbsp;— The IntlRuleBasedBreakIterator class</li>
    <li><a href="https://www.php.net/manual/en/class.intlcodepointbreakiterator.php" target="_blank">IntlCodePointBreakIterator</a>&nbsp;— The IntlCodePointBreakIterator class</li>
    <li><a href="https://www.php.net/manual/en/class.intldatepatterngenerator.php" target="_blank">IntlDatePatternGenerator</a>&nbsp;— The IntlDatePatternGenerator class</li>
    <li><a href="https://www.php.net/manual/en/class.intlpartsiterator.php" target="_blank">IntlPartsIterator</a>&nbsp;— The IntlPartsIterator class</li>
    <li><a href="https://www.php.net/manual/en/class.uconverter.php" target="_blank">UConverter</a>&nbsp;— The UConverter class</li>
    <li><a href="https://www.php.net/manual/en/ref.intl.grapheme.php" target="_blank">Grapheme Functions</a></li>
    <li><a href="https://www.php.net/manual/en/ref.intl.idn.php" target="_blank">IDN Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.intlchar.php" target="_blank">IntlChar</a></li>
    <li><a href="https://www.php.net/manual/en/class.intlexception.php" target="_blank">IntlException</a>&nbsp;— Exception class for intl errors</li>
    <li><a href="https://www.php.net/manual/en/class.intliterator.php" target="_blank">IntlIterator</a>&nbsp;— The IntlIterator class</li>
    <li><a href="https://www.php.net/manual/en/ref.intl.php" target="_blank">intl Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Human Language and Character Encoding Support - Multibyte String',
                'lesson_order' => 95,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">While there are many languages in which every necessary character can be represented by a one-to-one mapping to an 8-bit value, there are also several languages which require so many characters for written communication that they cannot be contained within the range a mere byte can code (A byte is made up of eight bits. Each bit can contain only two distinct values, one or zero. Because of this, a byte can only represent 256 unique values (two to the power of eight)). Multibyte character encoding schemes were developed to express more than 256 characters in the regular bytewise coding system.</p>
<p class="para">When you manipulate (trim, split, splice, etc.) strings encoded in a multibyte encoding, you need to use special functions since two or more consecutive bytes may represent a single character in such encoding schemes. Otherwise, if you apply a non-multibyte-aware string function to the string, it probably fails to detect the beginning or ending of the multibyte character and ends up with a corrupted garbage string that most likely loses its original meaning.</p>
<p class="para"><code class="literal">mbstring</code>&nbsp;provides multibyte specific string functions that help you deal with multibyte encodings in PHP. In addition to that,&nbsp;<code class="literal">mbstring</code>&nbsp;handles character encoding conversion between the possible encoding pairs.&nbsp;<code class="literal">mbstring</code>&nbsp;is designed to handle Unicode-based encodings such as UTF-8 and UCS-2 and many single-byte encodings for convenience.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/mbstring.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/mbstring.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/mbstring.encodings.php" target="_blank">Summaries of supported encodings</a></li>
    <li><a href="https://www.php.net/manual/en/mbstring.ja-basic.php" target="_blank">Basics of Japanese multi-byte encodings</a></li>
    <li><a href="https://www.php.net/manual/en/mbstring.http.php" target="_blank">HTTP Input and Output</a></li>
    <li><a href="https://www.php.net/manual/en/mbstring.supported-encodings.php" target="_blank">Supported Character Encodings</a></li>
    <li><a href="https://www.php.net/manual/en/mbstring.overload.php" target="_blank">Function Overloading Feature</a></li>
    <li><a href="https://www.php.net/manual/en/mbstring.php4.req.php" target="_blank">PHP Character Encoding Requirements</a></li>
    <li><a href="https://www.php.net/manual/en/ref.mbstring.php" target="_blank">Multibyte String Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Human Language and Character Encoding Support - Pspell',
                'lesson_order' => 96,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>These functions allow you to check the spelling of a word and offer suggestions.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/pspell.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/pspell.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.pspell.php" target="_blank">Pspell Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.pspell-dictionary.php" target="_blank">PSpell\Dictionary</a>&nbsp;— The PSpell\Dictionary class</li>
    <li><a href="https://www.php.net/manual/en/class.pspell-config.php" target="_blank">PSpell\Config</a>&nbsp;— The PSpell\Config class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Human Language and Character Encoding Support - Recode - GNU Recode',
                'lesson_order' => 97,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This module contains an interface to the GNU Recode library. The GNU Recode library converts files between various coded character sets and surface encodings. When this cannot be achieved exactly, it may get rid of the offending characters or fall back on approximations. The library recognises or produces nearly 150 different character sets and is able to convert files between almost any pair. Most&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc1345" target="_blank">»&nbsp;RFC 1345</a>&nbsp;character sets are supported.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is unbundled and moved to&nbsp;<a class="link external" href="https://pecl.php.net/package/recode" target="_blank">»&nbsp;PECL</a>&nbsp;as of PHP 7.4.0. Consider to use the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.mbstring.php" target="_blank">Multibyte String</a>&nbsp;or&nbsp;<a class="link" href="https://www.php.net/manual/en/book.iconv.php" target="_blank">iconv</a>&nbsp;extensions instead.</span></p>
</blockquote>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/recode.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/recode.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.recode.php" target="_blank">Recode Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Image Processing and Generation - Exif - Exchangeable Image Information',
                'lesson_order' => 98,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>With the exif extension you are able to work with image meta data. For example, you may use exif functions to read meta data of pictures taken from digital cameras by working with information stored in the headers. These are commonly found in&nbsp;<abbr title="Joint Photographic Experts Group">JPEG</abbr>&nbsp;and&nbsp;<abbr title="Tagged Image File Format">TIFF</abbr>&nbsp;images.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/exif.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/exif.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.exif.php" target="_blank">Exif Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Image Processing and Generation - GD — Image Processing and GD',
                'lesson_order' => 99,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">PHP is not limited to creating just HTML output. It can also be used to create and manipulate image files in a variety of different image formats, including&nbsp;<abbr title="Graphic Interchange Format">GIF</abbr>,&nbsp;<abbr title="Portable Network Graphics">PNG</abbr>,&nbsp;<abbr title="Joint Photographic Experts Group">JPEG</abbr>,&nbsp;<abbr title="Wireless Bitmap">WBMP</abbr>, and&nbsp;<abbr>XPM</abbr>. Even more conveniently, PHP can output image streams directly to a browser. You will need to compile PHP with the&nbsp;<abbr title="Graphics Draw">GD</abbr>&nbsp;library of image functions for this to work.&nbsp;<abbr title="Graphics Draw">GD</abbr>&nbsp;and PHP may also require other libraries, depending on which image formats you want to work with.</p>
<p class="para">You can use the image functions in PHP to get the size of&nbsp;<abbr title="Joint Photographic Experts Group">JPEG</abbr>,&nbsp;<abbr title="Graphic Interchange Format">GIF</abbr>,&nbsp;<abbr title="Portable Network Graphics">PNG</abbr>,&nbsp;<abbr title="Shockwave Flash">SWF</abbr>,&nbsp;<abbr title="Tagged Image File Format">TIFF</abbr>&nbsp;and&nbsp;<abbr>JPEG2000</abbr>&nbsp;images.</p>
<p class="para">With the&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.exif.php" target="_blank">exif extension</a>, you are able to work with information stored in headers of&nbsp;<abbr title="Joint Photographic Experts Group">JPEG</abbr>&nbsp;and&nbsp;<abbr title="Tagged Image File Format">TIFF</abbr>&nbsp;images. This way you can read meta data generated by digital cameras. The exif functions do not require the&nbsp;<abbr title="Graphics Draw">GD</abbr>&nbsp;library.</p>
<p class="para">&nbsp;</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">Read the requirements section about how to expand image capabilities to read, write and modify images. To read meta data of pictures taken by digital cameras you need the above mentioned&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.exif.php" target="_blank">exif extension</a>.</span></p>
</blockquote>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">The&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.getimagesize.php" target="_blank">getimagesize()</a></span>&nbsp;function does not require the GD extension.</span></p>
</blockquote>
<div class="alert alert-warning"><strong class="caution">Caution</strong>
    <p class="simpara">While the bundled version of the GD library uses the Zend memory manager to allocate memory, system versions do not, so that&nbsp;<a class="link" href="https://www.php.net/manual/en/ini.core.php#ini.memory-limit" target="_blank">memory_limit</a>&nbsp;does not apply.</p>
</div>
<p class="para">GD supports a varity of formats, below is a list of formats supported by GD and notes to their availability including read/write support.</p>
<p class="para">&nbsp;</p>
<table class="doctable table"><caption><strong>Formats supported by GD</strong></caption>
    <thead>
    <tr>
        <th>Format</th>
        <th>Read support</th>
        <th>Write support</th>
        <th>Notes</th>
    </tr>
    </thead>
    <tbody class="tbody">
    <tr>
        <td>JPEG</td>
        <td><strong><code>true</code></strong></td>
        <td><strong><code>true</code></strong></td>
        <td class="empty">&nbsp;</td>
    </tr>
    <tr>
        <td>PNG</td>
        <td><strong><code>true</code></strong></td>
        <td><strong><code>true</code></strong></td>
        <td class="empty">&nbsp;</td>
    </tr>
    <tr>
        <td>GIF</td>
        <td><strong><code>true</code></strong></td>
        <td><strong><code>true</code></strong></td>
        <td class="empty">&nbsp;</td>
    </tr>
    <tr>
        <td>XBM</td>
        <td><strong><code>true</code></strong></td>
        <td><strong><code>true</code></strong></td>
        <td class="empty">&nbsp;</td>
    </tr>
    <tr>
        <td>XPM</td>
        <td><strong><code>true</code></strong></td>
        <td><strong><code>false</code></strong></td>
        <td class="empty">&nbsp;</td>
    </tr>
    <tr>
        <td>WBMP</td>
        <td><strong><code>true</code></strong></td>
        <td><strong><code>true</code></strong></td>
        <td class="empty">&nbsp;</td>
    </tr>
    <tr>
        <td>WebP</td>
        <td><strong><code>true</code></strong></td>
        <td><strong><code>true</code></strong></td>
        <td class="empty">&nbsp;</td>
    </tr>
    <tr>
        <td>BMP</td>
        <td><strong><code>true</code></strong></td>
        <td><strong><code>true</code></strong></td>
        <td>Available as of PHP 7.2.0</td>
    </tr>
    </tbody>
</table>
<p class="para">Despite most formats being available for both reading and writing in the above table, doesn't mean that PHP was compiled with support for them. To find out which formats that was available to GD during compilation, use the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.gd-info.php" target="_blank">gd_info()</a></span>&nbsp;function, for more information about compiling support for one or more formats, see the installation chapter.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/image.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/image.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/image.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.image.php" target="_blank">GD and Image Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.gdimage.php" target="_blank">GdImage</a>&nbsp;— The GdImage class</li>
    <li><a href="https://www.php.net/manual/en/class.gdfont.php" target="_blank">GdFont</a>&nbsp;— The GdFont class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Image Processing and Generation - Gmagick',
                'lesson_order' => 100,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Gmagick is a php extension to create, modify and obtain meta information of images using the GraphicsMagick API.</p>
<p class="para">GraphicsMagick prides itself as the swiss army knife of image processing. It works with over 88 major formats including important formats like DPX, GIF, JPEG, JPEG-2000, PNG, PDF, PNM, and TIFF.</p>
<p class="para">Gmagick consists of a main Gmagick class, a GmagickDraw class which is in effect a drawing wand and a GmagickPixel class of which instances represent a single pixel of an image (color, opacity).</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/gmagick.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/gmagick.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/gmagick.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.gmagick.php" target="_blank">Gmagick</a>&nbsp;— The Gmagick class</li>
    <li><a href="https://www.php.net/manual/en/class.gmagickdraw.php" target="_blank">GmagickDraw</a>&nbsp;— The GmagickDraw class</li>
    <li><a href="https://www.php.net/manual/en/class.gmagickpixel.php" target="_blank">GmagickPixel</a>&nbsp;— The GmagickPixel class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Image Processing and Generation - ImageMagick — Image Processing (ImageMagick)',
                'lesson_order' => 101,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Imagick is a native php extension to create and modify images using the ImageMagick API.</p>
<div id="imagick.aboutimagemagick" class="section">
    <p class="para">ImageMagick is a software suite to create, edit, and compose bitmap images. It can read, convert and write images in a variety of formats (over 100) including DPX, EXR, GIF, JPEG, JPEG-2000, PDF, PhotoCD, PNG, Postscript, SVG, and TIFF.</p>
    <p class="para">ImageMagick Studio LLC is a non-profit organization dedicated to making software imaging solutions freely available.</p>

    <hr>
    <h5>This topic also includes:</h5>
    <ul class="chunklist chunklist_set chunklist_children">
        <li><a href="https://www.php.net/manual/en/imagick.setup.php" target="_blank">Installing/Configuring</a></li>
        <li><a href="https://www.php.net/manual/en/imagick.constants.php" target="_blank">Predefined Constants</a></li>
        <li><a href="https://www.php.net/manual/en/imagick.examples.php" target="_blank">Examples</a></li>
        <li><a href="https://www.php.net/manual/en/class.imagick.php" target="_blank">Imagick</a>&nbsp;— The Imagick class</li>
        <li><a href="https://www.php.net/manual/en/class.imagickdraw.php" target="_blank">ImagickDraw</a>&nbsp;— The ImagickDraw class</li>
        <li><a href="https://www.php.net/manual/en/class.imagickpixel.php" target="_blank">ImagickPixel</a>&nbsp;— The ImagickPixel class</li>
        <li><a href="https://www.php.net/manual/en/class.imagickpixeliterator.php" target="_blank">ImagickPixelIterator</a>&nbsp;— The ImagickPixelIterator class</li>
        <li><a href="https://www.php.net/manual/en/class.imagickkernel.php" target="_blank">ImagickKernel</a>&nbsp;— The ImagickKernel class</li>
    </ul>
</div>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Mail Related Extensions - IMAP, POP3 and NNTP',
                'lesson_order' => 102,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">These functions enable you to operate with the&nbsp;<abbr title="Internet Message Access Protocol">IMAP</abbr>&nbsp;protocol, as well as the&nbsp;<abbr title="Network News Transfer Protocol">NNTP</abbr>,&nbsp;<abbr title="Post Office Protocol version 3">POP3</abbr>&nbsp;and local mailbox access methods.</p>
<p class="para">Be warned, however, that some IMAP functions will not work correctly with the POP protocol.</p>
<div class="alert alert-danger">
    <strong class="warning">Warning</strong>
    <p class="simpara">The IMAP extension is not thread-safe; it should not be used with ZTS builds.</p>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/imap.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/imap.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.imap.php" target="_blank">IMAP Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.imap-connection.php" target="_blank">IMAP\Connection</a>&nbsp;— The IMAP\Connection class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Mail Related Extensions - Mail',
                'lesson_order' => 103,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.mail.php" target="_blank">mail()</a></span>&nbsp;function allows you to send mail.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/mail.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/mail.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.mail.php" target="_blank">Mail Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Mail Related Extensions - Mailparse',
                'lesson_order' => 104,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Mailparse is an extension for parsing and working with email messages. It can deal with&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc822" target="_blank">»&nbsp;RFC 822</a>&nbsp;and&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc2045" target="_blank">»&nbsp;RFC 2045</a>&nbsp;(<code class="literal">MIME</code>) compliant messages.</p>
<p class="para">Mailparse is stream based, which means that it does not keep in-memory copies of the files it processes - so it is very resource efficient when dealing with large messages.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">Mailparse requires the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.mbstring.php" target="_blank">mbstring</a>&nbsp;extension, and mbstring must be loaded before mailparse.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/mailparse.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/mailparse.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.mailparse.php" target="_blank">Mailparse Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Mathematical Extensions - BC Math Arbitrary Precision Mathematics',
                'lesson_order' => 105,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">For arbitrary precision mathematics PHP offers BCMath which supports numbers of any size and precision up to&nbsp;<code class="literal">2147483647</code>&nbsp;(or&nbsp;<code class="literal">0x7FFFFFFF</code>) decimal digits, if there is sufficient memory, represented as strings.</p>
<p class="para">Valid (aka. well-formed) BCMath numbers are strings which match the regular expression&nbsp;<code class="literal">/^[+-]?[0-9]*(\.[0-9]*)?$/</code>.</p>
<div class="alert alert-warning">
    <strong class="caution">Caution</strong>
    <p class="para">Passing values of type&nbsp;<span class="type">float</span>&nbsp;to a BCMath function which expects a&nbsp;<span class="type">string</span>&nbsp;as operand may not have the desired effect due to the way PHP converts&nbsp;<span class="type">float</span>&nbsp;values to&nbsp;<span class="type">string</span>, namely that the&nbsp;<span class="type">string</span>&nbsp;may be in exponential notation (which is not supported by BCMath), and that, prior to PHP 8.0.0, the decimal separator is locale dependent (while BCMath always expects a decimal point).</p>
    <div class="informalexample">
        <div class="example-contents">
<pre class="phpcode">&lt;?php
$num1&nbsp;=&nbsp;0;&nbsp;//&nbsp;(string)&nbsp;0&nbsp;=&gt;&nbsp;'0'
$num2&nbsp;=&nbsp;-0.000005;&nbsp;//&nbsp;(string)&nbsp;-0.000005&nbsp;=&gt;&nbsp;'-5.05E-6'
echo&nbsp;bcadd($num1,&nbsp;$num2,&nbsp;6);&nbsp;//&nbsp;=&gt;&nbsp;'0.000000'

setlocale(LC_NUMERIC,&nbsp;'de_DE');&nbsp;//&nbsp;uses&nbsp;a&nbsp;decimal&nbsp;comma
$num2&nbsp;=&nbsp;1.2;&nbsp;//&nbsp;(string)&nbsp;1.2&nbsp;=&gt;&nbsp;'1,2'
echo&nbsp;bcsub($num1,&nbsp;$num2,&nbsp;1);&nbsp;//&nbsp;=&gt;&nbsp;'0.0'
?&gt;
</pre>
        </div>
    </div>
</div>

<hr>
<h5>Thi topic also includes:</h5>
<ul class="chunklist chunklist_set">
    <li>
        <ul class="chunklist chunklist_set chunklist_children">
            <li><a href="https://www.php.net/manual/en/bc.setup.php" target="_blank">Installing/Configuring</a></li>
            <li><a href="https://www.php.net/manual/en/bc.constants.php" target="_blank">Predefined Constants</a></li>
            <li><a href="https://www.php.net/manual/en/ref.bc.php" target="_blank">BC Math Functions</a></li>
        </ul>
    </li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Mathematical Extensions - GMP - GNU Multiple Precision',
                'lesson_order' => 106,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="simpara">These functions allow for arbitrary-length integers to be worked with using the GNU&nbsp;<abbr title="Multiple Precision">MP</abbr>&nbsp;library.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">Most GMP functions accept GMP number arguments. These are shown in this documentation as&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.gmp.php" target="_blank">GMP</a></span>&nbsp;objects. Most of these functions will also accept numeric and string arguments, so long as it is possible to convert the latter to a number. Also, if there is a more performant function that can operate on the arguments (integers only), then it will be used instead (this is done transparently). See also the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.gmp-init.php" target="_blank">gmp_init()</a></span>&nbsp;function.</p>
</blockquote>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">From PHP 5.6 onwards, the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.arithmetic.php" target="_blank">arithmetic</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.bitwise.php" target="_blank">bitwise</a>, and&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.comparison.php" target="_blank">comparison</a>&nbsp;operators may be used with the&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.gmp.php" target="_blank">GMP</a></span>&nbsp;objects returned from&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.gmp-init.php" target="_blank">gmp_init()</a></span>&nbsp;and other GMP functions.</p>
</blockquote>
<div class="alert alert-warning">
    <strong class="warning">Warning</strong>
    <p class="simpara">Large integers must be specified as strings - otherwise, PHP will coerce them to floats, resulting in a loss of precision.</p>
</div>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is available on Windows platforms.</span></p>
</blockquote>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Mathematical Extensions - Math - Mathematical Functions',
                'lesson_order' => 107,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">These math functions will only handle values within the range of the&nbsp;<span class="type">int</span>&nbsp;and&nbsp;<span class="type">float</span>&nbsp;types on your computer (this corresponds currently to the C types long resp. double). If you need to handle bigger numbers, take a look at the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.bc.php" target="_blank">arbitrary precision math functions</a>.</p>
<p class="simpara">See also the manual page on&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.arithmetic.php" target="_blank">arithmetic operators</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/math.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/math.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.math.php" target="_blank">Math Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Mathematical Extensions - Trader',
                'lesson_order' => 108,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The trader extension is a free open source stock library based on TA-Lib. It's dedicated to trading software developers requiring to perform technical analysis of financial market data. Alongside many indicators like ADX, MACD, RSI, Stochastic, TRIX the candlestick pattern recognition and several vector arithmetic and algebraic functions are present.</p>
<p class="para">Calculations can be done in two modes - TA-Lib and Metastock. Changing it using&nbsp;<a class="link" href="https://www.php.net/manual/en/function.trader-set-compat.php" target="_blank">trader_set_compat()</a>&nbsp;will affect the way some trader functions work.</p>
<p class="para">Some trader functions provide different results depending of the "starting point" of the data being involved. This is often referred as a function having memories. An example of such function is the Exponential Moving Average. It is possible to control the unstable period (the amount of data to strip off) using&nbsp;<a class="link" href="https://www.php.net/manual/en/function.trader-set-unstable-period.php" target="_blank">trader_set_unstable_period()</a>&nbsp;function.</p>
<p class="para">Extended documentation about indicators, formulas and implementations in other programming languages can be found under&nbsp;<a class="link external" href="http://tadoc.org/" target="_blank">»&nbsp;tadoc.org</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/trader.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/trader.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.trader.php" target="_blank">Trader Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Non-Text MIME Output - FDF - Forms Data Format',
                'lesson_order' => 109,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="simpara">Forms Data Format (FDF) is a format for handling forms within PDF documents. You should read the documentation at&nbsp;<a class="link external" href="http://www.adobe.com/devnet/acrobat/fdftoolkit.html" target="_blank">»&nbsp;http://www.adobe.com/devnet/acrobat/fdftoolkit.html</a>&nbsp;for more information on what FDF is and how it is used in general.</p>
<p class="simpara">The general idea of FDF is similar to HTML forms. The difference is basically the format how data is transmitted to the server when the submit button is pressed (this is actually the Form Data Format) and the format of the form itself (which is the Portable Document Format, PDF). Processing the FDF data is one of the features provided by the fdf functions. But there is more. One may as well take an existing PDF form and populated the input fields with data without modifying the form itself. In such a case one would create a FDF document (<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-create.php" target="_blank">fdf_create()</a></span>) set the values of each input field (<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-value.php" target="_blank">fdf_set_value()</a></span>) and associate it with a PDF form (<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-file.php" target="_blank">fdf_set_file()</a></span>). Finally it has to be sent to the browser with MimeType&nbsp;<code class="literal">application/vnd.fdf</code>. The Acrobat reader plugin of your browser recognizes the MimeType, reads the associated PDF form and fills in the data from the FDF document.</p>
<p class="simpara">If you look at an FDF-document with a text editor you will find a catalogue object with the name&nbsp;<code class="literal">FDF</code>. Such an object may contain a number of entries like&nbsp;<code class="literal">Fields</code>,&nbsp;<code class="literal">F</code>,&nbsp;<code class="literal">Status</code>&nbsp;etc.. The most commonly used entries are&nbsp;<code class="literal">Fields</code>&nbsp;which points to a list of input fields, and&nbsp;<code class="literal">F</code>&nbsp;which contains the filename of the PDF-document this data belongs to. Those entries are referred to in the FDF documentation as /F-Key or /Status-Key. Modifying this entries is done by functions like&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-file.php" target="_blank">fdf_set_file()</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-status.php" target="_blank">fdf_set_status()</a></span>. Fields are modified with&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-value.php" target="_blank">fdf_set_value()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-opt.php" target="_blank">fdf_set_opt()</a></span>&nbsp;etc..</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/fdf.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/fdf.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/fdf.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.fdf.php" target="_blank">FDF Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Non-Text MIME Output - GnuPG - GNU Privacy Guard',
                'lesson_order' => 110,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>This module allows you to interact with&nbsp;<a class="link external" href="http://www.gnupg.org/" target="_blank">»&nbsp;gnupg</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/gnupg.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/gnupg.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/gnupg.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.gnupg.php" target="_blank">GnuPG Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Non-Text MIME Output - wkhtmltox',
                'lesson_order' => 111,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>libwkhtmltox is an open source LGPLv3 library for rendering HTML into PDF and various image formats using the QtWebKit rendering engine.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/wkhtmltox.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/class.wkhtmltox-pdf-converter.php" target="_blank">wkhtmltox\PDF\Converter</a>&nbsp;— The wkhtmltox\PDF\Converter class</li>
    <li><a href="https://www.php.net/manual/en/class.wkhtmltox-pdf-object.php" target="_blank">wkhtmltox\PDF\Object</a>&nbsp;— The wkhtmltox\PDF\Object class</li>
    <li><a href="https://www.php.net/manual/en/class.wkhtmltox-image-converter.php" target="_blank">wkhtmltox\Image\Converter</a>&nbsp;— The wkhtmltox\Image\Converter class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Non-Text MIME Output - PS - Postscript Document Creation',
                'lesson_order' => 112,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This module allows to create PostScript documents. It has many similarities with the pdf extension. Actually the API is almost identical and one can in many cases just replace the prefix of each function from pdf_ to ps_. This also works for functions which has no meaning in the PostScript document (like adding hyperlinks) but will have an effect if the document is converted to PDF.</p>
<p class="para">Documents created by this extension are sometimes even superior to documents created with the pdf extension, because pslib's text rendering functions can handle kerning, hyphenation and ligatures which results in much better output of boxed text.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ps.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ps.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.ps.php" target="_blank">PS Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Non-Text MIME Output - RpmInfo',
                'lesson_order' => 113,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This extension enables you to retrieve information from RPM files or from the installed RPMs database.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/rpminfo.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/rpminfo.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.rpminfo.php" target="_blank">RpmInfo Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Non-Text MIME Output - XLSWriter',
                'lesson_order' => 114,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">An efficient and fast xlsx file export extension.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/xlswriter.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/xlswriter.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.vtiful-kernel-excel.php" target="_blank">Vtiful\Kernel\Excel</a>&nbsp;— The Vtiful\Kernel\Excel class</li>
    <li><a href="https://www.php.net/manual/en/class.vtiful-kernel-format.php" target="_blank">Vtiful\Kernel\Format</a>&nbsp;— The Vtiful\Kernel\Format class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - Eio',
                'lesson_order' => 115,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This extension provides asyncronous POSIX I/O by means of&nbsp;<a class="link external" href="http://software.schmorp.de/pkg/libeio.html" target="_blank">»&nbsp;libeio</a>&nbsp;C library written by Marc Lehmann.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
</blockquote>
<p class="para">&nbsp;</p>
<div class="alert alert-warning">
    <strong class="warning">Warning</strong>
    <p class="simpara">It is important to be aware that each request is executed in a thread, and the order of execution of continuously queued requests basically is unpredictable. For instance, the following piece of code is incorrect.</p>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/eio.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/eio.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/eio.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.eio.php" target="_blank">Eio Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - Ev',
                'lesson_order' => 116,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This extension provides interface to&nbsp;<a class="link external" href="http://software.schmorp.de/pkg/libev.html" target="_blank">»&nbsp;libev</a>&nbsp;library - a high performance full-featured event loop written in C.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
</blockquote>
<p class="para"><em class="emphasis">Libev</em>&nbsp;is an event loop: one registers interest in certain events (such as a file descriptor being readable or a timeout occurring), and it will manage these event sources and provide the program with events.</p>
<p class="para">To do this, it must take more or less complete control over the process (or thread) by executing the event loop handler, and will then communicate events via a callback mechanism.</p>
<p class="para">You register interest in certain events by registering so-called event watchers, and then hand it over to libev by starting the watcher.</p>
<p class="para">For details refer to the&nbsp;<a class="link external" href="http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod" target="_blank">»&nbsp;documentation of libev</a></p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ev.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ev.global.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ev.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ev.watchers.php" target="_blank">Watchers</a></li>
    <li><a href="https://www.php.net/manual/en/ev.watcher-callbacks.php" target="_blank">Watcher callbacks</a></li>
    <li><a href="https://www.php.net/manual/en/ev.periodic-modes.php" target="_blank">Periodic watcher operation modes</a></li>
    <li><a href="https://www.php.net/manual/en/class.ev.php" target="_blank">Ev</a>&nbsp;— The Ev class</li>
    <li><a href="https://www.php.net/manual/en/class.evcheck.php" target="_blank">EvCheck</a>&nbsp;— The EvCheck class</li>
    <li><a href="https://www.php.net/manual/en/class.evchild.php" target="_blank">EvChild</a>&nbsp;— The EvChild class</li>
    <li><a href="https://www.php.net/manual/en/class.evembed.php" target="_blank">EvEmbed</a>&nbsp;— The EvEmbed class</li>
    <li><a href="https://www.php.net/manual/en/class.evfork.php" target="_blank">EvFork</a>&nbsp;— The EvFork class</li>
    <li><a href="https://www.php.net/manual/en/class.evidle.php" target="_blank">EvIdle</a>&nbsp;— The EvIdle class</li>
    <li><a href="https://www.php.net/manual/en/class.evio.php" target="_blank">EvIo</a>&nbsp;— The EvIo class</li>
    <li><a href="https://www.php.net/manual/en/class.evloop.php" target="_blank">EvLoop</a>&nbsp;— The EvLoop class</li>
    <li><a href="https://www.php.net/manual/en/class.evperiodic.php" target="_blank">EvPeriodic</a>&nbsp;— The EvPeriodic class</li>
    <li><a href="https://www.php.net/manual/en/class.evprepare.php" target="_blank">EvPrepare</a>&nbsp;— The EvPrepare class</li>
    <li><a href="https://www.php.net/manual/en/class.evsignal.php" target="_blank">EvSignal</a>&nbsp;— The EvSignal class</li>
    <li><a href="https://www.php.net/manual/en/class.evstat.php" target="_blank">EvStat</a>&nbsp;— The EvStat class</li>
    <li><a href="https://www.php.net/manual/en/class.evtimer.php" target="_blank">EvTimer</a>&nbsp;— The EvTimer class</li>
    <li><a href="https://www.php.net/manual/en/class.evwatcher.php" target="_blank">EvWatcher</a>&nbsp;— The EvWatcher class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - Expect',
                'lesson_order' => 117,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>This extension allows to interact with processes through PTY. You may consider using the&nbsp;<a class="link" href="https://www.php.net/manual/en/wrappers.expect.php" target="_blank"><code class="literal">expect://</code>&nbsp;wrapper</a>&nbsp;with the&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.filesystem.php" target="_blank">filesystem functions</a>&nbsp;which provide a simpler and more intuitive interface.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/expect.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/expect.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/expect.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.expect.php" target="_blank">Expect Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - PCNTL - Process Control',
                'lesson_order' => 118,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Process Control support in PHP implements the Unix style of process creation, program execution, signal handling and process termination. Process Control should not be enabled within a web server environment and unexpected results may happen if any Process Control functions are used within a web server environment.</p>
<p class="para">This documentation is intended to explain the general usage of each of the Process Control functions. For detailed information about Unix process control you are encouraged to consult your systems documentation including fork(2), waitpid(2) and signal(2) or a comprehensive reference such as Advanced Programming in the UNIX Environment by W. Richard Stevens (Addison-Wesley).</p>
<p class="para">PCNTL now uses ticks as the signal handle callback mechanism, which is much faster than the previous mechanism. This change follows the same semantics as using "user ticks". You use the&nbsp;<span class="function"><strong>declare()</strong></span>&nbsp;statement to specify the locations in your program where callbacks are allowed to occur. This allows you to minimize the overhead of handling asynchronous events. In the past, compiling PHP with pcntl enabled would always incur this overhead, whether or not your script actually used pcntl.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/pcntl.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/pcntl.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/pcntl.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.pcntl.php" target="_blank">PCNTL Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - POSIX',
                'lesson_order' => 119,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This module contains an interface to those functions defined in the IEEE 1003.1 (POSIX.1) standards document which are not accessible through other means.</p>
<div class="warning"><strong class="warning">Warning</strong>
    <p class="para">Sensitive data can be retrieved with the POSIX functions, e.g.&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.posix-getpwnam.php" target="_blank">posix_getpwnam()</a></span>&nbsp;and friends.</p>
</div>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/posix.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/posix.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.posix.php" target="_blank">POSIX Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - Program Execution - System Program Execution',
                'lesson_order' => 120,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Those functions provide means to execute commands on the system itself, and means to secure such commands.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">All execution functions call the commands through&nbsp;<code class="literal">cmd.exe</code>&nbsp;under Windows. Therefore the user calling these functions needs appropriate privilege to run this command. The only exception is&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.proc-open.php" target="_blank">proc_open()</a></span>&nbsp;with&nbsp;<code class="literal">bypass_shell</code>&nbsp;option.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/exec.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/exec.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.exec.php" target="_blank">Program execution Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - Parallel',
                'lesson_order' => 121,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">parallel is a parallel concurrency extension for PHP 7.2+.</p>
<p class="para">A brief description of the concepts core to parallel follows, more detailed information may be found within this section of the manual.</p>
<div class="simplesect">
    <h3 class="title">Runtime</h3>
    <p class="para">A&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-runtime.php" target="_blank">parallel\Runtime</a></span>&nbsp;represents a PHP interpreter thread. A&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-runtime.php" target="_blank">parallel\Runtime</a></span>&nbsp;is configured with an optional bootstrap file passed to&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parallel-runtime.construct.php" target="_blank">parallel\Runtime::__construct()</a></span>, this is typically an autoloader, or some other preloading routine: The bootstrap file will be included before any task is executed.</p>
    <p class="para">After construction the&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-runtime.php" target="_blank">parallel\Runtime</a></span>&nbsp;remains available until it is closed, killed, or destroyed by the normal scoping rules of PHP objects.&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parallel-runtime.run.php" target="_blank">parallel\Runtime::run()</a></span>&nbsp;allows the programmer to schedule tasks for execution in parallel. A&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-runtime.php" target="_blank">parallel\Runtime</a></span>&nbsp;has a FIFO schedule, tasks will be executed in the order that they are scheduled.</p>
</div>
<div class="simplesect">
    <h3 class="title">Functional API</h3>
    <p class="para">parallel implements a functional, higher level API on top of&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-runtime.php" target="_blank">parallel\Runtime</a></span>&nbsp;that provides a single function entry point to executing parallel code with automatic scheduling:&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/parallel.run.php" target="_blank">parallel\run()</a></span>.</p>
</div>
<div class="simplesect">
    <h3 class="title">Task</h3>
    <p class="para">A task is simply a&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.closure.php" target="_blank">Closure</a></span>&nbsp;intended for parallel execution. The&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.closure.php" target="_blank">Closure</a></span>&nbsp;may contain almost any instruction, including nested closures. However, there are some instructions that are prohibited in tasks:</p>
    <ul class="itemizedlist">
        <li class="listitem">
            <p class="para">yield</p>
        </li>
        <li class="listitem">
            <p class="para">use by-reference</p>
        </li>
        <li class="listitem">
            <p class="para">declare class</p>
        </li>
        <li class="listitem">
            <p class="para">declare named function</p>
        </li>
    </ul>
    <blockquote class="note">
        <p><strong class="note">Note</strong>:</p>
        <p class="para">Nested closures may yield or use by-reference, but must not contain class or named function declarations.</p>
    </blockquote>
    <blockquote class="note">
        <p><strong class="note">Note</strong>:</p>
        <p class="para">No instructions are prohibited in the files which the task may include.</p>
    </blockquote>
</div>
<div class="simplesect">
    <h3 class="title">Future</h3>
    <p class="para">The&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-future.php" target="_blank">parallel\Future</a></span>&nbsp;is used to access the return value from the task, and exposes an API for cancellation of the task.</p>
</div>
<div class="simplesect">
    <h3 class="title">Channel</h3>
    <p class="para">A task may be scheduled with arguments, use lexical scope variables (by-value), and return a value (via a&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-future.php" target="_blank">parallel\Future</a></span>), but these only allow uni-directional communication: They allow the programmer to send data into and retrieve data from a task, but do not allow bi-directional communication between tasks. The&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-channel.php" target="_blank">parallel\Channel</a></span>&nbsp;API allows bi-directional communication between tasks, a&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-channel.php" target="_blank">parallel\Channel</a></span>&nbsp;is a socket-like link between tasks that the programmer can use to send and receive data.</p>
</div>
<div class="simplesect">
    <h3 class="title">Events</h3>
    <p class="para">The&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-events.php" target="_blank">parallel\Events</a></span>&nbsp;API implements a native feel (<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.traversable.php" target="_blank">Traversable</a></span>) event loop, and&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parallel-events.poll.php" target="_blank">parallel\Events::poll()</a></span>&nbsp;method. It allows the programmer to work with sets of channels and or futures. The programmer simply adds channels and futures to the event loop, optionally setting the input for writes with&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parallel-events.setinput.php" target="_blank">parallel\Events::setInput()</a></span>, and enters into a foreach: parallel will read from and write to objects as they become available yielding&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.parallel-events-event.php" target="_blank">parallel\Events\Event</a></span>&nbsp;objects describing the operations that have occurred.</p>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/parallel.setup.php" target="_blank">Installation</a></li>
    <li><a href="https://www.php.net/manual/en/philosophy.parallel.php" target="_blank">Philosophy</a></li>
    <li><a href="https://www.php.net/manual/en/functional.parallel.php" target="_blank">Functional API</a></li>
    <li><a href="https://www.php.net/manual/en/class.parallel-runtime.php" target="_blank">parallel\Runtime</a>&nbsp;— The parallel\Runtime class</li>
    <li><a href="https://www.php.net/manual/en/class.parallel-future.php" target="_blank">parallel\Future</a>&nbsp;— The parallel\Future class</li>
    <li><a href="https://www.php.net/manual/en/class.parallel-channel.php" target="_blank">parallel\Channel</a>&nbsp;— The parallel\Channel class</li>
    <li><a href="https://www.php.net/manual/en/class.parallel-events.php" target="_blank">parallel\Events</a>&nbsp;— The parallel\Events class</li>
    <li><a href="https://www.php.net/manual/en/class.parallel-events-input.php" target="_blank">parallel\Events\Input</a>&nbsp;— The parallel\Events\Input class</li>
    <li><a href="https://www.php.net/manual/en/class.parallel-events-event.php" target="_blank">parallel\Events\Event</a>&nbsp;— The parallel\Events\Event class</li>
    <li><a href="https://www.php.net/manual/en/class.parallel-events-event-type.php" target="_blank">parallel\Events\Event\Type</a>&nbsp;— The parallel\Events\Event\Type class</li>
    <li><a href="https://www.php.net/manual/en/class.parallel-sync.php" target="_blank">parallel\Sync</a>&nbsp;— The parallel\Sync class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - Semaphore - Shared Memory and IPC',
                'lesson_order' => 122,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">These modules provide wrappers for the System V IPC family of functions. It includes semaphores, shared memory and inter-process messaging (IPC).</p>
<p class="para">Semaphores may be used to provide exclusive access to resources on the current machine, or to limit the number of processes that may simultaneously use a resource.</p>
<p class="para">This module provides also shared memory functions using System V shared memory. Shared memory may be used to provide access to global variables. Different httpd-daemons and even other programs (such as Perl, C, ...) are able to access this data to provide a global data-exchange. Remember, that shared memory is NOT safe against simultaneous access. Use semaphores for synchronization.</p>
<table class="doctable table"><caption><strong>Limits of Shared Memory by the Unix OS</strong></caption>
    <tbody class="tbody">
    <tr>
        <td>SHMMAX</td>
        <td>max size of shared memory, normally 131072 bytes</td>
    </tr>
    <tr>
        <td>SHMMIN</td>
        <td>minimum size of shared memory, normally 1 byte</td>
    </tr>
    <tr>
        <td>SHMMNI</td>
        <td>max amount of shared memory segments on a system, normally 100</td>
    </tr>
    <tr>
        <td>SHMSEG</td>
        <td>max amount of shared memory segments per process, normally 6</td>
    </tr>
    </tbody>
</table>
<p class="para">The messaging functions may be used to send and receive messages to/from other processes. They provide a simple and effective means of exchanging data between processes, without the need for setting up an alternative using Unix domain sockets.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">Only the shared memory functions and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.ftok.php" target="_blank">ftok()</a></span>&nbsp;are available on Windows. Neither semaphores nor inter-process messaging functions are supported on that platform.</span></p>
</blockquote>

<hr>
<h5>This topci also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/sem.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/sem.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.sem.php" target="_blank">Semaphore Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.sysvmessagequeue.php" target="_blank">SysvMessageQueue</a>&nbsp;— The SysvMessageQueue class</li>
    <li><a href="https://www.php.net/manual/en/class.sysvsemaphore.php" target="_blank">SysvSemaphore</a>&nbsp;— The SysvSemaphore class</li>
    <li><a href="https://www.php.net/manual/en/class.sysvsharedmemory.php" target="_blank">SysvSharedMemory</a>&nbsp;— The SysvSharedMemory class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - Shared Memory',
                'lesson_order' => 123,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Shmop is an easy to use set of functions that allows PHP to read, write, create and delete Unix shared memory segments.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/shmop.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/shmop.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/shmop.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.shmop.php" target="_blank">Shared Memory Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.shmop.php" target="_blank">Shmop</a>&nbsp;— The Shmop class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Process Control Extensions - Sync',
                'lesson_order' => 124,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The 'sync' extension introduces cross-platform synchonization objects into PHP. Named and unnamed Mutex, Semaphore, Event, Reader-Writer, and named Shared Memory objects provide OS-level synchronization on both POSIX (e.g. Linux) and Windows platforms.</p>
<p class="para">Automatic cleanup of acquired synchronization objects takes place during extension teardown. This means that if PHP prematurely terminates a script (e.g. script execution time is exceeded), objects will not be left in an unknown state. The only exception to this is if PHP itself crashes (e.g. an internal buffer overflow).</p>
<p class="para">Unnamed synchronization objects don't have a lot of use outside of a multithreaded scenario. Unnamed objects are more useful in conjunction with the pthreads PECL extension.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">Named objects require additional care to be used on all systems. If an object is instantiated with a specific set of parameters, it must always be instantiated with those parameters or the object will probably end up in an inconsistent state until the next reboot or a system administrator cleans up the mess.</p>
</blockquote>

<hr>
<h5>This topci also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/sync.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/sync.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.syncmutex.php" target="_blank">SyncMutex</a>&nbsp;— The SyncMutex class</li>
    <li><a href="https://www.php.net/manual/en/class.syncsemaphore.php" target="_blank">SyncSemaphore</a>&nbsp;— The SyncSemaphore class</li>
    <li><a href="https://www.php.net/manual/en/class.syncevent.php" target="_blank">SyncEvent</a>&nbsp;— The SyncEvent class</li>
    <li><a href="https://www.php.net/manual/en/class.syncreaderwriter.php" target="_blank">SyncReaderWriter</a>&nbsp;— The SyncReaderWriter class</li>
    <li><a href="https://www.php.net/manual/en/class.syncsharedmemory.php" target="_blank">SyncSharedMemory</a>&nbsp;— The SyncSharedMemory class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - GeoIP - Geo IP Location',
                'lesson_order' => 125,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The GeoIP extension allows you to find the location of an IP address. City, State, Country, Longitude, Latitude, and other information as all, such as ISP and connection type can be obtained with the help of GeoIP.</p>
<div class="alert alert-danger">
    <strong class="warning">Warning</strong>
    <p class="para">This extension does not support MaxMind's current "GeoIP2" databases, only the "GeoIP legacy" database files.</p>

    <hr>
    <h5>This topic also includes:</h5>
    <ul class="chunklist chunklist_set chunklist_children">
        <li><a href="https://www.php.net/manual/en/geoip.setup.php" target="_blank">Installing/Configuring</a></li>
        <li><a href="https://www.php.net/manual/en/geoip.constants.php" target="_blank">Predefined Constants</a></li>
        <li><a href="https://www.php.net/manual/en/ref.geoip.php" target="_blank">GeoIP Functions</a></li>
    </ul>
</div>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - FANN - Fast Artificial Neural Network',
                'lesson_order' => 126,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>PHP binding for FANN (Fast Artificial Neural Network) Library which implements multilayer artificial neural networks with support for both fully connected and sparsely connected networks. It includes a framework for easy handling of training data sets. It is easy to use, versatile, well documented, and fast.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/fann.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/fann.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/fann.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.fann.php" target="_blank">Fann Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.fannconnection.php" target="_blank">FANNConnection</a>&nbsp;— The FANNConnection class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Igbinary',
                'lesson_order' => 127,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Igbinary is a drop in replacement for the standard PHP serializer. Instead of the time and space consuming textual representation used by PHP's&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.serialize.php" target="_blank">serialize()</a></span>, igbinary stores PHP data structures in a compact binary form. Memory savings are significant when using memcached, APCu, or similar memory based storages for serialized data. The typical reduction in storage requirements are around 50%. The exact percentage depends on the data.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/igbinary.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ref.igbinary.php" target="_blank">Igbinary Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - JSON - Javascript Oriented Notation',
                'lesson_order' => 128,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This extension implements the&nbsp;<a class="link external" href="http://www.json.org/" target="_blank">»&nbsp;JavaScript Object Notation (JSON)</a>&nbsp;data-interchange format. PHP comes with a parser that is specifically written for PHP and licensed under the PHP license.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">PHP implements a superset of JSON as specified in the original&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc7159" target="_blank">»&nbsp;RFC 7159</a>.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/json.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/json.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.jsonexception.php" target="_blank">JsonException</a>&nbsp;— The JsonException class</li>
    <li><a href="https://www.php.net/manual/en/class.jsonserializable.php" target="_blank">JsonSerializable</a>&nbsp;— The JsonSerializable interface</li>
    <li><a href="https://www.php.net/manual/en/ref.json.php" target="_blank">JSON Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Lua',
                'lesson_order' => 129,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>"Lua is a powerful, fast, light-weight, embeddable scripting language." This extension embeds the lua interpreter and offers an OO-API to lua variables and functions.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/lua.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/class.lua.php" target="_blank">Lua</a>&nbsp;— The Lua class</li>
    <li><a href="https://www.php.net/manual/en/class.luaclosure.php" target="_blank">LuaClosure</a>&nbsp;— The LuaClosure class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - LuaSandbox',
                'lesson_order' => 130,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">LuaSandbox is an extension for PHP 7 and PHP 8 to allow safely running untrusted Lua 5.1 code from within PHP.</p>
<p class="para">Differences compared to the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.lua.php" target="_blank">Lua</a>&nbsp;extension:</p>
<ul class="itemizedlist">
    <li class="listitem">
        <p class="para">LuaSandbox has support for time and memory limits.</p>
    </li>
    <li class="listitem">
        <p class="para">LuaSandbox provides a default-safe environment for running untrusted code. Stock Lua functions were reviewed for security, and several were patched accordingly.</p>
    </li>
    <li class="listitem">
        <p class="para">LuaSandbox has a PHP interface which is more complex, precise and powerful, but it is less convenient for developers.</p>
    </li>
    <li class="listitem">
        <p class="para">LuaSandbox supports only Lua 5.1. It is difficult to change this, because LuaSandbox uses heavily modified Lua standard libraries, and due to the lack of backwards compatibility between major Lua versions. LuaSandbox aims to maximise backwards compatibility with user-supplied scripts.</p>
    </li>
</ul>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/luasandbox.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/reference.luasandbox.differences.php" target="_blank">Differences from Standard Lua</a></li>
    <li><a href="https://www.php.net/manual/en/luasandbox.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.luasandbox.php" target="_blank">LuaSandbox</a>&nbsp;— The LuaSandbox class</li>
    <li><a href="https://www.php.net/manual/en/class.luasandboxfunction.php" target="_blank">LuaSandboxFunction</a>&nbsp;— The LuaSandboxFunction class</li>
    <li><a href="https://www.php.net/manual/en/class.luasandboxerror.php" target="_blank">LuaSandboxError</a>&nbsp;— The LuaSandboxError class</li>
    <li><a href="https://www.php.net/manual/en/class.luasandboxerrorerror.php" target="_blank">LuaSandboxErrorError</a>&nbsp;— The LuaSandboxErrorError class</li>
    <li><a href="https://www.php.net/manual/en/class.luasandboxfatalerror.php" target="_blank">LuaSandboxFatalError</a>&nbsp;— The LuaSandboxFatalError class</li>
    <li><a href="https://www.php.net/manual/en/class.luasandboxmemoryerror.php" target="_blank">LuaSandboxMemoryError</a>&nbsp;— The LuaSandboxMemoryError class</li>
    <li><a href="https://www.php.net/manual/en/class.luasandboxruntimeerror.php" target="_blank">LuaSandboxRuntimeError</a>&nbsp;— The LuaSandboxRuntimeError class</li>
    <li><a href="https://www.php.net/manual/en/class.luasandboxsyntaxerror.php" target="_blank">LuaSandboxSyntaxError</a>&nbsp;— The LuaSandboxSyntaxError class</li>
    <li><a href="https://www.php.net/manual/en/class.luasandboxtimeouterror.php" target="_blank">LuaSandboxTimeoutError</a>&nbsp;— The LuaSandboxTimeoutError class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Misc - Miscellaneous Functions',
                'lesson_order' => 131,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">These functions were placed here because none of the other categories seemed to fit.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/misc.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/misc.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.misc.php" target="_blank">Misc. Functions</a></li>
    <li><a href="https://www.php.net/manual/en/changelog.misc.php" target="_blank">Changelog</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Seaslog',
                'lesson_order' => 132,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The&nbsp;<abbr>Seaslog</abbr>&nbsp;is an effective,fast,stable log extension for PHP.</p>
<p class="para">The log journal，which is usually the operate record of the system， software and the application record. Through the analysis of the log，it can facilitate users to understand the operation of the system， software and the application situation. If your application log is rich enough, it can also analyze the previous use’s operation behavior,type, regional distribution or other more information. The application log also points the multiple levels at the same time, you can easily get the application analysis of health status, timely find problems and quick positioning, and solve the problem, remedy the loss.</p>
<p class="para">The error_log, syslog function which built in PHP is powerful and excellent performance, but due to various defects (error_log have no error level, no fixed format, syslog regardless of module, and mix with system log ), reducing a lot of flexibility , and can't meet the application requirements.</p>
<p class="para">The good news is that there are a number of third-party log class library established to make up for the defects, such as log4php, plog, monolog (of course, there are many applications in the project development of the log class).</p>
<p class="para">So is there a log of libraries meet the following requirements：</p>
<ul class="simplelist">
    <li class="member">Modules, classification</li>
    <li class="member">Simple configuration(preferably without configuration)</li>
    <li class="member">Clear log format and easy understanding</li>
    <li class="member">Simple application and well performance</li>
</ul>
<p><abbr>Seaslog</abbr>&nbsp;just meet these demands.</p>
<p class="para">What is provided at present:</p>
<ul class="simplelist">
    <li class="member">In the PHP project, record the log specification and repidly.</li>
    <li class="member">Configure the default log directory and module</li>
    <li class="member">Specified log directory and capture current configuration</li>
    <li class="member">Preliminary analysis of the early warning framework</li>
    <li class="member">Efficient log buffer and convenient buffer debug</li>
    <li class="member">Follow the PSR-3 log interface specification</li>
    <li class="member">Automatically record error information</li>
    <li class="member">Automatically record abnormal information</li>
    <li class="member">Support Connect the TCP port, send with RFC5424</li>
    <li class="member">Support Connect the UDP port, send with RFC5424</li>
    <li class="member">Support RequestId differentiated requests</li>
    <li class="member">Support for log template customizations</li>
</ul>
<p class="para">Read More&nbsp;<a class="link external" href="https://seasx.github.io/SeasLog/" target="_blank">»&nbsp;SeasLog Document</a>&nbsp;at Github.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/seaslog.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/seaslog.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/seaslog.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.seaslog.php" target="_blank">Seaslog Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.seaslog.php" target="_blank">SeasLog</a>&nbsp;— The SeasLog class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - SPL - Standard PHP Library',
                'lesson_order' => 133,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The Standard PHP Library (SPL) is a collection of interfaces and classes that are meant to solve common problems.</p>
<p class="para">SPL provides a set of standard datastructure, a set of iterators to traverse over objects, a set of interfaces, a set of standard Exceptions, a number of classes to work with files and it provides a set of functions like&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.spl-autoload-register.php" target="_blank">spl_autoload_register()</a></span></p>

<hr>
<h5>This also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/spl.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/spl.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/spl.datastructures.php" target="_blank">Datastructures</a></li>
    <li><a href="https://www.php.net/manual/en/spl.iterators.php" target="_blank">Iterators</a></li>
    <li><a href="https://www.php.net/manual/en/spl.interfaces.php" target="_blank">Interfaces</a></li>
    <li><a href="https://www.php.net/manual/en/spl.exceptions.php" target="_blank">Exceptions</a></li>
    <li><a href="https://www.php.net/manual/en/ref.spl.php" target="_blank">SPL Functions</a></li>
    <li><a href="https://www.php.net/manual/en/spl.files.php" target="_blank">File Handling</a></li>
    <li><a href="https://www.php.net/manual/en/spl.misc.php" target="_blank">Miscellaneous Classes and Interfaces</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Streams',
                'lesson_order' => 134,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="simpara">Streams are the way of generalizing file, network, data compression, and other operations which share a common set of functions and uses. In its simplest definition, a&nbsp;<code class="literal">stream</code>&nbsp;is a&nbsp;<code class="literal">resource</code>&nbsp;object which exhibits streamable behavior. That is, it can be read from or written to in a linear fashion, and may be able to&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fseek.php" target="_blank">fseek()</a></span>&nbsp;to an arbitrary location within the stream.</p>
<p class="simpara">A&nbsp;<code class="literal">wrapper</code>&nbsp;is additional code which tells the stream how to handle specific protocols/encodings. For example, the&nbsp;<code class="literal">http</code>&nbsp;wrapper knows how to translate a URL into an&nbsp;<code class="literal">HTTP/1.0</code>&nbsp;request for a file on a remote server. There are many wrappers built into PHP by default (See&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.php" target="_blank">Supported Protocols and Wrappers</a>), and additional, custom wrappers may be added either within a PHP script using&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-wrapper-register.php" target="_blank">stream_wrapper_register()</a></span>, or directly from an extension. Because any variety of wrapper may be added to PHP, there is no set limit on what can be done with them. To access the list of currently registered wrappers, use&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-get-wrappers.php" target="_blank">stream_get_wrappers()</a></span>.</p>
<p class="para">A stream is referenced as:&nbsp;<code class="parameter">scheme</code>://<code class="parameter">target</code></p>
<ul class="itemizedlist">
    <li class="listitem"><span class="simpara"><code class="parameter">scheme</code>(string) - The name of the wrapper to be used. Examples include: file, http, https, ftp, ftps, compress.zlib, compress.bz2, and php. See&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.php" target="_blank">Supported Protocols and Wrappers</a>&nbsp;for a list of PHP built-in wrappers. If no wrapper is specified, the function default is used (typically&nbsp;<code class="literal">file</code>://).</span></li>
    <li class="listitem"><span class="simpara"><code class="parameter">target</code>&nbsp;- Depends on the wrapper used. For filesystem related streams this is typically a path and filename of the desired file. For network related streams this is typically a hostname, often with a path appended. Again, see&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.php" target="_blank">Supported Protocols and Wrappers</a>&nbsp;for a description of targets for built-in streams.</span></li>
</ul>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/stream.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/stream.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/stream.filters.php" target="_blank">Stream Filters</a></li>
    <li><a href="https://www.php.net/manual/en/stream.contexts.php" target="_blank">Stream Contexts</a></li>
    <li><a href="https://www.php.net/manual/en/stream.errors.php" target="_blank">Stream Errors</a></li>
    <li><a href="https://www.php.net/manual/en/stream.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.php-user-filter.php" target="_blank">php_user_filter</a>&nbsp;— The php_user_filter class</li>
    <li><a href="https://www.php.net/manual/en/class.streamwrapper.php" target="_blank">streamWrapper</a>&nbsp;— The streamWrapper class</li>
    <li><a href="https://www.php.net/manual/en/ref.stream.php" target="_blank">Stream Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Swoole',
                'lesson_order' => 135,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Swoole is a high-performance networking framework using an event-driven, asynchronous, non-blocking I/O model. It can be used to develop high-performance, scalable, concurrent TCP, UDP, Unix socket, HTTP, Websocket services. To get started, please check the&nbsp;<a class="link external" href="https://www.swoole.co.uk/docs/" target="_blank">»&nbsp;Swoole Docs</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/swoole.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/swoole.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.swoole-funcs.php" target="_blank">Swoole Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.swoole-async.php" target="_blank">Swoole\Async</a>&nbsp;— The Swoole\Async class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-atomic.php" target="_blank">Swoole\Atomic</a>&nbsp;— The Swoole\Atomic class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-buffer.php" target="_blank">Swoole\Buffer</a>&nbsp;— The Swoole\Buffer class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-channel.php" target="_blank">Swoole\Channel</a>&nbsp;— The Swoole\Channel class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-client.php" target="_blank">Swoole\Client</a>&nbsp;— The Swoole\Client class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-connection-iterator.php" target="_blank">Swoole\Connection\Iterator</a>&nbsp;— The Swoole\Connection\Iterator class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-coroutine.php" target="_blank">Swoole\Coroutine</a>&nbsp;— The Swoole\Coroutine class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-event.php" target="_blank">Swoole\Event</a>&nbsp;— The Swoole\Event class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-exception.php" target="_blank">Swoole\Exception</a>&nbsp;— The Swoole\Exception class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-http-client.php" target="_blank">Swoole\Http\Client</a>&nbsp;— The Swoole\Http\Client class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-http-request.php" target="_blank">Swoole\Http\Request</a>&nbsp;— The Swoole\Http\Request class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-http-response.php" target="_blank">Swoole\Http\Response</a>&nbsp;— The Swoole\Http\Response class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-http-server.php" target="_blank">Swoole\Http\Server</a>&nbsp;— The Swoole\Http\Server class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-lock.php" target="_blank">Swoole\Lock</a>&nbsp;— The Swoole\Lock class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-mmap.php" target="_blank">Swoole\Mmap</a>&nbsp;— The Swoole\Mmap class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-mysql.php" target="_blank">Swoole\MySQL</a>&nbsp;— The Swoole\MySQL class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-mysql-exception.php" target="_blank">Swoole\MySQL\Exception</a>&nbsp;— The Swoole\MySQL\Exception class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-process.php" target="_blank">Swoole\Process</a>&nbsp;— The Swoole\Process class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-redis-server.php" target="_blank">Swoole\Redis\Server</a>&nbsp;— The Swoole\Redis\Server class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-serialize.php" target="_blank">Swoole\Serialize</a>&nbsp;— The Swoole\Serialize class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-server.php" target="_blank">Swoole\Server</a>&nbsp;— The Swoole\Server class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-table.php" target="_blank">Swoole\Table</a>&nbsp;— The Swoole\Table class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-timer.php" target="_blank">Swoole\Timer</a>&nbsp;— The Swoole\Timer class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-websocket-frame.php" target="_blank">Swoole\WebSocket\Frame</a>&nbsp;— The Swoole\WebSocket\Frame class</li>
    <li><a href="https://www.php.net/manual/en/class.swoole-websocket-server.php" target="_blank">Swoole\WebSocket\Server</a>&nbsp;— The Swoole\WebSocket\Server class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Tidy',
                'lesson_order' => 136,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Tidy is a binding for the Tidy HTML clean and repair utility which allows you to not only clean and otherwise manipulate HTML, XHTML, and XML documents, but also traverse the document tree, including ones with embedded scripting languages such as PHP or ASP within them using object-oriented constructs.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/tidy.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/tidy.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/tidy.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.tidy.php" target="_blank">tidy</a>&nbsp;— The tidy class</li>
    <li><a href="https://www.php.net/manual/en/class.tidynode.php" target="_blank">tidyNode</a>&nbsp;— The tidyNode class</li>
    <li><a href="https://www.php.net/manual/en/ref.tidy.php" target="_blank">Tidy Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Tokenizer',
                'lesson_order' => 137,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The tokenizer functions provide an interface to the PHP tokenizer embedded in the Zend Engine. Using these functions you may write your own PHP source analyzing or modification tools without having to deal with the language specification at the lexical level.</p>
<p class="para">See also the&nbsp;<a class="link" href="https://www.php.net/manual/en/tokens.php" target="_blank">appendix about tokens</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/tokenizer.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/tokenizer.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/tokenizer.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.phptoken.php" target="_blank">PhpToken</a>&nbsp;— The PhpToken class</li>
    <li><a href="https://www.php.net/manual/en/ref.tokenizer.php" target="_blank">Tokenizer Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - URLs',
                'lesson_order' => 138,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Dealing with URL strings: encoding, decoding and parsing.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/url.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/url.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.url.php" target="_blank">URL Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - V8js - V8 Javascript Enginer Integration',
                'lesson_order' => 139,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>This extension embeds the&nbsp;<a class="link external" href="http://code.google.com/p/v8/" target="_blank">»&nbsp;V8 Javascript Engine</a> into PHP.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/v8js.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/v8js.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.v8js.php" target="_blank">V8Js</a>&nbsp;— The V8Js class</li>
    <li><a href="https://www.php.net/manual/en/class.v8jsexception.php" target="_blank">V8JsException</a>&nbsp;— The V8JsException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Yaml - YAML Data Serialization',
                'lesson_order' => 140,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>This extension implements the&nbsp;<a class="link external" href="http://www.yaml.org/" target="_blank">»&nbsp;YAML Ain't Markup Language (YAML)</a>&nbsp;data serialization standard. Parsing and emiting are handled by the&nbsp;<a class="link external" href="http://pyyaml.org/wiki/LibYAML" target="_blank">»&nbsp;LibYAML library</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/yaml.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/yaml.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/yaml.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/yaml.callbacks.php" target="_blank">Callbacks</a></li>
    <li><a href="https://www.php.net/manual/en/ref.yaml.php" target="_blank">Yaml Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Yaf - Yet Another Framework',
                'lesson_order' => 141,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The&nbsp;<code class="literal">Yet Another Framework</code>&nbsp;(<abbr>Yaf</abbr>) extension is a PHP framework that is used to develop web applications.</p>
<p class="para">A simple Yaf benchmark can be found at&nbsp;<a class="link external" href="http://www.laruence.com/2011/12/02/2333.html" target="_blank">»&nbsp;Yaf Performance</a>.</p>
<p class="para">For a quick start guide, please refer to the&nbsp;<a class="link" href="https://www.php.net/manual/en/yaf.tutorials.php" target="_blank">Tutorials</a>&nbsp;section.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/yaf.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/yaf.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/yaf.tutorials.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/yaf.appconfig.php" target="_blank">Application Configuration</a></li>
    <li><a href="https://www.php.net/manual/en/class.yaf-application.php" target="_blank">Yaf_Application</a>&nbsp;— The Yaf_Application class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-bootstrap-abstract.php" target="_blank">Yaf_Bootstrap_Abstract</a>&nbsp;— The Yaf_Bootstrap_Abstract class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-dispatcher.php" target="_blank">Yaf_Dispatcher</a>&nbsp;— The Yaf_Dispatcher class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-config-abstract.php" target="_blank">Yaf_Config_Abstract</a>&nbsp;— The Yaf_Config_Abstract class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-config-ini.php" target="_blank">Yaf_Config_Ini</a>&nbsp;— The Yaf_Config_Ini class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-config-simple.php" target="_blank">Yaf_Config_Simple</a>&nbsp;— The Yaf_Config_Simple class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-controller-abstract.php" target="_blank">Yaf_Controller_Abstract</a>&nbsp;— The Yaf_Controller_Abstract class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-action-abstract.php" target="_blank">Yaf_Action_Abstract</a>&nbsp;— The Yaf_Action_Abstract class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-view-interface.php" target="_blank">Yaf_View_Interface</a>&nbsp;— The Yaf_View_Interface class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-view-simple.php" target="_blank">Yaf_View_Simple</a>&nbsp;— The Yaf_View_Simple class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-loader.php" target="_blank">Yaf_Loader</a>&nbsp;— The Yaf_Loader class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-plugin-abstract.php" target="_blank">Yaf_Plugin_Abstract</a>&nbsp;— The Yaf_Plugin_Abstract class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-registry.php" target="_blank">Yaf_Registry</a>&nbsp;— The Yaf_Registry class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-request-abstract.php" target="_blank">Yaf_Request_Abstract</a>&nbsp;— The Yaf_Request_Abstract class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-request-http.php" target="_blank">Yaf_Request_Http</a>&nbsp;— The Yaf_Request_Http class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-request-simple.php" target="_blank">Yaf_Request_Simple</a>&nbsp;— The Yaf_Request_Simple class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-response-abstract.php" target="_blank">Yaf_Response_Abstract</a>&nbsp;— The Yaf_Response_Abstract class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-route-interface.php" target="_blank">Yaf_Route_Interface</a>&nbsp;— The Yaf_Route_Interface class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-route-map.php" target="_blank">Yaf_Route_Map</a>&nbsp;— The Yaf_Route_Map class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-route-regex.php" target="_blank">Yaf_Route_Regex</a>&nbsp;— The Yaf_Route_Regex class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-route-rewrite.php" target="_blank">Yaf_Route_Rewrite</a>&nbsp;— The Yaf_Route_Rewrite class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-router.php" target="_blank">Yaf_Router</a>&nbsp;— The Yaf_Router class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-route-simple.php" target="_blank">Yaf_Route_Simple</a>&nbsp;— The Yaf_Route_Simple class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-route-static.php" target="_blank">Yaf_Route_Static</a>&nbsp;— The Yaf_Route_Static class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-route-supervar.php" target="_blank">Yaf_Route_Supervar</a>&nbsp;— The Yaf_Route_Supervar class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-session.php" target="_blank">Yaf_Session</a>&nbsp;— The Yaf_Session class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception.php" target="_blank">Yaf_Exception</a>&nbsp;— The Yaf_Exception class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception-typeerror.php" target="_blank">Yaf_Exception_TypeError</a>&nbsp;— The Yaf_Exception_TypeError class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception-startuperror.php" target="_blank">Yaf_Exception_StartupError</a>&nbsp;— The Yaf_Exception_StartupError class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception-dispatchfailed.php" target="_blank">Yaf_Exception_DispatchFailed</a>&nbsp;— The Yaf_Exception_DispatchFailed class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception-routerfailed.php" target="_blank">Yaf_Exception_RouterFailed</a>&nbsp;— The Yaf_Exception_RouterFailed class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed.php" target="_blank">Yaf_Exception_LoadFailed</a>&nbsp;— The Yaf_Exception_LoadFailed class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-module.php" target="_blank">Yaf_Exception_LoadFailed_Module</a>&nbsp;— The Yaf_Exception_LoadFailed_Module class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-controller.php" target="_blank">Yaf_Exception_LoadFailed_Controller</a>&nbsp;— The Yaf_Exception_LoadFailed_Controller class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-action.php" target="_blank">Yaf_Exception_LoadFailed_Action</a>&nbsp;— The Yaf_Exception_LoadFailed_Action class</li>
    <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-view.php" target="_blank">Yaf_Exception_LoadFailed_View</a>&nbsp;— The Yaf_Exception_LoadFailed_View class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Yaconf',
                'lesson_order' => 142,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para"><code class="literal">Yet Another Configurations Container</code>&nbsp;(<abbr>Yaconf</abbr>) is a configurations container, it parses INI files, and store the result in PHP when PHP is started, the result lives with the whole PHP lifecycle.</p>
<p class="para">Yaconf stores all configurations as interned string or immutable array, which means they are not refcounted-able, thus when you retrieving configurations from yaconf, it could be considered as zero-copy, very fast.</p>
<p class="para">Yaconf supports sections and sections inheritance in INI files. if PHP is built as non-ZTS build, Yaconf also supports automatically reloading after INI files are changed.</p>
<p class="para">Yaconf requires PHP 7.0 or greater.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/yaconf.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/yaconf.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.yaconf.php" target="_blank">Yaconf</a>&nbsp;— The Yaconf class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Taint',
                'lesson_order' => 143,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Taint is an extension, which is used for detecting XSS codes(tainted string). And also can be used to spot sql injection vulnerabilities, and shell inject, etc.</p>
<p class="para">When taint is enabled, if you pass a tainted string (comes from $_GET, $_POST or $_COOKIE) to some functions, taint will warn you about that.</p>
<div id="example-3973" class="example">
    <p><strong>Example #1&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.taint.php" target="_blank">Taint()</a></span>example</strong></p>
    <div class="example-contents">
        <div class="phpcode"><code>&lt;?php<br>$a&nbsp;=&nbsp;trim($_GET['a']);<br><br>$file_name&nbsp;=&nbsp;'/tmp'&nbsp;.&nbsp;&nbsp;$a;<br>$output&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;"Welcome,&nbsp;{$a}&nbsp;!!!";<br>$var&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;"output";<br>$sql&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;"Select&nbsp;*&nbsp;&nbsp;from&nbsp;"&nbsp;.&nbsp;$a;<br>$sql&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.=&nbsp;"ooxx";<br><br>echo&nbsp;$output;<br><br>print&nbsp;$$var;<br><br>include($file_name);<br><br>mysql_query($sql);<br>?&gt;</code></div>
    </div>
    <div class="example-contents">
        <p>The above example will output something similar to:</p>
    </div>
    <div class="example-contents screen">
        <div class="cdata">
<pre>Warning: main() [function.echo]: Attempt to echo a string that might be tainted

Warning: main() [function.echo]: Attempt to print a string that might be tainted

Warning: include() [function.include]: File path contains data that might be tainted

Warning: mysql_query() [function.mysql-query]: SQL statement contains data that might be tainted</pre>
        </div>
    </div>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/taint.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/taint.detail.php" target="_blank">More Details</a></li>
    <li><a href="https://www.php.net/manual/en/ref.taint.php" target="_blank">Taint Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Basic Extensions - Data Structures',
                'lesson_order' => 144,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Efficient data structures for PHP 7, provided as an alternative to the&nbsp;<span class="type">array</span>.</p>
<p class="para">See&nbsp;<a class="link external" href="https://medium.com/p/9dda7af674cd" target="_blank">»&nbsp;this blog post</a>&nbsp;for benchmarks, discussion and frequently asked questions.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ds.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ds.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ds.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.ds-collection.php" target="_blank">Collection</a>&nbsp;— The Collection interface</li>
    <li><a href="https://www.php.net/manual/en/class.ds-hashable.php" target="_blank">Hashable</a>&nbsp;— The Hashable interface</li>
    <li><a href="https://www.php.net/manual/en/class.ds-sequence.php" target="_blank">Sequence</a>&nbsp;— The Sequence interface</li>
    <li><a href="https://www.php.net/manual/en/class.ds-vector.php" target="_blank">Vector</a>&nbsp;— The Vector class</li>
    <li><a href="https://www.php.net/manual/en/class.ds-deque.php" target="_blank">Deque</a>&nbsp;— The Deque class</li>
    <li><a href="https://www.php.net/manual/en/class.ds-map.php" target="_blank">Map</a>&nbsp;— The Map class</li>
    <li><a href="https://www.php.net/manual/en/class.ds-pair.php" target="_blank">Pair</a>&nbsp;— The Pair class</li>
    <li><a href="https://www.php.net/manual/en/class.ds-set.php" target="_blank">Set</a>&nbsp;— The Set class</li>
    <li><a href="https://www.php.net/manual/en/class.ds-stack.php" target="_blank">Stack</a>&nbsp;— The Stack class</li>
    <li><a href="https://www.php.net/manual/en/class.ds-queue.php" target="_blank">Queue</a>&nbsp;— The Queue class</li>
    <li><a href="https://www.php.net/manual/en/class.ds-priorityqueue.php" target="_blank">PriorityQueue</a>&nbsp;— The PriorityQueue class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - cURL - Client URL Library',
                'lesson_order' => 145,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>PHP supports libcurl, a library created by Daniel Stenberg, that allows you to connect and communicate to many different types of servers with many different types of protocols. libcurl currently supports the http, https, ftp, gopher, telnet, dict, file, and ldap protocols. libcurl also supports HTTPS certificates, HTTP POST, HTTP PUT, FTP uploading (this can also be done with PHP's ftp extension), HTTP form based upload, proxies, cookies, and user+password authentication.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/curl.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/curl.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/curl.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.curl.php" target="_blank">cURL Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.curlhandle.php" target="_blank">CurlHandle</a>&nbsp;— The CurlHandle class</li>
    <li><a href="https://www.php.net/manual/en/class.curlmultihandle.php" target="_blank">CurlMultiHandle</a>&nbsp;— The CurlMultiHandle class</li>
    <li><a href="https://www.php.net/manual/en/class.curlsharehandle.php" target="_blank">CurlShareHandle</a>&nbsp;— The CurlShareHandle class</li>
    <li><a href="https://www.php.net/manual/en/class.curlfile.php" target="_blank">CURLFile</a>&nbsp;— The CURLFile class</li>
    <li><a href="https://www.php.net/manual/en/class.curlstringfile.php" target="_blank">CURLStringFile</a>&nbsp;— The CURLStringFile class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - Event',
                'lesson_order' => 146,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This is an extension to efficiently schedule I/O, time and signal based events using the best I/O notification mechanism available for specific platform. This is a port of libevent to the PHP infrastructure.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">Note, Windows support introduced in&nbsp;<code class="literal">event-1.9.0</code>&nbsp;.</p>
</blockquote>
<p class="para">Version&nbsp;<em class="emphasis">1.0.0</em>&nbsp;introduces new object-oriented API (breaking backwards compatibility), and support of libevent 2+ including HTTP, DNS, OpenSSL and the event listener.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">Note,&nbsp;<code class="literal">event-1.0.0</code>&nbsp;and greater is not compatible with previous versions.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/event.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/event.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/event.flags.php" target="_blank">Event flags</a></li>
    <li><a href="https://www.php.net/manual/en/event.persistence.php" target="_blank">About event persistence</a></li>
    <li><a href="https://www.php.net/manual/en/event.callbacks.php" target="_blank">Event callbacks</a></li>
    <li><a href="https://www.php.net/manual/en/event.constructing.signal.events.php" target="_blank">Constructing signal events</a></li>
    <li><a href="https://www.php.net/manual/en/class.event.php" target="_blank">Event</a>&nbsp;— The Event class</li>
    <li><a href="https://www.php.net/manual/en/class.eventbase.php" target="_blank">EventBase</a>&nbsp;— The EventBase class</li>
    <li><a href="https://www.php.net/manual/en/class.eventbuffer.php" target="_blank">EventBuffer</a>&nbsp;— The EventBuffer class</li>
    <li><a href="https://www.php.net/manual/en/class.eventbufferevent.php" target="_blank">EventBufferEvent</a>&nbsp;— The EventBufferEvent class</li>
    <li><a href="https://www.php.net/manual/en/eventbufferevent.about.callbacks.php" target="_blank">About buffer event callbacks</a></li>
    <li><a href="https://www.php.net/manual/en/class.eventconfig.php" target="_blank">EventConfig</a>&nbsp;— The EventConfig class</li>
    <li><a href="https://www.php.net/manual/en/class.eventdnsbase.php" target="_blank">EventDnsBase</a>&nbsp;— The EventDnsBase class</li>
    <li><a href="https://www.php.net/manual/en/class.eventhttp.php" target="_blank">EventHttp</a>&nbsp;— The EventHttp class</li>
    <li><a href="https://www.php.net/manual/en/class.eventhttpconnection.php" target="_blank">EventHttpConnection</a>&nbsp;— The EventHttpConnection class</li>
    <li><a href="https://www.php.net/manual/en/class.eventhttprequest.php" target="_blank">EventHttpRequest</a>&nbsp;— The EventHttpRequest class</li>
    <li><a href="https://www.php.net/manual/en/class.eventlistener.php" target="_blank">EventListener</a>&nbsp;— The EventListener class</li>
    <li><a href="https://www.php.net/manual/en/class.eventsslcontext.php" target="_blank">EventSslContext</a>&nbsp;— The EventSslContext class</li>
    <li><a href="https://www.php.net/manual/en/class.eventutil.php" target="_blank">EventUtil</a>&nbsp;— The EventUtil class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - FTP',
                'lesson_order' => 147,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The functions in this extension implement client access to files servers speaking the File Transfer Protocol (FTP) as defined in&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc959" target="_blank">»&nbsp;http://www.faqs.org/rfcs/rfc959</a>. This extension is meant for detailed access to an FTP server providing a wide range of control to the executing script. If you only wish to read from or write to a file on an FTP server, consider using the&nbsp;<a class="link" href="https://www.php.net/manual/en/wrappers.ftp.php" target="_blank"><code class="literal">ftp://</code>&nbsp;wrapper</a>&nbsp;with the&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.filesystem.php" target="_blank">filesystem functions</a>&nbsp;which provide a simpler and more intuitive interface.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ftp.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ftp.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ftp.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.ftp.php" target="_blank">FTP Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.ftp-connection.php" target="_blank">FTP\Connection</a>&nbsp;— The FTP\Connection class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - Gearman',
                'lesson_order' => 148,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para"><a class="link external" href="https://gearman.org/" target="_blank">»&nbsp;Gearman</a>&nbsp;is a generic application framework for farming out work to multiple machines or processes. It allows applications to complete tasks in parallel, to load balance processing, and to call functions between languages. The framework can be used in a variety of applications, from high-availability web sites to the transport of database replication events.</p>
<p class="para">This extension provides classes for writing Gearman clients and workers.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/gearman.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/gearman.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/gearman.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.gearmanclient.php" target="_blank">GearmanClient</a>&nbsp;— The GearmanClient class</li>
    <li><a href="https://www.php.net/manual/en/class.gearmanjob.php" target="_blank">GearmanJob</a>&nbsp;— The GearmanJob class</li>
    <li><a href="https://www.php.net/manual/en/class.gearmantask.php" target="_blank">GearmanTask</a>&nbsp;— The GearmanTask class</li>
    <li><a href="https://www.php.net/manual/en/class.gearmanworker.php" target="_blank">GearmanWorker</a>&nbsp;— The GearmanWorker class</li>
    <li><a href="https://www.php.net/manual/en/class.gearmanexception.php" target="_blank">GearmanException</a>&nbsp;— The GearmanException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - LDAP - Lightweight Directory Access Protocol',
                'lesson_order' => 149,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">LDAP is the Lightweight Directory Access Protocol, and is a protocol used to access "Directory Servers". The Directory is a special kind of database that holds information in a tree structure.</p>
<p class="para">The concept is similar to your hard disk directory structure, except that in this context, the root directory is "The world" and the first level subdirectories are "countries". Lower levels of the directory structure contain entries for companies, organisations or places, while yet lower still we find directory entries for people, and perhaps equipment or documents.</p>
<p class="para">To refer to a file in a subdirectory on your hard disk, you might use something like:</p>
<pre class="literallayout">   /usr/local/myapp/docs
</pre>
<p class="para">The forwards slash marks each division in the reference, and the sequence is read from left to right.</p>
<p class="para">The equivalent to the fully qualified file reference in LDAP is the "distinguished name", referred to simply as "dn". An example dn might be:</p>
<pre class="literallayout">   cn=John Smith,ou=Accounts,o=My Company,c=US
</pre>
<p class="para">The comma marks each division in the reference, and the sequence is read from right to left. You would read this dn as:</p>
<pre class="literallayout">   country = US
organization = My Company
organizationalUnit = Accounts
commonName = John Smith
</pre>
<p class="para">In the same way as there are no hard rules about how you organise the directory structure of a hard disk, a directory server manager can set up any structure that is meaningful for the purpose. However, there are some conventions that are used. The message is that you can not write code to access a directory server unless you know something about its structure, any more than you can use a database without some knowledge of what is available.</p>
<p class="para">Lots of information about LDAP can be found at</p>
<ul class="itemizedlist">
    <li class="listitem">
        <p class="para"><a class="link external" href="https://wiki.mozilla.org/Directory" target="_blank">»&nbsp;Mozilla</a></p>
    </li>
    <li class="listitem">
        <p class="para"><a class="link external" href="http://www.openldap.org/" target="_blank">»&nbsp;OpenLDAP Project</a></p>
    </li>
    <li class="listitem">
        <p class="para">Internet Engineering Taskforce RFCs&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfcrfc4510" target="_blank">»&nbsp;4510</a>&nbsp;through&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfcrfc4519" target="_blank">»&nbsp;4519</a>.</p>
    </li>
</ul>
<p class="para">The Netscape SDK contains a helpful&nbsp;<a class="link external" href="https://wiki.mozilla.org/Mozilla_LDAP_SDK_Programmer%27s_Guide" target="_blank">»&nbsp;Programmer's Guide</a>&nbsp;in HTML format.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ldap.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ldap.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ldap.using.php" target="_blank">Using the PHP LDAP calls</a></li>
    <li><a href="https://www.php.net/manual/en/ldap.controls.php" target="_blank">LDAP controls</a></li>
    <li><a href="https://www.php.net/manual/en/ldap.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.ldap.php" target="_blank">LDAP Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.ldap-connection.php" target="_blank">LDAP\Connection</a>&nbsp;— The LDAP\Connection class</li>
    <li><a href="https://www.php.net/manual/en/class.ldap-result.php" target="_blank">LDAP\Result</a>&nbsp;— The LDAP\Result class</li>
    <li><a href="https://www.php.net/manual/en/class.ldap-result-entry.php" target="_blank">LDAP\ResultEntry</a>&nbsp;— The LDAP\ResultEntry class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - Memcache',
                'lesson_order' => 150,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Memcache module provides handy procedural and object-oriented interface to memcached, highly effective caching daemon, which was especially designed to decrease database load in dynamic web applications.</p>
<p class="para">The Memcache module also provides a&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.session.php" target="_blank">session</a>&nbsp;handler (<code class="literal">memcache</code>).</p>
<p class="para">More information about memcached can be found at&nbsp;<a class="link external" href="http://www.memcached.org/" target="_blank">»&nbsp;http://www.memcached.org/</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/memcache.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/memcache.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/memcache.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.memcache.php" target="_blank">Memcache</a>&nbsp;— The Memcache class</li>
    <li><a href="https://www.php.net/manual/en/ref.memcache.php" target="_blank">Memcache Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - Memcached',
                'lesson_order' => 151,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para"><a class="link external" href="http://www.memcached.org/" target="_blank">»&nbsp;memcached</a>&nbsp;is a high-performance, distributed memory object caching system, generic in nature, but intended for use in speeding up dynamic web applications by alleviating database load.</p>
<p class="para">This extension uses the libmemcached library to provide an API for communicating with memcached servers. It also provides a&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.session.php" target="_blank">session</a>&nbsp;handler (<code class="literal">memcached</code>).</p>
<p class="para">Information about libmemcached can be found at&nbsp;<a class="link external" href="http://libmemcached.org/libMemcached.html" target="_blank">»&nbsp;http://libmemcached.org/libMemcached.html</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/memcached.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/memcached.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/memcached.expiration.php" target="_blank">Expiration Times</a></li>
    <li><a href="https://www.php.net/manual/en/memcached.callbacks.php" target="_blank">Callbacks</a></li>
    <li><a href="https://www.php.net/manual/en/memcached.sessions.php" target="_blank">Sessions support</a></li>
    <li><a href="https://www.php.net/manual/en/class.memcached.php" target="_blank">Memcached</a>&nbsp;— The Memcached class</li>
    <li><a href="https://www.php.net/manual/en/class.memcachedexception.php" target="_blank">MemcachedException</a>&nbsp;— The MemcachedException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - mqseries',
                'lesson_order' => 152,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="simpara">This extension aims to provide an interface for communicating with IBMs WebSphere MQ series Queue managers.</p>
<p class="simpara">The interface mimics the C-API client interface of WebSphere MQ Series as close as possible. Using the same naming conventions and possibilities of the C-API. In order to understand the workings of this extension some level of understanding the C-API is required.</p>
<p class="simpara">For MQ-options, MQ-structures, MQ-results etc. please read the WebSphere MQ Application Programming Guide and WebSphere MQ Application Programming Reference.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/mqseries.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/mqseries.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.mqseries.php" target="_blank">mqseries Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - Network',
                'lesson_order' => 153,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Provides various networking functions.</p>
<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/network.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/network.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.network.php" target="_blank">Network Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - RDP - RDPtool',
                'lesson_order' => 154,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The PECL/rrd extension provides bindings to the RRDtool C library. RRDtool is the open source industry standard, high performance data logging and graphing system for time series data.</p>
<p class="para">The RRDtool homepage is&nbsp;<a class="link external" href="https://www.mrtg.org/rrdtool/" target="_blank">»&nbsp;http://www.mrtg.org/rrdtool/</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/rrd.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/rrd.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/rrd.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.rrd.php" target="_blank">RRD Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.rrdcreator.php" target="_blank">RRDCreator</a>&nbsp;— The RRDCreator class</li>
    <li><a href="https://www.php.net/manual/en/class.rrdgraph.php" target="_blank">RRDGraph</a>&nbsp;— The RRDGraph class</li>
    <li><a href="https://www.php.net/manual/en/class.rrdupdater.php" target="_blank">RRDUpdater</a>&nbsp;— The RRDUpdater class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - SNMP',
                'lesson_order' => 155,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.</p>
<p class="para">As it is a wrapper around the underlying Net-SNMP library, all basic concepts are the same and the PHP functions change their behaviour depending on the Net-SNMP configuration files and environment variables.</p>
<p class="para">More information about Net-SNMP can be found at&nbsp;<a class="link external" href="http://www.net-snmp.org/" target="_blank">»&nbsp;http://www.net-snmp.org/</a></p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/snmp.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/snmp.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.snmp.php" target="_blank">SNMP Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.snmp.php" target="_blank">SNMP</a>&nbsp;— The SNMP class</li>
    <li><a href="https://www.php.net/manual/en/class.snmpexception.php" target="_blank">SNMPException</a>&nbsp;— The SNMPException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - Sockets',
                'lesson_order' => 156,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The socket extension implements a low-level interface to the socket communication functions based on the popular BSD sockets, providing the possibility to act as a socket server as well as a client.</p>
<p class="para">For a more generic client-side socket interface, see&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-socket-client.php" target="_blank">stream_socket_client()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-socket-server.php" target="_blank">stream_socket_server()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fsockopen.php" target="_blank">fsockopen()</a></span>, and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.pfsockopen.php" target="_blank">pfsockopen()</a></span>.</p>
<p class="para">When using these functions, it is important to remember that while many of them have identical names to their C counterparts, they often have different declarations. Please be sure to read the descriptions to avoid confusion.</p>
<p class="para">Those unfamiliar with socket programming can find a lot of useful material in the appropriate Unix man pages, and there is a great deal of tutorial information on socket programming in C on the web, much of which can be applied, with slight modifications, to socket programming in PHP. The&nbsp;<a class="link external" href="http://www.unixguide.net/network/socketfaq/" target="_blank">»&nbsp;Unix Socket FAQ</a>&nbsp;might be a good start.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/sockets.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/sockets.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/sockets.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/sockets.errors.php" target="_blank">Socket Errors</a></li>
    <li><a href="https://www.php.net/manual/en/ref.sockets.php" target="_blank">Socket Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.socket.php" target="_blank">Socket</a>&nbsp;— The Socket class</li>
    <li><a href="https://www.php.net/manual/en/class.addressinfo.php" target="_blank">AddressInfo</a>&nbsp;— The AddressInfo class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - SSH2 - Secure Shell2',
                'lesson_order' => 157,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Bindings to the&nbsp;<a class="link external" href="http://libssh2.org/" target="_blank">»&nbsp;libssh2</a>&nbsp;library which provide access to resources (shell, remote exec, tunneling, file transfer) on a remote machine using a secure cryptographic transport.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ssh2.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ssh2.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.ssh2.php" target="_blank">SSH2 Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - Stomp - Stomp Client',
                'lesson_order' => 158,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>This extension allows php applications to communicate with any Stomp compliant Message Brokers through easy object-oriented and procedural interfaces.&nbsp;<a class="link external" href="https://stomp.github.io/" target="_blank">»&nbsp;Stomp official site</a></p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/stomp.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/stomp.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.stomp.php" target="_blank">Stomp Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.stomp.php" target="_blank">Stomp</a>&nbsp;— The Stomp class</li>
    <li><a href="https://www.php.net/manual/en/class.stompframe.php" target="_blank">StompFrame</a>&nbsp;— The StompFrame class</li>
    <li><a href="https://www.php.net/manual/en/class.stompexception.php" target="_blank">StompException</a>&nbsp;— The StompException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - SVM - Support Vector Machine',
                'lesson_order' => 159,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>LibSVM is an efficient solver for SVM classification and regression problems. The svm extension wraps this in a PHP interface for easy use in PHP scripts.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/svm.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/svm.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.svm.php" target="_blank">SVM</a>&nbsp;— The SVM class</li>
    <li><a href="https://www.php.net/manual/en/class.svmmodel.php" target="_blank">SVMModel</a>&nbsp;— The SVMModel class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - SVN - Subversion',
                'lesson_order' => 160,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This extension implements PHP bindings for&nbsp;<a class="link external" href="http://subversion.apache.org/" target="_blank">»&nbsp;Subversion</a>&nbsp;(SVN), a version control system, allowing PHP scripts to communicate with SVN repositories and working copies without direct command line calls to the&nbsp;<var class="filename">svn</var>&nbsp;executable.</p>
<div class="alert alert-danger">
    <strong class="warning">Warning</strong>
    <p class="simpara">This extension is&nbsp;<em class="emphasis">EXPERIMENTAL</em>. The behaviour of this extension including the names of its functions and any other documentation surrounding this extension may change without notice in a future release of PHP. This extension should be used at your own risk.</p>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/svn.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/svn.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.svn.php" target="_blank">SVN Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - TCP - TCP Wrappers',
                'lesson_order' => 161,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The TCP wrappers provides a classical Unix mechanism which has been designed to check if the remote client is able to connect from the given IP address.</p>

<hr>

<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/tcpwrap.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/tcpwrap.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.tcpwrap.php" target="_blank">TCP Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - Varnish',
                'lesson_order' => 162,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>Varnish Cache is an open source, state of the art web application accelerator. The extension makes it possible to interact with a running varnish instance through TCP socket or shared memory.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/varnish.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/varnish.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/varnish.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.varnishadmin.php" target="_blank">VarnishAdmin</a>&nbsp;— The VarnishAdmin class</li>
    <li><a href="https://www.php.net/manual/en/class.varnishstat.php" target="_blank">VarnishStat</a>&nbsp;— The VarnishStat class</li>
    <li><a href="https://www.php.net/manual/en/class.varnishlog.php" target="_blank">VarnishLog</a>&nbsp;— The VarnishLog class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - YAZ',
                'lesson_order' => 163,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This extension offers a PHP interface to the&nbsp;<span class="productname">YAZ</span>&nbsp;toolkit that implements the&nbsp;<a class="link external" href="http://www.loc.gov/z3950/agency/" target="_blank">»&nbsp;Z39.50 Protocol for Information Retrieval</a>. With this extension you can easily implement a Z39.50 origin (client) that searches or scans Z39.50 targets (servers) in parallel.</p>
<p class="para">The module hides most of the complexity of Z39.50 so it should be fairly easy to use. It supports persistent stateless connections very similar to those offered by the various RDB APIs that are available for PHP. This means that sessions are stateless but shared among users, thus saving the connect and initialize phase steps in most cases.</p>
<p class="para"><span class="productname">YAZ</span>&nbsp;is available at&nbsp;<a class="link external" href="http://www.indexdata.dk/yaz/" target="_blank">»&nbsp;http://www.indexdata.dk/yaz/</a>. You can find news information, example scripts, etc. for this extension at&nbsp;<a class="link external" href="http://www.indexdata.dk/phpyaz/" target="_blank">»&nbsp;http://www.indexdata.dk/phpyaz/</a>.</p>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">This extension has been moved to the&nbsp;<a class="link external" href="https://pecl.php.net/">»&nbsp;PECL</a>&nbsp;repository and is no longer bundled with PHP as of PHP 5.0.0.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/yaz.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/yaz.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/yaz.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.yaz.php" target="_blank">YAZ Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - 0MQ messaging - ZMQ',
                'lesson_order' => 164,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">"ØMQ is a software library that lets you quickly design and implement a fast message-based application." --0MQ Website</p>
<p class="para">For more information about 0MQ, see&nbsp;<a class="link external" href="http://zeromq.org/" target="_blank">»&nbsp;http://zeromq.org/</a>.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/zmq.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/class.zmq.php" target="_blank">ZMQ</a>&nbsp;— The ZMQ class</li>
    <li><a href="https://www.php.net/manual/en/class.zmqcontext.php" target="_blank">ZMQContext</a>&nbsp;— The ZMQContext class</li>
    <li><a href="https://www.php.net/manual/en/class.zmqsocket.php" target="_blank">ZMQSocket</a>&nbsp;— The ZMQSocket class</li>
    <li><a href="https://www.php.net/manual/en/class.zmqpoll.php" target="_blank">ZMQPoll</a>&nbsp;— The ZMQPoll class</li>
    <li><a href="https://www.php.net/manual/en/class.zmqdevice.php" target="_blank">ZMQDevice</a>&nbsp;— The ZMQDevice class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Other Services - 0MQ messaging - ZooKeeper',
                'lesson_order' => 165,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This extension uses libzookeeper library to provide API for communicating with ZooKeeper service.</p>
<p class="para">ZooKeeper is an Apache project that enables centralized service for maintaining configuration information, naming, providing distributed synchronization, and providing group services.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/zookeeper.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/zookeeper.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.zookeeper.php" target="_blank">ZooKeeper Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.zookeeper.php" target="_blank">Zookeeper</a>&nbsp;— The Zookeeper class</li>
    <li><a href="https://www.php.net/manual/en/class.zookeeperconfig.php" target="_blank">ZookeeperConfig</a>&nbsp;— The ZookeeperConfig class</li>
    <li><a href="https://www.php.net/manual/en/class.zookeeperexception.php" target="_blank">ZookeeperException</a>&nbsp;— The ZookeeperException class</li>
    <li><a href="https://www.php.net/manual/en/class.zookeeperauthenticationexception.php" target="_blank">ZookeeperAuthenticationException</a>&nbsp;— The ZookeeperAuthenticationException class</li>
    <li><a href="https://www.php.net/manual/en/class.zookeeperconnectionexception.php" target="_blank">ZookeeperConnectionException</a>&nbsp;— The ZookeeperConnectionException class</li>
    <li><a href="https://www.php.net/manual/en/class.zookeepermarshallingexception.php" target="_blank">ZookeeperMarshallingException</a>&nbsp;— The ZookeeperMarshallingException class</li>
    <li><a href="https://www.php.net/manual/en/class.zookeepernonodeexception.php" target="_blank">ZookeeperNoNodeException</a>&nbsp;— The ZookeeperNoNodeException class</li>
    <li><a href="https://www.php.net/manual/en/class.zookeeperoperationtimeoutexception.php" target="_blank">ZookeeperOperationTimeoutException</a>&nbsp;— The ZookeeperOperationTimeoutException class</li>
    <li><a href="https://www.php.net/manual/en/class.zookeepersessionexception.php" target="_blank">ZookeeperSessionException</a>&nbsp;— The ZookeeperSessionException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Search Engine Extensions - Solr - Apache Solr',
                'lesson_order' => 166,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The Solr extension allows you to communicate effectively with the Apache Solr Server in PHP.</p>
<p class="para">The Solr extension is an extremely fast, light-weight, feature-rich library that allows PHP developers to communicate effectively with Solr server instances.</p>
<p class="para">Versions 1.x of The PECL Extension supports Apache Solr Server 1.3-3.x</p>
<p class="para">Versions 2.x of The PECL Extension supports Apache Solr Server 4.0+</p>
<p class="para">There are built-in tools to add documents and make updates to the solr server.</p>
<p class="para">It also contains tools that allows you to build advanced queries to the server when searching for documents.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/solr.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/solr.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.solr.php" target="_blank">Solr Functions</a></li>
    <li><a href="https://www.php.net/manual/en/solr.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.solrutils.php" target="_blank">SolrUtils</a>&nbsp;— The SolrUtils class</li>
    <li><a href="https://www.php.net/manual/en/class.solrinputdocument.php" target="_blank">SolrInputDocument</a>&nbsp;— The SolrInputDocument class</li>
    <li><a href="https://www.php.net/manual/en/class.solrdocument.php" target="_blank">SolrDocument</a>&nbsp;— The SolrDocument class</li>
    <li><a href="https://www.php.net/manual/en/class.solrdocumentfield.php" target="_blank">SolrDocumentField</a>&nbsp;— The SolrDocumentField class</li>
    <li><a href="https://www.php.net/manual/en/class.solrobject.php" target="_blank">SolrObject</a>&nbsp;— The SolrObject class</li>
    <li><a href="https://www.php.net/manual/en/class.solrclient.php" target="_blank">SolrClient</a>&nbsp;— The SolrClient class</li>
    <li><a href="https://www.php.net/manual/en/class.solrresponse.php" target="_blank">SolrResponse</a>&nbsp;— The SolrResponse class</li>
    <li><a href="https://www.php.net/manual/en/class.solrqueryresponse.php" target="_blank">SolrQueryResponse</a>&nbsp;— The SolrQueryResponse class</li>
    <li><a href="https://www.php.net/manual/en/class.solrupdateresponse.php" target="_blank">SolrUpdateResponse</a>&nbsp;— The SolrUpdateResponse class</li>
    <li><a href="https://www.php.net/manual/en/class.solrpingresponse.php" target="_blank">SolrPingResponse</a>&nbsp;— The SolrPingResponse class</li>
    <li><a href="https://www.php.net/manual/en/class.solrgenericresponse.php" target="_blank">SolrGenericResponse</a>&nbsp;— The SolrGenericResponse class</li>
    <li><a href="https://www.php.net/manual/en/class.solrparams.php" target="_blank">SolrParams</a>&nbsp;— The SolrParams class</li>
    <li><a href="https://www.php.net/manual/en/class.solrmodifiableparams.php" target="_blank">SolrModifiableParams</a>&nbsp;— The SolrModifiableParams class</li>
    <li><a href="https://www.php.net/manual/en/class.solrquery.php" target="_blank">SolrQuery</a>&nbsp;— The SolrQuery class</li>
    <li><a href="https://www.php.net/manual/en/class.solrdismaxquery.php" target="_blank">SolrDisMaxQuery</a>&nbsp;— The SolrDisMaxQuery class</li>
    <li><a href="https://www.php.net/manual/en/class.solrcollapsefunction.php" target="_blank">SolrCollapseFunction</a>&nbsp;— The SolrCollapseFunction class</li>
    <li><a href="https://www.php.net/manual/en/class.solrexception.php" target="_blank">SolrException</a>&nbsp;— The SolrException class</li>
    <li><a href="https://www.php.net/manual/en/class.solrclientexception.php" target="_blank">SolrClientException</a>&nbsp;— The SolrClientException class</li>
    <li><a href="https://www.php.net/manual/en/class.solrserverexception.php" target="_blank">SolrServerException</a>&nbsp;— The SolrServerException class</li>
    <li><a href="https://www.php.net/manual/en/class.solrillegalargumentexception.php" target="_blank">SolrIllegalArgumentException</a>&nbsp;— The SolrIllegalArgumentException class</li>
    <li><a href="https://www.php.net/manual/en/class.solrillegaloperationexception.php" target="_blank">SolrIllegalOperationException</a>&nbsp;— The SolrIllegalOperationException class</li>
    <li><a href="https://www.php.net/manual/en/class.solrmissingmandatoryparameterexception.php" target="_blank">SolrMissingMandatoryParameterException</a>&nbsp;— The SolrMissingMandatoryParameterException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Server Specific Extensions - Apache',
                'lesson_order' => 167,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>These functions are only available when running PHP as an Apache module.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/apache.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/apache.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.apache.php" target="_blank">Apache Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Server Specific Extensions - FastCGI Process Manager',
                'lesson_order' => 168,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">FPM (FastCGI Process Manager) is a primary PHP FastCGI implementation containing some features (mostly) useful for heavy-loaded sites.</p>
<p class="para">This SAPI is bundled with PHP.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/fpm.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/fpm.observability.php" target="_blank">Observability</a></li>
    <li><a href="https://www.php.net/manual/en/ref.fpm.php" target="_blank">FPM Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Session Extensions - Sessions - Session Handling',
                'lesson_order' => 169,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Session support in PHP consists of a way to preserve certain data across subsequent accesses.</p>
<p class="para">A visitor accessing your web site is assigned a unique id, the so-called session id. This is either stored in a cookie on the user side or is propagated in the URL.</p>
<p class="para">The session support allows you to store data between requests in the&nbsp;<var class="varname"><a class="classname" href="https://www.php.net/manual/en/reserved.variables.session.php" target="_blank">$_SESSION</a></var>&nbsp;superglobal array. When a visitor accesses your site, PHP will check automatically (if&nbsp;<a class="link" href="https://www.php.net/manual/en/session.configuration.php#ini.session.auto-start" target="_blank">session.auto_start</a>&nbsp;is set to 1) or on your request (explicitly through&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.session-start.php" target="_blank">session_start()</a></span>) whether a specific session id has been sent with the request. If this is the case, the prior saved environment is recreated.</p>
<div class="alert alert-warning">
    <strong class="caution">Caution</strong>
    <p class="para">If you turn on&nbsp;<a class="link" href="https://www.php.net/manual/en/session.configuration.php#ini.session.auto-start" target="_blank">session.auto_start</a>&nbsp;then the only way to put objects into your sessions is to load its class definition using&nbsp;<a class="link" href="https://www.php.net/manual/en/ini.core.php#ini.auto-prepend-file" target="_blank">auto_prepend_file</a>&nbsp;in which you load the class definition else you will have to&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.serialize.php" target="_blank">serialize()</a></span>&nbsp;your object and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.unserialize.php" target="_blank">unserialize()</a></span>&nbsp;it afterwards.</p>
</div>
<p class="para"><var class="varname"><a class="classname" href="https://www.php.net/manual/en/reserved.variables.session.php" target="_blank">$_SESSION</a></var>&nbsp;(and all registered variables) are serialized internally by PHP using the serialization handler specified by the&nbsp;<a class="link" href="https://www.php.net/manual/en/session.configuration.php#ini.session.serialize-handler" target="_blank">session.serialize_handler</a>&nbsp;ini setting, after the request finishes. Registered variables which are undefined are marked as being not defined. On subsequent accesses, these are not defined by the session module unless the user defines them later.</p>
<div class="alert alert-danger">
    <strong class="warning">Warning</strong>
    <p class="para">Because session data is serialized,&nbsp;<span class="type">resource</span>&nbsp;variables cannot be stored in the session.</p>
    <p class="para">Serialize handlers (<code class="literal">php</code>&nbsp;and&nbsp;<code class="literal">php_binary</code>) inherit register_globals limitations. Therefore, numeric index or string index contains special characters (<code class="literal">|</code>&nbsp;and&nbsp;<code class="literal">!</code>) cannot be used. Using these will end up with errors at script shutdown.&nbsp;<code class="literal">php_serialize</code>&nbsp;does not have such limitations.</p>
</div>
<blockquote class="blockquote">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">Please note when working with sessions that a record of a session is not created until a variable has been registered using the&nbsp;<span class="function"><strong>session_register()</strong></span>&nbsp;function or by adding a new key to the&nbsp;<var class="varname"><a class="classname" href="https://www.php.net/manual/en/reserved.variables.session.php" target="_blank">$_SESSION</a></var>&nbsp;superglobal array. This holds true regardless of if a session has been started using the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.session-start.php" target="_blank">session_start()</a></span>&nbsp;function.</p>
</blockquote>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/session.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/session.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/session.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/session.upload-progress.php" target="_blank">Session Upload Progress</a></li>
    <li><a href="https://www.php.net/manual/en/session.security.php" target="_blank">Sessions and Security</a></li>
    <li><a href="https://www.php.net/manual/en/ref.session.php" target="_blank">Session Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.sessionhandler.php" target="_blank">SessionHandler</a>&nbsp;— The SessionHandler class</li>
    <li><a href="https://www.php.net/manual/en/class.sessionhandlerinterface.php" target="_blank">SessionHandlerInterface</a>&nbsp;— The SessionHandlerInterface class</li>
    <li><a href="https://www.php.net/manual/en/class.sessionidinterface.php" target="_blank">SessionIdInterface</a>&nbsp;— The SessionIdInterface interface</li>
    <li><a href="https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php" target="_blank">SessionUpdateTimestampHandlerInterface</a>&nbsp;— The SessionUpdateTimestampHandlerInterface interface</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Text Processing - CommonMark',
                'lesson_order' => 170,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This extension provides access to the reference implementation of CommonMark, a rationalized version of Markdown syntax with a specification.</p>
<p class="formalpara">&nbsp;</p>
<h5 class="title">Parsing:</h5>
<p class="para">The CommonMark extension provides a simple parsing API:</p>
<div class="methodsynopsis dc-description"><span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/function.commonmark-parse.php" target="_blank">CommonMark\Parse</a></span>(<span class="methodparam"><span class="type">string</span>&nbsp;<code class="parameter">$content</code></span>,&nbsp;<span class="methodparam"><span class="type">int</span>&nbsp;<code class="parameter">$options</code><span class="initializer">&nbsp;= ?</span></span>):&nbsp;<span class="type"><a class="type CommonMark\Node" href="https://www.php.net/manual/en/class.commonmark-node.php" target="_blank">CommonMark\Node</a></span></div>
<p class="formalpara">&nbsp;</p>
<h5 class="title">Rendering:</h5>
<p class="para">The CommonMark extension provides simple rendering API that supports multiple formats:</p>
<div class="methodsynopsis dc-description"><span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/function.commonmark-render.php" target="_blank">CommonMark\Render</a></span>(<span class="methodparam"><span class="type"><a class="type CommonMark\Node" href="https://www.php.net/manual/en/class.commonmark-node.php" target="_blank">CommonMark\Node</a></span>&nbsp;<code class="parameter">$node</code></span>,&nbsp;<span class="methodparam"><span class="type">int</span>&nbsp;<code class="parameter">$options</code><span class="initializer">&nbsp;= ?</span></span>,&nbsp;<span class="methodparam"><span class="type">int</span>&nbsp;<code class="parameter">$width</code><span class="initializer">&nbsp;= ?</span></span>):&nbsp;<span class="type">string</span></div>
<div class="methodsynopsis dc-description"><span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/function.commonmark-render-html.php" target="_blank">CommonMark\Render\HTML</a></span>(<span class="methodparam"><span class="type"><a class="type CommonMark\Node" href="https://www.php.net/manual/en/class.commonmark-node.php" target="_blank">CommonMark\Node</a></span>&nbsp;<code class="parameter">$node</code></span>,&nbsp;<span class="methodparam"><span class="type">int</span>&nbsp;<code class="parameter">$options</code><span class="initializer">&nbsp;= ?</span></span>):&nbsp;<span class="type">string</span></div>
<div class="methodsynopsis dc-description"><span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/function.commonmark-render-xml.php" target="_blank">CommonMark\Render\XML</a></span>(<span class="methodparam"><span class="type"><a class="type CommonMark\Node" href="https://www.php.net/manual/en/class.commonmark-node.php" target="_blank">CommonMark\Node</a></span>&nbsp;<code class="parameter">$node</code></span>,&nbsp;<span class="methodparam"><span class="type">int</span>&nbsp;<code class="parameter">$options</code><span class="initializer">&nbsp;= ?</span></span>):&nbsp;<span class="type">string</span></div>
<div class="methodsynopsis dc-description"><span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/function.commonmark-render-man.php" target="_blank">CommonMark\Render\Man</a></span>(<span class="methodparam"><span class="type"><a class="type CommonMark\Node" href="https://www.php.net/manual/en/class.commonmark-node.php" target="_blank">CommonMark\Node</a></span>&nbsp;<code class="parameter">$node</code></span>,&nbsp;<span class="methodparam"><span class="type">int</span>&nbsp;<code class="parameter">$options</code><span class="initializer">&nbsp;= ?</span></span>,&nbsp;<span class="methodparam"><span class="type">int</span>&nbsp;<code class="parameter">$width</code><span class="initializer">&nbsp;= ?</span></span>):&nbsp;<span class="type">string</span></div>
<div class="methodsynopsis dc-description"><span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/function.commonmark-render-latex.php" target="_blank">CommonMark\Render\Latex</a></span>(<span class="methodparam"><span class="type"><a class="type CommonMark\Node" href="https://www.php.net/manual/en/class.commonmark-node.php" target="_blank">CommonMark\Node</a></span>&nbsp;<code class="parameter">$node</code></span>,&nbsp;<span class="methodparam"><span class="type">int</span>&nbsp;<code class="parameter">$options</code><span class="initializer">&nbsp;= ?</span></span>,&nbsp;<span class="methodparam"><span class="type">int</span>&nbsp;<code class="parameter">$width</code><span class="initializer">&nbsp;= ?</span></span>):&nbsp;<span class="type">string</span></div>
<p class="formalpara">&nbsp;</p>
<h5 class="title">AST:</h5>
<p class="para">The CommonMark extension implements visitation for CommonMark\Node objects:</p>
<div class="methodsynopsis dc-description"><span class="modifier">public</span>&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/commonmark-node.accept.php" target="_blank">CommonMark\Node::accept</a></span>(<span class="methodparam"><span class="type"><a class="type CommonMark\Interfaces\IVisitor" href="https://www.php.net/manual/en/class.commonmark-interfaces-ivisitor.php" target="_blank">CommonMark\Interfaces\IVisitor</a></span>&nbsp;<code class="parameter">$visitor</code></span>):&nbsp;<span class="type"><span class="type void">void</span></span></div>
<p class="formalpara">&nbsp;</p>
<h5 class="title">CQL:</h5>
<p class="para">The CommonMark extension provides an interface to CQL, CommonMark Query Language:</p>
<div class="constructorsynopsis dc-description"><span class="modifier">public</span>&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/commonmark-cql.construct.php" target="_blank">CommonMark\CQL::__construct</a></span>(<span class="methodparam"><span class="type">string</span>&nbsp;<code class="parameter">$query</code></span>)</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/cmark.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-document.php" target="_blank">CommonMark\Node\Document</a>&nbsp;— Document concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-heading.php" target="_blank">CommonMark\Node\Heading</a>&nbsp;— Heading concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-paragraph.php" target="_blank">CommonMark\Node\Paragraph</a>&nbsp;— Paragraph concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-blockquote.php" target="_blank">CommonMark\Node\BlockQuote</a>&nbsp;— BlockQuote concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-bulletlist.php" target="_blank">CommonMark\Node\BulletList</a>&nbsp;— BulletList concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-orderedlist.php" target="_blank">CommonMark\Node\OrderedList</a>&nbsp;— OrderedList concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-item.php" target="_blank">CommonMark\Node\Item</a>&nbsp;— Item concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-text.php" target="_blank">CommonMark\Node\Text</a>&nbsp;— Text concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-text-strong.php" target="_blank">CommonMark\Node\Text\Strong</a>&nbsp;— Strong concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-text-emphasis.php" target="_blank">CommonMark\Node\Text\Emphasis</a>&nbsp;— Emphasis concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-thematicbreak.php" target="_blank">CommonMark\Node\ThematicBreak</a>&nbsp;— ThematicBreak concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-softbreak.php" target="_blank">CommonMark\Node\SoftBreak</a>&nbsp;— SoftBreak concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-linebreak.php" target="_blank">CommonMark\Node\LineBreak</a>&nbsp;— LineBreak concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-code.php" target="_blank">CommonMark\Node\Code</a>&nbsp;— Code concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-codeblock.php" target="_blank">CommonMark\Node\CodeBlock</a>&nbsp;— CodeBlock concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-htmlblock.php" target="_blank">CommonMark\Node\HTMLBlock</a>&nbsp;— HTMLBlock concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-htmlinline.php" target="_blank">CommonMark\Node\HTMLInline</a>&nbsp;— HTMLInline concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-image.php" target="_blank">CommonMark\Node\Image</a>&nbsp;— Image concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-link.php" target="_blank">CommonMark\Node\Link</a>&nbsp;— Link concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-customblock.php" target="_blank">CommonMark\Node\CustomBlock</a>&nbsp;— CustomBlock concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node-custominline.php" target="_blank">CommonMark\Node\CustomInline</a>&nbsp;— CustomInline concrete CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-node.php" target="_blank">CommonMark\Node</a>&nbsp;— Abstract CommonMark\Node</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-interfaces-ivisitor.php" target="_blank">CommonMark\Interfaces\IVisitor</a>&nbsp;— The CommonMark\Interfaces\IVisitor interface</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-interfaces-ivisitable.php" target="_blank">CommonMark\Interfaces\IVisitable</a>&nbsp;— The CommonMark\Interfaces\IVisitable interface</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-parser.php" target="_blank">CommonMark\Parser</a>&nbsp;— The CommonMark\Parser class</li>
    <li><a href="https://www.php.net/manual/en/class.commonmark-cql.php" target="_blank">CommonMark\CQL</a>&nbsp;— The CommonMark\CQL class</li>
    <li><a href="https://www.php.net/manual/en/ref.cmark.php" target="_blank">CommonMark Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Text Processing - Parle - Parsing and Lexing',
                'lesson_order' => 171,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The parle extension provides general purpose lexing and parsing facilities. The implementation is based on&nbsp;<a class="link external" href="http://www.benhanson.net/" target="_blank">»&nbsp;Ben Hanson</a>'s libraries and requires a&nbsp;<a class="link external" href="http://en.cppreference.com/w/cpp/compiler_support" target="_blank">»&nbsp;C++14</a>&nbsp;capable compiler. The lexer is based on the regex matching, the parser is LALR(1). Lexers and parsers are generated on the fly and can be used immediately after they've been finalized. Parle deals with parsing and lexing, the appropriate data structures representation and processing are the implementer's task. Serialization and code generation are not supported by the extension, yet.</p>
<p class="para">Lexer analysis is a process of splitting a character sequence into a list of lexemes. The lexeme list can be then used for the syntax analysis against a formal grammar. These operations are also known as lexing and parsing. This documentation doesn't aim to provide an exhaustive information on lexing and parsing. Good information in this regard is available on the numerous resources on the net. Several usage examples are included, to show the functionality. The extension is useful for PHP programmers both willing to learn or to utilize parsing and lexing. State machines and grammar parsing don't have to be implemented manually, these complex tasks are taken away by parle. Thanks to that, the development can be focused on the actual problem solving.</p>
<p class="para">The common use case for parle is, when a data format is too complex to be handled by the regex matching with PCRE. The practical application is herewith wide. Be it a specific data format, a behavior modification of existing functions, even an own programming language and beyond. The helper methods such as&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parle-lexer.dump.php" target="_blank">Parle\Lexer::dump()</a></span>&nbsp;to inspect the generated state machine, or&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parle-parser.dump.php" target="_blank">Parle\Parser::dump()</a></span>&nbsp;to inspect the generated grammar, are useful. The method&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parle-parser.trace.php" target="_blank">Parle\Parser::trace()</a></span>&nbsp;can also be used to track the parsing operation.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/parle.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/parle.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/parle.pattern.matching.php" target="_blank">Pattern matching</a>&nbsp;— Parle pattern matching</li>
    <li><a href="https://www.php.net/manual/en/parle.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.parle-lexer.php" target="_blank">Parle\Lexer</a>&nbsp;— The Parle\Lexer class</li>
    <li><a href="https://www.php.net/manual/en/class.parle-rlexer.php" target="_blank">Parle\RLexer</a>&nbsp;— The Parle\RLexer class</li>
    <li><a href="https://www.php.net/manual/en/class.parle-parser.php" target="_blank">Parle\Parser</a>&nbsp;— The Parle\Parser class</li>
    <li><a href="https://www.php.net/manual/en/class.parle-rparser.php" target="_blank">Parle\RParser</a>&nbsp;— The Parle\RParser class</li>
    <li><a href="https://www.php.net/manual/en/class.parle-stack.php" target="_blank">Parle\Stack</a>&nbsp;— The Parle\Stack class</li>
    <li><a href="https://www.php.net/manual/en/class.parle-token.php" target="_blank">Parle\Token</a>&nbsp;— The Parle\Token class</li>
    <li><a href="https://www.php.net/manual/en/class.parle-errorinfo.php" target="_blank">Parle\ErrorInfo</a>&nbsp;— The Parle\ErrorInfo class</li>
    <li><a href="https://www.php.net/manual/en/class.parle-lexerexception.php" target="_blank">Parle\LexerException</a>&nbsp;— The Parle\LexerException class</li>
    <li><a href="https://www.php.net/manual/en/class.parle-parserexception.php" target="_blank">Parle\ParserException</a>&nbsp;— The Parle\ParserException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Text Processing - PCRE - Regualr Expressions (Perl-Compatible)',
                'lesson_order' => 172,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The syntax for patterns used in these functions closely resembles Perl. The expression must be enclosed in the delimiters, a forward slash (/), for example. Delimiters can be any non-alphanumeric, non-whitespace ASCII character except the backslash (\) and the null byte. If the delimiter character has to be used in the expression itself, it needs to be escaped by backslash. Perl-style (), {}, [], and &lt;&gt; matching delimiters may also be used. See&nbsp;<a class="link" href="https://www.php.net/manual/en/reference.pcre.pattern.syntax.php" target="_blank">Pattern Syntax</a>&nbsp;for detailed explanation.</p>
<p class="para">The ending delimiter may be followed by various modifiers that affect the matching. See&nbsp;<a class="link" href="https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php" target="_blank">Pattern Modifiers</a>.</p>
<blockquote class="note">
    <p><strong class="note">Note</strong>:</p>
    <p class="para">This extension maintains a global per-thread cache of compiled regular expressions (up to 4096).</p>
</blockquote>
<div class="warning"><strong class="warning">Warning</strong>
    <p class="para">You should be aware of some limitations of PCRE. Read&nbsp;<a class="link external" href="http://www.pcre.org/pcre.txt" target="_blank">»&nbsp;http://www.pcre.org/pcre.txt</a>&nbsp;for more info.</p>
</div>
<p class="para">The PCRE library is a set of functions that implement regular expression pattern matching using the same syntax and semantics as Perl 5, with just a few differences (see below). The current implementation corresponds to Perl 5.005.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/pcre.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/pcre.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/pcre.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/pcre.pattern.php" target="_blank">PCRE Patterns</a></li>
    <li><a href="https://www.php.net/manual/en/ref.pcre.php" target="_blank">PCRE Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Text Processing - ssdeep - ssdeep Fuzzy Hashing',
                'lesson_order' => 173,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">ssdeep is a utility for creating and comparing fuzzy hashes.</p>
<p class="para">Fuzzy hashing can match signatures which have "...sequences of identical bytes in the same order, although bytes in between these sequences may be different in both content and length". (<a class="link external" href="http://ssdeep.sourceforge.net/" target="_blank">»&nbsp; ssdeep project page</a>)</p>
<p class="para">This extension provides functions for creating and comparing fuzzy hashes.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ssdeep.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/ssdeep.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.ssdeep.php" target="_blank">ssdeep Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Text Processing - Strings',
                'lesson_order' => 174,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">These functions all manipulate strings in various ways. Some more specialized sections can be found in the regular expression and&nbsp;<a class="link" href="https://www.php.net/manual/en/book.url.php" target="_blank">URL handling</a>&nbsp;sections.</p>
<p class="para">For information on how strings behave, especially with regard to usage of single quotes, double quotes, and escape sequences, see the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.types.string.php" target="_blank">Strings</a>&nbsp;entry in the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.types.php" target="_blank">Types</a>&nbsp;section of the manual.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
<li><a href="https://www.php.net/manual/en/strings.setup.php" target="_blank">Installing/Configuring</a></li>
<li><a href="https://www.php.net/manual/en/string.constants.php" target="_blank">Predefined Constants</a></li>
<li><a href="https://www.php.net/manual/en/ref.strings.php" target="_blank">String Functions</a></li>
<li><a href="https://www.php.net/manual/en/changelog.strings.php" target="_blank">Changelog</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Variables and Types Related Extensions - Arrays',
                'lesson_order' => 175,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">These functions allow you to interact with and manipulate arrays in various ways. Arrays are essential for storing, managing, and operating on sets of variables.</p>
<p class="para">Simple and multi-dimensional arrays are supported, and may be either user created or created by another function. There are specific database handling functions for populating arrays from database queries, and several functions return arrays.</p>
<p class="para">Please see the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.types.array.php" target="_blank">Arrays</a>&nbsp;section of the manual for a detailed explanation of how arrays are implemented and used in PHP. See also&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.array.php" target="_blank">Array operators</a>&nbsp;for other ways how to manipulate the arrays.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/array.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/array.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/array.sorting.php" target="_blank">Sorting Arrays</a></li>
    <li><a href="https://www.php.net/manual/en/ref.array.php" target="_blank">Array Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Variables and Types Related Extensions - Classes/Object Information',
                'lesson_order' => 176,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">These functions allow you to obtain information about classes and instance objects. You can obtain the name of the class to which an object belongs, as well as its member properties and methods. Using these functions, you can find out not only the class membership of an object, but also its parentage (i.e. what class is the object class extending).</p>
<p class="para">Please see the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.types.object.php" target="_blank">Objects</a>&nbsp;section of the manual for a detailed explanation of how classes and objects are implemented and used in PHP.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/classobj.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/classobj.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/classobj.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.classobj.php" target="_blank">Classes/Object Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Variables and Types Related Extensions - Filter - Data Filtering',
                'lesson_order' => 177,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This extension filters data by either validating or sanitizing it. This is especially useful when the data source contains unknown (or foreign) data, like user supplied input. For example, this data may come from an HTML form.</p>
<p class="para">There are two main types of filtering:&nbsp;<em class="emphasis">validation</em>&nbsp;and&nbsp;<em class="emphasis">sanitization</em>.</p>
<p class="para"><a class="link" href="https://www.php.net/manual/en/filter.filters.validate.php" target="_blank">Validation</a>&nbsp;is used to validate or check if the data meets certain qualifications. For example, passing in&nbsp;<strong><code>FILTER_VALIDATE_EMAIL</code></strong>&nbsp;will determine if the data is a valid email address, but will not change the data itself.</p>
<p class="para"><a class="link" href="https://www.php.net/manual/en/filter.filters.sanitize.php" target="_blank">Sanitization</a>&nbsp;will sanitize the data, so it may alter it by removing undesired characters. For example, passing in&nbsp;<strong><code>FILTER_SANITIZE_EMAIL</code></strong>&nbsp;will remove characters that are inappropriate for an email address to contain. That said, it does not validate the data.</p>
<p class="para"><em class="emphasis">Flags</em>&nbsp;are optionally used with both validation and sanitization to tweak behaviour according to need. For example, passing in&nbsp;<strong><code>FILTER_FLAG_PATH_REQUIRED</code></strong>&nbsp;while filtering an&nbsp;<abbr title="Uniform Resource Locator">URL</abbr>&nbsp;will require a path (like&nbsp;<code class="literal">/foo</code>&nbsp;in&nbsp;<code class="literal">http://example.org/foo</code>) to be present.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/filter.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/filter.filters.php" target="_blank">Types of filters</a></li>
    <li><a href="https://www.php.net/manual/en/filter.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/filter.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.filter.php" target="_blank">Filter Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Variables and Types Related Extensions - Function Handling',
                'lesson_order' => 178,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>These functions all handle various operations involved in working with functions.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/funchand.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/funchand.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.funchand.php" target="_blank">Function handling Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Variables and Types Related Extensions - Reflection',
                'lesson_order' => 179,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">PHP comes with a complete reflection API that adds the ability to introspect classes, interfaces, functions, methods and extensions. Additionally, the reflection API offers ways to retrieve doc comments for functions, classes and methods.</p>
<p class="para">Please note that certain parts of the internal&nbsp;<abbr title="Application Programming Interface">API</abbr>&nbsp;are missing the necessary code to work with the Reflection extension. E.g., an internal PHP class might be missing reflection data for properties. These few cases are considered bugs, however, so they should be discovered and fixed.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/reflection.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/reflection.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/reflection.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/reflection.extending.php" target="_blank">Extending</a></li>
    <li><a href="https://www.php.net/manual/en/class.reflection.php" target="_blank">Reflection</a>&nbsp;— The Reflection class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionclass.php" target="_blank">ReflectionClass</a>&nbsp;— The ReflectionClass class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionclassconstant.php" target="_blank">ReflectionClassConstant</a>&nbsp;— The ReflectionClassConstant class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionenum.php" target="_blank">ReflectionEnum</a>&nbsp;— The ReflectionEnum class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionenumunitcase.php" target="_blank">ReflectionEnumUnitCase</a>&nbsp;— The ReflectionEnumUnitCase class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionenumbackedcase.php" target="_blank">ReflectionEnumBackedCase</a>&nbsp;— The ReflectionEnumBackedCase class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionzendextension.php" target="_blank">ReflectionZendExtension</a>&nbsp;— The ReflectionZendExtension class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionextension.php" target="_blank">ReflectionExtension</a>&nbsp;— The ReflectionExtension class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionfunction.php" target="_blank">ReflectionFunction</a>&nbsp;— The ReflectionFunction class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionfunctionabstract.php" target="_blank">ReflectionFunctionAbstract</a>&nbsp;— The ReflectionFunctionAbstract class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionmethod.php" target="_blank">ReflectionMethod</a>&nbsp;— The ReflectionMethod class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionnamedtype.php" target="_blank">ReflectionNamedType</a>&nbsp;— The ReflectionNamedType class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionobject.php" target="_blank">ReflectionObject</a>&nbsp;— The ReflectionObject class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionparameter.php" target="_blank">ReflectionParameter</a>&nbsp;— The ReflectionParameter class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionproperty.php" target="_blank">ReflectionProperty</a>&nbsp;— The ReflectionProperty class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectiontype.php" target="_blank">ReflectionType</a>&nbsp;— The ReflectionType class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionuniontype.php" target="_blank">ReflectionUnionType</a>&nbsp;— The ReflectionUnionType class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectiongenerator.php" target="_blank">ReflectionGenerator</a>&nbsp;— The ReflectionGenerator class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionfiber.php" target="_blank">ReflectionFiber</a>&nbsp;— The ReflectionFiber class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionintersectiontype.php" target="_blank">ReflectionIntersectionType</a>&nbsp;— The ReflectionIntersectionType class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionreference.php" target="_blank">ReflectionReference</a>&nbsp;— The ReflectionReference class</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionattribute.php" target="_blank">ReflectionAttribute</a>&nbsp;— The ReflectionAttribute class</li>
    <li><a href="https://www.php.net/manual/en/class.reflector.php" target="_blank">Reflector</a>&nbsp;— The Reflector interface</li>
    <li><a href="https://www.php.net/manual/en/class.reflectionexception.php" target="_blank">ReflectionException</a>&nbsp;— The ReflectionException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Web Services - OAuth',
                'lesson_order' => 180,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>This extension provides OAuth 1.0a consumer and provider bindings. OAuth is an authorization protocol built on top of HTTP which allows applications to securely access data without having to store usernames and passwords.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/oauth.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/oauth.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/oauth.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.oauth.php" target="_blank">OAuth Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.oauth.php" target="_blank">OAuth</a>&nbsp;— The OAuth class</li>
    <li><a href="https://www.php.net/manual/en/class.oauthprovider.php" target="_blank">OAuthProvider</a>&nbsp;— The OAuthProvider class</li>
    <li><a href="https://www.php.net/manual/en/class.oauthexception.php" target="_blank">OAuthException</a>&nbsp;— OAuthException class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Web Services - SOAP',
                'lesson_order' => 181,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The SOAP extension can be used to write SOAP Servers and Clients. It supports subsets of&nbsp;<a class="link external" href="http://www.w3.org/TR/soap11/" target="_blank">»&nbsp;SOAP 1.1</a>,&nbsp;<a class="link external" href="http://www.w3.org/TR/soap12/" target="_blank">»&nbsp;SOAP 1.2</a>&nbsp;and&nbsp;<a class="link external" href="http://www.w3.org/TR/wsdl" target="_blank">»&nbsp;WSDL 1.1</a>&nbsp;specifications.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/soap.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/soap.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/ref.soap.php" target="_blank">SOAP Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.soapclient.php" target="_blank">SoapClient</a>&nbsp;— The SoapClient class</li>
    <li><a href="https://www.php.net/manual/en/class.soapserver.php" target="_blank">SoapServer</a>&nbsp;— The SoapServer class</li>
    <li><a href="https://www.php.net/manual/en/class.soapfault.php" target="_blank">SoapFault</a>&nbsp;— The SoapFault class</li>
    <li><a href="https://www.php.net/manual/en/class.soapheader.php" target="_blank">SoapHeader</a>&nbsp;— The SoapHeader class</li>
    <li><a href="https://www.php.net/manual/en/class.soapparam.php" target="_blank">SoapParam</a>&nbsp;— The SoapParam class</li>
    <li><a href="https://www.php.net/manual/en/class.soapvar.php" target="_blank">SoapVar</a>&nbsp;— The SoapVar class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Web Services - Yar - Yet Another RPC Framework',
                'lesson_order' => 182,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">Yar is a RPC framework which aims to provide a simple and easy way to do communication between PHP applications It has the ability to concurrently call multiple remote services</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/yar.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/yar.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/yar.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.yar-server.php" target="_blank">Yar_Server</a>&nbsp;— The Yar_Server class</li>
    <li><a href="https://www.php.net/manual/en/class.yar-client.php" target="_blank">Yar_Client</a>&nbsp;— The Yar_Client class</li>
    <li><a href="https://www.php.net/manual/en/class.yar-concurrent-client.php" target="_blank">Yar_Concurrent_Client</a>&nbsp;— The Yar_Concurrent_Client class</li>
    <li><a href="https://www.php.net/manual/en/class.yar-server-exception.php" target="_blank">Yar_Server_Exception</a>&nbsp;— The Yar_Server_Exception class</li>
    <li><a href="https://www.php.net/manual/en/class.yar-client-exception.php" target="_blank">Yar_Client_Exception</a>&nbsp;— The Yar_Client_Exception class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Windows Only Extensions - COM - COM and .NET',
                'lesson_order' => 183,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">COM is an acronym for&nbsp;<code class="literal">Component Object Model</code>; it is an object orientated layer (and associated services) on top of DCE RPC (an open standard) and defines a common calling convention that enables code written in any language to call and interoperate with code written in any other language (provided those languages are COM aware). Not only can the code be written in any language, but it need not even be part of the same executable; the code can be loaded from a DLL, be found in another process running on the same machine, or, with DCOM (Distributed COM), be found in another process on a remote machine, all without your code even needing to know where a component resides.</p>
<p class="para">There is a subset of COM known as OLE Automation which comprises a set of COM interfaces that allow loose binding to COM objects, so that they can be introspected and called at run-time without compile-time knowledge of how the object works. The PHP COM extension utilizes the OLE Automation interfaces to allow you to create and call compatible objects from your scripts. Technically speaking, this should really be called the "<code class="literal">OLE Automation Extension for PHP</code>", since not all COM objects are OLE compatible.</p>
<p class="para">Now, why would or should you use COM? COM is one of the main ways to glue applications and components together on the Windows platform; using COM you can launch Microsoft Word, fill in a document template and save the result as a Word document and send it to a visitor of your web site. You can also use COM to perform administrative tasks for your network and to configure your IIS; these are just the most common uses; you can do much more with COM.</p>
<p class="para">Additionally, we support the instantiation and creation of .Net assemblies using the COM interoperability layer provided by Microsoft.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/com.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/com.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/com.error-handling.php" target="_blank">Errors and error handling</a></li>
    <li><a href="https://www.php.net/manual/en/com.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.com.php" target="_blank">com</a>&nbsp;— The com class</li>
    <li><a href="https://www.php.net/manual/en/class.dotnet.php" target="_blank">dotnet</a>&nbsp;— The dotnet class</li>
    <li><a href="https://www.php.net/manual/en/class.variant.php" target="_blank">variant</a>&nbsp;— variant class</li>
    <li><a href="https://www.php.net/manual/en/class.compersisthelper.php" target="_blank">COMPersistHelper</a>&nbsp;— The COMPersistHelper class</li>
    <li><a href="https://www.php.net/manual/en/class.com-exception.php" target="_blank">com_exception</a>&nbsp;— The com_exception class</li>
    <li><a href="https://www.php.net/manual/en/ref.com.php" target="_blank">COM Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'Windows Only Extensions - win32service',
                'lesson_order' => 184,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The win32service extension is a Windows specific extension that allows PHP to communicate with the Service Control Manager to start, stop, register and unregister services, and even allows your PHP scripts to run as a service.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/win32service.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/win32service.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.win32serviceexception.php" target="_blank">Win32ServiceException</a>&nbsp;— The Win32ServiceException class</li>
    <li><a href="https://www.php.net/manual/en/win32service.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.win32service.php" target="_blank">win32service Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'XML Manipulation - DOM - Document Object Model',
                'lesson_order' => 185,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<div id="intro.dom" class="preface">
    <p class="para">The DOM extension allows you to operate on XML documents through the DOM API with PHP.</p>
    <blockquote class="blockquote">
        <p><strong class="note">Note</strong>:</p>
        <p class="para">The DOM extension uses UTF-8 encoding. Use&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.mb-convert-encoding.php" target="_blank">mb_convert_encoding()</a></span>,&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/uconverter.transcode.php" target="_blank">UConverter::transcode()</a></span>, or&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.iconv.php" target="_blank">iconv()</a></span> to handle other encodings.</p>
    </blockquote>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/dom.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/dom.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/dom.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.domattr.php" target="_blank">DOMAttr</a>&nbsp;— The DOMAttr class</li>
    <li><a href="https://www.php.net/manual/en/class.domcdatasection.php" target="_blank">DOMCdataSection</a>&nbsp;— The DOMCdataSection class</li>
    <li><a href="https://www.php.net/manual/en/class.domcharacterdata.php" target="_blank">DOMCharacterData</a>&nbsp;— The DOMCharacterData class</li>
    <li><a href="https://www.php.net/manual/en/class.domchildnode.php" target="_blank">DOMChildNode</a>&nbsp;— The DOMChildNode interface</li>
    <li><a href="https://www.php.net/manual/en/class.domcomment.php" target="_blank">DOMComment</a>&nbsp;— The DOMComment class</li>
    <li><a href="https://www.php.net/manual/en/class.domdocument.php" target="_blank">DOMDocument</a>&nbsp;— The DOMDocument class</li>
    <li><a href="https://www.php.net/manual/en/class.domdocumentfragment.php" target="_blank">DOMDocumentFragment</a>&nbsp;— The DOMDocumentFragment class</li>
    <li><a href="https://www.php.net/manual/en/class.domdocumenttype.php" target="_blank">DOMDocumentType</a>&nbsp;— The DOMDocumentType class</li>
    <li><a href="https://www.php.net/manual/en/class.domelement.php" target="_blank">DOMElement</a>&nbsp;— The DOMElement class</li>
    <li><a href="https://www.php.net/manual/en/class.domentity.php" target="_blank">DOMEntity</a>&nbsp;— The DOMEntity class</li>
    <li><a href="https://www.php.net/manual/en/class.domentityreference.php" target="_blank">DOMEntityReference</a>&nbsp;— The DOMEntityReference class</li>
    <li><a href="https://www.php.net/manual/en/class.domexception.php" target="_blank">DOMException</a>&nbsp;— The DOMException class</li>
    <li><a href="https://www.php.net/manual/en/class.domimplementation.php" target="_blank">DOMImplementation</a>&nbsp;— The DOMImplementation class</li>
    <li><a href="https://www.php.net/manual/en/class.domnamednodemap.php" target="_blank">DOMNamedNodeMap</a>&nbsp;— The DOMNamedNodeMap class</li>
    <li><a href="https://www.php.net/manual/en/class.domnode.php" target="_blank">DOMNode</a>&nbsp;— The DOMNode class</li>
    <li><a href="https://www.php.net/manual/en/class.domnodelist.php" target="_blank">DOMNodeList</a>&nbsp;— The DOMNodeList class</li>
    <li><a href="https://www.php.net/manual/en/class.domnotation.php" target="_blank">DOMNotation</a>&nbsp;— The DOMNotation class</li>
    <li><a href="https://www.php.net/manual/en/class.domparentnode.php" target="_blank">DOMParentNode</a>&nbsp;— The DOMParentNode interface</li>
    <li><a href="https://www.php.net/manual/en/class.domprocessinginstruction.php" target="_blank">DOMProcessingInstruction</a>&nbsp;— The DOMProcessingInstruction class</li>
    <li><a href="https://www.php.net/manual/en/class.domtext.php" target="_blank">DOMText</a>&nbsp;— The DOMText class</li>
    <li><a href="https://www.php.net/manual/en/class.domxpath.php" target="_blank">DOMXPath</a>&nbsp;— The DOMXPath class</li>
    <li><a href="https://www.php.net/manual/en/ref.dom.php" target="_blank">DOM Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'XML Manipulation - libxml',
                'lesson_order' => 186,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<div id="intro.libxml" class="preface">
    <p class="para">These functions/constants are available as of PHP 5.1.0, and the following core extensions rely on this libxml extension:&nbsp;<a class="link" href="https://www.php.net/manual/en/book.dom.php" target="_blank">DOM</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.libxml.php" target="_blank">libxml</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.simplexml.php" target="_blank">SimpleXML</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.soap.php" target="_blank">SOAP</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.wddx.php" target="_blank">WDDX</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xsl.php" target="_blank">XSL</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xml.php" target="_blank">XML</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xmlreader.php" target="_blank">XMLReader</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xmlrpc.php" target="_blank">XMLRPC</a>&nbsp;and&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xmlwriter.php" target="_blank">XMLWriter</a>.</p>
</div>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/libxml.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/libxml.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/class.libxmlerror.php" target="_blank">libXMLError</a>&nbsp;— The libXMLError class</li>
    <li><a href="https://www.php.net/manual/en/ref.libxml.php" target="_blank">libxml Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'XML Manipulation - SimpleXML',
                'lesson_order' => 187,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/simplexml.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/simplexml.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/simplexml.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.simplexmlelement.php" target="_blank">SimpleXMLElement</a>&nbsp;— The SimpleXMLElement class</li>
    <li><a href="https://www.php.net/manual/en/class.simplexmliterator.php" target="_blank">SimpleXMLIterator</a>&nbsp;— The SimpleXMLIterator class</li>
    <li><a href="https://www.php.net/manual/en/ref.simplexml.php" target="_blank">SimpleXML Functions</a></li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'XML Manipulation - XMLDiff — XML diff and merge',
                'lesson_order' => 188,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The extension is able to produce diffs of two XML documents and then to apply the difference to the source document. The diff is a XML document containing copy/insert/delete instruction nodes in human readable format. DOMDocument objects, local files and strings in memory can be processed.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/xmldiff.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/class.xmldiff-base.php" target="_blank">XMLDiff\Base</a>&nbsp;— The XMLDiff\Base class</li>
    <li><a href="https://www.php.net/manual/en/class.xmldiff-dom.php" target="_blank">XMLDiff\DOM</a>&nbsp;— The XMLDiff\DOM class</li>
    <li><a href="https://www.php.net/manual/en/class.xmldiff-memory.php" target="_blank">XMLDiff\Memory</a>&nbsp;— The XMLDiff\Memory class</li>
    <li><a href="https://www.php.net/manual/en/class.xmldiff-file.php" target="_blank">XMLDiff\File</a>&nbsp;— The XMLDiff\File class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'XML Manipulation - XML Parser',
                'lesson_order' => 189,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">XML (eXtensible Markup Language) is a data format for structured document interchange on the Web. It is a standard defined by The World Wide Web consortium (W3C). Information about XML and related technologies can be found at&nbsp;<a class="link external" href="http://www.w3.org/XML/" target="_blank">»&nbsp;http://www.w3.org/XML/</a>.</p>
<p class="para">This PHP extension implements support for James Clark's&nbsp;<span class="productname">expat</span>&nbsp;in PHP. This toolkit lets you parse, but not validate, XML documents. It supports three source&nbsp;<a class="link" href="https://www.php.net/manual/en/xml.encoding.php" target="_blank">character encodings</a>&nbsp;also provided by PHP:&nbsp;<code class="literal">US-ASCII</code>,&nbsp;<code class="literal">ISO-8859-1</code>&nbsp;and&nbsp;<code class="literal">UTF-8</code>.&nbsp;<code class="literal">UTF-16</code>&nbsp;is not supported.</p>
<p class="para">This extension lets you&nbsp;<a class="link" href="https://www.php.net/manual/en/function.xml-parser-create.php" target="_blank">create XML parsers</a>&nbsp;and then define&nbsp;<em class="emphasis">handlers</em>&nbsp;for different XML events. Each XML parser also has a few&nbsp;<a class="link" href="https://www.php.net/manual/en/function.xml-parser-set-option.php" target="_blank">parameters</a> you can adjust.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/xml.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/xml.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/xml.eventhandlers.php" target="_blank">Event Handlers</a></li>
    <li><a href="https://www.php.net/manual/en/xml.case-folding.php" target="_blank">Case Folding</a></li>
    <li><a href="https://www.php.net/manual/en/xml.error-codes.php" target="_blank">Error Codes</a></li>
    <li><a href="https://www.php.net/manual/en/xml.encoding.php" target="_blank">Character Encoding</a></li>
    <li><a href="https://www.php.net/manual/en/xml.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/ref.xml.php" target="_blank">XML Parser Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.xmlparser.php" target="_blank">XmlParser</a>&nbsp;— The XmlParser class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'XML Manipulation - XMLReader',
                'lesson_order' => 190,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">The XMLReader extension is an XML Pull parser. The reader acts as a cursor going forward on the document stream and stopping at each node on the way.</p>
<p class="para">It is important to note that internally, libxml uses the UTF-8 encoding and as such, the encoding of the retrieved contents will always be in UTF-8 encoding.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/xmlreader.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/class.xmlreader.php" target="_blank">XMLReader</a>&nbsp;— The XMLReader class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'XML Manipulation - XMLWriter',
                'lesson_order' => 191,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p class="para">This is the XMLWriter extension. It wraps the libxml xmlWriter API.</p>
<p class="para">This extension represents a writer that provides a non-cached, forward-only means of generating streams or files containing XML data.</p>
<p class="para">This extension can be used in an object-oriented style or a procedural one. Every method documented describes the alternative procedural call.</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/xmlwriter.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/xmlwriter.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/xmlwriter.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.xmlwriter.php" target="_blank">XMLWriter</a>&nbsp;— The XMLWriter class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'XML Manipulation - XSL',
                'lesson_order' => 192,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>The XSL extension implements the XSL standard, performing&nbsp;<a class="link external" href="http://www.w3.org/TR/xslt" target="_blank">»&nbsp;XSLT transformations</a>&nbsp;using the&nbsp;<a class="link external" href="http://xmlsoft.org/XSLT/" target="_blank">»&nbsp;libxslt library</a></p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/xsl.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/xsl.constants.php" target="_blank">Predefined Constants</a></li>
    <li><a href="https://www.php.net/manual/en/xsl.examples.php" target="_blank">Examples</a></li>
    <li><a href="https://www.php.net/manual/en/class.xsltprocessor.php" target="_blank">XSLTProcessor</a>&nbsp;— The XSLTProcessor class</li>
</ul>
HTML,
                'is_active' => 0
            ],
            [
                'course_id' => $course->id,
                'title' => 'GUI Extensions - UI',
                'lesson_order' => 193,
                'topic_id' => $topics['function-reference']->id,
                'content' => <<<'HTML'
<p>This extension wraps libui to provide an OO API for the cross platform development of native look-and-feel user interfaces .</p>

<hr>
<h5>This topic also includes:</h5>
<ul class="chunklist chunklist_set chunklist_children">
    <li><a href="https://www.php.net/manual/en/ui.setup.php" target="_blank">Installing/Configuring</a></li>
    <li><a href="https://www.php.net/manual/en/class.ui-point.php" target="_blank">UI\Point</a>&nbsp;— Represents a position (x,y)</li>
    <li><a href="https://www.php.net/manual/en/class.ui-size.php" target="_blank">UI\Size</a>&nbsp;— Represents dimensions (width, height)</li>
    <li><a href="https://www.php.net/manual/en/class.ui-window.php" target="_blank">UI\Window</a>&nbsp;— Window</li>
    <li><a href="https://www.php.net/manual/en/class.ui-control.php" target="_blank">UI\Control</a>&nbsp;— Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-menu.php" target="_blank">UI\Menu</a>&nbsp;— Menu</li>
    <li><a href="https://www.php.net/manual/en/class.ui-menuitem.php" target="_blank">UI\MenuItem</a>&nbsp;— Menu Item</li>
    <li><a href="https://www.php.net/manual/en/class.ui-area.php" target="_blank">UI\Area</a>&nbsp;— Area</li>
    <li><a href="https://www.php.net/manual/en/class.ui-executor.php" target="_blank">UI\Executor</a>&nbsp;— Execution Scheduler</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-tab.php" target="_blank">UI\Controls\Tab</a>&nbsp;— Tab Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-check.php" target="_blank">UI\Controls\Check</a>&nbsp;— Check Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-button.php" target="_blank">UI\Controls\Button</a>&nbsp;— Button Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-colorbutton.php" target="_blank">UI\Controls\ColorButton</a>&nbsp;— ColorButton Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-label.php" target="_blank">UI\Controls\Label</a>&nbsp;— Label Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-entry.php" target="_blank">UI\Controls\Entry</a>&nbsp;— Entry Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-multilineentry.php" target="_blank">UI\Controls\MultilineEntry</a>&nbsp;— MultilineEntry Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-spin.php" target="_blank">UI\Controls\Spin</a>&nbsp;— Spin Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-slider.php" target="_blank">UI\Controls\Slider</a>&nbsp;— Slider Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-progress.php" target="_blank">UI\Controls\Progress</a>&nbsp;— Progress Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-separator.php" target="_blank">UI\Controls\Separator</a>&nbsp;— Control Separator</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-combo.php" target="_blank">UI\Controls\Combo</a>&nbsp;— Combo Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-editablecombo.php" target="_blank">UI\Controls\EditableCombo</a>&nbsp;— EdiableCombo Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-radio.php" target="_blank">UI\Controls\Radio</a>&nbsp;— Radio Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-picker.php" target="_blank">UI\Controls\Picker</a>&nbsp;— Picker Control</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-form.php" target="_blank">UI\Controls\Form</a>&nbsp;— Control Form (Arrangement)</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-grid.php" target="_blank">UI\Controls\Grid</a>&nbsp;— Control Grid (Arrangement)</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-group.php" target="_blank">UI\Controls\Group</a>&nbsp;— Control Group (Arrangement)</li>
    <li><a href="https://www.php.net/manual/en/class.ui-controls-box.php" target="_blank">UI\Controls\Box</a>&nbsp;— Control Box (Arrangement)</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-pen.php" target="_blank">UI\Draw\Pen</a>&nbsp;— Draw Pen</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-path.php" target="_blank">UI\Draw\Path</a>&nbsp;— Draw Path</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-matrix.php" target="_blank">UI\Draw\Matrix</a>&nbsp;— Draw Matrix</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-color.php" target="_blank">UI\Draw\Color</a>&nbsp;— Color Representation</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-stroke.php" target="_blank">UI\Draw\Stroke</a>&nbsp;— Draw Stroke</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-brush.php" target="_blank">UI\Draw\Brush</a>&nbsp;— Brushes</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-brush-gradient.php" target="_blank">UI\Draw\Brush\Gradient</a>&nbsp;— Gradient Brushes</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-brush-lineargradient.php" target="_blank">UI\Draw\Brush\LinearGradient</a>&nbsp;— Linear Gradient</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-brush-radialgradient.php" target="_blank">UI\Draw\Brush\RadialGradient</a>&nbsp;— Radial Gradient</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-text-layout.php" target="_blank">UI\Draw\Text\Layout</a>&nbsp;— Represents Text Layout</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font.php" target="_blank">UI\Draw\Text\Font</a>&nbsp;— Represents a Font</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font-descriptor.php" target="_blank">UI\Draw\Text\Font\Descriptor</a>&nbsp;— Font Descriptor</li>
    <li><a href="https://www.php.net/manual/en/ref.ui.php" target="_blank">UI Functions</a></li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font-weight.php" target="_blank">UI\Draw\Text\Font\Weight</a>&nbsp;— Font Weight Settings</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font-italic.php" target="_blank">UI\Draw\Text\Font\Italic</a>&nbsp;— Italic Font Settings</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font-stretch.php" target="_blank">UI\Draw\Text\Font\Stretch</a>&nbsp;— Font Stretch Settings</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-line-cap.php" target="_blank">UI\Draw\Line\Cap</a>&nbsp;— Line Cap Settings</li>
    <li><a href="https://www.php.net/manual/en/class.ui-draw-line-join.php" target="_blank">UI\Draw\Line\Join</a>&nbsp;— Line Join Settings</li>
    <li><a href="https://www.php.net/manual/en/class.ui-key.php" target="_blank">UI\Key</a>&nbsp;— Key Identifiers</li>
    <li><a href="https://www.php.net/manual/en/class.ui-exception-invalidargumentexception.php" target="_blank">UI\Exception\InvalidArgumentException</a>&nbsp;— InvalidArgumentException</li>
    <li><a href="https://www.php.net/manual/en/class.ui-exception-runtimeexception.php" target="_blank">UI\Exception\RuntimeException</a>&nbsp;— RuntimeException</li>
</ul>
HTML,
                'is_active' => 0
            ],
        ]);
    }
}
