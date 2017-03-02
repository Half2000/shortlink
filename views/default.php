<html>
    <head>
        <title>Тест</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" />

        <!-- JavaScript -->
        <script src="../js/jquery-3.1.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/script.js"></script>

    </head>
    <body>
        <div class="input-container" id="inForm">
            <input placeholder="Your original URL here" id="inputUrl">
            <input type="button" value="Преобразовать" onclick="addLink();">
        </div>
        <div id="alert"></div>

        <div id="allLinks" class="content">
            <?= $allLinks ?>
        </div>

    </body>
</html>