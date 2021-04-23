<!DOCTYPE html>
<html>
<head>
	<title>Reviews</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>

*{
    box-sizing: border-box;
}

.header p{
    background-color: black;
    color: white;
    font-size: 20px;
    padding: 15px;
    padding-left: 100px;
    font-family: Helvetica;
}

.banner img{
    margin-top: -16px;
    margin-bottom: 45px;
    width: 100%;
}


.column1{
    background-color: #A5D649;
    padding: 20px;
    color: #FFFFFF;
    border-radius: 5px;
}

.column2{
    background-color: #1CA39D;
    padding: 20px;
    color: #FFFFFF;
    border-radius: 5px;
}

.column3{
    background-color: #818181;
    padding: 20px;
    color: #FFFFFF;
    border-radius: 5px;
}

.icon{
    float: left;
    margin-right: 20px;
    margin-top: 10px;
}

    
 

p{
    font-size: 13px;
    font-family:  Helvetica;
    color: darkgray;
}

h{
    font-size: 17px;
    font-weight: bold;
    font-family:  Helvetica;
}
H1{
    
     font-size: 15px;
    font-weight: bold;
    font-family:  Helvetica; 
}

.featuredServices{
    background: #F3F3F3;
    text-align: center;
    margin-top: 45px;
}

.text-area{
    padding-top: 150px;
   
}

.featuredServices h{
    padding-top: 40px;
    font-size: 40px;
    font-weight: normal;
}

.featuredServices p{
    font-size: 17px;
}

.column21 img{
    border-radius: 50%;
    padding: 50px 0px;
  
 
}


.aust-cse{
    background-image: url(../image/ddg-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 500px; 
    width: auto;
}

.aust-top p{
    padding-top: 150px;
    font-size: 50px;
    color: white;
    font-weight: 100;
    
}

.aust-bottom{
    display: flex;
}

.aust-bottom p{
    font-size: 70px;
    color: white;
    font-weight: 650;
    margin-right: 15px;

}

.aust-bottom a{
    margin-top: 25px;
    padding: 10px 30px;
    color: white;
    background-color: #8EC63F;
    height: 50px;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
}

.footer{
    background-color: black;
    padding: 30px 0;
    text-align: center;
}

.footer p{
    color: white;
    font-size: 20px;
}



@media (max-width: 768px) {
/*
.banner img{
    height: 220px;
}*/
    
.column1{
    background-color: #A5D649;
    padding: 20px;
    color: #FFFFFF;
    border-radius: 5px;
    margin-bottom: 20px;
}

.column2{
    background-color: #1CA39D;
    padding: 20px;
    color: #FFFFFF;
    border-radius: 5px;
    margin-bottom: 20px;

}

.column3{
    background-color: #818181;
    padding: 20px;
    color: #FFFFFF;
    border-radius: 5px;
}
.aust-cse{
    background-image: url(../image/ddg-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
    width: auto;
}

.aust-top p{
    padding-top: 50px;
    font-size: 30px;
    color: white;
    font-weight: 100;
    
}

.aust-bottom{
    display: grid;
}

.aust-bottom p{
    font-size: 40px;
    color: white;
    font-weight: 650;
}

.aust-bottom a{
    display: block;
    padding: 10px 0px;
    width: 200px;
}
    
    
}
img{
	width: 100px;
	height: 100px;
}
</style>

<body>
<?php include 'navbar.php';?>
<div class="container">
<div class="featuredServices">
       
        <div class="text-area">
            <h1>Kayaks</h1>
            <p>Generate looks reasonable is therefore always</p>
        
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="column21">
                        <img src="image/kayak.jpg" class="img-fluid" alt="img1">
     
                        <P>The cities of the discovered the source comes from sections</P>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="column21">
                        <img src="image/babykayak.jpg" class="img-fluid" alt="img2">
                        
                        <P>The cities of the discovered the source comes from sections</P>
                    </div>
                </div>
                
                
                
                
            </div>
        </div>
        
    
	
	
        <div class="text-area">
            <h1>Fishing</h1>
            <p>Generate looks reasonable is therefore always</p>
        
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="column21">
                        <img src="image/rod.jpg" class="img-fluid" alt="img1">
                        <H1>30+ TEMPLATES</H1>
                        <P>The cities of the discovered the source comes from sections</P>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="column21">
                        <img src="image/reel.jpg" class="img-fluid" alt="img2">
                        <H1>MULTI PURPOSE</H1>
                        <P>The cities of the discovered the source comes from sections</P>
                    </div>
                </div>
                
                
                
                
            </div>
        </div>
        
    </div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>