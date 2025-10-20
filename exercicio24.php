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
Descritivo: FOREACH Aninhado: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.
*/

$produtos = [
    ["nome" => "Arroz", "preco" => 5.50],
    ["nome" => "Feijão", "preco" => 7.20],
    ["nome" => "Macarrão", "preco" => 4.00]
];

    // Foreach aninhado
foreach ($produtos as $item) {
    foreach ($item as $chave => $valor) {
        echo ucfirst($chave) . ": " . $valor . "<br>";
    }
    echo "<br>"; // linha em branco entre produtos
}
?>