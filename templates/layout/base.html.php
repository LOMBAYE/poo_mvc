<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT."css/bootstrap.css" ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT."css/style.css" ?>">
    <title>Document</title>
</head>
<body class="">
    <div class="container d-flex justify-content-center flex-column ">   
        <?php require_once($Constantes::ROOT()."templates/layout/navbar.html.php"); ?>

        <?= $content_for_views ?> 
    </div>
<script src="<?= $Constantes::WEB_ROOT."js/bootstrap.js"?>"></script>
</body>
</html>