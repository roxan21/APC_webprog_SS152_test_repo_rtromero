<!DOCTYPE html>
<html>
<title>Roxan Romero</title>
<body>
<style>
	body{
		font-family: Comic Sans MS;
		background-image: url("minimal.jpg");
    background-repeat: no-repeat;
   	background-attachment: fixed;
    background-position: center;
	}
	
	a:link {
		color: black;
		width: 100%;
		text-decoration: none;
	}
	div {
		text-align:center;
	}
	a:visited {
    color: black;
  }
	a:hover {
		color: brown;
	}
</style>

<div id="link" style = "margin-top:2em">
	<p>
	<p>
	<a href="<?php echo site_url('Home');?>">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo site_url('About');?>">ABOUT ME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo site_url('Pictures');?>">GALLERY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo site_url('users');?>">PHP</a>
	</p>
</div>

<div style="margin-top:4em">
<img src="img1.jpg" width="350" height="350"/>
<img src="img2.jpg" width="350" height="350"/>
<img src="img3.jpg" width="350" height="350"/>
<br>
<img src="img5.jpg" width="350" height="350"/>
<img src="img4.jpg" width="350" height="350"/>
<img src="img6.jpg" width="350" height="350"/>
<br>
<img src="img7.jpg" width="350" height="350"/>
<img src="img8.jpg" width="350" height="350"/>
<img src="img9.jpg" width="350" height="350"/>
<br>
<img src="img10.jpg" width="350" height="350"/>
<img src="img11.jpg" width="350" height="350"/>

</div>


</body>
</html>