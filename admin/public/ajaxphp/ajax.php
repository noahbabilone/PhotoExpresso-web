<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . "/admin");
require ROOT . '/public/App.php';
App::load();
$app = App::getInstance();
use AppModel\DBAuth;

$auth = new DBAuth($app->getDb());
if (!$auth->logged()) {
    $auth->forbidden();
    header("location: ../index.php");
}
$contenu = "";

if (isset($_POST["action"]) && !empty($_POST["action"])) {
    $action = $_POST["action"];
    switch ($action) {
        case   "editCommande":
            $idCmd = $_POST["idCommande"];

            $commande = $app->getTable("Commande")->getCommande($idCmd);
            ?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    Modification de la commande -  N°<?php 
                    echo $commande->idCommande. '  '. ucfirst($commande->nom).' '.ucfirst($commande->prenom); ?>
                    
                </h4>
            </div>
            <div class="modal-body" id="idContent">

                <div class="row">
                    <form>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <img src="../public/img/profil.png" alt="profil" id="profil" class="img-thumbnail">

                                <div class="profil-user">
                                    <label for="inputEmail">Nom</label>
                                    <input type="text" class="form-control" id="inputNom" value="<?= $commande->nom; 
                                    ?>" placeholder="Nom" disabled >
                                    <label for="inputEmail">Prenom </label>
                                    <input type="text" class="form-control" id="inputPrenom" value="<?= 
                                    $commande->prenom; ?>" placeholder="Prenom" disabled>

                                </div>
                            </div>

                            <div class="form-group">

                                <label for="inputEmail">Code postal Facturation</label>
                                <input type="text" class="form-control" id="inputCod" value="<?= $commande->codePostalFacturation; ?>" placeholder="Adresse">
                                <label for="inputEmail">Ville Facturation</label>
                                <input type="text" class="form-control" id="inputVilleFact" value="<?= $commande->villeFacturation; ?>" placeholder="Adresse">
                                <label for="inputEmail">Adresse Facturation</label>
                                <input type="text" class="form-control" id="inputAdresseFact" value="<?= $commande->adresseFacturation; ?>" placeholder="Adresse">
                                <label for="inputEmail">Pays Facturation</label>
                                <input type="text" class="form-control" id="inputPaysFact" value="<?= $commande->paysFacturation; ?>" placeholder="Adresse">
                                <label for="inputEmail">Commentaire </label>
                                <textarea class="form-control" name="commentaire" id="" rows="2"><?= 
            $commande->commentaireLivraison; ?></textarea>
                                <br> <br>

                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h4>Commande</h4>
                                <label for="inputEmail">ID Commande</label>
                                <input type="text" class="form-control" id="inputIdCmd" value="<?= 
                                $commande->idCommande; ?>" placeholder="Adresse" disabled>
                                <label for="inputEmail">Quantité(s)</label>
                                <input type="text" class="form-control" id="inputQuantite" value="<?= $commande->quantite; ?>" placeholder="Quantités">
                                <label for="inputEmail">Prix HT</label>
                                <input type="text" class="form-control" id="inputPrixHt" value="<?= $commande->prixHT; ?>" placeholder="Prix HT">
                                <label for="inputEmail">Prix TTC</label>
                                <input type="text" class="form-control" id="inputPrixttc" value="<?= $commande->prixTTC; ?>" placeholder="Prix TTC">
                                <label for="inputEmail">Frais de Livraison</label>
                                <input type="text" class="form-control" id="inputFrais"
                                       value="<?= $commande->fraisLivraisonTTC; ?>" placeholder="Frais de livraison">
                                <label for="inputEmail">Adresse de livraison</label>
                                <input type="text" class="form-control" id="inputAdresseL"
                                       value="<?= $commande->adresseFacturation; ?>" placeholder="Adresse de livraison">
                                <label for="inputEmail">Bon de livraison</label>
                                <input type="text" class="form-control" id="inputBonLivraison"
                                       value="<?= $commande->bonLivraison; ?>" placeholder="Bon de livraison">
                            </div>

                        </div>
                    </form>

                </div>

            </div> <!--end idContent-->

            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Enregister</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>

            </div>
            <?php
            break;
        default:
            echo "default";
            break;

    }

}