<?php /*
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
Descritivo: 34.Procedimento: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é "Par" ou "Ímpar".
*/

function verificarParImpar (){
$numero = (int)readline("digite um numero: ");

    if ($numero %2 == 0) {
        echo "Par";

    } else{
        echo "impar";
    }
    
};

verificarParImpar();
?>