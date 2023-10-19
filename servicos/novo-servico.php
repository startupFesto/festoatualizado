<!-- SCRIPT DA P?GINA FORMS DA CRIA??O DO SERVI?O DO PRESTADOR -->

<?php
header("Content-type: text/html; charset=ISO-8859-1");
if (isset($_POST['submit'])) {
    include_once('../conexao-mysql/conexao-banco.php');

    $nome_serv = $_POST['nome_serv'];
    $finalidade = $_POST['finalidade'];
    $preco = $_POST['preco'];
    $dias = $_POST['dias'];
    $cidades = $_POST['cidades'];
    $tam_equipe = $_POST['tam_equipe'];
    $fornecedor = $_POST['fornecedor'];
    $contato = $_POST['contato'];
    $pix = $_POST['pix'];
    $img_serv = $_FILES['img_serv'];

    $result = mysqli_query($conexao, "INSERT INTO servicos_prestadores(nome_serv,finalidade,preco,dias,cidades,tam_equipe,fornecedor,contato,pix,img_serv) VALUES ('$nome_serv','$finalidade','$preco','$dias','$cidades','$tam_equipe','$fornecedor','$contato','$pix','$img_serv')");

    header("Location: ../sistema/sys-prest.php");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Serviço</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>

<body>
    <div class="box">
        <form action="novo-servico.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend><b>Cadastrar novo serviço</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome_serv" id="nome_serv" class="inputUser" required>
                    <label for="nome_serv" class="labelInput">Nome do serviço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="finalidade" id="finalidade" class="inputUser" required>
                    <label for="finalidade" class="labelInput">Finalidade (Ex: Casamento, Shows, etc)</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="preco" id="preco" class="inputUser" required onkeyup=moeda(this)>
                    <label for="preco" class="labelInput">Preço (R$)</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="dias" id="dias" class="inputUser" required>
                    <label for="dias" class="labelInput">Dias disponíveis (da semana)</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidades" id="cidades" class="inputUser" required>
                    <label for="cidades" class="labelInput">Cidades atendidas</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tam_equipe" id="tam_equipe" class="inputUser" required>
                    <label for="tam_equipe" class="labelInput">Tamanho da equipe</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fornecedor" id="fornecedor" class="inputUser" required>
                    <label for="fornecedor" class="labelInput">Fornecedor (seu nome/empresa)</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="contato" id="contato" class="inputUser" required>
                    <label for="contato" class="labelInput">Contato</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="pix" id="pix" class="inputUser" required>
                    <label for="pix" class="labelInput">Chave PIX</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="file" name="fotos" id="fotos"  accept="image/png, image/jpeg" class="inputUser">
                    <label for="fotos" id="btnFoto">Fotos do serviço</label>
                  
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Enviar">
                <br><br>
                <a class="link" href="../sistema/sys-prest">Voltar</a>
            </fieldset>
        </form>
    </div>
    <script src="../js/servicos.js"></script>
</body>
</html>