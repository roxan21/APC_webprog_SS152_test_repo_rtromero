<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $nickname = $_POST['nickname'];
 $user_city = $_POST['user_city'];
 $gender = $_POST['gender'];
 $cp_num = $_POST['cp_num'];
 $comments = $_POST['comments'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(first_name,last_name,nickname,user_city,gender,cp_num,comments) VALUES('$first_name','$last_name','$nickname','$user_city','$gender','$cp_num','$comments')";
 $con=mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="Home.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="user_city" placeholder="Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cp_num" placeholder="CP number" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="comments" placeholder="comments" required /></td>
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