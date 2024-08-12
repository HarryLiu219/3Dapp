<?php
function getDatabaseConnection() {
    try {
        // Define the path to the SQLite database file
        $dbPath = __DIR__ . '/../db/models.db';

        // Create a new PDO instance
        $db = new PDO('sqlite:' . $dbPath);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Print a success message
        //echo "Database connection successful.";
        
        return $db;
    } catch (PDOException $e) {
        echo "Database connection error: " . $e->getMessage();
        exit;
    }
}
?>
