<?php 
  include "./books.php";
  $books = getAllBooks();
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Quan Ly Sach</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="wrapper">
    <div class="left-gap1"> <img src="images/spacer.gif" alt="#" border="0" height="1" width="6"> </div>
    <div class="main">
      <div class="header">
        <div class="nav-area">
          <ul class="nav">
            <li style="border: medium none ;"><a href="./HomePage.php">Trang chủ</a></li>
            <li><a href="./Body.php">Danh Sách</a></li>
            <li><a href="./Update.php?check=true">Thêm sách</a></li>
            <li><a href="./Reset.php">Reset</a></li>
            <li><a href="./Test.php">Test</a></li>
          </ul> 
        </div>
        <div class="banner-area"></div>
      </div>
      <div class="mid">
        <div class="mid-left">
          <h3>Main Menu<br></h3>
          <ul class="left-item">
            <li><a href="./HomePage.php">Trang chủ</a></li>
            <li><a href="./Body.php">Danh Sách</a></li>
            <li><a href="./Update.php?check=true">Thêm sách</a></li>
            <li><a href="./Reset.php">Reset</a></li>
          </ul>
          <h3>Sách thêm gần đây</h3>
          <ul class="left-item">
            <?php 
              $tempHeader = array_slice($books, (count($books) - 5),5,true);
              foreach ($tempHeader as $key => $value) {
             ?>
             <li><a href="./Update.php?code=<?php echo $key?>&check=false"><?php echo $value['title']; ?></a></li>
            <?php } ?>
          </ul>
        </div>