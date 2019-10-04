<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--User CSS-->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $title?></title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
          </div>          
              <div class="row">
            <div class="header__inner">
              <div class="header__logo">
                <img src="/img/bender.png" width="80" alt="Logo">
              </div>
              <a class="navbar-brand">LifeBlog</a>
            </div>
          </div>
          <nav class="nav nav-pills flex-column flex-sm-row">
              <a class="flex-sm-fill text-sm-center nav-link active" href="#">Active</a>
              <a class="flex-sm-fill text-sm-center nav-link" href="#">Longer nav link</a>
              <a class="flex-sm-fill text-sm-center nav-link" href="#">Link</a>
              <a class="flex-sm-fill text-sm-center nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </nav>
          
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success mr-2 my-2 my-sm-0" type="submit">
              Search
            </button>
            <?php if (empty($_SESSION['id'])): ?>
                <a class="btn btn-success mr-1" href="auth.php">Вход</a>    
                <a class="btn btn-success" href="reg.php">Регистрация</a>
            <?php else: ?>
                <a class="btn btn-success" href="exit.php">Выход</a>
            <?php endif?>
          </form>
        </nav>
        </div>
        
        

      