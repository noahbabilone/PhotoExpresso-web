<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="../../index.php">Accueil PhotoExpresso</a></li>
                <li><a href="../index.php">Dashboard</a></li>
                <li class="active">Commandes</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-shopping-cart fa-fw"></i> Commandes
                    <!--<div class="pull-right">
                        <a href="#" class="btn  btn-success btn-xs">Ajouter</a>
                    </div>-->
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <div class="dataTable_wrapper">
                            <table
                                class="table table-striped table-hover"
                                id="dataTables-example">
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
                                foreach ($commandes as $cmd) {
                                    echo "<tr id='ligne-commande-{$cmd->idCommande}'>
                                                      <td>{$cmd->idCommande}</td>
                                                      <td>{$cmd->nom} - {$cmd->prenom}</td>
                                                      <td>{$cmd->quantite}</td>
                                                      <td>{$cmd->prixTTC} €</td>
                                                      <td>{$cmd->libelle}</td>
                                                    <td>
                                                        <button type='button'  class='btn btn-xs btn-info editObjet' 
                                                           id='cmd-{$cmd->idCommande}' data-toggle='modal' 
                                                            name='editCommande' data-target='#editObjet'   >
                                                           <i class='fa fa-cog'></i>
                                                            </button>
                                                            <input type='hidden' class='val-cmd-{$cmd->idCommande}' 
                                                            value='{$cmd->idCommande}' />
                                                            
                                                            <button type='button' class='btn btn-xs btn-danger suppObjet' name='suppressionCommande' id='cmd-{$cmd->idCommande}' data-toggle='modal' data-target='#suppObjet'>
                                                             <i class='fa fa-trash-o'></i>  
                                                        </button>
                                                     </td>
                                            </tr>";

                                }


                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->

                    </div>

                </div>
            </div>

        </div>
        <!--col-lg-6-->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->


<script type="text/javascript">
            $('#example').DataTable({
            "aoColumns": [
                {"aTargets": [1]},
                {"aTargets": [2]}, /* url-Img */
                {"aTargets": [3]}
            ],
            "processing": true,
            "serverSide": true,
            "sAjaxSource": "listes_commandes.php",


        });
    
</script>

