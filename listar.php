<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>♥ - Livros!! - ♥</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <td>Id</td> 
                <td>Nome</td>
                <td>Ano</td>
                <td>Cadastro</td>
                <td>Exemplares</td>
                <td>Controles</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include('conexao.php');
            include('data.php');
            include('script.php');
            $sql = 'SELECT * FROM livro ORDER BY nm_livro ASC';

            $executa = $GLOBALS['con']->query($sql);

            while($livro = $executa -> fetch_array()){
                echo '<tr>';
                echo '<td>'.$livro['id_livro'].'</td>';
                echo '<td>'.$livro['nm_livro'].'</td>';
                echo '<td>'.$livro['dt_livro'].'</td>';
                echo '<td>'.date('Y', strtotime($livro['dt_adicionado'])).'</td>';
                echo '<td>'.$livro['qtd_livro'].'</td>';
                echo '<td> <a href="excluir.php?id_livro='.$livro['id_livro'].'">Excluir</td>';
                echo '</tr>';
            }
            
            ?>
        </tbody>
    </table>
    <button onclick="voltar()">- Voltar -</button>
</body>
</html>