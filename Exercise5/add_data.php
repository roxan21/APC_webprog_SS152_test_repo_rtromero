<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $nickname = $_POST['nickname'];
 $user_city = $_POST['user_city'];
 $gender = $_POST['gender'];
 $cp_num = $_POST['cp_num'];
 $comments = $_POST['comments'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(name,email,nickname,user_city,gender,cp_num,comments) VALUES('$name','$email','$nickname','$user_city','$gender','$cp_num','$comments')";
 $con=mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
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
<center>

<div id="header">
<div style = "margin-top:5em;text-align: center;">
  <h1><b>Fill up this fields.</b><br></h1>
</div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="Exer5.php">"back to main page"<-</a></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="Name" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="user_city" placeholder="Address" /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cp_num" placeholder="CP number" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="comments" placeholder="comments" /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>