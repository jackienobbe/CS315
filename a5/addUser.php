<!DOCTYPE html>
<html>
    <head>
        <title>CS315 // Nobbe // a3</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <div id="container">
        <?php
            function print_form() {
                echo <<<END
                    <form id="newUser" method="post" action="$_SERVER[PHP_SELF]" >
                        <label>First Name:</label><input type="text" name="first_name" required /> <br/>
                        <label>Last Name:</label><input type="text" name="last_name" required /> <br/>
                        <label>Email:</label><input type="email" email="email" required /> </br>

                        <input type="hidden" name="go" value="process">
                        <input type="submit" />
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

            if (isset($_POST['go']) && ('process' == $_POST['go'])) {
                process_form();
            }
            else {
                print_form();
            }
        ?>
        </div>
    </body>
</html>
