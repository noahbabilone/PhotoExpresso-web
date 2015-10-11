<?php

namespace AppController\TablePDO;

use AppModel\TablePDO;

class CommandeTable extends TablePDO
{

    public function all()
    {
        return $this->query("SELECT cmd.idCommande, clt.idClient, p.nom,p.prenom, p.codePostal, cmd.quantite,cmd.prixTTC, e.libelle,
                                    clt.adresseFacturation,clt.codePostalFacturation, clt.villeFacturation, clt.paysFacturation,clt.commentaireLivraison,l.idLivraison,
                                    l.bonLivraison,l.lienSuivi
                            FROM commande cmd 
                            LEFT JOIN client clt ON cmd.idClient = clt.idClient 
                            LEFT JOIN etatcommande e ON cmd.idEtat = e.id 
                            LEFT JOIN livraison l ON cmd.idLivraison = l.idLivraison 
                            LEFT JOIN personne p ON clt.idClient= p.idPersonne");
        //OORDER BY cmd.idCommande DESC

    }


    public function lists($limit = 10)
    {
        return $this->query("SELECT cmd.idCommande, p.nom,p.prenom, p.codePostal, cmd.quantite, cmd.prixTTC, e.libelle 
                              FROM commande cmd LEFT JOIN client clt ON cmd.idClient = clt.idClient 
                              LEFT JOIN etatcommande e ON cmd.idEtat = e.id 
                              LEFT JOIN livraison l ON cmd.idLivraison = l.idLivraison 
                              LEFT JOIN personne p ON clt.idClient= p.idPersonne 
                              ORDER BY cmd.idCommande DESC LIMIT " . $limit);

    }


    public function etats($idEtat = 1)
    {
        return $this->query("SELECT cmd.idCommande, p.nom,p.prenom, p.codePostal, cmd.quantite, cmd.prixTTC, e.libelle 
                              FROM commande cmd LEFT JOIN client clt ON cmd.idClient = clt.idClient 
                              LEFT JOIN etatcommande e ON cmd.idEtat = e.id 
                              LEFT JOIN livraison l ON cmd.idLivraison = l.idLivraison 
                              LEFT JOIN personne p ON clt.idClient= p.idPersonne 
                              WHERE cmd.idEtat ='{$idEtat}' ORDER BY cmd.idCommande DESC");

    }


    public function getCommande($idCommande)
    {
        return $this->db->query("SELECT cmd.idCommande,  cmd.quantite, cmd.prixTTC, cmd.prixHT, cmd.tva, cmd.fraisLivraisonHT, cmd.fraisLivraisonTTC,
                                 e.libelle,p.nom,p.prenom, p.codePostal, clt.adresseFacturation,clt.codePostalFacturation,clt.villeFacturation,clt.paysFacturation,clt.commentaireLivraison,
                                l.lienSuivi,l.idLivraison,l.bonLivraison
                                FROM commande cmd LEFT JOIN client clt ON cmd.idClient = clt.idClient 
                                LEFT JOIN etatcommande e ON cmd.idEtat = e.id 
                                LEFT JOIN livraison l ON cmd.idLivraison = l.idLivraison 
                                LEFT JOIN personne p ON clt.idClient= p.idPersonne 
                                WHERE cmd.idCommande ='{$idCommande}'", get_class($this),
            true);

    }

    public function delete($idCommande)
    {
        $result= $this->query("DELETE FROM commande WHERE idCommande='{$idCommande}'");
        return $result?true:false;
    }

    public function update($idCommande = 1)
    {
        return $this->query("SELECT cmd.idCommande, p.nom,p.prenom, p.codePostal, cmd.quantite, cmd.prixTTC, e.libelle 
                              FROM commande cmd LEFT JOIN client clt ON cmd.idClient = clt.idClient 
                              LEFT JOIN etatcommande e ON cmd.idEtat = e.id 
                              LEFT JOIN livraison l ON cmd.idLivraison = l.idLivraison 
                              LEFT JOIN personne p ON clt.idClient= p.idPersonne 
                              WHERE cmd.idEtat ='{$idCommande}' ORDER BY cmd.idCommande DESC");

    }


}