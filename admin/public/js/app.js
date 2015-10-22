$(document).ready(function () {


    $(".editObjet").click(function (e) {
        e.preventDefault();
        var $this = $(this);
        console.log($this);
        var idObjet = $(".val-" + $this.attr('id')).val(),
            nameAction = $this.attr("name")

            ;
        /*
         var idCMD = $this.closest("tr").find("td").first().val();
         */

        console.log(idObjet);

        $.post("ajaxphp/ajax.php", {
            action: nameAction,
            idObjet: idObjet
        }, function (data) {
            //permet d'afficher le retour ajax                  
            $("#idContent").html(data);
        });
    });

    $(".btn-ajout").click(function (e) {
        e.preventDefault();

        var nameAction = $(this).attr("id");

        console.log(nameAction);
        e.preventDefault();
        $.post("ajaxphp/ajax.php", {
            action: nameAction
        }, function (data) {
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

    $("#confirmEdit").click(function (e) {

        var nameAction = $.trim($("#idAction").attr("name")),
            idObjet = -1;
        console.log("confirmEdit");

        switch (nameAction) {
            case "addFormat-insert":
                var titre = $("#inputTitreFormat").val(),
                    hauteur = $("#inputHauteurFormat").val(),
                    largeur = $("#inputLargeurFormat").val(),
                    prix = $("#inputPrixFormat").val(),
                    idTypePapier = $("#inputTypePapierFormat").val(),
                    idTypeFormat = $("#inputTypeFormat").val();

                if (titre != "" && hauteur != "" && largeur != "" && idTypePapier != "" && idTypeFormat != "") {
                    $.post("ajaxphp/ajax.php", {
                        action: nameAction,
                        titre: titre,
                        hauteur: hauteur,
                        largeur: largeur,
                        prix: prix,
                        idTypePapier: idTypePapier,
                        idTypeFormat: idTypeFormat
                    }, function (data) {

                        if (data == true) {
                            var message = "Le foramt a été ajouté !!";
                            $('#editObjet').modal('hide');


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
                            $(".alert-warning").addClass("hide");

                        } else {
                            console.log("non");
                        }


                    });
                } else {
                    e.preventDefault();
                    console.log("Champs Vide");
                    $(".alert-warning").removeClass("hide");

                }
                break;

            case "commande-update":
                idObjet = $.trim($("#idAction").val());
                var codePostalFacturation = $("#codePostalFacturation").val(),
                    adresseFacturation = $("#adresseFacturation").val(),
                    villeFacturation = $("#villeFacturation").val(),
                    paysFacturation = $("#paysFacturation").val(),
                    commentaireLivraison = $("#commentaireLivraison").val(),
                    idEtat = $("#idEtat").val(),
                    quantite = $("#quantite").val(),
                    prixTTC = $("#prixTTC").val(),
                    fraisLivraisonTTC = $("#fraisLivraisonTTC").val(),
                    adresseFacturation = $("#adresseFacturation").val(),
                    bonLivraison = $("#bonLivraison").val();

                /* console.log(codePostalFacturation+adresseFacturation+paysFacturation);
                 console.log(commentaireLivraison+idEtat+quantite);
                 console.log(prixTTC+quantite);
                 console.log(fraisLivraisonTTC+adresseFacturation+bonLivraison);
                 */
                if (
                    codePostalFacturation != "" && adresseFacturation != "" && villeFacturation != "" &&
                    paysFacturation != "" && idEtat != "" && quantite != "" && prixTTC != "" && fraisLivraisonTTC != ""
                    && bonLivraison != ""
                ) {


                    $.post("ajaxphp/ajax.php", {
                        action: nameAction,
                        codePostalFacturation: codePostalFacturation,
                        adresseFacturation: adresseFacturation,
                        villeFacturation: villeFacturation,
                        paysFacturation: paysFacturation,
                        idEtat: idEtat,
                        quantite: quantite,
                        prixTTC: prixTTC,
                        fraisLivraisonTTC: fraisLivraisonTTC,
                        bonLivraison: bonLivraison,
                        idObjet: idObjet
                    }, function (data) {

                        if (data == true) {
                            var message = "Votre modification a été enregistrée !!";
                            $('#editObjet').modal('hide');

                            var libelleEtat = "";
                            if (idEtat == 1) {
                                libelleEtat = "En attente d'Impression";
                            } else if (idEtat == 2) {
                                libelleEtat = "Imprimée";
                            } else if (idEtat == 3) {
                                libelleEtat = "Expediée";
                            } else if (idEtat == "4") {
                                libelleEtat = "Annulée";
                            }
                            
                            $("#td-cmd-quantite-" + idObjet).text(quantite);
                            $("#td-cmd-prixTTC-" + idObjet).text(prixTTC);
                            $("#td-cmd-libelle-" + idObjet).text(libelleEtat);

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
                            $(".alert-warning").addClass("hide");

                        } else {
                            console.log("non");
                        }


                    });


                } else {

                    $(".alert-warning").removeClass("hide");

                }

                break;
        }


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
                    message = "<b>Le format N°" + idObjet + "</b> a été supprimé !!"

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


    $('#dataTables-example').DataTable({
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

