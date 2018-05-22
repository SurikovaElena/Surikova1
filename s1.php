<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title> Уход за волосами мужчин </title>
  
   <style>
   div {
      background-image: linear-gradient(#EEB5C9, #FFDAB9);
      width: 100%;
      height: 0px;
	  opacity:0.8;
    }
  </style>
 
  <meta charset="utf-8">
  <link rel="stylesheet" href="gl.css">
 <style>  body {
    background:  url(k.jpg) no-repeat;
	background-size: cover;
	height: 100%;
	background-attachment: fixed;
   } </style>
 </head>
 <body>
 <p > <a href="index.php"> <img src="l3.png" width="30%" height="20%" border="0" alt="Пример" align="right" ></a></p>
  <p>  &nbsp; </p> 
  <p>  &nbsp; </p> 
 <p>  &nbsp; </p> 
 
 
   	 <?php
  $mysqli=new mysqli("localhost", "koroleva3", "", "PersonS"); 
  $query = "select Text from Texts";
  $mysqli->query("set names utf8;");   
  $result = $mysqli->query($query); 
   while($row = $result->fetch_array(MYSQLI_ASSOC)) {?>
  <p > <?php echo $row['Text']; ?> </p>
     <?php
  }
  ?>
  
 
 </body>
</html>