<?php

$color = array(4, 6, 11);

$longitud=count($color);

for($i=0;$i<$longitud;$i++){
    if($color[$i] == 4){
        echo "Blanco";
    }
}
?>

<!--comment
<?php
$color = array(4 => 'Blanco', 6 => 'Verde', 11=> 'Roja');
for ($i=0;$i<1;$i++)
{
    echo $color[4];
}
?>
-->