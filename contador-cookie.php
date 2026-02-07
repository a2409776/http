<?php
$visitas = 1;
if (isset($_COOKIE['visitas'])) {
    $visitas = $_COOKIE['visitas'] + 1;
}
setcookie('visitas', $visitas, time() + 3600); // caduca en 1 hora
echo "Has visitat aquesta pàgina $visitas vegades amb cookies.";
?>
