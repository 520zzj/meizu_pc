<?php
require("../init.php");
$sql="SELECT * FROM index_part";
$result=mysqli_query($conn,$sql);
echo json_encode(mysqli_fetch_all($result,1));
?>