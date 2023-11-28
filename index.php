<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>♥ - A Livraria - ♥</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap');
        *{
            font-family: 'Roboto Mono', monospace;
        }
        body{
            position:relative;
            display: grid;
            justify-items: center;
            align-items: center;
            height: 100vh;
            background-image: gradient( 180deg, black, white);
        }
        fieldset{
            display: grid;
            padding:40px;
        }
        button{
            font-size: 20px;
            margin: 10px;
            border: 2px solid grey;
            box-shadow: #80808057 0 3px 13px 0;
            width: fit-content;
        }
        button:active{
            box-shadow: none;
        }
        input{
            border: 2px solid grey;
            font-size: 24px ;
        }
        .livros{
            width: fit-content;
            justify-self: center;
        }
        form{
            display: grid;
            justify-items: center;
        }
        div{
            display: grid;
            justify-items: center;
            height: fit-content;
        }
        legend{
            font-size: 40px;
        }
        label{
            font-size: 28px;
        }
    </style>
</head>
<body>
    
    <fieldset><legend>Cadastrar Livros</legend>
        <form method="post">

            <div class="item">
                <label>Nome do Livro</label>
                <input name="nome" type="text">
            </div>
            <div class="item">
                <label>Ano do Livro</label>
                <input name="ano" type="date">
            </div>
            <div class="item">
                <label>Quantidade de Exemplares</label>
                <input name="qtd" type="number">
            </div>
            <button>Cadastrar</button>
        </form>
        <button class="livros" onclick="listar()">♥ - Livros - ♥</a>
    </fieldset>
    

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
    ?>
    
</body>
</html>