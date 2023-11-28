<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>♥ - Livros!! - ♥</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap');
        *{
            font-family: 'Roboto Mono', monospace;
        }
        body{
            display:grid;
        }
        main{
            width: 60vw;
            display: grid;
            justify-self: center;
            align-self: center;
        }
        .paginas{
            justify-self: center;
            display: flex;
            margin: 10px;
        }
        .btnpag{
            margin-inline: 10px;
        }
    </style>
</head>
<body>
    
<main>
    <table>
        <thead>
            <tr>
                <td>Id</td> 
                <td>Nome</td>
                <td>Ano</td>
                <td>Cadastro</td>
                <td>Exemplares</td>
                <td>Controles</td>
                <td>Atualizar</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include('conexao.php');
            include('data.php');
            include('script.php');
            $sql = 'SELECT * FROM livro ORDER BY nm_livro ASC';

            $executa = $GLOBALS['con']->query($sql);

            $total = $executa->num_rows;
            $pp = 5;
            $pag = ceil($total/$pp);
            $atual = (isset($_GET['p'])) ? $_GET['p'] : 1;
            $inicio = ($atual * $pp) - $pp;

            $sql = 'SELECT * FROM livro LIMIT '.$inicio.','.$pp;
            $executa = $GLOBALS['con']->query($sql);


            while($livro = $executa -> fetch_array()){
                echo '<tr>';
                echo '<td>'.$livro['id_livro'].'</td>';
                echo '<td>'.$livro['nm_livro'].'</td>';
                echo '<td>'.$livro['dt_livro'].'</td>';
                echo '<td>'.date('d/m/Y', strtotime($livro['dt_adicionado'])).'</td>';
                echo '<td>'.$livro['qtd_livro'].'</td>';
                echo '<td> <a href="excluir.php?id_livro='.$livro['id_livro'].'">Excluir</td>';
                echo '<td> <a href="atualizar.php?id='.$livro['id_livro'].'">Editar</td>';
                echo '</tr><div class="paginas">';
            }
            for($i = 0; $i < $pag; $i++){
                echo '<a href="?p='.($i + 1).'"><button class="btnpag">'.($i + 1).'</button></a>';
            }
            
            ?></div>
        </tbody>
    </table>
    <button onclick="voltar()">- Voltar -</button>
</main>
</body>
</html>