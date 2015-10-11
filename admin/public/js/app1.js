$().ready(function () {
    $(".supp-img-upload").click(function (e) {
        e.preventDefault();
        var idUpload = $(this).attr("id");
        console.log(idUpload);
        $("#container-" + idUpload).fadeOut(800, function () {
            $(this).remove();
        });


    });
});