<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Formulario - Cliente</title>
</head>

<body>
  <form action="cliente_processa.php" method="post">
    <table>
      <tr>
        <td><label for="nome">Nome:</label></td>
        <td><input type="text" name="nome" id="nome" required></td>
      </tr>
      <tr>
        <td><label for="sobrenome">Sobrenome:</label></td>
        <td><input type="text" name="sobrenome" id="sobrenome" required></td>
      </tr>
      <tr>
        <td><label for="datanascimento">Data de nascimento:</label></td>
        <td><input type="date" name="datanascimento" id="datanascimento" required></td>
      </tr>
      <tr>
        <td><label for="email">E-mail:</label></td>
        <td><input type="email" name="email" id="email" required></td>
      </tr>
      <tr>
        <td><input type="submit" name="btn" id="btn" value="Enviar" required></td>
      </tr>
    </table>
  </form>

</body>

</html>