<?php
include 'conn.php';

  $que_id = $_GET['id'];
$sql= "DELETE FROM contact_query where query_id={$que_id}";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
$URL = "http://localhost/Blood-Bank-And-Donation-Management-System-master/admin/query.php";
header("Location: " . $URL);

 ?>
