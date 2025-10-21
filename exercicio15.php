<?php 

/*
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
Data: 08 de Outubro de 2025
Descritivo: FOR/IF: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50.
*/

echo "Números primos entre 1 e 50:<br>";

for ($num = 2; $num <= 50; $num++) {
    $primo = true;

     // Testa se $num é divisível por algum número entre 2 e $num - 1
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $primo = false; // Não é primo
            break;
        }
    }
    // Se for primo, imprime
    if ($primo) {
        echo $num . "<br>";
    }
}

?>
