<?php
// cadastro.php – exemplo simples de processamento de formulário
// exibe quaisquer valores enviados por POST (ou GET se preferir)

// decide qual superglobal usar com base no método
$data = $_POST;
if (empty($data)) {
    // se nada em POST, tenta GET para fins de teste
    $data = $_GET;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro processado</title>
</head>
<body>
    <h1>Dados recebidos</h1>
    <?php if (!empty($data)): ?>
        <ul>
            <?php foreach ($data as $key => $value): ?>
                <li><?php echo htmlspecialchars($key); ?>: <?php echo htmlspecialchars($value); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum dado foi enviado.</p>
    <?php endif; ?>
    <p>Aprenda PHP para saber o que fazer com eles.</p>
</body>
</html>