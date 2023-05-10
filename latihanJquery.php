<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan jquery</title>
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <button class="btn btn-primary btn-hide">Tombol1</button>
    <button class="btn btn-success btn-show">Tombol2</button>
    <button class="btn btn-warning btn-toggle">Tombol3</button>
    <h1>ini adalah text h1 atau judul</h1>
    <!-- ini file javascript -->
    <script src="bootstrap-5.1.3-dist/js/jquery-3.6.4.min.js"></script>


    <script>
    $(document).ready(function() {
        $(".btn-hide").click(function() {
            // $("h1").hide();
            // $("h1").fadeOut();
            $("h1").slideUp();
        })
        $(".btn-show").click(function() {
            // $("h1").show();
            // $("h1").fadeIn();
            $("h1").slideDown();
        })
        $(".btn-toggle").click (function(){
            // $("h1").toggle();
            // $("h1").fadeToggle();
            $("h1").slideToggle();
        })
    })
    </script>
</body>

</html>