<?php

include 'connection.php';

$id=$_GET['id'];

$sql="delete  from students where id=$id";

if($dbcon->query($sql)){
   echo "<script>
        alert('Student deleted successfully');
        window.location.href = 'index.php';
      </script>";

}
else{
   echo "Can't Delete";
}










?>