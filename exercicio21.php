<?php 

/*
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
25363636-2 - Jheymis Bueno Gonçalves
25363611-2 - Thiago de Barros Inácio
25363487-2 - Leonardo Schimock Silveira
25357718-2 - Jean Carlos Siqueira dos Santos
Data: 08 de Outubro de 2025
Descritivo: Array Heterogêneo (Associativo): Crie um array associativo para armazenar os dados de um aluno (nome, idade, curso).
*/

$aluno = array(
    "nome" => "Jheymis Bueno",
    "idade" => 26,
    "curso" => "Engenharia de Software"
);

// Exibindo os dados do aluno
echo "Nome: " . $aluno["nome"] . "<br>";
echo "Idade: " . $aluno["idade"] . "<br>";
echo "Curso: " . $aluno["curso"] . "<br>";

?>
