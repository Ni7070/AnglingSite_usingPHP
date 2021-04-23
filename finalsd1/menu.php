<!DOCTYPE html>
<html lang="en">
<head>
<title>Menu</title>
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
<style> 

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

p.solid {border-style: solid;}

P.blocktext {
    margin-left: auto;
    margin-right: auto;
    width: 8em
}

.all{
margin:0%;
 border: 13px solid green;
background-color:white;
margin-top:-10px;
margin-bottom:5%;
}

.logo img{
width: 100%;
align: center;
height: 200px;
margin-top: -20px;
margin-bottom:20px;
}


.logo1 img{
width: 50%;
align: center;
height: 50%;
margin-top: 50px;
margin-bottom:50px;
}
.artcl{
font-weight:bold;
text-align:center;
margin-top:100px;
color:black;
}

.artcl7{
font-weight:bold;
text-align:center;
margin-top:10px;
color:black;
}


.artcl2{
font-weight:bold;
text-align:center;
margin-top:150px;
color:black;
}

.artcl3{
font-weight:normal;
margin-top:50px;
font-style:italic;
margin-bottom:90px;
}

.artcl4{
font-weight:normal;
margin-top:50px;
font-style:italic;
margin-bottom:50px;
text-align:center;
}
* {
  box-sizing: border-box;
 
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 20%;
  padding: 10px;
<!--  border: 2px solid black;-->

  
  height: 300px; /* Should be removed. Only for demonstration */
}


.row:after {
  content: "";
  display: table;
  clear: both;
  
div {
  width: 320px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
}
}
.help a{
    margin-top: 25px;
    padding: 10px 30px;
    color: white;
    background-color: #8EC63F;
    height: 50px;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
}

.help{
   display: grid;

}



.help a{
    margin-top: 25px;
    padding: 10px 30px;
    color: white;
    background-color: #8EC63F;
    height: 50px;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
	margin-bottom:10%;
}
.help{
    
}



.help a{
    display: block;
    padding: 10px 0px;
    width: 200px;
    height: 70px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
  
}
    
			
</style>
</head>
<body>


<?php include 'navbar.php';?>


<div class="all">

<div class="artcl7">
<p><font size="7"><font color="black">Menu</font> </p>
</div></div>



<div class="container">
<h2>Kayaking</h2>


<div class="row">
  <div class="column">
    <div id="images">
           <a target="_blank" href="http://localhost/finalsd/review11.php">
              <img src="image/ac.png" width="230px" height="150px"></a>
</div>        
  </div>
  <div class="column">
    <div id="images">
          <a target="_blank" href="http://localhost/finalsd/review1.php">
              <img src="image/ab.png" width="220px" height="150px"></a>
</div>   
</div>     
  <div class="column">
   <div id="images">
           <a target="_blank" href="http://localhost/finalsd/review12.php">
              <img src="image/ad.png" width="220px" height="150px"></a>
</div>        
  </div>
</div></div></div>


<br>
<div class="container">
<h2>Line and Reels</h2>


<div class="row">
  <div class="column">
    <div id="images">
           <a target="_blank" href="http://localhost/finalsd/review13.php">
              <img src="image/ae.png" width="220px"  height="150px"></a>
</div>        
  </div>
  <div class="column">
    <div id="images">
           <a target="_blank" href="http://localhost/finalsd/review14.php">
              <img src="image/af.png" width="220px" height="150px"></a>
</div>   
</div>     
  
</div></div>
</div>
<br>
<br>
<br>
<br>
<?php include 'footer.php';?>
</body>
</html>
