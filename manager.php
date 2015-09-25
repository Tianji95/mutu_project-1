
<html>
<body>

<?php
	//insert a book
	$managerid = trim($_POST['managerid']);
	$password = trim($_POST['password']);

	if(!$password||!$managerid){
		echo'you have not entered account number details. Please go back and try again.';
		exit;
	}
	if(!get_magic_quotes_gpc()){
		$managerid = addslashes($managerid);	
		$password = addslashes($password);
	}
	@ $db = new mysqli('localhost', 'root','123','project');
	if(mysqli_connect_errno()){
		echo'Error: we could not connect to the database, please try again later.';
		exit;
	}
	$query1 = "select * from manager where ID = '" .$managerid."'";
	$result1 = mysqli_query($db,$query1);
	$num_results1 = mysqli_num_rows($result1);
	if($num_results1>=1){
		$query2 = "select * from manager where ID = '".$managerid."' and pass_word = '".$password."'";
		$result2 = mysqli_query($db,$query2);
		$num_results2 = mysqli_num_rows($result2);
		if($num_results2!=0){
			Header("Location: homepage.html?managerid=$managerid");
			exit;		
		}
		else{
			echo "Wrong Password!!!!!!!!!";
			exit;
		}	
	}
	else{
		echo "We don't have this manager, please check in again!!!";
		exit;
	}
	mysqli_free_result($result1);
    mysqli_close($db);
?>

</body>
</html>
