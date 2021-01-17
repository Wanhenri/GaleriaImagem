<html>
    <head>
        <script src="js/jquery-3.5.1.min.js"></script>

        <script>
            function CarregaImg(foto){
                $("#FotoGrande").html(" <img src='img/clima/"+ foto +"' width='1000' height='700'/>");
            }
        </script>
    </head>
    <body>
        <div id="FotoGrande">
            <img src="img/clima/img1.jpg" width="1000" height="700"/>
        </div>

        <div>
            <img src="img/clima/img2.jpg" name="img2.jpg" width="350" height="200" onClick="javascript:CarregaImg(this.name)"/>
            <img src="img/clima/img3.jpg" name="img3.jpg" width="350" height="200" onClick="javascript:CarregaImg(this.name)"/>
            <img src="img/clima/img4.jpg" name="img4.jpg" width="350" height="200" onClick="javascript:CarregaImg(this.name)"/>
        </div>

        <?php
            echo "<br> Listando imagens com php <br>";

            $dir = "img/clima/";
            $diretorio = dir($dir);

            while($arquivo = $diretorio->read()){
                if( $arquivo != '.' && $arquivo != '..'){
                    echo "<img src='".$dir.$arquivo."' name='".$arquivo."' width='350' height='200' onClick='javascript:CarregaImg(this.name)'/>";
                }
            }
        ?>

    </body>
</html>