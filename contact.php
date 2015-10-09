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

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Photo<span class="text-primary">Expresso</span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.html">
                        <i class="glyphicon glyphicon-home"></i>
                    </a></li>
                <li><a href="presentation.php">Présentation</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" title="Connexion"> Connexion</a></li>
                <li><a href="#" title="Se connecter à mon compte">Inscription</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                       title="Premium Bootstrap Themes &amp; Templates"><i class="glyphicon glyphicon-user"></i><b
                            class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#s"><i class="glyphicon glyphicon-user"></i> Mon Compte</a></li>
                        <li><a href="#s"><i class="glyphicon glyphicon-info-sign"></i> Autres</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-off"></i> Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

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
            <h3>Photo Expresso</h3>

            <p class="lead">
                115 Rue Notre Dame des Champs<br>
                Boissy saint léger 94 470<br>
                Tel: 01 118 218 00<br>
                Fax: 01 118 218 00
            </p>
        </div>
    </div>

    <hr>
    <!--Footer-->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; <a href="group1.estiam.com">Estiam Groupe-1 </a>. 2015</p>
            </div>
        </div>
    </footer>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
