<?php
include("database.php");
$slno=$_GET['ID'];
$query="DELETE FROM customer WHERE sl_no='".$slno."'";
$conn->query($query);
$conn->close(); 
echo "<script>
alert('Customer details deleted successfully');
window.location.href='displayCustomer.php';
</script>";
?>