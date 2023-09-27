
<?php
    //Integer
    echo nl2br("Integer \n");
    $int_var = 12345;
    $another_int = -12345 + 12345;
    echo $another_int;
?>
<br><br>
<?php
    //DOUBLE
    echo nl2br("Double \n");
    $many = 2.2888800;
    $many_2 = 2.2111200;
    $few = $many + $many_2;
    echo $few;
?>
<br><br>

<?php
    //BOOLEAN
    echo nl2br("Boolean \n");
    if (TRUE)
        print("This will always print");
    else
        print("This will never print");
?>

<?php
    //BOOLEAN (2)
    $true_num = 3 + 0.14159;
    $true_str = "Tried and true"
    //$true_array[49] = "An array element";
    //$false_array = array();
    //$false_null = NULL;
    //$false_num = 999 - 999;
    //$false_str = "";
?>

<?php
    //null
    $my_var = NULL;
    $my_var = null;
?>
<br>
<?php
    //Strings
    echo nl2br("Strings \n");
    $string_1 = "This is a string in double quotes";
    $string_2 = "This is a somewhat longer, singly quoted string";
    $string_39 = "This string has thirty-nine characters";
    $string_0 = ""; // a string with zero characters

    echo $string_0;
    echo "</br>";
    echo $string_1;
    echo "</br>";
    echo $string_2;
    echo "</br>";
    echo $string_39;
?>
<br><br>
<?php
    $variable = "name";
    $literally = 'My $variable will not print!';
    print($literally);
    echo "<br>";
    $literally = "My $variable will print!\n";
    print($literally);
?>
<br><br>
<?php
    //Here Document
    $channel =<<<_XML_
    <channel>
    <title>What's For Dinner</title>
    <link>http://menu.example.com/</link>
    <description>Choose what to eat tonight.</description>
    </channel>
    _XML_;
    echo <<<END
    This uses the "here document" syntax to output
    multiple lines with variable interpolation. Note
    that the here document terminator must appear on a
    line with just a semicolon. no extra whitespace!
    <br />
    END;
    print $channel;
?>
<br><br>
<?php
    $x = 4;
    function assignx () {
    $x = 0;
    print "\$x inside function is $x.";
    }
    assignx();
    print "\$x outside of function is $x.";
?>
<br><br>
<?php
    // PHP Function Parameters
    function multiply ($value) {
    $value = $value * 10;
    return $value;
    }
    $retval = multiply (10);
    Print "Return value is $retval\n";
?>
<br><br>
<?php
    //PHP Global Variables
    $somevar = 15;
    function addit() {
    GLOBAL $somevar;
    $somevar++;
    print "Somevar is $somevar";
    }
    addit();
?>
<br><br>
<?php
    function keep_track() {
        STATIC $count = 0;
        $count++;
        print $count;
        print "";
    }
    keep_track();
    keep_track();
    keep_track();
?>