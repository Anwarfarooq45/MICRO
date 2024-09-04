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
          location.href = "displayMunnarA.php";
      };
      document.getElementById("quarterB").onclick = function () {
          location.href = "displayMunnarB.php";
      };
      document.getElementById("quarterC").onclick = function () {
          location.href = "displayMunnarC.php";
      };
      document.getElementById("quarterD").onclick = function () {
          location.href = "displayMunnarD.php";
      };
  </script>
</body>
</html>