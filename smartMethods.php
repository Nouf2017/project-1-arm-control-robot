<!DOCTYPE html>

<html>
<center> <h1>"Arm control interface design"</h1></center>
<br></br>

</body>
 <p>Engine"1"<p/>
 
<style>

body {
	
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 25px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.slidecontainer {
  width: 200%;
  margin-top:none;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  border-radius:12px;
  box-shadow:0px 1px 10px 1px black;
  
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 20px;
  height: 20px;
  background: #0000ff;
  border-radius:50px;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 30px;
  height: 35px;
  background: #00FFFF;
  cursor: pointer;
}
</style>

</html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: none;
  color: black;
  display: block;
  padding: 20px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #FFFFFF;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>



<div class="vertical-menu">

 


  <a href="#"> Base </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="70" class="slider" id="A">
   Value: <span id="B"></span>
   
</div>

<script>
var slider = document.getElementById("A");
var output = document.getElementById("B");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>






  
  <a href="#">Shoulders</a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="120" class="slider" id="C">
  Value: <span id="D"></span></p>
  
</div>
<script>
var slider = document.getElementById("C");
var output = document.getElementById("D");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  
  <a href="#"> Elbow </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="54" class="slider" id="E">
  Value: <span id="F"></span></p>
</div>

<script>
var slider = document.getElementById("E");
var output = document.getElementById("F");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  <a href="#"> Wrist </a>
  
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="170" class="slider" id="G">
  Value: <span id="H"></span></p>
</div>

<script>
var slider = document.getElementById("G");
var output = document.getElementById("H");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

  <a href="#"> Gripper</a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="30" class="slider" id="I">
  Value: <span id="J"></span></p>
</div>

<script>
var slider = document.getElementById("I");
var output = document.getElementById("J");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  <a href="#"> Engine </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="100" class="slider" id="K">
  Value: <span id="L"></span></p>
  
<script>
var slider = document.getElementById("K");
var output = document.getElementById("L");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

</script>

</html>
<br><br>

<hr>

<p>Engine"2"<p/>

<body>

</body>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
 

<h1>   </h1>


<div class="vertical-menu">


  
  <a href="#"> Base </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="70" class="slider" id="M">
   Value: <span id="N"></span>
   
</div>

<script>
var slider = document.getElementById("M");
var output = document.getElementById("N");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>






  
  <a href="#">Shoulder </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="120" class="slider" id="O">
  Value: <span id="P"></span></p>
  
</div>
<script>
var slider = document.getElementById("O");
var output = document.getElementById("P");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  
  <a href="#"> Elbow </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="54" class="slider" id="Q">
  Value: <span id="R"></span></p>
</div>

<script>
var slider = document.getElementById("Q");
var output = document.getElementById("R");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  <a href="#"> Wrist </a>
  
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="170" class="slider" id="S">
  Value: <span id="T"></span></p>
</div>

<script>
var slider = document.getElementById("S");
var output = document.getElementById("T");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

  <a href="#"> Gripper </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="30" class="slider" id="U">
  Value: <span id="V"></span></p>
</div>

<script>
var slider = document.getElementById("U");
var output = document.getElementById("V");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


  <a href="#"> Engine </a>
  <div class="slidecontainer">
  <input type="range" min="1" max="180" value="100" class="slider" id="W">
  Value: <span id="X"></span></p>
  
<script>
var slider = document.getElementById("W");
var output = document.getElementById("X");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<style>

.button{

background-color:#ffffff;
border:none;
color:white;
padding: 15px 20px;
text-align:center;

text-decoration:center;
display: inline-block;
    font-size: 15px;
    margin: 4px 4px;
    cursor: center ;
    webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:4px;
  box-shadow:0px 1px 4px 1px black;
}


.button2 {background-color: #008CBA;}
.button2 {border-radius: 8px;}
.button2:hover{
background-color:white;
color:blue;

}

</style>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="arm control";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database";

?>




<form action =turnOn.php method="post">
<input type="submit"  name="btn-atc" value=" Run"
</form>
<br>

<form action=putIn.php method="post">
<input type="submit"  name="update" value=" Save"
</form>



<h1>



                    
<button class="button button2">Save</button>
<button class="button button2">Run</button>
</h1>





</body>

</html> 





