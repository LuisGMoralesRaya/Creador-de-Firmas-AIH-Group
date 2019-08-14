<?php

session_start();

session_unset();

session_destroy();

header("Location: http://generador-de-firmas.aihgroup.com.mx/index.php");