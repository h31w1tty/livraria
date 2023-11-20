<?php
include('conexao.php');

if (isset($_GET['id_livro'])) {
    $id_livro = $_GET['id_livro'];
    $sql = 'DELETE FROM livro WHERE id_livro = ' . $id_livro;
    $executa = $con->query($sql);

    if ($executa) {
        echo '<script>
                alert("Livro Excluído!!")
                window.location = "listar.php"
              </script>';
    } else {
        echo 'Erro ao excluir livro: ' . $con->error;
    }
}
?>