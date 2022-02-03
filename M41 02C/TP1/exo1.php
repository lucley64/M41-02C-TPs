<html>

<head>
    <script>
        function villeExiste(str) {
            if (str.length == 0) {
                document.getElementById("nomVille").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("nomVille").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "verifVille.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>
    <form action="" method="post">
        <input type="text" onkeyup="villeExiste(this.value)">
        <p>La ville <span id="nomVille"></span></p>
    </form>
</body>

</html>