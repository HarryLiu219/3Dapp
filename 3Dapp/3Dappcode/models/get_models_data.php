<?php
header('Content-Type: application/json');
require_once 'db_connect.php';

try {
    $db = getDatabaseConnection();
    // Commenting out debug output
    // echo json_encode(['status' => 'Database connection successful']); // Debugging line

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Commenting out debug output
        // echo json_encode(['status' => 'ID provided', 'id' => $id]); // Debugging line

        $stmt = $db->prepare('SELECT description FROM models WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $model = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($model) {
            // Commenting out debug output
            // echo json_encode(['status' => 'Model found', 'model' => $model]); // Debugging line
            echo json_encode($model);
        } else {
            echo json_encode(['description' => 'Model not found.']);
        }
    } else {
        echo json_encode(['description' => 'No model ID provided.']);
    }
} catch (PDOException $e) {
    echo json_encode(['description' => 'Database error: ' . $e->getMessage()]);
}
?>
