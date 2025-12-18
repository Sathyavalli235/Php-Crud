<?php

include 'connection.php';

$id=$_POST['id'];
$name=$_POST['name'];
$batch=$_POST['batch'];
$course=$_POST['course'];

$sql="update students set name='$name',batch='$batch',course='$course' where id=$id";


if($dbcon->query($sql)){
    echo "<script>
        alert('Student updated successfully');
        window.location.href = 'index.php';
      </script>";

}
else{
    echo "Can't Update";
}















?>