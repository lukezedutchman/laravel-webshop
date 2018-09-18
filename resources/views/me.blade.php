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
                background-color: pink;
            }

            a {
                color: dimgray;
                padding-right: 10px;
                text-decoration: none;
            }

            .apps a:last-child {
                padding-right: 0px;
            }

            .websites a:last-child {
                padding-right: 0px;
            }</style>
    </head>
    <body>
        <h1 class="header"><marquee>{{ $name }}</marquee></h1>
        <h2><marquee>{{ $email }}</marquee></h2>
        <h3><marquee>{{ $description }}</marquee></h3>
        <ul class="interests">
            @foreach ($interests as $interest )
                <li>{{ $interest }}</li>
            @endforeach
        </ul>

        <p>Luke</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eius exercitationem iste itaque molestiae mollitia repudiandae. At commodi cupiditate dolorum eos excepturi expedita quas, repudiandae soluta tenetur ullam. Nobis, nulla.</p>
        <P>email</P>
        <p>lukethie28@outlook.com</p>
    </body>
</html>