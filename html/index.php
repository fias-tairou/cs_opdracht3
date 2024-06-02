<?php
// Include the database connection file
include_once("config.php");

// Maak de 'visits' tabel indien deze niet bestaat
$sql = "CREATE TABLE IF NOT EXISTS visits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === FALSE) {
    die("Error creating table: " . $conn->error);
}

// Voeg een bezoek toe
$sql = "INSERT INTO visits (visit_time) VALUES (NOW())";
if ($conn->query($sql) === FALSE) {
    die("Error inserting visit: " . $conn->error);
}

// Haal het aantal bezoeken op
$sql = "SELECT COUNT(*) AS count FROM visits";
$result = $conn->query($sql);
if ($result === FALSE) {
    die("Error fetching visit count: " . $conn->error);
}
$row = $result->fetch_assoc();
$visitorNumber = $row['count'];

$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>REPLACE ME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="styles/reset.css" />
        <link rel="stylesheet" href="styles/core.css" />
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <section data-role="wrapper">
            <header data-role="page_header">
                <h1>REPLACE ME</h1>
                <nav>
                    <ul>
                        <li data-action="navigation" data-target="home">home</li>
                        <li data-action="navigation" data-target="birds">birds</li>
                        <span>You are visitor number <?php echo $visitorNumber; ?> </span>
                        <!-- <li data-action="navigation" data-target="sightings">sightings</li> -->
                        <!-- <li data-action="navigation" data-target="report">report</li> -->
                    </ul>
                </nav>
            </header>
            <section data-role="page_content">
                REPLACE ME
            </section>
        </section>
        <footer>
            <span>
                &copy; Amazon Web Services Ltd
            </span>
            <span data-role="rights">
                The bird descriptions were provided by www.allaboutbirds.org, &copy; Cornell Lab of Ornithology
            </span>
        </footer>
        <script src="scripts/jquery-3.6.0.min.js"></script>
        <script src="https://sdk.amazonaws.com/js/aws-sdk-2.1048.0.min.js"></script>
        <script src="scripts/config.js"></script>
        <script src="scripts/helper.js"></script>
        <script src="scripts/auth.js"></script>
        <script src="scripts/ajaxer.js"></script>
        <script src="scripts/history.js"></script>
        <script src="scripts/templates.js"></script>
        <script src="scripts/nav.js"></script>
        <script src="scripts/main.js"></script>
    </body>
</html>