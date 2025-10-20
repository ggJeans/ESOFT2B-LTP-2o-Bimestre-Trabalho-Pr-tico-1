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
Descritivo: FOREACH/IF: Dado um array de números [12, 5, 23, 18, 9, 45], imprima apenas os números maiores que 20.
*/

$numeros = [12, 5, 23, 18, 9, 45];

foreach ($numeros as $num) {

    if ($num > 20) {
        echo $num . "<br>";
    }
}
?>