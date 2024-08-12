<?php
try {
    // Define the path to the SQLite database file
    $dbPath = __DIR__ . '/../db/models.db';

    // Remove the existing database file if it exists
    if (file_exists($dbPath)) {
        unlink($dbPath);
    }

    // Create a new PDO instance
    $db = new PDO('sqlite:' . $dbPath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the table if it doesn't exist
    $db->exec("CREATE TABLE IF NOT EXISTS models (
        id TEXT PRIMARY KEY,
        description TEXT
    )");

    // Insert data into the table
    $db->exec("INSERT INTO models (id, description) VALUES ('cokeModel', 'This is a detailed model of a Coca Cola bottle.');
               INSERT INTO models (id, description) VALUES ('fantaModel', 'This is a placeholder for the Fanta model.');
               INSERT INTO models (id, description) VALUES ('spriteModel', 'This is a placeholder for the Sprite model.');");

    echo "Database and table created successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
