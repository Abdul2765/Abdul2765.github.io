<?php
//session_start();
include("connection.php");
echo "11";
if(isset($_GET['id'])){
$id=$_GET['id'];
	$sql="DELETE FROM blog where id='$id' ";
    echo $sql;
	$req=mysqli_query($conn,$sql);
	echo "33";
    if($req){ echo "1";
		echo "44";
        header("Location: blog.php?alert=delete");
	}
}
?>