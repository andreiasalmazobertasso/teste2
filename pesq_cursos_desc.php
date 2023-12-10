<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos por Descrição</title>
</head>
<body>
    <?php
        ini_set('default_charset', 'UTF-8');
        require 'conexao.php';
        mysqli_set_charset($con,'utf8');
        
        $descricao=$_POST['txtdescricao'];
        if ($con)
        {
            $sql="select cur_codigo, cur_descricao 
                    from cursos 
                    where cur_descricao like '$descricao%' order by cur_descricao ";
            $result=mysqli_query($con,$sql);
            mysqli_close($con);
            while ($dados=mysqli_fetch_assoc($result)){
                $codigo=$dados['cur_codigo'];
                $descricao=$dados['cur_descricao'];
                echo "Código: ".$codigo."<br>".
                     "Descrição: ".$descricao."<br>".
                     "<a href='excluir_cursos.php?id=$codigo'>Excluir</a><br><br>";;
            } 
        }
        echo "<p align='center'><a href='index.html'>Menu Principal</a></p>";
   ?>
</body>
</html>