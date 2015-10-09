<?php
    $titreModal = $_GET["titreModal"];
    $contenuModal = $_GET["contenuModal"];
?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Suppression <?php  echo isset($titreModal)
            ?$titreModal:"";
        ?></h4>
</div>
<div class="modal-body">
            <p>Vous voulez vraiment supprimer <?php echo isset($contenuModal)?  $contenuModal:""; ?> ?</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" >Oui</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
</div>