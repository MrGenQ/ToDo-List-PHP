<?php require 'views/_partials/head.view.php';?>
<?php

use ToDo\Validation;
?>

<div class="container">
<?php if(isset($_POST['save'])):?>
    <?php Validation::validate($_POST);?>
<?php endif;?>
<?php if(Validation::$validationErrors || empty($_POST)):?>
    <div class="card">
        <form method="post">
        <div class="form-group">
        <input class="form-control" placeholder="Subject" id="subject" name = "subject">
        </div>
        <div class="form-group">
        <select  class="form-control" id="priority" name = "priority">
            <option selected disabled>Priority</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        </div>
        <div class="form-group">
            <label>DueDate</label>
        <input type="date" class="form-control" id="dueDate" name = "dueDate">
        </div>
        <div class="form-group">
        </div>

        <button type="submit" class="btn btn-primary" name ="save">SUBMIT</button>
        </form>
    </div>
<?php endif;?>
</div>
<?php require 'views/_partials/htmlEnd.php';?>