<?php

include 'config.php';
$task=$_POST["task"];
$sql="insert into tasks (task) values ('{$task}')";
$con->query($sql);
$id=$con->insert_id;

echo"<td>{$id}</td>";
echo"<td> {$task}</td>";
echo"<td ><button type='button' class='edit' data-id='{$id}'><a>edit</a></td>";
echo"<td><button type='button' class='delete' data-id='{$id}'><a>delete</a></td>"
  


?>
