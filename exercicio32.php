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
Descritivo: Procedimento com Parâmetro: Crie um procedimento saudacaoUsuario que receba um nome como parâmetro e imprima "Olá, [nome]!"
*/

function saudacaoUsuario($nome) {
    echo "Olá, $nome!<br>";
}

// Chamada do procedimento
saudacaoUsuario("Jheymis");
saudacaoUsuario("Thiago");
saudacaoUsuario("Leonardo");
saudacaoUsuario("Jean");
?>