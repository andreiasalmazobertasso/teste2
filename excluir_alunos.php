<?php
    ini_set('default_charset','UTF-8');
    $matricula = $_GET['id'];
    require 'conexao.php';
    if ($con) {
        //conexão ok
        mysqli_set_charset($con,'utf8');
        $sql="delete from alunos where alu_matricula=$matricula";
        if (mysqli_query($con,$sql)){
            echo "Aluno excluído com sucesso";
        }
        else {
            echo "Não foi possível excluir o aluno. <br>Erro: ".mysqli_error($con);
        }
        mysqli_close($con);
    }
    else {
        echo "Não foi possível conectar com o Banco de Dados.";
    }
    echo "<p align='center'><a href='pesq_alunos_todos.php'>Todos os Alunos</a></p>";
    echo "<p align='center'><a href='index.html'>Menu Principal</a></p>";
?>
