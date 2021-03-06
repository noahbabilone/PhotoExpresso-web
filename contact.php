<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photo Expresso - Présentation</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

 <?php require_once 'nav.php'; ?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="/index.html">PhotoExpresso</a></li>
        <li class="active">Contact</li>
    </ol>
</div>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <form class="form-horizontal" role="form" method="post" action="index.php">
                <div class="jumbotron">
                <div class="form-group">
                    
                    <label for="name" class="col-sm-2 control-label">Nom</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre@mail.com"
                               value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Sujet</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="sujet" placeholder="A propos de ..."
                               value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="human" name="human" placeholder="Votre réponse">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message"></textarea>
                    </div>
                </div>
                    
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
                </div>
                </div>
            </form>
            <!--///-->
        </div>

        <!--<hr class="featurette-divider hidden-lg">-->
        <div class="col-md-5">
            <div style="width: 460px">
                <iframe width="460" height="235"
                        src="http://regiohelden.de/google-maps/map_en.php?width=460&amp;height=235&amp;hl=en&amp;q=115%20Rue%20Notre%20Dame%20des%20Champs%2075006+(PhotoExpresso)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a
                        href="http://www.regiohelden.de/google-maps/">Google Maps Script</a> von <a
                        href="http://www.regiohelden.de/">RegioHelden</a></iframe>
                <br/><span style="font-size: 9px;"><a href="http://www.regiohelden.de/google-maps/"
                                                      style="font-size: 9px;">Google Maps Script</a> by <a
                        href="http://www.regiohelden.de/" style="font-size: 9px;">RegioHelden</a></span></div>
           <div class="jumbotron">
            <h3>Photo Expresso</h3>

            <p class="lead">
                115 Rue Notre Dame des Champs<br>
                Boissy saint léger 94 470<br>
                Tel: 01 118 218 00<br>
                Fax: 01 118 218 00
            </p>
        </div>
    </div>
    </div>

    <hr>
    <!--Footer-->
 <?php include 'footer.php'; ?>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
