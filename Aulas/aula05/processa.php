<?php

if ($_POST['email'] == 'etec@gmail.com' && $_POST['senha'] == '12345') {
    $_SESSION['logado'] = true;
    header("Location: privada.php");
} else {
    header("Location: erro.php");
}