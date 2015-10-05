<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Users</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
       
        <!--col-lg-6--> <div class="col-lg-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-shopping-cart fa-fw"></i> Clients
                    <!--<div class="pull-right">
                        <a href="#" class="btn  btn-success btn-xs">Ajouter</a>
                    </div>-->
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <div class="dataTable_wrapper">
                            <table  class="table table-striped table-hover"  id="dataTables-example">
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
                                                  <td>{$client->idPersonne}</td>
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