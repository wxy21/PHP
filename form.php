<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Form Validation</title>
        <style type="text/css">
            p{margin: 0px;}
            .error{color: red;}
            p.head{font-weight: bold; margin-top: 10px;}
        </style>
    </head>

    <body>
        <?php
            if(!preg_match("/^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$/", $_POST["phone"])){
                print(
                    "<p class='error'>Invalid Phone No.</p>
                     <p>Valid Phone No. must be in the form (555)555-5555</p>
                     <p>Click the Back button, to enter a vlaid phone no. and resubmit</p>
                     <p>Thanks!</p>
                     </body></html>");
                die();
            }
        ?><!--end PHP script-->

        <p>
            Hi <?php print($_POST["fname"]);?>. Thank you for completing the survey.
            You've been added to the <?php print($_POST["book"]);?> mailing list
        </p>

        <p class="head"> The following info has been saved in to the DB:</p>
        <p>
            Name:
            <?php
                print($_POST["fname"]);
                print($_POST["lname"]);
            ?>
        </p>
        <p>
            Email: <?php print($_POST["email"]); ?>
        </p>
        <p>
            Phone:
            <?php print($_POST["phone"]);?>
        </p>
        <p>
            OS:
            <?php print($_POST["os"]);?>
        </p>

        <p class="head">This is only a sample form. You've not been added to mailing list</p>

    </body>
</html>