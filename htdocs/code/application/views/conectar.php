<?php

require_once("mysql.php");

// Creando instancia de la clase
$socket = new mysql();

$socket->server = "sql210.260mb.net";
$socket->user = "n260m_16685188";
$socket->pass = "nicefood";
$socket->data_base = "n260m_16685188_nicefood";

$socket->conectar();

?>