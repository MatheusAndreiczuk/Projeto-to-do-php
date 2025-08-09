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
});