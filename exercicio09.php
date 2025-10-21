<?php


/***********************************************************

Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
            25178060-2 - Rodrigo Samuel Gulka
            25363636-2 - Jheymis Bueno Gonçalves
            25363611-2 - Thiago de Barros Inácio
            25363487-2 - Leonardo Schimock Silveira
            25357718-2 - Jean Carlos Siqueira dos Santos
Data: 21 de Outubro de 2025
Descritivo: Escreva um programa que leia números do usuário até que ele digite 0 e, <br>
no final, mostre a soma de todos os números digitados.

*************************************************************/

$numeros = [7, 3, 5, 8, 10, 4, 0, 2, 5, 6]; //soma até o 0 deve ser igual a 37.
$soma = 0;
$i = 0;

while ($numeros[$i] != 0) {
    $soma = $soma + $numeros[$i];
    $i++;
}

echo "A soma dos números digitados é: $soma";



?>
