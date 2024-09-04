<?php
  include("database.php");

  // Don't forget to properly escape your values before you send them to DB
  // to prevent SQL injection attacks.

  $field1 = $conn->real_escape_string($_POST['name']);
  $field2 = $conn->real_escape_string($_POST['shopName']);
  $field3 = $conn->real_escape_string($_POST['address']);
  $field4 = $conn->real_escape_string($_POST['phoneNumber']);
  $field5 = $conn->real_escape_string($_POST['taluk']);
  $field6 = $conn->real_escape_string($_POST['date']);
  $field7 = $conn->real_escape_string($_POST['model']);
  $field8 = $conn->real_escape_string($_POST['sl_no']);
  $field9 = $conn->real_escape_string($_POST['quarter']);

  $query = "INSERT INTO customer (c_name,shop_name,c_address,c_phone,c_taluk,c_date,machine_model,sl_no,nextStampQuarter) VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}','{$field6}','{$field7}','{$field8}','{$field9}')";

  $conn->query($query);
  $conn->close(); 
  echo "<script>
  alert('Customer details added successfully');
  window.location.href='customer.php';
  </script>";
  ?>
