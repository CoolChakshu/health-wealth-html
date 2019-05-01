<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="date";
$connect=mysqli_connect($servername,$username,$password,$database_name);
if($connect)
{
  $query="insert into birth(DOB) values (' $difference'')";
  
  
}
else{
  echo "fail";
}




?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




</head>

<body onload="addDate();">




  <script type="text/javascript">

    function addDate() {
      date = new Date();
      var month = date.getMonth() + 1;
      var day = date.getDate();
      var year = date.getFullYear();

      if (document.getElementById('number').value == '') {
        document.getElementById('number').value = day + '-' + month + '-' + year;
      }
    }

    function getcube() {
      var number = document.getElementById("number").value;
      var birthdate = document.getElementById("number1").value;
 var d1 = new Date(number);
  var d2 = new Date(birthdate);
      var timeDiff = d1.getFullYear() - d2.getFullYear();
      $difference=timeDiff;
      // var DaysDiff = timeDiff / (1000 * 3600 * 24);
      document.getElementById("demo1").innerHTML = "the age is" + timeDiff;
    }  
  </script>
  <form>
    <div id="date"></div>
    current date:<input id="number" type="text" name="number" /><br />
    birthdate :<input type="date" id="number1" name="number" /><br />
    <input type="button" value="Calculate age" onclick="getcube()" />
    <div id="demo1"></div>
  </form>
</body>

</html>