<?php
$nome = "João Silva";
$email = "joao@email.com";
$idade = 25;
$cidade = "São Paulo";
$status = "Ativo";
?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Informações do Usuário</title>
<link rel="stylesheet" href="estilo2.css">
</head>
<body>
<div class="container">
  <h1>Informações do Usuário</h1>

  <table class="info-table" role="table" aria-label="Informações do usuário">
    <thead>
      <tr>
        <th>Propriedade</th>
        <th>Valor</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nome</td>
        <td><?php echo $nome; ?></td>
      </tr>

      <tr>
        <td>Email</td>
        <td><?php echo $email; ?></td>
      </tr>

      <tr>
        <td>Idade</td>
        <td><?php echo $idade; ?> anos</td>
      </tr>

      <tr>
        <td>Cidade</td>
        <td><?php echo $cidade; ?></td>
      </tr>

      <tr>
        <td>Status</td>
        <td><?php echo $status; ?></td>
      </tr>
    </tbody>
  </table>

</div>
</body>
</html>