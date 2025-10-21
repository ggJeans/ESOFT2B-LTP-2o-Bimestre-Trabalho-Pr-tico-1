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
Descritivo: Função: Elabore uma função ehPrimo que receba um número e 
retorne true se ele for primo e false caso contrário.
*/

function ehPrimo($num) {
    if ($num < 2) return false;

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$numero = 7;

if (ehPrimo($numero)) {
    echo "$numero é primo.";
} else {
    echo "$numero não é primo.";
}

?>