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
	<a href="Home.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="About Me.php">ABOUT ME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="Gallery.php">GALLERY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="Exer5.php">PHP</a>
	</p>
</div>

<div style = "margin-top:5em;text-align: center;">
  <h1><b>Fill up this fields.</b><br></h1>
</div>

<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 $con=mysqli_query($con,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='Exer5.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>



<div id="body">
 <div id="content">
	<table style="width:70%; margin-top:5em;margin-bottom:3em" align="center";>
    <tr>
    <th colspan="10"><a href="Exercise5.php">Add Data Here.</a></th>
    </tr>
    <th>Name</th>
    <th>Nickname</th>
    <th>Email</th>
	<th>Address</th>
	<th>Gender</th>
	<th>CP number</th>
	<th>Comments</th>
    <th colspan="5">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($con,$sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>