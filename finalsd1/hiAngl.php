<!doctype html>
<?php 
$host='localhost';
$dbuser='root';
$dbpass='';
$db='sd';
$con=  mysqli_connect($host,$dbuser,$dbpass,$db);


if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$fname=stripcslashes($fname);
	$fname=mysqli_real_escape_string($con,$fname);
	
	$comment=$_POST['comment'];
	$comment=stripcslashes($comment);
	$comment=mysqli_real_escape_string($con,$comment);
	
	$sql="insert into comment (name,comment) values('$fname','$comment')";
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Homepage</title>
</head>
<style>


.logo img{
width: 100%;
align: center;
height: 180px;
padding-top: 20px;
margin-bottom:20px;
}
.img1,.img2,.img3{
width : 100%;
height : 100px;

}
body {
  font-family: "Lato", sans-serif;
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
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.button{
color: White;
background-color:#4CAF50;
}
</style>
<body>

<?php include 'navbar.php';?>
<div class="container">
    <div class="logo">
    <img src="image/logo.png" class="img-fluid" >
    </div>
</div>

<?php include 'carosel.php';?>
<div class="container">
  <form action="" method="POST">
  <h3>Leave a Comment here..</h3>
    <label for="fname">Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." class="form-control" required>

   
    <label for="comment">Comment</label>
    <textarea id="subject" name="comment" placeholder="Write something.." style="height:200px"></textarea>

    
	<input type="submit" class="btn btn-success" value ="submit" name="submit" onclick="" >


	
  </form>



</div>
 
<?php include 'footer.php';?>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>