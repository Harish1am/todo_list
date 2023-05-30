<?php

include 'config.php';
$sql="update tasks set task='{$_POST["task"]}' where id=".$_POST["id"];
$con->query($sql);
?>