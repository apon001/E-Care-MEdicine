<!DOCTYPE html>
<html>
<head>
<title>E-care medicine</title>
<link rel="shortcut icon" href="icon.png">
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="header">
 <img src="logo.jpg"  alt="logo">
 </div>

<button class="tablink" onclick="openPage('Home', this, 'white')" id="defaultOpen" style="background-color: white;">Home</button>
<button class="tablink" onclick="openPage('Question', this, 'white')">Health Question</button>
<button class="tablink" onclick="openPage('Specialist', this, 'white')">Specialist</button>
<button class="tablink" onclick="openPage('Medicine', this, 'white')">Medicine Knowledge</button>

<div id="Home" class="tabcontent" style="display: block;">
<marquee direction="left"  style="color: blue;font-size: 24px;">
			Welcome to E-care medicine........
		</marquee>
  <div class="slideshow-container">

<div class="mySlides fade" style="display: block;">
  <img src="1.jpeg" style="width:100%">
  <div class="text"> Specialist</div>
</div>

<div class="mySlides fade" style="display: none;">
  <img src="2.jpg" style="width:100%">
  <div class="text">Medicine</div>
</div>

<div class="mySlides fade" style="display: none;">
  <img src="3.jpg" style="width:100%">
  <div class="text"> Health Question</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot active"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); 
}
</script>
</div>

<div id="Question" class="tabcontent" style="display: none;">
  <h3>Health Question</h3>
 



<select name="" onchange="myFunction(event)">
    <option disabled="" selected="">---Choose Problem Type---</option>
    <option value="fever">Fever</option>
    <option value="chestpain">Chest Pain</option>
    <option value="abdominalpain">Abdominal Pain</option>
</select>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


<script type="text/javascript">

function myFunction(e) {

    var x =e.target.value;
    if (x=='fever'){
      $(document).ready(function(e) {
        $('#content').load('Fever.php');
});
    }
    
     if (x=='chestpain'){
      $(document).ready(function(e) {
        $('#content').load('Chestpain.php');
});
    }
    
    
    if (x=='abdominalpain'){
      $(document).ready(function(e) {
        $('#content').load('Abdominalpain.php');
});
    }
    
}

</script>

<br>
<h1><div id="content"> </div></h1>


</div>

<div id="Specialist" class="tabcontent" style="display: none;">
  <h3>Specialist</h3>
 <form action="Specialist.php" method="post">

<select id="Specialist" name="Specialist">                      
<option value="0">--Select Specialist--</option>
<option value="ENT">ENT</option>
<option value="SKIN">SKIN</option>
<option value="Medicine">Medicine</option>
</select>

<input type="submit" name="search" value="search">

</form>

</div>

<div id="Medicine" class="tabcontent" style="display: none;">
  <h3>Medicine</h3>
  <form action="medicin.php" method="post">

<select id="problem" name="problem">                      
<option value="0">--Select Problem--</option>
<option value="Fever">Fever</option>
<option value="Gastric">Gastric</option>
<option value="Headache">Headache</option>
</select>

<input type="submit" name="search" value="search">

</form>
  
</div>

<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
document.getElementById("defaultOpen").click();
</script>

<div class="footer">
  <pre>Contact  Develop by MD Asif Mahmud Apon Email:apon@gmail.com Phone: 01629817175</pre>
</div>


</body></html>