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
Descritivo: Array/Busca: Crie um array de frutas. Escreva um código que verifique
se a fruta "Maçã" existe no array.
*/

$frutas = ["Banana", "Maçã", "Laranja", "Uva"];

if (in_array("Maçã", $frutas)) {
    echo "A fruta Maçã está no array.";
} else {
    echo "A fruta Maçã não está no array.";
}

?>