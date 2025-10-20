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
Data: 09 de Outubro de 2025
Descritivo: 7.WHILE: Crie um programa que peça ao usuário para adivinhar um número (ex: 7) e continue pedindo até que ele acerte.

*/

//Adiciona um numero aleatório de 1 a 100
$numeroSecreto = rand(1, 100);

//testa se o palpite é Diferente dp numero secreto
$palpite = (int)readline("digite um numero de 1 a 100: ");
while ($palpite != $numeroSecreto) {
    limparTela();
    if ($palpite > $numeroSecreto){
        echo "O numero é menor\n";
        $palpite = readline();
    }

    else {
        echo "O numero é maior\n";
        $palpite = readline();
    }
}
// Se o o numero estiver correto, exiba na tela
if ($palpite == $numeroSecreto){
    echo "O numero secreto é: ", $palpite;

}



// função para limpar a tela 
function limparTela() {
    if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {

        system('cls') || print("\033[2J\033[;H");
    } else {
        system('clear');
    }
}

?>
