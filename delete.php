<?php

include 'config.php';
$sql="delete from tasks where id=".$_POST["num"];
$con->query($sql);
?>