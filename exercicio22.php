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
Descritivo: Array Associativo/FOREACH: Usando o array do exercício 21, 
imprima cada dado no formato "chave: valor"
*/

$dados = [
    "nome" => "Yuri Alberto",
    "idade" => 25,
    "nota" => 9.5
];

foreach ($dados as $chave => $valor) {
    echo "$chave: $valor<br>";
}

?>