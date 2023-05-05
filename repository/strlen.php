<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <?php
  echo strlen("Hello world!") . "<br>";  //output 12

  echo str_word_count("Hello World!") . "<br>"; //menghitung kata

  echo strrev("Hello World!") . "<br>"; //output terbalik

  echo strpos("Hello world!", "world") . "<br>"; //output 6,mencari kata world, yg berada di urutan ke6
  echo str_replace("world", "exra", "Hello world!"); //output exra,kata world diganti jadi exra
  ?>
</body>

</html>