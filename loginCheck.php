<?php
  include("database.php");
  if(isset($_POST['login'])) {
    $sql = mysqli_query($conn,
    "SELECT * FROM login WHERE usr_name='"
    . $_POST["user"] . "' AND
    usr_pass='" . $_POST["pass"] . "'    ");
  
    $num = mysqli_num_rows($sql);
  
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        session_start();
        header("location:home.php");
    }
    else {
      echo "<script>
alert('Invalid details!... Please enter currect username and password');
window.location.href='login.html';
</script>";
    }
  }

?>