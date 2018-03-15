<?php
    $servidor_mysql = 'localhost';
    $nome_banco = 'livraria';
    $usuario = 'root';
    $senha = '';
    
    $conn = new PDO("mysql:host=$servidor_mysql;dbname=$nome_banco","$usuario","$senha");
    
    //insere registro na tabela
   // $conn->query("insert into livros values ('3-19089-795-4','PHP CES/JF', 1,2016, 'Livro usado na disciplina',36)");
    
    
    
    echo " <h3> Operacao realizada com sucesso!</h3>"
?>