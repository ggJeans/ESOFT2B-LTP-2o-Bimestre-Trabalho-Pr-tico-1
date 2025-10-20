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
Descritivo:  Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n.
*/

function gerarArrayPares($n) {
    $pares = array();
    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i; // Adiciona o número par ao array
        }
    }
    return $pares;
}

$n = 10;
$arrayPares = gerarArrayPares($n);
print_r($arrayPares);
?>