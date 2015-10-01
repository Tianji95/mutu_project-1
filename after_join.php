<?php session_start();?>
<HTML>
<BODY>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="mutu";
$cursor=mysqli_connect($servername,$username,$password,$dbname);
if (!$cursor)
{
    $cursor=mysqli_connect($servername,$username,$password,$dbname);
    echo "connecting";
}
/*name of database:act_time_table(time_id,act_id,time,num_of_confirmation)
 *the script is for statistic users' available time
 * */
foreach ($_POST as $TIMEID)
{
    if ($TIMEID!="提交")
    {      
	/*
	 *user id needs to be stored in $_SESSION["uid"]
	 *activity id stored in $_SESSION["act_id"]
	 * */	
	    if (!mysqli_query($cursor,'select * from user_in_act where uid=$_SESSION["uid"] and act_id=$SESSION["act_id"]'))
	    {
		mysqli_query($cursor,"UPDATE act_time_table set num_of_confirmation=num_of_confirmation+1 where time_id=$TIMEID");      	
		mysqli_query($cursor,"insert into user_in_act values('".$_SESSION["uid"]."','".$_SESSION["act_id"]."','".$TIMEID."')");
	    }else
	    {
		echo "sth wrong<br>";
	    }
	}
    }
    
mysqli_close($cursor);
$url="/success.html";
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?>
<head>
</head>
</BODY>
</HTML>
