<?php
    function print_form() {
        echo <<<END
            <h2 class="col-sm-offset-1"> Get On Our List!</h2>
            <form class="form" id="newUser" method="post" action="$_SERVER[PHP_SELF]" >
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name" required /><br/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required /><br/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" placeholder="Email" required /><br/>
                    </div>
                </div>
                <input type="hidden" name="go" value="process">
                <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
END;
    }
    function process_form() {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        try {
            $conn = new PDO("mysql:host=mysql.truman.edu;dbname=jen1141CS315", "jen1141", "aeveuthu");

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO a5_users (first_name, last_name, email)
            VALUES (:first_name, :last_name, :email)");
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':email', $email);

            $stmt->execute();
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // end the DB connection.
        $conn = null;

        echo "<p>Success!!!</p>";
        echo "<p>To see all names and emails, go <a href='dispUsers.php'>here</a></p>";

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CS315 // Nobbe // a3</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <?php
                    if (isset($_POST['go']) && ('process' == $_POST['go'])) {
                        process_form();
                    }
                    else {
                        print_form();
                    }
                ?>
            </div>
            <div class="col-sm-10 col-sm-offset-5">
                <br>
                <p><a href="dispUsers.php">View <em>The List</em> >></a></p>
            </div>

        </div>
    </body>
</html>
