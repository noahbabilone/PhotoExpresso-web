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

        <p>Inscription</p>
    </div>
</header>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="/Front_Office/public_html/index.html">PhotoExpresso</a></li>
        <li class="active">Inscription</li>
    </ol>

<div id="result"> </div>

<!-- Page Content -->

<div class="container">
    <div class="row">
        
            <form class="form-horizontal" role="form" action="Inscription2_BDD.php" method="post"  >  
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nom</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="First_name" class="col-sm-2 control-label">Prénom</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="First_name" name="First_name" placeholder="Votre prénom" value="">
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
                    <label for="adresse" class="col-sm-2 control-label">Adresse</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="code_postal" class="col-sm-2 control-label">Code postal</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Votre code postal">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ville" class="col-sm-2 control-label">Ville</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre ville">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pays" class="col-sm-2 control-label">Pays</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pays" name="pays" placeholder="Votre pays">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tel" class="col-sm-2 control-label">Téléphone portable</label>

                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="num_tel" name="num_tel" placeholder="Votre numeros téléphone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telephone_fixe" class="col-sm-2 control-label">Téléphone fixe</label>

                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="num_fixe" name="num_fixe" placeholder="Votre numeros fixe">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="login" class="col-sm-2 control-label">login</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="login" name="login" placeholder="Votre login">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">password</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Votre password">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="soumettre" name="soumettre" type="submit" value="S'inscrire" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        
                    </div>
                </div>
            </form>
   </div>
        
       
 
       <div id="result"> </div>

        <!--<hr class="featurette-divider hidden-lg">-->
       
        

    <hr>
    <!--Footer-->
<?php include 'footer.php'; ?>
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
