<html>

<head>
<link rel="stylesheet" type="text/css" href="/trabajo_php/style.css">
</head>
<body onclick="message()">
<div id="banner">
<p id="demo"> CATURLAND WEB PAGE</p>
</div>
<script>
function myFunction(){
   document.getElementById("demo").innerHTML ="GRAFITER_CONTROL";

}
function message(){
   alert("YOU ARE BUTTON");    

}


function validateForm()
{
var x=document.forms["myForm"]["fname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
}



</script>

<form name="myForm" action="welcome.php" method="post" onsubmit="return validateForm()">
<br>
<br>
USERSSS: <input type="text" name="fname">
<br>
<br>
Password: <input type="text" name="email">
<br>
<br>
<br>   <input type="submit">
<br>
<button type="button" onclick="myFunction()"> Message </button>

<br>
</form>

</body>
</html> 