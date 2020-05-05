<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Data Type Conversion</title>
        <style type="text/css">
            p{margin: 0;}
            .head{margin-top: 10px; font-weight: bold;}
            .space{margin-top: 10px;}
        </style>
    </head>

    <body>
        <?php
            $testString = "3.5s";
            $testDouble = 79.2;
            $testInt = 12;
        ?> <!--end PHP script-->

        <p class="head">Original Values:</p>
        <?php
            print("<p>$testString is a(n) ".gettype($testString)."</p>");
            print("<p>$testDouble is a(n) ".gettype($testDouble)."</p>");
            print("<p>$testInt is a(n)".gettype($testInt)."</p>");
        ?><!-- end PHP script-->

        <p class="head">Converting to other data types:</p>
        <?php
            print("<p>$testString ");
            settype($testString, "double");
            print("  as a double is $testString</p>");
            print("<p>$testString ");
            settype($testString, "integer");
            print(" as a integer is $testString</p>");
            settype($testString, "string");
            print("<p class='space'>Converting bck to a string result is $testString</p>");

            $data = "98.6 degrees";
            print("<p class='space'>Before casting: $data is a ".gettype($data)."</p>");
            print("<p class='space'>Using type casting instead:</p>".
                    "<p>as a double: ".(double)$data."</p>".
                    "<p>as an integer: ".(integer)$data."</p>");
            print("<p class='space'>After casting: $data is a ".gettype($data)."</p>");
        ?><!--end PHP script-->
    </body>
</html>

