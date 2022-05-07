<!DOCTYPE html>
<html>
<head>
<title>براڤو عليك</title>
<link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<style>

#vd {
display: none;
}

textarea {
  border-radius: 10px;
  width: 50%;
  border: 2px solid #555;
  background-color: #f8f8f8;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  transition: width 0.4s ease-in-out;
  resize: none;
}
textarea:focus {
  width: 80%;
}

.success {
  border-radius: 10px;
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 6px 28px;
  font-size: 16px;
  cursor: pointer;
  border-color: #04AA6D;
  color: green;
}
.success:hover {
  background-color: #04AA6D;
  color: white;
}

.success span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.success span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.success:hover span {
  padding-right: 25px;
}

.success:hover span:after {
  opacity: 1;
  right: 0;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 10px;
  padding: 6px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button4:hover {background-color: #e7e7e7;}

#page-container {
  position: relative;
  min-height: 100vh;
}

#content-wrap {
  padding-bottom: 2.5rem;
}

#footer {
  background-color: #F5F5F5;
  border-radius: 4px;
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 40px;
  padding: 4px 4px;
}

#hh {
  text-align: top left;
}

label {
  font-size: 25px;
}

</style>

</head>
<body>
<div id="page-container">
<div id="content-wrap">


<script type="text/javascript">

  var X = document.getElementById("vid"); 


  if (T == "") {

  } else {
  if (X.paused) 
  X.play(); 
  else
  X.pause();

function myFunction() {
  let T = document.getElementById["key"].value;
  var E = document.getElementById("vd");
  var X = document.getElementById("vid"); 

  if (T == "") {

  } else {
  if (X.paused) 
  X.play(); 
  else
  X.pause();
    
  if (window.getComputedStyle(E).display === "none") {
    E.style.display = "block";
  }
  }
  }
</script>

<?php
$name = $v = $bt = $vr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = test_input($_POST["key"]);

$v = '<video id="vid" width="350" autoplay>
  <source src="/assets/bravo3lek.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>'; #video

$bt = '<button onclick="history.back(-1)" class="button4">رجوع</button>'; #button

$ct = "<center>";
$ct2 = "</center>";

// display results >>

echo $ct;
echo "<b>براڤووو علييييييك</b><br>";
echo "<br>";
echo $v;
echo "<br><br>";
echo '<text style="color:green;">انجازاتك</text> : '.$name;
echo "<br><br>";
echo $bt;
echo $ct2;
echo "<br>";

include "insert.php"; # insert result in database

} else {

$vr = '
<center>
<form name="F" method="POST" action="">
<div>
  <label for="key">اكتب انجاز عملته اليوم</label><br>
  <textarea required id="txt" name="key" placeholder="مثال: قرأت كتاب" ></textarea>
  <br><br>
  <button class="success" onclick="myFunction()"><span>إتمام</span></button><br><br>
</div>
</form>
</center>';

echo $vr;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

# powered by Encept Corporation
# https://encept.co
?>

</div>
<footer id="footer">
<small>
Made By <a href="https://encept.co">Encept Corporation</a><br>
Owner Account: <a href="https://www.facebook.com/karim-abdallah-dev">Facebook</a>
</small>
</footer>
</div>
</body>
</html>