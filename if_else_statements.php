<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial </title>

<style>
*{
    margin:0;
    padding:0;
}
body{
}

.container{
width:600px;
padding:20px;
color:#000;
background:#ccc;
margin:0 auto;
}

</style>

</head>
<body>

    <div class="container"> 
        this is container 
        <h5>
            Let's learn about the PHP
        </h5>
        <?php 

        $age = 20;

        if($age < 18){
            echo "<h5> You are below 18</h5>";
        }else if($age == 7){
            echo "<h5> you are to young to drive </h5>";
        }else{
        echo "you can drive a car now!"; echo "<br/>";
        }

       
        // echo $languages[1];
        //loop1 example 
        $number = 5;
        while ($number < 10){
            echo "the value of number is ";
            echo $number;  echo "<br>";
            $number++;
        };

        //loop2 example 
        $languages = ["php","python","java","javascript"];
        $count = 0;
        echo "<h2> using while loops </h2>";
        while($count < count($languages)){
            echo "the value of index is "; echo $count; 
            echo "and the value of language is ";  
            echo $languages[$count];  echo "<br>";
            $count++;
        }


        echo "<h2> using for loops </h2>";
        for ($i=0; $i < count($languages); $i++) { 
            echo "the value of index is "; echo $i; 
            echo " and the name of language is "; echo $languages[$i]; echo "<br>";
        }

        echo "<h2> using for each loops </h2>";
        $color = array("yellow","red","green");
        foreach ($color as $value){
            echo $value . "<br>";
        }



        ?>
    </div>

    <!--
     INSERT INTO `students`
     (`sno`, `name`, `age`, `gender`, `email`, `phone`, `description`, `date`) 
     VALUES 
     ('1', 'test name', '28', 'male', 'sohailalam6027@gmail.com', '919990275154', 'this is some text for test ', current_timestamp());
    -->

</body>
</html>