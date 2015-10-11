<?php
$titreModal = $_GET["titreModal"];
$contenuModal = $_GET["contenuModal"];
$nameAction = $_GET["nameAction"];
$idObjet = $_GET["idObjet"];
?>
<!--Modal header-->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Suppression <?php echo isset($titreModal)
            ? $titreModal : "";
        ?></h4>
</div>
<div class="modal-body">
    <p>Vous voulez vraiment supprimer <?php echo isset($contenuModal) ? $contenuModal : ""; ?> ?</p>
</div>

<input type="hidden" id="idObjet-Delete" value="<?php echo isset($idObjet)? $idObjet:"-1"; ?>" 
       name="<?php echo isset($nameAction)? $nameAction:""; ?> ">

