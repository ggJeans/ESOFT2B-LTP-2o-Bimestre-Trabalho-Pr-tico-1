<?php


/***********************************************************

Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
            25363636-2 - Jheymis Bueno Gonçalves
            25363611-2 - Thiago de Barros Inácio
            25363487-2 - Leonardo Schimock Silveira
            25357718-2 - Jean Carlos Siqueira dos Santos
Data: 21 de Outubro de 2025
Descritivo: Escreva uma função calcularAreaRetangulo que receba a largura e a altura e retorne a área.

*************************************************************/

function calcularAreaRetangulo($base, $altura) {
    return $base * $altura;
}

$area = calcularAreaRetangulo(5, 15);
echo "A area do retangulo é: " . $area . " m².";


?>