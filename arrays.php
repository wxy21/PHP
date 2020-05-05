<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Array Multiplication</title>
        <style type="text/css">
            p{margin: 0;}
            .head{margin-top: 10px; font-weight: bold;}
        </style>
    </head>

    <body>
        <?php
            print("<p class='head'>Creating the first array</p>");
            $first[0] = "zero";
            $first[1] = "one";
            $first[2] = "two";
            $first[] = "three";

            for($i = 0; $i < count($first); ++$i){
                print("<p>Element $i is $first[$i]</p>");
            }

            print("<p class='head'>Creating second array</p>");
            $second = array("zero", "one", "two", "three");

            for($i = 0; $i < count($second); ++$i){
                print("<p>Element $i is $second[$i]</p>");
            }

            print("<p class='head'>Creating third array</p>");
            $third["Amy"] = 21;
            $third["Bob"] = 18;
            $third["Carol"] = 23;

            for(reset($third); $element = key($third); next($third)){
                print("<p>$element is $third[$element]</p>");
            }

            print("<p class='head'>Creating fourth array</p>");
            $fourth = array(
                "Jan" => "first", "Feb" => "second", "Mar" =>"third",
                "Apr" => "fourth", "May" => "fifth", "Jun" => "sixth"
            );

            foreach ($fourth as $element => $value){
                print("<p>$element is the $value month</p>");
            }
        ?><!-- end PHP script-->
    </body>
</html>
