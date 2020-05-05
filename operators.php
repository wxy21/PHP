<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            p{margin: 0;}
        </style>
        <title>Using Arithmetic Operators</title>
    </head>

    <body>
        <?php
            $a = 5;
            print("<p>The value of var a is $a</p>");

            define("VALUE", 5);

            $a = $a + VALUE;
            print("<p>a + VALUE = $a</p>");

            $a *= 2;
            print("<p>a * 2 = $a</p>");

            if($a < 50){
                print("<p>a is less than 50</p>");
            }

            $a += 40;
            print("<p>a + 40 = $a</p>");

            if($a < 50){
                print("<p>a is still 50 or less</p>");
            }elseif ($a < 101){
                print("<p>a is between 50 and 100, inclusive</p>");
            }else{
                print("<p>a is greater than 100</p>");
            }

            //print("<p>Using a var before initializing: $nothing</p>");

            //$test = $num + VALUE;
            //print("<p>An unitialized var + VALUE = $test</p>");

            $str = "3 dollars";
            //$a += $str;
            //print("<p>Adding a string to var a = $a</p>");
        ?><!-- end PHP script-->
    </body>
</html>