<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title> Красота для мужчин </title>
  
   <style>
   div {
      background-image: linear-gradient(#EEB5C9, #FFDAB9);
      width: 1500px;
      height: 0px;
	  opacity:0.8;
    }
  </style>
 
  <meta charset="utf-8">
  <link rel="stylesheet" href="gl.css">
 <style>  body {
    background:  url(km.jpg) no-repeat;
	background-size: cover;
	height: 100%;
	background-attachment: fixed;
   } </style>
 </head>
 <body>
 <p><a href="index.php"><img src="l3.png"
   height="60" border="0" alt=" " align="right" ></a></p>
  <p>  &nbsp; </p> 
  <p>  &nbsp; </p> 
  <p> &nbsp;  </p> 
  <p> &nbsp;  </p>
  <p>  &nbsp; </p> 
  <p>  &nbsp; </p> 
  <p>  &nbsp; </p> 
  <div class="parm">
  			 <?php
  $mysqli=new mysqli("localhost", "koroleva3", "", "PersonS"); 
  $query = "select name, image, hr  from element";
  $mysqli->query("set names utf8;");   
  $result = $mysqli->query($query); 
  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
   ?><p class = "p1"><?php echo $row['name']; ?>
   <img id = "mmg" src="<?php echo $row['image']; ?> " alt="text">
   <a href="<?php echo $row['hr']; ?>"> Подробнее </a>
   </p>
   <?php
  }
  ?>
 </div>
 </body>
</html>
 