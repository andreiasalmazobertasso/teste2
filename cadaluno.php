<?php
    ini_set('default_charset','UTF-8');

    $matricula = $_POST['txtmatricula'];
    $nome = $_POST['txtnome'];
    $endereco = $_POST['txtendereco']; 
    $cidade = $_POST['txtcidade'];
    $codigocurso = $_POST['curso'];

    require 'conexao.php';

    if ($con) {
        //conexão ok
        mysqli_set_charset($con,'utf8');
        $sql="insert into alunos (alu_matricula, alu_nome, alu_endereco, alu_cidade, cur_codigo) values ($matricula,'$nome','$endereco','$cidade',$codigocurso)";
        if (mysqli_query($con,$sql)){
            echo "Aluno cadastrado com sucesso";
        }
        else {
            echo "Não foi possível cadastrar o Aluno. <br>Erro: ".mysqli_error($con);
        }
        mysqli_close($con);
    }
    else {
        echo "Não foi possível conectar com o Banco de Dados.";
    }
    echo "<p align='center'><a href='index.html'>Menu Principal</a></p>";





?>