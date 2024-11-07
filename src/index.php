<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "user_data";

// Verbindung zur MySQL-Datenbank aufbauen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung prüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

echo "Verbunden mit der Datenbank<br>";

// Benutzerdaten abfragen
$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Daten ausgeben
    echo "<h3>Benutzerdaten:</h3>";
    echo "<table border='1'>
            <tr><th>ID</th><th>Username</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 Ergebnisse";
}

$conn->close();
?>
