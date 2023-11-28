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
    
        <?php
        include('conexao.php');

        if(isset($_GET['id'])){
            $sql = 'SELECT * FROM livro WHERE id_livro = '.$_GET['id'];
            $con = $GLOBALS['con']->query($sql);
            $livro = $con->fetch_array();
        ?>

    <fieldset><legend>Atualizar Livros</legend>
        <form method="post">
            
            <input type="hidden" name="id" value="<?php echo $livro['id_livro']; ?>">
            <div class="item">
                <label>Nome do Livro</label>
                <input name="nome" type="text" value="<?php echo $livro['nm_livro']; ?>">
            </div>
            <div class="item">
                <label>Ano do Livro</label>
                <input name="ano" type="date" value="<?php echo $livro['dt_adicionado']; ?>">
            </div>
            <div class="item">
                <label>Quantidade de Exemplares</label>
                <input style="text-align: center;" name="qtd" type="number" value="<?php echo $livro['qtd_livro']; ?>">
            </div>
            <button>Atualizar</button>
        </form>
    </fieldset>
    <?php
    include('conexao.php');
        }
        if($_POST){
            $sql = 'UPDATE livro SET nm_livro = "'.$_POST['nome'].'", dt_livro = "'.$_POST['ano'].'", qtd_livro ='.$_POST['qtd'].' WHERE id_livro = '.$_POST['id'];

            $res = $GLOBALS['con']->query($sql);
            if($res){
                echo "atualizado";
            }
            else{
                echo "erro ao atualizar: ".$sql;
            }
        }
        include('script.php');
    ?>
    <button onclick="listar()">- Voltar -</button>
    <button onclick="voltar()">- Cadastrar -</button>
</body>
</html>