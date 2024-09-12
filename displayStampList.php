<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Data</title>
  <!--<link rel="stylesheet" href="style_displayMunnar.css">-->
  <link rel="stylesheet" href="style_navbarPrint.css">
  <link rel="stylesheet" href="style_navbar.css">
  <link rel="stylesheet" href="style_table.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
</head>
<body>
  <div class="banner">
<div class="navbar1">
            <a href="#"><img class="logo" src="logo.jpg" loading="lazy"  width="60px" height="60px"></a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="displayCustomer.php">Customer</a></li>
                <li><a href="stampList.php">Stamp list</a></li>
                <li><a href="#">Weighing Machine</a></li>
                <li><a href="select-taluk.php">Area Wise</a></li>
            </ul>
        </div>
  <?php
  //include("fetchDataMunnar.php");
include("database.php");
$db= $conn;
$taluk=$conn->real_escape_string($_POST['taluk']);
$quarter=$conn->real_escape_string($_POST['quarter']);
$tableName="customer";
$columns= ['id','c_name','shop_name','c_address','c_phone','c_taluk','c_date','machine_model','sl_no','nextStampQuarter'];
$fetchData = fetch_data($db, $tableName, $columns,$taluk,$quarter);
function fetch_data($db, $tableName, $columns,$taluk,$quarter){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
//$query = "SELECT ".$columnName." FROM ".$tableName." WHERE c_taluk='munnar' AND nextStampQuarter='D25' ";
$query = "SELECT ".$columnName." FROM ".$tableName." WHERE c_taluk='".$taluk."' AND nextStampQuarter LIKE'".$quarter."%' ORDER BY c_date ";

$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}



  ?>
  <div class="container">
 <div class="row">
   <div class="">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table">
       <thead><tr><th>S.N</th>
         <th>Full Name</th>
         <th>Shope name</th>
         <th>Address</th>
         <th>Mobile Number</th>
         <th>Taluk</th>
         <th>Purchase Date</th>
         <th>Machine model</th>
         <th>Serial Number</th>
         <th>Stamping Quarter</th>
         <th>Call</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td data-label="Id"><?php echo $sn; ?></td>
      <td data-label="Name"><?php echo $data['c_name']??''; ?></td>
      <td data-label="Shop name"><?php echo $data['shop_name']??''; ?></td>
      <td data-label="Address"><?php echo $data['c_address']??''; ?></td>
      <td data-label="Phone"><?php echo $data['c_phone']??''; ?></td>
      <td data-label="Section"><?php echo $data['c_taluk']??''; ?></td>
      <td data-label="Purchace date"><?php echo $data['c_date']??''; ?></td>
      <td data-label="Machine model"><?php echo $data['machine_model']??''; ?></td>  
      <td data-label="Sl no"><?php echo $data['sl_no']??''; ?></td>  
      <td data-label="Next stamp quarter"><?php echo $data['nextStampQuarter']??''; ?></td>  
      <td data-label="Call"><a href="tel:<?php $phone=$data['c_phone']; echo $phone; ?>"><button>Call</button></a></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
     <button class="printBtn">print</button>
   </div>
</div>
</div>
</div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.2.3/jspdf.plugin.autotable.js"></script>
<script>
  const printBtn = document.querySelector('.printBtn');
  printBtn.addEventListener("click", () => {
    print();
  })
</script>
</body>
</html>