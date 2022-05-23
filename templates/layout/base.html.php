<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT."css/bootstrap.css" ?>">
    
    <title>Document</title>
</head>
<body class="">
<?php require_once($Constantes::ROOT()."templates/layout/navbar.html.php"); ?>

   <?= $content_for_views ?> 

<script src="<?= $Constantes::WEB_ROOT."js/bootstrap.js"?>"></script>
</body>
</html>