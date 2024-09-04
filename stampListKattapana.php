<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stamp-List</title>
  <link rel="stylesheet" href="style_quarter.css">
  <link rel="stylesheet" href="style_displayCustomer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="navbar">
            <a href="#"><img class="logo" src="logo.jpg" loading="lazy"  width="60px" height="60px"></a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="displayCustomer.php">Customer</a></li>
                <li><a href="stampList.php">Stamp list</a></li>
                <li><a href="#">Weighing Machine</a></li>
                <li><a href="select-taluk.php">Area Wise</a></li>
            </ul>
</div>
  <div class="cover">
  <a href="displayAreaWise.php?quarter=A&taluk=kattappana"><button id="quarterA">Quarter A</button></a>
  <a href="displayAreaWise.php?quarter=B&taluk=kattappana"><button id="quarterB">Quarter B</button></a>
  <a href="displayAreaWise.php?quarter=C&taluk=kattappana"><button id="quarterC">Quarter C</button></a>
  <a href="displayAreaWise.php?quarter=D&taluk=kattappana"><button id="quarterD">Quarter D</button></a>
</div>  
<!--<script type="text/javascript">
    document.getElementById("quarterA").onclick = function () {
        location.href = "displayKattappanaA.php";
    };
    document.getElementById("quarterB").onclick = function () {
        location.href = "displayKattappanaB.php";
    };
    document.getElementById("quarterC").onclick = function () {
        location.href = "displayKattappanaC.php";
    };
    document.getElementById("quarterD").onclick = function () {
        location.href = "displayKattappanaD.php";
    };
</script>-->
</body>
</html>