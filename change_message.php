
<html>
<body>

<?php
	//insert a book
	$picture = trim($_POST['picture']);
	$name = trim($_POST['name']);
	$description = trim($_POST['description']);
	$old_password = trim($_POST['old_password']);
	$new_password = trim($_POST['new_password']);
	$new_password2 = trim($_POST['new_password2']);
	$message = trim($_POST['message']);
	
	if(!get_magic_quotes_gpc()){
		$name = addslashes($name);	
		$description = addslashes($description);
		$old_password = addslashes($old_password);
		$new_password = addslashes($new_password);
		$new_password2 = addslashes($new_password2);
		$message = addslashes($message);
	}
	@ $db = new mysqli('localhost', 'root','123','project');
	if(mysqli_connect_errno()){
		echo'Error: we could not connect to the database, please try again later.';
		exit;
	}
	
	$query1 = "select * from books where isbn = '" .$isbn."'";
	$result1 = mysqli_query($db,$query1);
	$num_results1 = mysqli_num_rows($result1);
	$row1 = mysqli_fetch_assoc($result1);
	if($num_results1>=1){
		if(htmlspecialchars(stripslashes($row1['bookname']))!=$bookname
		||htmlspecialchars(stripslashes($row1['booktype']))!=$booktype
		||htmlspecialchars(stripslashes($row1['publish_house'])!=$publish_house)
		||htmlspecialchars(stripslashes($row1['author'])!=$author)
		||htmlspecialchars(stripslashes($row1['price'])!=$price)){
			echo 'Maybe you enter the wrong book detail, please check the book massage and enter again';
			exit;
		}
		$query2 = "update books set number_now = number_now + ".$num."  where isbn = '".$isbn."'";
		$result2 = mysqli_query($db,$query2);
		$query3 = "update books set number_total = number_total + ".$num."  where isbn = '".$isbn."'";
		$result3 = mysqli_query($db,$query3);
		echo "update successfully";
	}
	else{
		$query = "insert into books values( '".$isbn."','".$booktype."','".$bookname."','".$publish_house."',".$publish_year.",'".$author."',".$price.",".$num.",".$num.")";
		$result = mysqli_query($db,$query);
		echo 'Insert successfully';
	}
	mysqli_free_result($result1);
    mysqli_close($db);
?>

</body>
</html>
