$(document).ready(function () {
   


    $(".editObjet").click(function (e) {
        console.log("btn commande");
        e.preventDefault();
        var $this = $(this);
        console.log($this);
        var idCMD = $(".val-" + $this.attr('id')).val();
        /*
         var idCMD = $this.closest("tr").find("td").first().val();
         */

        console.log(idCMD);

        $.post("ajaxphp/ajax.php", {
            action: "commandeEdit",
            idCommande: idCMD
        }, function (data) {
            //permet d'afficher le retour ajax                  
            $("#idContent").html(data);
        });
    });


    /*
     * Suppression des commandes, des client, des formats 
     * */
    $(".suppObjet").click(function (e) {
        e.preventDefault();
        var $this = $(this);
        var nameAction = $this.attr("name"),
            titreModal = "Titre Modal",
            contenuModal = "Contenu Modal",
            idObjet = $(".val-" + $this.attr('id')).val();
        
        

        console.log(idObjet);
        console.log(nameAction);
        switch (nameAction) {
            case "suppressionCommande":
                titreModal = " de la commande N°" + idObjet;
                contenuModal = "cette commande";
                break;
            case "suppressionClient":
                titreModal = "du client N°" + idObjet;
                contenuModal = "cet client";
                break;
            case "suppressionFormat":
                titreModal = "du Format N°" + idObjet;
                contenuModal = "cet format";
                break;
        }

        $.get("ajaxphp/suppression.php", {
                "titreModal": titreModal,
                "contenuModal": contenuModal,
                "nameAction": nameAction,
                "idObjet": idObjet
            }
        ).done(function (data) {
                $("#contenuSupp").html(data);
            });
    });

    $("#confirmSupp").click(function (e) {

        e.preventDefault();
        var idObjet = $("#idObjet-Delete").val();
        var nameAction = $.trim($("#idObjet-Delete").attr("name"));
        var action = "", message = "";
        if (idObjet != -1) {
            console.log(nameAction + "  -- " + idObjet);
            switch (nameAction) {
                case "suppressionCommande":
                    action = "commande"
                    message = "<b>La commande N°" + idObjet + "</b> a été supprimée !!"

                    break;
                case "suppressionClient":
                    action = "client";
                    message = "<b>Le client N°" + idObjet + "</b> a été supprimé !!"

                    break;
                case "suppressionFormat":
                    action = "format";
                    message = "<b>Le format N°" + idObjet + "</b> a été supprimée !!"

                    break;
                default:
                    action = "vide";
                    message = "vide"
                    break;

            }

            console.log(action);
            $.post("ajaxphp/ajax.php", {
                action: action + "Supp",
                idObjet: idObjet

            }, function (resultat) {
                if (resultat) {
                    $('#suppObjet').modal('hide');

                    if ($(".alert-success").hasClass("hide")) {
                        $(".message-success").html(message);
                        $(".alert-success").removeClass("hide");
                        $(".alert-success").delay(10000).fadeOut(300, function () {
                            $(this).addClass("hide");
                        });

                    } else {
                        $(".message-success").html(message);
                        $(".alert-success").delay(10000).fadeOut(1000, function () {
                            $(this).addClass("hide");
                        });

                    }
                    $("#ligne-" + action + "-" + idObjet).fadeOut(1000, function () {
                        $(this).remove();
                    });

                } else {
                    console.log("Erreur de suppression action:" + action + " idObjet :" + idObjet);
                }
            });
        }// verif idObj


    });


    var oTableCommande = $('#dataTables-example').DataTable({
        "aoColumns": [
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


});

