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
Descritivo: Procedimento: Crie um procedimento contagemRegressiva que receba um número 
e imprima uma contagem regressiva a partir dele até 0.
*/

function contagemRegressiva($num) {
    while ($num >= 0) {
        echo $num . "<br>";
        $num--;
    }
}

contagemRegressiva(10);

?>