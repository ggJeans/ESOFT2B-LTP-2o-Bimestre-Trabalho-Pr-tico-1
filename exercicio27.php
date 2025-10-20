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
Descritivo: Crie um array com as notas de um aluno em 4 disciplinas e calcule a média.

*************************************************************/

$notas = [
    "Matemática" => 80,
    "Português" => 40,
    "Naturezas" => 90,
    "Humanas" => 40,
    "Participação" => 70
];

$media = array_sum($notas) / count($notas);

echo "A média de suas notas é: " . $media;


?>