<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>
<body>

    <?php
        ini_set('default_charset', 'UTF-8');
        require 'conexao.php';
        mysqli_set_charset($con,'utf8');
        if ($con)
        {
            $sql='select cur_codigo, cur_descricao from cursos order by cur_descricao';
            $result=mysqli_query($con,$sql);
            mysqli_close($con);
        }
    ?>

    <form align="center" action="cadaluno.php" method="POST">
        <table align="center" border="1" width="740">
            <tr>
                <td bgcolor=#606060 align="center"><font color="#FFFFFF">Cadastro de Aluno</font></td>
            </tr>
            <tr>
                <td>Matrícula:  <input type="text" size="15" name="txtmatricula"></td>
            </tr>
            <tr>
               <td>Nome:  <input type="text" size="50" name="txtnome"></td>
            </tr>
            <tr>
                <td>Endereço:  <input type="text" size="50" name="txtendereco"></td>
            </tr>
            <tr>
                <td>Cidade:  <input type="text" size="50" name="txtcidade"></td>
            </tr>
            <tr>
                <td>Curso: 
                    <select name="curso">
                        <option value="null">Selecione...</option>
                        <?php
                            while($dados=mysqli_fetch_assoc($result))
                            {
                                echo "<option value='".$dados['cur_codigo'] ."'>".$dados['cur_descricao']."</option>";

                            }
                        ?>

                    </select>
      
                </td> 
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
            </tr>
      </table>
    </form>
</body>
</html>