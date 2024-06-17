<?php
    require_once "banco.php";
    session_start();

    $conexao = Conectar();
    echo $_POST['email'];
    if(!empty($_POST['email'])){
        $email = $_POST['email'];

        $sql = "SELECT * FROM funcionario WHERE email = '$email'";
        echo $sql;
        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result) > 0){
            header("Location:../homePage.php");
            die();
        } else {
            $_SESSION['resSenha'] = "O email não existe!";
            header("Location:../redefinirSenha.php");
            die();
        }
    } else {
        $_SESSION['resSenha'] = "Preencha o campo!";
        header("Location:../redefinirSenha.php");
        die();
    }
?>