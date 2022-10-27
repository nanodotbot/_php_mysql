<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php&mysql</title>
    <link rel="icon" href="./favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&family=Mulish:wght@200&family=Open+Sans:wght@300&family=Source+Code+Pro:wght@300&family=Fira+Code:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/general.css">
    <script src="./js/textarea.js" defer></script>
</head>
<body>
    <header>
        <h1>php&mysql</h1>
    </header>
    <nav id="nav">
        <a href="#variables">variables, expressions, operators</a>
        <a href="#control">control structures</a>
        <a href="#functions">functions</a>
        <a href="#objects">objects & classes</a>
        <a href="#dynamic">dynamic web pages</a>
        <a href="#builtin">built-in functions</a>
        <a href="#database">get and show data from database</a>
    </nav>
    <nav id="#variables">
        <h2>variables, expressions, operators</h2>
        <a href="#array">array</a>
    </nav>
    <main>
        <article id="array">
            <h2>array</h2>
            <?php
                $rabbitsList = [
                    [
                        'name' => 'floppy',
                        'color' => 'white',
                        'age' => '5'
                    ],
                    [
                        'name' => 'algernon',
                        'color' => 'gray',
                        'age' => '4'
                    ],
                    [
                        'name' => 'fober',
                        'color' => 'black',
                        'age' => '3'
                    ],
                ];
                $message = '<section class="grid">';
                $message .= '<p>the rabbits list\'s names:</p>';
                $message .= '<p>' . $rabbitsList['0']['name'] . '</p>';
                $message .= '<p>' . $rabbitsList['1']['name'] . '</p>';
                $message .= '<p>' . $rabbitsList['2']['name'] . '</p>';
                $message .= '</section>';
                echo $message;
            ?>
        </article>
        <nav id="control">
            <h2>control structures</h2>
            <a href="#conditional">conditional statements</a>
            <a href="#ternary">ternary operator</a>
            <a href="#switch">switch</a>
            <a href="#match">match</a>
            <a href="#while">while</a>
            <a href="#dowhile">do while</a>
            <a href="#for">for loop</a>
            <a href="#including">including/requiring files</a>
        </nav>
        <article id="conditional">
            <h2>condidional statements</h2>
            <?php
                $number = rand(0, 100);
                $message = '<section class="grid">';
                $message .= '<p>the number is: ' . $number . '</p>';
                $message .= '<p>';
                if ($number % 2 == 0) {
                    $message .= 'the number is even';
                } else {
                    $message .= 'the number is odd';
                }
                $message .= '</p>';
                $message .= '</section>';
                echo $message;
            ?>
        </article>
        <article id="ternary">
            <h2>ternary operator</h2>
            <?php
                $number = rand(0, 100);
            ?>
            <section class="grid">
                <p>the number is: <?= $number ?>
                <?= $number % 2 == 0 ? ' and is even' : ' and is odd';
                ?>
                </p>
            </section>
        </article>
        <article id="switch">
            <h2>switch</h2>
            <?php
                $number = rand(0, 100);
            ?>
            <section class="grid">
                <p>the number is: <?= $number ?></p>
            <?php
                switch ($number % 2) {
                    case 0:
                        echo '<p>the number is even</p>';
                        break;
                    case 1:
                        echo '<p>the number is odd</p>';
                        break;
                }
            ?>
            </section>
        </article>
        <article id="match">
            <h2>match</h2>
            <?php
                $number = rand(0, 100);
            ?>
            <section class="grid">
                <p>the number is: <?= $number ?></p>
                <?php
                    echo match ($number % 2) {
                        0 => '<p>the number is even</p>',
                        1 => '<p>the number is odd</p>',
                        default => '<p>the number is odd</p>'
                    };
                ?>
            </section>
        </article>
        <article id="while">
            <h2>while loops</h2>
            <section>
                <?php
                    $i = 1;
                    while($i <= 5) {
                        echo '<p>' . $i . '</p>';
                        $i++;
                    }
                ?>
            </section>
        </article>
        <article id="dowhile">
            <h2>do while</h2>
            <section>
                <?php
                    $i = 1;
                    do {
                        echo '<p>' . $i . '</p>';
                        $i++;
                    } while($i <= 5);
                ?>
            </section>
        </article>
        <article id="for">
            <h2>for loops</h2>
            <section>
                <?php
                    for ($i = 1; $i <= 5; $i++) {
                        echo '<p>' . $i . '</p>';
                    }
                ?>
            </section>
        </article>
        <article id="including">
            <h2>including and requiring files</h2>
            <section>
                <p><?php include './print_info_include.php'; ?></p>
                <p><?php require './print_info_require.php'; ?></p>
            </section>
        </article>
        <nav id="functions">
            <h2>functions</h2>
            <a href="#function">function</a>
        </nav>
        <article id="function">
            <h2>function</h2>
            <section>
                <p>
                    <?php
                        $global_variable = 'global variable';
                        $another_global_variable = 'another global variable';
                        $function_name = 'print_info()';

                        function print_info(string $parameter = 'default value') : string {
                            global $another_global_variable;
                            echo '<p>' . $parameter . '</p>';
                            echo '<p>what is does and what it returns</p>';

                            echo '<p>' . $GLOBALS['global_variable'] . '</p>';
                            echo '<p>' . $another_global_variable . '</p>';
                            if ($another_global_variable === 'another global variable') {
                                return '<p>the variable is the same</p>';
                            }
                            return '<p>the variable is not the same</p>';
                        }
                        echo print_info($function_name);
                    ?>
                </p>
            </section>
        </article>
        <nav id="objects">
            <h2>objects</h2>
            <a href="#object">object</a>
        </nav>
        <article id="object">
            <h2>object</h2>
            <?php            
                class Rabbit {
                    public string $name;
                    public string $color;
                    public array $hobbies;
                    public function __construct(string $name, string $color, array $hobbies) {
                        $this->name = $name;
                        $this->color = $color;
                        $this->hobbies = $hobbies;
                    }                
                }
                $algernon = new Rabbit('Algernon', 'gray', ['reading', 'meditating']);
                $floppy = new Rabbit('Floppy', 'white', ['dancing', 'partying', 'swimming']);
                $rabbits = [$algernon, $floppy];
                foreach ($rabbits as $rabbit) {
            ?>
                    <section class="grid grid-2">
                        <p class="right-align">Name:</p>
                        <p><?= $rabbit->name ?></p>
                        <p class="right-align">Color:</p>
                        <p><?= $rabbit->color ?></p>
                        <p class="right-align">Hobbies:</p>
                        <p><?= implode(", ", $rabbit->hobbies) ?></p>
                    </section>
            <?php
                }
            ?>
        </article>
        <nav id="dynamic">
            <h2>dynamic web pages</h2>
            <a href="#server">$_SERVER superglobal array</a>
            <a href="#vardump">var_dump()</a>
        </nav>
        <article id="server">
            <h2>$_SERVER superglobal array</h2>
            <section class="grid grid-2">
                <p>browser's ip address</p><p><?= $_SERVER['REMOTE_ADDR'] ?></p>
                <p>type of browser</p><p><?= $_SERVER['HTTP_USER_AGENT'] ?></p>
                <p>host name</p><p><?= $_SERVER['HTTP_HOST'] ?></p>
                <p>uri after host</p><p><?= $_SERVER['REQUEST_URI'] ?></p>
                <p>type of http request</p><p><?= $_SERVER['REQUEST_METHOD'] ?></p>
                <p>browser's request uri</p><p><?= $_SERVER['REQUEST_URI'] ?></p>
                <p>document root</p><p><?= $_SERVER['DOCUMENT_ROOT'] ?></p>
                <p>path from document root</p><p><?= $_SERVER['SCRIPT_NAME'] ?></p>
                <p>absolute path</p><p><?= $_SERVER['SCRIPT_FILENAME'] ?></p>
            </section>
        </article>
        <article id="vardump">
            <h2>var_dump()</h2>
            <section>
                <?php
                    $string = 'string';
                    $integer = 1;
                    $array = ['string', 1, 2, 3];
                ?>                
                <p><?= var_dump($string); ?></p>
                <p><?= var_dump($integer); ?></p>
                <p><?= var_dump($array); ?></p>
            </section>
        </article>
        <nav id="builtin">
            <a href="#alot">a lot</a>
        </nav>
        <article id="alot">
            <h2>just a placeholder</h2>
            <section>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, doloremque, doloribus, ea, eius, ipsa, ipsum, itaque, laborum, magni, molestias, natus, nisi, nostrum, nulla, quae, quis, quisquam, quod, ratione, repellendus, rerum, sapiente, sed, sint, sit, sunt, tempora, totam, ut, vel, vero, vitae, voluptas, voluptate.</p>
            </section>
        </article>

        <nav id="database">
            <h2>get and show data from database</h2>
            <a href="#"></a>
        </nav>
        <article id="alot">
            <h2>connect to db</h2>
            <section>
                <?php 
                require './connect.php';
                ?>
                <?php
                    $statement = $pdo->query('SELECT * FROM rabbits');

                    $rabbits = $statement->fetchAll(PDO::FETCH_ASSOC);
                
                    foreach ($rabbits as $rabbit) {
                        echo '<p>' . $rabbit['name'] . '</p>';
                    }

                    echo '<p>' . $rabbits[0]['name'] . '</p>';
                ?>
            </section>
        </article>
        
    </main>
</body>
</html>