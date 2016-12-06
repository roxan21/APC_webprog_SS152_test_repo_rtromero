<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
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

 // sql query for update data into database
 $sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',nickname='$nickname',user_city='$user_city',gender='$gender',cp_num='$cp_num',comments='$comments' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='Home.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="user_city" placeholder="Address" value="<?php echo $fetched_row['user_city']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" value="<?php echo $fetched_row['gender']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="cp_num" placeholder="CP Number" value="<?php echo $fetched_row['cp_num']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="comments" placeholder="Comments" value="<?php echo $fetched_row['comments']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>