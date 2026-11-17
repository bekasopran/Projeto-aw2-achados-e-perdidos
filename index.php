<?php
// Conexão com o banco de dados
$conexao = new mysqli("localhost", "root", "", "achados_perdidos");

// Buscar os objetos cadastrados
$sql = "SELECT * FROM objetos";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achados e Perdidos</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

    <header>
        <h1>Achados e Perdidos</h1>
        <p>Consulte os objetos encontrados e procure pelo seu!</p>
    </header>

    <main>
        <h2>Lista de objetos encontrados</h2>

        <table>
            <tr>
                <th>Objeto</th>
                <th>Descrição</th>
                <th>Local encontrado</th>
                <th>Data</th>
                <th>Situação</th>
            </tr>

             <?php
            // Mostrar os objetos na tabela
            while ($linha = $resultado->fetch_assoc()) {
            ?>

            <tr>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha['descricao']; ?></td>
                <td><?php echo $linha['local']; ?></td>
                <td><?php echo $linha['data']; ?></td>
                <td><?php echo $linha['situacao']; ?></td>
            </tr>

            <?php
            }
            ?>

        </table>
    </main>

    <footer>
        <p>Projeto Achados e Perdidos - 2026</p>
    </footer>

</body>
</html>
