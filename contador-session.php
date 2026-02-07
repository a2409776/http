<?php
session_start();
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 1;
} else {
    $_SESSION['visitas']++;
}
echo "Has visitat aquesta pàgina ".$_SESSION['visitas']." vegades amb session.";
?>
