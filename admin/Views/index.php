
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-shopping-cart fa-fw"></i> Commandes
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="#" class="btn  btn-default btn-xs">Afficher Tout</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <!--Contenu-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    echo "<tr>
                                            <td>{$i}</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                    
                                        </tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
            <!--col-lg-6-->
            <!--            </div>-->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bitbucket"></i> Produits
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                        data-toggle="dropdown">
                                    Actions
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">Afficher Tout</a>
                                    </li>
                                    <li>
                                        <a href="#">Ajouter </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <!--Contenu-->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    echo "<tr>
                                            <td>{$i}</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <span>
                                                    <a href='#' class='btn btn-default btn-xs btn-info'> 
                                                    <i class='fa fa-cog'></i></a>       
                                                </span>
                                                <span>
                                                    <a href='#' class='btn btn-default btn-xs btn-danger'> <i 
                                                     class='fa fa-trash-o'></i></a>       
                                                </span>
                                             </td>
                                        </tr>";
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--col-lg-6-->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-user"></i> Clients
                            <span class="txt-right"> 
                                <a href="#" class="btn  btn-default btn-xs">Afficher Tout</a>
                            </span>
                    </div>
                    <div class="panel-body">
                        <!--Contenu-->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    echo "<tr>
                                            <td>{$i}</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <span>
                                                    <a href='#' class='btn btn-default btn-xs btn-info'> 
                                                    <i class='fa fa-cog'></i></a>       
                                                </span>
                                                <span>
                                                    <a href='#' class='btn btn-default btn-xs btn-danger'> <i 
                                                     class='fa fa-trash-o'></i></a>       
                                                </span>
                                             </td>
                                        </tr>";
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--col-lg-6-->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-credit-card"></i> Paiements
                            <span class="txt-right"> 
                                <a href="#" class="btn  btn-default btn-xs">Afficher Tout </a>
                            </span>
                    </div>
                    <div class="panel-body">
                        <!--Contenu-->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    echo "<tr>
                                            <td>{$i}</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <span>
                                                    <a href='#' class='btn btn-default btn-xs btn-info'> 
                                                    <i class='fa fa-cog'></i></a>       
                                                </span>
                                                <span>
                                                    <a href='#' class='btn btn-default btn-xs btn-danger'> <i 
                                                     class='fa fa-trash-o'></i></a>       
                                                </span>
                                             </td>
                                        </tr>";
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--col-lg-6-->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
