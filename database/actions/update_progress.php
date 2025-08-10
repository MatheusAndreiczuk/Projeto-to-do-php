<?php 

require_once('../conn.php');

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$completed = filter_input(INPUT_POST, 'completed');

if($id && $completed){
    $stmt = $pdo->prepare("UPDATE task SET completed = :completed WHERE id = :id");
    $stmt->bindValue(':completed', $completed);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    echo json_encode(['sucess' => 'true']);
    exit;
} else {
    echo json_encode(['sucess' => 'false']);
    exit;
}