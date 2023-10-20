<!-- SCRIPT DA LISTAGEM EDIÇÃO E EXCLUSÃO DOS SERVICOS -->
<?php
header("Content-type: text/html; charset=ISO-8859-1");

include_once("conexao-mysql/conexao-banco.php");

$sql = "SELECT * FROM servicos_prestadores ORDER BY id_serv DESC";

$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servi�os dispon�veis</title>
    <link rel="icon" type="image/x-icon" href="assets/festo.ico">
    <link rel="stylesheet" href="css/sistemas.css">
</head>

<body>
    <div class="banner">
        <a href="index.html">Voltar</a>
        <h1>
            Servi�os dispon�veis
        </h1>
        <table>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<div class='classe'>";

                    echo "<ul class='dados-perfil'><li><img src='../assets/placeholder.jpg' width='100px'></li></ul>";
                    echo "<ul class='dados-perfil' id='aa'>";
                    echo "<li>Nome do servi�o: </li>";
                    echo "<li>Finalidade: </li>";
                    echo "<li>Pre�o: </li>";
                    echo "<li>Dias dispon�veis:</li>";
                    echo "<li>Cidades atendidas:</li>";
                    echo "<li>Tamanho da equipe:</li>";
                    echo "<li>Fornecedor: </li>";
                    echo "<li>Contato: </li>";
                    echo "<li>Chave PIX: </li>";
                    echo "</ul>";

                    echo "<ul class='dados-perfil'>";
                    echo "<li>" . $user_data["nome_serv"] . "</li>";
                    echo "<li>" . $user_data["finalidade"] . "</li>";
                    echo "<li>" . $user_data["preco"] . "</li>";
                    echo "<li>" . $user_data["dias"] . "</li>";
                    echo "<li>" . $user_data["cidades"] . "</li>";
                    echo "<li>" . $user_data["tam_equipe"] . "</li>";
                    echo "<li>" . $user_data["fornecedor"] . "</li>";
                    echo "<li>" . $user_data["contato"] . "</li>";
                    echo "<li>" . $user_data["pix"] . "</li>";
                    echo "</ul>";
                    echo "</div>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>