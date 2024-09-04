<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stamp-List</title>
  <link rel="stylesheet" href="style_stampList.css">
</head>
<body>

  <div class="cover">
    <div class="box">
    <h1>Please select Taluk & Quarter</h1>
    <form action="displayStampList.php" method="post">
    <select name="taluk">
      <option value="#">Please select Taluk</option>
      <option value="Kattappana">kattappana</option>
      <option value="Munnar">munnar</option>
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