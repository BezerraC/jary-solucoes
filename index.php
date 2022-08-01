<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jary Soluções Sustentáveis</title>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Favicon-->
</head>
<body>
    <div class="container">
        <header>
            <?php include('header.php'); ?>
        </header>
        <div role="main" id="main">
            <?php include($page_file); ?>
        </div>
        <footer class="clearfix shadow-white">
            <?php include('footer.php'); ?>
        </footer>
    </div>
</body>
</html>