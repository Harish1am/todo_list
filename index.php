
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="design.css">
   <script src="jquery-3.6.4.min.js"></script>


   
</head>
<body background="river.jpg">
    
    <div id="input">
        <h2>Make your june 14 9.30  bucket list!</h2>
    <form id="frm" >
    
    <input type="text" id="task"  name="task" placeholder="enter some check_list" class="task_input">
    <input   type="button" id="save" class="task_btn" name="submit" value="add" >
    <input type="hidden" id="id" name="id" value="0">
    
    </form>
    </div>
    
     <div id="datas">

    </div>
   
 
     
    <script>
    $(document).ready(function(){
                $("#datas").load("view.php");
                $("#save").click(function(){
                    var id=$("#id").val();
                    if(id==0){
                        
                        $.ajax({
                            url:"insert.php",
                            type:"post",
                            data:$("#frm").serialize(),
                            success:function(d){
                                $("<tr></tr>").html(d).appendTo("tbody");
                                $("#frm")[0].reset()
                                $("#id").val(0);
                            }
                        })
                    } else{
                        $.ajax({
                            url:"update.php",
                            type:"post",
                            data:$("#frm").serialize(),
                            success:function(d){
                                $("#datas").load("view.php");
                                $("#frm")[0].reset()
                                $("#id").val(0);
                            }
                        })   
                    }
                })
    })

    
    
    $(document).on("click",".delete",function(){
        var del=$(this);
        var id=$(this).attr("data-id");
        $.ajax({
                url:"delete.php",
                type:"post",
                data:{num:id},
                success:function(){
                    del.closest("tr").hide();
                }
                })
    })

    $(document).on("click",".edit",function(){
        var row=$(this);
        var id=$(this).attr("data-id");
        $("#id").val(id);
        
        var task=row.closest("tr").find("td:eq(1)").text();
        $("#task").val(task);
    
        
    })
    
    
    </script>
</body>
</html>
