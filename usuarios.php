<?php
$indexPath = __DIR__ . '/index.php';
$exists = file_exists($indexPath);
$size = $exists ? filesize($indexPath) : null;
$mtime = $exists ? date("d/m/Y H:i:s", filemtime($indexPath)) : null;
$perms = $exists ? substr(sprintf('%o', fileperms($indexPath)), -4) : null;
?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Informações sobre index.php</title>
<link rel="stylesheet" href="estilo2.css">
</head>
<body>
<div class="container">
  <h1>Informações sobre <code>index.php</code></h1>

  <?php if ($exists): ?>
  <table class="info-table" role="table" aria-label="Informações sobre index.php">
    <thead>
      <tr><th>Propriedade</th><th>Valor</th></tr>
    </thead>
    <tbody>
      <tr><td>Nome do arquivo</td><td>index.php</td></tr>
      <tr><td>Caminho</td><td><?php echo htmlspecialchars($indexPath); ?></td></tr>
      <tr><td>Tamanho</td><td><?php echo number_format($size, 0, ',', '.'); ?> bytes</td></tr>
      <tr><td>Última modificação</td><td><?php echo $mtime; ?></td></tr>
      <tr><td>Permissões (octal)</td><td><?php echo $perms; ?></td></tr>
      <tr><td>Link</td><td><a href="index.php" class="btn">Abrir index.php</a></td></tr>
    </tbody>
  </table>
  <?php else: ?>
  <div class="notice">Arquivo <strong>index.php</strong> não encontrado em: <?php echo htmlspecialchars($indexPath); ?></div>
  <?php endif; ?>
</div>
</body>
</html>