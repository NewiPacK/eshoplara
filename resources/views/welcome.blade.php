<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard | E-Shopper</title>
    <link href="http://localhost/eshoplara/public/eshop/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/eshoplara/public/eshop/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost/eshoplara/public/eshop/css/prettyPhoto.css" rel="stylesheet">
    <link href="http://localhost/eshoplara/public/eshop/css/price-range.css" rel="stylesheet">
    <link href="http://localhost/eshoplara/public/eshop/css/animate.css" rel="stylesheet">
    <link href="http://localhost/eshoplara/public/eshop/css/main.css" rel="stylesheet">
    <link href="http://localhost/eshoplara/public/eshop/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://localhost/eshoplara/public/eshop/js/html5shiv.js"></script>
    <script src="http://localhost/eshoplara/public/eshop/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="http://localhost/eshoplara/public/eshop/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/eshoplara/public/eshop/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/eshoplara/public/eshop/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/eshoplara/public/eshop/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://localhost/eshoplara/public/eshop/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    @include("inc.menu")

    @yield("slider")

<section>
    @yield("left")

    @yield("content")

</section>

    @include("inc.footer")




