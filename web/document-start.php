<?php 
ini_set('display_errors', '1');
if(!empty($_GET['game'])) $game=$_GET['game'];
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="application-name" content="Breeds" />
    <meta name="author" content="Murciadevs.tipolisto.es">
    <meta name="description" content="<?php echo $game; ?>">
    <meta name="generator" content="Bootstrap" />
	<meta name="keywords" content="<?php echo $game; ?>" />
    <link rel="icon" type="image/png" href="images/icon.ico" />
	<title><?php echo $game; ?></title>
    <!-- Bootstrap CSS 5.3.3: https://getbootstrap.com/docs/5.3/getting-started/introduction/ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="css/styles.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XF4Q34MQ6T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XF4Q34MQ6T');
    </script>
  </head>
  <body>
  	<div class="container">
        <!--<nav class="navbar navbar-expand-lg navbar-light bg-light bg-primary">-->
        <nav class="navbar navbar-light mb-3" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="nav-link active" href="index.php">Home</a>
                <a class="nav-link active" href="api/scores.php">api-scores</a>
                <a class="nav-link active" href="https://msxvr.com/" target="_blank">MSXVR</a>
                <a class="nav-link active" href="http://msxvr.es/doc/wiki/" target="_blank">MSXVR WIKI</a>
                <a class="nav-link active" href="download.php">Download</a>

                
            </div><!--fin clase container fluid -->
        </nav>
        <h3 class="text-center"><?php echo $game; ?></h3>
