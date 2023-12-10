<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os Alunos</title>
</head>
<body>
    <?php
        ini_set('default_charset', 'UTF-8');
        require 'conexao.php';
        $nome = $_POST['txtnome'];
        mysqli_set_charset($con,'utf8');
        if ($con)
        {
            $sql="select * from alunos where alu_nome like '$nome%' order by alu_nome";
            $result=mysqli_query($con,$sql);
            

            while ($dados=mysqli_fetch_assoc($result)){
                    $matricula=$dados['alu_matricula'];
                    $nome=$dados['alu_nome'];
                    $endereco=$dados['alu_endereco'];
                    $cidade=$dados['alu_cidade'];
                    $codigocurso=$dados['cur_codigo'];
                    echo "Matrícula: ".$matricula."<br>".
                         "Nome: ".$nome."<br>".
                         "Endereco: ".$endereco."<br>".
                         "Cidade: ".$cidade."<br>".
                         "Código do Curso: ".$codigocurso."<br>".
                         "<a href='excluir_alunos.php?id=$matricula'>Excluir</a><br><br>";
                         
            }
            mysqli_close($con);
        }
        
        echo "<p align='center'><a href='index.html'>Menu Principal</a></p>";

   ?>
</body>
</html>