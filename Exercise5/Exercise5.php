<!DOCTYPE html>
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
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='Exer5.php';
  </script>
  <?php
 }
 else if
 {
  ?>
  <script type="text/javascript">
  alert('error occured while adding data');
  </script>
  <?php
 }
}
?>
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
	<a href="Home.htm">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="About Me.htm">ABOUT ME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="Gallery.htm">GALLERY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="Exer5.php">PHP</a>
	</p>
</div>

<div style = "margin-top:5em;text-align: center;">
  <h1><b>Fill up this fields.</b><br></h1>
</div>

<?php
// define variables and set to empty values
$nicknameErr = $nameErr = $emailErr = $genderErr = $user_cityErr = $cp_numErr = "";
$nickname = $name = $email = $gender = $comments = $user_city = $cp_num = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$name)) {
      $nameErr = "Only letters, numbers, and white space allowed"; 
    }
  }

  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
   
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["user_city"])) {
    $user_city = "";
  } else {
    $user_city = test_input($_POST["user_city"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
   if (empty($_POST["cp_num"])) {
    $cp_numErr = "Cell Phone is required";
  } else {
    $cp_num = test_input($_POST["cp_num"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9 ]*$/",$cp_num)) {
      $cp_numErr = "Only letters and white space allowed"; 
    }
  } 
  
    if (empty($_POST["comments"])) {
    $comments = "";
  } else {
    $comments = test_input($_POST["comments"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Exercise4 in PHP (Form Validation) </h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Address: <input type="text" name="user_city" value="<?php echo $user_city;?>">
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Cell Phone: <input type="text" name="cp_num" value="<?php echo $cp_num;?>">
  <span class="error">* <?php echo $cp_numErr;?></span>
  <br><br>
  Comment: <textarea name="comments" rows="5" cols="40"><?php echo $comments;?></textarea>
  <br><br>
  <input type="submit" name="btn-save" value="Submit">  
</form>

<center>

</body>
</html>