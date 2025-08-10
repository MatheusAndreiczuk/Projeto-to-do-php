<?php

require_once('../conn.php');

$description = filter_input(INPUT_POST, 'description');

if($description) {
    $stmt = $pdo->prepare("INSERT INTO task (description) VALUES (:description)");
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);

    if($stmt->execute()) {
        header('Location: ../../index.php');
    } else {
        echo "Erro ao criar a tarefa.";
    }
    exit;
} else {
    echo "Descrição da tarefa não pode ser vazia.";
    exit;
}