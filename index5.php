<?php
$color = array(4 => 'Blanco', 6 => 'Verde', 11=> 'Roja');
for ($i=0;$i<1;$i++)
{
    echo $color[4];
}
?>

<?php

$color = array(4 => 'Blanco', 6 => 'Verde', 11=> 'Roja');

$longitud=count($color);

for($i=0;$i<$longitud;$i++){
    if($color[$i] == $color[4]){
        echo $color[4];
    }
}
?>