<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Search Result</title>
        <link rel="stylesheet" href="database.css">
    </head>

    <body>
        <?php

            //create connection
            $conn = mysqli_connect("localhost", "root", "xinying21", "textbookdb");
            //check connection
            if(!$conn){
                die("Connection Failed: ".mysqli_error($conn));
            }

            $select = $_POST["select"];
            $query = "SELECT ".$select." FROM books";

            if(!($result = mysqli_query($conn, $query))){
                print("<p>Could Not Execute Query!</p>");
                die(mysqli_error($conn)."</body></html>");
            }

            mysqli_close($conn);
        ?><!-- end PHP script-->

        <table>
            <caption>
                Results of "SELECT
                <?php print("$select")?>
                FROM books"
            </caption>

            <?php
                while($row = mysqli_fetch_row($result)){
                    print("<tr");

                    foreach ($row as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?><!-- end PHP script -->
        </table>

        <p>
            Your search yielded
            <?php
                print(mysqli_num_rows($result))
            ?>
             results.
        </p>

        <p>
            Please email comments to
            <a href="mailtoLdeitel@deitel.com">Deitel & Association</a>
        </p>
    </body>
</html>