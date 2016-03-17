<!DOCTYPE html>
<html lang="es">
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <link href="css/theme.css" rel="stylesheet" />
            <link href="css/extras.css" rel="stylesheet" />

            <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
            <title></title>
        </head>
        <?php //include_once 'pages/demo.php'; ?>

        <body>
            
            <?php include_once 'pages/navbar.php'; ?>
            <?php include_once 'pages/carrusel.php'; ?>
            <?php $titulo_division = 'Tú mereces una odontología más humana'; ?>
            <?php include 'pages/division_azul.php'; ?>
            <?php include_once 'pages/servicios.php';?>
            <?php include_once 'pages/division_fondoanimado_azul.php';?>
            <?php $titulo_division = 'Tecnología láser'; ?>
            <?php include 'pages/division_azul.php'; ?>
            <?php include 'pages/redes.php'; ?>
            <?php $titulo_division = 'Bocas sanas y libres de caries'; ?>
            <?php include 'pages/division_azul.php'; ?>
            
            <?php include 'footer.php'; ?>

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

        </body>

        <script>
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover();
                $('[data-toggle="tooltip"]').tooltip();

            });

            $(document).scroll(function (e) {
                var scrollTop = $(document).scrollTop();
                if (scrollTop > 70) {
                    console.log(scrollTop);
                    $('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
                } else {
                    $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
                }
            });
        </script>
    </html>
