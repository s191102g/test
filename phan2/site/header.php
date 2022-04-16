<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="publlic/css/home.css">
</head>
<body>
    <div class="ctn">
        <header>
              <div class="logo">
                  <img src="publlic/images/logo.png" alt="">
              </div>

              <nav>
                  <ul>
                  <li> <a href="">Trang chu</a> </li>
                      <?php foreach ($allCate as $i ) { ?>
                         
                           <li><a href="?page=cate&id=<?= $i['idDM']?>"> <?= $i['Ten']?></a> </li>
                         
                     <?php }  ?>
                      
                     
                     
                     
                  </ul>
              </nav>
        </header>