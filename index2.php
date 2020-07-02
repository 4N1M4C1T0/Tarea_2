
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="nro1" value="<?=(isset($_POST["nro1"]))?$_POST["nro1"]:''?>" placeholder="Ingrese un numero">
    <input type="submit" name="operacion" value="Calcular">

</form>
<?php
if (isset($_POST["operacion"])) {
    $nro1 = (int) $_POST["nro1"];
    $cont=0;

        for($i=1;$i<=$nro1;$i++){
            if($nro1%$i==0){
                $cont++;
            }
        }
        if($cont==2){
            echo "el numero: ".$nro1." es primo";
        }
        else{
            echo "el numero: ".$nro1." no es primo";
        }
    }
?>