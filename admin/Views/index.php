<?php
//var_dump($commandes);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="../../index.php">Accueil PhotoExpresso</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <div class="col-lg-12">
            <?php include ROOT."/public/includes/notifications.php";  ?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-shopping-cart fa-fw"></i> Commandes
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="index.php?p=commandes" class="btn  btn-default btn-xs">Afficher Tout</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom Client</th>
                                <th>Quantité(s)</th>
                                <th>Prix HTTC</th>
                                <th>Etat</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($commandes)) {
                                foreach ($commandes as $cmd) {
                                    echo "<tr  id='ligne-commande-{$cmd->idCommande}'>
                                                  <td id='td-cmd-id-{$cmd->idCommande}'>{$cmd->idCommande}</td>
                                                  <td id='td-cmd-nomP-{$cmd->idCommande}'>{$cmd->nom} - 
                                                  {$cmd->prenom}</td>
                                                  <td id='td-cmd-quantite-{$cmd->idCommande}'>{$cmd->quantite}</td>
                                                  <td id='td-cmd-prixTTC-{$cmd->idCommande}'>{$cmd->prixTTC} €</td>
                                                  <td id='td-cmd-libelle-{$cmd->idCommande}'>{$cmd->libelle}</td>
                                                <td>
                                                    <button type='button'  class='btn btn-xs btn-info editObjet' 
                                                            id='cmd-{$cmd->idCommande}' data-toggle='modal' name='commandeEdit' data-target='#editObjet'   >
                                                       <i class='fa fa-cog'></i>
                                                        </button>
                                                        <input type='hidden' class='val-cmd-{$cmd->idCommande}' 
                                                        value='{$cmd->idCommande}' />
                                                        
                                                        <button type='button'  class='btn btn-xs btn-danger suppObjet' name='suppressionCommande' id='cmd-{$cmd->idCommande}'
                                                        data-toggle='modal' data-target='#suppObjet'>
                                                         <i class='fa fa-trash-o'></i>  
                                                    </button>
                                             </td>
                                        </tr>";

                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
        <!--col-lg-6-->
<div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user"></i> Clients
                            <span class="txt-right"> 
                                <a href="index.php?p=users" class="btn  btn-default btn-xs">Afficher Tout</a>
                            </span>
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Ville</th>
                                <th>Code P</th>
                                <th>Pays</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($clients)) {
                                foreach ($clients as $client) {
                                    echo "<tr id='ligne-client-{$client->idClient}'>
                                                  <td>{$client->idClient}</td>
                                                  <td>{$client->nom}</td>
                                                  <td>{$client->prenom}</td>
                                                  <td>{$client->ville}</td>
                                                  <td>{$client->codePostal}</td>
                                                  <td>{$client->pays}</td>
                                                <td>
                                                <button type='button'  class='btn btn-xs btn-info editObjet'  
                                                        id='client-{$client->idClient}' data-toggle='modal' 
                                                        name='clientEdit' data-target='#editObjet'   >
                                                   <i class='fa fa-cog'></i>
                                                    </button>
                                                    <input type='hidden' class='val-client-{$client->idClient}' 
                                                    value='{$client->idClient}' />
                                                    
                                                    <button type='button'  class='btn btn-xs btn-danger suppObjet' 
                                                    name='suppressionClient' id='client-{$client->idClient}'
                                                    data-toggle='modal' data-target='#suppObjet'>
                                                     <i class='fa fa-trash-o'></i>  
                                                </button>
                                             </td>
                                        </tr>";

                                }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
        
        <!-- </div>-->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bitbucket"></i> Formats
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                    data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="index.php?p=produits">Afficher Tout</a>
                                </li>
                                <li>
                                    <a href="#" class='btn-ajout' id="optionFormat"  data-toggle='modal'
                                name='editFormat' data-target='#editObjet'>Ajouter </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Lib Format</th>
                                <th>Dimension</th>
                                <th>Prix</th>
                                <th>Libelle Type</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($formats)) {
                                foreach ($formats as $format) {
                                    echo "<tr id='ligne-format-{$format->idFormats}'>
                                                  <td>{$format->idFormats}</td>
                                                  <td>{$format->libelleFormat}</td>
                                                  <td>{$format->hauteur}</td>
                                                  <td>{$format->prix}</td>
                                                  <td>{$format->libelle}</td>
                                                <td>
                                                 <button type='button'  class='btn btn-xs btn-info editObjet'  
                                                        id='format-{$format->idFormats}' data-toggle='modal' 
                                                        name='formatEdit' data-target='#editObjet'   >
                                                   <i class='fa fa-cog'></i>
                                                    </button>
                                                    <input type='hidden' class='val-format-{$format->idFormats}' 
                                                    value='{$format->idFormats}' />
                                                    
                                                    <button type='button'  class='btn btn-xs btn-danger suppObjet' 
                                                    name='suppressionFormat' id='format-{$format->idFormats}'
                                                    data-toggle='modal' data-target='#suppObjet'>
                                                     <i class='fa fa-trash-o'></i>  
                                                </button>
                                             </td>
                                        </tr>";

                                }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--col-lg-6-->
        <!--col-lg-6-->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-money"></i> Paiements
                            <span class="txt-right"> 
                                <a href="#" class="btn  btn-default btn-xs">Afficher Tout </a>
                            </span>
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Ville</th>
                                <th>Code P</th>
                                <th>Pays</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($clients)) {
                                foreach ($clients as $client) {
                                    echo "<tr>
                                                  <td>{$client->idClient}</td>
                                                  <td>{$client->nom}</td>
                                                  <td>{$client->prenom}</td>
                                                  <td>{$client->ville}</td>
                                                  <td>{$client->codePostal}</td>
                                                  <td>{$client->pays}</td>
                                                <td>
                                                <span>
                                                    <a href='#' class='btn btn-default btn-xs btn-info'> 
                                                    <i class='fa fa-cog'></i></a>       
                                                </span>
                                                <span>
                                                    <a href='#' class='btn btn-default btn-xs btn-danger'> <i 
                                                     class='fa fa-trash-o'></i></a>       
                                                </span>
                                             </td>
                                        </tr>";

                                }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--col-lg-6-->
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
