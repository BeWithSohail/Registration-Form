<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial </title>
</head>
<body>
   <h2> this is the first website of php </h2> 

   
   <?php 
   /**
    echo "<div>";
    echo "hello world ";
    $name = " sohail ";
    $number = 10;
    echo $number; echo "<br> ";
    echo $name; echo "<br>";
    $namespace = " http://google.com ";
    echo $namespace; echo "<br>";

    $number2 = 0;
    EchO $number2;

    echo "</div>";
    
   **/
   ?>


   <?php 
    $variable1 = 5;
    $variable2 = 2;
    echo "the value of variable1 is "; echo $variable1; echo "<br>";
    echo "the value of variable2 is "; echo $variable2; echo "<br> <br> <br>";
    echo "<h2> Airthmetic operators example </h2>";
    echo "the final value of variable1 + variable2 is "; echo $variable1 + $variable2; echo "<br>";
    echo "the final value of variable1 - variable2 is "; echo $variable1 - $variable2; echo "<br>";
    echo "the final value of variable1 * variable2 is "; echo $variable1 * $variable2; echo "<br>";
    echo "the final value of variable1 / variable2 is "; echo $variable1 / $variable2; echo "<br>";

    echo "<h2> comparison operators </h2>";
    echo "the final value of variable1 is less than variable2 "; echo var_dump($variable1 < $variable2); echo "<br>";
    echo "the final value of variable1 is greater than variable2 "; echo var_dump($variable1 > $variable2); echo "<br>";
    echo "the final value of variable1 is greater than or equal to variable2 "; echo var_dump($variable1 >= $variable2); echo "<br>";
    echo "the final value of variable1 is less than or equal to variable2 "; echo var_dump($variable1 <= $variable2); echo "<br>";
    echo "the final value of variable1 is not equal to variable2 "; echo var_dump($variable1 != $variable2); echo "<br>";
    echo "the final value of variable1 is equal to value or equal type variable2 "; echo var_dump($variable1 === $variable2); echo "<br>";

    echo "<br> <h2> Data Type in PHP </h2>";
    // strings
    // array
    // integer
    // float
    // object
    // boolean
    echo " <h3> let's see some example of data types in php </h3>";
    $number = 5;
    echo var_dump($number); echo "return data type and number of variable"; echo "<br> <br>";
    $strings = "hello world!";
    echo var_dump($strings);  echo "return data type and number of variable"; echo "<br>";
   ?>
   
</body>
</html>