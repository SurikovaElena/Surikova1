<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <pre><?php print_r($_POST) ?></pre>

    <?php

  $mysqli=new mysqli("localhost", "koroleva3", "", "PersonS"); 
  
  $query = "insert into person (name, email, tel, id) 
  
   
      values ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['telephone']."', null)";
       $mysqli->query("set names utf8;"); 
      if($mysqli->query($query))
        echo "<script>alert('Пользователь добавлен');</script>";
      else
        echo "<script>alert('Произошла ошибка');</script>";
  
  ?>
  
      </body>
</html>