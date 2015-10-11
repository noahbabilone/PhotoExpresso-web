<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

include("../../Models/Config.php");
$config = AppModel\Config::getInstance('../../public/Config.php');

$sql_details = array(
    'user' => $config->get('db_user'),
    'pass' => $config->get('db_pass'),
    'db' => $config->get('db_name'),
    'host' => $config->get('db_host')
);

// DB table to use
$table = 'view_commande';


// Table's primary key
$primaryKey = 'idCommande';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier - in this case object
// parameter names
$columns = array(
    array('db' => 'idCommande', 'dt' => '0'),
    array('db' => 'nom', 'dt' => '1'),
    array('db' => 'prenom', 'dt' => '2'),
    array('db' => 'quantite', 'dt' => '3'),
    array('db' => 'prixTTC', 'dt' => '4'),
    array('db' => 'fraisLivraisonTTC', 'dt' => '5'),
    array('db' => 'adresseFacturation', 'dt' => '6'),
    array('db' => 'villeFacturation', 'dt' => '7'),
    array('db' => 'paysFacturation', 'dt' => '8'),
    array('db' => 'idCommande', 'dt' => '9'),
    array('db' => 'idCommande', 'dt' => '10')
);

/*
cmd.idCommande, clt.idClient, p.nom,p.prenom, cmd.quantite,cmd.prixTTC, e.libelle,
        clt.adresseFacturation,clt.villeFacturation, clt.paysFacturation*/

//    idTypePapier 	couleur 	finition

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

/*
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . "admin");
require( ROOT .'/Models/DatabaseAjax/ssp.class.php' );
*/

require "ssp.class.php";

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);