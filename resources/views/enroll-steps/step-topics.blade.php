<div class="col-md-12">
    <div class="row">
        <div class="alert alert-info w-100">
            <p>This PHP Course Covers the following and then some...</p>
            <p><strong>Note: </strong>Feel free to skip these topics. You are about to learn them one by one.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="sticky">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-introduction" data-toggle="list" href="#introduction" role="tab" aria-controls="introduction">Introduction</a>
                    <a class="list-group-item list-group-item-action" id="list-language-reference" data-toggle="list" href="#language-reference" role="tab" aria-controls="language-references">Language Reference</a>
                    <a class="list-group-item list-group-item-action" id="list-security" data-toggle="list" href="#security" role="tab" aria-controls="security">Security</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#features" role="tab" aria-controls="features">Features</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#function-reference" role="tab" aria-controls="function-reference">Function Reference</a>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-0 mt-3 mt-sm-0">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="introduction" role="tabpanel" aria-labelledby="list-introduction">
                    <div class="card">
                        <div id="youtube-player"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="language-reference" role="tabpanel" aria-labelledby="list-language-reference">
                    <div class="accordion" id="language-reference-accordion">
                        <div class="card">
                            <div class="card-header" id="language-reference-tab">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-syntax" aria-expanded="true" aria-controls="collapseOne">
                                        Basic Syntax
                                    </button>
                                </h5>
                            </div>

                            <div id="basic-syntax" class="collapse show" aria-labelledby="language-reference-tab" data-parent="#language-reference-accordion">
                                <div class="card-body">
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#types" aria-expanded="false" aria-controls="collapseTwo">
                                        Types
                                    </button>
                                </h5>
                            </div>
                            <div id="types" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#variables" aria-expanded="false" aria-controls="collapseTwo">
                                        Variables
                                    </button>
                                </h5>
                            </div>
                            <div id="variables" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p class="simpara">Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.</p>
                                    <p class="para">Variable names follow the same rules as other labels in PHP. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thus: <code class="code">^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</code></p>
                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/language.variables.predefined.php" target="_blank">Predefined Variables</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.variables.scope.php" target="_blank">Variable scope</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.variables.variable.php" target="_blank">Variable variables</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.variables.external.php" target="_blank">Variables From External Sources</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#constants" aria-expanded="false" aria-controls="collapseTwo">
                                        Constants
                                    </button>
                                </h5>
                            </div>
                            <div id="constants" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p>A constant is an identifier (name) for a simple value. As the name suggests, that value cannot change during the execution of the script (except for magic constants, which aren't actually constants). Constants are case-sensitive. By convention, constant identifiers are always uppercase.</p>
                                    <p>The name of a constant follows the same rules as any label in PHP. A valid constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thusly: <code>^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</code></p>
                                    <p>It is possible to <code>define()</code> constants with reserved or even invalid names, whose value can only be retrieved with the <code>constant()</code> function. However, doing so is not recommended.</p>
                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/language.constants.syntax.php" target="_blank">Syntax</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.constants.predefined.php" target="_blank">Predefined constants</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.constants.magic.php" target="_blank">Magic constants</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#expressions" aria-expanded="false" aria-controls="collapseTwo">
                                        Expressions
                                    </button>
                                </h5>
                            </div>
                            <div id="expressions" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p>Expressions are the most important building blocks of PHP. In PHP, almost anything you write is an expression. The simplest yet most accurate way to define an expression is "anything that has a value".</p>
                                    <p>The most basic forms of expressions are constants and variables. When you type <code>$a = 5</code>, you're assigning '5' into <code>$a</code>. '5', obviously, has the value 5, or in other words '5' is an expression with the value of 5 (in this case, '5' is an integer constant).</p>
                                    <p>After this assignment, you'd expect $a's value to be 5 as well, so if you wrote <code>$b = $a</code>, you'd expect it to behave just as if you wrote <code>$b = 5</code>. In other words, <code>$a</code> is an expression with the value of 5 as well. If everything works right, this is exactly what will happen.</p>
                                    <hr />
                                    <h5>
                                        <a href="https://www.php.net/manual/en/language.expressions.php" target="_blank">Read more about expressions in details</a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#operators" aria-expanded="false" aria-controls="collapseTwo">
                                        Operators
                                    </button>
                                </h5>
                            </div>
                            <div id="operators" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p class="simpara">An operator is something that takes one or more values (or expressions, in programming jargon) and yields another value (so that the construction itself becomes an expression).</p>
                                    <p class="para">Operators can be grouped according to the number of values they take. Unary operators take only one value, for example <code class="literal">!</code> (the <a class="link" href="https://www.php.net/manual/en/language.operators.logical.php" target="_blank">logical not operator</a>) or <code class="literal">++</code> (the <a class="link" href="https://www.php.net/manual/en/language.operators.increment.php" target="_blank">increment operator</a>). Binary operators take two values, such as the familiar <a class="link" href="https://www.php.net/manual/en/language.operators.arithmetic.php" target="_blank">arithmetical operators</a> <code class="literal">+</code> (plus) and <code class="literal">-</code> (minus), and the majority of PHP operators fall into this category. Finally, there is a single <a class="link" href="https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary">ternary operator</a>, <code class="literal">? :</code>, which takes three values; this is usually referred to simply as "the ternary operator" (although it could perhaps more properly be called the conditional operator).</p>
                                    <p class="para">A full list of PHP operators follows in the section <a class="link" href="https://www.php.net/manual/en/language.operators.precedence.php" target="_blank">Operator Precedence</a>. The section also explains operator precedence and associativity, which govern exactly how expressions containing several different operators are evaluated.</p>

                                    <hr />
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#control-structures" aria-expanded="false" aria-controls="collapseTwo">
                                        Control Structures
                                    </button>
                                </h5>
                            </div>
                            <div id="control-structures" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p>Any PHP script is built out of a series of statements. A statement can be an assignment, a function call, a loop, a conditional statement or even a statement that does nothing (an empty statement). Statements usually end with a semicolon. In addition, statements can be grouped into a statement-group by encapsulating a group of statements with curly braces. A statement-group is a statement by itself as well.</p>

                                    <hr />
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#functions" aria-expanded="false" aria-controls="collapseTwo">
                                        Functions
                                    </button>
                                </h5>
                            </div>
                            <div id="functions" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p>PHP function is a piece of code that can be reused many times. It can take input as argument list and return value. There are thousands of built-in functions in PHP.</p>
                                    <p>In PHP, we can define Conditional function, Function within Function and Recursive function also.</p>

                                    <hr />
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#classes-and-objects" aria-expanded="false" aria-controls="collapseTwo">
                                        Classes and Objects
                                    </button>
                                </h5>
                            </div>
                            <div id="classes-and-objects" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p class="para">PHP includes a complete object model. Some of its features are: <a class="link" href="https://www.php.net/manual/en/language.oop5.visibility.php" target="_blank">visibility</a>, <a class="link" href="https://www.php.net/manual/en/language.oop5.abstract.php" target="_blank">abstract</a> and <a class="link" href="https://www.php.net/manual/en/language.oop5.final.php" target="_blank">final</a> classes and methods, additional <a class="link" href="https://www.php.net/manual/en/language.oop5.magic.php" target="_blank">magic methods</a>, <a class="link" href="https://www.php.net/manual/en/language.oop5.interfaces.php" target="_blank">interfaces</a>, and <a class="link" href="https://www.php.net/manual/en/language.oop5.cloning.php" target="_blank">cloning</a>.</p>
                                    <p class="para">PHP treats objects in the same way as references or handles, meaning that each variable contains an object reference rather than a copy of the entire object. See <a class="link" href="https://www.php.net/manual/en/language.oop5.references.php" target="_blank">Objects and References</a></p>

                                    <hr />
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#namespaces" aria-expanded="false" aria-controls="collapseTwo">
                                        Namespaces
                                    </button>
                                </h5>
                            </div>
                            <div id="namespaces" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p class="simpara">What are namespaces? In the broadest definition namespaces are a way of encapsulating items. This can be seen as an abstract concept in many places. For example, in any operating system directories serve to group related files, and act as a namespace for the files within them. As a concrete example, the file <code class="literal">foo.txt</code> can exist in both directory <code class="literal">/home/greg</code> and in <code class="literal">/home/other</code>, but two copies of <code class="literal">foo.txt</code> cannot co-exist in the same directory. In addition, to access the <code class="literal">foo.txt</code> file outside of the <code class="literal">/home/greg</code> directory, we must prepend the directory name to the file name using the directory separator to get <code class="literal">/home/greg/foo.txt</code>. This same principle extends to namespaces in the programming world.</p>
                                    <p class="simpara">In the PHP world, namespaces are designed to solve two problems that authors of libraries and applications encounter when creating re-usable code elements such as classes or functions:</p>
                                    <ol>
                                        <li class="listitem"><span class="simpara">Name collisions between code you create, and internal PHP classes/functions/constants or third-party classes/functions/constants.</span></li>
                                        <li class="listitem"><span class="simpara">Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem, improving readability of source code.</span></li>
                                    </ol>
                                    <p class="simpara">PHP Namespaces provide a way in which to group related classes, interfaces, functions and constants.</p>

                                    <hr />
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#enumerations" aria-expanded="false" aria-controls="collapseTwo">
                                        Enumerations
                                    </button>
                                </h5>
                            </div>
                            <div id="enumerations" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p class="para">Enumerations, or "Enums" allow a developer to define a custom type that is limited to one of a discrete number of possible values. That can be especially helpful when defining a domain model, as it enables "making invalid states unrepresentable."</p>
                                    <p class="para">Enums appear in many languages with a variety of different features. In PHP, Enums are a special kind of object. The Enum itself is a class, and its possible cases are all single-instance objects of that class. That means Enum cases are valid objects and may be used anywhere an object may be used, including type checks.</p>
                                    <p class="para">The most popular example of enumerations is the built-in boolean type, which is an enumerated type with legal values <strong><code>true</code></strong> and <strong><code>false</code></strong>. Enums allows developers to define their own arbitrarily robust enumerations.</p>

                                    <hr />
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#errors" aria-expanded="false" aria-controls="collapseTwo">
                                        Errors
                                    </button>
                                </h5>
                            </div>
                            <div id="errors" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <h5><a href="https://www.php.net/manual/en/language.errors.php" target="_blank">Read more about Errors in PHP</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#exceptions" aria-expanded="false" aria-controls="collapseTwo">
                                        Exceptions
                                    </button>
                                </h5>
                            </div>
                            <div id="exceptions" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p class="para">PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught within PHP. Code may be surrounded in a <code class="literal">try</code> block, to facilitate the catching of potential exceptions. Each <code class="literal">try</code> must have at least one corresponding <code class="literal">catch</code> or <code class="literal">finally</code> block.</p>
                                    <p class="para">If an exception is thrown and its current function scope has no <code class="literal">catch</code> block, the exception will "bubble up" the call stack to the calling function until it finds a matching <code class="literal">catch</code> block. All <code class="literal">finally</code> blocks it encounters along the way will be executed. If the call stack is unwound all the way to the global scope without encountering a matching <code class="literal">catch</code> block, the program will terminate with a fatal error unless a global exception handler has been set.</p>
                                    <p class="para">The thrown object must be an instance of the Exception class or a subclass of Exception. Trying to throw an object that is not will result in a PHP Fatal Error.</p>
                                    <p class="para">As of PHP 8.0.0, the <code class="literal">throw</code> keyword is an expression and may be used in any expression context. In prior versions it was a statement and was required to be on its own line.</p>

                                    <hr />
                                    <h5>This topics also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/language.exceptions.extending.php" target="_blank">Extending Exceptions</a></li>
                                    </ul>
                                    <hr />
                                    <h5><a href="https://www.php.net/manual/en/language.exceptions.php" target="_blank">Read more about exceptions</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#fibers" aria-expanded="false" aria-controls="collapseTwo">
                                        Fibers
                                    </button>
                                </h5>
                            </div>
                            <div id="fibers" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p class="para">Fibers represent full-stack, interruptible functions. Fibers may be suspended from anywhere in the call-stack, pausing execution within the fiber until the fiber is resumed at a later time.</p>
                                    <p class="para">Fibers pause the entire execution stack, so the direct caller of the function does not need to change how it invokes the function.</p>
                                    <p class="para">Execution may be interrupted anywhere in the call stack using <code>Fiber::suspend()</code> (that is, the call to <code>Fiber::suspend()</code>> may be in a deeply nested function or not even exist at all).</p>
                                    <p class="para">Unlike stack-less <a class="classname" href="https://www.php.net/manual/en/class.generator.php" target="_blank">Generator</a>s, each <a class="classname" href="https://www.php.net/manual/en/class.fiber.php" target="_blank">Fiber</a> has its own call stack, allowing them to be paused within deeply nested function calls. A function declaring an interruption point (that is, calling <code>Fiber::suspend()</code>>) need not change its return type, unlike a function using <code>yield</code>> which must return a <a class="classname" href="https://www.php.net/manual/en/class.generator.php" target="_blank">Generator</a> instance.</p>
                                    <p class="para">Fibers can be suspended in any function call, including those called from within the PHP VM, such as functions provided to <code>array_map()</code>> or methods called by foreach on an <a class="classname" href="https://www.php.net/manual/en/class.iterator.php" target="_blank">Iterator</a> object.</p>
                                    <p class="para">Once suspended, execution of the fiber may be resumed with any value using <code>Fiber::resume()</code> or by throwing an exception into the fiber using <code>Fiber::throw()</code>>. The value is returned (or exception thrown) from <code>Fiber::suspend()</code>.</p>

                                    <hr />
                                    <h5><a href="https://www.php.net/manual/en/language.fibers.php" target="_blank">Read more about Fibers</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#generators" aria-expanded="false" aria-controls="collapseTwo">
                                        Generators
                                    </button>
                                </h5>
                            </div>
                            <div id="generators" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p class="para">Generators provide an easy way to implement simple <a class="link" href="https://www.php.net/manual/en/language.oop5.iterations.php" target="_blank">iterators</a> without the overhead or complexity of implementing a class that implements the <a class="classname" href="https://www.php.net/manual/en/class.iterator.php" target="_blank">Iterator</a> interface.</p>
                                    <p class="para">A generator allows you to write code that uses <code>foreach</code> to iterate over a set of data without needing to build an array in memory, which may cause you to exceed a memory limit, or require a considerable amount of processing time to generate. Instead, you can write a generator function, which is the same as a normal <a class="link" href="https://www.php.net/manual/en/functions.user-defined.php" target="_blank">function</a>, except that instead of <code>return</code>ing once, a generator can <code>yield</code> as many times as it needs to in order to provide the values to be iterated over.</p>
                                    <p class="para">A simple example of this is to reimplement the <a class="function" href="https://www.php.net/manual/en/function.range.php" target="_blank">range()</a> function as a generator. The standard <code>range()</code> function has to generate an array with every value in it and return it, which can result in large arrays: for example, calling <strong class="command">range(0, 1000000)</strong> will result in well over 100 MB of memory being used.</p>
                                    <p class="para">As an alternative, we can implement an <code class="literal">xrange()</code> generator, which will only ever need enough memory to create an <a class="classname" href="https://www.php.net/manual/en/class.iterator.php" target="_blank">Iterator</a> object and track the current state of the generator internally, which turns out to be less than 1 kilobyte.</p>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/language.generators.overview.php" target="_blank">Generators overview</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.generators.syntax.php" target="_blank">Generator syntax</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.generators.comparison.php" target="_blank">Comparing generators with Iterator objects</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#attributes" aria-expanded="false" aria-controls="collapseTwo">
                                        Attributes
                                    </button>
                                </h5>
                            </div>
                            <div id="attributes" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p class="para">Attributes offer the ability to add structured, machine-readable metadata information on declarations in code: Classes, methods, functions, parameters, properties and class constants can be the target of an attribute. The metadata defined by attributes can then be inspected at runtime using the <a class="link" href="https://www.php.net/manual/en/book.reflection.php" target="_blank">Reflection APIs</a>. Attributes could therefore be thought of as a configuration language embedded directly into code.</p>
                                    <p class="para">With attributes the generic implementation of a feature and its concrete use in an application can be decoupled. In a way it is comparable to interfaces and their implementations. But where interfaces and implementations are about code, attributes are about annotating extra information and configuration. Interfaces can be implemented by classes, yet attributes can also be declared on methods, functions, parameters, properties and class constants. As such they are more flexible than interfaces.</p>
                                    <p class="para">A simple example of attribute usage is to convert an interface that has optional methods to use attributes. Lets assume an <code class="literal">ActionHandler</code> interface representing an operation in an application, where some implementations of an action handler require setup and others do not. Instead of requiring all classes that implement <code class="literal">ActionHandler</code> to implement a method <code class="literal">setUp()</code>, an attribute can be used. One benefit of this approach is that we can use the attribute several times.</p>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/language.attributes.overview.php" target="_blank">Attributes overview</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.attributes.syntax.php" target="_blank">Attribute syntax</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.attributes.reflection.php" target="_blank">Reading Attributes with the Reflection API</a></li>
                                        <li><a href="https://www.php.net/manual/en/language.attributes.classes.php" target="_blank">Declaring Attribute Classes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#references-explained" aria-expanded="false" aria-controls="collapseTwo">
                                        References Explained
                                    </button>
                                </h5>
                            </div>
                            <div id="references-explained" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p>References in PHP are a means to access the same variable content by different names. They are not like C pointers; for instance, you cannot perform pointer arithmetic using them, they are not actual memory addresses, and so on. See <a class="xref" href="https://www.php.net/manual/en/language.references.arent.php" target="_blank">What References Are Not</a> for more information. Instead, they are symbol table aliases. Note that in PHP, variable name and variable content are different, so the same content can have different names. The closest analogy is with Unix filenames and files - variable names are directory entries, while variable content is the file itself. References can be likened to hardlinking in Unix filesystem.</p>

                                    <hr />
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#predefined-variables" aria-expanded="false" aria-controls="collapseTwo">
                                        Predefined Variables
                                    </button>
                                </h5>
                            </div>
                            <div id="predefined-variables" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p>PHP provides a large number of predefined variables to all scripts. The variables represent everything from <a class="link" href="https://www.php.net/manual/en/language.variables.external.php" target="_blank">external variables</a> to built-in environment variables, last error messages to last retrieved headers.</p>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_reference">
                                        <li><a href="https://www.php.net/manual/en/language.variables.superglobals.php" target="_blank">Superglobals</a> — Built-in variables that are always available in all scopes</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.globals.php" target="_blank">$GLOBALS</a> — References all variables available in global scope</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.server.php" target="_blank">$_SERVER</a> — Server and execution environment information</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.get.php" target="_blank">$_GET</a> — HTTP GET variables</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.post.php" target="_blank">$_POST</a> — HTTP POST variables</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.files.php" target="_blank">$_FILES</a> — HTTP File Upload variables</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.request.php" target="_blank">$_REQUEST</a> — HTTP Request variables</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.session.php" target="_blank">$_SESSION</a> — Session variables</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.environment.php" target="_blank">$_ENV</a> — Environment variables</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.cookies.php" target="_blank">$_COOKIE</a> — HTTP Cookies</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.phperrormsg.php" target="_blank">$php_errormsg</a> — The previous error message</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.httpresponseheader.php" target="_blank">$http_response_header</a> — HTTP response headers</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.argc.php" target="_blank">$argc</a> — The number of arguments passed to script</li>
                                        <li><a href="https://www.php.net/manual/en/reserved.variables.argv.php" target="_blank">$argv</a> — Array of arguments passed to script</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#predefined-exceptions" aria-expanded="false" aria-controls="collapseTwo">
                                        Predefined Exceptions
                                    </button>
                                </h5>
                            </div>
                            <div id="predefined-exceptions" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#predefined-interfaces" aria-expanded="false" aria-controls="collapseTwo">
                                        Predefined Interfaces and Classes
                                    </button>
                                </h5>
                            </div>
                            <div id="predefined-interfaces" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#supported-protocols" aria-expanded="false" aria-controls="collapseTwo">
                                        Supported protocols and wrappers
                                    </button>
                                </h5>
                            </div>
                            <div id="supported-protocols" class="collapse" aria-labelledby="headingTwo" data-parent="#language-reference-accordion">
                                <div class="card-body">
                                    <p>PHP comes with many built-in wrappers for various URL-style protocols for use with the filesystem functions such as <code>fopen()</code>, <code>copy()</code>, <code>file_exists()</code> and <code>filesize()</code>. In addition to these wrappers, it is possible to register custom wrappers using the <code>stream_wrapper_register()</code> function.</p>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_reference">
                                        <li><a href="https://www.php.net/manual/en/wrappers.file.php" target="_blank">file://</a> — Accessing local filesystem</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.http.php" target="_blank">http://</a> — Accessing HTTP(s) URLs</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.ftp.php" target="_blank">ftp://</a> — Accessing FTP(s) URLs</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.php.php" target="_blank">php://</a> — Accessing various I/O streams</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.compression.php" target="_blank">zlib://</a> — Compression Streams</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.data.php" target="_blank">data://</a> — Data (RFC 2397)</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.glob.php" target="_blank">glob://</a> — Find pathnames matching pattern</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.phar.php" target="_blank">phar://</a> — PHP Archive</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.ssh2.php" target="_blank">ssh2://</a> — Secure Shell 2</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.rar.php" target="_blank">rar://</a> — RAR</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.audio.php" target="_blank">ogg://</a> — Audio streams</li>
                                        <li><a href="https://www.php.net/manual/en/wrappers.expect.php" target="_blank">expect://</a> — Process Interaction Streams</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="list-security">
                    <div class="accordion" id="security-accordion">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-intro" aria-expanded="true" aria-controls="collapseOne">
                                        Security Introduction
                                    </button>
                                </h5>
                            </div>

                            <div id="security-intro" class="collapse show" aria-labelledby="security-intro" data-parent="#security-accordion">
                                <div class="card-body">
                                    <p class="simpara">PHP is a powerful language and the interpreter, whether included in a web server as a module or executed as a separate&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;binary, is able to access files, execute commands and open network connections on the server. These properties make anything run on a web server insecure by default. PHP is designed specifically to be a more secure language for writing&nbsp;<abbr title="Common Gateway Interface">CGI</abbr>&nbsp;programs than Perl or C, and with correct selection of compile-time and runtime configuration options, and proper coding practices, it can give you exactly the combination of freedom and security you need.</p>
                                    <p class="simpara">As there are many different ways of utilizing PHP, there are many configuration options controlling its behaviour. A large selection of options guarantees you can use PHP for a lot of purposes, but it also means there are combinations of these options and server configurations that result in an insecure setup.</p>
                                    <p class="simpara">The configuration flexibility of PHP is equally rivalled by the code flexibility. PHP can be used to build complete server applications, with all the power of a shell user, or it can be used for simple server-side includes with little risk in a tightly controlled environment. How you build that environment, and how secure it is, is largely up to the PHP developer.</p>
                                    <p class="simpara">This chapter starts with some general security advice, explains the different configuration option combinations and the situations they can be safely used, and describes different considerations in coding for different levels of security.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-general-consideration" aria-expanded="false" aria-controls="collapseOne">
                                        General Consideration
                                    </button>
                                </h5>
                            </div>

                            <div id="security-general-consideration" class="collapse" aria-labelledby="security-general-consideration" data-parent="#security-accordion">
                                <div class="card-body">
                                    <p class="simpara">A completely secure system is a virtual impossibility, so an approach often used in the security profession is one of balancing risk and usability. If every variable submitted by a user required two forms of biometric validation (such as a retinal scan and a fingerprint), you would have an extremely high level of accountability. It would also take half an hour to fill out a fairly complex form, which would tend to encourage users to find ways of bypassing the security.</p>
                                    <p class="simpara">The best security is often unobtrusive enough to suit the requirements without the user being prevented from accomplishing their work, or over-burdening the code author with excessive complexity. Indeed, some security attacks are merely exploits of this kind of overly built security, which tends to erode over time.</p>
                                    <p class="simpara">A phrase worth remembering: A system is only as good as the weakest link in a chain. If all transactions are heavily logged based on time, location, transaction type, etc. but the user is only verified based on a single cookie, the validity of tying the users to the transaction log is severely weakened.</p>
                                    <p class="simpara">When testing, keep in mind that you will not be able to test all possibilities for even the simplest of pages. The input you may expect will be completely unrelated to the input given by a disgruntled employee, a cracker with months of time on their hands, or a housecat walking across the keyboard. This is why it's best to look at the code from a logical perspective, to discern where unexpected data can be introduced, and then follow how it is modified, reduced, or amplified.</p>
                                    <p class="simpara">The Internet is filled with people trying to make a name for themselves by breaking your code, crashing your site, posting inappropriate content, and otherwise making your day interesting. It doesn't matter if you have a small or large site, you are a target by simply being online, by having a server that can be connected to. Many cracking programs do not discern by size, they simply trawl massive IP blocks looking for victims. Try not to become one.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-installed-as-cgi-binary" aria-expanded="false" aria-controls="collapseOne">
                                        Install as CGI binary
                                    </button>
                                </h5>
                            </div>

                            <div id="security-installed-as-cgi-binary" class="collapse" aria-labelledby="security-installed-as-cgi-binary" data-parent="#security-accordion">
                                <div class="card-body">
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/security.cgi-bin.attacks.php" target="_blank">Possible attacks</a></li>
                                        <li><a href="https://www.php.net/manual/en/security.cgi-bin.default.php" target="_blank">Case 1: only public files served</a></li>
                                        <li><a href="https://www.php.net/manual/en/security.cgi-bin.force-redirect.php" target="_blank">Case 2: using cgi.force_redirect</a></li>
                                        <li><a href="https://www.php.net/manual/en/security.cgi-bin.doc-root.php" target="_blank">Case 3: setting doc_root or user_dir</a></li>
                                        <li><a href="https://www.php.net/manual/en/security.cgi-bin.shell.php" target="_blank">Case 4: PHP parser outside of web tree</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-installed-as-apache-module" aria-expanded="false" aria-controls="collapseOne">
                                        Install as Apache module
                                    </button>
                                </h5>
                            </div>

                            <div id="security-installed-as-apache-module" class="collapse" aria-labelledby="security-installed-as-apache-module" data-parent="#security-accordion">
                                <div class="card-body">
                                    <p class="simpara">When&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;is used as an Apache module it inherits Apache's user permissions (typically those of the "nobody" user). This has several impacts on security and authorization. For example, if you are using&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;to access a database, unless that database has built-in access control, you will have to make the database accessible to the "nobody" user. This means a malicious script could access and modify the database, even without a username and password. It's entirely possible that a web spider could stumble across a database administrator's web page, and drop all of your databases. You can protect against this with Apache authorization, or you can design your own access model using LDAP,&nbsp;<var class="filename">.htaccess</var>&nbsp;files, etc. and include that code as part of your&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;scripts.</p>
                                    <p class="simpara">Often, once security is established to the point where the&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;user (in this case, the apache user) has very little risk attached to it, it is discovered that&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;is now prevented from writing any files to user directories. Or perhaps it has been prevented from accessing or changing databases. It has equally been secured from writing good and bad files, or entering good and bad database transactions.</p>
                                    <p class="simpara">A frequent security mistake made at this point is to allow apache root permissions, or to escalate apache's abilities in some other way.</p>
                                    <p class="simpara">Escalating the Apache user's permissions to root is extremely dangerous and may compromise the entire system, so sudo'ing, chroot'ing, or otherwise running as root should not be considered by those who are not security professionals.</p>
                                    <p class="simpara">There are some simpler solutions. By using&nbsp;<a class="link" href="https://www.php.net/manual/en/ini.core.php#ini.open-basedir" target="_blank">open_basedir</a>&nbsp;you can control and restrict what directories are allowed to be used for&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>. You can also set up apache-only areas, to restrict all web based activity to non-user, or non-system, files.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-session" aria-expanded="false" aria-controls="collapseOne">
                                        Session Security
                                    </button>
                                </h5>
                            </div>

                            <div id="security-session" class="collapse" aria-labelledby="security-session" data-parent="#security-accordion">
                                <div class="card-body">
                                    <p class="simpara">It is important keeping HTTP session management secure. Session related security is described in&nbsp;<a class="link" href="https://www.php.net/manual/en/session.security.php" target="_blank">Session Security</a>&nbsp;section of&nbsp;<a class="link" href="https://www.php.net/manual/en/book.session.php" target="_blank">Session module</a>&nbsp;reference.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-file" aria-expanded="false" aria-controls="collapseOne">
                                        Filesystem Security
                                    </button>
                                </h5>
                            </div>

                            <div id="security-file" class="collapse" aria-labelledby="security-file" data-parent="#security-accordion">
                                <div class="card-body">
                                    <p class="simpara"><abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;is subject to the security built into most server systems with respect to permissions on a file and directory basis. This allows you to control which files in the filesystem may be read. Care should be taken with any files which are world readable to ensure that they are safe for reading by all users who have access to that filesystem.</p>
                                    <p class="simpara">Since&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;was designed to allow user level access to the filesystem, it's entirely possible to write a&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;script that will allow you to read system files such as /etc/passwd, modify your ethernet connections, send massive printer jobs out, etc. This has some obvious implications, in that you need to ensure that the files that you read from and write to are the appropriate ones.</p>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/security.filesystem.nullbytes.php" target="_blank">Null bytes related issues</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-database" aria-expanded="false" aria-controls="collapseOne">
                                        Database Security
                                    </button>
                                </h5>
                            </div>

                            <div id="security-database" class="collapse" aria-labelledby="security-database" data-parent="#security-accordion">
                                <div class="card-body">
                                    <p class="simpara">Nowadays, databases are cardinal components of any web based application by enabling websites to provide varying dynamic content. Since very sensitive or secret information can be stored in a database, you should strongly consider protecting your databases.</p>
                                    <p class="simpara">To retrieve or to store any information you need to connect to the database, send a legitimate query, fetch the result, and close the connection. Nowadays, the commonly used query language in this interaction is the Structured Query Language (SQL). See how an attacker can&nbsp;<a class="link" href="https://www.php.net/manual/en/security.database.sql-injection.php" target="_blank">tamper with an SQL query</a>.</p>
                                    <p class="simpara">As you can surmise,&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;cannot protect your database by itself. The following sections aim to be an introduction into the very basics of how to access and manipulate databases within&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;scripts.</p>
                                    <p class="simpara">Keep in mind this simple rule: defense in depth. The more places you take action to increase the protection of your database, the less probability of an attacker succeeding in exposing or abusing any stored information. Good design of the database schema and the application deals with your greatest fears.</p>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/security.database.design.php" target="_blank">Designing Databases</a></li>
                                        <li><a href="https://www.php.net/manual/en/security.database.connection.php" target="_blank">Connecting to Database</a></li>
                                        <li><a href="https://www.php.net/manual/en/security.database.storage.php" target="_blank">Encrypted Storage Model</a></li>
                                        <li><a href="https://www.php.net/manual/en/security.database.sql-injection.php" target="_blank">SQL Injection</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-error-reporting" aria-expanded="false" aria-controls="collapseOne">
                                        Error Reporting
                                    </button>
                                </h5>
                            </div>

                            <div id="security-error-reporting" class="collapse" aria-labelledby="security-error-reporting" data-parent="#security-accordion">
                                <div class="card-body">
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
                                            <div class="phpcode"><code>&lt;?php<br />if&nbsp;($username)&nbsp;{&nbsp;&nbsp;//&nbsp;Not&nbsp;initialized&nbsp;or&nbsp;checked&nbsp;before&nbsp;usage<br />&nbsp;&nbsp;&nbsp;&nbsp;$good_login&nbsp;=&nbsp;1;<br />}<br />if&nbsp;($good_login&nbsp;==&nbsp;1)&nbsp;{&nbsp;//&nbsp;If&nbsp;above&nbsp;test&nbsp;fails,&nbsp;not&nbsp;initialized&nbsp;or&nbsp;checked&nbsp;before&nbsp;usage<br />&nbsp;&nbsp;&nbsp;&nbsp;readfile&nbsp;("/highly/sensitive/data/index.html");<br />}<br />?&gt;</code></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-user-submitted-data" aria-expanded="false" aria-controls="collapseOne">
                                        User Submitted Data
                                    </button>
                                </h5>
                            </div>

                            <div id="security-user-submitted-data" class="collapse" aria-labelledby="security-user-submitted-data" data-parent="#security-accordion">
                                <div class="card-body">
                                    <p class="para">The greatest weakness in many&nbsp;<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>&nbsp;programs is not inherent in the language itself, but merely an issue of code not being written with security in mind. For this reason, you should always take the time to consider the implications of a given piece of code, to ascertain the possible damage if an unexpected variable is submitted to it.</p>
                                    <div id="example-437" class="example">
                                        <p><strong>Example #1 Dangerous Variable Usage</strong></p>
                                        <div class="example-contents">
                                            <div class="phpcode"><code>&lt;?php<br />//&nbsp;remove&nbsp;a&nbsp;file&nbsp;from&nbsp;the&nbsp;user's&nbsp;home&nbsp;directory...&nbsp;or&nbsp;maybe<br />//&nbsp;somebody&nbsp;else's?<br />unlink&nbsp;($evil_var);<br /><br />//&nbsp;Write&nbsp;logging&nbsp;of&nbsp;their&nbsp;access...&nbsp;or&nbsp;maybe&nbsp;an&nbsp;/etc/passwd&nbsp;entry?<br />fwrite&nbsp;($fp,&nbsp;$evil_var);<br /><br />//&nbsp;Execute&nbsp;something&nbsp;trivial..&nbsp;or&nbsp;rm&nbsp;-rf&nbsp;*?<br />system&nbsp;($evil_var);<br />exec&nbsp;($evil_var);<br /><br />?&gt;</code></div>
                                        </div>
                                    </div>
                                    <br />
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-hiding-php" aria-expanded="false" aria-controls="collapseOne">
                                        Hiding PHP
                                    </button>
                                </h5>
                            </div>

                            <div id="security-hiding-php" class="collapse" aria-labelledby="security-hiding-php" data-parent="#security-accordion">
                                <div class="card-body">
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#security-keeping-current" aria-expanded="false" aria-controls="collapseOne">
                                        Keeping Current
                                    </button>
                                </h5>
                            </div>

                            <div id="security-keeping-current" class="collapse" aria-labelledby="security-keeping-current" data-parent="#security-accordion">
                                <div class="card-body">
                                    <p class="simpara">PHP, like any other large system, is under constant scrutiny and improvement. Each new version will often include both major and minor changes to enhance security and repair any flaws, configuration mishaps, and other issues that will affect the overall security and stability of your system.</p>
                                    <p class="simpara">Like other system-level scripting languages and programs, the best approach is to update often, and maintain awareness of the latest versions and their changes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="list-features">
                    <div class="accordion" id="features-accordion">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-http-auth-with-php" aria-expanded="true" aria-controls="collapseOne">
                                        HTTP authentication with PHP
                                    </button>
                                </h5>
                            </div>

                            <div id="features-http-auth-with-php" class="collapse show" aria-labelledby="features-http-auth-with-php" data-parent="#features-accordion">
                                <div class="card-body">
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

                                    <hr />
                                    <a href="https://www.php.net/manual/en/features.http-auth.php" target="_blank"><h5>Read more about HTTP Authentication using PHP</h5></a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-cookies" aria-expanded="false" aria-controls="collapseOne">
                                        Cookies
                                    </button>
                                </h5>
                            </div>

                            <div id="features-cookies" class="collapse" aria-labelledby="features-cookies" data-parent="#features-accordion">
                                <div class="card-body">
                                    <p class="para">PHP transparently supports&nbsp;<abbr title="Hypertext Transfer Protocol">HTTP</abbr>&nbsp;cookies. Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set cookies using the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.setcookie.php" target="_blank">setcookie()</a></span>&nbsp;or&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.setrawcookie.php" target="_blank">setrawcookie()</a></span>&nbsp;function. Cookies are part of the&nbsp;<abbr title="Hypertext Transfer Protocol">HTTP</abbr>&nbsp;header, so&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.setcookie.php" target="_blank">setcookie()</a></span>&nbsp;must be called before any output is sent to the browser. This is the same limitation that&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.header.php" target="_blank">header()</a></span>&nbsp;has. You can use the&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.outcontrol.php" target="_blank">output buffering functions</a>&nbsp;to delay the script output until you have decided whether or not to set any cookies or send any headers.</p>
                                    <p class="para">Any cookies sent to server from the client will automatically be included into a&nbsp;<var class="varname"><a class="classname" href="https://www.php.net/manual/en/reserved.variables.cookies.php" target="_blank">$_COOKIE</a></var>&nbsp;auto-global array if&nbsp;<a class="link" href="https://www.php.net/manual/en/ini.core.php#ini.variables-order" target="_blank">variables_order</a>&nbsp;contains "C". If you wish to assign multiple values to a single cookie, just add&nbsp;<code class="literal">[]</code>&nbsp;to the cookie name.</p>
                                    <p class="para">For more details, including notes on browser bugs, see the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.setcookie.php" target="_blank">setcookie()</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.setrawcookie.php" target="_blank">setrawcookie()</a></span>&nbsp;function.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-sessions" aria-expanded="false" aria-controls="collapseOne">
                                        Sessions
                                    </button>
                                </h5>
                            </div>

                            <div id="features-sessions" class="collapse" aria-labelledby="features-sessions" data-parent="#features-accordion">
                                <div class="card-body">
                                    <p>Session support in PHP consists of a way to preserve certain data across subsequent accesses. This enables you to build more customized applications and increase the appeal of your web site. All information is in the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.session.php" target="_blank">Session reference</a>&nbsp;section.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-handling-file-uploads" aria-expanded="false" aria-controls="collapseOne">
                                        Handling File Uploads
                                    </button>
                                </h5>
                            </div>

                            <div id="features-handling-file-uploads" class="collapse" aria-labelledby="#features-handling-file-uploads" data-parent="#features-accordion">
                                <div class="card-body">
                                    <p>A PHP script can be used with a HTML form to allow users to upload files to the server. Initially files are uploaded into a temporary directory and then relocated to a target destination by a PHP script.</p>
                                    <p>Information in the&nbsp;<strong>phpinfo.php</strong>&nbsp;page describes the temporary directory that is used for file uploads as&nbsp;<strong>upload_tmp_dir</strong>&nbsp;and the maximum permitted size of files that can be uploaded is stated as&nbsp;<strong>upload_max_filesize</strong>. These parameters are set into PHP configuration file&nbsp;<strong>php.ini</strong></p>
                                    <p>The process of uploading a file follows these steps &minus;</p>
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

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/features.file-upload.post-method.php" target="_blank">POST method uploads</a></li>
                                        <li><a href="https://www.php.net/manual/en/features.file-upload.errors.php" target="_blank">Error Messages Explained</a></li>
                                        <li><a href="https://www.php.net/manual/en/features.file-upload.common-pitfalls.php" target="_blank">Common Pitfalls</a></li>
                                        <li><a href="https://www.php.net/manual/en/features.file-upload.multiple.php" target="_blank">Uploading multiple files</a></li>
                                        <li><a href="https://www.php.net/manual/en/features.file-upload.put-method.php" target="_blank">PUT method support</a></li>
                                        <li><a href="https://www.php.net/manual/en/features.file-upload.errors.seealso.php" target="_blank">See Also</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-using-remote-files" aria-expanded="false" aria-controls="collapseOne">
                                        Using Remote Files
                                    </button>
                                </h5>
                            </div>

                            <div id="features-using-remote-files" class="collapse" aria-labelledby="#features-using-remote-files" data-parent="#features-accordion">
                                <div class="card-body">
                                    <div id="features.remote-files" class="chapter">
                                        <p class="para">As long as&nbsp;<strong class="option unknown">allow_url_fopen</strong>&nbsp;is enabled in&nbsp;<var class="filename">php.ini</var>, you can use&nbsp;<abbr title="Hypertext Transfer Protocol">HTTP</abbr>&nbsp;and&nbsp;<abbr title="File Transfer Protocol">FTP</abbr>&nbsp;URLs with most of the functions that take a filename as a parameter. In addition, URLs can be used with the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.include.php" target="_blank">include</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.include-once.php" target="_blank">include_once</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.require.php" target="_blank">require</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.require-once.php" target="_blank">require_once</a></span>&nbsp;statements (<strong class="option unknown">allow_url_include</strong>&nbsp;must be enabled for these). See&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.php" target="_blank">Supported Protocols and Wrappers</a>&nbsp;for more information about the protocols supported by PHP.</p>
                                        <p class="para">For example, you can use this to open a file on a remote web server, parse the output for the data you want, and then use that data in a database query, or simply to output it in a style matching the rest of your website.</p>
                                        <p class="para">&nbsp;</p>
                                        <div id="example-452" class="example">
                                            <p><strong>Example #1 Getting the title of a remote page</strong></p>
                                            <div class="example-contents">
                                                <div class="phpcode"><code>&lt;?php<br />$file&nbsp;=&nbsp;fopen&nbsp;("http://www.example.com/",&nbsp;"r");<br />if&nbsp;(!$file)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;p&gt;Unable&nbsp;to&nbsp;open&nbsp;remote&nbsp;file.\n";<br />&nbsp;&nbsp;&nbsp;&nbsp;exit;<br />}<br />while&nbsp;(!feof&nbsp;($file))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;$line&nbsp;=&nbsp;fgets&nbsp;($file,&nbsp;1024);<br />&nbsp;&nbsp;&nbsp;&nbsp;/*&nbsp;This&nbsp;only&nbsp;works&nbsp;if&nbsp;the&nbsp;title&nbsp;and&nbsp;its&nbsp;tags&nbsp;are&nbsp;on&nbsp;one&nbsp;line&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(preg_match&nbsp;("@\&lt;title\&gt;(.*)\&lt;/title\&gt;@i",&nbsp;$line,&nbsp;$out))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$title&nbsp;=&nbsp;$out[1];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br />fclose($file);<br />?&gt;</code></div>
                                            </div>
                                        </div>
                                        <p class="para">You can also write to files on an FTP server (provided that you have connected as a user with the correct access rights). You can only create new files using this method; if you try to overwrite a file that already exists, the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fopen.php" target="_blank">fopen()</a></span>&nbsp;call will fail.</p>
                                        <p class="para">To connect as a user other than 'anonymous', you need to specify the username (and possibly password) within the URL, such as '<code class="literal">ftp://user:password@ftp.example.com/path/to/file</code>'. (You can use the same sort of syntax to access files via&nbsp;<abbr title="Hypertext Transfer Protocol">HTTP</abbr>&nbsp;when they require Basic authentication.)</p>
                                        <p class="para">&nbsp;</p>
                                        <div id="example-453" class="example">
                                            <p><strong>Example #2 Storing data on a remote server</strong></p>
                                            <div class="example-contents">
                                                <div class="phpcode"><code>&lt;?php<br />$file&nbsp;=&nbsp;fopen&nbsp;("ftp://ftp.example.com/incoming/outputfile",&nbsp;"w");<br />if&nbsp;(!$file)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;p&gt;Unable&nbsp;to&nbsp;open&nbsp;remote&nbsp;file&nbsp;for&nbsp;writing.\n";<br />&nbsp;&nbsp;&nbsp;&nbsp;exit;<br />}<br />/*&nbsp;Write&nbsp;the&nbsp;data&nbsp;here.&nbsp;*/<br />fwrite&nbsp;($file,&nbsp;$_SERVER['HTTP_USER_AGENT']&nbsp;.&nbsp;"\n");<br />fclose&nbsp;($file);<br />?&gt;</code></div>
                                            </div>
                                        </div>
                                        <p class="para">&nbsp;</p>
                                        <blockquote class="note">
                                            <p><strong class="note">Note</strong>:</p>
                                            <p class="para">You might get the idea from the example above that you can use this technique to write to a remote log file. Unfortunately that would not work because the&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fopen.php" target="_blank">fopen()</a></span>&nbsp;call will fail if the remote file already exists. To do distributed logging like that, you should take a look at&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.syslog.php" target="_blank">syslog()</a></span>.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-connection-handling" aria-expanded="false" aria-controls="collapseOne">
                                        Connection Handling
                                    </button>
                                </h5>
                            </div>

                            <div id="features-connection-handling" class="collapse" aria-labelledby="#features-connection-handling" data-parent="#features-accordion">
                                <div class="card-body">
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-persistent-database-connections" aria-expanded="false" aria-controls="collapseOne">
                                        Persistent Database Connections
                                    </button>
                                </h5>
                            </div>

                            <div id="features-persistent-database-connections" class="collapse" aria-labelledby="#features-persistent-database-connections" data-parent="#features-accordion">
                                <div class="card-body">
                                    <p class="simpara">Persistent connections are links that do not close when the execution of your script ends. When a persistent connection is requested, PHP checks if there's already an identical persistent connection (that remained open from earlier) - and if it exists, it uses it. If it does not exist, it creates the link. An 'identical' connection is a connection that was opened to the same host, with the same username and the same password (where applicable).</p>
                                    <p class="simpara">People who aren't thoroughly familiar with the way web servers work and distribute the load may mistake persistent connects for what they're not. In particular, they do&nbsp;<em class="emphasis">not</em>&nbsp;give you an ability to open 'user sessions' on the same link, they do&nbsp;<em class="emphasis">not</em>&nbsp;give you an ability to build up a transaction efficiently, and they don't do a whole lot of other things. In fact, to be extremely clear about the subject, persistent connections don't give you&nbsp;<em class="emphasis">any</em>&nbsp;functionality that wasn't possible with their non-persistent brothers.</p>
                                    <p class="simpara">Why?</p>

                                    <hr />
                                    <a href="https://www.php.net/manual/en/features.persistent-connections.php" target="_blank">
                                        <h5>Read more about Persistent Database Connections</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-command-line-usage" aria-expanded="false" aria-controls="collapseOne">
                                        Command line usage
                                    </button>
                                </h5>
                            </div>

                            <div id="features-command-line-usage" class="collapse" aria-labelledby="#features-command-line-usage" data-parent="#features-accordion">
                                <div class="card-body">
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

                                    <hr />
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-garbage-collection" aria-expanded="false" aria-controls="collapseOne">
                                        Garbage Collection
                                    </button>
                                </h5>
                            </div>

                            <div id="features-garbage-collection" class="collapse" aria-labelledby="#features-garbage-collection" data-parent="#features-accordion">
                                <div class="card-body">
                                    <p>As of PHP 7.3, PHP provides basic garbage collection information in user land PHP, via <code>gc_status</code>. The function returns: The number of garbage collection runs. The number of objects collected</p>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/features.gc.refcounting-basics.php" target="_blank">Reference Counting Basics</a></li>
                                        <li><a href="https://www.php.net/manual/en/features.gc.collecting-cycles.php" target="_blank">Collecting Cycles</a></li>
                                        <li><a href="https://www.php.net/manual/en/features.gc.performance-considerations.php" target="_blank">Performance Considerations</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-dtrace-dynamic-tracing" aria-expanded="false" aria-controls="collapseOne">
                                        DTrace Dynamic Tracing
                                    </button>
                                </h5>
                            </div>

                            <div id="features-dtrace-dynamic-tracing" class="collapse" aria-labelledby="#features-dtrace-dynamic-tracing" data-parent="#features-accordion">
                                <div class="card-body">
                                    <p class="para">DTrace is an always-available, low overhead, tracing framework available on a number of platforms including Solaris, macOS, Oracle Linux and BSD. DTrace can trace operating system behavior and user program execution. It can display argument values and be used to infer performance statistics. Probes are monitored by user created scripts written in the DTrace D scripting language. This allows efficient analysis of data points.</p>
                                    <p class="para">PHP probes that are not being actively monitored by a user's DTrace D script do not contain instrumented code so there is no performance degradation during normal application execution. Probes that are being monitored incur an overhead low enough to generally allow DTrace monitoring on live production systems.</p>
                                    <p class="para">PHP incorporates "User-level Statically Defined Tracing" (USDT) probes that are triggered at runtime. For example, when a D script is monitoring PHP's&nbsp;<code class="literal">function-entry</code>&nbsp;probe, then, every time a PHP script function is called, this probe is fired and the associated D script action code is executed. This action code could, for example, print probe arguments such as the source file location of the PHP function. Or the action could aggregate data such as the number of times each function is called.</p>
                                    <p class="para">Only the PHP USDT probes are described here. Refer to external general and operating system-specific DTrace literature to see how DTrace can be used to trace arbitrary functions, and how it can be used to trace operating system behavior. Note not all DTrace features are available in all DTrace implementations.</p>
                                    <p class="para">DTrace static probes are included in PHP 5.4. Prior to this they were available via a&nbsp;<a class="link external" href="https://pecl.php.net/" target="_blank">&raquo;&nbsp;PECL</a>&nbsp;extension, which is now obsolete.</p>
                                    <p class="para">The static DTrace probes in PHP can alternatively be used with the SystemTap facility on some Linux distributions.</p>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_chapter">
                                        <li><a href="https://www.php.net/manual/en/features.dtrace.introduction.php" target="_blank">Introduction to PHP and DTrace</a></li>
                                        <li><a href="https://www.php.net/manual/en/features.dtrace.dtrace.php" target="_blank">Using PHP and DTrace</a></li>
                                        <li><a href="https://www.php.net/manual/en/features.dtrace.systemtap.php" target="_blank">Using SystemTap with PHP DTrace Static Probes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="function-reference" role="tabpanel" aria-labelledby="function-reference">
                    <div class="accordion" id="function-reference-accordion">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-affecting-php-behavior" aria-expanded="true" aria-controls="collapseOne">
                                        Affecting PHP's Behaviour
                                    </button>
                                </h5>
                            </div>

                            <div id="features-affecting-php-behavior" class="collapse show" aria-labelledby="features-affecting-php-behavior" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <p>PHP processes code, but its behavior maybe affected through runtime by many mean. Let's have a look by which way you can affect PHP on how to process the code:</p>
                                    <div class="accordion" id="features-affecting-php-behavior-accordion">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-apcu" aria-expanded="true" aria-controls="collapseOne">
                                                        APCu
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-apcu" class="collapse show" aria-labelledby="features-function-reference-apcu" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p class="para">APCu is an in-memory key-value store for PHP. Keys are of type&nbsp;<span class="type">string</span>&nbsp;and values can be any PHP variables. APCu only supports userland caching of variables.</p>
                                                    <p class="para">APCu is APC stripped of opcode caching.</p>
                                                    <p class="para">The first APCu codebase was versioned 4.0.0, it was forked from the head of the APC master branch at the time. PHP 7 support is available as of APCu 5.0.0. PHP 8 support is available as of APCu 5.1.19.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/intro.apcu.php" target="_blank">Introduction</a></li>
                                                        <li><a href="https://www.php.net/manual/en/apcu.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/apcu.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.apcu.php" target="_blank">APCu Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.apcuiterator.php" target="_blank">APCUIterator</a>&nbsp;&mdash; The APCUIterator class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-componere" aria-expanded="true" aria-controls="collapseOne">
                                                        Componere
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-componere" class="collapse" aria-labelledby="features-function-reference-componere" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-error-handling" aria-expanded="true" aria-controls="collapseOne">
                                                        Error Handling
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-error-handling" class="collapse" aria-labelledby="features-function-reference-error-handling" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p class="para">These are functions dealing with error handling and logging. They allow you to define your own error handling rules, as well as modify the way the errors can be logged. This allows you to change and enhance error reporting to suit your needs.</p>
                                                    <p class="para">With the logging functions, you can send messages directly to other machines, to an email (or email to pager gateway!), to system logs, etc., so you can selectively log and monitor the most important parts of your applications and websites.</p>
                                                    <p class="para">The error reporting functions allow you to customize what level and kind of error feedback is given, ranging from simple notices to customized functions returned during errors.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/errorfunc.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/errorfunc.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/errorfunc.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.errorfunc.php" target="_blank">Error Handling Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-ffi" aria-expanded="true" aria-controls="collapseOne">
                                                        FFI — Foreign Function Interface
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-ffi" class="collapse" aria-labelledby="features-function-reference-ffi" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p class="para">This extension allows the loading of shared libraries (<var class="filename">.DLL</var>&nbsp;or&nbsp;<var class="filename">.so</var>), calling of C functions and accessing of C data structures in pure PHP, without having to have deep knowledge of the Zend extension API, and without having to learn a third &ldquo;intermediate&rdquo; language. The public API is implemented as a single class&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.ffi.php" target="_blank">FFI</a></span>&nbsp;with several static methods (some of them may be called dynamically), and overloaded object methods, which perform the actual interaction with C data.</p>
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ffi.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ffi.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ffi.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.ffi.php" target="_blank">FFI</a>&nbsp;&mdash; Main interface to C code and data</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ffi-cdata.php" target="_blank">FFI\CData</a>&nbsp;&mdash; C Data Handles</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ffi-ctype.php" target="_blank">FFI\CType</a>&nbsp;&mdash; C Type Handles</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ffi-exception.php" target="_blank">FFI\Exception</a>&nbsp;&mdash; FFI Exceptions</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ffi-parserexception.php" target="_blank">FFI\ParserException</a>&nbsp;&mdash; FFI Parser Exceptions</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-opcache" aria-expanded="true" aria-controls="collapseOne">
                                                        OPcache
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-opcache" class="collapse" aria-labelledby="features-function-reference-opcache" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p class="para">OPcache improves PHP performance by storing precompiled script bytecode in shared memory, thereby removing the need for PHP to load and parse scripts on each request.</p>
                                                    <p class="para">This extension is bundled with PHP 5.5.0 and later, and is&nbsp;<a class="link external" href="https://pecl.php.net/package/ZendOpcache" target="_blank">&raquo;&nbsp;available in PECL</a>&nbsp;for PHP versions 5.2, 5.3 and 5.4.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/opcache.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/opcache.preloading.php" target="_blank">Preloading</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.opcache.php" target="_blank">OPcache Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-output-control" aria-expanded="true" aria-controls="collapseOne">
                                                        Output Control — Output Buffering Control
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-output-control" class="collapse" aria-labelledby="features-function-reference-output-control" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p>The Output Control functions allow you to control when output is sent from the script. This can be useful in several different situations, especially if you need to send headers to the browser after your script has begun outputting data. The Output Control functions do not affect headers sent using&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.header.php" target="_blank">header()</a></span>&nbsp;or&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.setcookie.php" target="_blank">setcookie()</a></span>, only functions such as&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.echo.php" target="_blank">echo</a></span>&nbsp;and data between blocks of PHP code.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/outcontrol.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/outcontrol.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/outcontrol.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.outcontrol.php" target="_blank">Output Control Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-phpinfo" aria-expanded="true" aria-controls="collapseOne">
                                                        PHP Options/Info — PHP Options and Information
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-phpinfo" class="collapse" aria-labelledby="#features-function-reference-phpinfo" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p>This functions enable you to get a lot of information about PHP itself, e.g. runtime configuration, loaded extensions, version and much more. You'll also find functions to set options for your running PHP. The probably best known function of PHP -&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.phpinfo.php" target="_blank">phpinfo()</a></span>&nbsp;- can be found here.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/info.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/info.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.info.php" target="_blank">PHP Options/Info Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-phpdebug" aria-expanded="true" aria-controls="collapseOne">
                                                        phpdbg — Interactive PHP Debugger
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-phpdebug" class="collapse" aria-labelledby="#features-function-reference-phpdebug" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/phpdbg.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/phpdbg.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.phpdbg.php" target="_blank">phpdbg Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-runkit" aria-expanded="true" aria-controls="collapseOne">
                                                        runkit7
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-runkit" class="collapse" aria-labelledby="#features-function-reference-runkit" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p class="simpara">The runkit7 extension provides means to modify constants, user-defined functions, and user-defined classes. It also provides for custom superglobal variables.</p>
                                                    <p class="simpara">This package is a fork of the&nbsp;<a class="link external" href="https://pecl.php.net/package/runkit" target="_blank">&raquo;&nbsp;runkit</a>&nbsp;package providing PHP 7 support.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/runkit7.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/runkit7.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.runkit7.php" target="_blank">runkit7 Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-uopz" aria-expanded="true" aria-controls="collapseOne">
                                                        uopz — User Operations for Zend
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-uopz" class="collapse" aria-labelledby="#features-function-reference-uopz" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/uopz.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/uopz.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.uopz.php" target="_blank">Uopz Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-wincache" aria-expanded="true" aria-controls="collapseOne">
                                                        WinCache — Windows Cache for PHP
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-wincache" class="collapse" aria-labelledby="#features-function-reference-wincache" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p class="para">Windows Cache Extension for PHP is a PHP accelerator that is used to increase the speed of PHP applications running on Windows and Windows Server. Once the Windows Cache Extension for PHP is enabled and loaded by the PHP engine, PHP applications can take advantage of the functionality without any code modifications.</p>
                                                    <p class="para">The Windows Cache Extension includes 5 different types of caches. The following describes the purpose of each cache type and the benefits it provides.</p>
                                                    <ul class="itemizedlist">
                                                        <li class="listitem">
                                                            <p class="para"><em class="emphasis">PHP Opcode Cache</em>&nbsp;- PHP is a script processing engine, which reads an input stream of data that contains text and/or PHP instructions and produces another stream of data, most commonly in the HTML format. This means that on a web server the PHP engine reads, parses, compiles and executes a PHP script each time that it is requested by a Web client. The reading, parsing and compilation operations put additional load on the web server's CPU and file system and thus affect the overall performance of a PHP web application. The PHP bytecode (opcode) cache is used to store the compiled script bytecode in shared memory so that it can be re-used by PHP engine for subsequent executions of the same script.</p>
                                                            <p class="para">Support for opcode caching was removed in&nbsp;<code class="literal">Wincache 2.0.0</code>, all users who wish to have an opcache should use the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.opcache.php" target="_blank">OPcache</a>&nbsp;extension that is included with PHP.</p>
                                                        </li>
                                                        <li class="listitem">
                                                            <p class="para"><em class="emphasis">File Cache</em>&nbsp;- Even with the PHP opcode cache enabled, the PHP engine has to accesses the script files on a file system. When PHP scripts are stored on a remote UNC file share, the file operations introduce a significant performance overhead. The Windows Cache Extension for PHP includes a file cache that is used to store the content of the PHP script files in shared memory, which reduces the amount of file system operations performed by PHP engine.</p>
                                                        </li>
                                                        <li class="listitem">
                                                            <p class="para"><em class="emphasis">Resolve File Path Cache</em>&nbsp;- PHP scripts very often include or operate with files by using relative file paths. Every file path has to be normalized to an absolute file path by the PHP engine. When a PHP application uses many PHP files and accesses them by relative paths, the operation of resolving the paths may negatively impact the application's performance. The Windows Cache Extension for PHP provides a Resolve File Path cache, which is used to store the mappings between relative and absolute file paths, thereby reducing the number of path resolutions that the PHP engine has to perform.</p>
                                                        </li>
                                                        <li class="listitem">
                                                            <p class="para"><em class="emphasis">User Cache (available since version 1.1.0)</em>&nbsp;- PHP scripts can take advantage of the shared memory cache by using the user cache API's. PHP objects and variables can be stored in the user cache and then re-used on subsequent requests. This can be used to improve performance of PHP scripts and to share the data across multiple PHP processes.</p>
                                                        </li>
                                                        <li class="listitem">
                                                            <p class="para"><em class="emphasis">Session Handler (available since version 1.1.0)</em>&nbsp;- The WinCache session handler can be used to store the PHP session data in the shared memory cache. This avoids file system operations for reading and writing session data, which improves performance when large amount of data is stored in PHP session.</p>
                                                        </li>
                                                    </ul>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/wincache.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/wincache.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.wincache.php" target="_blank">WinCache Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/wincache.win32build.php" target="_blank">Building for Windows</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-xhprof" aria-expanded="true" aria-controls="collapseOne">
                                                        Xhprof — Hierarchical Profiler
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-xhprof" class="collapse" aria-labelledby="#features-function-reference-xhprof" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p class="para">XHProf is a light-weight hierarchical and instrumentation based profiler. During the data collection phase, it keeps track of call counts and inclusive metrics for arcs in the dynamic callgraph of a program. It computes exclusive metrics in the reporting/post processing phase, such as wall (elapsed) time, CPU time and memory usage. A functions profile can be broken down by callers or callees. XHProf handles recursive functions by detecting cycles in the callgraph at data collection time itself and avoiding the cycles by giving unique depth qualified names for the recursive invocations.</p>
                                                    <p class="para">XHProf includes a simple HTML based user interface (written in PHP). The browser based UI for viewing profiler results makes it easy to view results or to share results with peers. A callgraph image view is also supported.</p>
                                                    <p class="para">XHProf reports can often be helpful in understanding the structure of the code being executed. The hierarchical nature of the reports can be used to determine, for example, what chain of calls led to a particular function getting called.</p>
                                                    <p class="para">XHProf supports ability to compare two runs (a.k.a. "diff" reports) or aggregate data from multiple runs. Diff and aggregate reports, much like single run reports, offer "flat" as well as "hierarchical" views of the profile.</p>
                                                    <p class="para">Additional documentation can be found via the&nbsp;<a class="link external" href="http://web.archive.org/web/20110514095512/http://mirror.facebook.net/facebook/xhprof/doc.html" target="_blank">&raquo;&nbsp;facebook xhprof</a>&nbsp;website.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/xhprof.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xhprof.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xhprof.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.xhprof.php" target="_blank">Xhprof Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#features-function-reference-yac" aria-expanded="true" aria-controls="collapseOne">
                                                        Yac - Yet Another cache
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="features-function-reference-yac" class="collapse" aria-labelledby="#features-function-reference-yac" data-parent="#features-affecting-php-behavior-accordion">
                                                <div class="card-body">
                                                    <p>Yac (Yet Another cache), is a lock-free, shared memory user data cache, could be used to replace APC, local memcache.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/yac.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yac.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.yac.php" target="_blank">Yac</a>&nbsp;&mdash; The Yac class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-audio-formats" aria-expanded="false" aria-controls="collapseOne">
                                        Audio Formats Manipulation
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-audio-formats" class="collapse" aria-labelledby="function-reference-audio-formats" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <p>Platform independent audio bindings. Requires the&nbsp;<a class="link external" href="https://www.openal.org/" target="_blank">&raquo;&nbsp;OpenAL library</a>.</p>

                                    <hr />
                                    <h5>This topci also includes:</h5>
                                    <ul class="chunklist chunklist_set">
                                        <li><a href="https://www.php.net/manual/en/book.openal.php" target="_blank">OpenAL</a>&nbsp;&mdash; OpenAL Audio Bindings
                                            <ul class="chunklist chunklist_set chunklist_children">
                                                <li><a href="https://www.php.net/manual/en/openal.setup.php" target="_blank">Installing/Configuring</a></li>
                                                <li><a href="https://www.php.net/manual/en/openal.constants.php" target="_blank">Predefined Constants</a></li>
                                                <li><a href="https://www.php.net/manual/en/ref.openal.php" target="_blank">OpenAL Functions</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-radius" aria-expanded="false" aria-controls="collapseOne">
                                        Authentication Services - Radius
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-radius" class="collapse" aria-labelledby="function-reference-radius" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <p class="para">This package is based on the libradius (Remote Authentication Dial In User Service) of FreeBSD. It allows clients to perform authentication and accounting by means of network requests to remote servers.</p>
                                    <p class="para">This PECL extension adds full support for Radius Authentication (<a class="link external" href="http://www.faqs.org/rfcs/rfc2865" target="_blank">&raquo;&nbsp;RFC 2865</a>) and Radius Accounting (<a class="link external" href="http://www.faqs.org/rfcs/rfc2866" target="_blank">&raquo;&nbsp;RFC 2866</a>). This package is available for Unix (tested on FreeBSD and Linux) and for Windows.</p>
                                    <blockquote class="blockquote">
                                        <p><strong class="note">Note</strong>:</p>
                                        <p class="para">An exact description for libradius can be found&nbsp;<a class="link external" href="http://www.freebsd.org/cgi/man.cgi?query=libradius" target="_blank">&raquo;&nbsp;here</a>. A detailed description of the configuration file can be found&nbsp;<a class="link external" href="http://www.freebsd.org/cgi/man.cgi?query=radius.conf" target="_blank">&raquo;&nbsp;here</a>.</p>
                                    </blockquote>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_set chunklist_children">
                                        <li><a href="https://www.php.net/manual/en/radius.setup.php" target="_blank">Installing/Configuring</a></li>
                                        <li><a href="https://www.php.net/manual/en/radius.constants.php" target="_blank">Predefined Constants</a></li>
                                        <li><a href="https://www.php.net/manual/en/radius.examples.php" target="_blank">Examples</a></li>
                                        <li><a href="https://www.php.net/manual/en/ref.radius.php" target="_blank">Radius Functions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-readline" aria-expanded="false" aria-controls="collapseOne">
                                        Command Line Specific Extensions - Readline
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-readline" class="collapse" aria-labelledby="function-reference-readline" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <p class="para">The readline functions implement an interface to the GNU Readline library. These are functions that provide editable command lines. An example being the way Bash allows you to use the arrow keys to insert characters or scroll through command history. Because of the interactive nature of this library, it will be of little use for writing Web applications, but may be useful when writing scripts used from a&nbsp;<a class="link" href="https://www.php.net/manual/en/features.commandline.php" target="_blank">command line</a>.</p>
                                    <p class="para">As of PHP 7.1.0 this extension is supported on Windows.</p>
                                    <div class="alert alert-warning"><strong class="caution">Caution</strong>
                                        <p class="para">The readline extension is not thread-safe! Thus, the usage of it with any true thread safe SAPI (like Apache mod_winnt) is strongly discouraged.</p>
                                    </div>

                                    <hr />
                                    <h5>This topic also includes:</h5>
                                    <ul class="chunklist chunklist_set chunklist_children">
                                        <li><a href="https://www.php.net/manual/en/readline.setup.php" target="_blank">Installing/Configuring</a></li>
                                        <li><a href="https://www.php.net/manual/en/readline.constants.php" target="_blank">Predefined Constants</a></li>
                                        <li><a href="https://www.php.net/manual/en/ref.readline.php" target="_blank">Readline Functions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-compression" aria-expanded="false" aria-controls="collapseOne">
                                        Compression and Archive Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-compression" class="collapse" aria-labelledby="function-reference-compression" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-compression">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#compression-bzip2" aria-expanded="false" aria-controls="collapseOne">
                                                        Bzip2
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="compression-bzip2" class="collapse show" aria-labelledby="compression-bzip2" data-parent="#function-reference-accordion-compression">
                                                <div class="card-body">
                                                    <p>The bzip2 functions are used to transparently read and write bzip2 (.bz2) compressed files.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/bzip2.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/bzip2.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/bzip2.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.bzip2.php" target="_blank">Bzip2 Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#compression-lzf" aria-expanded="false" aria-controls="collapseOne">
                                                        LZF
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="compression-lzf" class="collapse" aria-labelledby="compression-lzf" data-parent="#function-reference-accordion-compression">
                                                <div class="card-body">
                                                    <p>LZF is a very fast compression algorithm, ideal for saving space with only slight speed cost. It can be optimized for speed or space at the time of compilation. This extension is using&nbsp;<a class="link external" href="http://oldhome.schmorp.de/marc/liblzf.html" target="_blank">&raquo;&nbsp;liblzf</a>&nbsp;library by Marc Lehmann for its operations.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/lzf.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/lzf.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.lzf.php" target="_blank">LZF Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#compression-phar" aria-expanded="false" aria-controls="collapseOne">
                                                        Phar
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="compression-phar" class="collapse" aria-labelledby="compression-phar" data-parent="#function-reference-accordion-compression">
                                                <div class="card-body">
                                                    <p class="para">The phar extension provides a way to put entire PHP applications into a single file called a "phar" (PHP Archive) for easy distribution and installation. In addition to providing this service, the phar extension also provides a file-format abstraction method for creating and manipulating tar and zip files through the&nbsp;<span class="classname"><a class="classname" href="https://www.php.net/manual/en/class.phardata.php" target="_blank">PharData</a></span>&nbsp;class, much as PDO provides a unified interface for accessing different databases. Unlike PDO, which cannot convert between different databases, Phar also can convert between tar, zip and phar file formats with a single line of code. see&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/phar.converttoexecutable.php" target="_blank">Phar::convertToExecutable()</a></span>&nbsp;for one example.</p>
                                                    <p class="para">What is phar? Phar archives are best characterized as a convenient way to group several files into a single file. As such, a phar archive provides a way to distribute a complete PHP application in a single file and run it from that file without the need to extract it to disk. Additionally, phar archives can be executed by PHP as easily as any other file, both on the commandline and from a web server. Phar is kind of like a thumb drive for PHP applications.</p>

                                                    <a href="https://www.php.net/manual/en/intro.phar.php" target="_blank">
                                                        <h5>Read more about Phar compression</h5>
                                                    </a>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/phar.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/phar.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/phar.using.php" target="_blank">Using Phar Archives</a></li>
                                                        <li><a href="https://www.php.net/manual/en/phar.creating.php" target="_blank">Creating Phar Archives</a></li>
                                                        <li><a href="https://www.php.net/manual/en/phar.fileformat.php" target="_blank">What makes a phar a phar and not a tar or a zip?</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.phar.php" target="_blank">Phar</a>&nbsp;&mdash; The Phar class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.phardata.php" target="_blank">PharData</a>&nbsp;&mdash; The PharData class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.pharfileinfo.php" target="_blank">PharFileInfo</a>&nbsp;&mdash; The PharFileInfo class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.pharexception.php" target="_blank">PharException</a>&nbsp;&mdash; The PharException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#compression-rar" aria-expanded="false" aria-controls="collapseOne">
                                                        Rar
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="compression-rar" class="collapse" aria-labelledby="compression-rar" data-parent="#function-reference-accordion-compression">
                                                <div class="card-body">
                                                    <p class="para">Rar is a powerful and effective archiver created by Eugene Roshal. This extension gives you possibility to read Rar archives but doesn't support writing Rar archives, because this is not supported by the UnRar library and is directly prohibited by its license.</p>
                                                    <p class="para">More information about Rar and UnRar can be found at&nbsp;<a class="link external" href="http://www.rarlabs.com/" target="_blank">&raquo;&nbsp;http://www.rarlabs.com/</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/rar.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/rar.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/rar.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.rar.php" target="_blank">Rar Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.rararchive.php" target="_blank">RarArchive</a>&nbsp;&mdash; The RarArchive class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.rarentry.php" target="_blank">RarEntry</a>&nbsp;&mdash; The RarEntry class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.rarexception.php" target="_blank">RarException</a>&nbsp;&mdash; The RarException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#compression-zip" aria-expanded="false" aria-controls="collapseOne">
                                                        Zip
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="compression-zip" class="collapse" aria-labelledby="compression-zip" data-parent="#function-reference-accordion-compression">
                                                <div class="card-body">
                                                    <p>This extension enables you to transparently read or write ZIP compressed archives and the files inside them.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/zip.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/zip.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/zip.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.ziparchive.php" target="_blank">ZipArchive</a>&nbsp;&mdash; The ZipArchive class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.zip.php" target="_blank">Zip Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#compression-zlib" aria-expanded="false" aria-controls="collapseOne">
                                                        Zlib
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="compression-zlib" class="collapse" aria-labelledby="compression-zlib" data-parent="#function-reference-accordion-compression">
                                                <div class="card-body">
                                                    <p class="para">This module enables you to transparently read and write gzip (.gz) compressed files, through versions of most of the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.filesystem.php" target="_blank">filesystem</a>&nbsp;functions which work with gzip-compressed files (and uncompressed files, too, but not with sockets).</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">PHP comes with a fopen-wrapper for&nbsp;<var class="filename">.gz</var>-files. More information is available in the section about&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.compression.php" target="_blank">zlib://</a>.</p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/zlib.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/zlib.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/zlib.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.zlib.php" target="_blank">Zlib Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.deflatecontext.php" target="_blank">DeflateContext</a>&nbsp;&mdash; The DeflateContext class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.inflatecontext.php" target="_blank">InflateContext</a>&nbsp;&mdash; The InflateContext class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-crypto" aria-expanded="false" aria-controls="collapseOne">
                                        Cryptography Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-crypto" class="collapse" aria-labelledby="function-reference-crypto" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-crypto">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#crypto-csprng" aria-expanded="false" aria-controls="collapseOne">
                                                        CSPRNG
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="crypto-csprng" class="collapse show" aria-labelledby="crypto-csprng" data-parent="#function-reference-accordion-crypto">
                                                <div class="card-body">
                                                    <p class="para">The&nbsp;<a class="link external" href="https://en.wikipedia.org/wiki/Cryptographically_secure_pseudorandom_number_generator" target="_blank">&raquo;&nbsp;cryptographically secure pseudo-random number generator</a>&nbsp;(CSPRNG) API provides an easy and reliable way to generate crypto-strong random integers and bytes for use within cryptographic contexts.</p>
                                                    <p class="para">This exists as of PHP 7.0.0 but there is also a&nbsp;<a class="link external" href="https://github.com/paragonie/random_compat" target="_blank">&raquo;&nbsp;userland implementation</a>&nbsp;for PHP &gt;= 5.2.0.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/csprng.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/csprng.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.csprng.php" target="_blank">CSPRNG Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#crypto-hash" aria-expanded="false" aria-controls="collapseOne">
                                                        Hash — HASH Message Digest Framework
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="crypto-hash" class="collapse" aria-labelledby="crypto-hash" data-parent="#function-reference-accordion-crypto">
                                                <div class="card-body">
                                                    <p>Message Digest (hash) engine. Allows direct or incremental processing of arbitrary length messages using a variety of hashing algorithms.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/hash.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/hash.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.hashcontext.php" target="_blank">HashContext</a>&nbsp;&mdash; The HashContext class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.hash.php" target="_blank">Hash Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#crypto-mhash" aria-expanded="false" aria-controls="collapseOne">
                                                        Mhash
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="crypto-mhash" class="collapse" aria-labelledby="crypto-mhash" data-parent="#function-reference-accordion-crypto">
                                                <div class="card-body">
                                                    <p class="para">These functions are intended to work with&nbsp;<a class="link external" href="http://mhash.sourceforge.net/" target="_blank">&raquo;&nbsp;mhash</a>. Mhash can be used to create checksums, message digests, message authentication codes, and more.</p>
                                                    <p class="para">This is an interface to the mhash library. Mhash supports a wide variety of hash algorithms such as MD5, SHA1, GOST, and many others. For a complete list of supported hashes, refer to the&nbsp;<a class="link" href="https://www.php.net/manual/en/mhash.constants.php" target="_blank">constants page</a>. The general rule is that you can access the hash algorithm from PHP with&nbsp;<strong><code>MHASH_hashname</code></strong>. For example, to access TIGER you use the PHP constant&nbsp;<strong><code>MHASH_TIGER</code></strong>.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">This extension is obsoleted by&nbsp;<a class="link" href="https://www.php.net/manual/en/book.hash.php" target="_blank">Hash</a>.</p>
                                                    </blockquote>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">As of PHP 7.0.0 the Mhash extension has been fully integrated into the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.hash.php" target="_blank">Hash</a>&nbsp;extension. Therefore, it is no longer possible to detect Mhash support with&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.extension-loaded.php" target="_blank">extension_loaded()</a></span>; use&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.function-exists.php" target="_blank">function_exists()</a></span>&nbsp;instead. Furthermore, Mhash is no longer reported by&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.get-loaded-extensions.php" target="_blank">get_loaded_extensions()</a></span>&nbsp;and related features.</p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/mhash.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/mhash.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/mhash.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.mhash.php" target="_blank">Mhash Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#crypto-openssl" aria-expanded="false" aria-controls="collapseOne">
                                                        OpenSSL
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="crypto-openssl" class="collapse" aria-labelledby="crypto-openssl" data-parent="#function-reference-accordion-crypto">
                                                <div class="card-body">
                                                    <p class="para">This extension binds functions of&nbsp;<a class="link external" href="http://www.openssl.org/" target="_blank">&raquo;&nbsp;OpenSSL</a>&nbsp;library for symmetric and asymmetric encryption and decryption, PBKDF2, PKCS7, PKCS12, X509 and other crypto operations. In addition to that it provides implementation of TLS streams.</p>
                                                    <p class="para">OpenSSL offers many features that this module currently doesn't support. Some of these may be added in the future.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/openssl.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/openssl.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/openssl.certparams.php" target="_blank">Key/Certificate parameters</a></li>
                                                        <li><a href="https://www.php.net/manual/en/openssl.cert.verification.php" target="_blank">Certificate Verification</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.openssl.php" target="_blank">OpenSSL Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.opensslcertificate.php" target="_blank">OpenSSLCertificate</a>&nbsp;&mdash; The OpenSSLCertificate class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.opensslcertificatesigningrequest.php" target="_blank">OpenSSLCertificateSigningRequest</a>&nbsp;&mdash; The OpenSSLCertificateSigningRequest class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.opensslasymmetrickey.php" target="_blank">OpenSSLAsymmetricKey</a>&nbsp;&mdash; The OpenSSLAsymmetricKey class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#crypto-password-hashing" aria-expanded="false" aria-controls="collapseOne">
                                                        Password Hashing
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="crypto-password-hashing" class="collapse" aria-labelledby="crypto-password-hashing" data-parent="#function-reference-accordion-crypto">
                                                <div class="card-body">
                                                    <p>The password hashing API provides an easy to use wrapper around&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.crypt.php" target="_blank">crypt()</a></span>&nbsp;and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/password.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/password.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.password.php" target="_blank">Password Hashing Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#crypto-sodium" aria-expanded="false" aria-controls="collapseOne">
                                                        Sodium
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="crypto-sodium" class="collapse" aria-labelledby="crypto-password-hashing" data-parent="#function-reference-accordion-crypto">
                                                <div class="card-body">
                                                    <p>Sodium is a modern, easy-to-use software library for encryption, decryption, signatures, password hashing and more. Its goal is to provide all of the core operations needed to build higher-level cryptographic tools.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/sodium.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/sodium.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.sodium.php" target="_blank">Sodium Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.sodiumexception.php" target="_blank">SodiumException</a>&nbsp;&mdash; The SodiumException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-database-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Database Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-database-extensions" class="collapse" aria-labelledby="function-reference-database-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-db-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-abstraction-layers" aria-expanded="false" aria-controls="collapseOne">
                                                        Abstraction Layers
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="database-extension-abstraction-layers" class="collapse show" aria-labelledby="database-extension-abstraction-layers" data-parent="#function-reference-accordion-db-extensions">
                                                <div class="card-body">
                                                    <div class="accordion" id="function-reference-accordion-db-extensions-abstraction-layers">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-abstraction-layers-dba" aria-expanded="false" aria-controls="collapseOne">
                                                                        Database (dbm-style) Abstraction Layer
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-abstraction-layers-dba" class="collapse show" aria-labelledby="database-extension-abstraction-layers-dba" data-parent="#function-reference-accordion-db-extensions-abstraction-layers">
                                                                <div class="card-body">
                                                                    <p class="para">These functions build the foundation for accessing Berkeley DB style databases.</p>
                                                                    <p class="para">This is a general abstraction layer for several file-based databases. As such, functionality is limited to a common subset of features supported by modern databases such as&nbsp;<a class="link external" href="https://www.oracle.com/database/berkeley-db/db.html" target="_blank">&raquo;&nbsp;Oracle Berkeley DB</a>.</p>

                                                                    <hr />
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
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-close.php" target="_blank">dba_close</a>&nbsp;&mdash; Close a DBA database</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-delete.php" target="_blank">dba_delete</a>&nbsp;&mdash; Delete DBA entry specified by key</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-exists.php" target="_blank">dba_exists</a>&nbsp;&mdash; Check whether key exists</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-fetch.php" target="_blank">dba_fetch</a>&nbsp;&mdash; Fetch data specified by key</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-firstkey.php" target="_blank">dba_firstkey</a>&nbsp;&mdash; Fetch first key</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-handlers.php" target="_blank">dba_handlers</a>&nbsp;&mdash; List all the handlers available</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-insert.php" target="_blank">dba_insert</a>&nbsp;&mdash; Insert entry</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-key-split.php" target="_blank">dba_key_split</a>&nbsp;&mdash; Splits a key in string representation into array representation</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-list.php" target="_blank">dba_list</a>&nbsp;&mdash; List all open database files</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-nextkey.php" target="_blank">dba_nextkey</a>&nbsp;&mdash; Fetch next key</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-open.php" target="_blank">dba_open</a>&nbsp;&mdash; Open database</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-optimize.php" target="_blank">dba_optimize</a>&nbsp;&mdash; Optimize database</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-popen.php" target="_blank">dba_popen</a>&nbsp;&mdash; Open database persistently</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-replace.php" target="_blank">dba_replace</a>&nbsp;&mdash; Replace or insert entry</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.dba-sync.php" target="_blank">dba_sync</a>&nbsp;&mdash; Synchronize database</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-abstraction-layers-odbc" aria-expanded="false" aria-controls="collapseOne">
                                                                        ODBC (Unified)
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-abstraction-layers-odbc" class="collapse" aria-labelledby="database-extension-abstraction-layers-odbc" data-parent="#function-reference-accordion-db-extensions-abstraction-layers">
                                                                <div class="card-body">
                                                                    <p class="para">In addition to normal ODBC support, the Unified ODBC functions in PHP allow you to access several databases that have borrowed the semantics of the ODBC API to implement their own API. Instead of maintaining multiple database drivers that were all nearly identical, these drivers have been unified into a single set of ODBC functions.</p>
                                                                    <p class="para">The following databases are supported by the Unified ODBC functions:&nbsp;<a class="link external" href="http://www.adabas.com/" target="_blank">&raquo;&nbsp;Adabas D</a>,&nbsp;<a class="link external" href="http://www-306.ibm.com/software/data/db2/" target="_blank">&raquo;&nbsp;IBM DB2</a>,&nbsp;<a class="link external" href="http://www.iodbc.org/" target="_blank">&raquo;&nbsp;iODBC</a>,&nbsp;<a class="link external" href="http://www.solidtech.com/" target="_blank">&raquo;&nbsp;Solid</a>, and&nbsp;<a class="link external" href="http://www.sybase.com/" target="_blank">&raquo;&nbsp;Sybase SQL Anywhere</a>.</p>
                                                                    <blockquote class="blockquote">
                                                                        <p><strong class="note">Note</strong>:</p>
                                                                        <p class="para">With the exception of iODBC, there is no ODBC involved when connecting to the above databases. The functions that you use to speak natively to them just happen to share the same names and syntax as the ODBC functions. However, building PHP with iODBC support enables you to use any ODBC-compliant drivers with your PHP applications. More information on iODBC, is available at&nbsp;<a class="link external" href="http://www.iodbc.org/" target="_blank">&raquo;&nbsp;www.iodbc.org</a>&nbsp;with the alternative unixODBC available at&nbsp;<a class="link external" href="http://www.unixodbc.org/" target="_blank">&raquo;&nbsp;www.unixodbc.org</a>.</p>
                                                                    </blockquote>

                                                                    <hr />
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
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-autocommit.php" target="_blank">odbc_autocommit</a>&nbsp;&mdash; Toggle autocommit behaviour</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-binmode.php" target="_blank">odbc_binmode</a>&nbsp;&mdash; Handling of binary column data</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-close-all.php" target="_blank">odbc_close_all</a>&nbsp;&mdash; Close all ODBC connections</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-close.php" target="_blank">odbc_close</a>&nbsp;&mdash; Close an ODBC connection</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-columnprivileges.php" target="_blank">odbc_columnprivileges</a>&nbsp;&mdash; Lists columns and associated privileges for the given table</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-columns.php" target="_blank">odbc_columns</a>&nbsp;&mdash; Lists the column names in specified tables</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-commit.php" target="_blank">odbc_commit</a>&nbsp;&mdash; Commit an ODBC transaction</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-connect.php" target="_blank">odbc_connect</a>&nbsp;&mdash; Connect to a datasource</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-cursor.php" target="_blank">odbc_cursor</a>&nbsp;&mdash; Get cursorname</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-data-source.php" target="_blank">odbc_data_source</a>&nbsp;&mdash; Returns information about available DSNs</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-do.php" target="_blank">odbc_do</a>&nbsp;&mdash; Alias of odbc_exec</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-error.php" target="_blank">odbc_error</a>&nbsp;&mdash; Get the last error code</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-errormsg.php" target="_blank">odbc_errormsg</a>&nbsp;&mdash; Get the last error message</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-exec.php" target="_blank">odbc_exec</a>&nbsp;&mdash; Directly execute an SQL statement</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-execute.php" target="_blank">odbc_execute</a>&nbsp;&mdash; Execute a prepared statement</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-fetch-array.php" target="_blank">odbc_fetch_array</a>&nbsp;&mdash; Fetch a result row as an associative array</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-fetch-into.php" target="_blank">odbc_fetch_into</a>&nbsp;&mdash; Fetch one result row into array</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-fetch-object.php" target="_blank">odbc_fetch_object</a>&nbsp;&mdash; Fetch a result row as an object</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-fetch-row.php" target="_blank">odbc_fetch_row</a>&nbsp;&mdash; Fetch a row</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-field-len.php" target="_blank">odbc_field_len</a>&nbsp;&mdash; Get the length (precision) of a field</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-field-name.php" target="_blank">odbc_field_name</a>&nbsp;&mdash; Get the columnname</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-field-num.php" target="_blank">odbc_field_num</a>&nbsp;&mdash; Return column number</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-field-precision.php" target="_blank">odbc_field_precision</a>&nbsp;&mdash; Alias of odbc_field_len</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-field-scale.php" target="_blank">odbc_field_scale</a>&nbsp;&mdash; Get the scale of a field</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-field-type.php" target="_blank">odbc_field_type</a>&nbsp;&mdash; Datatype of a field</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-foreignkeys.php" target="_blank">odbc_foreignkeys</a>&nbsp;&mdash; Retrieves a list of foreign keys</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-free-result.php" target="_blank">odbc_free_result</a>&nbsp;&mdash; Free resources associated with a result</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-gettypeinfo.php" target="_blank">odbc_gettypeinfo</a>&nbsp;&mdash; Retrieves information about data types supported by the data source</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-longreadlen.php" target="_blank">odbc_longreadlen</a>&nbsp;&mdash; Handling of LONG columns</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-next-result.php" target="_blank">odbc_next_result</a>&nbsp;&mdash; Checks if multiple results are available</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-num-fields.php" target="_blank">odbc_num_fields</a>&nbsp;&mdash; Number of columns in a result</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-num-rows.php" target="_blank">odbc_num_rows</a>&nbsp;&mdash; Number of rows in a result</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-pconnect.php" target="_blank">odbc_pconnect</a>&nbsp;&mdash; Open a persistent database connection</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-prepare.php" target="_blank">odbc_prepare</a>&nbsp;&mdash; Prepares a statement for execution</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-primarykeys.php" target="_blank">odbc_primarykeys</a>&nbsp;&mdash; Gets the primary keys for a table</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-procedurecolumns.php" target="_blank">odbc_procedurecolumns</a>&nbsp;&mdash; Retrieve information about parameters to procedures</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-procedures.php" target="_blank">odbc_procedures</a>&nbsp;&mdash; Get the list of procedures stored in a specific data source</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-result-all.php" target="_blank">odbc_result_all</a>&nbsp;&mdash; Print result as HTML table</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-result.php" target="_blank">odbc_result</a>&nbsp;&mdash; Get result data</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-rollback.php" target="_blank">odbc_rollback</a>&nbsp;&mdash; Rollback a transaction</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-setoption.php" target="_blank">odbc_setoption</a>&nbsp;&mdash; Adjust ODBC settings</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-specialcolumns.php" target="_blank">odbc_specialcolumns</a>&nbsp;&mdash; Retrieves special columns</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-statistics.php" target="_blank">odbc_statistics</a>&nbsp;&mdash; Retrieve statistics about a table</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-tableprivileges.php" target="_blank">odbc_tableprivileges</a>&nbsp;&mdash; Lists tables and the privileges associated with each table</li>
                                                                                <li><a href="https://www.php.net/manual/en/function.odbc-tables.php" target="_blank">odbc_tables</a>&nbsp;&mdash; Get the list of table names stored in a specific data source</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-abstraction-layers-pdo" aria-expanded="false" aria-controls="collapseOne">
                                                                        PHP Data Objects (PDO)
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-abstraction-layers-pdo" class="collapse" aria-labelledby="database-extension-abstraction-layers-pdo" data-parent="#function-reference-accordion-db-extensions-abstraction-layers">
                                                                <div class="card-body">
                                                                    <p class="para">The&nbsp;<code class="literal">PHP Data Objects</code>&nbsp;(<abbr>PDO</abbr>) extension defines a lightweight, consistent interface for accessing databases in PHP. Each database driver that implements the PDO interface can expose database-specific features as regular extension functions. Note that you cannot perform any database functions using the PDO extension by itself; you must use a&nbsp;<a class="link" href="https://www.php.net/manual/en/pdo.drivers.php" target="_blank">database-specific PDO driver</a>&nbsp;to access a database server.</p>
                                                                    <p class="para">PDO provides a&nbsp;<em class="emphasis">data-access</em>&nbsp;abstraction layer, which means that, regardless of which database you're using, you use the same functions to issue queries and fetch data. PDO does&nbsp;<em class="emphasis">not</em>&nbsp;provide a&nbsp;<em class="emphasis">database</em>&nbsp;abstraction; it doesn't rewrite SQL or emulate missing features. You should use a full-blown abstraction layer if you need that facility.</p>
                                                                    <p class="para">PDO ships with PHP.</p>

                                                                    <hr />
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
                                                                        <li><a href="https://www.php.net/manual/en/class.pdo.php" target="_blank">PDO</a>&nbsp;&mdash; The PDO class
                                                                            <ul class="chunklist chunklist_book chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/pdo.begintransaction.php" target="_blank">PDO::beginTransaction</a>&nbsp;&mdash; Initiates a transaction</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.commit.php" target="_blank">PDO::commit</a>&nbsp;&mdash; Commits a transaction</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.construct.php" target="_blank">PDO::__construct</a>&nbsp;&mdash; Creates a PDO instance representing a connection to a database</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.errorcode.php" target="_blank">PDO::errorCode</a>&nbsp;&mdash; Fetch the SQLSTATE associated with the last operation on the database handle</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.errorinfo.php" target="_blank">PDO::errorInfo</a>&nbsp;&mdash; Fetch extended error information associated with the last operation on the database handle</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.exec.php" target="_blank">PDO::exec</a>&nbsp;&mdash; Execute an SQL statement and return the number of affected rows</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.getattribute.php" target="_blank">PDO::getAttribute</a>&nbsp;&mdash; Retrieve a database connection attribute</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.getavailabledrivers.php" target="_blank">PDO::getAvailableDrivers</a>&nbsp;&mdash; Return an array of available PDO drivers</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.intransaction.php" target="_blank">PDO::inTransaction</a>&nbsp;&mdash; Checks if inside a transaction</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.lastinsertid.php" target="_blank">PDO::lastInsertId</a>&nbsp;&mdash; Returns the ID of the last inserted row or sequence value</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.prepare.php" target="_blank">PDO::prepare</a>&nbsp;&mdash; Prepares a statement for execution and returns a statement object</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.query.php" target="_blank">PDO::query</a>&nbsp;&mdash; Prepares and executes an SQL statement without placeholders</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.quote.php" target="_blank">PDO::quote</a>&nbsp;&mdash; Quotes a string for use in a query</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.rollback.php" target="_blank">PDO::rollBack</a>&nbsp;&mdash; Rolls back a transaction</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdo.setattribute.php" target="_blank">PDO::setAttribute</a>&nbsp;&mdash; Set an attribute</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="https://www.php.net/manual/en/class.pdostatement.php" target="_blank">PDOStatement</a>&nbsp;&mdash; The PDOStatement class
                                                                            <ul class="chunklist chunklist_book chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.bindcolumn.php" target="_blank">PDOStatement::bindColumn</a>&nbsp;&mdash; Bind a column to a PHP variable</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.bindparam.php" target="_blank">PDOStatement::bindParam</a>&nbsp;&mdash; Binds a parameter to the specified variable name</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.bindvalue.php" target="_blank">PDOStatement::bindValue</a>&nbsp;&mdash; Binds a value to a parameter</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.closecursor.php" target="_blank">PDOStatement::closeCursor</a>&nbsp;&mdash; Closes the cursor, enabling the statement to be executed again</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.columncount.php" target="_blank">PDOStatement::columnCount</a>&nbsp;&mdash; Returns the number of columns in the result set</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.debugdumpparams.php" target="_blank">PDOStatement::debugDumpParams</a>&nbsp;&mdash; Dump an SQL prepared command</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.errorcode.php" target="_blank">PDOStatement::errorCode</a>&nbsp;&mdash; Fetch the SQLSTATE associated with the last operation on the statement handle</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.errorinfo.php" target="_blank">PDOStatement::errorInfo</a>&nbsp;&mdash; Fetch extended error information associated with the last operation on the statement handle</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.execute.php" target="_blank">PDOStatement::execute</a>&nbsp;&mdash; Executes a prepared statement</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.fetch.php" target="_blank">PDOStatement::fetch</a>&nbsp;&mdash; Fetches the next row from a result set</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.fetchall.php" target="_blank">PDOStatement::fetchAll</a>&nbsp;&mdash; Fetches the remaining rows from a result set</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.fetchcolumn.php" target="_blank">PDOStatement::fetchColumn</a>&nbsp;&mdash; Returns a single column from the next row of a result set</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.fetchobject.php" target="_blank">PDOStatement::fetchObject</a>&nbsp;&mdash; Fetches the next row and returns it as an object</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.getattribute.php" target="_blank">PDOStatement::getAttribute</a>&nbsp;&mdash; Retrieve a statement attribute</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.getcolumnmeta.php" target="_blank">PDOStatement::getColumnMeta</a>&nbsp;&mdash; Returns metadata for a column in a result set</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.getiterator.php" target="_blank">PDOStatement::getIterator</a>&nbsp;&mdash; Gets result set iterator</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.nextrowset.php" target="_blank">PDOStatement::nextRowset</a>&nbsp;&mdash; Advances to the next rowset in a multi-rowset statement handle</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.rowcount.php" target="_blank">PDOStatement::rowCount</a>&nbsp;&mdash; Returns the number of rows affected by the last SQL statement</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.setattribute.php" target="_blank">PDOStatement::setAttribute</a>&nbsp;&mdash; Set a statement attribute</li>
                                                                                <li><a href="https://www.php.net/manual/en/pdostatement.setfetchmode.php" target="_blank">PDOStatement::setFetchMode</a>&nbsp;&mdash; Set the default fetch mode for this statement</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="https://www.php.net/manual/en/class.pdoexception.php" target="_blank">PDOException</a>&nbsp;&mdash; The PDOException class</li>
                                                                        <li><a href="https://www.php.net/manual/en/pdo.drivers.php" target="_blank">PDO Drivers</a>
                                                                            <ul class="chunklist chunklist_book chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-cubrid.php" target="_blank">CUBRID (PDO)</a>&nbsp;&mdash; CUBRID Functions (PDO_CUBRID)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-dblib.php" target="_blank">MS SQL Server (PDO)</a>&nbsp;&mdash; Microsoft SQL Server and Sybase Functions (PDO_DBLIB)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-firebird.php" target="_blank">Firebird (PDO)</a>&nbsp;&mdash; Firebird Functions (PDO_FIREBIRD)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-ibm.php" target="_blank">IBM (PDO)</a>&nbsp;&mdash; IBM Functions (PDO_IBM)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-informix.php" target="_blank">Informix (PDO)</a>&nbsp;&mdash; Informix Functions (PDO_INFORMIX)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-mysql.php" target="_blank">MySQL (PDO)</a>&nbsp;&mdash; MySQL Functions (PDO_MYSQL)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-sqlsrv.php" target="_blank">MS SQL Server (PDO)</a>&nbsp;&mdash; Microsoft SQL Server Functions (PDO_SQLSRV)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-oci.php" target="_blank">Oracle (PDO)</a>&nbsp;&mdash; Oracle Functions (PDO_OCI)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-odbc.php" target="_blank">ODBC and DB2 (PDO)</a>&nbsp;&mdash; ODBC and DB2 Functions (PDO_ODBC)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-pgsql.php" target="_blank">PostgreSQL (PDO)</a>&nbsp;&mdash; PostgreSQL Functions (PDO_PGSQL)</li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.pdo-sqlite.php" target="_blank">SQLite (PDO)</a>&nbsp;&mdash; SQLite Functions (PDO_SQLITE)</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-vendors" aria-expanded="false" aria-controls="collapseOne">
                                                        Vendor Specific Database Extensions
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="database-extension-vendors" class="collapse" aria-labelledby="database-extension-vendors" data-parent="#function-reference-accordion-db-extensions">
                                                <div class="card-body">
                                                    <div class="accordion" id="function-reference-accordion-db-extensions-vendors">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-vendors-cubrid" aria-expanded="false" aria-controls="collapseOne">
                                                                        CUBRID
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-vendors-cubrid" class="collapse show" aria-labelledby="database-extension-vendors-cubrid" data-parent="#function-reference-accordion-db-extensions-vendors">
                                                                <div class="card-body">
                                                                    <p class="para">These functions allow you to access CUBRID database servers. More information about CUBRID can be found at&nbsp;<a class="link external" href="http://www.cubrid.org/" target="_blank">&raquo;&nbsp;CUBRID</a>.</p>
                                                                    <p class="para">Documentation for CUBRID can be found at&nbsp;<a class="link external" href="http://www.cubrid.org/documentation/" target="_blank">&raquo;&nbsp;CUBRID Documentation</a>.</p>/

                                                                    <hr />
                                                                    <h5>This topic also includes:</h5>
                                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                                        <li><a href="https://www.php.net/manual/en/cubrid.setup.php" target="_blank">Installing/Configuring</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/cubrid.constants.php" target="_blank">Predefined Constants</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/cubrid.examples.php" target="_blank">Examples</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/ref.cubrid.php" target="_blank">CUBRID Functions</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/cubridmysql.cubrid.php" target="_blank">CUBRID MySQL Compatibility Functions</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/oldaliases.cubrid.php" target="_blank">CUBRID Obsolete Aliases and Functions</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-vendors-ibm-db2" aria-expanded="false" aria-controls="collapseOne">
                                                                        IBM DB2 — IBM DB2, Cloudscape and Apache Derby
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-vendors-ibm-db2" class="collapse" aria-labelledby="database-extension-vendors-ibm-db2" data-parent="#function-reference-accordion-db-extensions-vendors">
                                                                <div class="card-body">
                                                                    <p>These functions enable you to access IBM DB2 Universal Database, IBM Cloudscape, and Apache Derby databases using the DB2 Call Level Interface (DB2 CLI).</p>

                                                                    <hr />
                                                                    <h5>This topic also includes:</h5>
                                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                                        <li><a href="https://www.php.net/manual/en/ibm-db2.setup.php" target="_blank">Installing/Configuring</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/ibm-db2.constants.php" target="_blank">Predefined Constants</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/ref.ibm-db2.php" target="_blank">IBM DB2 Functions</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-vendors-mongodb" aria-expanded="false" aria-controls="collapseOne">
                                                                        MongoDB driver
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-vendors-mongodb" class="collapse" aria-labelledby="database-extension-vendors-mongodb" data-parent="#function-reference-accordion-db-extensions-vendors">
                                                                <div class="card-body">
                                                                    <div class="info">
                                                                        <div class="abstract">
                                                                            <p class="simpara">This extension is developed atop the&nbsp;<a class="link external" href="https://github.com/mongodb/mongo-c-driver" target="_blank">&raquo;&nbsp;libmongoc</a>&nbsp;and&nbsp;<a class="link external" href="https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson" target="_blank">&raquo;&nbsp;libbson</a>&nbsp;libraries. It provides a minimal API for core driver functionality:&nbsp;<a class="link" href="https://www.php.net/manual/en/class.mongodb-driver-command.php" target="_blank">commands</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/class.mongodb-driver-query.php" target="_blank">queries</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/class.mongodb-driver-bulkwrite.php" target="_blank">writes</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/class.mongodb-driver-manager.php" target="_blank">connection management</a>, and&nbsp;<a class="link" href="https://www.php.net/manual/en/book.bson.php" target="_blank">BSON serialization</a>.</p>
                                                                            <p class="simpara">Userland PHP libraries that depend on this extension may provide higher level APIs, such as query builders, individual command helper methods, and GridFS. Application developers should consider using this extension in conjunction with the&nbsp;<a class="link external" href="https://github.com/mongodb/mongo-php-library" target="_blank">&raquo;&nbsp;MongoDB PHP library</a>, which implements the same higher level APIs found in MongoDB drivers for other languages. This separation of concerns allows the driver to focus on essential features for which an extension implementation is paramount for performance.</p>
                                                                        </div>
                                                                    </div>

                                                                    <hr />
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
                                                                        <li><a href="https://www.php.net/manual/en/mongodb.architecture.php" target="_blank">Driver Architecture and Internals</a>&nbsp;&mdash; Explains the driver architecture, and special features
                                                                            <ul class="chunklist chunklist_set chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/mongodb.overview.php" target="_blank">Architecture</a>&nbsp;&mdash; Architecture Overview</li>
                                                                                <li><a href="https://www.php.net/manual/en/mongodb.connection-handling.php" target="_blank">Connections</a>&nbsp;&mdash; Connection handling and persistence</li>
                                                                                <li><a href="https://www.php.net/manual/en/mongodb.persistence.php" target="_blank">Persisting Data</a>&nbsp;&mdash; Serialization and deserialization of PHP variables into MongoDB</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="https://www.php.net/manual/en/mongodb.security.php" target="_blank">Security</a>
                                                                            <ul class="chunklist chunklist_set chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/mongodb.security.request_injection.php" target="_blank">Request Injection Attacks</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mongodb.security.script_injection.php" target="_blank">Script Injection Attacks</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="https://www.php.net/manual/en/book.mongodb.php" target="_blank">MongoDB\Driver</a>&nbsp;&mdash; MongoDB driver classes
                                                                            <ul class="chunklist chunklist_set chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-manager.php" target="_blank">MongoDB\Driver\Manager</a>&nbsp;&mdash; The MongoDB\Driver\Manager class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-command.php" target="_blank">MongoDB\Driver\Command</a>&nbsp;&mdash; The MongoDB\Driver\Command class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-query.php" target="_blank">MongoDB\Driver\Query</a>&nbsp;&mdash; The MongoDB\Driver\Query class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-bulkwrite.php" target="_blank">MongoDB\Driver\BulkWrite</a>&nbsp;&mdash; The MongoDB\Driver\BulkWrite class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-session.php" target="_blank">MongoDB\Driver\Session</a>&nbsp;&mdash; The MongoDB\Driver\Session class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-clientencryption.php" target="_blank">MongoDB\Driver\ClientEncryption</a>&nbsp;&mdash; The MongoDB\Driver\ClientEncryption class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-serverapi.php" target="_blank">MongoDB\Driver\ServerApi</a>&nbsp;&mdash; The MongoDB\Driver\ServerApi class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-writeconcern.php" target="_blank">MongoDB\Driver\WriteConcern</a>&nbsp;&mdash; The MongoDB\Driver\WriteConcern class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-readpreference.php" target="_blank">MongoDB\Driver\ReadPreference</a>&nbsp;&mdash; The MongoDB\Driver\ReadPreference class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-readconcern.php" target="_blank">MongoDB\Driver\ReadConcern</a>&nbsp;&mdash; The MongoDB\Driver\ReadConcern class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-cursor.php" target="_blank">MongoDB\Driver\Cursor</a>&nbsp;&mdash; The MongoDB\Driver\Cursor class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-cursorid.php" target="_blank">MongoDB\Driver\CursorId</a>&nbsp;&mdash; The MongoDB\Driver\CursorId class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-cursorinterface.php" target="_blank">MongoDB\Driver\CursorInterface</a>&nbsp;&mdash; The MongoDB\Driver\CursorInterface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-server.php" target="_blank">MongoDB\Driver\Server</a>&nbsp;&mdash; The MongoDB\Driver\Server class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-serverdescription.php" target="_blank">MongoDB\Driver\ServerDescription</a>&nbsp;&mdash; The MongoDB\Driver\ServerDescription class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-topologydescription.php" target="_blank">MongoDB\Driver\TopologyDescription</a>&nbsp;&mdash; The MongoDB\Driver\TopologyDescription class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-writeconcernerror.php" target="_blank">MongoDB\Driver\WriteConcernError</a>&nbsp;&mdash; The MongoDB\Driver\WriteConcernError class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-writeerror.php" target="_blank">MongoDB\Driver\WriteError</a>&nbsp;&mdash; The MongoDB\Driver\WriteError class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-writeresult.php" target="_blank">MongoDB\Driver\WriteResult</a>&nbsp;&mdash; The MongoDB\Driver\WriteResult class</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="https://www.php.net/manual/en/book.bson.php" target="_blank">MongoDB\BSON</a>&nbsp;&mdash; BSON type classes and serialization functions
                                                                            <ul class="chunklist chunklist_set chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/ref.bson.functions.php" target="_blank">Functions</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-binary.php" target="_blank">MongoDB\BSON\Binary</a>&nbsp;&mdash; The MongoDB\BSON\Binary class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-decimal128.php" target="_blank">MongoDB\BSON\Decimal128</a>&nbsp;&mdash; The MongoDB\BSON\Decimal128 class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-javascript.php" target="_blank">MongoDB\BSON\Javascript</a>&nbsp;&mdash; The MongoDB\BSON\Javascript class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-maxkey.php" target="_blank">MongoDB\BSON\MaxKey</a>&nbsp;&mdash; The MongoDB\BSON\MaxKey class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-minkey.php" target="_blank">MongoDB\BSON\MinKey</a>&nbsp;&mdash; The MongoDB\BSON\MinKey class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-objectid.php" target="_blank">MongoDB\BSON\ObjectId</a>&nbsp;&mdash; The MongoDB\BSON\ObjectId class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-regex.php" target="_blank">MongoDB\BSON\Regex</a>&nbsp;&mdash; The MongoDB\BSON\Regex class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-timestamp.php" target="_blank">MongoDB\BSON\Timestamp</a>&nbsp;&mdash; The MongoDB\BSON\Timestamp class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-utcdatetime.php" target="_blank">MongoDB\BSON\UTCDateTime</a>&nbsp;&mdash; The MongoDB\BSON\UTCDateTime class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-type.php" target="_blank">MongoDB\BSON\Type</a>&nbsp;&mdash; The MongoDB\BSON\Type interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-persistable.php" target="_blank">MongoDB\BSON\Persistable</a>&nbsp;&mdash; The MongoDB\BSON\Persistable interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-serializable.php" target="_blank">MongoDB\BSON\Serializable</a>&nbsp;&mdash; The MongoDB\BSON\Serializable interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-unserializable.php" target="_blank">MongoDB\BSON\Unserializable</a>&nbsp;&mdash; The MongoDB\BSON\Unserializable interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-binaryinterface.php" target="_blank">MongoDB\BSON\BinaryInterface</a>&nbsp;&mdash; The MongoDB\BSON\BinaryInterface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-decimal128interface.php" target="_blank">MongoDB\BSON\Decimal128Interface</a>&nbsp;&mdash; The MongoDB\BSON\Decimal128Interface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-javascriptinterface.php" target="_blank">MongoDB\BSON\JavascriptInterface</a>&nbsp;&mdash; The MongoDB\BSON\JavascriptInterface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-maxkeyinterface.php" target="_blank">MongoDB\BSON\MaxKeyInterface</a>&nbsp;&mdash; The MongoDB\BSON\MaxKeyInterface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-minkeyinterface.php" target="_blank">MongoDB\BSON\MinKeyInterface</a>&nbsp;&mdash; The MongoDB\BSON\MinKeyInterface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-objectidinterface.php" target="_blank">MongoDB\BSON\ObjectIdInterface</a>&nbsp;&mdash; The MongoDB\BSON\ObjectIdInterface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-regexinterface.php" target="_blank">MongoDB\BSON\RegexInterface</a>&nbsp;&mdash; The MongoDB\BSON\RegexInterface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-timestampinterface.php" target="_blank">MongoDB\BSON\TimestampInterface</a>&nbsp;&mdash; The MongoDB\BSON\TimestampInterface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-utcdatetimeinterface.php" target="_blank">MongoDB\BSON\UTCDateTimeInterface</a>&nbsp;&mdash; The MongoDB\BSON\UTCDateTimeInterface interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-dbpointer.php" target="_blank">MongoDB\BSON\DBPointer</a>&nbsp;&mdash; The MongoDB\BSON\DBPointer class (deprecated)</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-int64.php" target="_blank">MongoDB\BSON\Int64</a>&nbsp;&mdash; The MongoDB\BSON\Int64 class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-symbol.php" target="_blank">MongoDB\BSON\Symbol</a>&nbsp;&mdash; The MongoDB\BSON\Symbol class (deprecated)</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-bson-undefined.php" target="_blank">MongoDB\BSON\Undefined</a>&nbsp;&mdash; The MongoDB\BSON\Undefined class (deprecated)</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="https://www.php.net/manual/en/mongodb.monitoring.php" target="_blank">MongoDB\Driver\Monitoring</a>&nbsp;&mdash; Monitoring classes and subscriber functions
                                                                            <ul class="chunklist chunklist_set chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/ref.monitoring.functions.php" target="_blank">Functions</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-commandfailedevent.php" target="_blank">MongoDB\Driver\Monitoring\CommandFailedEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\CommandFailedEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-commandstartedevent.php" target="_blank">MongoDB\Driver\Monitoring\CommandStartedEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\CommandStartedEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-commandsucceededevent.php" target="_blank">MongoDB\Driver\Monitoring\CommandSucceededEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\CommandSucceededEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverchangedevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerChangedEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\ServerChangedEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverclosedevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerClosedEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\ServerClosedEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serveropeningevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerOpeningEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\ServerOpeningEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverheartbeatfailedevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverheartbeatstartedevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-serverheartbeatsucceededevent.php" target="_blank">MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-topologychangedevent.php" target="_blank">MongoDB\Driver\Monitoring\TopologyChangedEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\TopologyChangedEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-topologyclosedevent.php" target="_blank">MongoDB\Driver\Monitoring\TopologyClosedEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\TopologyClosedEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-topologyopeningevent.php" target="_blank">MongoDB\Driver\Monitoring\TopologyOpeningEvent</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\TopologyOpeningEvent class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-commandsubscriber.php" target="_blank">MongoDB\Driver\Monitoring\CommandSubscriber</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\CommandSubscriber interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-sdamsubscriber.php" target="_blank">MongoDB\Driver\Monitoring\SDAMSubscriber</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\SDAMSubscriber interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-monitoring-subscriber.php" target="_blank">MongoDB\Driver\Monitoring\Subscriber</a>&nbsp;&mdash; The MongoDB\Driver\Monitoring\Subscriber interface</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="https://www.php.net/manual/en/mongodb.exceptions.php" target="_blank">MongoDB\Driver\Exception</a>&nbsp;&mdash; Exception classes
                                                                            <ul class="chunklist chunklist_set chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-authenticationexception.php" target="_blank">MongoDB\Driver\Exception\AuthenticationException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\AuthenticationException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-bulkwriteexception.php" target="_blank">MongoDB\Driver\Exception\BulkWriteException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\BulkWriteException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-commandexception.php" target="_blank">MongoDB\Driver\Exception\CommandException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\CommandException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-connectionexception.php" target="_blank">MongoDB\Driver\Exception\ConnectionException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\ConnectionException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-connectiontimeoutexception.php" target="_blank">MongoDB\Driver\Exception\ConnectionTimeoutException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\ConnectionTimeoutException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-encryptionexception.php" target="_blank">MongoDB\Driver\Exception\EncryptionException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\EncryptionException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-exception.php" target="_blank">MongoDB\Driver\Exception\Exception</a>&nbsp;&mdash; The MongoDB\Driver\Exception\Exception interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-executiontimeoutexception.php" target="_blank">MongoDB\Driver\Exception\ExecutionTimeoutException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\ExecutionTimeoutException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-invalidargumentexception.php" target="_blank">MongoDB\Driver\Exception\InvalidArgumentException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\InvalidArgumentException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-logicexception.php" target="_blank">MongoDB\Driver\Exception\LogicException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\LogicException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php" target="_blank">MongoDB\Driver\Exception\RuntimeException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\RuntimeException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-serverexception.php" target="_blank">MongoDB\Driver\Exception\ServerException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\ServerException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-sslconnectionexception.php" target="_blank">MongoDB\Driver\Exception\SSLConnectionException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\SSLConnectionException class (deprecated)</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-unexpectedvalueexception.php" target="_blank">MongoDB\Driver\Exception\UnexpectedValueException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\UnexpectedValueException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mongodb-driver-exception-writeexception.php" target="_blank">MongoDB\Driver\Exception\WriteException</a>&nbsp;&mdash; The MongoDB\Driver\Exception\WriteException class</li>
                                                                                <li><a href="https://www.php.net/manual/en/mongodb.exceptions.tree.php" target="_blank">Class Tree</a>&nbsp;&mdash; MongoDB Exception Class Tree</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-vendors-mysql" aria-expanded="false" aria-controls="collapseOne">
                                                                        MySQL — MySQL Drivers and Plugins
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-vendors-mysql" class="collapse" aria-labelledby="database-extension-vendors-mysql" data-parent="#function-reference-accordion-db-extensions-vendors">
                                                                <div class="card-body">
                                                                    <p class="para">PHP offers several MySQL drivers and plugins for accessing and handling MySQL.</p>
                                                                    <p class="para">The differences and functionality of the MySQL extensions are described within the overview of this section.</p>

                                                                    <hr />
                                                                    <h5>This topic also includes:</h5>
                                                                    <ul class="chunklist chunklist_set">
                                                                        <li><a href="https://www.php.net/manual/en/book.mysqli.php" target="_blank">MySQLi</a>&nbsp;&mdash; MySQL Improved Extension
                                                                            <ul class="chunklist chunklist_set chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/intro.mysqli.php" target="_blank">Introduction</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysqli.overview.php" target="_blank">Overview</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysqli.quickstart.php" target="_blank">Quick start guide</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysqli.setup.php" target="_blank">Installing/Configuring</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysqli.persistconns.php" target="_blank">The mysqli Extension and Persistent Connections</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysqli.constants.php" target="_blank">Predefined Constants</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysqli.notes.php" target="_blank">Notes</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysqli.summary.php" target="_blank">The MySQLi Extension Function Summary</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysqli.php" target="_blank">mysqli</a>&nbsp;&mdash; The mysqli class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysqli-stmt.php" target="_blank">mysqli_stmt</a>&nbsp;&mdash; The mysqli_stmt class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysqli-result.php" target="_blank">mysqli_result</a>&nbsp;&mdash; The mysqli_result class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysqli-driver.php" target="_blank">mysqli_driver</a>&nbsp;&mdash; The mysqli_driver class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysqli-warning.php" target="_blank">mysqli_warning</a>&nbsp;&mdash; The mysqli_warning class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysqli-sql-exception.php" target="_blank">mysqli_sql_exception</a>&nbsp;&mdash; The mysqli_sql_exception class</li>
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
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-baseresult.php" target="_blank">mysql_xdevapi\BaseResult</a>&nbsp;&mdash; BaseResult interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-client.php" target="_blank">mysql_xdevapi\Client</a>&nbsp;&mdash; Client class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collection.php" target="_blank">mysql_xdevapi\Collection</a>&nbsp;&mdash; Collection class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collectionadd.php" target="_blank">mysql_xdevapi\CollectionAdd</a>&nbsp;&mdash; CollectionAdd class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collectionfind.php" target="_blank">mysql_xdevapi\CollectionFind</a>&nbsp;&mdash; CollectionFind class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collectionmodify.php" target="_blank">mysql_xdevapi\CollectionModify</a>&nbsp;&mdash; CollectionModify class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-collectionremove.php" target="_blank">mysql_xdevapi\CollectionRemove</a>&nbsp;&mdash; CollectionRemove class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-columnresult.php" target="_blank">mysql_xdevapi\ColumnResult</a>&nbsp;&mdash; ColumnResult class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-crudoperationbindable.php" target="_blank">mysql_xdevapi\CrudOperationBindable</a>&nbsp;&mdash; CrudOperationBindable interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-crudoperationlimitable.php" target="_blank">mysql_xdevapi\CrudOperationLimitable</a>&nbsp;&mdash; CrudOperationLimitable interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-crudoperationskippable.php" target="_blank">mysql_xdevapi\CrudOperationSkippable</a>&nbsp;&mdash; CrudOperationSkippable interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-crudoperationsortable.php" target="_blank">mysql_xdevapi\CrudOperationSortable</a>&nbsp;&mdash; CrudOperationSortable interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-databaseobject.php" target="_blank">mysql_xdevapi\DatabaseObject</a>&nbsp;&mdash; DatabaseObject interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-docresult.php" target="_blank">mysql_xdevapi\DocResult</a>&nbsp;&mdash; DocResult class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-exception.php" target="_blank">mysql_xdevapi\Exception</a>&nbsp;&mdash; Exception class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-executable.php" target="_blank">mysql_xdevapi\Executable</a>&nbsp;&mdash; Executable interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-executionstatus.php" target="_blank">mysql_xdevapi\ExecutionStatus</a>&nbsp;&mdash; ExecutionStatus class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-expression.php" target="_blank">mysql_xdevapi\Expression</a>&nbsp;&mdash; Expression class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-result.php" target="_blank">mysql_xdevapi\Result</a>&nbsp;&mdash; Result class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-rowresult.php" target="_blank">mysql_xdevapi\RowResult</a>&nbsp;&mdash; RowResult class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-schema.php" target="_blank">mysql_xdevapi\Schema</a>&nbsp;&mdash; Schema class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-schemaobject.php" target="_blank">mysql_xdevapi\SchemaObject</a>&nbsp;&mdash; SchemaObject interface</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-session.php" target="_blank">mysql_xdevapi\Session</a>&nbsp;&mdash; Session class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-sqlstatement.php" target="_blank">mysql_xdevapi\SqlStatement</a>&nbsp;&mdash; SqlStatement class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-sqlstatementresult.php" target="_blank">mysql_xdevapi\SqlStatementResult</a>&nbsp;&mdash; SqlStatementResult class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-statement.php" target="_blank">mysql_xdevapi\Statement</a>&nbsp;&mdash; Statement class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-table.php" target="_blank">mysql_xdevapi\Table</a>&nbsp;&mdash; Table class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-tabledelete.php" target="_blank">mysql_xdevapi\TableDelete</a>&nbsp;&mdash; TableDelete class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-tableinsert.php" target="_blank">mysql_xdevapi\TableInsert</a>&nbsp;&mdash; TableInsert class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-tableselect.php" target="_blank">mysql_xdevapi\TableSelect</a>&nbsp;&mdash; TableSelect class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-tableupdate.php" target="_blank">mysql_xdevapi\TableUpdate</a>&nbsp;&mdash; TableUpdate class</li>
                                                                                <li><a href="https://www.php.net/manual/en/class.mysql-xdevapi-warning.php" target="_blank">mysql_xdevapi\Warning</a>&nbsp;&mdash; Warning class</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="https://www.php.net/manual/en/book.mysql.php" target="_blank">MySQL (Original)</a>&nbsp;&mdash; Original MySQL API
                                                                            <ul class="chunklist chunklist_set chunklist_children">
                                                                                <li><a href="https://www.php.net/manual/en/intro.mysql.php" target="_blank">Introduction</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysql.setup.php" target="_blank">Installing/Configuring</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/changelog.mysql.php" target="_blank">Changelog</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysql.constants.php" target="_blank">Predefined Constants</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/mysql.examples.php" target="_blank">Examples</a></li>
                                                                                <li><a href="https://www.php.net/manual/en/ref.mysql.php" target="_blank">MySQL Functions</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="https://www.php.net/manual/en/book.mysqlnd.php" target="_blank">Mysqlnd</a>&nbsp;&mdash; MySQL Native Driver
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-vendors-oci8" aria-expanded="false" aria-controls="collapseOne">
                                                                        OCI8 — Oracle OCI8
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-vendors-oci8" class="collapse" aria-labelledby="database-extension-vendors-oci8" data-parent="#function-reference-accordion-db-extensions-vendors">
                                                                <div class="card-body">
                                                                    <p>These functions allow you to access Oracle Database. They support SQL and PL/SQL statements. Basic features include transaction control, binding of PHP variables to Oracle placeholders, and support for large object (LOB) types and collections. Oracle's scalability features such as Database Resident Connection Pooling (DRCP) and result caching are also supported.</p>

                                                                    <hr />
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
                                                                        <li><a href="https://www.php.net/manual/en/class.ocicollection.php" target="_blank">OCICollection</a>&nbsp;&mdash; The OCICollection class</li>
                                                                        <li><a href="https://www.php.net/manual/en/class.ocilob.php" target="_blank">OCILob</a>&nbsp;&mdash; The OCILob class</li>
                                                                        <li><a href="https://www.php.net/manual/en/oldaliases.oci8.php" target="_blank">OCI8 Obsolete Aliases and Functions</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-vendors-pgsql" aria-expanded="false" aria-controls="collapseOne">
                                                                        PostgreSQL
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-vendors-pgsql" class="collapse" aria-labelledby="database-extension-vendors-pgsql" data-parent="#function-reference-accordion-db-extensions-vendors">
                                                                <div class="card-body">
                                                                    <p>PostgreSQL database is an Open Source product and available without cost. Postgres, developed originally in the UC Berkeley Computer Science Department, pioneered many of the object-relational concepts now becoming available in some commercial databases. It provides SQL92/SQL99 language support, transactions, referential integrity, stored procedures and type extensibility. PostgreSQL is an open source descendant of this original Berkeley code.</p>

                                                                    <hr />
                                                                    <h5>This topci also includes:</h5>
                                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                                        <li><a href="https://www.php.net/manual/en/pgsql.setup.php" target="_blank">Installing/Configuring</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/pgsql.constants.php" target="_blank">Predefined Constants</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/pgsql.examples.php" target="_blank">Examples</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/ref.pgsql.php" target="_blank">PostgreSQL Functions</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/class.pgsql-connection.php" target="_blank">PgSql\Connection</a>&nbsp;&mdash; The PgSql\Connection class</li>
                                                                        <li><a href="https://www.php.net/manual/en/class.pgsql-result.php" target="_blank">PgSql\Result</a>&nbsp;&mdash; The PgSql\Result class</li>
                                                                        <li><a href="https://www.php.net/manual/en/class.pgsql-lob.php" target="_blank">PgSql\Lob</a>&nbsp;&mdash; The PgSql\Lob class</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-vendors-sqlite" aria-expanded="false" aria-controls="collapseOne">
                                                                        SQLite3
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-vendors-sqlite" class="collapse" aria-labelledby="database-extension-vendors-sqlite" data-parent="#function-reference-accordion-db-extensions-vendors">
                                                                <div class="card-body">
                                                                    <p>Support for SQLite version 3 databases</p>

                                                                    <hr />
                                                                    <h5>This topci also includes:</h5>
                                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                                        <li><a href="https://www.php.net/manual/en/sqlite3.setup.php" target="_blank">Installing/Configuring</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/sqlite3.constants.php" target="_blank">Predefined Constants</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/class.sqlite3.php" target="_blank">SQLite3</a>&nbsp;&mdash; The SQLite3 class</li>
                                                                        <li><a href="https://www.php.net/manual/en/class.sqlite3stmt.php" target="_blank">SQLite3Stmt</a>&nbsp;&mdash; The SQLite3Stmt class</li>
                                                                        <li><a href="https://www.php.net/manual/en/class.sqlite3result.php" target="_blank">SQLite3Result</a>&nbsp;&mdash; The SQLite3Result class</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#database-extension-vendors-sqlsrv" aria-expanded="false" aria-controls="collapseOne">
                                                                        SQLSRV — Microsoft SQL Server Driver for PHP
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="database-extension-vendors-sqlsrv" class="collapse" aria-labelledby="database-extension-vendors-sqlsrv" data-parent="#function-reference-accordion-db-extensions-vendors">
                                                                <div class="card-body">
                                                                    <p class="para">The SQLSRV extension allows you to access Microsoft SQL Server and SQL Azure databases. The 3.0 release of the driver supports SQL Server, beginning with SQL Server 2005, including SQL Server 2012 and SQL Server 2012 LocalDB. (For more information about LocalDB, see&nbsp;<a class="link external" href="http://msdn.microsoft.com/en-us/library/hh487161.aspx" target="_blank">&raquo;&nbsp;PHP Driver for SQL Server Support for LocalDB</a>&nbsp;and&nbsp;<a class="link external" href="http://msdn.microsoft.com/en-us/library/hh510202(SQL.110).aspx" target="_blank">&raquo;&nbsp;SQL Server 2012 Express LocalDB</a>.)</p>
                                                                    <p class="para">The SQLSRV extension is supported by Microsoft and available for download here:&nbsp;<a class="link external" href="http://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx" target="_blank">&raquo;&nbsp;http://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx</a>. SQL Server 2012 LocalDB can be downloaded here:&nbsp;<a class="link external" href="http://go.microsoft.com/fwlink/?LinkID=237665" target="_blank">&raquo;&nbsp;http://go.microsoft.com/fwlink/?LinkID=237665</a>.</p>

                                                                    <hr />
                                                                    <h5>This topci also includes:</h5>
                                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                                        <li><a href="https://www.php.net/manual/en/sqlsrv.setup.php" target="_blank">Installing/Configuring</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/sqlsrv.constants.php" target="_blank">Predefined Constants</a></li>
                                                                        <li><a href="https://www.php.net/manual/en/ref.sqlsrv.php" target="_blank">SQLSRV Functions</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-date-and-time" aria-expanded="false" aria-controls="collapseOne">
                                        Date and Time Related Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-date-and-time" class="collapse" aria-labelledby="function-reference-date-and-time" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-date-and-time">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#date-and-time-calendar" aria-expanded="false" aria-controls="collapseOne">
                                                        Calendar
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="date-and-time-calendar" class="collapse show" aria-labelledby="date-and-time-calendar" data-parent="#function-reference-accordion-date-and-time">
                                                <div class="card-body">
                                                    <p>The calendar extension presents a series of functions to simplify converting between different calendar formats. The intermediary or standard it is based on is the Julian Day Count. The Julian Day Count is a count of days starting from January 1st, 4713 B.C. To convert between calendar systems, you must first convert to Julian Day Count, then to the calendar system of your choice. Julian Day Count is very different from the Julian Calendar! For more information on Julian Day Count, visit&nbsp;<a class="link external" href="http://www.hermetic.ch/cal_stud/jdn.htm" target="_blank">&raquo;&nbsp;http://www.hermetic.ch/cal_stud/jdn.htm</a>. For more information on calendar systems visit&nbsp;<a class="link external" href="http://www.fourmilab.ch/documents/calendar/" target="_blank">&raquo;&nbsp;http://www.fourmilab.ch/documents/calendar/</a>. Excerpts from this page are included in these instructions, and are in quotes.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/calendar.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/calendar.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.calendar.php" target="_blank">Calendar Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#date-and-time-date-time" aria-expanded="false" aria-controls="collapseOne">
                                                        Date/Time — Date and Time
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="date-and-time-date-time" class="collapse" aria-labelledby="date-and-time-date-time" data-parent="#function-reference-accordion-date-and-time">
                                                <div class="card-body">
                                                    <p class="para">These functions allow you to get the date and time from the server where your PHP scripts are running. You can use these functions to format the date and time in many different ways.</p>
                                                    <p class="para">The date and time information is internally stored as a 64-bit number so all conceivably useful dates (including negative years) are supported. The range is from about 292 billion years in the past to the same in the future.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">Please keep in mind that these functions are dependent on the locale settings of your server. Make sure to take daylight saving time (use e.g.&nbsp;<code class="literal">$date = $date-&gt;modify('+7 days')</code>&nbsp;and not&nbsp;<code class="literal">$date += 7*24*60*60</code>) and leap years into consideration when working with these functions.</span></p>
                                                    </blockquote>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">The timezones referenced in this section can be found in the&nbsp;<a class="xref" href="https://www.php.net/manual/en/timezones.php" target="_blank">List of Supported Timezones</a>.</span></p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/datetime.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/datetime.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/datetime.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.datetime.php" target="_blank">DateTime</a>&nbsp;&mdash; The DateTime class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.datetimeimmutable.php" target="_blank">DateTimeImmutable</a>&nbsp;&mdash; The DateTimeImmutable class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.datetimeinterface.php" target="_blank">DateTimeInterface</a>&nbsp;&mdash; The DateTimeInterface interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.datetimezone.php" target="_blank">DateTimeZone</a>&nbsp;&mdash; The DateTimeZone class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.dateinterval.php" target="_blank">DateInterval</a>&nbsp;&mdash; The DateInterval class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.dateperiod.php" target="_blank">DatePeriod</a>&nbsp;&mdash; The DatePeriod class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.datetime.php" target="_blank">Date/Time Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/datetime.formats.php" target="_blank">Supported Date and Time Formats</a></li>
                                                        <li><a href="https://www.php.net/manual/en/timezones.php" target="_blank">List of Supported Timezones</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#date-and-time-hrtime" aria-expanded="false" aria-controls="collapseOne">
                                                        HRTime — High resolution timing
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="date-and-time-hrtime" class="collapse" aria-labelledby="date-and-time-hrtime" data-parent="#function-reference-accordion-date-and-time">
                                                <div class="card-body">
                                                    <p class="para">The HRTime extension implements a high resolution StopWatch class. It uses the best possible APIs on different platforms which brings resolution up to nanoseconds. It also makes possible to implement a custom stopwatch using low level ticks delivered by the underlaying APIs.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">As of PHP 7.3.0 the related function&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.hrtime.php" target="_blank">hrtime()</a></span>&nbsp;is part of the core.</span></p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topcis also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/hrtime.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/hrtime.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.hrtime-performancecounter.php" target="_blank">HRTime\PerformanceCounter</a>&nbsp;&mdash; The HRTime\PerformanceCounter class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.hrtime-stopwatch.php" target="_blank">HRTime\StopWatch</a>&nbsp;&mdash; The HRTime\StopWatch class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.hrtime-unit.php" target="_blank">HRTime\Unit</a>&nbsp;&mdash; The HRTime\Unit class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-file-systems-related-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        File System Related Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-file-systems-related-extensions" class="collapse" aria-labelledby="function-reference-file-systems-related-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-file-systems-related-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#file-systems-direct-io" aria-expanded="false" aria-controls="collapseOne">
                                                        Direct IO
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="file-systems-direct-io" class="collapse show" aria-labelledby="file-systems-direct-io" data-parent="#function-reference-accordion-file-systems-related-extensions">
                                                <div class="card-body">
                                                    <p>PHP supports the direct io functions as described in the Posix Standard (Section 6) for performing I/O functions at a lower level than the C-Language stream I/O functions (<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fopen.php" target="_blank">fopen()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fread.php" target="_blank">fread()</a></span>,..). The use of the DIO functions should be considered only when direct control of a device is needed. In all other cases, the standard&nbsp;<a class="link" href="https://www.php.net/manual/en/book.filesystem.php" target="_blank">filesystem</a>&nbsp;functions are more than adequate.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/dio.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/dio.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.dio.php" target="_blank">Direct IO Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#file-systems-directories" aria-expanded="false" aria-controls="collapseOne">
                                                        Directories
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="file-systems-directories" class="collapse" aria-labelledby="file-systems-directories" data-parent="#function-reference-accordion-file-systems-related-extensions">
                                                <div class="card-body">
                                                    <p>PHP provides a great way to read directory contents. You can list directory contents (files / subdirectories) using built-in functions in PHP.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/dir.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/dir.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.directory.php" target="_blank">Directory</a>&nbsp;&mdash; The Directory class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.dir.php" target="_blank">Directory Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#file-systems-fileinfo" aria-expanded="false" aria-controls="collapseOne">
                                                        Fileinfo — File Information
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="file-systems-fileinfo" class="collapse" aria-labelledby="file-systems-fileinfo" data-parent="#function-reference-accordion-file-systems-related-extensions">
                                                <div class="card-body">
                                                    <p>The functions in this module try to guess the content type and encoding of a file by looking for certain&nbsp;<em class="emphasis">magic</em>&nbsp;byte sequences at specific positions within the file. While this is not a bulletproof approach the heuristics used do a very good job.</p>

                                                    <hr />
                                                    <h5>Thi topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/fileinfo.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/fileinfo.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.fileinfo.php" target="_blank">Fileinfo Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.finfo.php" target="_blank">finfo</a>&nbsp;&mdash; The finfo class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#file-systems-filesystem" aria-expanded="false" aria-controls="collapseOne">
                                                        Filesystem
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="file-systems-filesystem" class="collapse" aria-labelledby="file-systems-filesystem" data-parent="#function-reference-accordion-file-systems-related-extensions">
                                                <div class="card-body">
                                                    <p>No external libraries are needed to build this extension, but if you want PHP to support LFS (large files) on Linux, then you need to have a recent glibc and you need compile PHP with the following compiler flags:&nbsp;<code class="literal">-D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64</code>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/filesystem.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/filesystem.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.filesystem.php" target="_blank">Filesystem Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#file-systems-inotify" aria-expanded="false" aria-controls="collapseOne">
                                                        Inotify
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="file-systems-inotify" class="collapse" aria-labelledby="file-systems-inotify" data-parent="#function-reference-accordion-file-systems-related-extensions">
                                                <div class="card-body">
                                                    <p class="para">The inotify extension exposes the inotify functions&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-init.php" target="_blank">inotify_init()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-add-watch.php" target="_blank">inotify_add_watch()</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-rm-watch.php" target="_blank">inotify_rm_watch()</a></span>.</p>
                                                    <p class="para">As the C&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-init.php" target="_blank">inotify_init()</a></span>&nbsp;function returns a file descriptor, PHP's&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-init.php" target="_blank">inotify_init()</a></span>&nbsp;returns a stream resource, usable with standard stream functions, like&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-select.php" target="_blank">stream_select()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-set-blocking.php" target="_blank">stream_set_blocking()</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fclose.php" target="_blank">fclose()</a></span>.&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.inotify-read.php" target="_blank">inotify_read()</a></span>&nbsp;replaces the C way of reading inotify events.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/inotify.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/inotify.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.inotify.php" target="_blank">Inotify Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#file-systems-xattr" aria-expanded="false" aria-controls="collapseOne">
                                                        xattr
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="file-systems-xattr" class="collapse" aria-labelledby="file-systems-xattr" data-parent="#function-reference-accordion-file-systems-related-extensions">
                                                <div class="card-body">
                                                    <p>The xattr extension allows for the manipulation of extended attributes on a filesystem.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/xattr.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xattr.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.xattr.php" target="_blank">xattr Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#file-systems-xdiff" aria-expanded="false" aria-controls="collapseOne">
                                                        xdiff
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="file-systems-xdiff" class="collapse" aria-labelledby="file-systems-xdiff" data-parent="#function-reference-accordion-file-systems-related-extensions">
                                                <div class="card-body">
                                                    <p class="para">xdiff extension enables you to create and apply patch files containing differences between different revisions of files.</p>
                                                    <p class="para">This extension supports two modes of operation - on strings and on files, as well as two different patch formats - unified and binary. Unified patches are excellent for text files as they are human-readable and easy to review. For binary files like archives or images, binary patches will be adequate choice as they are binary safe and handle non-printable characters well.</p>
                                                    <p class="para">Starting from version 1.5.0 there are two different sets of functions for generating binary patches. New functions -&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.xdiff-string-rabdiff.php" target="_blank">xdiff_string_rabdiff()</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.xdiff-file-rabdiff.php" target="_blank">xdiff_file_rabdiff()</a></span>&nbsp;generate output compatible with older functions but are typically faster and generate smaller results. For more details about methods of generating binary patches and differences between them, please check&nbsp;<a class="link external" href="http://www.xmailserver.org/xdiff-lib.html" target="_blank">&raquo;&nbsp;libxdiff</a>&nbsp;website.</p>
                                                    <p class="para">This extension uses libxdiff to implement these functions. Please see&nbsp;<a class="link external" href="http://www.xmailserver.org/xdiff-lib.html" target="_blank">&raquo;&nbsp;http://www.xmailserver.org/xdiff-lib.html</a>&nbsp;for more information.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/xdiff.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xdiff.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.xdiff.php" target="_blank">xdiff Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-human-language" aria-expanded="false" aria-controls="collapseOne">
                                        Human Language and Character Encoding Support
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-human-language" class="collapse" aria-labelledby="function-reference-human-language" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-human-language">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#human-language-enchant" aria-expanded="false" aria-controls="collapseOne">
                                                        Enchant — Enchant spelling library
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="human-language-enchant" class="collapse show" aria-labelledby="human-language-enchant" data-parent="#function-reference-accordion-human-language">
                                                <div class="card-body">
                                                    <p class="para">Enchant is the PHP binding for the&nbsp;<a class="link external" href="http://www.abisource.com/projects/enchant/" target="_blank">&raquo;&nbsp;Enchant library</a>. Enchant steps in to provide uniformity and conformity on top of all spelling libraries, and implement certain features that may be lacking in any individual provider library. Everything should "just work" for any and every definition of "just working."</p>
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/enchant.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/enchant.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/enchant.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.enchant.php" target="_blank">Enchant Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.enchantbroker.php" target="_blank">EnchantBroker</a>&nbsp;&mdash; The EnchantBroker class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.enchantdictionary.php" target="_blank">EnchantDictionary</a>&nbsp;&mdash; The EnchantDictionary class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#human-language-gender" aria-expanded="false" aria-controls="collapseOne">
                                                        Gender — Determine gender of firstnames
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="human-language-gender" class="collapse" aria-labelledby="human-language-gender" data-parent="#function-reference-accordion-human-language">
                                                <div class="card-body">
                                                    <p>Gender PHP extension is a port of the gender.c program originally written by Joerg Michael. The main purpose is to find out the gender of firstnames. The current database contains &gt;40000 firstnames from 54 countries.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/gender.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/gender.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.gender.php" target="_blank">Gender\Gender</a>&nbsp;&mdash; The Gender\Gender class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#human-language-gettext" aria-expanded="false" aria-controls="collapseOne">
                                                        Gettext
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="human-language-gettext" class="collapse" aria-labelledby="human-language-gettext" data-parent="#function-reference-accordion-human-language">
                                                <div class="card-body">
                                                    <p>The gettext functions implement an NLS (Native Language Support) API which can be used to internationalize your PHP applications. Please see the gettext documentation for your system for a thorough explanation of these functions or view the docs at&nbsp;<a class="link external" href="http://www.gnu.org/software/gettext/manual/gettext.html" target="_blank">&raquo;&nbsp;http://www.gnu.org/software/gettext/manual/gettext.html</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/gettext.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/gettext.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.gettext.php" target="_blank">Gettext Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#human-language-iconv" aria-expanded="false" aria-controls="collapseOne">
                                                        Iconv
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="human-language-iconv" class="collapse" aria-labelledby="human-language-iconv" data-parent="#function-reference-accordion-human-language">
                                                <div class="card-body">
                                                    <ul class="itemizedlist">
                                                        <li class="listitem">
                                                            <p class="para">This module contains an interface to iconv character set conversion facility. With this module, you can turn a string represented by a local character set into the one represented by another character set, which may be the Unicode character set. Supported character sets depend on the iconv implementation of your system. Note that the iconv function on some systems may not work as you expect. In such case, it'd be a good idea to install the&nbsp;<a class="link external" href="http://www.gnu.org/software/libiconv/" target="_blank">&raquo;&nbsp;GNU libiconv</a>&nbsp;library. It will most likely end up with more consistent results.</p>
                                                            <p class="para">This extension comes with various utility functions that help you to write multilingual scripts. Let's have a look at the following sections to explore the new features.</p>
                                                        </li>
                                                    </ul>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/iconv.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/iconv.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.iconv.php" target="_blank">iconv Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#human-language-intl" aria-expanded="false" aria-controls="collapseOne">
                                                        intl — Internationalization Functions
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="human-language-intl" class="collapse" aria-labelledby="human-language-intl" data-parent="#function-reference-accordion-human-language">
                                                <div class="card-body">
                                                    <p class="para">Internationalization extension (further is referred as Intl) is a wrapper for&nbsp;<a class="link external" href="http://www.icu-project.org/" target="_blank">&raquo;&nbsp;ICU</a>&nbsp;library, enabling PHP programmers to perform various locale-aware operations including but not limited to formatting, transliteration, encoding conversion, calendar operations,&nbsp;<a class="link external" href="http://www.unicode.org/reports/tr10/" target="_blank">&raquo;&nbsp;UCA</a>-conformant collation, locating text boundaries and working with locale identifiers, timezones and graphemes,</p>
                                                    <p class="para">It tends to closely follow ICU APIs, so that people having experience working with ICU in either C/C++ or Java could easily use the PHP API. Also, this way ICU documentation would be useful to understand various ICU functions.</p>
                                                    <p class="para">Intl consists of several modules, each of them exposes the corresponding ICU API:</p>
                                                    <ul class="itemizedlist">
                                                        <li class="listitem"><span class="simpara">Collator: provides string comparison capability with support for appropriate locale-sensitive sort orderings.</span></li>
                                                        <li class="listitem"><span class="simpara">Number Formatter: allows to display number according to the localized format or given pattern or set of rules, and to parse strings into numbers.</span></li>
                                                        <li class="listitem"><span class="simpara">Message Formatter: allows to create messages incorporating data (such as numbers or dates) formatted according to given pattern and locale rules, and parse messages extracting data from them. It can handle plurals, locale-aware numbers, currencies, conditions and much more.</span></li>
                                                        <li class="listitem"><span class="simpara">Normalizer: provides a function to transform text into one of the Unicode normalization forms, and provides a routine to test if a given string is already normalized.</span></li>
                                                        <li class="listitem"><span class="simpara">Locale: provides interaction with locale identifiers in the form of functions to get subtags from locale identifier; parse, compose, match(lookup and filter) locale identifiers.</span></li>
                                                        <li class="listitem"><span class="simpara">Calendar: provides a class which could be used for locale-aware calendar operations and getting various information such as timezone for locale chosen, first day of week or if it's daylight saving time now.</span></li>
                                                        <li class="listitem"><span class="simpara">Timezone: provides a wrapper around the&nbsp;<a class="link external" href="http://www.iana.org/time-zones" target="_blank">&raquo;&nbsp;"Olson" database</a>&nbsp;which has information about all the timezones around the world.</span></li>
                                                        <li class="listitem"><span class="simpara">Date formatter: allows to display date and time according to the localized format or given pattern or set of rules, and to parse strings into date and time.</span></li>
                                                        <li class="listitem"><span class="simpara">Transliterator: allows getting latin representation of strings in various languages.</span></li>
                                                    </ul>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/intl.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/intl.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/intl.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.collator.php" target="_blank">Collator</a>&nbsp;&mdash; The Collator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.numberformatter.php" target="_blank">NumberFormatter</a>&nbsp;&mdash; The NumberFormatter class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.locale.php" target="_blank">Locale</a>&nbsp;&mdash; The Locale class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.normalizer.php" target="_blank">Normalizer</a>&nbsp;&mdash; The Normalizer class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.messageformatter.php" target="_blank">MessageFormatter</a>&nbsp;&mdash; The MessageFormatter class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intlcalendar.php" target="_blank">IntlCalendar</a>&nbsp;&mdash; The IntlCalendar class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intlgregoriancalendar.php" target="_blank">IntlGregorianCalendar</a>&nbsp;&mdash; The IntlGregorianCalendar class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intltimezone.php" target="_blank">IntlTimeZone</a>&nbsp;&mdash; The IntlTimeZone class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intldateformatter.php" target="_blank">IntlDateFormatter</a>&nbsp;&mdash; The IntlDateFormatter class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.resourcebundle.php" target="_blank">ResourceBundle</a>&nbsp;&mdash; The ResourceBundle class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.spoofchecker.php" target="_blank">Spoofchecker</a>&nbsp;&mdash; The Spoofchecker class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.transliterator.php" target="_blank">Transliterator</a>&nbsp;&mdash; The Transliterator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intlbreakiterator.php" target="_blank">IntlBreakIterator</a>&nbsp;&mdash; The IntlBreakIterator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intlrulebasedbreakiterator.php" target="_blank">IntlRuleBasedBreakIterator</a>&nbsp;&mdash; The IntlRuleBasedBreakIterator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intlcodepointbreakiterator.php" target="_blank">IntlCodePointBreakIterator</a>&nbsp;&mdash; The IntlCodePointBreakIterator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intldatepatterngenerator.php" target="_blank">IntlDatePatternGenerator</a>&nbsp;&mdash; The IntlDatePatternGenerator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intlpartsiterator.php" target="_blank">IntlPartsIterator</a>&nbsp;&mdash; The IntlPartsIterator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.uconverter.php" target="_blank">UConverter</a>&nbsp;&mdash; The UConverter class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.intl.grapheme.php" target="_blank">Grapheme Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.intl.idn.php" target="_blank">IDN Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.intlchar.php" target="_blank">IntlChar</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.intlexception.php" target="_blank">IntlException</a>&nbsp;&mdash; Exception class for intl errors</li>
                                                        <li><a href="https://www.php.net/manual/en/class.intliterator.php" target="_blank">IntlIterator</a>&nbsp;&mdash; The IntlIterator class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.intl.php" target="_blank">intl Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#human-language-multibyte-strings" aria-expanded="false" aria-controls="collapseOne">
                                                        Multibyte String
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="human-language-multibyte-strings" class="collapse" aria-labelledby="human-language-multibyte-strings" data-parent="#function-reference-accordion-human-language">
                                                <div class="card-body">
                                                    <p class="para">While there are many languages in which every necessary character can be represented by a one-to-one mapping to an 8-bit value, there are also several languages which require so many characters for written communication that they cannot be contained within the range a mere byte can code (A byte is made up of eight bits. Each bit can contain only two distinct values, one or zero. Because of this, a byte can only represent 256 unique values (two to the power of eight)). Multibyte character encoding schemes were developed to express more than 256 characters in the regular bytewise coding system.</p>
                                                    <p class="para">When you manipulate (trim, split, splice, etc.) strings encoded in a multibyte encoding, you need to use special functions since two or more consecutive bytes may represent a single character in such encoding schemes. Otherwise, if you apply a non-multibyte-aware string function to the string, it probably fails to detect the beginning or ending of the multibyte character and ends up with a corrupted garbage string that most likely loses its original meaning.</p>
                                                    <p class="para"><code class="literal">mbstring</code>&nbsp;provides multibyte specific string functions that help you deal with multibyte encodings in PHP. In addition to that,&nbsp;<code class="literal">mbstring</code>&nbsp;handles character encoding conversion between the possible encoding pairs.&nbsp;<code class="literal">mbstring</code>&nbsp;is designed to handle Unicode-based encodings such as UTF-8 and UCS-2 and many single-byte encodings for convenience.</p>

                                                    <hr />
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#human-language-multibyte-pspell" aria-expanded="false" aria-controls="collapseOne">
                                                        Pspell
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="human-language-multibyte-pspell" class="collapse" aria-labelledby="human-language-multibyte-pspell" data-parent="#function-reference-accordion-human-language">
                                                <div class="card-body">
                                                    <p>These functions allow you to check the spelling of a word and offer suggestions.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/pspell.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/pspell.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.pspell.php" target="_blank">Pspell Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.pspell-dictionary.php" target="_blank">PSpell\Dictionary</a>&nbsp;&mdash; The PSpell\Dictionary class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.pspell-config.php" target="_blank">PSpell\Config</a>&nbsp;&mdash; The PSpell\Config class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#human-language-multibyte-recode" aria-expanded="false" aria-controls="collapseOne">
                                                        Recode — GNU Recode
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="human-language-multibyte-recode" class="collapse" aria-labelledby="human-language-multibyte-recode" data-parent="#function-reference-accordion-human-language">
                                                <div class="card-body">
                                                    <p class="para">This module contains an interface to the GNU Recode library. The GNU Recode library converts files between various coded character sets and surface encodings. When this cannot be achieved exactly, it may get rid of the offending characters or fall back on approximations. The library recognises or produces nearly 150 different character sets and is able to convert files between almost any pair. Most&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc1345" target="_blank">&raquo;&nbsp;RFC 1345</a>&nbsp;character sets are supported.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is unbundled and moved to&nbsp;<a class="link external" href="https://pecl.php.net/package/recode" target="_blank">&raquo;&nbsp;PECL</a>&nbsp;as of PHP 7.4.0. Consider to use the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.mbstring.php" target="_blank">Multibyte String</a>&nbsp;or&nbsp;<a class="link" href="https://www.php.net/manual/en/book.iconv.php" target="_blank">iconv</a>&nbsp;extensions instead.</span></p>
                                                    </blockquote>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/recode.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/recode.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.recode.php" target="_blank">Recode Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-image-processing" aria-expanded="false" aria-controls="collapseOne">
                                        Image Processing and Generation
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-image-processing" class="collapse" aria-labelledby="function-reference-image-processing" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-image-processing">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#image-processing-exif" aria-expanded="false" aria-controls="collapseOne">
                                                        Exif — Exchangeable image information
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="image-processing-exif" class="collapse show" aria-labelledby="image-processing-exif" data-parent="#function-reference-accordion-image-processing">
                                                <div class="card-body">
                                                    <p>With the exif extension you are able to work with image meta data. For example, you may use exif functions to read meta data of pictures taken from digital cameras by working with information stored in the headers. These are commonly found in&nbsp;<abbr title="Joint Photographic Experts Group">JPEG</abbr>&nbsp;and&nbsp;<abbr title="Tagged Image File Format">TIFF</abbr>&nbsp;images.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/exif.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/exif.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.exif.php" target="_blank">Exif Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#image-processing-gd" aria-expanded="false" aria-controls="collapseOne">
                                                        GD — Image Processing and GD
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="image-processing-gd" class="collapse" aria-labelledby="image-processing-gd" data-parent="#function-reference-accordion-image-processing">
                                                <div class="card-body">
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/image.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/image.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/image.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.image.php" target="_blank">GD and Image Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.gdimage.php" target="_blank">GdImage</a>&nbsp;&mdash; The GdImage class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.gdfont.php" target="_blank">GdFont</a>&nbsp;&mdash; The GdFont class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#image-processing-gmagick" aria-expanded="false" aria-controls="collapseOne">
                                                        Gmagick
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="image-processing-gmagick" class="collapse" aria-labelledby="image-processing-gmagick" data-parent="#function-reference-accordion-image-processing">
                                                <div class="card-body">
                                                    <p class="para">Gmagick is a php extension to create, modify and obtain meta information of images using the GraphicsMagick API.</p>
                                                    <p class="para">GraphicsMagick prides itself as the swiss army knife of image processing. It works with over 88 major formats including important formats like DPX, GIF, JPEG, JPEG-2000, PNG, PDF, PNM, and TIFF.</p>
                                                    <p class="para">Gmagick consists of a main Gmagick class, a GmagickDraw class which is in effect a drawing wand and a GmagickPixel class of which instances represent a single pixel of an image (color, opacity).</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/gmagick.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/gmagick.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/gmagick.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.gmagick.php" target="_blank">Gmagick</a>&nbsp;&mdash; The Gmagick class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.gmagickdraw.php" target="_blank">GmagickDraw</a>&nbsp;&mdash; The GmagickDraw class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.gmagickpixel.php" target="_blank">GmagickPixel</a>&nbsp;&mdash; The GmagickPixel class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#image-processing-imagemagick" aria-expanded="false" aria-controls="collapseOne">
                                                        ImageMagick — Image Processing (ImageMagick)
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="image-processing-imagemagick" class="collapse" aria-labelledby="image-processing-imagemagick" data-parent="#function-reference-accordion-image-processing">
                                                <div class="card-body">
                                                    <p class="para">Imagick is a native php extension to create and modify images using the ImageMagick API.</p>
                                                    <div id="imagick.aboutimagemagick" class="section">
                                                        <p class="para">ImageMagick is a software suite to create, edit, and compose bitmap images. It can read, convert and write images in a variety of formats (over 100) including DPX, EXR, GIF, JPEG, JPEG-2000, PDF, PhotoCD, PNG, Postscript, SVG, and TIFF.</p>
                                                        <p class="para">ImageMagick Studio LLC is a non-profit organization dedicated to making software imaging solutions freely available.</p>

                                                        <hr />
                                                        <h5>This topic also includes:</h5>
                                                        <ul class="chunklist chunklist_set chunklist_children">
                                                            <li><a href="https://www.php.net/manual/en/imagick.setup.php" target="_blank">Installing/Configuring</a></li>
                                                            <li><a href="https://www.php.net/manual/en/imagick.constants.php" target="_blank">Predefined Constants</a></li>
                                                            <li><a href="https://www.php.net/manual/en/imagick.examples.php" target="_blank">Examples</a></li>
                                                            <li><a href="https://www.php.net/manual/en/class.imagick.php" target="_blank">Imagick</a>&nbsp;&mdash; The Imagick class</li>
                                                            <li><a href="https://www.php.net/manual/en/class.imagickdraw.php" target="_blank">ImagickDraw</a>&nbsp;&mdash; The ImagickDraw class</li>
                                                            <li><a href="https://www.php.net/manual/en/class.imagickpixel.php" target="_blank">ImagickPixel</a>&nbsp;&mdash; The ImagickPixel class</li>
                                                            <li><a href="https://www.php.net/manual/en/class.imagickpixeliterator.php" target="_blank">ImagickPixelIterator</a>&nbsp;&mdash; The ImagickPixelIterator class</li>
                                                            <li><a href="https://www.php.net/manual/en/class.imagickkernel.php" target="_blank">ImagickKernel</a>&nbsp;&mdash; The ImagickKernel class</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-mail-related-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Mail Related Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-mail-related-extensions" class="collapse" aria-labelledby="function-reference-mail-related-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-mail-related-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#mail-extensions-imap-pop3-nntp" aria-expanded="false" aria-controls="collapseOne">
                                                        IMAP, POP3 and NNTP
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="mail-extensions-imap-pop3-nntp" class="collapse show" aria-labelledby="mail-extensions-imap-pop3-nntp" data-parent="#function-reference-accordion-mail-related-extensions">
                                                <div class="card-body">
                                                    <p class="para">These functions enable you to operate with the&nbsp;<abbr title="Internet Message Access Protocol">IMAP</abbr>&nbsp;protocol, as well as the&nbsp;<abbr title="Network News Transfer Protocol">NNTP</abbr>,&nbsp;<abbr title="Post Office Protocol version 3">POP3</abbr>&nbsp;and local mailbox access methods.</p>
                                                    <p class="para">Be warned, however, that some IMAP functions will not work correctly with the POP protocol.</p>
                                                    <div class="alert alert-danger">
                                                        <strong class="warning">Warning</strong>
                                                        <p class="simpara">The IMAP extension is not thread-safe; it should not be used with ZTS builds.</p>
                                                    </div>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/imap.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/imap.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.imap.php" target="_blank">IMAP Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.imap-connection.php" target="_blank">IMAP\Connection</a>&nbsp;&mdash; The IMAP\Connection class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#mail-extensions-mail" aria-expanded="false" aria-controls="collapseOne">
                                                        Mail
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="mail-extensions-mail" class="collapse" aria-labelledby="mail-extensions-mail" data-parent="#function-reference-accordion-mail-related-extensions">
                                                <div class="card-body">
                                                    <p>The&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.mail.php" target="_blank">mail()</a></span>&nbsp;function allows you to send mail.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/mail.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/mail.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.mail.php" target="_blank">Mail Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#mail-extensions-mailparse" aria-expanded="false" aria-controls="collapseOne">
                                                        Mailparse
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="mail-extensions-mailparse" class="collapse" aria-labelledby="mail-extensions-mailparse" data-parent="#function-reference-accordion-mail-related-extensions">
                                                <div class="card-body">
                                                    <p class="para">Mailparse is an extension for parsing and working with email messages. It can deal with&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc822" target="_blank">&raquo;&nbsp;RFC 822</a>&nbsp;and&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc2045" target="_blank">&raquo;&nbsp;RFC 2045</a>&nbsp;(<code class="literal">MIME</code>) compliant messages.</p>
                                                    <p class="para">Mailparse is stream based, which means that it does not keep in-memory copies of the files it processes - so it is very resource efficient when dealing with large messages.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">Mailparse requires the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.mbstring.php" target="_blank">mbstring</a>&nbsp;extension, and mbstring must be loaded before mailparse.</p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/mailparse.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/mailparse.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.mailparse.php" target="_blank">Mailparse Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-math-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Mathematical Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-math-extensions" class="collapse" aria-labelledby="function-reference-math-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-math-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#math-extensions-bcmath" aria-expanded="false" aria-controls="collapseOne">
                                                        BC Math — BCMath Arbitrary Precision Mathematics
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="math-extensions-bcmath" class="collapse show" aria-labelledby="math-extensions-bcmath" data-parent="#function-reference-accordion-math-extensions">
                                                <div class="card-body">
                                                    <p class="para">For arbitrary precision mathematics PHP offers BCMath which supports numbers of any size and precision up to&nbsp;<code class="literal">2147483647</code>&nbsp;(or&nbsp;<code class="literal">0x7FFFFFFF</code>) decimal digits, if there is sufficient memory, represented as strings.</p>
                                                    <p class="para">Valid (aka. well-formed) BCMath numbers are strings which match the regular expression&nbsp;<code class="literal">/^[+-]?[0-9]*(\.[0-9]*)?$/</code>.</p>
                                                    <div class="alert alert-warning">
                                                        <strong class="caution">Caution</strong>
                                                        <p class="para">Passing values of type&nbsp;<span class="type">float</span>&nbsp;to a BCMath function which expects a&nbsp;<span class="type">string</span>&nbsp;as operand may not have the desired effect due to the way PHP converts&nbsp;<span class="type">float</span>&nbsp;values to&nbsp;<span class="type">string</span>, namely that the&nbsp;<span class="type">string</span>&nbsp;may be in exponential notation (which is not supported by BCMath), and that, prior to PHP 8.0.0, the decimal separator is locale dependent (while BCMath always expects a decimal point).</p>
                                                        <div class="informalexample">
                                                            <div class="example-contents">
<pre class="phpcode">
&lt;?php
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

                                                    <hr />
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#math-extensions-gmp" aria-expanded="false" aria-controls="collapseOne">
                                                        GMP — GNU Multiple Precision
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="math-extensions-gmp" class="collapse" aria-labelledby="math-extensions-gmp" data-parent="#function-reference-accordion-math-extensions">
                                                <div class="card-body">
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#math-extensions-math" aria-expanded="false" aria-controls="collapseOne">
                                                        Math — Mathematical Functions
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="math-extensions-math" class="collapse" aria-labelledby="math-extensions-math" data-parent="#function-reference-accordion-math-extensions">
                                                <div class="card-body">
                                                    <p class="para">These math functions will only handle values within the range of the&nbsp;<span class="type">int</span>&nbsp;and&nbsp;<span class="type">float</span>&nbsp;types on your computer (this corresponds currently to the C types long resp. double). If you need to handle bigger numbers, take a look at the&nbsp;<a class="link" href="https://www.php.net/manual/en/book.bc.php" target="_blank">arbitrary precision math functions</a>.</p>
                                                    <p class="simpara">See also the manual page on&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.arithmetic.php" target="_blank">arithmetic operators</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/math.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/math.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.math.php" target="_blank">Math Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#math-extensions-trader" aria-expanded="false" aria-controls="collapseOne">
                                                        Trader — Technical Analysis for Traders
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="math-extensions-trader" class="collapse" aria-labelledby="math-extensions-trader" data-parent="#function-reference-accordion-math-extensions">
                                                <div class="card-body">
                                                    <p class="para">The trader extension is a free open source stock library based on TA-Lib. It's dedicated to trading software developers requiring to perform technical analysis of financial market data. Alongside many indicators like ADX, MACD, RSI, Stochastic, TRIX the candlestick pattern recognition and several vector arithmetic and algebraic functions are present.</p>
                                                    <p class="para">Calculations can be done in two modes - TA-Lib and Metastock. Changing it using&nbsp;<a class="link" href="https://www.php.net/manual/en/function.trader-set-compat.php" target="_blank">trader_set_compat()</a>&nbsp;will affect the way some trader functions work.</p>
                                                    <p class="para">Some trader functions provide different results depending of the "starting point" of the data being involved. This is often referred as a function having memories. An example of such function is the Exponential Moving Average. It is possible to control the unstable period (the amount of data to strip off) using&nbsp;<a class="link" href="https://www.php.net/manual/en/function.trader-set-unstable-period.php" target="_blank">trader_set_unstable_period()</a>&nbsp;function.</p>
                                                    <p class="para">Extended documentation about indicators, formulas and implementations in other programming languages can be found under&nbsp;<a class="link external" href="http://tadoc.org/" target="_blank">&raquo;&nbsp;tadoc.org</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/trader.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/trader.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.trader.php" target="_blank">Trader Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-non-text-mime-input" aria-expanded="false" aria-controls="collapseOne">
                                        Non-Text MIME Output
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-non-text-mime-input" class="collapse" aria-labelledby="function-reference-non-text-mime-input" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-non-text-mime-input">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#none-text-mime-fdf" aria-expanded="false" aria-controls="collapseOne">
                                                        FDF — Forms Data Format
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="none-text-mime-fdf" class="collapse show" aria-labelledby="none-text-mime-fdf" data-parent="#function-reference-non-text-mime-input">
                                                <div class="card-body">
                                                    <p class="simpara">Forms Data Format (FDF) is a format for handling forms within PDF documents. You should read the documentation at&nbsp;<a class="link external" href="http://www.adobe.com/devnet/acrobat/fdftoolkit.html" target="_blank">&raquo;&nbsp;http://www.adobe.com/devnet/acrobat/fdftoolkit.html</a>&nbsp;for more information on what FDF is and how it is used in general.</p>
                                                    <p class="simpara">The general idea of FDF is similar to HTML forms. The difference is basically the format how data is transmitted to the server when the submit button is pressed (this is actually the Form Data Format) and the format of the form itself (which is the Portable Document Format, PDF). Processing the FDF data is one of the features provided by the fdf functions. But there is more. One may as well take an existing PDF form and populated the input fields with data without modifying the form itself. In such a case one would create a FDF document (<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-create.php" target="_blank">fdf_create()</a></span>) set the values of each input field (<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-value.php" target="_blank">fdf_set_value()</a></span>) and associate it with a PDF form (<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-file.php" target="_blank">fdf_set_file()</a></span>). Finally it has to be sent to the browser with MimeType&nbsp;<code class="literal">application/vnd.fdf</code>. The Acrobat reader plugin of your browser recognizes the MimeType, reads the associated PDF form and fills in the data from the FDF document.</p>
                                                    <p class="simpara">If you look at an FDF-document with a text editor you will find a catalogue object with the name&nbsp;<code class="literal">FDF</code>. Such an object may contain a number of entries like&nbsp;<code class="literal">Fields</code>,&nbsp;<code class="literal">F</code>,&nbsp;<code class="literal">Status</code>&nbsp;etc.. The most commonly used entries are&nbsp;<code class="literal">Fields</code>&nbsp;which points to a list of input fields, and&nbsp;<code class="literal">F</code>&nbsp;which contains the filename of the PDF-document this data belongs to. Those entries are referred to in the FDF documentation as /F-Key or /Status-Key. Modifying this entries is done by functions like&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-file.php" target="_blank">fdf_set_file()</a></span>&nbsp;and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-status.php" target="_blank">fdf_set_status()</a></span>. Fields are modified with&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-value.php" target="_blank">fdf_set_value()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fdf-set-opt.php" target="_blank">fdf_set_opt()</a></span>&nbsp;etc..</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/fdf.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/fdf.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/fdf.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.fdf.php" target="_blank">FDF Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#none-text-mime-gnupg" aria-expanded="false" aria-controls="collapseOne">
                                                        GnuPG — GNU Privacy Guard
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="none-text-mime-gnupg" class="collapse" aria-labelledby="none-text-mime-gnupg" data-parent="#function-reference-non-text-mime-input">
                                                <div class="card-body">
                                                    <p>This module allows you to interact with&nbsp;<a class="link external" href="http://www.gnupg.org/" target="_blank">&raquo;&nbsp;gnupg</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/gnupg.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/gnupg.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/gnupg.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.gnupg.php" target="_blank">GnuPG Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#none-text-mime-gnupg-wkhtmltox" aria-expanded="false" aria-controls="collapseOne">
                                                        wkhtmltox
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="none-text-mime-gnupg-wkhtmltox" class="collapse" aria-labelledby="none-text-mime-gnupg-wkhtmltox" data-parent="#function-reference-non-text-mime-input">
                                                <div class="card-body">
                                                    <p>libwkhtmltox is an open source LGPLv3 library for rendering HTML into PDF and various image formats using the QtWebKit rendering engine.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/wkhtmltox.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.wkhtmltox-pdf-converter.php" target="_blank">wkhtmltox\PDF\Converter</a>&nbsp;&mdash; The wkhtmltox\PDF\Converter class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.wkhtmltox-pdf-object.php" target="_blank">wkhtmltox\PDF\Object</a>&nbsp;&mdash; The wkhtmltox\PDF\Object class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.wkhtmltox-image-converter.php" target="_blank">wkhtmltox\Image\Converter</a>&nbsp;&mdash; The wkhtmltox\Image\Converter class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#non-text-mime-input-ps" aria-expanded="false" aria-controls="collapseOne">
                                                        PS — PostScript document creation
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="non-text-mime-input-ps" class="collapse" aria-labelledby="non-text-mime-input-ps" data-parent="#function-reference-non-text-mime-input">
                                                <div class="card-body">
                                                    <p class="para">This module allows to create PostScript documents. It has many similarities with the pdf extension. Actually the API is almost identical and one can in many cases just replace the prefix of each function from pdf_ to ps_. This also works for functions which has no meaning in the PostScript document (like adding hyperlinks) but will have an effect if the document is converted to PDF.</p>
                                                    <p class="para">Documents created by this extension are sometimes even superior to documents created with the pdf extension, because pslib's text rendering functions can handle kerning, hyphenation and ligatures which results in much better output of boxed text.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ps.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ps.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.ps.php" target="_blank">PS Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#non-text-mime-input-rpminfo" aria-expanded="false" aria-controls="collapseOne">
                                                        RpmInfo
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="non-text-mime-input-rpminfo" class="collapse" aria-labelledby="non-text-mime-input-rpminfo" data-parent="#function-reference-non-text-mime-input">
                                                <div class="card-body">
                                                    <p class="para">This extension enables you to retrieve information from RPM files or from the installed RPMs database.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/rpminfo.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/rpminfo.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.rpminfo.php" target="_blank">RpmInfo Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#non-text-mime-input-xlswriter" aria-expanded="false" aria-controls="collapseOne">
                                                        XLSWriter
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="non-text-mime-input-xlswriter" class="collapse" aria-labelledby="non-text-mime-input-xlswriter" data-parent="#function-reference-non-text-mime-input">
                                                <div class="card-body">
                                                    <p class="para">An efficient and fast xlsx file export extension.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/xlswriter.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xlswriter.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.vtiful-kernel-excel.php" target="_blank">Vtiful\Kernel\Excel</a>&nbsp;&mdash; The Vtiful\Kernel\Excel class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.vtiful-kernel-format.php" target="_blank">Vtiful\Kernel\Format</a>&nbsp;&mdash; The Vtiful\Kernel\Format class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-process-control-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Process Control Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-process-control-extensions" class="collapse" aria-labelledby="function-reference-process-control-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-process-control-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-eio" aria-expanded="false" aria-controls="collapseOne">
                                                        Eio
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-eio" class="collapse show" aria-labelledby="process-control-eio" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
                                                    <p class="para">This extension provides asyncronous POSIX I/O by means of&nbsp;<a class="link external" href="http://software.schmorp.de/pkg/libeio.html" target="_blank">&raquo;&nbsp;libeio</a>&nbsp;C library written by Marc Lehmann.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
                                                    </blockquote>
                                                    <p class="para">&nbsp;</p>
                                                    <div class="alert alert-warning">
                                                        <strong class="warning">Warning</strong>
                                                        <p class="simpara">It is important to be aware that each request is executed in a thread, and the order of execution of continuously queued requests basically is unpredictable. For instance, the following piece of code is incorrect.</p>
                                                    </div>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/eio.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/eio.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/eio.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.eio.php" target="_blank">Eio Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-ev" aria-expanded="false" aria-controls="collapseOne">
                                                        Ev
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-ev" class="collapse" aria-labelledby="process-control-ev" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
                                                    <p class="para">This extension provides interface to&nbsp;<a class="link external" href="http://software.schmorp.de/pkg/libev.html" target="_blank">&raquo;&nbsp;libev</a>&nbsp;library - a high performance full-featured event loop written in C.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
                                                    </blockquote>
                                                    <p class="para"><em class="emphasis">Libev</em>&nbsp;is an event loop: one registers interest in certain events (such as a file descriptor being readable or a timeout occurring), and it will manage these event sources and provide the program with events.</p>
                                                    <p class="para">To do this, it must take more or less complete control over the process (or thread) by executing the event loop handler, and will then communicate events via a callback mechanism.</p>
                                                    <p class="para">You register interest in certain events by registering so-called event watchers, and then hand it over to libev by starting the watcher.</p>
                                                    <p class="para">For details refer to the&nbsp;<a class="link external" href="http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod" target="_blank">&raquo;&nbsp;documentation of libev</a></p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ev.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ev.global.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ev.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ev.watchers.php" target="_blank">Watchers</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ev.watcher-callbacks.php" target="_blank">Watcher callbacks</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ev.periodic-modes.php" target="_blank">Periodic watcher operation modes</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.ev.php" target="_blank">Ev</a>&nbsp;&mdash; The Ev class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evcheck.php" target="_blank">EvCheck</a>&nbsp;&mdash; The EvCheck class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evchild.php" target="_blank">EvChild</a>&nbsp;&mdash; The EvChild class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evembed.php" target="_blank">EvEmbed</a>&nbsp;&mdash; The EvEmbed class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evfork.php" target="_blank">EvFork</a>&nbsp;&mdash; The EvFork class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evidle.php" target="_blank">EvIdle</a>&nbsp;&mdash; The EvIdle class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evio.php" target="_blank">EvIo</a>&nbsp;&mdash; The EvIo class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evloop.php" target="_blank">EvLoop</a>&nbsp;&mdash; The EvLoop class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evperiodic.php" target="_blank">EvPeriodic</a>&nbsp;&mdash; The EvPeriodic class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evprepare.php" target="_blank">EvPrepare</a>&nbsp;&mdash; The EvPrepare class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evsignal.php" target="_blank">EvSignal</a>&nbsp;&mdash; The EvSignal class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evstat.php" target="_blank">EvStat</a>&nbsp;&mdash; The EvStat class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evtimer.php" target="_blank">EvTimer</a>&nbsp;&mdash; The EvTimer class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.evwatcher.php" target="_blank">EvWatcher</a>&nbsp;&mdash; The EvWatcher class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-expect" aria-expanded="false" aria-controls="collapseOne">
                                                        Expect
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-expect" class="collapse" aria-labelledby="process-control-expect" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
                                                    <p>This extension allows to interact with processes through PTY. You may consider using the&nbsp;<a class="link" href="https://www.php.net/manual/en/wrappers.expect.php" target="_blank"><code class="literal">expect://</code>&nbsp;wrapper</a>&nbsp;with the&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.filesystem.php" target="_blank">filesystem functions</a>&nbsp;which provide a simpler and more intuitive interface.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/expect.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/expect.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/expect.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.expect.php" target="_blank">Expect Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-pcntl" aria-expanded="false" aria-controls="collapseOne">
                                                        PCNTL — Process Control
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-pcntl" class="collapse" aria-labelledby="process-control-pcntl" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
                                                    <p class="para">Process Control support in PHP implements the Unix style of process creation, program execution, signal handling and process termination. Process Control should not be enabled within a web server environment and unexpected results may happen if any Process Control functions are used within a web server environment.</p>
                                                    <p class="para">This documentation is intended to explain the general usage of each of the Process Control functions. For detailed information about Unix process control you are encouraged to consult your systems documentation including fork(2), waitpid(2) and signal(2) or a comprehensive reference such as Advanced Programming in the UNIX Environment by W. Richard Stevens (Addison-Wesley).</p>
                                                    <p class="para">PCNTL now uses ticks as the signal handle callback mechanism, which is much faster than the previous mechanism. This change follows the same semantics as using "user ticks". You use the&nbsp;<span class="function"><strong>declare()</strong></span>&nbsp;statement to specify the locations in your program where callbacks are allowed to occur. This allows you to minimize the overhead of handling asynchronous events. In the past, compiling PHP with pcntl enabled would always incur this overhead, whether or not your script actually used pcntl.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/pcntl.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/pcntl.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/pcntl.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.pcntl.php" target="_blank">PCNTL Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-posix" aria-expanded="false" aria-controls="collapseOne">
                                                        POSIX
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-posix" class="collapse" aria-labelledby="process-control-posix" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
                                                    <p class="para">This module contains an interface to those functions defined in the IEEE 1003.1 (POSIX.1) standards document which are not accessible through other means.</p>
                                                    <div class="warning"><strong class="warning">Warning</strong>
                                                        <p class="para">Sensitive data can be retrieved with the POSIX functions, e.g.&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.posix-getpwnam.php" target="_blank">posix_getpwnam()</a></span>&nbsp;and friends.</p>
                                                    </div>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:&nbsp;<span class="simpara">This extension is not available on Windows platforms.</span></p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/posix.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/posix.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.posix.php" target="_blank">POSIX Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-program-execution" aria-expanded="false" aria-controls="collapseOne">
                                                        Program execution — System program execution
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-program-execution" class="collapse" aria-labelledby="process-control-program-execution" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
                                                    <p class="para">Those functions provide means to execute commands on the system itself, and means to secure such commands.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">All execution functions call the commands through&nbsp;<code class="literal">cmd.exe</code>&nbsp;under Windows. Therefore the user calling these functions needs appropriate privilege to run this command. The only exception is&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.proc-open.php" target="_blank">proc_open()</a></span>&nbsp;with&nbsp;<code class="literal">bypass_shell</code>&nbsp;option.</p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/exec.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/exec.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.exec.php" target="_blank">Program execution Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-parallel" aria-expanded="false" aria-controls="collapseOne">
                                                        parallel
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-parallel" class="collapse" aria-labelledby="process-control-parallel" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/parallel.setup.php" target="_blank">Installation</a></li>
                                                        <li><a href="https://www.php.net/manual/en/philosophy.parallel.php" target="_blank">Philosophy</a></li>
                                                        <li><a href="https://www.php.net/manual/en/functional.parallel.php" target="_blank">Functional API</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.parallel-runtime.php" target="_blank">parallel\Runtime</a>&nbsp;&mdash; The parallel\Runtime class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parallel-future.php" target="_blank">parallel\Future</a>&nbsp;&mdash; The parallel\Future class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parallel-channel.php" target="_blank">parallel\Channel</a>&nbsp;&mdash; The parallel\Channel class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parallel-events.php" target="_blank">parallel\Events</a>&nbsp;&mdash; The parallel\Events class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parallel-events-input.php" target="_blank">parallel\Events\Input</a>&nbsp;&mdash; The parallel\Events\Input class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parallel-events-event.php" target="_blank">parallel\Events\Event</a>&nbsp;&mdash; The parallel\Events\Event class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parallel-events-event-type.php" target="_blank">parallel\Events\Event\Type</a>&nbsp;&mdash; The parallel\Events\Event\Type class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parallel-sync.php" target="_blank">parallel\Sync</a>&nbsp;&mdash; The parallel\Sync class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-semaphore" aria-expanded="false" aria-controls="collapseOne">
                                                        Semaphore — Semaphore, Shared Memory and IPC
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-semaphore" class="collapse" aria-labelledby="process-control-semaphore" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
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

                                                    <hr />
                                                    <h5>This topci also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/sem.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/sem.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.sem.php" target="_blank">Semaphore Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.sysvmessagequeue.php" target="_blank">SysvMessageQueue</a>&nbsp;&mdash; The SysvMessageQueue class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.sysvsemaphore.php" target="_blank">SysvSemaphore</a>&nbsp;&mdash; The SysvSemaphore class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.sysvsharedmemory.php" target="_blank">SysvSharedMemory</a>&nbsp;&mdash; The SysvSharedMemory class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-shared-memory" aria-expanded="false" aria-controls="collapseOne">
                                                        Shared Memory
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-shared-memory" class="collapse" aria-labelledby="process-control-shared-memory" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
                                                    <p>Shmop is an easy to use set of functions that allows PHP to read, write, create and delete Unix shared memory segments.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/shmop.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/shmop.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/shmop.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.shmop.php" target="_blank">Shared Memory Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.shmop.php" target="_blank">Shmop</a>&nbsp;&mdash; The Shmop class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#process-control-sync" aria-expanded="false" aria-controls="collapseOne">
                                                        Sync
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="process-control-sync" class="collapse" aria-labelledby="process-control-sync" data-parent="#function-reference-accordion-process-control-extensions">
                                                <div class="card-body">
                                                    <p class="para">The 'sync' extension introduces cross-platform synchonization objects into PHP. Named and unnamed Mutex, Semaphore, Event, Reader-Writer, and named Shared Memory objects provide OS-level synchronization on both POSIX (e.g. Linux) and Windows platforms.</p>
                                                    <p class="para">Automatic cleanup of acquired synchronization objects takes place during extension teardown. This means that if PHP prematurely terminates a script (e.g. script execution time is exceeded), objects will not be left in an unknown state. The only exception to this is if PHP itself crashes (e.g. an internal buffer overflow).</p>
                                                    <p class="para">Unnamed synchronization objects don't have a lot of use outside of a multithreaded scenario. Unnamed objects are more useful in conjunction with the pthreads PECL extension.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">Named objects require additional care to be used on all systems. If an object is instantiated with a specific set of parameters, it must always be instantiated with those parameters or the object will probably end up in an inconsistent state until the next reboot or a system administrator cleans up the mess.</p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topci also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/sync.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/sync.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.syncmutex.php" target="_blank">SyncMutex</a>&nbsp;&mdash; The SyncMutex class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.syncsemaphore.php" target="_blank">SyncSemaphore</a>&nbsp;&mdash; The SyncSemaphore class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.syncevent.php" target="_blank">SyncEvent</a>&nbsp;&mdash; The SyncEvent class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.syncreaderwriter.php" target="_blank">SyncReaderWriter</a>&nbsp;&mdash; The SyncReaderWriter class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.syncsharedmemory.php" target="_blank">SyncSharedMemory</a>&nbsp;&mdash; The SyncSharedMemory class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-other-basic-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Other Basic Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-other-basic-extensions" class="collapse" aria-labelledby="function-reference-other-basic-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-other-basic-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-geoip" aria-expanded="false" aria-controls="collapseOne">
                                                        GeoIP — Geo IP Location
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-geoip" class="collapse show" aria-labelledby="basic-extension-geoip" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para">The GeoIP extension allows you to find the location of an IP address. City, State, Country, Longitude, Latitude, and other information as all, such as ISP and connection type can be obtained with the help of GeoIP.</p>
                                                    <div class="alert alert-danger">
                                                        <strong class="warning">Warning</strong>
                                                        <p class="para">This extension does not support MaxMind's current "GeoIP2" databases, only the "GeoIP legacy" database files.</p>

                                                        <hr />
                                                        <h5>This topic also includes:</h5>
                                                        <ul class="chunklist chunklist_set chunklist_children">
                                                            <li><a href="https://www.php.net/manual/en/geoip.setup.php" target="_blank">Installing/Configuring</a></li>
                                                            <li><a href="https://www.php.net/manual/en/geoip.constants.php" target="_blank">Predefined Constants</a></li>
                                                            <li><a href="https://www.php.net/manual/en/ref.geoip.php" target="_blank">GeoIP Functions</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-fann" aria-expanded="false" aria-controls="collapseOne">
                                                        FANN — FANN (Fast Artificial Neural Network)
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-fann" class="collapse" aria-labelledby="basic-extension-fann" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p>PHP binding for FANN (Fast Artificial Neural Network) Library which implements multilayer artificial neural networks with support for both fully connected and sparsely connected networks. It includes a framework for easy handling of training data sets. It is easy to use, versatile, well documented, and fast.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/fann.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/fann.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/fann.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.fann.php" target="_blank">Fann Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.fannconnection.php" target="_blank">FANNConnection</a>&nbsp;&mdash; The FANNConnection class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-igbinary" aria-expanded="false" aria-controls="collapseOne">
                                                        Igbinary
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-igbinary" class="collapse" aria-labelledby="basic-extension-igbinary" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p>Igbinary is a drop in replacement for the standard PHP serializer. Instead of the time and space consuming textual representation used by PHP's&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.serialize.php" target="_blank">serialize()</a></span>, igbinary stores PHP data structures in a compact binary form. Memory savings are significant when using memcached, APCu, or similar memory based storages for serialized data. The typical reduction in storage requirements are around 50%. The exact percentage depends on the data.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/igbinary.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.igbinary.php" target="_blank">Igbinary Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-json" aria-expanded="false" aria-controls="collapseOne">
                                                        JSON — JavaScript Object Notation
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-json" class="collapse" aria-labelledby="basic-extension-json" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para">This extension implements the&nbsp;<a class="link external" href="http://www.json.org/" target="_blank">&raquo;&nbsp;JavaScript Object Notation (JSON)</a>&nbsp;data-interchange format. PHP comes with a parser that is specifically written for PHP and licensed under the PHP license.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">PHP implements a superset of JSON as specified in the original&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc7159" target="_blank">&raquo;&nbsp;RFC 7159</a>.</p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/json.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/json.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.jsonexception.php" target="_blank">JsonException</a>&nbsp;&mdash; The JsonException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.jsonserializable.php" target="_blank">JsonSerializable</a>&nbsp;&mdash; The JsonSerializable interface</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.json.php" target="_blank">JSON Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-lua" aria-expanded="false" aria-controls="collapseOne">
                                                        Lua
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-lua" class="collapse" aria-labelledby="basic-extension-lua" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p>"Lua is a powerful, fast, light-weight, embeddable scripting language." This extension embeds the lua interpreter and offers an OO-API to lua variables and functions.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/lua.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.lua.php" target="_blank">Lua</a>&nbsp;&mdash; The Lua class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.luaclosure.php" target="_blank">LuaClosure</a>&nbsp;&mdash; The LuaClosure class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-lua-sandbox" aria-expanded="false" aria-controls="collapseOne">
                                                        LuaSandbox
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-lua-sandbox" class="collapse" aria-labelledby="basic-extension-lua-sandbox" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/luasandbox.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/reference.luasandbox.differences.php" target="_blank">Differences from Standard Lua</a></li>
                                                        <li><a href="https://www.php.net/manual/en/luasandbox.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.luasandbox.php" target="_blank">LuaSandbox</a>&nbsp;&mdash; The LuaSandbox class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.luasandboxfunction.php" target="_blank">LuaSandboxFunction</a>&nbsp;&mdash; The LuaSandboxFunction class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.luasandboxerror.php" target="_blank">LuaSandboxError</a>&nbsp;&mdash; The LuaSandboxError class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.luasandboxerrorerror.php" target="_blank">LuaSandboxErrorError</a>&nbsp;&mdash; The LuaSandboxErrorError class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.luasandboxfatalerror.php" target="_blank">LuaSandboxFatalError</a>&nbsp;&mdash; The LuaSandboxFatalError class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.luasandboxmemoryerror.php" target="_blank">LuaSandboxMemoryError</a>&nbsp;&mdash; The LuaSandboxMemoryError class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.luasandboxruntimeerror.php" target="_blank">LuaSandboxRuntimeError</a>&nbsp;&mdash; The LuaSandboxRuntimeError class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.luasandboxsyntaxerror.php" target="_blank">LuaSandboxSyntaxError</a>&nbsp;&mdash; The LuaSandboxSyntaxError class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.luasandboxtimeouterror.php" target="_blank">LuaSandboxTimeoutError</a>&nbsp;&mdash; The LuaSandboxTimeoutError class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-misc" aria-expanded="false" aria-controls="collapseOne">
                                                        Misc. — Miscellaneous Functions
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-misc" class="collapse" aria-labelledby="basic-extension-misc" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para">These functions were placed here because none of the other categories seemed to fit.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/misc.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/misc.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.misc.php" target="_blank">Misc. Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/changelog.misc.php" target="_blank">Changelog</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-seaslog" aria-expanded="false" aria-controls="collapseOne">
                                                        Seaslog
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-seaslog" class="collapse" aria-labelledby="basic-extension-seaslog" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para">The&nbsp;<abbr>Seaslog</abbr>&nbsp;is an effective,fast,stable log extension for PHP.</p>
                                                    <p class="para">The log journal，which is usually the operate record of the system， software and the application record. Through the analysis of the log，it can facilitate users to understand the operation of the system， software and the application situation. If your application log is rich enough, it can also analyze the previous use&rsquo;s operation behavior,type, regional distribution or other more information. The application log also points the multiple levels at the same time, you can easily get the application analysis of health status, timely find problems and quick positioning, and solve the problem, remedy the loss.</p>
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
                                                    <p class="para">Read More&nbsp;<a class="link external" href="https://seasx.github.io/SeasLog/" target="_blank">&raquo;&nbsp;SeasLog Document</a>&nbsp;at Github.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/seaslog.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/seaslog.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/seaslog.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.seaslog.php" target="_blank">Seaslog Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.seaslog.php" target="_blank">SeasLog</a>&nbsp;&mdash; The SeasLog class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-spl" aria-expanded="false" aria-controls="collapseOne">
                                                        SPL — Standard PHP Library (SPL)
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-spl" class="collapse" aria-labelledby="basic-extension-spl" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para">The Standard PHP Library (SPL) is a collection of interfaces and classes that are meant to solve common problems.</p>
                                                    <p class="para">SPL provides a set of standard datastructure, a set of iterators to traverse over objects, a set of interfaces, a set of standard Exceptions, a number of classes to work with files and it provides a set of functions like&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.spl-autoload-register.php" target="_blank">spl_autoload_register()</a></span></p>

                                                    <hr />
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-streams" aria-expanded="false" aria-controls="collapseOne">
                                                        Streams
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-streams" class="collapse" aria-labelledby="basic-extension-streams" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="simpara">Streams are the way of generalizing file, network, data compression, and other operations which share a common set of functions and uses. In its simplest definition, a&nbsp;<code class="literal">stream</code>&nbsp;is a&nbsp;<code class="literal">resource</code>&nbsp;object which exhibits streamable behavior. That is, it can be read from or written to in a linear fashion, and may be able to&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fseek.php" target="_blank">fseek()</a></span>&nbsp;to an arbitrary location within the stream.</p>
                                                    <p class="simpara">A&nbsp;<code class="literal">wrapper</code>&nbsp;is additional code which tells the stream how to handle specific protocols/encodings. For example, the&nbsp;<code class="literal">http</code>&nbsp;wrapper knows how to translate a URL into an&nbsp;<code class="literal">HTTP/1.0</code>&nbsp;request for a file on a remote server. There are many wrappers built into PHP by default (See&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.php" target="_blank">Supported Protocols and Wrappers</a>), and additional, custom wrappers may be added either within a PHP script using&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-wrapper-register.php" target="_blank">stream_wrapper_register()</a></span>, or directly from an extension. Because any variety of wrapper may be added to PHP, there is no set limit on what can be done with them. To access the list of currently registered wrappers, use&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-get-wrappers.php" target="_blank">stream_get_wrappers()</a></span>.</p>
                                                    <p class="para">A stream is referenced as:&nbsp;<code class="parameter">scheme</code>://<code class="parameter">target</code></p>
                                                    <ul class="itemizedlist">
                                                        <li class="listitem"><span class="simpara"><code class="parameter">scheme</code>(string) - The name of the wrapper to be used. Examples include: file, http, https, ftp, ftps, compress.zlib, compress.bz2, and php. See&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.php" target="_blank">Supported Protocols and Wrappers</a>&nbsp;for a list of PHP built-in wrappers. If no wrapper is specified, the function default is used (typically&nbsp;<code class="literal">file</code>://).</span></li>
                                                        <li class="listitem"><span class="simpara"><code class="parameter">target</code>&nbsp;- Depends on the wrapper used. For filesystem related streams this is typically a path and filename of the desired file. For network related streams this is typically a hostname, often with a path appended. Again, see&nbsp;<a class="xref" href="https://www.php.net/manual/en/wrappers.php" target="_blank">Supported Protocols and Wrappers</a>&nbsp;for a description of targets for built-in streams.</span></li>
                                                    </ul>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/stream.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/stream.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/stream.filters.php" target="_blank">Stream Filters</a></li>
                                                        <li><a href="https://www.php.net/manual/en/stream.contexts.php" target="_blank">Stream Contexts</a></li>
                                                        <li><a href="https://www.php.net/manual/en/stream.errors.php" target="_blank">Stream Errors</a></li>
                                                        <li><a href="https://www.php.net/manual/en/stream.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.php-user-filter.php" target="_blank">php_user_filter</a>&nbsp;&mdash; The php_user_filter class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.streamwrapper.php" target="_blank">streamWrapper</a>&nbsp;&mdash; The streamWrapper class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.stream.php" target="_blank">Stream Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-swoole" aria-expanded="false" aria-controls="collapseOne">
                                                        Swoole
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-swoole" class="collapse" aria-labelledby="basic-extension-swoole" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p>Swoole is a high-performance networking framework using an event-driven, asynchronous, non-blocking I/O model. It can be used to develop high-performance, scalable, concurrent TCP, UDP, Unix socket, HTTP, Websocket services. To get started, please check the&nbsp;<a class="link external" href="https://www.swoole.co.uk/docs/" target="_blank">&raquo;&nbsp;Swoole Docs</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/swoole.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/swoole.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.swoole-funcs.php" target="_blank">Swoole Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-async.php" target="_blank">Swoole\Async</a>&nbsp;&mdash; The Swoole\Async class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-atomic.php" target="_blank">Swoole\Atomic</a>&nbsp;&mdash; The Swoole\Atomic class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-buffer.php" target="_blank">Swoole\Buffer</a>&nbsp;&mdash; The Swoole\Buffer class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-channel.php" target="_blank">Swoole\Channel</a>&nbsp;&mdash; The Swoole\Channel class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-client.php" target="_blank">Swoole\Client</a>&nbsp;&mdash; The Swoole\Client class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-connection-iterator.php" target="_blank">Swoole\Connection\Iterator</a>&nbsp;&mdash; The Swoole\Connection\Iterator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-coroutine.php" target="_blank">Swoole\Coroutine</a>&nbsp;&mdash; The Swoole\Coroutine class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-event.php" target="_blank">Swoole\Event</a>&nbsp;&mdash; The Swoole\Event class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-exception.php" target="_blank">Swoole\Exception</a>&nbsp;&mdash; The Swoole\Exception class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-http-client.php" target="_blank">Swoole\Http\Client</a>&nbsp;&mdash; The Swoole\Http\Client class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-http-request.php" target="_blank">Swoole\Http\Request</a>&nbsp;&mdash; The Swoole\Http\Request class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-http-response.php" target="_blank">Swoole\Http\Response</a>&nbsp;&mdash; The Swoole\Http\Response class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-http-server.php" target="_blank">Swoole\Http\Server</a>&nbsp;&mdash; The Swoole\Http\Server class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-lock.php" target="_blank">Swoole\Lock</a>&nbsp;&mdash; The Swoole\Lock class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-mmap.php" target="_blank">Swoole\Mmap</a>&nbsp;&mdash; The Swoole\Mmap class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-mysql.php" target="_blank">Swoole\MySQL</a>&nbsp;&mdash; The Swoole\MySQL class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-mysql-exception.php" target="_blank">Swoole\MySQL\Exception</a>&nbsp;&mdash; The Swoole\MySQL\Exception class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-process.php" target="_blank">Swoole\Process</a>&nbsp;&mdash; The Swoole\Process class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-redis-server.php" target="_blank">Swoole\Redis\Server</a>&nbsp;&mdash; The Swoole\Redis\Server class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-serialize.php" target="_blank">Swoole\Serialize</a>&nbsp;&mdash; The Swoole\Serialize class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-server.php" target="_blank">Swoole\Server</a>&nbsp;&mdash; The Swoole\Server class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-table.php" target="_blank">Swoole\Table</a>&nbsp;&mdash; The Swoole\Table class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-timer.php" target="_blank">Swoole\Timer</a>&nbsp;&mdash; The Swoole\Timer class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-websocket-frame.php" target="_blank">Swoole\WebSocket\Frame</a>&nbsp;&mdash; The Swoole\WebSocket\Frame class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.swoole-websocket-server.php" target="_blank">Swoole\WebSocket\Server</a>&nbsp;&mdash; The Swoole\WebSocket\Server class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-tidy" aria-expanded="false" aria-controls="collapseOne">
                                                        Tidy
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-tidy" class="collapse" aria-labelledby="basic-extension-tidy" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p>Tidy is a binding for the Tidy HTML clean and repair utility which allows you to not only clean and otherwise manipulate HTML, XHTML, and XML documents, but also traverse the document tree, including ones with embedded scripting languages such as PHP or ASP within them using object-oriented constructs.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/tidy.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/tidy.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/tidy.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.tidy.php" target="_blank">tidy</a>&nbsp;&mdash; The tidy class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.tidynode.php" target="_blank">tidyNode</a>&nbsp;&mdash; The tidyNode class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.tidy.php" target="_blank">Tidy Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-tokenizer" aria-expanded="false" aria-controls="collapseOne">
                                                        Tokenizer
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-tokenizer" class="collapse" aria-labelledby="basic-extension-tokenizer" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para">The tokenizer functions provide an interface to the PHP tokenizer embedded in the Zend Engine. Using these functions you may write your own PHP source analyzing or modification tools without having to deal with the language specification at the lexical level.</p>
                                                    <p class="para">See also the&nbsp;<a class="link" href="https://www.php.net/manual/en/tokens.php" target="_blank">appendix about tokens</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/tokenizer.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/tokenizer.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/tokenizer.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.phptoken.php" target="_blank">PhpToken</a>&nbsp;&mdash; The PhpToken class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.tokenizer.php" target="_blank">Tokenizer Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-urls" aria-expanded="false" aria-controls="collapseOne">
                                                        URLs
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-urls" class="collapse" aria-labelledby="basic-extension-urls" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p>Dealing with URL strings: encoding, decoding and parsing.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/url.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/url.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.url.php" target="_blank">URL Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-v8js" aria-expanded="false" aria-controls="collapseOne">
                                                        V8js — V8 Javascript Engine Integration
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-v8js" class="collapse" aria-labelledby="basic-extension-v8js" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p>This extension embeds the&nbsp;<a class="link external" href="http://code.google.com/p/v8/" target="_blank">&raquo;&nbsp;V8 Javascript Engine</a> into PHP.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/v8js.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/v8js.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.v8js.php" target="_blank">V8Js</a>&nbsp;&mdash; The V8Js class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.v8jsexception.php" target="_blank">V8JsException</a>&nbsp;&mdash; The V8JsException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-yaml" aria-expanded="false" aria-controls="collapseOne">
                                                        Yaml — YAML Data Serialization
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-yaml" class="collapse" aria-labelledby="basic-extension-yaml" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p>This extension implements the&nbsp;<a class="link external" href="http://www.yaml.org/" target="_blank">&raquo;&nbsp;YAML Ain't Markup Language (YAML)</a>&nbsp;data serialization standard. Parsing and emiting are handled by the&nbsp;<a class="link external" href="http://pyyaml.org/wiki/LibYAML" target="_blank">&raquo;&nbsp;LibYAML library</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/yaml.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yaml.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yaml.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yaml.callbacks.php" target="_blank">Callbacks</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.yaml.php" target="_blank">Yaml Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-yaf" aria-expanded="false" aria-controls="collapseOne">
                                                        Yaf — Yet Another Framework
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-yaf" class="collapse" aria-labelledby="basic-extension-yaf" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para">The&nbsp;<code class="literal">Yet Another Framework</code>&nbsp;(<abbr>Yaf</abbr>) extension is a PHP framework that is used to develop web applications.</p>
                                                    <p class="para">A simple Yaf benchmark can be found at&nbsp;<a class="link external" href="http://www.laruence.com/2011/12/02/2333.html" target="_blank">&raquo;&nbsp;Yaf Performance</a>.</p>
                                                    <p class="para">For a quick start guide, please refer to the&nbsp;<a class="link" href="https://www.php.net/manual/en/yaf.tutorials.php" target="_blank">Tutorials</a>&nbsp;section.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/yaf.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yaf.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yaf.tutorials.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yaf.appconfig.php" target="_blank">Application Configuration</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-application.php" target="_blank">Yaf_Application</a>&nbsp;&mdash; The Yaf_Application class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-bootstrap-abstract.php" target="_blank">Yaf_Bootstrap_Abstract</a>&nbsp;&mdash; The Yaf_Bootstrap_Abstract class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-dispatcher.php" target="_blank">Yaf_Dispatcher</a>&nbsp;&mdash; The Yaf_Dispatcher class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-config-abstract.php" target="_blank">Yaf_Config_Abstract</a>&nbsp;&mdash; The Yaf_Config_Abstract class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-config-ini.php" target="_blank">Yaf_Config_Ini</a>&nbsp;&mdash; The Yaf_Config_Ini class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-config-simple.php" target="_blank">Yaf_Config_Simple</a>&nbsp;&mdash; The Yaf_Config_Simple class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-controller-abstract.php" target="_blank">Yaf_Controller_Abstract</a>&nbsp;&mdash; The Yaf_Controller_Abstract class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-action-abstract.php" target="_blank">Yaf_Action_Abstract</a>&nbsp;&mdash; The Yaf_Action_Abstract class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-view-interface.php" target="_blank">Yaf_View_Interface</a>&nbsp;&mdash; The Yaf_View_Interface class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-view-simple.php" target="_blank">Yaf_View_Simple</a>&nbsp;&mdash; The Yaf_View_Simple class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-loader.php" target="_blank">Yaf_Loader</a>&nbsp;&mdash; The Yaf_Loader class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-plugin-abstract.php" target="_blank">Yaf_Plugin_Abstract</a>&nbsp;&mdash; The Yaf_Plugin_Abstract class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-registry.php" target="_blank">Yaf_Registry</a>&nbsp;&mdash; The Yaf_Registry class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-request-abstract.php" target="_blank">Yaf_Request_Abstract</a>&nbsp;&mdash; The Yaf_Request_Abstract class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-request-http.php" target="_blank">Yaf_Request_Http</a>&nbsp;&mdash; The Yaf_Request_Http class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-request-simple.php" target="_blank">Yaf_Request_Simple</a>&nbsp;&mdash; The Yaf_Request_Simple class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-response-abstract.php" target="_blank">Yaf_Response_Abstract</a>&nbsp;&mdash; The Yaf_Response_Abstract class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-route-interface.php" target="_blank">Yaf_Route_Interface</a>&nbsp;&mdash; The Yaf_Route_Interface class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-route-map.php" target="_blank">Yaf_Route_Map</a>&nbsp;&mdash; The Yaf_Route_Map class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-route-regex.php" target="_blank">Yaf_Route_Regex</a>&nbsp;&mdash; The Yaf_Route_Regex class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-route-rewrite.php" target="_blank">Yaf_Route_Rewrite</a>&nbsp;&mdash; The Yaf_Route_Rewrite class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-router.php" target="_blank">Yaf_Router</a>&nbsp;&mdash; The Yaf_Router class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-route-simple.php" target="_blank">Yaf_Route_Simple</a>&nbsp;&mdash; The Yaf_Route_Simple class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-route-static.php" target="_blank">Yaf_Route_Static</a>&nbsp;&mdash; The Yaf_Route_Static class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-route-supervar.php" target="_blank">Yaf_Route_Supervar</a>&nbsp;&mdash; The Yaf_Route_Supervar class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-session.php" target="_blank">Yaf_Session</a>&nbsp;&mdash; The Yaf_Session class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception.php" target="_blank">Yaf_Exception</a>&nbsp;&mdash; The Yaf_Exception class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception-typeerror.php" target="_blank">Yaf_Exception_TypeError</a>&nbsp;&mdash; The Yaf_Exception_TypeError class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception-startuperror.php" target="_blank">Yaf_Exception_StartupError</a>&nbsp;&mdash; The Yaf_Exception_StartupError class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception-dispatchfailed.php" target="_blank">Yaf_Exception_DispatchFailed</a>&nbsp;&mdash; The Yaf_Exception_DispatchFailed class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception-routerfailed.php" target="_blank">Yaf_Exception_RouterFailed</a>&nbsp;&mdash; The Yaf_Exception_RouterFailed class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed.php" target="_blank">Yaf_Exception_LoadFailed</a>&nbsp;&mdash; The Yaf_Exception_LoadFailed class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-module.php" target="_blank">Yaf_Exception_LoadFailed_Module</a>&nbsp;&mdash; The Yaf_Exception_LoadFailed_Module class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-controller.php" target="_blank">Yaf_Exception_LoadFailed_Controller</a>&nbsp;&mdash; The Yaf_Exception_LoadFailed_Controller class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-action.php" target="_blank">Yaf_Exception_LoadFailed_Action</a>&nbsp;&mdash; The Yaf_Exception_LoadFailed_Action class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaf-exception-loadfailed-view.php" target="_blank">Yaf_Exception_LoadFailed_View</a>&nbsp;&mdash; The Yaf_Exception_LoadFailed_View class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-yaconf" aria-expanded="false" aria-controls="collapseOne">
                                                        Yaconf
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-yaconf" class="collapse" aria-labelledby="basic-extension-yaconf" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para"><code class="literal">Yet Another Configurations Container</code>&nbsp;(<abbr>Yaconf</abbr>) is a configurations container, it parses INI files, and store the result in PHP when PHP is started, the result lives with the whole PHP lifecycle.</p>
                                                    <p class="para">Yaconf stores all configurations as interned string or immutable array, which means they are not refcounted-able, thus when you retrieving configurations from yaconf, it could be considered as zero-copy, very fast.</p>
                                                    <p class="para">Yaconf supports sections and sections inheritance in INI files. if PHP is built as non-ZTS build, Yaconf also supports automatically reloading after INI files are changed.</p>
                                                    <p class="para">Yaconf requires PHP 7.0 or greater.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/yaconf.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yaconf.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.yaconf.php" target="_blank">Yaconf</a>&nbsp;&mdash; The Yaconf class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-taint" aria-expanded="false" aria-controls="collapseOne">
                                                        Taint
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-taint" class="collapse" aria-labelledby="basic-extension-taint" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para">Taint is an extension, which is used for detecting XSS codes(tainted string). And also can be used to spot sql injection vulnerabilities, and shell inject, etc.</p>
                                                    <p class="para">When taint is enabled, if you pass a tainted string (comes from $_GET, $_POST or $_COOKIE) to some functions, taint will warn you about that.</p>
                                                    <div id="example-3973" class="example">
                                                        <p><strong>Example #1&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.taint.php" target="_blank">Taint()</a></span>example</strong></p>
                                                        <div class="example-contents">
                                                            <div class="phpcode"><code>&lt;?php<br />$a&nbsp;=&nbsp;trim($_GET['a']);<br /><br />$file_name&nbsp;=&nbsp;'/tmp'&nbsp;.&nbsp;&nbsp;$a;<br />$output&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;"Welcome,&nbsp;{$a}&nbsp;!!!";<br />$var&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;"output";<br />$sql&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;"Select&nbsp;*&nbsp;&nbsp;from&nbsp;"&nbsp;.&nbsp;$a;<br />$sql&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.=&nbsp;"ooxx";<br /><br />echo&nbsp;$output;<br /><br />print&nbsp;$$var;<br /><br />include($file_name);<br /><br />mysql_query($sql);<br />?&gt;</code></div>
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/taint.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/taint.detail.php" target="_blank">More Details</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.taint.php" target="_blank">Taint Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-data-structures" aria-expanded="false" aria-controls="collapseOne">
                                                        Data Structures
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-data-structures" class="collapse" aria-labelledby="basic-extension-data-structures" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p class="para">Efficient data structures for PHP 7, provided as an alternative to the&nbsp;<span class="type">array</span>.</p>
                                                    <p class="para">See&nbsp;<a class="link external" href="https://medium.com/p/9dda7af674cd" target="_blank">&raquo;&nbsp;this blog post</a>&nbsp;for benchmarks, discussion and frequently asked questions.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ds.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ds.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ds.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-collection.php" target="_blank">Collection</a>&nbsp;&mdash; The Collection interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-hashable.php" target="_blank">Hashable</a>&nbsp;&mdash; The Hashable interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-sequence.php" target="_blank">Sequence</a>&nbsp;&mdash; The Sequence interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-vector.php" target="_blank">Vector</a>&nbsp;&mdash; The Vector class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-deque.php" target="_blank">Deque</a>&nbsp;&mdash; The Deque class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-map.php" target="_blank">Map</a>&nbsp;&mdash; The Map class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-pair.php" target="_blank">Pair</a>&nbsp;&mdash; The Pair class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-set.php" target="_blank">Set</a>&nbsp;&mdash; The Set class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-stack.php" target="_blank">Stack</a>&nbsp;&mdash; The Stack class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-queue.php" target="_blank">Queue</a>&nbsp;&mdash; The Queue class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ds-priorityqueue.php" target="_blank">PriorityQueue</a>&nbsp;&mdash; The PriorityQueue class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#basic-extension-var" aria-expanded="false" aria-controls="collapseOne">
                                                        var_representation
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="basic-extension-var" class="collapse" aria-labelledby="basic-extension-var" data-parent="#function-reference-accordion-other-basic-extensions">
                                                <div class="card-body">
                                                    <p>The var_representation extension provides a compact alternative to&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.var-export.php" target="_blank">var_export()</a></span>&nbsp;that properly escapes control characters.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/var-representation.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/var-representation.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.var-representation.php" target="_blank">var_representation Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-other-services" aria-expanded="false" aria-controls="collapseOne">
                                        Other Services
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-other-services" class="collapse" aria-labelledby="function-reference-other-services" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-other-services">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-curl" aria-expanded="false" aria-controls="collapseOne">
                                                        cURL — Client URL Library
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-curl" class="collapse show" aria-labelledby="other-services-curl" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p>PHP supports libcurl, a library created by Daniel Stenberg, that allows you to connect and communicate to many different types of servers with many different types of protocols. libcurl currently supports the http, https, ftp, gopher, telnet, dict, file, and ldap protocols. libcurl also supports HTTPS certificates, HTTP POST, HTTP PUT, FTP uploading (this can also be done with PHP's ftp extension), HTTP form based upload, proxies, cookies, and user+password authentication.</p>

                                                    <hr/>
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/curl.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/curl.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/curl.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.curl.php" target="_blank">cURL Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.curlhandle.php" target="_blank">CurlHandle</a>&nbsp;&mdash; The CurlHandle class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.curlmultihandle.php" target="_blank">CurlMultiHandle</a>&nbsp;&mdash; The CurlMultiHandle class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.curlsharehandle.php" target="_blank">CurlShareHandle</a>&nbsp;&mdash; The CurlShareHandle class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.curlfile.php" target="_blank">CURLFile</a>&nbsp;&mdash; The CURLFile class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.curlstringfile.php" target="_blank">CURLStringFile</a>&nbsp;&mdash; The CURLStringFile class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-event" aria-expanded="false" aria-controls="collapseOne">
                                                        Event
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-event" class="collapse" aria-labelledby="other-services-event" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/event.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/event.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/event.flags.php" target="_blank">Event flags</a></li>
                                                        <li><a href="https://www.php.net/manual/en/event.persistence.php" target="_blank">About event persistence</a></li>
                                                        <li><a href="https://www.php.net/manual/en/event.callbacks.php" target="_blank">Event callbacks</a></li>
                                                        <li><a href="https://www.php.net/manual/en/event.constructing.signal.events.php" target="_blank">Constructing signal events</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.event.php" target="_blank">Event</a>&nbsp;&mdash; The Event class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventbase.php" target="_blank">EventBase</a>&nbsp;&mdash; The EventBase class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventbuffer.php" target="_blank">EventBuffer</a>&nbsp;&mdash; The EventBuffer class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventbufferevent.php" target="_blank">EventBufferEvent</a>&nbsp;&mdash; The EventBufferEvent class</li>
                                                        <li><a href="https://www.php.net/manual/en/eventbufferevent.about.callbacks.php" target="_blank">About buffer event callbacks</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventconfig.php" target="_blank">EventConfig</a>&nbsp;&mdash; The EventConfig class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventdnsbase.php" target="_blank">EventDnsBase</a>&nbsp;&mdash; The EventDnsBase class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventhttp.php" target="_blank">EventHttp</a>&nbsp;&mdash; The EventHttp class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventhttpconnection.php" target="_blank">EventHttpConnection</a>&nbsp;&mdash; The EventHttpConnection class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventhttprequest.php" target="_blank">EventHttpRequest</a>&nbsp;&mdash; The EventHttpRequest class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventlistener.php" target="_blank">EventListener</a>&nbsp;&mdash; The EventListener class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventsslcontext.php" target="_blank">EventSslContext</a>&nbsp;&mdash; The EventSslContext class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.eventutil.php" target="_blank">EventUtil</a>&nbsp;&mdash; The EventUtil class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-ftp" aria-expanded="false" aria-controls="collapseOne">
                                                        FTP
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-ftp" class="collapse" aria-labelledby="other-services-ftp" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p>The functions in this extension implement client access to files servers speaking the File Transfer Protocol (FTP) as defined in&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfc959" target="_blank">&raquo;&nbsp;http://www.faqs.org/rfcs/rfc959</a>. This extension is meant for detailed access to an FTP server providing a wide range of control to the executing script. If you only wish to read from or write to a file on an FTP server, consider using the&nbsp;<a class="link" href="https://www.php.net/manual/en/wrappers.ftp.php" target="_blank"><code class="literal">ftp://</code>&nbsp;wrapper</a>&nbsp;with the&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.filesystem.php" target="_blank">filesystem functions</a>&nbsp;which provide a simpler and more intuitive interface.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ftp.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ftp.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ftp.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.ftp.php" target="_blank">FTP Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.ftp-connection.php" target="_blank">FTP\Connection</a>&nbsp;&mdash; The FTP\Connection class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-gearman" aria-expanded="false" aria-controls="collapseOne">
                                                        Gearman
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-gearman" class="collapse" aria-labelledby="other-services-gearman" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para"><a class="link external" href="https://gearman.org/" target="_blank">&raquo;&nbsp;Gearman</a>&nbsp;is a generic application framework for farming out work to multiple machines or processes. It allows applications to complete tasks in parallel, to load balance processing, and to call functions between languages. The framework can be used in a variety of applications, from high-availability web sites to the transport of database replication events.</p>
                                                    <p class="para">This extension provides classes for writing Gearman clients and workers.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/gearman.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/gearman.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/gearman.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.gearmanclient.php" target="_blank">GearmanClient</a>&nbsp;&mdash; The GearmanClient class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.gearmanjob.php" target="_blank">GearmanJob</a>&nbsp;&mdash; The GearmanJob class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.gearmantask.php" target="_blank">GearmanTask</a>&nbsp;&mdash; The GearmanTask class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.gearmanworker.php" target="_blank">GearmanWorker</a>&nbsp;&mdash; The GearmanWorker class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.gearmanexception.php" target="_blank">GearmanException</a>&nbsp;&mdash; The GearmanException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-ldap" aria-expanded="false" aria-controls="collapseOne">
                                                        LDAP — Lightweight Directory Access Protocol
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-ldap" class="collapse" aria-labelledby="other-services-ldap" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
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
                                                            <p class="para"><a class="link external" href="https://wiki.mozilla.org/Directory" target="_blank">&raquo;&nbsp;Mozilla</a></p>
                                                        </li>
                                                        <li class="listitem">
                                                            <p class="para"><a class="link external" href="http://www.openldap.org/" target="_blank">&raquo;&nbsp;OpenLDAP Project</a></p>
                                                        </li>
                                                        <li class="listitem">
                                                            <p class="para">Internet Engineering Taskforce RFCs&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfcrfc4510" target="_blank">&raquo;&nbsp;4510</a>&nbsp;through&nbsp;<a class="link external" href="http://www.faqs.org/rfcs/rfcrfc4519" target="_blank">&raquo;&nbsp;4519</a>.</p>
                                                        </li>
                                                    </ul>
                                                    <p class="para">The Netscape SDK contains a helpful&nbsp;<a class="link external" href="https://wiki.mozilla.org/Mozilla_LDAP_SDK_Programmer%27s_Guide" target="_blank">&raquo;&nbsp;Programmer's Guide</a>&nbsp;in HTML format.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ldap.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ldap.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ldap.using.php" target="_blank">Using the PHP LDAP calls</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ldap.controls.php" target="_blank">LDAP controls</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ldap.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.ldap.php" target="_blank">LDAP Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.ldap-connection.php" target="_blank">LDAP\Connection</a>&nbsp;&mdash; The LDAP\Connection class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ldap-result.php" target="_blank">LDAP\Result</a>&nbsp;&mdash; The LDAP\Result class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ldap-result-entry.php" target="_blank">LDAP\ResultEntry</a>&nbsp;&mdash; The LDAP\ResultEntry class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-memcache" aria-expanded="false" aria-controls="collapseOne">
                                                        Memcache
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-memcache" class="collapse" aria-labelledby="other-services-memcache" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para">Memcache module provides handy procedural and object-oriented interface to memcached, highly effective caching daemon, which was especially designed to decrease database load in dynamic web applications.</p>
                                                    <p class="para">The Memcache module also provides a&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.session.php" target="_blank">session</a>&nbsp;handler (<code class="literal">memcache</code>).</p>
                                                    <p class="para">More information about memcached can be found at&nbsp;<a class="link external" href="http://www.memcached.org/" target="_blank">&raquo;&nbsp;http://www.memcached.org/</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/memcache.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/memcache.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/memcache.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.memcache.php" target="_blank">Memcache</a>&nbsp;&mdash; The Memcache class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.memcache.php" target="_blank">Memcache Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-memcached" aria-expanded="false" aria-controls="collapseOne">
                                                        Memcached
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-memcached" class="collapse" aria-labelledby="other-services-memcached" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para"><a class="link external" href="http://www.memcached.org/" target="_blank">&raquo;&nbsp;memcached</a>&nbsp;is a high-performance, distributed memory object caching system, generic in nature, but intended for use in speeding up dynamic web applications by alleviating database load.</p>
                                                    <p class="para">This extension uses the libmemcached library to provide an API for communicating with memcached servers. It also provides a&nbsp;<a class="link" href="https://www.php.net/manual/en/ref.session.php" target="_blank">session</a>&nbsp;handler (<code class="literal">memcached</code>).</p>
                                                    <p class="para">Information about libmemcached can be found at&nbsp;<a class="link external" href="http://libmemcached.org/libMemcached.html" target="_blank">&raquo;&nbsp;http://libmemcached.org/libMemcached.html</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/memcached.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/memcached.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/memcached.expiration.php" target="_blank">Expiration Times</a></li>
                                                        <li><a href="https://www.php.net/manual/en/memcached.callbacks.php" target="_blank">Callbacks</a></li>
                                                        <li><a href="https://www.php.net/manual/en/memcached.sessions.php" target="_blank">Sessions support</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.memcached.php" target="_blank">Memcached</a>&nbsp;&mdash; The Memcached class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.memcachedexception.php" target="_blank">MemcachedException</a>&nbsp;&mdash; The MemcachedException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-mqseries" aria-expanded="false" aria-controls="collapseOne">
                                                        mqseries
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-mqseries" class="collapse" aria-labelledby="other-services-mqseries" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="simpara">This extension aims to provide an interface for communicating with IBMs WebSphere MQ series Queue managers.</p>
                                                    <p class="simpara">The interface mimics the C-API client interface of WebSphere MQ Series as close as possible. Using the same naming conventions and possibilities of the C-API. In order to understand the workings of this extension some level of understanding the C-API is required.</p>
                                                    <p class="simpara">For MQ-options, MQ-structures, MQ-results etc. please read the WebSphere MQ Application Programming Guide and WebSphere MQ Application Programming Reference.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/mqseries.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/mqseries.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.mqseries.php" target="_blank">mqseries Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-network" aria-expanded="false" aria-controls="collapseOne">
                                                        Network
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-network" class="collapse" aria-labelledby="other-services-network" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p>Provides various networking functions.</p>
                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/network.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/network.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.network.php" target="_blank">Network Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-rrd" aria-expanded="false" aria-controls="collapseOne">
                                                        RRD — RRDtool
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-rrd" class="collapse" aria-labelledby="other-services-rrd" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para">The PECL/rrd extension provides bindings to the RRDtool C library. RRDtool is the open source industry standard, high performance data logging and graphing system for time series data.</p>
                                                    <p class="para">The RRDtool homepage is&nbsp;<a class="link external" href="https://www.mrtg.org/rrdtool/" target="_blank">&raquo;&nbsp;http://www.mrtg.org/rrdtool/</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/rrd.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/rrd.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/rrd.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.rrd.php" target="_blank">RRD Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.rrdcreator.php" target="_blank">RRDCreator</a>&nbsp;&mdash; The RRDCreator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.rrdgraph.php" target="_blank">RRDGraph</a>&nbsp;&mdash; The RRDGraph class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.rrdupdater.php" target="_blank">RRDUpdater</a>&nbsp;&mdash; The RRDUpdater class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-snmp" aria-expanded="false" aria-controls="collapseOne">
                                                        SNMP
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-snmp" class="collapse" aria-labelledby="other-services-snmp" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para">The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.</p>
                                                    <p class="para">As it is a wrapper around the underlying Net-SNMP library, all basic concepts are the same and the PHP functions change their behaviour depending on the Net-SNMP configuration files and environment variables.</p>
                                                    <p class="para">More information about Net-SNMP can be found at&nbsp;<a class="link external" href="http://www.net-snmp.org/" target="_blank">&raquo;&nbsp;http://www.net-snmp.org/</a></p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/snmp.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/snmp.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.snmp.php" target="_blank">SNMP Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.snmp.php" target="_blank">SNMP</a>&nbsp;&mdash; The SNMP class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.snmpexception.php" target="_blank">SNMPException</a>&nbsp;&mdash; The SNMPException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-sockets" aria-expanded="false" aria-controls="collapseOne">
                                                        Sockets
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-sockets" class="collapse" aria-labelledby="other-services-sockets" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para">The socket extension implements a low-level interface to the socket communication functions based on the popular BSD sockets, providing the possibility to act as a socket server as well as a client.</p>
                                                    <p class="para">For a more generic client-side socket interface, see&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-socket-client.php" target="_blank">stream_socket_client()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.stream-socket-server.php" target="_blank">stream_socket_server()</a></span>,&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.fsockopen.php" target="_blank">fsockopen()</a></span>, and&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.pfsockopen.php" target="_blank">pfsockopen()</a></span>.</p>
                                                    <p class="para">When using these functions, it is important to remember that while many of them have identical names to their C counterparts, they often have different declarations. Please be sure to read the descriptions to avoid confusion.</p>
                                                    <p class="para">Those unfamiliar with socket programming can find a lot of useful material in the appropriate Unix man pages, and there is a great deal of tutorial information on socket programming in C on the web, much of which can be applied, with slight modifications, to socket programming in PHP. The&nbsp;<a class="link external" href="http://www.unixguide.net/network/socketfaq/" target="_blank">&raquo;&nbsp;Unix Socket FAQ</a>&nbsp;might be a good start.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/sockets.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/sockets.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/sockets.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/sockets.errors.php" target="_blank">Socket Errors</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.sockets.php" target="_blank">Socket Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.socket.php" target="_blank">Socket</a>&nbsp;&mdash; The Socket class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.addressinfo.php" target="_blank">AddressInfo</a>&nbsp;&mdash; The AddressInfo class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-ssh2" aria-expanded="false" aria-controls="collapseOne">
                                                        SSH2 — Secure Shell2
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-ssh2" class="collapse" aria-labelledby="other-services-ssh2" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p>Bindings to the&nbsp;<a class="link external" href="http://libssh2.org/" target="_blank">&raquo;&nbsp;libssh2</a>&nbsp;library which provide access to resources (shell, remote exec, tunneling, file transfer) on a remote machine using a secure cryptographic transport.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ssh2.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ssh2.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.ssh2.php" target="_blank">SSH2 Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-stomp" aria-expanded="false" aria-controls="collapseOne">
                                                        Stomp — Stomp Client
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-stomp" class="collapse" aria-labelledby="other-services-stomp" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p>This extension allows php applications to communicate with any Stomp compliant Message Brokers through easy object-oriented and procedural interfaces.&nbsp;<a class="link external" href="https://stomp.github.io/" target="_blank">&raquo;&nbsp;Stomp official site</a></p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/stomp.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/stomp.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.stomp.php" target="_blank">Stomp Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.stomp.php" target="_blank">Stomp</a>&nbsp;&mdash; The Stomp class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.stompframe.php" target="_blank">StompFrame</a>&nbsp;&mdash; The StompFrame class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.stompexception.php" target="_blank">StompException</a>&nbsp;&mdash; The StompException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-svm" aria-expanded="false" aria-controls="collapseOne">
                                                        SVM — Support Vector Machine
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-svm" class="collapse" aria-labelledby="other-services-svm" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p>LibSVM is an efficient solver for SVM classification and regression problems. The svm extension wraps this in a PHP interface for easy use in PHP scripts.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/svm.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/svm.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.svm.php" target="_blank">SVM</a>&nbsp;&mdash; The SVM class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.svmmodel.php" target="_blank">SVMModel</a>&nbsp;&mdash; The SVMModel class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-svn" aria-expanded="false" aria-controls="collapseOne">
                                                        SVN — Subversion
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-svn" class="collapse" aria-labelledby="other-services-svn" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para">This extension implements PHP bindings for&nbsp;<a class="link external" href="http://subversion.apache.org/" target="_blank">&raquo;&nbsp;Subversion</a>&nbsp;(SVN), a version control system, allowing PHP scripts to communicate with SVN repositories and working copies without direct command line calls to the&nbsp;<var class="filename">svn</var>&nbsp;executable.</p>
                                                    <div class="alert alert-danger">
                                                        <strong class="warning">Warning</strong>
                                                        <p class="simpara">This extension is&nbsp;<em class="emphasis">EXPERIMENTAL</em>. The behaviour of this extension including the names of its functions and any other documentation surrounding this extension may change without notice in a future release of PHP. This extension should be used at your own risk.</p>
                                                    </div>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/svn.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/svn.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.svn.php" target="_blank">SVN Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-tcp" aria-expanded="false" aria-controls="collapseOne">
                                                        TCP — TCP Wrappers
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-tcp" class="collapse" aria-labelledby="other-services-tcp" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p>The TCP wrappers provides a classical Unix mechanism which has been designed to check if the remote client is able to connect from the given IP address.</p>

                                                    <hr />

                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/tcpwrap.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/tcpwrap.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.tcpwrap.php" target="_blank">TCP Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-varnish" aria-expanded="false" aria-controls="collapseOne">
                                                        Varnish
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-varnish" class="collapse" aria-labelledby="other-services-varnish" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p>Varnish Cache is an open source, state of the art web application accelerator. The extension makes it possible to interact with a running varnish instance through TCP socket or shared memory.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/varnish.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/varnish.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/varnish.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.varnishadmin.php" target="_blank">VarnishAdmin</a>&nbsp;&mdash; The VarnishAdmin class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.varnishstat.php" target="_blank">VarnishStat</a>&nbsp;&mdash; The VarnishStat class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.varnishlog.php" target="_blank">VarnishLog</a>&nbsp;&mdash; The VarnishLog class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-yaz" aria-expanded="false" aria-controls="collapseOne">
                                                        YAZ
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-yaz" class="collapse" aria-labelledby="other-services-yaz" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para">This extension offers a PHP interface to the&nbsp;<span class="productname">YAZ</span>&nbsp;toolkit that implements the&nbsp;<a class="link external" href="http://www.loc.gov/z3950/agency/" target="_blank">&raquo;&nbsp;Z39.50 Protocol for Information Retrieval</a>. With this extension you can easily implement a Z39.50 origin (client) that searches or scans Z39.50 targets (servers) in parallel.</p>
                                                    <p class="para">The module hides most of the complexity of Z39.50 so it should be fairly easy to use. It supports persistent stateless connections very similar to those offered by the various RDB APIs that are available for PHP. This means that sessions are stateless but shared among users, thus saving the connect and initialize phase steps in most cases.</p>
                                                    <p class="para"><span class="productname">YAZ</span>&nbsp;is available at&nbsp;<a class="link external" href="http://www.indexdata.dk/yaz/" target="_blank">&raquo;&nbsp;http://www.indexdata.dk/yaz/</a>. You can find news information, example scripts, etc. for this extension at&nbsp;<a class="link external" href="http://www.indexdata.dk/phpyaz/" target="_blank">&raquo;&nbsp;http://www.indexdata.dk/phpyaz/</a>.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">This extension has been moved to the&nbsp;<a class="link external" href="https://pecl.php.net/">&raquo;&nbsp;PECL</a>&nbsp;repository and is no longer bundled with PHP as of PHP 5.0.0.</p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/yaz.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yaz.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yaz.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.yaz.php" target="_blank">YAZ Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-0mq" aria-expanded="false" aria-controls="collapseOne">
                                                        0MQ messaging — ZMQ
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-0mq" class="collapse" aria-labelledby="other-services-0mq" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para">"&Oslash;MQ is a software library that lets you quickly design and implement a fast message-based application." --0MQ Website</p>
                                                    <p class="para">For more information about 0MQ, see&nbsp;<a class="link external" href="http://zeromq.org/" target="_blank">&raquo;&nbsp;http://zeromq.org/</a>.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/zmq.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.zmq.php" target="_blank">ZMQ</a>&nbsp;&mdash; The ZMQ class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zmqcontext.php" target="_blank">ZMQContext</a>&nbsp;&mdash; The ZMQContext class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zmqsocket.php" target="_blank">ZMQSocket</a>&nbsp;&mdash; The ZMQSocket class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zmqpoll.php" target="_blank">ZMQPoll</a>&nbsp;&mdash; The ZMQPoll class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zmqdevice.php" target="_blank">ZMQDevice</a>&nbsp;&mdash; The ZMQDevice class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#other-services-zookeeper" aria-expanded="false" aria-controls="collapseOne">
                                                        ZooKeeper
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="other-services-zookeeper" class="collapse" aria-labelledby="other-services-zookeeper" data-parent="#function-reference-accordion-other-services">
                                                <div class="card-body">
                                                    <p class="para">This extension uses libzookeeper library to provide API for communicating with ZooKeeper service.</p>
                                                    <p class="para">ZooKeeper is an Apache project that enables centralized service for maintaining configuration information, naming, providing distributed synchronization, and providing group services.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/zookeeper.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/zookeeper.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.zookeeper.php" target="_blank">ZooKeeper Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.zookeeper.php" target="_blank">Zookeeper</a>&nbsp;&mdash; The Zookeeper class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zookeeperconfig.php" target="_blank">ZookeeperConfig</a>&nbsp;&mdash; The ZookeeperConfig class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zookeeperexception.php" target="_blank">ZookeeperException</a>&nbsp;&mdash; The ZookeeperException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zookeeperauthenticationexception.php" target="_blank">ZookeeperAuthenticationException</a>&nbsp;&mdash; The ZookeeperAuthenticationException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zookeeperconnectionexception.php" target="_blank">ZookeeperConnectionException</a>&nbsp;&mdash; The ZookeeperConnectionException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zookeepermarshallingexception.php" target="_blank">ZookeeperMarshallingException</a>&nbsp;&mdash; The ZookeeperMarshallingException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zookeepernonodeexception.php" target="_blank">ZookeeperNoNodeException</a>&nbsp;&mdash; The ZookeeperNoNodeException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zookeeperoperationtimeoutexception.php" target="_blank">ZookeeperOperationTimeoutException</a>&nbsp;&mdash; The ZookeeperOperationTimeoutException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.zookeepersessionexception.php" target="_blank">ZookeeperSessionException</a>&nbsp;&mdash; The ZookeeperSessionException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-search-engine-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Search Engine Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-search-engine-extensions" class="collapse" aria-labelledby="function-reference-search-engine-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-search-engine-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#search-engine-extensions-solr" aria-expanded="false" aria-controls="collapseOne">
                                                        Solr — Apache Solr
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="search-engine-extensions-solr" class="collapse show" aria-labelledby="search-engine-extensions-solr" data-parent="#function-reference-accordion-search-engine-extensions">
                                                <div class="card-body">
                                                    <p class="para">The Solr extension allows you to communicate effectively with the Apache Solr Server in PHP.</p>
                                                    <p class="para">The Solr extension is an extremely fast, light-weight, feature-rich library that allows PHP developers to communicate effectively with Solr server instances.</p>
                                                    <p class="para">Versions 1.x of The PECL Extension supports Apache Solr Server 1.3-3.x</p>
                                                    <p class="para">Versions 2.x of The PECL Extension supports Apache Solr Server 4.0+</p>
                                                    <p class="para">There are built-in tools to add documents and make updates to the solr server.</p>
                                                    <p class="para">It also contains tools that allows you to build advanced queries to the server when searching for documents.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/solr.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/solr.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.solr.php" target="_blank">Solr Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/solr.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrutils.php" target="_blank">SolrUtils</a>&nbsp;&mdash; The SolrUtils class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrinputdocument.php" target="_blank">SolrInputDocument</a>&nbsp;&mdash; The SolrInputDocument class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrdocument.php" target="_blank">SolrDocument</a>&nbsp;&mdash; The SolrDocument class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrdocumentfield.php" target="_blank">SolrDocumentField</a>&nbsp;&mdash; The SolrDocumentField class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrobject.php" target="_blank">SolrObject</a>&nbsp;&mdash; The SolrObject class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrclient.php" target="_blank">SolrClient</a>&nbsp;&mdash; The SolrClient class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrresponse.php" target="_blank">SolrResponse</a>&nbsp;&mdash; The SolrResponse class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrqueryresponse.php" target="_blank">SolrQueryResponse</a>&nbsp;&mdash; The SolrQueryResponse class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrupdateresponse.php" target="_blank">SolrUpdateResponse</a>&nbsp;&mdash; The SolrUpdateResponse class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrpingresponse.php" target="_blank">SolrPingResponse</a>&nbsp;&mdash; The SolrPingResponse class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrgenericresponse.php" target="_blank">SolrGenericResponse</a>&nbsp;&mdash; The SolrGenericResponse class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrparams.php" target="_blank">SolrParams</a>&nbsp;&mdash; The SolrParams class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrmodifiableparams.php" target="_blank">SolrModifiableParams</a>&nbsp;&mdash; The SolrModifiableParams class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrquery.php" target="_blank">SolrQuery</a>&nbsp;&mdash; The SolrQuery class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrdismaxquery.php" target="_blank">SolrDisMaxQuery</a>&nbsp;&mdash; The SolrDisMaxQuery class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrcollapsefunction.php" target="_blank">SolrCollapseFunction</a>&nbsp;&mdash; The SolrCollapseFunction class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrexception.php" target="_blank">SolrException</a>&nbsp;&mdash; The SolrException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrclientexception.php" target="_blank">SolrClientException</a>&nbsp;&mdash; The SolrClientException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrserverexception.php" target="_blank">SolrServerException</a>&nbsp;&mdash; The SolrServerException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrillegalargumentexception.php" target="_blank">SolrIllegalArgumentException</a>&nbsp;&mdash; The SolrIllegalArgumentException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrillegaloperationexception.php" target="_blank">SolrIllegalOperationException</a>&nbsp;&mdash; The SolrIllegalOperationException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.solrmissingmandatoryparameterexception.php" target="_blank">SolrMissingMandatoryParameterException</a>&nbsp;&mdash; The SolrMissingMandatoryParameterException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-server-specific-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Server Specific Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-server-specific-extensions" class="collapse" aria-labelledby="function-reference-server-specific-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-server-specific-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#server-specific-extensions-apache" aria-expanded="false" aria-controls="collapseOne">
                                                        Apache
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="server-specific-extensions-apache" class="collapse show" aria-labelledby="server-specific-extensions-apache" data-parent="#function-reference-accordion-server-specific-extensions">
                                                <div class="card-body">
                                                    <p>These functions are only available when running PHP as an Apache module.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/apache.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/apache.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.apache.php" target="_blank">Apache Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#server-specific-extensions-fast-cgi" aria-expanded="false" aria-controls="collapseOne">
                                                        FastCGI Process Manager
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="server-specific-extensions-fast-cgi" class="collapse" aria-labelledby="server-specific-extensions-fast-cgi" data-parent="#function-reference-accordion-server-specific-extensions">
                                                <div class="card-body">
                                                    <p class="para">FPM (FastCGI Process Manager) is a primary PHP FastCGI implementation containing some features (mostly) useful for heavy-loaded sites.</p>
                                                    <p class="para">This SAPI is bundled with PHP.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/fpm.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/fpm.observability.php" target="_blank">Observability</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.fpm.php" target="_blank">FPM Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-session-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Session Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-session-extensions" class="collapse" aria-labelledby="function-reference-session-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-session-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#session-extensions-session-handling" aria-expanded="false" aria-controls="collapseOne">
                                                        Sessions — Session Handling
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="session-extensions-session-handling" class="collapse show" aria-labelledby="session-extensions-session-handling" data-parent="#function-reference-accordion-session-extensions">
                                                <div class="card-body">
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/session.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/session.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/session.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/session.upload-progress.php" target="_blank">Session Upload Progress</a></li>
                                                        <li><a href="https://www.php.net/manual/en/session.security.php" target="_blank">Sessions and Security</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.session.php" target="_blank">Session Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.sessionhandler.php" target="_blank">SessionHandler</a>&nbsp;&mdash; The SessionHandler class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.sessionhandlerinterface.php" target="_blank">SessionHandlerInterface</a>&nbsp;&mdash; The SessionHandlerInterface class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.sessionidinterface.php" target="_blank">SessionIdInterface</a>&nbsp;&mdash; The SessionIdInterface interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php" target="_blank">SessionUpdateTimestampHandlerInterface</a>&nbsp;&mdash; The SessionUpdateTimestampHandlerInterface interface</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-text-processing" aria-expanded="false" aria-controls="collapseOne">
                                        Text Processing
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-text-processing" class="collapse" aria-labelledby="function-reference-text-processing" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-text-processing">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#text-processing-common-mark" aria-expanded="false" aria-controls="collapseOne">
                                                        CommonMark
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="text-processing-common-mark" class="collapse show" aria-labelledby="text-processing-common-mark" data-parent="#function-reference-accordion-text-processing">
                                                <div class="card-body">
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

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/cmark.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-document.php" target="_blank">CommonMark\Node\Document</a>&nbsp;&mdash; Document concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-heading.php" target="_blank">CommonMark\Node\Heading</a>&nbsp;&mdash; Heading concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-paragraph.php" target="_blank">CommonMark\Node\Paragraph</a>&nbsp;&mdash; Paragraph concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-blockquote.php" target="_blank">CommonMark\Node\BlockQuote</a>&nbsp;&mdash; BlockQuote concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-bulletlist.php" target="_blank">CommonMark\Node\BulletList</a>&nbsp;&mdash; BulletList concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-orderedlist.php" target="_blank">CommonMark\Node\OrderedList</a>&nbsp;&mdash; OrderedList concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-item.php" target="_blank">CommonMark\Node\Item</a>&nbsp;&mdash; Item concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-text.php" target="_blank">CommonMark\Node\Text</a>&nbsp;&mdash; Text concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-text-strong.php" target="_blank">CommonMark\Node\Text\Strong</a>&nbsp;&mdash; Strong concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-text-emphasis.php" target="_blank">CommonMark\Node\Text\Emphasis</a>&nbsp;&mdash; Emphasis concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-thematicbreak.php" target="_blank">CommonMark\Node\ThematicBreak</a>&nbsp;&mdash; ThematicBreak concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-softbreak.php" target="_blank">CommonMark\Node\SoftBreak</a>&nbsp;&mdash; SoftBreak concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-linebreak.php" target="_blank">CommonMark\Node\LineBreak</a>&nbsp;&mdash; LineBreak concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-code.php" target="_blank">CommonMark\Node\Code</a>&nbsp;&mdash; Code concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-codeblock.php" target="_blank">CommonMark\Node\CodeBlock</a>&nbsp;&mdash; CodeBlock concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-htmlblock.php" target="_blank">CommonMark\Node\HTMLBlock</a>&nbsp;&mdash; HTMLBlock concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-htmlinline.php" target="_blank">CommonMark\Node\HTMLInline</a>&nbsp;&mdash; HTMLInline concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-image.php" target="_blank">CommonMark\Node\Image</a>&nbsp;&mdash; Image concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-link.php" target="_blank">CommonMark\Node\Link</a>&nbsp;&mdash; Link concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-customblock.php" target="_blank">CommonMark\Node\CustomBlock</a>&nbsp;&mdash; CustomBlock concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node-custominline.php" target="_blank">CommonMark\Node\CustomInline</a>&nbsp;&mdash; CustomInline concrete CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-node.php" target="_blank">CommonMark\Node</a>&nbsp;&mdash; Abstract CommonMark\Node</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-interfaces-ivisitor.php" target="_blank">CommonMark\Interfaces\IVisitor</a>&nbsp;&mdash; The CommonMark\Interfaces\IVisitor interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-interfaces-ivisitable.php" target="_blank">CommonMark\Interfaces\IVisitable</a>&nbsp;&mdash; The CommonMark\Interfaces\IVisitable interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-parser.php" target="_blank">CommonMark\Parser</a>&nbsp;&mdash; The CommonMark\Parser class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.commonmark-cql.php" target="_blank">CommonMark\CQL</a>&nbsp;&mdash; The CommonMark\CQL class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.cmark.php" target="_blank">CommonMark Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#text-processing-parle" aria-expanded="false" aria-controls="collapseOne">
                                                        Parle — Parsing and lexing
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="text-processing-parle" class="collapse" aria-labelledby="text-processing-parle" data-parent="#function-reference-accordion-text-processing">
                                                <div class="card-body">
                                                    <p class="para">The parle extension provides general purpose lexing and parsing facilities. The implementation is based on&nbsp;<a class="link external" href="http://www.benhanson.net/" target="_blank">&raquo;&nbsp;Ben Hanson</a>'s libraries and requires a&nbsp;<a class="link external" href="http://en.cppreference.com/w/cpp/compiler_support" target="_blank">&raquo;&nbsp;C++14</a>&nbsp;capable compiler. The lexer is based on the regex matching, the parser is LALR(1). Lexers and parsers are generated on the fly and can be used immediately after they've been finalized. Parle deals with parsing and lexing, the appropriate data structures representation and processing are the implementer's task. Serialization and code generation are not supported by the extension, yet.</p>
                                                    <p class="para">Lexer analysis is a process of splitting a character sequence into a list of lexemes. The lexeme list can be then used for the syntax analysis against a formal grammar. These operations are also known as lexing and parsing. This documentation doesn't aim to provide an exhaustive information on lexing and parsing. Good information in this regard is available on the numerous resources on the net. Several usage examples are included, to show the functionality. The extension is useful for PHP programmers both willing to learn or to utilize parsing and lexing. State machines and grammar parsing don't have to be implemented manually, these complex tasks are taken away by parle. Thanks to that, the development can be focused on the actual problem solving.</p>
                                                    <p class="para">The common use case for parle is, when a data format is too complex to be handled by the regex matching with PCRE. The practical application is herewith wide. Be it a specific data format, a behavior modification of existing functions, even an own programming language and beyond. The helper methods such as&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parle-lexer.dump.php" target="_blank">Parle\Lexer::dump()</a></span>&nbsp;to inspect the generated state machine, or&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parle-parser.dump.php" target="_blank">Parle\Parser::dump()</a></span>&nbsp;to inspect the generated grammar, are useful. The method&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/parle-parser.trace.php" target="_blank">Parle\Parser::trace()</a></span>&nbsp;can also be used to track the parsing operation.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/parle.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/parle.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/parle.pattern.matching.php" target="_blank">Pattern matching</a>&nbsp;&mdash; Parle pattern matching</li>
                                                        <li><a href="https://www.php.net/manual/en/parle.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.parle-lexer.php" target="_blank">Parle\Lexer</a>&nbsp;&mdash; The Parle\Lexer class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parle-rlexer.php" target="_blank">Parle\RLexer</a>&nbsp;&mdash; The Parle\RLexer class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parle-parser.php" target="_blank">Parle\Parser</a>&nbsp;&mdash; The Parle\Parser class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parle-rparser.php" target="_blank">Parle\RParser</a>&nbsp;&mdash; The Parle\RParser class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parle-stack.php" target="_blank">Parle\Stack</a>&nbsp;&mdash; The Parle\Stack class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parle-token.php" target="_blank">Parle\Token</a>&nbsp;&mdash; The Parle\Token class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parle-errorinfo.php" target="_blank">Parle\ErrorInfo</a>&nbsp;&mdash; The Parle\ErrorInfo class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parle-lexerexception.php" target="_blank">Parle\LexerException</a>&nbsp;&mdash; The Parle\LexerException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.parle-parserexception.php" target="_blank">Parle\ParserException</a>&nbsp;&mdash; The Parle\ParserException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#text-processing-pcre" aria-expanded="false" aria-controls="collapseOne">
                                                        PCRE — Regular Expressions (Perl-Compatible)
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="text-processing-pcre" class="collapse" aria-labelledby="text-processing-pcre" data-parent="#function-reference-accordion-text-processing">
                                                <div class="card-body">
                                                    <p class="para">The syntax for patterns used in these functions closely resembles Perl. The expression must be enclosed in the delimiters, a forward slash (/), for example. Delimiters can be any non-alphanumeric, non-whitespace ASCII character except the backslash (\) and the null byte. If the delimiter character has to be used in the expression itself, it needs to be escaped by backslash. Perl-style (), {}, [], and &lt;&gt; matching delimiters may also be used. See&nbsp;<a class="link" href="https://www.php.net/manual/en/reference.pcre.pattern.syntax.php" target="_blank">Pattern Syntax</a>&nbsp;for detailed explanation.</p>
                                                    <p class="para">The ending delimiter may be followed by various modifiers that affect the matching. See&nbsp;<a class="link" href="https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php" target="_blank">Pattern Modifiers</a>.</p>
                                                    <blockquote class="note">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">This extension maintains a global per-thread cache of compiled regular expressions (up to 4096).</p>
                                                    </blockquote>
                                                    <div class="warning"><strong class="warning">Warning</strong>
                                                        <p class="para">You should be aware of some limitations of PCRE. Read&nbsp;<a class="link external" href="http://www.pcre.org/pcre.txt" target="_blank">&raquo;&nbsp;http://www.pcre.org/pcre.txt</a>&nbsp;for more info.</p>
                                                    </div>
                                                    <p class="para">The PCRE library is a set of functions that implement regular expression pattern matching using the same syntax and semantics as Perl 5, with just a few differences (see below). The current implementation corresponds to Perl 5.005.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/pcre.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/pcre.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/pcre.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/pcre.pattern.php" target="_blank">PCRE Patterns</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.pcre.php" target="_blank">PCRE Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#text-processing-ssdeep" aria-expanded="false" aria-controls="collapseOne">
                                                        ssdeep — ssdeep Fuzzy Hashing
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="text-processing-ssdeep" class="collapse" aria-labelledby="text-processing-ssdeep" data-parent="#function-reference-accordion-text-processing">
                                                <div class="card-body">
                                                    <p class="para">ssdeep is a utility for creating and comparing fuzzy hashes.</p>
                                                    <p class="para">Fuzzy hashing can match signatures which have "...sequences of identical bytes in the same order, although bytes in between these sequences may be different in both content and length". (<a class="link external" href="http://ssdeep.sourceforge.net/" target="_blank">&raquo;&nbsp; ssdeep project page</a>)</p>
                                                    <p class="para">This extension provides functions for creating and comparing fuzzy hashes.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ssdeep.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ssdeep.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.ssdeep.php" target="_blank">ssdeep Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#text-processing-ssdeep" aria-expanded="false" aria-controls="collapseOne">
                                                        Strings
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="text-processing-ssdeep" class="collapse" aria-labelledby="text-processing-ssdeep" data-parent="#function-reference-accordion-text-processing">
                                                <div class="card-body">
                                                    <p class="para">These functions all manipulate strings in various ways. Some more specialized sections can be found in the regular expression and&nbsp;<a class="link" href="https://www.php.net/manual/en/book.url.php" target="_blank">URL handling</a>&nbsp;sections.</p>
                                                    <p class="para">For information on how strings behave, especially with regard to usage of single quotes, double quotes, and escape sequences, see the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.types.string.php" target="_blank">Strings</a>&nbsp;entry in the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.types.php" target="_blank">Types</a>&nbsp;section of the manual.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/strings.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/string.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.strings.php" target="_blank">String Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/changelog.strings.php" target="_blank">Changelog</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-variable-and-type-related-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Variable and Type Related Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-variable-and-type-related-extensions" class="collapse" aria-labelledby="function-reference-variable-and-type-related-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-variable-and-type-related-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#variable-and-type-related-extensions-arrays" aria-expanded="false" aria-controls="collapseOne">
                                                        Arrays
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="variable-and-type-related-extensions-arrays" class="collapse show" aria-labelledby="variable-and-type-related-extensions-arrays" data-parent="#function-reference-accordion-variable-and-type-related-extensions">
                                                <div class="card-body">
                                                    <p class="para">These functions allow you to interact with and manipulate arrays in various ways. Arrays are essential for storing, managing, and operating on sets of variables.</p>
                                                    <p class="para">Simple and multi-dimensional arrays are supported, and may be either user created or created by another function. There are specific database handling functions for populating arrays from database queries, and several functions return arrays.</p>
                                                    <p class="para">Please see the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.types.array.php" target="_blank">Arrays</a>&nbsp;section of the manual for a detailed explanation of how arrays are implemented and used in PHP. See also&nbsp;<a class="link" href="https://www.php.net/manual/en/language.operators.array.php" target="_blank">Array operators</a>&nbsp;for other ways how to manipulate the arrays.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/array.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/array.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/array.sorting.php" target="_blank">Sorting Arrays</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.array.php" target="_blank">Array Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#variable-and-type-related-extensions-classes-objects" aria-expanded="false" aria-controls="collapseOne">
                                                        Classes/Objects — Class/Object Information
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="variable-and-type-related-extensions-classes-objects" class="collapse" aria-labelledby="variable-and-type-related-extensions-classes-objects" data-parent="#function-reference-accordion-variable-and-type-related-extensions">
                                                <div class="card-body">
                                                    <p class="para">These functions allow you to obtain information about classes and instance objects. You can obtain the name of the class to which an object belongs, as well as its member properties and methods. Using these functions, you can find out not only the class membership of an object, but also its parentage (i.e. what class is the object class extending).</p>
                                                    <p class="para">Please see the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.types.object.php" target="_blank">Objects</a>&nbsp;section of the manual for a detailed explanation of how classes and objects are implemented and used in PHP.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/classobj.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/classobj.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/classobj.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.classobj.php" target="_blank">Classes/Object Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#variable-and-type-related-extensions-ctype" aria-expanded="false" aria-controls="collapseOne">
                                                        Ctype — Character type checking
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="variable-and-type-related-extensions-ctype" class="collapse" aria-labelledby="variable-and-type-related-extensions-ctype" data-parent="#function-reference-accordion-variable-and-type-related-extensions">
                                                <div class="card-body">
                                                    <p class="para">The functions provided by this extension check whether a character or string falls into a certain character class according to the current locale (see also&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.setlocale.php" target="_blank">setlocale()</a></span>).</p>
                                                    <p class="para">When called with an integer argument these functions behave exactly like their C counterparts from&nbsp;<var class="filename">ctype.h</var>. It means that if an integer smaller than 256 is passed, it will use the ASCII value of it to see if it fits in the specified range (digits are in 0x30-0x39). If the number is between -128 and -1 inclusive then 256 will be added and the check will be done on that.</p>
                                                    <div class="alert alert-danger">
                                                        <strong class="warning">Warning</strong>
                                                        <p class="para">As of PHP 8.1.0, passing a non-string argument is deprecated. In the future, the argument will be interpreted as a string instead of an ASCII codepoint. Depending on the intended behavior, the argument should either be cast to&nbsp;<span class="type">string</span>&nbsp;or an explicit call to&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.chr.php" target="_blank">chr()</a></span>&nbsp;should be made.</p>
                                                    </div>
                                                    <p class="para">When called with a string argument they will check every character in the string and will only return&nbsp;<strong><code>true</code></strong>&nbsp;if every character in the string matches the requested criteria. When called with an empty string the result will always be&nbsp;<strong><code>false</code></strong>.</p>
                                                    <p class="para">Passing anything else but a string or integer will return&nbsp;<strong><code>false</code></strong>&nbsp;immediately.</p>
                                                    <p class="para">It should be noted that ctype functions are always preferred over regular expressions, and even to some equivalent&nbsp;<code class="literal">"str_*"</code>&nbsp;and&nbsp;<code class="literal">"is_*"</code>&nbsp;functions. This is because of the fact that ctype uses a native C library and thus processes significantly faster.</p>
                                                    <blockquote class="blockquote">
                                                        <p><strong class="note">Note</strong>:</p>
                                                        <p class="para">These functions are not related to the Python "ctypes" library at all. The extension name stems from the&nbsp;<var class="filename">ctype.h</var>&nbsp;C header file that their C equivalents are defined in.</p>
                                                        <p class="para">This extension also predates Python "ctypes" so any confusion caused by this naming is hardly PHP's fault.</p>
                                                    </blockquote>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ctype.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ctype.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.ctype.php" target="_blank">Ctype Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#variable-and-type-related-extensions-filter" aria-expanded="false" aria-controls="collapseOne">
                                                        Filter — Data Filtering
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="variable-and-type-related-extensions-filter" class="collapse" aria-labelledby="variable-and-type-related-extensions-filter" data-parent="#function-reference-accordion-variable-and-type-related-extensions">
                                                <div class="card-body">
                                                    <p class="para">This extension filters data by either validating or sanitizing it. This is especially useful when the data source contains unknown (or foreign) data, like user supplied input. For example, this data may come from an HTML form.</p>
                                                    <p class="para">There are two main types of filtering:&nbsp;<em class="emphasis">validation</em>&nbsp;and&nbsp;<em class="emphasis">sanitization</em>.</p>
                                                    <p class="para"><a class="link" href="https://www.php.net/manual/en/filter.filters.validate.php" target="_blank">Validation</a>&nbsp;is used to validate or check if the data meets certain qualifications. For example, passing in&nbsp;<strong><code>FILTER_VALIDATE_EMAIL</code></strong>&nbsp;will determine if the data is a valid email address, but will not change the data itself.</p>
                                                    <p class="para"><a class="link" href="https://www.php.net/manual/en/filter.filters.sanitize.php" target="_blank">Sanitization</a>&nbsp;will sanitize the data, so it may alter it by removing undesired characters. For example, passing in&nbsp;<strong><code>FILTER_SANITIZE_EMAIL</code></strong>&nbsp;will remove characters that are inappropriate for an email address to contain. That said, it does not validate the data.</p>
                                                    <p class="para"><em class="emphasis">Flags</em>&nbsp;are optionally used with both validation and sanitization to tweak behaviour according to need. For example, passing in&nbsp;<strong><code>FILTER_FLAG_PATH_REQUIRED</code></strong>&nbsp;while filtering an&nbsp;<abbr title="Uniform Resource Locator">URL</abbr>&nbsp;will require a path (like&nbsp;<code class="literal">/foo</code>&nbsp;in&nbsp;<code class="literal">http://example.org/foo</code>) to be present.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/filter.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/filter.filters.php" target="_blank">Types of filters</a></li>
                                                        <li><a href="https://www.php.net/manual/en/filter.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/filter.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.filter.php" target="_blank">Filter Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#variable-and-type-related-extensions-function-handling" aria-expanded="false" aria-controls="collapseOne">
                                                        Function Handling
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="variable-and-type-related-extensions-function-handling" class="collapse" aria-labelledby="variable-and-type-related-extensions-function-handling" data-parent="#function-reference-accordion-variable-and-type-related-extensions">
                                                <div class="card-body">
                                                    <p>These functions all handle various operations involved in working with functions.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/funchand.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/funchand.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.funchand.php" target="_blank">Function handling Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#variable-and-type-related-extensions-reflection" aria-expanded="false" aria-controls="collapseOne">
                                                        Reflection
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="variable-and-type-related-extensions-reflection" class="collapse" aria-labelledby="variable-and-type-related-extensions-reflection" data-parent="#function-reference-accordion-variable-and-type-related-extensions">
                                                <div class="card-body">
                                                    <p class="para">PHP comes with a complete reflection API that adds the ability to introspect classes, interfaces, functions, methods and extensions. Additionally, the reflection API offers ways to retrieve doc comments for functions, classes and methods.</p>
                                                    <p class="para">Please note that certain parts of the internal&nbsp;<abbr title="Application Programming Interface">API</abbr>&nbsp;are missing the necessary code to work with the Reflection extension. E.g., an internal PHP class might be missing reflection data for properties. These few cases are considered bugs, however, so they should be discovered and fixed.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/reflection.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/reflection.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/reflection.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/reflection.extending.php" target="_blank">Extending</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflection.php" target="_blank">Reflection</a>&nbsp;&mdash; The Reflection class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionclass.php" target="_blank">ReflectionClass</a>&nbsp;&mdash; The ReflectionClass class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionclassconstant.php" target="_blank">ReflectionClassConstant</a>&nbsp;&mdash; The ReflectionClassConstant class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionenum.php" target="_blank">ReflectionEnum</a>&nbsp;&mdash; The ReflectionEnum class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionenumunitcase.php" target="_blank">ReflectionEnumUnitCase</a>&nbsp;&mdash; The ReflectionEnumUnitCase class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionenumbackedcase.php" target="_blank">ReflectionEnumBackedCase</a>&nbsp;&mdash; The ReflectionEnumBackedCase class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionzendextension.php" target="_blank">ReflectionZendExtension</a>&nbsp;&mdash; The ReflectionZendExtension class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionextension.php" target="_blank">ReflectionExtension</a>&nbsp;&mdash; The ReflectionExtension class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionfunction.php" target="_blank">ReflectionFunction</a>&nbsp;&mdash; The ReflectionFunction class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionfunctionabstract.php" target="_blank">ReflectionFunctionAbstract</a>&nbsp;&mdash; The ReflectionFunctionAbstract class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionmethod.php" target="_blank">ReflectionMethod</a>&nbsp;&mdash; The ReflectionMethod class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionnamedtype.php" target="_blank">ReflectionNamedType</a>&nbsp;&mdash; The ReflectionNamedType class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionobject.php" target="_blank">ReflectionObject</a>&nbsp;&mdash; The ReflectionObject class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionparameter.php" target="_blank">ReflectionParameter</a>&nbsp;&mdash; The ReflectionParameter class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionproperty.php" target="_blank">ReflectionProperty</a>&nbsp;&mdash; The ReflectionProperty class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectiontype.php" target="_blank">ReflectionType</a>&nbsp;&mdash; The ReflectionType class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionuniontype.php" target="_blank">ReflectionUnionType</a>&nbsp;&mdash; The ReflectionUnionType class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectiongenerator.php" target="_blank">ReflectionGenerator</a>&nbsp;&mdash; The ReflectionGenerator class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionfiber.php" target="_blank">ReflectionFiber</a>&nbsp;&mdash; The ReflectionFiber class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionintersectiontype.php" target="_blank">ReflectionIntersectionType</a>&nbsp;&mdash; The ReflectionIntersectionType class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionreference.php" target="_blank">ReflectionReference</a>&nbsp;&mdash; The ReflectionReference class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionattribute.php" target="_blank">ReflectionAttribute</a>&nbsp;&mdash; The ReflectionAttribute class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflector.php" target="_blank">Reflector</a>&nbsp;&mdash; The Reflector interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.reflectionexception.php" target="_blank">ReflectionException</a>&nbsp;&mdash; The ReflectionException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#variable-and-type-related-extensions-variable-handling" aria-expanded="false" aria-controls="collapseOne">
                                                        Variable handling
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="variable-and-type-related-extensions-variable-handling" class="collapse" aria-labelledby="variable-and-type-related-extensions-variable-handling" data-parent="#function-reference-accordion-variable-and-type-related-extensions">
                                                <div class="card-body">
                                                    <p>For information on how variables behave, see the&nbsp;<a class="link" href="https://www.php.net/manual/en/language.variables.php" target="_blank">Variables</a>&nbsp;entry in the&nbsp;<a class="link" href="https://www.php.net/manual/en/langref.php" target="_blank">Language Reference</a>&nbsp;section of the manual.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/var.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/var.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.var.php" target="_blank">Variable handling Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-web-services" aria-expanded="false" aria-controls="collapseOne">
                                        Web Services
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-web-services" class="collapse" aria-labelledby="function-reference-web-services" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-web-services">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#web-services-oauth" aria-expanded="false" aria-controls="collapseOne">
                                                        OAuth
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="web-services-oauth" class="collapse show" aria-labelledby="web-services-oauth" data-parent="#function-reference-accordion-web-services">
                                                <div class="card-body">
                                                    <p>This extension provides OAuth 1.0a consumer and provider bindings. OAuth is an authorization protocol built on top of HTTP which allows applications to securely access data without having to store usernames and passwords.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/oauth.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/oauth.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/oauth.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.oauth.php" target="_blank">OAuth Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.oauth.php" target="_blank">OAuth</a>&nbsp;&mdash; The OAuth class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.oauthprovider.php" target="_blank">OAuthProvider</a>&nbsp;&mdash; The OAuthProvider class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.oauthexception.php" target="_blank">OAuthException</a>&nbsp;&mdash; OAuthException class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#web-services-soap" aria-expanded="false" aria-controls="collapseOne">
                                                        SOAP
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="web-services-soap" class="collapse" aria-labelledby="web-services-soap" data-parent="#function-reference-accordion-web-services">
                                                <div class="card-body">
                                                    <p>The SOAP extension can be used to write SOAP Servers and Clients. It supports subsets of&nbsp;<a class="link external" href="http://www.w3.org/TR/soap11/" target="_blank">&raquo;&nbsp;SOAP 1.1</a>,&nbsp;<a class="link external" href="http://www.w3.org/TR/soap12/" target="_blank">&raquo;&nbsp;SOAP 1.2</a>&nbsp;and&nbsp;<a class="link external" href="http://www.w3.org/TR/wsdl" target="_blank">&raquo;&nbsp;WSDL 1.1</a>&nbsp;specifications.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/soap.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/soap.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.soap.php" target="_blank">SOAP Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.soapclient.php" target="_blank">SoapClient</a>&nbsp;&mdash; The SoapClient class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.soapserver.php" target="_blank">SoapServer</a>&nbsp;&mdash; The SoapServer class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.soapfault.php" target="_blank">SoapFault</a>&nbsp;&mdash; The SoapFault class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.soapheader.php" target="_blank">SoapHeader</a>&nbsp;&mdash; The SoapHeader class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.soapparam.php" target="_blank">SoapParam</a>&nbsp;&mdash; The SoapParam class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.soapvar.php" target="_blank">SoapVar</a>&nbsp;&mdash; The SoapVar class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#web-services-yar" aria-expanded="false" aria-controls="collapseOne">
                                                        Yar — Yet Another RPC Framework
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="web-services-yar" class="collapse" aria-labelledby="web-services-yar" data-parent="#function-reference-accordion-web-services">
                                                <div class="card-body">
                                                    <p class="para">Yar is a RPC framework which aims to provide a simple and easy way to do communication between PHP applications It has the ability to concurrently call multiple remote services</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/yar.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yar.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/yar.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.yar-server.php" target="_blank">Yar_Server</a>&nbsp;&mdash; The Yar_Server class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yar-client.php" target="_blank">Yar_Client</a>&nbsp;&mdash; The Yar_Client class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yar-concurrent-client.php" target="_blank">Yar_Concurrent_Client</a>&nbsp;&mdash; The Yar_Concurrent_Client class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yar-server-exception.php" target="_blank">Yar_Server_Exception</a>&nbsp;&mdash; The Yar_Server_Exception class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.yar-client-exception.php" target="_blank">Yar_Client_Exception</a>&nbsp;&mdash; The Yar_Client_Exception class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#web-services-xml-rpc" aria-expanded="false" aria-controls="collapseOne">
                                                        XML-RPC
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="web-services-xml-rpc" class="collapse" aria-labelledby="web-services-xml-rpc" data-parent="#function-reference-accordion-web-services">
                                                <div class="card-body">
                                                    <p class="para">These functions can be used to write XML-RPC servers and clients. You can find more information about XML-RPC at&nbsp;<a class="link external" href="http://www.xmlrpc.com/" target="_blank">&raquo;&nbsp;http://www.xmlrpc.com/</a>, and more documentation on this extension and its functions at&nbsp;<a class="link external" href="http://xmlrpc-epi.sourceforge.net/" target="_blank">&raquo;&nbsp;http://xmlrpc-epi.sourceforge.net/</a>.</p>
                                                    <div class="alert alert-danger">
                                                        <strong class="warning">Warning</strong>
                                                        <p class="simpara">This extension is&nbsp;<em class="emphasis">EXPERIMENTAL</em>. The behaviour of this extension including the names of its functions and any other documentation surrounding this extension may change without notice in a future release of PHP. This extension should be used at your own risk.</p>
                                                    </div>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/xmlrpc.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xmlrpc.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.xmlrpc.php" target="_blank">XML-RPC Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-windows-only-extensions" aria-expanded="false" aria-controls="collapseOne">
                                        Windows Only Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-windows-only-extensions" class="collapse" aria-labelledby="function-reference-windows-only-extensions" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-windows-only-extensions">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#windows-only-extensions-com" aria-expanded="false" aria-controls="collapseOne">
                                                        COM — COM and .Net (Windows)
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="windows-only-extensions-com" class="collapse show" aria-labelledby="windows-only-extensions-com" data-parent="#function-reference-accordion-windows-only-extensions">
                                                <div class="card-body">
                                                    <p class="para">COM is an acronym for&nbsp;<code class="literal">Component Object Model</code>; it is an object orientated layer (and associated services) on top of DCE RPC (an open standard) and defines a common calling convention that enables code written in any language to call and interoperate with code written in any other language (provided those languages are COM aware). Not only can the code be written in any language, but it need not even be part of the same executable; the code can be loaded from a DLL, be found in another process running on the same machine, or, with DCOM (Distributed COM), be found in another process on a remote machine, all without your code even needing to know where a component resides.</p>
                                                    <p class="para">There is a subset of COM known as OLE Automation which comprises a set of COM interfaces that allow loose binding to COM objects, so that they can be introspected and called at run-time without compile-time knowledge of how the object works. The PHP COM extension utilizes the OLE Automation interfaces to allow you to create and call compatible objects from your scripts. Technically speaking, this should really be called the "<code class="literal">OLE Automation Extension for PHP</code>", since not all COM objects are OLE compatible.</p>
                                                    <p class="para">Now, why would or should you use COM? COM is one of the main ways to glue applications and components together on the Windows platform; using COM you can launch Microsoft Word, fill in a document template and save the result as a Word document and send it to a visitor of your web site. You can also use COM to perform administrative tasks for your network and to configure your IIS; these are just the most common uses; you can do much more with COM.</p>
                                                    <p class="para">Additionally, we support the instantiation and creation of .Net assemblies using the COM interoperability layer provided by Microsoft.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/com.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/com.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/com.error-handling.php" target="_blank">Errors and error handling</a></li>
                                                        <li><a href="https://www.php.net/manual/en/com.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.com.php" target="_blank">com</a>&nbsp;&mdash; The com class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.dotnet.php" target="_blank">dotnet</a>&nbsp;&mdash; The dotnet class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.variant.php" target="_blank">variant</a>&nbsp;&mdash; variant class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.compersisthelper.php" target="_blank">COMPersistHelper</a>&nbsp;&mdash; The COMPersistHelper class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.com-exception.php" target="_blank">com_exception</a>&nbsp;&mdash; The com_exception class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.com.php" target="_blank">COM Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#windows-only-extensions-win32" aria-expanded="false" aria-controls="collapseOne">
                                                        win32service
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="windows-only-extensions-win32" class="collapse " aria-labelledby="windows-only-extensions-win32" data-parent="#function-reference-accordion-windows-only-extensions">
                                                <div class="card-body">
                                                    <p>The win32service extension is a Windows specific extension that allows PHP to communicate with the Service Control Manager to start, stop, register and unregister services, and even allows your PHP scripts to run as a service.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/win32service.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/win32service.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.win32serviceexception.php" target="_blank">Win32ServiceException</a>&nbsp;&mdash; The Win32ServiceException class</li>
                                                        <li><a href="https://www.php.net/manual/en/win32service.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/ref.win32service.php" target="_blank">win32service Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-xml-manipulation" aria-expanded="false" aria-controls="collapseOne">
                                        XML Manipulation
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-xml-manipulation" class="collapse" aria-labelledby="function-reference-xml-manipulation" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-xml-manipulation">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#xml-manipulation-dom" aria-expanded="false" aria-controls="collapseOne">
                                                        DOM — Document Object Model
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="xml-manipulation-dom" class="collapse show" aria-labelledby="xml-manipulation-dom" data-parent="#function-reference-accordion-xml-manipulation">
                                                <div class="card-body">
                                                    <div id="intro.dom" class="preface">
                                                        <p class="para">The DOM extension allows you to operate on XML documents through the DOM API with PHP.</p>
                                                        <blockquote class="blockquote">
                                                            <p><strong class="note">Note</strong>:</p>
                                                            <p class="para">The DOM extension uses UTF-8 encoding. Use&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.mb-convert-encoding.php" target="_blank">mb_convert_encoding()</a></span>,&nbsp;<span class="methodname"><a class="methodname" href="https://www.php.net/manual/en/uconverter.transcode.php" target="_blank">UConverter::transcode()</a></span>, or&nbsp;<span class="function"><a class="function" href="https://www.php.net/manual/en/function.iconv.php" target="_blank">iconv()</a></span> to handle other encodings.</p>
                                                        </blockquote>
                                                    </div>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/dom.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/dom.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/dom.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.domattr.php" target="_blank">DOMAttr</a>&nbsp;&mdash; The DOMAttr class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domcdatasection.php" target="_blank">DOMCdataSection</a>&nbsp;&mdash; The DOMCdataSection class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domcharacterdata.php" target="_blank">DOMCharacterData</a>&nbsp;&mdash; The DOMCharacterData class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domchildnode.php" target="_blank">DOMChildNode</a>&nbsp;&mdash; The DOMChildNode interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domcomment.php" target="_blank">DOMComment</a>&nbsp;&mdash; The DOMComment class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domdocument.php" target="_blank">DOMDocument</a>&nbsp;&mdash; The DOMDocument class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domdocumentfragment.php" target="_blank">DOMDocumentFragment</a>&nbsp;&mdash; The DOMDocumentFragment class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domdocumenttype.php" target="_blank">DOMDocumentType</a>&nbsp;&mdash; The DOMDocumentType class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domelement.php" target="_blank">DOMElement</a>&nbsp;&mdash; The DOMElement class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domentity.php" target="_blank">DOMEntity</a>&nbsp;&mdash; The DOMEntity class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domentityreference.php" target="_blank">DOMEntityReference</a>&nbsp;&mdash; The DOMEntityReference class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domexception.php" target="_blank">DOMException</a>&nbsp;&mdash; The DOMException class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domimplementation.php" target="_blank">DOMImplementation</a>&nbsp;&mdash; The DOMImplementation class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domnamednodemap.php" target="_blank">DOMNamedNodeMap</a>&nbsp;&mdash; The DOMNamedNodeMap class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domnode.php" target="_blank">DOMNode</a>&nbsp;&mdash; The DOMNode class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domnodelist.php" target="_blank">DOMNodeList</a>&nbsp;&mdash; The DOMNodeList class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domnotation.php" target="_blank">DOMNotation</a>&nbsp;&mdash; The DOMNotation class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domparentnode.php" target="_blank">DOMParentNode</a>&nbsp;&mdash; The DOMParentNode interface</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domprocessinginstruction.php" target="_blank">DOMProcessingInstruction</a>&nbsp;&mdash; The DOMProcessingInstruction class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domtext.php" target="_blank">DOMText</a>&nbsp;&mdash; The DOMText class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.domxpath.php" target="_blank">DOMXPath</a>&nbsp;&mdash; The DOMXPath class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.dom.php" target="_blank">DOM Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#xml-manipulation-libxml" aria-expanded="false" aria-controls="collapseOne">
                                                        libxml
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="xml-manipulation-libxml" class="collapse" aria-labelledby="xml-manipulation-libxml" data-parent="#function-reference-accordion-xml-manipulation">
                                                <div class="card-body">
                                                    <div id="intro.libxml" class="preface">
                                                        <p class="para">These functions/constants are available as of PHP 5.1.0, and the following core extensions rely on this libxml extension:&nbsp;<a class="link" href="https://www.php.net/manual/en/book.dom.php" target="_blank">DOM</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.libxml.php" target="_blank">libxml</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.simplexml.php" target="_blank">SimpleXML</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.soap.php" target="_blank">SOAP</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.wddx.php" target="_blank">WDDX</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xsl.php" target="_blank">XSL</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xml.php" target="_blank">XML</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xmlreader.php" target="_blank">XMLReader</a>,&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xmlrpc.php" target="_blank">XMLRPC</a>&nbsp;and&nbsp;<a class="link" href="https://www.php.net/manual/en/book.xmlwriter.php" target="_blank">XMLWriter</a>.</p>
                                                    </div>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/libxml.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/libxml.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.libxmlerror.php" target="_blank">libXMLError</a>&nbsp;&mdash; The libXMLError class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.libxml.php" target="_blank">libxml Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#xml-manipulation-simplexml" aria-expanded="false" aria-controls="collapseOne">
                                                        SimpleXML
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="xml-manipulation-simplexml" class="collapse" aria-labelledby="xml-manipulation-simplexml" data-parent="#function-reference-accordion-xml-manipulation">
                                                <div class="card-body">
                                                    <p>The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/simplexml.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/simplexml.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/simplexml.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.simplexmlelement.php" target="_blank">SimpleXMLElement</a>&nbsp;&mdash; The SimpleXMLElement class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.simplexmliterator.php" target="_blank">SimpleXMLIterator</a>&nbsp;&mdash; The SimpleXMLIterator class</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.simplexml.php" target="_blank">SimpleXML Functions</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#xml-manipulation-xmldiff" aria-expanded="false" aria-controls="collapseOne">
                                                        XMLDiff — XML diff and merge
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="xml-manipulation-xmldiff" class="collapse" aria-labelledby="xml-manipulation-xmldiff" data-parent="#function-reference-accordion-xml-manipulation">
                                                <div class="card-body">
                                                    <p>The extension is able to produce diffs of two XML documents and then to apply the difference to the source document. The diff is a XML document containing copy/insert/delete instruction nodes in human readable format. DOMDocument objects, local files and strings in memory can be processed.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/xmldiff.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.xmldiff-base.php" target="_blank">XMLDiff\Base</a>&nbsp;&mdash; The XMLDiff\Base class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.xmldiff-dom.php" target="_blank">XMLDiff\DOM</a>&nbsp;&mdash; The XMLDiff\DOM class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.xmldiff-memory.php" target="_blank">XMLDiff\Memory</a>&nbsp;&mdash; The XMLDiff\Memory class</li>
                                                        <li><a href="https://www.php.net/manual/en/class.xmldiff-file.php" target="_blank">XMLDiff\File</a>&nbsp;&mdash; The XMLDiff\File class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#xml-manipulation-xml-parser" aria-expanded="false" aria-controls="collapseOne">
                                                        XML Parser
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="xml-manipulation-xml-parser" class="collapse" aria-labelledby="xml-manipulation-xml-parser" data-parent="#function-reference-accordion-xml-manipulation">
                                                <div class="card-body">
                                                    <p class="para">XML (eXtensible Markup Language) is a data format for structured document interchange on the Web. It is a standard defined by The World Wide Web consortium (W3C). Information about XML and related technologies can be found at&nbsp;<a class="link external" href="http://www.w3.org/XML/" target="_blank">&raquo;&nbsp;http://www.w3.org/XML/</a>.</p>
                                                    <p class="para">This PHP extension implements support for James Clark's&nbsp;<span class="productname">expat</span>&nbsp;in PHP. This toolkit lets you parse, but not validate, XML documents. It supports three source&nbsp;<a class="link" href="https://www.php.net/manual/en/xml.encoding.php" target="_blank">character encodings</a>&nbsp;also provided by PHP:&nbsp;<code class="literal">US-ASCII</code>,&nbsp;<code class="literal">ISO-8859-1</code>&nbsp;and&nbsp;<code class="literal">UTF-8</code>.&nbsp;<code class="literal">UTF-16</code>&nbsp;is not supported.</p>
                                                    <p class="para">This extension lets you&nbsp;<a class="link" href="https://www.php.net/manual/en/function.xml-parser-create.php" target="_blank">create XML parsers</a>&nbsp;and then define&nbsp;<em class="emphasis">handlers</em>&nbsp;for different XML events. Each XML parser also has a few&nbsp;<a class="link" href="https://www.php.net/manual/en/function.xml-parser-set-option.php" target="_blank">parameters</a> you can adjust.</p>

                                                    <hr />
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
                                                        <li><a href="https://www.php.net/manual/en/class.xmlparser.php" target="_blank">XmlParser</a>&nbsp;&mdash; The XmlParser class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#xml-manipulation-xmlreader" aria-expanded="false" aria-controls="collapseOne">
                                                        XMLReader
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="xml-manipulation-xmlreader" class="collapse" aria-labelledby="xml-manipulation-xmlreader" data-parent="#function-reference-accordion-xml-manipulation">
                                                <div class="card-body">
                                                    <p class="para">The XMLReader extension is an XML Pull parser. The reader acts as a cursor going forward on the document stream and stopping at each node on the way.</p>
                                                    <p class="para">It is important to note that internally, libxml uses the UTF-8 encoding and as such, the encoding of the retrieved contents will always be in UTF-8 encoding.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/xmlreader.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.xmlreader.php" target="_blank">XMLReader</a>&nbsp;&mdash; The XMLReader class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#xml-manipulation-xmlwriter" aria-expanded="false" aria-controls="collapseOne">
                                                        XMLWriter
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="xml-manipulation-xmlwriter" class="collapse" aria-labelledby="xml-manipulation-xmlwriter" data-parent="#function-reference-accordion-xml-manipulation">
                                                <div class="card-body">
                                                    <p class="para">This is the XMLWriter extension. It wraps the libxml xmlWriter API.</p>
                                                    <p class="para">This extension represents a writer that provides a non-cached, forward-only means of generating streams or files containing XML data.</p>
                                                    <p class="para">This extension can be used in an object-oriented style or a procedural one. Every method documented describes the alternative procedural call.</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/xmlwriter.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xmlwriter.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xmlwriter.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.xmlwriter.php" target="_blank">XMLWriter</a>&nbsp;&mdash; The XMLWriter class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#xml-manipulation-xsl" aria-expanded="false" aria-controls="collapseOne">
                                                        XSL
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="xml-manipulation-xsl" class="collapse" aria-labelledby="xml-manipulation-xsl" data-parent="#function-reference-accordion-xml-manipulation">
                                                <div class="card-body">
                                                    <p>The XSL extension implements the XSL standard, performing&nbsp;<a class="link external" href="http://www.w3.org/TR/xslt" target="_blank">&raquo;&nbsp;XSLT transformations</a>&nbsp;using the&nbsp;<a class="link external" href="http://xmlsoft.org/XSLT/" target="_blank">&raquo;&nbsp;libxslt library</a></p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/xsl.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xsl.constants.php" target="_blank">Predefined Constants</a></li>
                                                        <li><a href="https://www.php.net/manual/en/xsl.examples.php" target="_blank">Examples</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.xsltprocessor.php" target="_blank">XSLTProcessor</a>&nbsp;&mdash; The XSLTProcessor class</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#function-reference-gui" aria-expanded="false" aria-controls="collapseOne">
                                        GUI Extensions
                                    </button>
                                </h5>
                            </div>

                            <div id="function-reference-gui" class="collapse" aria-labelledby="function-reference-gui" data-parent="#function-reference-accordion">
                                <div class="card-body">
                                    <div class="accordion" id="function-reference-accordion-gui">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#gui-extensions-gui" aria-expanded="false" aria-controls="collapseOne">
                                                        UI
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="gui-extensions-gui" class="collapse show" aria-labelledby="gui-extensions-gui" data-parent="#function-reference-accordion-gui">
                                                <div class="card-body">
                                                    <p>This extension wraps libui to provide an OO API for the cross platform development of native look-and-feel user interfaces .</p>

                                                    <hr />
                                                    <h5>This topic also includes:</h5>
                                                    <ul class="chunklist chunklist_set chunklist_children">
                                                        <li><a href="https://www.php.net/manual/en/ui.setup.php" target="_blank">Installing/Configuring</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-point.php" target="_blank">UI\Point</a>&nbsp;&mdash; Represents a position (x,y)</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-size.php" target="_blank">UI\Size</a>&nbsp;&mdash; Represents dimensions (width, height)</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-window.php" target="_blank">UI\Window</a>&nbsp;&mdash; Window</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-control.php" target="_blank">UI\Control</a>&nbsp;&mdash; Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-menu.php" target="_blank">UI\Menu</a>&nbsp;&mdash; Menu</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-menuitem.php" target="_blank">UI\MenuItem</a>&nbsp;&mdash; Menu Item</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-area.php" target="_blank">UI\Area</a>&nbsp;&mdash; Area</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-executor.php" target="_blank">UI\Executor</a>&nbsp;&mdash; Execution Scheduler</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-tab.php" target="_blank">UI\Controls\Tab</a>&nbsp;&mdash; Tab Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-check.php" target="_blank">UI\Controls\Check</a>&nbsp;&mdash; Check Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-button.php" target="_blank">UI\Controls\Button</a>&nbsp;&mdash; Button Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-colorbutton.php" target="_blank">UI\Controls\ColorButton</a>&nbsp;&mdash; ColorButton Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-label.php" target="_blank">UI\Controls\Label</a>&nbsp;&mdash; Label Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-entry.php" target="_blank">UI\Controls\Entry</a>&nbsp;&mdash; Entry Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-multilineentry.php" target="_blank">UI\Controls\MultilineEntry</a>&nbsp;&mdash; MultilineEntry Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-spin.php" target="_blank">UI\Controls\Spin</a>&nbsp;&mdash; Spin Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-slider.php" target="_blank">UI\Controls\Slider</a>&nbsp;&mdash; Slider Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-progress.php" target="_blank">UI\Controls\Progress</a>&nbsp;&mdash; Progress Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-separator.php" target="_blank">UI\Controls\Separator</a>&nbsp;&mdash; Control Separator</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-combo.php" target="_blank">UI\Controls\Combo</a>&nbsp;&mdash; Combo Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-editablecombo.php" target="_blank">UI\Controls\EditableCombo</a>&nbsp;&mdash; EdiableCombo Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-radio.php" target="_blank">UI\Controls\Radio</a>&nbsp;&mdash; Radio Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-picker.php" target="_blank">UI\Controls\Picker</a>&nbsp;&mdash; Picker Control</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-form.php" target="_blank">UI\Controls\Form</a>&nbsp;&mdash; Control Form (Arrangement)</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-grid.php" target="_blank">UI\Controls\Grid</a>&nbsp;&mdash; Control Grid (Arrangement)</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-group.php" target="_blank">UI\Controls\Group</a>&nbsp;&mdash; Control Group (Arrangement)</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-controls-box.php" target="_blank">UI\Controls\Box</a>&nbsp;&mdash; Control Box (Arrangement)</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-pen.php" target="_blank">UI\Draw\Pen</a>&nbsp;&mdash; Draw Pen</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-path.php" target="_blank">UI\Draw\Path</a>&nbsp;&mdash; Draw Path</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-matrix.php" target="_blank">UI\Draw\Matrix</a>&nbsp;&mdash; Draw Matrix</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-color.php" target="_blank">UI\Draw\Color</a>&nbsp;&mdash; Color Representation</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-stroke.php" target="_blank">UI\Draw\Stroke</a>&nbsp;&mdash; Draw Stroke</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-brush.php" target="_blank">UI\Draw\Brush</a>&nbsp;&mdash; Brushes</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-brush-gradient.php" target="_blank">UI\Draw\Brush\Gradient</a>&nbsp;&mdash; Gradient Brushes</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-brush-lineargradient.php" target="_blank">UI\Draw\Brush\LinearGradient</a>&nbsp;&mdash; Linear Gradient</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-brush-radialgradient.php" target="_blank">UI\Draw\Brush\RadialGradient</a>&nbsp;&mdash; Radial Gradient</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-text-layout.php" target="_blank">UI\Draw\Text\Layout</a>&nbsp;&mdash; Represents Text Layout</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font.php" target="_blank">UI\Draw\Text\Font</a>&nbsp;&mdash; Represents a Font</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font-descriptor.php" target="_blank">UI\Draw\Text\Font\Descriptor</a>&nbsp;&mdash; Font Descriptor</li>
                                                        <li><a href="https://www.php.net/manual/en/ref.ui.php" target="_blank">UI Functions</a></li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font-weight.php" target="_blank">UI\Draw\Text\Font\Weight</a>&nbsp;&mdash; Font Weight Settings</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font-italic.php" target="_blank">UI\Draw\Text\Font\Italic</a>&nbsp;&mdash; Italic Font Settings</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-text-font-stretch.php" target="_blank">UI\Draw\Text\Font\Stretch</a>&nbsp;&mdash; Font Stretch Settings</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-line-cap.php" target="_blank">UI\Draw\Line\Cap</a>&nbsp;&mdash; Line Cap Settings</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-draw-line-join.php" target="_blank">UI\Draw\Line\Join</a>&nbsp;&mdash; Line Join Settings</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-key.php" target="_blank">UI\Key</a>&nbsp;&mdash; Key Identifiers</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-exception-invalidargumentexception.php" target="_blank">UI\Exception\InvalidArgumentException</a>&nbsp;&mdash; InvalidArgumentException</li>
                                                        <li><a href="https://www.php.net/manual/en/class.ui-exception-runtimeexception.php" target="_blank">UI\Exception\RuntimeException</a>&nbsp;&mdash; RuntimeException</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>
<script type="text/javascript">
    let player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('youtube-player', {
            height: $(window).height() * 0.5,
            width: '100%',
            videoId: 'a7_WFUlFS94'
        });
    }

    //Functions to stop-pause Video
    function stopVideo() {
        if (player && typeof player.stopVideo !== "undefined") {
            player.stopVideo();
        }
    }

    function pauseVideo() {
        if (player && typeof player.pauseVideo !== "undefined") {
            player.pauseVideo();
        }
    }

    $(function() {
        $('a#list-introduction[data-toggle="list"]').on('hidden.bs.tab', function (e) {
            stopVideo();
        })

        $('#smartwizard').on("showStep", function() {
            if (typeof player === "undefined") {
                onYouTubeIframeAPIReady();
            }
        });

        $("#smartwizard").on("leaveStep", function() {
            if (typeof player !== "undefined") {
                stopVideo();
            }
        });

        $('a.list-group-item.active')
            .addClass('list-group-item-secondary');

        $('a.list-group-item').on('click', function () {
            $('a.list-group-item').removeClass('list-group-item-secondary');
            $(this).addClass('list-group-item-secondary');
        });
    });
</script>