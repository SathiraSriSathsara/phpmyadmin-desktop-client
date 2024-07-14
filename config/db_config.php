<?php
try {
    $con = new PDO('sqlite:db/database.db');
    // Set errormode to exceptions
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create localhost table if it does not exist
    $con->exec("CREATE TABLE IF NOT EXISTS localhost (
        id INTEGER PRIMARY KEY,
        url TEXT NOT NULL)");

    $result = $con->query("SELECT COUNT(*) FROM localhost");
    if ($result->fetchColumn() == 0) {
        $con->exec("INSERT INTO localhost (url) VALUES ('http://localhost/phpmyadmin')");
    }

    // Create sessions table if it does not exist
    $con->exec("CREATE TABLE IF NOT EXISTS remoteSessions (
        id INTEGER PRIMARY KEY,
        name TEXT NOT NULL,
        url TEXT NOT NULL
        )");

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
