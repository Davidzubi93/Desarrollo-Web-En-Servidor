<html>
    <body>
        <?php
        //No funciona cuando metes un valor no NUMERICO!!
        
        $zenb=0;
        if(is_numeric($_GET["zenb"]) && $_GET["zenb"] >0 ){
            $zenb= $_GET["zenb"];
        }else{
            echo "Debes de insertar un numero: ";
            $zenb=0;
        }
        
        ?>
        <br>
        <table border="1">
            <?php
            for ($x=0;$x<$zenb;$x++){
                echo "<tr>
                <td>Patxi</td>
                <td>Egurre</td>
                </tr>";
            }
            ?>
        </table>
    </body>
</html>