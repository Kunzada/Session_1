<!-- Задание 1.
Создайте три страницы с формами, содержащими по одному полю ввода на стр. Обработчик
 каждой последующей формы будет вести на следующую страницу.
 На первой страницы спросим имя, на второй странице фамилию, на третьей возраст,
 а на четвертой выведите все данные используя сессию. -->
 
   <?php

 session_start();
 $_POST['name'];

 ?>
  
  <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
   
    <form action="code2.php" method="POST"><!-- enctype="multipart/form-data"> -->
<label>Введите ваше имя:</label>
<input type="text" name="name" > 
<input type="submit" value="Дальше">
    </form>
     
 </body>
 </html>   

