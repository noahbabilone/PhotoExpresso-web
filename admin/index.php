<?php

session_start();
if (isset($_SESSION['auth'])) {
    header('Location: public/index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PhotoExpresso - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Veuillez se connecter</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="" id="connexionAdmin">
                        <fieldset>
                            <div class="form-group">
                                <p class="message-error hide text-danger">
                                    Votre login ou Mot de passe est incorrecte !!
                                </p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Pseudo" name="username" type="text"
                                       id="username" autocomplete="on" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mot de passe" name="password" id="password"
                                       type="password" value="" autocomplete="on" required>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Se Souvenir de moi
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-lg btn-success btn-block" id="connexion"
                                   value="Se connecte">

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="public/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $("#connexionAdmin").submit(function (e) {
        e.preventDefault();

        var username = $("#username").val();
        var password = $("#password").val();

        if ($.trim(username).length > 0 && $.trim(password).length > 0) {
            var dataString = 'username=' + username + '&password=' + password;
            console.log(dataString);

            $.ajax({
                type: "POST",
                url: "public/ajaxphp/connexion.php",
                data: dataString,
                cache: false,
                success: function (data) {
//                    console.log(data);
                    var resultat = $.parseJSON(data);
                    if (resultat.isConnected) {
                        window.location.href = 'public/index.php';
                    } else {
                        $(".message-error").removeClass("hide");

                        $('.form-group').each(function () {
                            $(this).addClass("has-error");
                        });
                    }
                }
            });
        } else {
            console.log("Pas de pramètre");
        }

    }); //end Submit
</script>

</body>

</html>
