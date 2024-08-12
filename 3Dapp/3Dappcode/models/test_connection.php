<?php
require_once 'db_connect.php';

try {
    $db = getDatabaseConnection();
    $stmt = $db->query('SELECT * FROM models');
    $models = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($models);
    echo '</pre>';
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
