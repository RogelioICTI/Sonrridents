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
            <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
            <title></title>
        </head>
        <?php //include_once 'pages/demo.php'; ?>
        
        <body>
        
        <?php
        include_once 'pages/navbar.php';
        ?>

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
        </script>
    </html>
