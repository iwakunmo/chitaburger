<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <?php wp_head() ?>
</head>

<body>
    <!-- header -->
    <header class="header" id="header">
        <div class="gen-inner">
            <nav class="header__menu">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')) ?>">HOME</a></li>
                    <li><a href="<?php echo esc_url(home_url('/menu/')) ?>">MENU</a></li>
                    <li><a href="<?php echo esc_url(home_url('/gallery/')) ?>">GALLERY</a></li>
                    <li><a href="<?php echo esc_url(home_url('/news/')) ?>">NEWS</a></li>
                    <li><a href="<?php echo esc_url(home_url('/location/')) ?>">LOCATION</a></li>
                    <li><a class="inpage-link--sns" href="<?php echo esc_url(home_url('#sns')) ?>">SNS</a></li>
                </ul>
            </nav>
            <div class="sp-header">
                <div class="header__logo sp-only">
                    <h1><a href="<?php echo esc_url(home_url('/')) ?>">CHITA BURGER</a></h1>
                </div>
                <div class="hamburger sp-only">
                    <div class="hamburger-line first"></div>
                    <div class="hamburger-line second"></div>
                    <div class="hamburger-line third"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->