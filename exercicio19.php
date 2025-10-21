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
Descritivo: FOREACH: Usando o array de números do exercício 17, 
calcule e imprima a soma de todos os números com foreach.
*/

$numeros = [5, 10, 15, 20, 25];
$soma = 0;

foreach ($numeros as $n) {
    $soma += $n;
}

echo "A soma dos números é: $soma";

?>