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
    echo "connection!";
  }
  $query="insert into activity values('','".$_POST["act_name"]."','1','".$_POST["act_intro"]."','"."remark"."',".$_POST["act_num"].",0,'','')";
  if (!mysqli_query($cursor,$query))
  {
   echo mysqli_error($cursor);
   echo $query;
  }
  else
  {
  mysqli_close($cursor);
  $url="/success.html";
  echo "<script language='javascript' type='text/javascript'>";
  echo "window.location.href='$url'";
  echo "</script>";
    }
?>
</BODY>
</HTML>
