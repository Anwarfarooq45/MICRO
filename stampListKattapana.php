<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stamp-List</title>
  <link rel="stylesheet" href="style_quarter.css">
</head>
<body>
  <div class="cover">
<button id="quarterA">Quarter A</button>
<button id="quarterB">Quarter B</button>
<button id="quarterC">Quarter C</button>
<button id="quarterD">Quarter D</button>
</div>  
<script type="text/javascript">
    document.getElementById("quarterA").onclick = function () {
        location.href = "displayKattapppanaA.php";
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
</script>
</body>
</html>