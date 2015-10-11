<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user  fa-fw"></i> Admins
                    <!--<div class="pull-right">
                        <a href="#" class="btn  btn-success btn-xs">Ajouter</a>
                    </div>-->
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <div class="dataTable_wrapper">
                            <table  class="table table-striped table-hover"  id="">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Ville</th>
                                <th>Code P</th>
                                <th>Pays</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($admins)) {
                                foreach ($admins as $admin) {
                                    echo "<tr id='ligne-client-{$admin->idPersonne}'>
                                                  <td>{$admin->idPersonne}</td>
                                                  <td>{$admin->nom}</td>
                                                  <td>{$admin->prenom}</td>
                                                  <td>{$admin->ville}</td>
                                                  <td>{$admin->codePostal}</td>
                                                  <td>{$admin->pays}</td>
                                                <td>
                                               <button type='button'  class='btn btn-xs btn-info editObjet'  
                                                        id='client-{$admin->idPersonne}' data-toggle='modal' 
                                                        name='editClient' data-target='#editObjet'   >
                                                   <i class='fa fa-cog'></i>
                                                    </button>
                                                    <input type='hidden' class='val-client-{$admin->idPersonne}' 
                                                    value='{$admin->idPersonne}' />
                                                    
                                                    <button type='button'  class='btn btn-xs btn-danger suppObjet' 
                                                    name='suppressionClient' id='client-{$admin->idPersonne}'
                                                    data-toggle='modal' data-target='#suppObjet'>
                                                     <i class='fa fa-trash-o'></i>  
                                                </button>
                                           
                                        </td>";

                                }
                            }
                            ?>

                            </tbody>
                        </table>
                        </div>
                        <!-- /.table-responsive -->

                    </div>

                </div>
            </div>

        </div>
        <!--col-lg-6--> <div class="col-lg-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user-md fa-fw"></i> Clients
                    <!--<div class="pull-right">
                        <a href="#" class="btn  btn-success btn-xs">Ajouter</a>
                    </div>-->
                </div>
                <div class="panel-body">
                    <!--Contenu-->
                    <div class="table-responsive">
                        <div class="dataTable_wrapper">
                            <table  class="table table-striped table-hover"  id="">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Ville</th>
                                <th>Code P</th>
                                <th>Pays</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($clients)) {
                                foreach ($clients as $client) {
                                    echo "<tr id='ligne-client-{$client->idClient}'>
                                                  <td>{$client->idClient}</td>
                                                  <td>{$client->nom}</td>
                                                  <td>{$client->prenom}</td>
                                                  <td>{$client->ville}</td>
                                                  <td>{$client->codePostal}</td>
                                                  <td>{$client->pays}</td>
                                                <td>
                                                <button type='button'  class='btn btn-xs btn-info editObjet'  
                                                        id='client-{$client->idClient}' data-toggle='modal' 
                                                        name='editClient' data-target='#editObjet'   >
                                                   <i class='fa fa-cog'></i>
                                                    </button>
                                                    <input type='hidden' class='val-client-{$client->idClient}' 
                                                    value='{$client->idClient}' />
                                                    
                                                    <button type='button'  class='btn btn-xs btn-danger suppObjet' 
                                                    name='suppressionClient' id='client-{$client->idClient}'
                                                    data-toggle='modal' data-target='#suppObjet'>
                                                     <i class='fa fa-trash-o'></i>  
                                                </button>
                                             </td>
                                        </tr>";

                                }
                            }
                            ?>

                            </tbody>
                        </table>
                        </div>
                        <!-- /.table-responsive -->

                    </div>

                </div>
            </div>

        </div>
        <!--col-lg-6-->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->


   
  