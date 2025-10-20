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
Descritivo: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.

*************************************************************/

$carro = [
    "Marca" => "Volkswagen",
    "Modelo" => "Golf",
    "Ano" => 2017
];

function mostrarCarro($carro) {
    echo "Essas são as informações do seu carro: <br>";
    echo "Marca: " . $carro["Marca"] . "<br>";
    echo "Modelo: " . $carro["Modelo"] . "<br>";
    echo "Ano: " . $carro["Ano"] . "<br>";
}

mostrarCarro($carro);

?>