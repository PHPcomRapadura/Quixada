<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="assets/img/favicon.png">
    <title>PHP com Rapadura in Quixadá 2019</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://use.fontawesome.com/6c531641d9.js"></script>
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/init.js"></script>


</body>
</html>
<script>
    var $doc = $('html, body');
    $('.scrollSuave').click(function() {
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 2000);
        return false;
    });
</script>
