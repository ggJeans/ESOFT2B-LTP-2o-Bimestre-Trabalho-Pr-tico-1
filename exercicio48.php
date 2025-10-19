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
Descritivo: 48.Função: Escreva uma função fatorial que receba um número e retorne seu fatorial.
*/


// Calcula o fatorial de um número e retorna o resultado
function fatorial($n) {
    $resultado = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Testa a função
echo "Fatorial de 5 é: " . fatorial(5) . "\n";
?>
