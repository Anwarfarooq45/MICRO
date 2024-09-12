<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer-Details</title>
    <link rel="stylesheet" href="style_customer.css">
</head>
<body>
  <?php
    include("database.php");
    $slno=$_GET['ID'];
    $query="select * FROM customer WHERE sl_no='".$slno."'";
    $result=$conn->query($query);
    if($result->num_rows > 0){
      $fetchData = mysqli_fetch_row($result);
    ?>
    <div class="container">
        <img src="bg_c.png" alt="customer_Logo" class="upcycle-logo">
        <h2>Customer Details</h2>
        <!-- Personal Details Form -->
        <form id="personalDetailsForm" action="customer_edit.php" method="post" >
            <div class="form-group">
                <input type="hidden" id="custId" name="id" value="<?php echo $fetchData[0]; ?>"">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="name" value="<?php echo $fetchData[1]; ?>" required>
            </div>
            <div class="form-group">
                <label for="shopName">Shop Name:</label>
                <input type="text" id="shopName" name="shopName" value="<?php echo $fetchData[2]; ?>" >
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" id="address" name="address" value="<?php echo $fetchData[3]; ?>" required>
          </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" id="phoneNumber" name="phoneNumber" value="<?php echo $fetchData[4]; ?>" >
            </div>
            <div class="form-group">
              <label for="taluk">Taluk:</label>
              <!--<input type="text" name="taluk" value="<?php echo $fetchData[5]; ?>">-->
              <select name="taluk">
                  <option value="<?php echo $fetchData[5]; ?>"><?php echo $fetchData[5]; ?></option>
                  <option value="Kattappana">Kattappana</option>
                  <option value="Munnar">Munnar</option>
                  <option value="Perumbavoor">Perumbavoor</option>
              </select>
            </div>
            <div class="form-group">
              <label for="date">Purchase Date:</label>
              <input type="date" id="date" name="date" value="<?php echo $fetchData[6]; ?>" required>
            </div>
            <div class="form-group">
              <label for="model">Machine Model:</label>
              <input type="text" id="model" name="model" value="<?php echo $fetchData[7]; ?>" required>
            </div>
            <div class="form-group">
              <label for="sl_no">Serial Number:</label>
              <input type="text" id="sl_no" name="sl_no" value="<?php echo $fetchData[8]; ?>" required>
            </div>
            <div class="form-group">
              <label for="nextQuarter">Next Stamping Quarter:</label>
              <!--<input type="text" name="quarter" value="<?php echo $fetchData[9]; ?>" required>-->
              <select name="quarter"  required>
                  <option value="<?php echo $fetchData[9]; ?>"><?php echo $fetchData[9]; ?></option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
              </select>
            </div>
            <div class="form-group">
              <input class="back-button" type="submit"  name="submit">
            </div>
            <!--<small>We will message you via What's App to coordinate item pick ups</small>-->
        </form>
        <a href="home.php" class="back-button">Back</a>
    </div>
    <?php
    }
    ?>
</body>
</html>
