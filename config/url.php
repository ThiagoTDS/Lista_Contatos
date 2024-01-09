<?php
        //Protocolo http   servidor            diretorio        solicitacao 
$BASE_URL = "http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

?>