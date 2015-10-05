<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>


</head>
<body>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>idTypePapier</th>
        <th>couleur</th>
        <th>finition</th>
        <!--                <th>Action</th>
        -->            </tr>
    </thead>

</table>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/dt-1.10.9/datatables.min.css"/>
<script type="text/javascript">


    $(document).ready(function () {
        $('#example').DataTable({
            "aoColumns": [
                {"aTargets": [1]},
                {"aTargets": [2]}, /* url-Img */
                {"aTargets": [3]}
            ],
            "processing": true,
            "serverSide": true,
            "sAjaxSource": "listes_commandes.php",


        });
    });
</script>

</body>
</html>