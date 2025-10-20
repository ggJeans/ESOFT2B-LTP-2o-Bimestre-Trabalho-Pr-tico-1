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
Descritivo:  Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev().
*/

function inverterString($texto) {
    $invertida = "";
    $tamanho = strlen($texto); // Pega o tamanho da string

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= $texto[$i];
    }

    return $invertida;
}

$frase = "Engenharia de Software!";
echo inverterString($frase);
?>