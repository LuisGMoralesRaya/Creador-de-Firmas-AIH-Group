<?php

session_start();

session_unset();

session_destroy();

header("Location: http://luisgmorales.com.mx/demoEmailSignature/index.php");