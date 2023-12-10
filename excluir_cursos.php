<?php
    ini_set('default_charset','UTF-8');
    $codigo = $_GET['id'];
    require 'conexao.php';
    if ($con) {
        //conexão ok
        mysqli_set_charset($con,'utf8');
        $sql="delete from cursos where cur_codigo=$codigo";
        if (mysqli_query($con,$sql)){
            echo "Curso excluído com sucesso";
        }
        else {
            echo "Não foi possível excluir o curso. <br>Erro: ".mysqli_error($con);
        }
        mysqli_close($con);
    }
    else {
        echo "Não foi possível conectar com o Banco de Dados.";
    }
    echo "<p align='center'><a href='pesq_cursos_todos.php'>Todos os Cursos</a></p>";
    echo "<p align='center'><a href='index.html'>Menu Principal</a></p>";
?>
