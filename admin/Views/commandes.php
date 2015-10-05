<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-11">
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
                                    echo "<tr>
                                                      <td>{$cmd->idCommande}</td>
                                                      <td>{$cmd->nom} - {$cmd->prenom}</td>
                                                      <td>{$cmd->quantite}</td>
                                                      <td>{$cmd->prixTTC} €</td>
                                                      <td>{$cmd->libelle}</td>
                                                    <td>
                                                    <span>
                                                        <a href='index.php?g=commande&id={$cmd->idCommande}' class='btn btn-default btn-xs btn-info'
                                                        data-toggle=\"modal\" data-target=\".modifier-commande\" > 
                                                        <i class='fa fa-cog'></i></a>      
                                                    </span>
                                                    <span>
                                                        <a href='#' class='btn btn-default btn-xs btn-danger'> <i 
                                                         class='fa fa-trash-o'></i></a>       
                                                    </span>
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


   
  

<div class="modal fade modifier-commande">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->