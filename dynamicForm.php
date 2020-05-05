<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
        <style type="text/css">
            p{margin: 0px;}
            .error{color:red;}
            p.head{font-weight: bold; margin-top: 10px;}
            label{width: 5em; float: left;}
        </style>
    </head>

    <body>
        <?php
            $fname = isset($_POST["fname"]) ? $_POST["fname"] : "";
            $lname = isset($_POST["lname"]) ? $_POST["lname"] : "";
            $email = isset($_POST["email"]) ? $_POST["email"] : "";
            $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
            $book = isset($_POST["book"]) ? $_POST["book"] : "";
            $os = isset($_POST["os"]) ? $_POST["os"] : "";

            $iserror = false;
            $formerrors = array("fnameerror" => false, "lnameerror" => false,
                "emailerror" => false, "phoneerror" => false);

            $booklist = array("Internet and WWW", "C++", "Java", "VB");
            $systemlist = array("Windows", "Mac OS X", "Linux", "Other");
            $inputlist = array("fname" => "First Name", "lname" => "Last Name",
                "email" => "Email", "phone" => "Phone");

            if(isset($_POST["submit"])){
                if($fname == ""){
                    $formerrors["fnameerror"] = true;
                    $iserror = true;
                }

                if($lname == ""){
                    $formerrors["lnameerror"] = true;
                    $iserror = true;
                }

                if($email == ""){
                    $formerrors["emailerror"] = true;
                    $iserror = true;
                }

                if(!preg_match("/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/", $phone)){
                    $formerrors["phoneerror"] = true;
                    $iserror = true;
                }

                if($iserror){

                }
            }
        ?>
    </body>
</html>