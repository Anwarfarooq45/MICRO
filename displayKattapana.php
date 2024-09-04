<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Data</title>
  <link rel="stylesheet" href="style_displayMunnar.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <?php
  include("fetchDataKattapana.php");


  ?>
  <div class="container">
 <div class="row">
   <div class="">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
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
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['c_name']??''; ?></td>
      <td><?php echo $data['shop_name']??''; ?></td>
      <td><?php echo $data['c_address']??''; ?></td>
      <td><?php echo $data['c_phone']??''; ?></td>
      <td><?php echo $data['c_taluk']??''; ?></td>
      <td><?php echo $data['c_date']??''; ?></td>
      <td><?php echo $data['machine_model']??''; ?></td>  
      <td><?php echo $data['sl_no']??''; ?></td>  
      <td><?php echo $data['nextStampQuarter']??''; ?></td>  
      <td><form action="tel:<?php echo $data['c_phone'];??>"><button>Call</button></form></td> 
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
   </div>
</div>
</div>
</div>
</body>
</html>