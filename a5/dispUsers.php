<?php
    function dispUsers() {
        $sortby = $_GET['sortby'];

        if ($sortby == "") {
            $sortby = "last_name";
        }

        // hardwired safety check for the sortby parameter to avoid SQL injection.
        if (($sortby != "first_name") && ($sortby != "last_name") && ($sortby != "email"))
        { exit; }

        $conn = new PDO("mysql:host=mysql.truman.edu;dbname=jen1141CS315", "jen1141", "aeveuthu");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT first_name, last_name, email FROM a5_users ORDER BY $sortby");

        $stmt->execute();

        echo <<<END

         <table class="table table-striped">
            <thead>
                <tr>
                    <th><a href="dispUsers.php?sortby=first_name">First Name</a></th>
                    <th><a href="dispUsers.php?sortby=last_name">Last Name</a></th>
                    <th><a href="dispUsers.php?sortby=email">Email</a></th>
                </tr>
            </thead>
            <tbody>
END;

        while ( $row = $stmt->Fetch(PDO::FETCH_ASSOC)) {
            $first_name = htmlspecialchars($row['first_name']);
            $last_name = htmlspecialchars($row['last_name']);
            $email = htmlspecialchars($row['email']);
            print "<tr><td>$first_name</td><td>$last_name</td><td>$email</td></tr>";
        }
        print "</tbody>\n</table>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CS315 // Nobbe // a5</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1><em>The List</em></h1>
            <?php dispUsers(); ?>
            <p><a href="addUser.php">Add a user >></a></p>
        </div>
    </body>
</html>
