<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php getFile('/dist/index.css'); ?>">
</head>
<body>
    <header class="header">
        <a href="<?php echo(home_url()) ?>" class="header_logo">
            <img src="<?php getFile('/img/startup.svg'); ?>" alt="logo" />
        </a>
        <nav class="header_menu">
            <ul>
                <li><a href="#">Пункт меню 1</a></li>
                <li><a href="#">Пункт меню 2</a></li>
            </ul>
        </nav>
    </header>