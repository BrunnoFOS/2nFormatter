<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatador - Contatos</title>
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="icon" type="image/png" sizes="24x24" href="../assets/images/logo.png">
</head>

<body>
    <header>
        <img src="../assets/images/logo.png" alt="Logo da ClickMassa">
    </header>
    <main>
        <h1>Formatar nome do contato</h1>
        <form action="" method="get">
            <label for="nome">Insira o nome do contato.</label>
            <input type="text" name="nome" placeholder="EX: Brunno">
            <label for="empresa">Insira o nome da empresa.</label>
            <input type="text" name="empresa" placeholder="EX: Clickmassa">
            <button type="submit">Formatar</button>
        </form>
    </main>
    <section>
        <h1>Contato formatado:</h1>
            <ul>
                <li>
                    <?php
                    $nameInput = $_GET['nome'] ?? null;
                    $enterpriseInput = $_GET['empresa'] ?? null;
                    if ($nameInput != null && $enterpriseInput != null) {
                        $enterpriseUpper = strtoupper($enterpriseInput);
                        echo "<strong><p>$nameInput - $enterpriseUpper</p></strong>";
                    } else {
                        echo "<strong><p>EX: Brunno - CLICKMASSA</p></strong>";
                    }
                    ?>
                </li>
            </ul>
    </section>
</body>

</html>