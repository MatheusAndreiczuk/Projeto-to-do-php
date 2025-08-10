<?php 

require_once('../conn.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id){
    $stmt = $pdo->prepare("DELETE FROM task WHERE id = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    if($stmt->execute()){
        header('Location: ../../index.php');
    } else {
        echo "Erro ao deletar a tarefa.";
    }
    exit;
} else {
    echo "ID inválido!";
    exit;
}