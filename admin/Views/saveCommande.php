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
                    <div class="pull-right">
                        <a href="#" class="btn  btn-success btn-xs">Ajouter</a>
                    </div>
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-hover" id="tableCommandes">
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
                                                    <a href='index.php?g=commande&id=\"{$cmd->idCommande}\"' 
                                                    class='btn btn-default btn-xs btn-info'> 
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


<script>
    var oDataTableCommandec = $('#tableCommandes').dataTable({
        "aoColumns": [
            {"sWidth": "50px"}, /* idCommande */
            {"sWidth": "50px"}, /* libelle */

            {"sWidth": "50px"}, /* nom */
            {"sWidth": "50px"}, /* prenom */
            {"sWidth": "50px"}, /* codePostal */
            {"sWidth": "50px"}, /* quantite */
            {"sWidth": "50px"}, /* prixTTC */
            {"sWidth": "50px"}, /* idClient */
            {"sWidth": "50px"}, /* adresseFacturation */
            {"sWidth": "50px"}, /* codePostalFacturation */
            {"sWidth": "50px"}, /* villeFacturation */
            {"sWidth": "50px"}, /* paysFacturation */
            {"sWidth": "50px"}, /* commentaireLivraison */
            {"sWidth": "50px"}, /* AdidLivraisonmin */
            {"sWidth": "50px"}, /* bonLivraison */
            {"sWidth": "50px"} /* lienSuivi */


        ],

        "oLanguage": {             // traduction 
            "sProcessing": "Traitement en cours...",
            "sSearch": "Recherche globale&nbsp;:",
            "sLengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
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
        },
        "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tous"]], // Lsite d'affichage
                    "bInfo": false,
           "bFilter": false,
           "bLengthChange": false,
           "bProcessing": true,
			"bStateSave": true,
			"bServerSide": true,
			"sAjaxSource": "Models/DatabaseAjax/listes_Commandes.php",
			"fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                console.log(aData);
            }// function de la fonction 


    });

    console.log(oDataTableCommandec);

</script>
