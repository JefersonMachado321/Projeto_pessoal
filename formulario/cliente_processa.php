 <meta charset="UTF-8">
 <?php
  require_once "conexao.php";
  //Declarar variaveis
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $datanascimento = $_POST['datanascimento'];
  $email = $_POST['email'];
  //Comando SQL de insert
  $sql = "INSERT INTO cliente
    (nome,sobrenome,datanascimento,email)
     VALUES
     ('$nome','$sobrenome','$datanascimento','$email')";
  //Função que executa o comando SQL
  if (mysqli_query($conn, $sql) == true) {
    echo "Registro inserido com sucesso!";
  } else {
    echo "Erro registro não inserido!";
  }
  ?>
 <a href="cliente_formulario.php">Volta</a>