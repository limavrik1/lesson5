<?php
/**
 * Created by PhpStorm.
 * User: Andrius Mikelionis
 * Date: 2/21/2017
 * Time: 12:09 AM
 */
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="телефонная книга">
    <meta name="keywords" content="сайт, контакты, html, css">
    <meta name="author" content="Андрюс Микялёнис">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">

    <title>Телефонная книга</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
<!--[if lte IE 9]>
<p>
    Ваш браузер устарел! Скачайте новую версию <a href="http://browsehappy.com/locale=ru_ru">браузера</a>
</p>
<![endif]-->
<div class="wrapper wrapper_title">
    <div class="db__info">
        <table class="db__table">
            <thead class="db__thead">
            <tr class="db__th-row">
                <th class="db__th-cell">Имя</th>
                <th class="db__th-cell">Фамилия</th>
                <th class="db__th-cell">Адрес</th>
                <th class="db__th-cell">Телефон</th>
            </tr>
            </thead>
            <tbody>
            <? foreach (getProfile() as $item): ?>
                <tr class="db__tb-row">
                    <td class="db__table-cell"><?= $item['firstName'] ?></td>
                    <td class="db__table-cell"><?= $item['lastName'] ?></td>
                    <td class="db__table-cell"><?= $item['address'] ?></td>
                    <td class="db__table-cell"><?= $item['phoneNumber'] ?></td>
                </tr>
            <? endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>