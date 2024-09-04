<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer-Details</title>
    <link rel="stylesheet" href="style_customer.css">
</head>
<body>
    <div class="container">
        <img src="bg_c.png" alt="customer_Logo" class="upcycle-logo">
        <h2>Customer Details</h2>
        <!-- Personal Details Form -->
        <form id="personalDetailsForm" action="addCustomer.php" method="post" >
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="name" required>
            </div>
            <div class="form-group">
                <label for="shopName">Shop Name:</label>
                <input type="text" id="shopName" name="shopName" required>
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" id="address" name="address" required>
          </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" id="phoneNumber" name="phoneNumber" required>
            </div>
            <div class="form-group">
              <label for="taluk">Taluk:</label>
              <input type="text" name="taluk">
              <!--<select name="taluk">
                <option value="" >Please select taluk from the list</option>
                <option value="munnar" required>Munnar</option>
                <option value="kattappana" required>Kattappana</option>
              </select> -->
            </div>
            <div class="form-group">
              <label for="date">Purchase Date:</label>
              <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
              <label for="model">Machine Model:</label>
              <input type="text" id="model" name="model" required>
            </div>
            <div class="form-group">
              <label for="sl_no">Serial Number:</label>
              <input type="text" id="sl_no" name="sl_no" required>
            </div>
            <div class="form-group">
              <label for="nextQuarter">Next Stamping Quarter:</label>
              <input type="text" name="quarter"><!--<select name="quarter">
                <option value="" >Please select quarter from the list</option>
                <option value="A25" >A/25</option>
                <option value="B25" >B/25</option>
                <option value="C25" >C/25</option>
                <option value="D25" >D/25</option>
              </select> -->
            </div>
            <div class="form-group">
              <input class="back-button" type="submit"  name="submit">
            </div>
            <!--<small>We will message you via What's App to coordinate item pick ups</small>-->
        </form>
        <a href="home.php" class="back-button">Back</a>
    </div>
</body>
</html>
