<?php 
include "config.php";
?>
<table >
        <thead>
            <tr>
                <th>N</th>
                <th>Tasks</th>
                <th>Edit</th>
                <th>delete</th> 
            </tr>
        </thead>
        
       <tbody>
         <?php
        $sql="select * from tasks";
        $res=$con->query($sql);
        
        if($res->num_rows > 0){
            
            while($row=$res->fetch_assoc()){
            
                echo" <tr> "; 
                echo"<td>{$row["id"]}</td>";
                echo"<td> {$row["task"]}</td>";
                echo"<td > <button type='button' class='edit' data-id='{$row['id']}' value='edit'><a>edit</a></td>";
                echo"<td > <button type='button' class='delete' data-id='{$row['id']}' value='del'><a>delete</a></td>";
                echo" </tr> ";

            }
        }
        ?>
       </tbody>
    </table>
   