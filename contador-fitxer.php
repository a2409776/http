<?php
$fitxer = 'contador.txt';
if (!file_exists($fitxer)) {
    file_put_contents($fitxer, '0');
}
$visitas = (int)file_get_contents($fitxer);
$visitas++;
file_put_contents($fitxer, $visitas);
echo "Has visitat aquesta pàgina $visitas vegades guardant el comptador en un fitxer.";
?>
