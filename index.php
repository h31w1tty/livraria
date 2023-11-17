<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>♥ - A Livraria - ♥</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Cadastrar Livros</legend>
            <div class="item">
                <label>Nome do Livro</label><br>
                <input name="nome" type="text">
            </div>
            <div class="item">
                <label>Ano do Livro</label><br>
                <input name="ano" type="date">
            </div>
            <div class="item">
                <label>Quantidade de Exemplares</label><br>
                <input name="qtd" type="number">
            </div>
            <button>Cadastrar</button>
        </fieldset>
    </form>

    <?php
    
    include('conexao.php'); //adicionando o arquivo que contem conexão ao banco
    include('data.php');
    include('script.php');

    if($_POST){
        $nome = $_POST['nome'];
        $qtd = $_POST['qtd'];
        $ano = $_POST['ano'];
        $hoje = date('Y/m/d');

        //preparar consulta sql a pertir de variáveis
        $sql = 'INSERT INTO livro VALUES (null, "'.$nome.'", "'.$ano.'", "'.$hoje.'", "'.$qtd.'")';
        $executa = $GLOBALS['con']->query($sql);// comando enviado para o sql executar mudança
        if($executa){
            echo "<br>cadastrado com sucesso";
        }else{
            echo "fudeu";
        }
        
    }
    echo '<button onclick="listar()">♥ - Livros - ♥</a>';
    ?>
</body>
</html>