<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stamp-List</title>
    <link rel="stylesheet" href="style_stampList.css">
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
                <li><a href="customer.php">Add customer</a></li>
                <li><a href="select-taluk.php">Area Wise</a></li>
            </ul>
        </div>
</div>

  <div>
    <div class="box">
    <h1>Please select Area & Quarter</h1>
    <form action="displayStampList.php" method="post">
    <select name="taluk">
      <option value="#">Please select Area</option>
      <option value="Kattappana">kattappana</option>
      <option value="Munnar">munnar</option>
      <option value="Perumbavoor">Perumbavoor</option>
  </select>
  <select name="quarter" required>
      <option value="#">Please select Quarter</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
  </select>
  <input type="submit" class="bt-search" value="Search">
</form> 
  </div>
</div>
  

</body>
</html>