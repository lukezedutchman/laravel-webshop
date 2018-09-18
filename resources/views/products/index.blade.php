<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=100%, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Icecream Webshop</h1>
    <ul class="products">
        [[$products]]
        @foreach ($products as $product )
            <li>{{ $product->name}}: {{$product->descriptiion}}</li>
        @endforeach
    </ul>
</body>
</html>