<?php
 
 include 'connection.php';

 $result=$dbcon->query("select * from students");
 while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['batch']."</td>";
    echo "<td>".$row['course']."</td>";
    echo "<td>
    <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
    <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
    </td>";
 }










?>