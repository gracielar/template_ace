<!DOCTYPE html>
<!--
File Name: index.php
Proyect: Ace in the Hole
Date: 07/28/20
Programmer: Graciela Rodriguez
-->
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">

    <meta name="author" content="Graciela Rodriguez">

    <title>Ace in the Hole</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="css/reset.css" rel="stylesheet" type="text/css">

    <link href="css/helper.css" rel="stylesheet" type="text/css">

    <link href="css/grid.css" rel="stylesheet" type="text/css">

    <link href="css/fontello.css">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <link href="css/styles.less" rel="stylesheet/less" type="text/css">

    <link href="css/palette.less" rel="stylesheet/less" type="text/css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>

<body>
    <div id="wrapper">



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <?php include 'includes/header.inc.html.php'; ?>
        
        <?php include 'includes/nav.inc.html.php'; ?>

        <body>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8" style="background-color: #d3dcde;">

                        <h2>Heading(h2)</h2>

                        <p>This is a paragraph This is a paragraphThis is a paragraphThis is a paragraph<br>
                            This is a paragraph This is a paragraph This is a paragraph This is a paragraph</p>

                        <p>This is a paragraph This is a paragraphThis is a paragraphThis is a paragraph<br>
                            This is a paragraph This is a paragraph This is a paragraph This is a paragraph</p>

                    </div>

                    <div class="col-sm-4">

                        <h3>News</h3>

                        <p>This is a paragraph This is a paragraphThis is a paragraphThis is a paragraph<br>
                            This is a paragraph This is a paragraph This is a paragraph This is a paragraph</p>

                        <p>This is a paragraph This is a paragraphThis is a paragraphThis is a paragraph<br>
                            This is a paragraph This is a paragraph This is a paragraph This is a paragraph</p>

                    </div>



                </div>
            </div>
        </body>

    </div>

    <?php include 'includes/footer.inc.html.php'; ?>

    </div>

</body>

</html>


<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

</script>
