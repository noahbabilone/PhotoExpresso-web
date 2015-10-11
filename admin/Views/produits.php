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
        <div class="col-lg-12">
            <?php include ROOT."/public/includes/notifications.php";  ?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bitbucket"></i> Formats
                    <div class="pull-right">
                        <button type='button' class='btn btn-xs btn-success btn-ajout' id="AddFormat"
                                data-toggle='modal'
                                name='editFormat' data-target='#editObjet'>Ajouter
                        </button>
                    </div>
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <div class="dataTable_wrapper">
                            <table
                                class="table table-striped table-hover"
                                id="dataTables-format">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Lib Format</th>
                                    <th>Hauteur</th>
                                    <th>Prix</th>
                                    <th>Type format</th>
                                    <th>Format papier</th>
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
                                                  <td>{$format->finition}-{$format->couleur}</td>
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

<script>
     $('#dataTables-format').DataTable({
        "aoColumns": [
            {"sWidth": "50px"},
            {"sWidth": "50px"},
            {"sWidth": "50px"},
            {"sWidth": "50px"},
            {"sWidth": "50px"},
            {"sWidth": "50px"},
            {"sWidth": "50px", "bSortable": false}
        ],
        responsive: true,
        stateSave: true,
        "processing": true,
        //"bServerSide": true,

        "language": {
            "sProcessing": "Traitement en cours...",
            "sSearch": "Recherche globale&nbsp;:",
            "sLengthMenu": "Afficher  _MENU_ &eacute;l&eacute;ments",
            "sInfo": "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            "sInfoEmpty": "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            "sInfoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            "sInfoPostFix": "",
            "sLoadingRecords": "Chargement en cours...",
            "sZeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
            "sEmptyTable": "Aucune donnée disponible dans le tableau",
            "oPaginate": {
                "sFirst": "Premier",
                "sPrevious": "Pr&eacute;c&eacute;dent",
                "sNext": "Suivant",
                "sLast": "Dernier"
            }

        }
    });
</script>