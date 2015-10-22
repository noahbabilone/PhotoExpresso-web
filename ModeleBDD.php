<?php



abstract class ModeleBDD {
    private $bdd;
    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql);
        } else {
            $resultat = $this->getBdd()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }
    private function getBdd() {
        if ($this->bdd == null) {
            $this->bdd = new PDO('mysql:host=sql.group1.estiam.com;dbname=photoexpressodb;charset=utf8', 'yannick', 'estiam94', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }
}

function bdd() {
    try {
        $bdd = new PDO('mysql:host=sql.group1.estiam.com;dbname=photoexpressodb', 'yannick', 'estiam94');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}
?>	

