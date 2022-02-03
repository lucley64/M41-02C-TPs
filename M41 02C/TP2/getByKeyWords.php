<html>
    <head>

    </head>
    <body>
        <form method="POST">
            <input type="text" name="keyWords" id="keyWords">
            <input type="submit" value="rechercher">
        </form>
        <?php
            if (isset($_POST['keyWords'])) {
                $keyWords = $_POST['keyWords'];
                $keyWords = str_replace(' ', '+', $keyWords);
                
                

            }
        ?>
    </body>
</html>