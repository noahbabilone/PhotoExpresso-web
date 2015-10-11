<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Produits</h1>
        </div>
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="../../index.php">Accueil PhotoExpresso</a></li>
                <li><a href="../index.php">Dashboard</a></li>
                <li class="active">Produits</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-shopping-cart fa-fw"></i> Produits
                    <div class="pull-right">
                        <a href="#" class="btn  btn-success btn-xs">Ajouter</a>
                    </div>
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
                                    <th>Lib Format</th>
                                    <th>Dimension</th>
                                    <th>Prix</th>
                                    <th>Libelle Type</th>
                                    <th>Actions</th>
                                </tr>
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
                                                        name='editFormat' data-target='#editObjet'   >
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->