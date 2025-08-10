<?php

require_once '../conn.php';

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

if ($id && $description) {
    $stmt = $pdo->prepare("UPDATE task SET description = :description WHERE id = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);

    if ($stmt->execute()) {
        header('Location: ../../index.php');
    } else {
        echo "Erro ao atualizar a tarefa.";
    }
    exit;
} else {
    echo "ID inválido ou descrição vazia.";
    exit;
}