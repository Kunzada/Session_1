<?php
 session_start();
if(isset($_POST))
{  $_SESSION['age']=$_POST['age'];}

  echo "Данные о вас"."<br>"."Имя:" . $_SESSION['name']."<BR>".
     "Фамилия:".$_SESSION['surname']."<BR>".
     "Возраст:"." ".$_SESSION['age']."<BR>";


?>
