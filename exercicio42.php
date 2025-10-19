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
Descritivo: 42.Função: Crie uma função maiorNumero que receba dois números e retorne o maior entre eles.

*/

// Recebe dois números e retorna o maior entre eles
function maiorNumero($a, $b) {
    return ($a > $b) ? $a : $b;
}

// Testa a função
echo "Maior número entre 12 e 9 é: " . maiorNumero(12, 9) . "\n\n";



?>