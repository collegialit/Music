<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ALL GO RHYTHM </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
   <!-- <link rel="stylesheet" href="style.css">-->
	<style>
	body {margin:0;font-family:Verdana;}
    h4{
        font-weight: bold;
        font-size: medium;
    }
    .topnav {
      overflow: hidden;
      background-color: #333;
	  height: 90px;
    }
    
    .topnav a {
      float: right;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 10px;
      text-decoration: none;
      font-size: 15px;
      font-weight: bold;
	  margin-top: 25px;
	  margin-right: 10px;
    }
    
    .active {
      color: white;
    }
    
    .topnav .icon {
      display: none;
    }
    
  
    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }
      .topnav a.icon {
        float: center;
        display: block;
      }
    }
    
    @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
      .topnav.responsive {float: none;}
      .topnav.responsive  {position: relative;}
      .topnav.responsive  {
        display: block;
        width: 100%;
        text-align: left;
      }
    }
    * {
  box-sizing: border-box;
}
.menu {
  float: left;
  width: 23%;
   border: 1px solid #ccc;
   background-color:whitesmoke;
  height:520PX;
  margin-top: 20px;
  margin-left:15px;
}
.menuitem{
  
  text-align: center;
 
  border-radius: 20px;
}
.menuitem a{
    color:rgb(255,228,132);
        text-align: center;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
        font-weight: bold;
        font-family: Verdana;
		
}
.main {
  float: right;
  width: 75%;
  padding: 0 20px;
  overflow: hidden;
}
.right {
  float: left;
  width: 20%;
  padding: 10px 15px;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
div.titlebar{
  text-align: center;
      border: 1px solid #ccc;
      background-color:rgb(255,228,132);
     color: black;
    font-weight: bold;
    font-family: Verdana;
    padding: 10px;
    font-size:16pt;	
    margin-top:7px;
  }
   ol{
                list-style-type: none;
                margin: 0;
                padding: 0;
            }
           li{
                float: left;
                width: 220px;
                height: 360px;
                border: 1.5px solid gold;
                border-radius: 5px;
                margin-right: 15px;
                margin-bottom:50px; 
                opacity: 1; 
				margin-left: 10px;
				background-color: #008fb3;
            } 
			 .course-font{
                clear: both;
                font-style: italic;
                font-weight: bold;
                padding-left: 5px;
                margin-top: 5px;
                margin-bottom: 1px;
                color: navy;
			
            } 
            .course-details{
                color: white;
				font-size: 12px;
				font-weight:none;
				margin: 1px 1px 1px 1px;
            } 
	</style>
</head>
<body>

    <div class="topnav" id="myTopnav" style=" background-color: #ff6600;">
        <img src="images\logo.jpg" class="logo" style="height:70px; margin-top:7px; margin-left:5px;">
		<a href="contactus.php"><i class='fas fa-phone-square-alt' style='font-size:17px;color:rgb(255,228,132);'></i>ContactUs</a>
	    <a href="studentlogin.php"><i class="fas fa-sign-in-alt" style='font-size: 17px;color:rgb(255,228,132);'></i>StudentLogin</a>
		<a href="teacherlogin.php"><i class="fas fa-sign-in-alt" style='font-size: 17px;color:rgb(255,228,132);'></i>TeacherLogin</a>
		<a href="awards.php"></i>Awards</a>
         <a href="index.php" class="active"><i class='fas fa-home' style='font-size:17px;color:rgb(255,228,132);'></i>Home</a>
        
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>

<div style="overflow:auto" >
<img src="images\thoranam.jpg" class="logo" style="wide:100%;"><br>
  <div class="menu">
    <!-- <div class="menuitem">
            <img src="images\musician2.jpg" class="logo" style="width:100%; height:520PX;"></div>
    <div class="menuitem"></div>
    <div class="menuitem"></div>-->
	<div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="1000" >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\musicians1.jpg" style='width:100%; height:520PX;'>
				 <div class="container" >
              <div class="carousel-caption" style='margin-bottom: 180px;'>
                  <h4 style="font-family: Verdana; color: white; text-align:center;"><b>"Music <br>is <br>life <br>itself."</b></h4>
                  
              </div>
          </div>
              
             </div>
            <div class="carousel-item">
                <img src="images\musician2.jpg" style='width:100%; height:520PX;'>
                <div class="container" >
              <div class="carousel-caption"style='margin-bottom: 180px;'>
                  <h4 style="font-family: Verdana; color: #ff6600;"><b><b></h4>
				  
              </div>
          </div>
         
            </div>
           
		  
        </div>
        <a class="carousel-control-prev" href="#carousel-id" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#carousel-id" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
    </div>
    
  </div>

  <div class="main">
     <!-- <div style='margin-top: 10px;background-color:whitesmoke;color:grey;border: 0.5px solid #ccc;padding: 10px;text-align: center;'>"We're dedicated to deliver you the very best of the products, with a focus on quality, customer service and uniqueness. Treat your self with the healthy snack just by sitting at home."
    </div>-->
	<div style='margin-top: 20px;'>
	<p><b><span style="color: #ff6600;">All Go Rythm</span> is paving new ways to bring out the next generation of musicians, producers and educators.</b></p>
    <p>A vibrant space with state-of-the-art equipment, award winning educators and wide range of opportunities to experience crafted lessons, workshops, band jams, choirs, rehearsals, auditions, solo recitals, events and certification. We are building a community. Be a part of it.<p>

	</div>
    <div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="1000" style='margin-top: 20px;  border: 1px solid #ccc;'>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Curvsel\curvsel.jpg" style='width:100%;'>
				 <div class="container" >
              <div class="carousel-caption" style="border: 5px solid white; width:20%; margin-left:400px;">
                  <h1 style="font-family: Verdana; color: white; text-align:center;"><b>Time</br> to </br>step </br> up</b></h1>
                  
              </div>
          </div>
              
             </div>
            <div class="carousel-item">
                <img src="Curvsel\curvsel1.jpg" style='width:100%;'>
                <div class="container" >
              <div class="carousel-caption" style=" margin-left:150px; margin-bottom:70px;">
                  <h1 style="font-family: Verdana; color: white;"><b>Take up your online </br> music lesson today</b></h1>
				  <hr style="width:50%;color: #ff6600; align:left; border-width: 3px; background-color: #ff6600; height:2px;">
				   <p style="color: white;">
           <b> We may be away,</br>
            but never idle.</b></p>
                  
              </div>
          </div>
         
            </div>
           
		  
        </div>
        <a class="carousel-control-prev" href="#carousel-id" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#carousel-id" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
    </div></br>
	
</div>   
</div>
<hr style="width:90%;color: #ccc; align:left; border-width: 2px; height:1px;">
 <div style="width:98%; margin:5px 10px 15px 15px; height: 420px;">
 <div style="width:98%; margin:5px 10px 15px 15px; height: 40px; background-color: #008fb3; color:white;border; 1px solid #008fb3; text-align:center;"><h3><b>All Courses</b></h3></div>
 <ol>
            <li>
                <img src="images\vocal.jpg" style="width: 100%;">
             
                <div class="course-font">Vocal</div>
                <div class="course-details">
                   A vocal coach, also known as a voice coach, is a music teacher, usually a piano accompanist, who helps singers prepare for a performance. 

                </div>
            </li>
            <li>
                <img src="images\guitar.jpg" style="width: 100%;">
                
                <div class="course-font">Guitar</div>
                <div class="course-details">
               A course, on a stringed musical instrument, is either one string or two or more adjacent strings that are closely spaced relative to the other strings, typically played as a single string.
    
                </div>
            </li>
                <li>
                    <img src="images\piano.jpg" style="width: 100%;">
                    
                        <div class="course-font">Piano</div>
                        <div class="course-details">
                            Studying piano has also been shown to amazingly improve memory particularly verbal memory and build good habits like focus and perseverance, diligence and creativity.
                    </div>
                </li>
            <li>
                <img src="images\keyboard.jpg" style="width: 100%;">
                
                     <div class="course-font">Keyboard</div>
                     <div class="course-details">
                             Keyboard courses introduce the student to the joys of playing the keyboard. In these courses, you would be able to learn the fundamentals and play simple songs on the keyboard.
                     </div>
            </li>
			 <li>
                <img src="images\violin.jpg" style="width: 100%;">
                
                     <div class="course-font">Violin</div>
                     <div class="course-details">
                            Violin is a whole community in itself. Once you start taking the lessons, You can choose to learn the violin right from the comfort of your home!
                     </div>
            </li>
        </ol>
		</div>
		<hr style="width:90%;color: #ccc; align:left; border-width: 2px; height:1px;">
<div style=" background-image: url('images/about.jpg');border: 1px solid #ccc; width:98%; margin:5px 10px 15px 15px; height: 400px;">
<h3 style="margin-left:15px; margin-top:10px; color: black;"><b>About All Go Rythm:<b></h3>
<div style="width:50%; float:left; margin-left: 15px; color: black;">
<p>All Go Rythm, Madras is a landmark institution in the history of the fine arts. It emerged as an offshoot of the All India Congress Session held in Madras in December 1927. A music conference was held along with it and during the deliberations, the idea of a Music Academy emerged.</p>

<p>Inaugurated on August 18, 1928 at the YMCA Auditorium, Esplanade by Sir CP Ramaswami Aiyar, it was conceived to be the institution that would set the standard for Carnatic music. In the process, it began in 1929 the practice of hosting annual conferences on music, which in turn spawned the December music festival of Madras, one of the largest cultural events of the world.</p>
</div>

</div>
<div style="background-image: url('images/contact.jpg');border: 1px solid #ccc; width:98%; margin:5px 10px 15px 15px; height: 400px;">
<img src="images\logo.jpg" class="logo" style="height:70px; margin-top:50px; margin-left:100px;"><br>
<div style="width:50%; float:left; margin-left: 100px;margin-top:10px; color: white;">
<h5><b>Contact:<b></h5>
<p><b>ALL GO RHYTHM</b><br>
      #982/83, Raghavendra Colony,<br>
      Near HP Petrol Bunk,<br>
      Beeramgunda,<br>
      Sangareddy-502032.<br><br>
      
      Tel No: 9123456789<br>
      Whatsapp No: 9123456789</br>       
      Email:- admin@allgorythm.in</p>
      
</div>

<div style="width:40%; float: right; overflow:hidden; margin-right:20px; color: white; margin-top:30px;">
<h5><b>Courses:<b></h5>
<p>Guitar | Vocal | Drums</br>
Keyboard/Piano | Violin </br>| Explorer | Music Production
</div>
</div>
  
  <div style="background-color:#696969;color:azure; text-align:center;padding:20px;margin-top:7px;font-size:15px;font-weight: bold;"><h6>Copyright &#169 2020 | collegialit
    
</h6></div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
</body>
</html>
