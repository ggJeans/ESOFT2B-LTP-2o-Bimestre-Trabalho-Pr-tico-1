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
Descritivo: Função: Elabore uma função converterParaMaiusculas que receba uma string e a retorne em letras maiúsculas.
*/

function converterParaMaiusculas($texto) {
    return strtoupper($texto);
}

$frase = "Engenharia de Software!";
$fraseMaiuscula = converterParaMaiusculas($frase);
echo $fraseMaiuscula;
?>