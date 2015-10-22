  <!-- Navigation -->
        <div class="container-fluid">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Photo<span class="text-primary">Expresso</span></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
		<?php if(!isset($_SESSION['idPersonne'])) { ?>
            <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Premium Bootstrap Themes &amp; Templates"><i class="glyphicon glyphicon-user"></i><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="connexion.php"><i class="glyphicon glyphicon-user"></i> Connexion</a></li>
                                <li><a href="Inscription.php"><i class="glyphicon glyphicon-info-sign"></i> Inscription</a></li>
                            </ul>
                        </li>
                    </ul>
					<?php } else { ?>
					            <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Premium Bootstrap Themes &amp; Templates"><i class="glyphicon glyphicon-user"></i><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <!--  <li><a href="#s"><i class="glyphicon glyphicon-user"></i> Mon Compte</a></li> -->
                                <li><a href="deconnexion.php"><i class="glyphicon glyphicon-off"></i> Déconnexion</a> </li>
                            </ul>
                        </li>
                    </ul>
					<?php }?>
            <ul class="nav navbar-nav navbar-left">
            
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Categories</a>
            </li>
            <li><a href="presentation.php">Présentation</a></li>
            <li><a href="contact.php">Nous Contactez</a></li>
			            
            
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
            <li><a href="1tirage.php">Dévloppement Photo</a></li>
                <li><a href="2Polaroid.php">Polaroid</a></li>
                <li><a href="3zoom.php">Agrandissement Photo</a></li>
                <li><a href="4poster.php">Poster</a></li>
                <li><a href="5acrylique.php">Acrylique</a></li>
                <li><a href="6panorama.php">Panorama</a></li>                                
          </ul>
            
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
 
       
</div>