<?php
/**
 * Created by PhpStorm.
 * User: Luke zedutchman PC
 * Date: 11-9-2018
 * Time: 13:54
 */
?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Website of Luke Thie</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <style>body {
                text-align: center;
                font-family: Verdana;
                background-color: #fedde1;
            }

        </style>
    </head>
    <body>
        <h1>Choose a person</h1>
        <ul class="interests">
            @foreach ($peoples as $people )
                <a>{{ $peoples }}</a>
            @endforeach
        </ul>
    </body>
</html>