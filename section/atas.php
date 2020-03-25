<?php 
  include "sql/connPortfolio.php";
  $sql = "SELECT * FROM privasi";
  $result = $connPortfolio->query($sql);
  if($result->num_rows>0){
    $privasi = $result->fetch_assoc();
  } 
 ?>

<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>My Portfolio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>