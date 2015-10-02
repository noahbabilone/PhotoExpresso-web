$().ready(function () {
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
                    console.log(data);
                    var resultat = $.parseJSON(data);
                    if (resultat.isConnected){
                        window.location.href = 'public/index.php'
                    }
                }


            });
        }else{
            console.log("Test");
        }

    }); //end Submit
});
