<?php
session_start();
require_once'model.php';


$bdd = bdd();
if (isset($_POST['login']) && ($_POST['password'])) {
    $login = $_POST['login'];
    $Password = sha1($_POST['password']);
    

    $connexion = new Connexion($login, $Password);
    $verif = $connexion->verification_connexion();
     
    if ($verif == "ok") {
        if ($connexion->session()) {
            header('Location: index.php');
        }
    } else {
        $erreur = $verif;
    }
}
?>
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

<?php include 'nav.php'; ?>

<header class="sb-page-header">
    <div class="container">
        <h1>Impression photo </h1>

        <p>Connexion</p>
    </div>
</header>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="/Front_Office/public_html/index.html">PhotoExpresso</a></li>
        <li class="active">Connexion</li>
    </ol>

<div id="result"> </div>

<!-- Page Content -->

<div class="container">
    <div class="row">

            <form class="form-horizontal" role="form" action="#" method="post"  >  
                
                <div class="form-group">
                    <label for="login" class="col-sm-2 control-label">login</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="login" name="login" placeholder="Votre login">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">password</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Votre password">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="soumettre" name="connecter" type="submit" value="connection" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        
                    </div>
                </div>
            </form>
   </div>
                <?php

if(isset($erreur)) {
echo $erreur;
}
?>
  
       <div id="result"> </div>

        <!--<hr class="featurette-divider hidden-lg">-->
       
      
    <br>
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
  <script src="//code.jquery.com/jquery-1.11.3.min.js"> </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

