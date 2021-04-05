<?php
  function test_input($data){         //used to remove any sql injection
    $data = trim($data);            //remove white spaces
    $data = stripcslashes($data);   //remove backslashes
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panky Zara Home Interiors</title>
    <!-- Google Fonts Lobster -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">  <!-- downloaded bootstrap 4 path -->
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">            <!-- custom styles-->
    <link rel="stylesheet" href="css/all.css">              <!-- Font awesome styles-->
    <link rel="stylesheet" href="css/owl.carousel.min.css"> <!-- Owl Carousel-->
  </head>