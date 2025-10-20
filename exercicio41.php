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
Descritivo: Função: Crie uma função chamada somar que receba dois números e retorne a soma deles.
*/

function somar($num1, $num2) {
    return $num1 + $num2;
}

$resultado = somar(5, 7);
echo "A soma é: " . $resultado;
?>