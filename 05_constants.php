<?php
    echo nl2br("constant() example \n");
    define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE");
?>
<br><br>

<?php
    echo nl2br("Valid and Invalid Constant Names \n");
    define("ONE", "first thing");
    define("TWO2", "second thing");
    define("THREE_3", "third thing")
    // Invalid constant names
    //define("2TWO", "second thing");
    //define("__THREE__", "third value"); 
?>
<br><br>
<html>
    <head><title>Arithmetical Operators</title><head>
    <body>
        <?php
        $a = 42;
        $b = 20;
        
        $c = $a + $b;
        echo "Addition Operation Result: $c <br/>";
        $c = $a - $b;
        echo "Subtraction Operation Result: $c <br/>";
        $c = $a * $b;
        echo "Multiplication Operation Result: $c <br/>";
        $c = $a / $b;
        echo "Division Operation Result: $c <br/>";
        $c = $a % $b;
        echo "Modulus Operation Result: $c <br/>";
        $c = $a++;
        echo "Increment Operation Result: $c <br/>";
        $c = $a--;
        echo "Decrement Operation Result: $c <br/>";
        ?>
    </body>
</html>
