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

        case "commandeSupp":
            $idCmd = $_POST["idObjet"];
            $result = $app->getTable("Commande")->delete($idCmd);
            echo $result;
            break;
        case "clientSupp":
            $idClient = $_POST["idObjet"];
            $result = $app->getTable("Client")->delete($idClient);
            echo $result;
            break;
        case "formatSupp":
            $idForamt = $_POST["idObjet"];
            $result = $app->getTable("Produit")->deleteFromat($idForamt);
            echo $result;
            break;
        case "commande-update":
            $commande = $app->getTable("Commande");
            $codePostalFacturation = $_POST['codePostalFacturation'];
            $adresseFacturation = $_POST['adresseFacturation'];
            $villeFacturation = $_POST['villeFacturation'];
            $paysFacturation = $_POST['paysFacturation'];
            $idEtat = $_POST['idEtat'];
            $quantite = $_POST['quantite'];
            $prixTTC = $_POST['prixTTC'];
            $fraisLivraisonTTC = $_POST['fraisLivraisonTTC'];
            $adresseFacturation = $_POST['adresseFacturation'];
            $bonLivraison = $_POST['bonLivraison'];
            $idCmd = $_POST["idObjet"];
            $result = $commande->updateCommande($idCmd, $quantite, $prixTTC,$idEtat);
            echo $result;
            break;
        case "addFormat-insert":
            $titre = $_POST['titre'];
            $hauteur = $_POST['hauteur'];
            $largeur = $_POST['largeur'];
            $prix = $_POST['prix'];
            $idTypePapier = $_POST['idTypePapier'];
            $idTypeFormat = $_POST['idTypeFormat'];
            //$titre,$hauteur,$largeur,$prix,$idTypePapier,$idTypeFormat
            $result = $app->getTable("Produit")->addFormat($titre, $hauteur, $largeur, $prix, $idTypePapier, $idTypeFormat);
            echo $result;
            break;
        case "formatEdit":
            $idForamt = $_POST["idObjet"];
            ?>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    Modification Format
                </h4>
            </div>

            <div class="modal-body" id="idContent">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputTitreForamt" class="control-label col-xs-2">Titre</label>

                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="inputTitreForamt" placeholder="Titre foramt">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDimensionForamt" class="control-label col-xs-2">Dimension</label>

                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="inputDimensionForamt"
                                   placeholder="Dimension (exemple:24)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPrix" class="control-label col-xs-2">Prix</label>

                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="inputPrix" placeholder="Prix en euros">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPrix" class="control-label col-xs-2">Type format</label>

                        <div class="col-xs-3">
                            <select name="inputEtat" id="inputEtat" class="form-control">

                                <?php
                                $typeFormats = $app->getTable("Produit")->allFormatType();

                                foreach ($typeFormats as $format) {
                                    echo "<option value='$format->idTypeFormats'>{$format->libelle}</option>";

                                }
                                ?>
                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <?php
            break;
        case "AddFormat":
            // $result = $app->getTable("Produit")->deleteFromat($idForamt);

            ?>

            <input type="hidden" name="addFormat-insert" id="idAction" value="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    Ajouter un Format
                </h4>
            </div>

            <div class="modal-body" id="idContent">
                <div class="alert alert-warning hide alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p> Veuillez remplir tous les champs du formulaire!!
                        <span class="message-warning"></span>
                    </p>
                </div>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputTitreFormat" class="control-label col-xs-2">Titre</label>

                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="inputTitreFormat" placeholder="Titre foramt">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputHauteurFormat" class="control-label col-xs-2">Hauteur</label>

                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="inputHauteurFormat"
                                   placeholder="Hauteur (exemple:24)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLargeurFormat" class="control-label col-xs-2">Largeur</label>

                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="inputLargeurFormat"
                                   placeholder="Largeur (exemple:24)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPrixFormat" class="control-label col-xs-2">Prix</label>

                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="inputPrixFormat" placeholder="Prix en euros">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTypePapierFormat" class="control-label col-xs-2">Type Papier</label>

                        <div class="col-xs-3">
                            <select name="inputTypePapierFormat" id="inputTypePapierFormat" class="form-control">

                                <?php
                                $formatPapiers = $app->getTable("Produit")->allFormatPapier();

                                foreach ($formatPapiers as $format) {
                                    echo "<option 
                                    value='$format->idTypePapier'>{$format->couleur}-{$format->finition}</option>";

                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTypeFormat" class="control-label col-xs-2">Type format</label>

                        <div class="col-xs-3">
                            <select name="inputTypeFormat" id="inputTypeFormat" class="form-control">

                                <?php
                                $typeFormats = $app->getTable("Produit")->allFormatType();

                                foreach ($typeFormats as $format) {
                                    echo "<option value='$format->idTypeFormats'>{$format->libelle}</option>";

                                }
                                ?>
                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <?php

            break;
        case "clientEdit":
            $idClient = $_POST["idObjet"];
            $table = $app->getTable("Client");
            $client = $table->getClient($idClient);

//            var_dump($client);
            ?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    Modification du client - N°<?php
                    echo $client->idClient . '  ' . ucfirst($client->nom) . ' ' . ucfirst($client->prenom); ?>

                </h4>
            </div>
            <div class="modal-body" id="idContent">
                <div class="row">
                    <form>
                        <div class="col-lg-6 form-group">
                            <img src="../public/img/profil.png" alt="profil" id="profil" class="img-thumbnail">

                            <div class="profil-user">
                                <label for="inputEmail">Nom</label>
                                <input type="text" class="form-control" id="inputNom" value="<?= $client->nom;
                                ?>" placeholder="Nom">
                                <label for="inputEmail">Prenom </label>
                                <input type="text" class="form-control" id="inputPrenom"
                                       value="<?= $client->prenom; ?>" placeholder="Prenom">
                                <label for="inputlogin">Login </label>
                                <input type="text" class="form-control" id="inputLogin"
                                       value="<?= $client->login; ?>" placeholder="login">
                                <label for="inputTel">Tel </label>
                                <input type="text" class="form-control" id="inputTel"
                                       value="<?= $client->telPortable; ?>" placeholder="06-00-00-00">

                                <label for="inputFix">Fix </label>
                                <input type="text" class="form-control" id="inputFix"
                                       value="<?= $client->telFixe; ?>" placeholder="06-00-00-00">
                            </div>
                        </div>
                        <div class="col-lg-6 form-group">


                            <label for="inputEmail">Adresse </label>
                            <input type="text" class="form-control" id="inputPrenom"
                                   value="<?= $client->adresse; ?>" placeholder="11 a rue ...">
                            <label for="inputEmail">Code postal </label>
                            <input type="text" class="form-control" id="inputPrenom"
                                   value="<?= $client->codePostal; ?>" placeholder="75000">
                            <label for="inputEmail">ville </label>
                            <input type="text" class="form-control" id="inputVille"
                                   value="<?= $client->ville; ?>" placeholder="Paris">
                            <label for="inputPays">Pays </label>

                            <input type="text" class="form-control" id="inputPays"
                                   value="<?= $client->pays; ?>" placeholder="France">

                        </div>

                        <div class="col-lg-12">


                            <div class="form-group">
                                <label for="inputCODFact">Code postal Facturation</label>
                                <input type="text" class="form-control" id="inputCODFact"
                                       value="<?= $client->codePostalFacturation; ?>" placeholder="Adresse">
                                <label for="inputVilleFact">Ville Facturation</label>
                                <input type="text" class="form-control" id="inputVilleFact"
                                       value="<?= $client->villeFacturation; ?>" placeholder="Adresse Facturation">
                                <label for="inputAdresseFact">Adresse Facturation</label>
                                <input type="text" class="form-control" id="inputAdresseFact"
                                       value="<?= $client->adresseFacturation; ?>" placeholder="Adresse">
                                <label for="inputPaysFact">Pays Facturation</label>
                                <input type="text" class="form-control" id="inputPaysFact"
                                       value="<?= $client->paysFacturation; ?>" placeholder="Adresse">
                                <label for="inputCommentaire">Commentaire </label>
                                <textarea class="form-control" name="commentaire" id="" rows="2"><?=
                                    $client->commentaireLivraison; ?></textarea>
                            </div>
                        </div>
                        <!--col-lg-6-->
                    </form>
                </div>
            </div>

            <?php
            break;
        case   "commandeEdit":
            $idCmd = $_POST["idObjet"];

            $cmd = $app->getTable("Commande");
            $commande = $cmd->getCommande($idCmd);
            ?>
            <input type="hidden" name="commande-update" id="idAction" value="<?= $idCmd; ?>">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    Modification de la commande - N°<?php
                    echo $commande->idCommande . '  ' . ucfirst($commande->nom) . ' ' . ucfirst($commande->prenom); ?>

                </h4>
            </div>
            <div class="modal-body" id="idContent">
                <div class="row">
                    <form>
                        <div class="col-lg-12">

                            <div class="alert alert-warning hide alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                <p> Veuillez remplir tous les champs du formulaire!!
                                    <span class="message-warning"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <img src="../public/img/profil.png" alt="profil" id="profil" class="img-thumbnail">

                                <div class="profil-user">
                                    <label for="inputEmail">Nom</label>
                                    <input type="text" class="form-control" id="inputNom" value="<?= $commande->nom;
                                    ?>" placeholder="Nom" disabled>
                                    <label for="inputEmail">Prenom </label>
                                    <input type="text" class="form-control" id="inputPrenom" value="<?=
                                    $commande->prenom; ?>" placeholder="Prenom" disabled>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="codePostalFacturation">Code postal Facturation</label>
                                <input type="text" class="form-control" id="codePostalFacturation"
                                       value="<?= $commande->codePostalFacturation; ?>" placeholder="Adresse">

                                <label for="villeFacturation">Ville Facturation</label>
                                <input type="text" class="form-control" id="villeFacturation"
                                       value="<?= $commande->villeFacturation; ?>" placeholder="Adresse">

                                <label for="adresseFacturation">Adresse Facturation</label>
                                <input type="text" class="form-control" id="adresseFacturation"
                                       value="<?= $commande->adresseFacturation; ?>" placeholder="Adresse">

                                <label for="paysFacturation">Pays Facturation</label>
                                <input type="text" class="form-control" id="paysFacturation"
                                       value="<?= $commande->paysFacturation; ?>" placeholder="Adresse">

                                <label for="commentaireLivraison">Commentaire </label>
                                <textarea class="form-control" name="commentaire" id="commentaireLivraison" rows="2"><?=
                                    $commande->commentaireLivraison; ?></textarea>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h4>Commande ID: <?= $commande->idCommande; ?></h4>
                                <label for="idEtat">Etat Commande</label>
                                <select name="inputEtat" id="idEtat" class="form-control">
                                    <?php
                                    $etatCommandes = $cmd->etatCommandeAll();
                                    foreach ($etatCommandes as $etat) {
                                        if ($etat->id == $commande->idEtat) {
                                            echo "<option  value='$etat->id' selected>{$etat->libelle}</option>";

                                        } else {
                                            echo "<option value='$etat->id'>{$etat->libelle}</option>";
                                        }
                                    }
                                    ?>
                                </select>

                                <label for="quantite">Quantité(s)</label>
                                <input type="text" class="form-control" id="quantite"
                                       value="<?= $commande->quantite; ?>" placeholder="Quantités">

                                <label for="prixTTC">Prix TTC</label>
                                <input type="text" class="form-control" id="prixTTC"
                                       value="<?= $commande->prixTTC; ?>" placeholder="Prix TTC">

                                <label for="fraisLivraisonTTC">Frais de Livraison</label>
                                <input type="text" class="form-control" id="fraisLivraisonTTC"
                                       value="<?= $commande->fraisLivraisonTTC; ?>" placeholder="Frais de livraison">
                                <label for="adresseFacturation">Adresse de livraison</label>
                                <input type="text" class="form-control" id="adresseFacturation"
                                       value="<?= $commande->adresseFacturation; ?>" placeholder="Adresse de livraison">
                                <label for="bonLivraison">Bon de livraison</label>
                                <input type="text" class="form-control" id="bonLivraison"
                                       value="<?= $commande->bonLivraison; ?>" placeholder="Bon de livraison">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h3 class="page-header ">Photos</h3>
                            <?php
                            for ($i = 0; $i < 6; $i++) {
                                ?>
                                <div class="col-xs-2" id="container-upload-<?= $i; ?>">
                                    <a href="#" class="supp-img-upload" alt="" id="upload-<?= $i; ?>">
                                        <img src="../public/img/delete.png" class="remove-image"/>
                                    </a>
                                    <input type="hidden" class="upload-<?= $i; ?>" value="<?= $i; ?>">
                                    <img src="../public/img/profil.png" alt="profil" id="profil"
                                         class="img-thumbnail img-upload">

                                </div>
                                <?php
                            }
                            ?>
                        </div>

                    </form>

                </div>

            </div> <!--end idContent-->
            <script src="../public/js/app1.js"></script>


            <?php
            break;

        default:
            echo "default";
            break;

    }

}