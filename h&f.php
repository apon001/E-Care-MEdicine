<!DOCTYPE html>
<html>
<head>
<title>E-care medicine</title>
<link rel="shortcut icon" href="icon.png">
<style>
.header {
  padding: 0px 0px;
  background: black;
  color: #f1f1f1;
}
.header img {
  float: right;
  width: 100px;
  height: 100px;
  background: #555;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #777;
}

li {
  float: left;
   width: 25%;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:  #555;
}

.active {
  background-color: white;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: left;
}
</style>
</head>
<body>
<div class="header">
 <img src="logo.jpg"  alt="logo">
 </div>

<ul>
  <li><a href="e-care.php">Home</a></li>
  <li><a   href="e-care.php">Health Question</a></li>
  <li><a  href="e-care.php">Specialist</a></li>
  <li><a  class="active" href="e-care.php">Medicine Knowledge</a></li>
</ul>
<marquee direction="left"  style="color: blue;font-size: 24px;">
			Welcome to E-care medicine........
		</marquee>


<div class="footer">
  <pre>Contact  Develop by MD Asif Mahmud Apon Email:apon@gmail.com Phone: 01629817175</pre>
</div>
</body>
</html>