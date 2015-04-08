<?php
include_once "lib/Parsedown.php";
include_once "lib/Spyc.php";
$content = spyc_load_file("./content/main.yaml");
error_log(print_r($content,true));
$Parsedown = new Parsedown();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>4D Nucleome</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <div class="bg"><div class="bg-inner"></div></div>
    <div class="container">
        <div class="row">
            <header class="col-xm-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h1>4-Dimensinal Nucleome Portal</h1>
                <p class="note"><?php echo $content['note'] ?></p>
                <a href="http://commonfund.nih.gov/4Dnucleome/index" class="btn btn-theme">4DN Program Description</a>
            </header>
            <figure class="banner col-sm-12 col-md-8 col-md-offset-2">
                <img class="img-responsive" src="img/4d-nucleome.jpg">
                <figcaption><?php echo $content['caption'] ?></figcaption>
            </figure>
            <section class="description col-sm-12 col-md-10 col-md-offset-1">
            <?php
                echo $Parsedown->text($content['main']);
            ?>
            </section>
            <section class="references col-xs-12">
                <?php
                foreach($content['cite'] as $cite) {
                    echo '<div class="citation">';
                    echo $Parsedown->text($cite);
                    echo '</div>';
                }
                ?>
            </section>
        </div>
    </div> <!-- /container -->
    <script src="js/vendor/respond.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
