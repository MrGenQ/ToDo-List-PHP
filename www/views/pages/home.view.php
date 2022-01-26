<?php require 'views/_partials/head.view.php';?>

<div class="container">
    <div style="display: flex; justify-content: center; padding: 5%; gap: 10px;">
    <h3>My ToDo list</h3>
<button type="submit" class="btn btn-primary" onclick="window.location='/add-task';">New Task</button>
    </div>
    <div style="display: flex; flex-wrap: wrap; flex-direction: row; justify-content: center">
        <?php foreach ($tasks -> allTasks() as $task):?>
        <div class="card d-flex" style="width: 18rem; background-color: #add8e6; padding: 5% 0% 5% 1%; border: solid darkblue;">
            <h2 class="card-title"><?="Subject: " .$task['subject'];?></h2>
            <div class="card-body"><ul>
                <li><?="DueDate: " .$task['dueDate'];?></li>
                <li><?="Date Modified: " .$task['modified'];?></li>

                <?php if($task['status'] === '0'):?>
                    <li><?="Status: Incomplete";?></li>
                <?php else:?>
                    <li><?="Status: Complete";?></li>
                <?php endif;?>

                <a href="/delete-task/id/<?=$task['id'];?>" onclick="return confirm('Are you sure you want to romove it?')">Remove</a>
                <?php if($task['status'] === '0'):?>
                    <a href="/set-complete/id/<?=$task['id'];?>" onclick="return confirm('Are you sure task is complete?')">Incomplete</a>
                    <?php else:?>

                    <del><?='Completed';?></del>
                <?php endif;?>
                </ul></div>

        </div>
        <?php endforeach;?>
    </div>


</div>
<?php require 'views/_partials/htmlEnd.php';?>
