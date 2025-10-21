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
Descritivo: Função com Array: Crie uma função obterPrimeiroElemento que receba um array 
e retorne seu primeiro elemento
*/

function obterPrimeiroElemento($array) {
    return $array[0];
}

$numeros = [10, 20, 30, 40];
echo "O primeiro elemento é: " . obterPrimeiroElemento($numeros);

?>