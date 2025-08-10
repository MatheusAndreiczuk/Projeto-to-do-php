$(document).ready(function () {
    $('.edit-button').on('click', function () {
        let $task = $(this).closest('.task-item');
        $task.find('.checkbox-task').addClass('hidden');
        $task.find('.task-description').addClass('hidden');
        $task.find('.task-actions').addClass('hidden'); 
        $task.find('.edit-task-form').removeClass('hidden');
    });

    $('.checkbox-task').on('click', function () {
        if($(this).is(':checked')){
            $(this).addClass('done');
        } else {
            $(this).removeClass('done');
        }
    });

    $('.checkbox-task').on('change', function () {
        const id = $(this).data('task-id');
        const completed = $(this).is(':checked') ? 'true' : 'false';

        $.ajax({
            url: '../../database/actions/update_progress.php',
            method: 'POST',
            data: { id: id, completed: completed },
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    alert('Deu boa.');
                } else {
                    alert('Erro ao editar a tarefa.');
                }
            },
            error: function () {
                alert('Erro ao editar a tarefa v2.');
            }
        });
    });
});