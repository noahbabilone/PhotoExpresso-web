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

// DB table to use
$table = 'typepapier';

// Table's primary key
$primaryKey = 'idTypePapier';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier - in this case object
// parameter names
$columns = array(
    array(
        'db' => 'idTypePapier',
        'dt' => '0'
    ),
    array('db' => 'couleur', 'dt' => '1'),
    array('db' => 'finition', 'dt' => '2')/*,
    array( 'db' => 'largeur',   'dt' => 'largeur' ),
    array( 'db' => 'prix',     'dt' => 'prix_t' )*/
);

$sql_details = array(
    'user' => 'yannick',
    'pass' => 'estiam94',
    'db' => 'photoexpressodb',
    'host' => 'sql.group1.estiam.com'
);
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