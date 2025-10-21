<?php /*
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
Descritivo: 14.DO-WHILE: Escreva um programa que leia um número e o imprima. O programa deve repetir até que o número lido seja negativo.

*/

// Lê números do usuário até que ele digite um valor negativo
do {
    $numero = (int) readline("Digite um número negativo: ");
    if ($numero >= 0) {
        echo "Você digitou: $numero\n";
    }
} while ($numero >= 0);

?>
