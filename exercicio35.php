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
Descritivo: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.

*************************************************************/

$idades = [7, 20, 46, 52];

function imprimirArray($idades) {
    echo "Seu array com idades é: ";
    
    foreach ($idades as $idade) {
        echo $idade . " ";

    }
}

imprimirArray($idades);


?>