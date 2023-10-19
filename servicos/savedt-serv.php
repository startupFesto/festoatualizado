<!-- SCRIPT PARA SALVAR A EDIÇÃO DOS DADOS DO USUÁRIO NO BANCO-->

<?php 

  include_once("../conexao-mysql/conexao-banco.php");

  if(isset($_POST["update"]))
  {
    $id_serv = $_POST['id_serv'];
    $nome_serv = $_POST['nome_serv'];
    $finalidade = $_POST['finalidade'];
    $preco = $_POST['preco'];
    $dias = $_POST['dias'];
    $cidades = $_POST['cidades'];
    $tam_equipe = $_POST['tam_equipe'];

    $sqlUpdate = "UPDATE servicos_prestadores SET nome_serv ='$nome_serv', finalidade ='$finalidade', preco ='$preco', dias ='$dias', cidades ='$cidades', tam_equipe ='$tam_equipe' WHERE id_serv='$id_serv'";

    $result = $conexao->query($sqlUpdate);
  }

  header('location: meus-servicos.php');

?>