<?php
    include('../master/connect.php');


  $sql = "SELECT loantypes_id,loantypes_name,loantypes_interest 
  FROM LoanTypes WHERE loantypes_status = 'active'";


  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['loantypes_id'],$fetch['loantypes_name'].' - ('.$fetch['loantypes_interest'].' %)');				 	
  }         
$conn = null;             

echo json_encode($output);
?>    