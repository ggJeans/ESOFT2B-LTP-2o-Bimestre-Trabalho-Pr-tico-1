<?php /*
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
Descritivo: Array Associa"tivo: Crie um array de produtos, onde cada produto é um array associativo com "nome" e "preço".
*/
$produto = [
    ["nome" => "Arroz", "preco" => 5.50],
    ["nome" => "Feijão", "preco" => 7.20],
    ["nome" => "Macarrão", "preco" => 4.00]
];

foreach ($produto as $produto) {
echo "Produto: {$produto['nome']} - Preço: R$ {$produto['preco']}\n";
};


?>