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
                                class="table table-striped table-hover" id="table-commandes">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom Client</th>
                                    <th>Prenom Client</th>
                                    <th>Quantité(s)</th>
                                    <th>Prix TTC</th>
                                    <th>Frais Livraison</th>
                                    <th>Adresse Fact</th>
                                    <th>Ville Fact</th>
                                    <th>Pays Fact</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

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
<script src="//cdn.datatables.net/plug-ins/1.10.9/filtering/type-based/accent-neutralise.js"></script>

<script type="text/javascript">
    $('#table-commandes').DataTable({
        "aoColumns": [
            {"aTargets": [0]},//Idcommande
            {"aTargets": [1]},
            {"aTargets": [2]}, /* url-Img */
            {"aTargets": [3]},
            {"aTargets": [4]},
            {"aTargets": [5]},
            {"aTargets": [6]},
            {"aTargets": [7]},
            {"aTargets": [8]},
            null,//{"aTargets": [9]},
            {"aTargets": [10]}
        ],
       
        "processing": false,
        "serverSide": false,
        "sAjaxSource": "../Models/DatabaseAjax/listes_commandes.php",
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            var etatCommande = "";
            //0: En attente d'Impression, 1: Imprimée , 2: Expédiée

            if (aData[9] == '0') {
                etatCommande = "En attente d'Impression";
            } else if (aData[9] == '1') {
                etatCommande = "Imprimee";
            } else if (aData[9] == "3") {
                etatCommande = "Expediee";
            } else if (aData[9] == "4") {
                etatCommande = "Annulee";
            }


            $('td:eq(9)', nRow).html(etatCommande);
            contenu = '<button type="button"  class="btn btn-xs btn-info editObjet"  id="cmd-' + aData[0] + '"';
            contenu += ' data-toggle="modal" name="commandeEdit" data-target="#editObjet">';
            contenu += '<i class="fa fa-cog"></i></button>';
            contenu += '<input type="hidden" class="val-cmd-' + aData[0] + '" value="' + aData[0] + '" />';
            contenu += '  <button type="button"  class="btn btn-xs btn-danger suppObjet" name="suppressionCommande"';
            contenu += 'id="cmd-' + aData[0] + '" data-toggle="modal" data-target="#suppObjet"><i class="fa fa-trash-o"></i></button>';
            $('td:eq(10)', nRow).html(contenu);

        }, "bInfo": false,
        "bPaginate": true,
        "bFilter": false,

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


<button type="button" class="btn btn-xs btn-info editObjet" id="cmd-29" data-toggle="modal" name="editCommande"
        data-target="#editObjet"><i class="fa fa-cog"></i></button><input type="hidden" class="val-cmd-29" value="29"/>
<button type="button" class="btn btn-xs btn-danger suppObjet" name="suppressionCommande" id="cmd-29" data-toggle="modal"
        data-target="#suppObjet"><i class="fa fa-trash-o"></i></button>
