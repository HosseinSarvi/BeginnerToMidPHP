<?php
session_start();

//------functions------
function Add_task(){
    $_SESSION["addtask"] = $_POST["addtask"];
    array_push($_SESSION["tasks"],$_SESSION["addtask"]);
}
function Delete_task(){
    $_SESSION["deltask"] = $_POST["deltask"];
    unset($_SESSION["tasks"][$_SESSION["deltask"]-1]);
    $_SESSION["tasks"] = array_values($_SESSION["tasks"]);
}

//------check session------
if(!isset($_SESSION["tasks"])){
    $_SESSION["tasks"] = array();
}

//------Add Task------
if(isset($_POST["addsubmit"])){
    Add_task();
}

//------Delete Task------
if(isset($_POST["delsubmit"])){
    Delete_task();
}

?>

<form method="POST" action="">
    <label>Add Task</label>
    <input type="text" name="addtask" placeholder="Add Task">
    <button type="submit" name="addsubmit">Add</button>
</form>

<form method="POST" action="">
    <label>Delete Task</label>
    <input type="text" name="deltask" placeholder="Delete Task">
    <button type="submit" name="delsubmit">Delete</button>
</form>

<table>
    <?php foreach($_SESSION["tasks"] as $index => $task){ ?>
    <tr>
        <td><?=$index+1?>.</td>
        <td><?=$task;?></td>
    </tr>    
    <?php } ?>
</table>