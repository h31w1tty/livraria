<?php
    include('conexao.php');
    
    if(isset($_GET['id_livro'])){
        $sql = 'DELETE FROM livro WHERE id_livro = '.$_GET['id_livro'];
        $executa = $GLOBALS['con'] -> query($sql);
        if($executa){
            echo '<script>
                    alert("Livro Excluido!!")
                    window.location = "listar.php"
                  </script>';
        }else{
            echo 'Erro ao excluir livro: '.$GLOBALS['con'] -> error;
        }
    }