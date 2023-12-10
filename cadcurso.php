<?php
    ini_set('default_charset','UTF-8');

    $codigo = $_POST['txtcodigo'];
    $descricao = $_POST['txtdescricao'];

    require 'conexao.php';

    if ($con) {
        //conexão ok
        mysqli_set_charset($con,'utf8');
        $sql="insert into cursos (cur_codigo, cur_descricao) values ($codigo,'$descricao')";
        if (mysqli_query($con,$sql)){
            echo "Curso cadastrado com sucesso";
        }
        else {
            echo "Não foi possível cadastrar o curso. <br>Erro: ".mysqli_error($con);
        }
        mysqli_close($con);
    }
    else {
        echo "Não foi possível conectar com o Banco de Dados.";
    }
    echo "<p align='center'><a href='index.html'>Menu Principal</a></p>";





?>