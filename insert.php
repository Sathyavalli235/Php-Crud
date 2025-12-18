<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $batch=$_POST['batch'];
    $course=$_POST['course'];

    $sql="insert into students (name,batch,course)values('$name','$batch','$course')";
    

    if($dbcon->query($sql)){
        echo "<script> alert('Student added successfully'); 
        window.location.href = 'index.php';
        </script>";
    }
    else{
        echo "Can't Insert Data";
    }
  
}


















?>