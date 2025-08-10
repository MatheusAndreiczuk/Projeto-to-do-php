<?php
    require_once 'database/conn.php';

    $tasks = [];
    $sql = $pdo->query("SELECT * FROM task ORDER BY id ASC");

    if($sql->rowCount() > 0){
        $tasks = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"></noscript>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <link rel="stylesheet" href="src/styles/styles.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div id="container">
            <section>
                <h1>To-Do List</h1>
                <div class="form-container">
                    <form class="create-task-form" action="database/actions/create.php" method="POST">
                        <input type="text" id="taskInput" placeholder="Digite sua tarefa aqui..." name="description"
                            required>
                        <button class="addTaskButton"><i class="fas fa-plus"></i></button>
                    </form>
                </div>
            </section>

            <section>
                <div class="task-list" id="taskList">
                    <?php foreach($tasks as $task): ?>
                        <div class="task-item">
                            <input 
                                type="checkbox" 
                                name="taskCheckbox" 
                                class="checkbox-task <?= $task['completed'] ? 'done' : '' ?>"
                                data-task-id="<?= $task['id'] ?>"
                                <?= $task['completed'] ? 'checked' : '' ?>
                            >
                            <p class="task-description">
                                <?= $task['description'] ?>
                            </p>
                            <div class="task-actions">
                                <a class="delete-button" 
                                    href="database/actions/delete.php?id=<?= $task['id']?>">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                                <a class="edit-button"><i class="fa-regular fa-edit"></i></a>
                            </div>

                            <form action="database/actions/update.php" method="POST" class="edit-task-form hidden">
                                <input type="text" class="hidden" name="id" value="<?= $task['id'] ?>">
                                <input 
                                    type="text" 
                                    placeholder="Editar tarefa..." 
                                    name="description" 
                                    value="<?= $task['description'] ?>"
                                >
                                <button type="submit" class="form-edit-button"><i class="fa-solid fa-check"></i></button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>
    <script src="/src/javascript/script.js" defer></script>
</body>

</html>