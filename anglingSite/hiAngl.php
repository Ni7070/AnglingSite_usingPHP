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
		window.location.href="";
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

.footer{
height:20px;
font-color:white;
}
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

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
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

<ul class="topnav">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Reviews</a></li>
  <li><a href="register.php">Sign Up</a></li>
  <li><a href="login.php">Log In</a></li>
  <li><a href="#about">About Us</a></li>
  <li><a href="#about">Contact</a></li>
</ul>
<div class="container">
    <div class="logo">
    <img src="image/logo.png" class="img-fluid" >
    </div>
</div>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/spinningrod.jpg" alt="Los Angeles" style="width:100%;height:400px;">
		<div class="carousel-caption">
        <h3>Top 3 Kayaks</h3>
        <p>Get The Best Reviews!</p>
		<button class="button" style="backgroundcolor:green;color:while";
		onclick="window.location.href = 'https://w3docs.com';">Click Here!</button>
      </div>
	  </div>

      <div class="item">
        <img src="image/spinningreel.jpg" alt="Chicago" style="width:100%;height:400px;">
		<div class="carousel-caption">
        <h3>Top 3 Spinning Rods</h3>
        <p>Get The Best Reviews!</p>
		<button class="button" style="backgroundcolor:green;color:white";
		onclick="window.location.href = 'https://w3docs.com';">Click Here!</button>
      </div>
      </div>
    
      <div class="item">
        <img src="image/kayak.jpg" alt="New york" style="width:100%;height:400px;">
		<div class="carousel-caption">
        <h3>Top 3 Spinning Rods</h3>
        <p>Get The Best Reviews!</p>
		<button class="button" style="backgroundcolor:green;color:white";
		onclick="window.location.href = 'hianglerhompage.html';">Click Here!</button> 
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container">
  <form action="" method="POST">
  <h3>Leave a Comment here..</h3>
    <label for="fname">Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." class="form-control" required>

   
    <label for="comment">Comment</label>
    <textarea id="subject" name="comment" placeholder="Write something.." style="height:200px"></textarea>

    
	<input type="submit" class="btn btn-success" value ="submit" name="submit" onclick="" >

<script>
function myFunction() {
  alert("Thank You For your Comment");
}
</script>
	
  </form>



</div>
 
<footer class="footer">
        &copy; 2018 AUST CSE 3.1, All Rights Reserved
    </footer>   




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php// include 'footer.php';?>
</body>
</html>