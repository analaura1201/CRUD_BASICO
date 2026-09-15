<!-- Tela de cadastro/criar - (C do CRUD que é o create) -->
 <?php

 include("conexao.php");

 $nome = $_POST['nome'];
 $idade = $_POST['idade'];

 $sql = "INSERT INTO alunos(nome, idade) VALUES ('$nome', '$idade')";

 mysqli_query($conexao, $sql);

 echo "Aluno Cadastrado!";

 echo "<br><br>";

 echo "<a href='index.php'>Voltar</a>";