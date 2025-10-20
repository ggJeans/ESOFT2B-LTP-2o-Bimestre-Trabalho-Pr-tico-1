<?php


/***********************************************************

Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
            25363636-2 - Jheymis Bueno Gonçalves
            25363611-2 - Thiago de Barros Inácio
            25363487-2 - Leonardo Schimock Silveira
            25357718-2 - Jean Carlos Siqueira dos Santos
Data: 21 de Outubro de 2025
Descritivo: Crie um procedimento mostrarDados que receba nome, idade e cidade e os imprima de forma organizada

*************************************************************/

function mostrarDados($nome, $idade, $cidade) {
    echo "A seguir seus dados que foram vazados:" . "<br>";
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Cidade: $cidade <br>";
}


mostrarDados("Leonardo Schimock", 20, "Curitiba");


?>