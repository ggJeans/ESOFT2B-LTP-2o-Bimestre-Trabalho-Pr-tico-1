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
Descritivo: Crie uma função contarVogais que receba uma string e retorne o número de vogais.

*************************************************************/

function contarVogais($palavra) {
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $contador = 0;

    for ($i = 0; $i < strlen($palavra); $i++) {
        if (in_array($palavra[$i], $vogais)) {
            $contador++;
        }
    }

    return $contador;
}

$frase = "Uma vez Flamengo, sempre Flamengo!";
echo "A frase contém " . contarVogais($frase) . " vogais.";

?>