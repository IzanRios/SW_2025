<?php
    $usuario= $_POST['cxnome'];
    $senha= $_POST['cxsenha'];

    if ($usuario == "etec" && $senha == "informatica"){
        echo "logado com sucesso";
    }else{
        echo "erro, não logado";
    }

?>