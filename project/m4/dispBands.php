<?php
    function dispBands() {

        $conn = new PDO("mysql:host=mysql.truman.edu;dbname=jen1141CS315", "jen1141", "aeveuthu");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT bandName, homeTown, website, description, contact, email, professionalism, quality, energy FROM band");

        $stmt->execute();

        while ( $row = $stmt->Fetch(PDO::FETCH_ASSOC)) {
            print "
                <div class='row'><h3>{$row['bandName']}</h3>
                  <div class='rowDetails'>
                    <ul>
                        <li><label>Hometown </label> {$row['homeTown']}</li>
                        <li><label>Website/FB </label> {$row['website']}</li>
                        <li><label>Description </label> {$row['description']}</li>
                        <li><label>Contact Person </label> {$row['contact']}</li>
                        <li><label>Email </label> {$row['email']}</li>
                        <li><label>Professionalism </label> {$row['professionalism']}/5</li>
                        <li><label>Music Quality </label> {$row['quality']}/5</li>
                        <li><label>Energy </label> {$row['energy']}/5</li>
                    </ul>
                    <button class='edit'>Edit Band</button>
                    <button class='delete'>Delete Band</button>
                  </div>
                </div>";
        }
    }

    function deleteRow() {
        $genre1 = $_POST['genre1'];

        try {
            $conn = new PDO("mysql:host=mysql.truman.edu;dbname=jen1141CS315", "jen1141", "aeveuthu");

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
            $stmt = $conn->prepare("UPDATE band SET bandName = :bandName, homeTown, website, description, contact, email, professionalism, quality, energy)
            VALUES (:bandName, :homeTown, :website, :description, :contact, :email, :professionalism, :quality, :energy)");
            $stmt->bindParam(':bandName', $bandName);
            $stmt->bindParam(':homeTown', $homeTown);
            $stmt->bindParam(':website', $website);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':contact', $contactPerson);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':professionalism', $professionalism);
            $stmt->bindParam(':quality', $quality);
            $stmt->bindParam(':energy', $energy);

            $stmt->execute();
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // end the DB connection.
        $conn = null;
    }
?>

<!DOCTYPE html>
<head>

  <title>aqua-archive // bands</title>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/dispRows.js" type="text/javascript"></script>
  <script src="js/search.js" type="text/javascript"></script>
  <link type="text/css" rel="stylesheet" href="css/aqua.css" />
  <meta charset="UTF-8">

</head>

<body>
    <?php include('includes/header.php'); ?>
    <div id="content">
        <h2>Bands</h2>
        <div class="dispContainer">
            <input type="text" id="search" value="" placeholder="filter bands"/>
            <?php dispBands(); ?>
        </div>
    </div>
</body>

</html>
