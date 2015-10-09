$(document).ready(function () {
    $("#connexionAdmin").submit(function (e) {
        e.preventDefault();

        var username = $("#username").val();
        var password = $("#password").val();

        if ($.trim(username).length > 0 && $.trim(password).length > 0) {
            var dataString = 'username=' + username + '&password=' + password;
            console.log(dataString);

            $.ajax({
                type: "POST",
                url: "public/ajaxphp/connexion.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    var resultat = $.parseJSON(data);
                    if (resultat.isConnected) {
                        window.location.href = 'public/index.php'
                    }
                }
            });
        } else {
            console.log("Test");
        }

    }); //end Submit


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
            action: "editCommande",
            idCommande: idCMD
        }, function (data) {
            //permet d'afficher le retour ajax                  
            console.log("fait");
            $("#idContent").html(data);
        });
    });


    $(".suppObjet").click(function (e) {
        e.preventDefault();
        var $this=$(this);
        var nameAction= $this.attr("name");
        var titreModal= "Titre Modal", contenuModal="Contenu Modal";

        console.log(nameAction);
        switch (nameAction){
            case "suppressionCommande":
                titreModal = " de la commande N°"+$(".val-" + $this.attr('id')).val();     
                contenuModal="cette commande" ;
                break; 
            case "suppressionClient":
                titreModal = "du client N°"+$(".val-" + $this.attr('id')).val();     
                contenuModal="cet client" ;
                break;
            case "suppressionFormat":
                titreModal = "du Format N°" + $(".val-" + $this.attr('id')).val();
                contenuModal = "cet format";
                break;
        }
        
        $.get("ajaxphp/suppression.php",{
                "titreModal": titreModal, 
                "contenuModal":contenuModal
            }
        ).done(function (data) {
                $("#contenuSupp").html(data);
            });
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

