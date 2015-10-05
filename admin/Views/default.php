<?php
   $app= App::getInstance();
//      use \Core\Auth\DBAuth;
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PhotoEpresso - <?= $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.css"/>


    <!-- MetisMenu CSS -->
    <link href="../public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../public/dist/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Photo
                <sapn class="text-primary">Expresso</sapn>
            </a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong> Yann</strong>
                                        <span class="pull-right text-muted">
                                            <em>Hier</em>
                                        </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>Thomas</strong>
                                                <span class="pull-right text-muted">
                                                    <em>Avant hier</em>
                                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>Lanoueur</strong>
                                                <span class="pull-right text-muted">
                                                    <em>Samedi</em>
                                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Afficher tous les messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Tâche 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>

                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Tâche 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>

                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Tâche 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>

                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Tâche 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>

                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Voir toutes les taches</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> Nouveau Commentaire
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 Nouveaux Followers
                                <span class="pull-right text-muted small">Il y a 12 minutes</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Messages envoyés
                                <span class="pull-right text-muted small">4 minutes </span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> Nouvelle Tâches
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Serveur Rédemarré
                                <span class="pull-right text-muted small"> Il y a 4 minutes</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Voir tous les alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil Yann</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Paramètres</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="index.php?p=logout"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="orders.php"><i class="fa fa-shopping-cart fa-fw"></i> Commandes<span class="fa 
                            arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="index.php?p=commandes">Afficher toutes</a></li>
                            <li><a href="index.php?p=commandes.en_cours_d_impression">En cours de validation</a></li>
                            <li><a href="index.php?p=commandes.imprimees">Terminées</a></li>
                            <li><a href="index.php?p=commandes.expediees">Expédiée</a></li>
                            <li><a href="index.php?p=commandes.annulees">Annulées</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="products.php"><i class="fa fa-bitbucket fa-fw"></i> Produits<span class="fa 
                            arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="index.php?p=produits" alt="" title="Tous les produits">Tous les Produits</a></li>
                            <li><a href="index.php?p=produit.ajout">Ajouter un produits</a></li>
                            <li><a href="#" title="Toutes les catégories">Gestion des Catégories </a></li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-credit-card fa-fw"></i> Paiements<span class="fa 
                            arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="#">Historiques</a></li>
                            <li><a href="#">En attente</a></li>
                            <li><a href="#">Termines</a></li>
                            <li><a href="#">Gestion de paiement</a></li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user-md fa-fw"></i> Utilisateurs<span class="fa 
                            arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="index.php?p=users">Afficher Tout</a></li>
                            <li><a href="index.php?p=users.clients">Client</a></li>
                            <li><a href="index.php?p=admins">Admin</a></li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i> Messages<span class="fa 
                            arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="#">Non lus</a></li>
                            <li><a href="#">A suivre</a></li>
                            <li><a href="#">Corbeilles</a></li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-globe fa-fw"></i> Gestion de contenu<span class="fa 
                            arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Présentaion</a></li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-info-circle fa-fw"></i> Autres<span class="fa 
                            arrow"></span></a>
                        <ul class="nav nav-second-level">


                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.html">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="icons.html"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span
                                        class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html">Blank Page</a> <!-- class="active"-->
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
        <!-- /.navbar-top-links -->
    </nav>


    <!-- Page Content -->

    <div id="page-wrapper">
        <?= $content; ?>
    </div>
    <!-- End Page Content -->


</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../public/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../public/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataBase Jquery-->
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../public/dist/js/sb-admin-2.js"></script>
<script src="../public/js/app.js"></script>

</body>

</html>
