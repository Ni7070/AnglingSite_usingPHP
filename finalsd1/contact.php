<!doctype html>
<?php 
$host='localhost';
$dbuser='root';
$dbpass='';
$db='contactpage';
$con=  mysqli_connect($host,$dbuser,$dbpass,$db);


if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$fname=stripcslashes($fname);
	$fname=mysqli_real_escape_string($con,$fname);
	
	$email=$_POST['email'];
	$email=stripcslashes($email);
	$email=mysqli_real_escape_string($con,$email);
	
	$message=$_POST['message'];
	$message=stripcslashes($message);
	$message=mysqli_real_escape_string($con,$message);
	
	$sql="insert into contact (name,email,message) values('$fname','$email','$message')";
	if (mysqli_query($con,$sql))
	{
		?>
		<script>alert("Thank You For your Comment");
		window.location.href="hiAngl.php";
</script>
		<?php		
	}
	else{
	echo 'not inserted';
	echo $sql;
	die;	
		
	}
	
}

?>
<html lang="en">
<head>
<title>Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Homepage</title>
</head>
<style>
body {
  font-family: "Lato", sans-serif;
}
h3{
	font-color: white;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  
  padding: 40px;
  margin-bottom:50px;
  margin-top:50px;
}
.button{
color: White;
background-color:#4CAF50;
 padding: 15px 32px;
  padding: 15px 32px;
}

* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 30px;
  
  
}

.left {
  width: 25%;
}

.right {
  width: 75%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<body>
<?php include 'navbar.php';?>

<div class="container">
<div class="row">

  <div class="column left" style="background-color:#aaa;">
    <h1>Contact Information</h1>
        <div><i class="fa fa-phone" style="font-size:15px"></i>
           <span>IP phone:  </span>+88 09612444888 <br></br>
           <i class="material-icons"style="font-size:16px">mail_outline</i>
           <span>Email:  </span>hiangler@yahoo.com<br></br><br></br>
  </div>
   </div>
   
  <div class="column right" style="background-color:#bbb;">
  <form action="" method="POST">
  <h1>Contact Here:</h1>
  <br>
  <br>
    <label for="fname"><h4>Name :</h4></label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." class="form-control" required>
	<label for="email"<h4>Email :</h4></label>
    <input type="text" id="email" name="email" placeholder="Your email.." class="form-control" required>
   
    <label for="message"><h4>Message :</h4></label>
    <textarea id="message" name="message" placeholder="Write here.." style="height:200px"></textarea>

	<input type="submit" class="btn btn-success" value ="submit" name="submit" onclick="" >
  </form>
  </div>
  
</div>


 </div>
<?php include 'footer.php';?>
</body>
</html>