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

         <p>Here is every user sorted by $sortby:</p>

         <table border="1">
            <th><a href="dispUsers.php?sortby=first_name">First Name</a></th>
            <th><a href="dispUsers.php?sortby=last_name">Last Name</a></th>
            <th><a href="dispUsers.php?sortby=email">Email</a></th>
END;

        while ( $row = $stmt->Fetch(PDO::FETCH_ASSOC)) {
            print "<tr><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['email']}</td><tr>";
        }
        print "</table>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CS315 // Nobbe // a5</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>All of the users, ever</h1>
        <?php dispUsers(); ?>
        <p><a href="addUser.php">Add a user</a></p>
    </body>
</html>
