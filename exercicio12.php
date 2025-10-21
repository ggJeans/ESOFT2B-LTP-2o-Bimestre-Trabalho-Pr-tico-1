<?php


/***********************************************************

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
Data: 21 de Outubro de 2025
Descritivo: Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para <br>
mostrar o menu até que o usuário escolha "Sair".

*************************************************************/

do {
    echo "1. Iniciar <br>";
    echo "2. Parar <br>";
    echo "3. Sair <br>";
    echo "Escolha uma opção:<br>";
    $opcao = readline();

    switch ($opcao) {
        case 1:
            echo "Você escolheu Iniciar.<br>";
            break;
        
        case 2:
            echo "Você escolheu Parar.<br>";
            break;
        
        case 3:
            echo "Saindo do programa...<br>";
            break;
        
        default:
            echo "Opção inválida! Tente novamente.<br>";
    }

} while ($opcao != 3);


?>

