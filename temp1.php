 <script>  
    function setImagePreview()   
    {  
            var docObj=document.getElementById("file");   
            var imgObjPreview=document.getElementById("preview");  
            if(docObj.files &&    docObj.files[0])  
            {  
                //火狐下，直接设img属性  
                imgObjPreview.style.display = 'block';  
                imgObjPreview.style.width = '500px';  
                imgObjPreview.style.height = '500px';                      
               //imgObjPreview.src = docObj.files[0].getAsDataURL();  
               //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式    
                imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);  
            }  
	}
</script>  
<?php  
	session_start();  
	$_SESSION["userid"]="mutu";  
	if (1)//这个地方可以填写上传文件的限制，比如格式大小要求等，为了方便测试，这里没有写上传限制。  
	{  
		if ($_FILES["file"]["error"] > 0)  
		{  
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";//获取文件返回错误  
		}  
		else  
		{  
			//打印文件信息  
			echo "Upload: " . $_FILES["file"]["name"] . "<br />";//获取文件名  
			echo "Type: " . $_FILES["file"]["type"] . "<br />";//获取文件类型  
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";//获取文件大小  
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";//获取文件临时地址  
			
			//自定义文件名称  
			$array=$_FILES["file"]["type"];  
			$array=explode("/",$array);  
			$newfilename="new_nadame";//自定义文件名（测试的时候中文名会操作失败）  
			$_FILES["file"]["name"]=$newfilename.".".$array[1];  
			  
			if (!is_dir("/".$_SESSION["userid"]))//当路径不穿在  
			{  
				mkdir("/".$_SESSION["userid"]);//创建路径  
			}  
			$url="/".$_SESSION["userid"]."/";//记录路径  
			if (file_exists($url.$_FILES["file"]["name"]))//当文件存在  
			{  
				echo $_FILES["file"]["name"] . " already exists. ";  
			}  
			else//当文件不存在  
			{  
				$url=$url.$_FILES["file"]["name"];  
				move_uploaded_file($_FILES["file"]["tmp_name"],$url);  
				echo "Stored in: " . $url;  
			}  
		}  
		echo"<input type=\"file\" name=\"file\" id=\"file\" onchange=\"javascript:setImagePreview();\"> ";
	 }  
	else  
	{  
		echo "Invalid file";  
	}  
?>  
  
<html>  
<body>  
	<br><br>  
<div id="localImag"><img id="preview"src = "images/bannerbg.png" width=40 height=40 style="diplay:none" /></div>  
</body>  
</html>  