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
Descritivo: Procedimento: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi "Aprovado" (média>= 7) ou "Reprovado".
*/

//calcula a média
function calcularMediaAluno($nomeAluno) {

    $semestres = (int) readline("Digite o número de semestres de $nomeAluno: ");

    // Valida que o número de semestres seja positivo
    while ($semestres <= 0 or $semestres >= 5) {
        echo "Número de semestres inválido! Digite novamente.\n";
        $semestres = (int) readline("Digite o número de semestres de $nomeAluno: ");
    }

    // Array para armazenar as notas
    $notas = [];

    // Lê as notas de cada semestre
    for ($i = 1; $i <= $semestres; $i++) {
        do {
            $nota = (float) readline("Digite a nota do semestre $i (0 a 10): ");

            // Valida que a nota esteja entre 0 e 10
            if ($nota < 0 || $nota > 10) {
                echo "Digite um valor entre 0 e 10.\n";
            }
        } while ($nota < 0 || $nota > 10);

        $notas[] = $nota;
    }

    // Calcula a média
    $soma = array_sum($notas);
    $media = $soma / count($notas);

    // Garante que a média não ultrapasse 10
    if ($media > 10) {
        $media = 10;
    }

    // Exibe resultado
    echo "\nAluno: $nomeAluno\n";
    echo "Média final: " . number_format($media, 2) . "\n";

    if ($media >= 7) {
        echo "Aprovado!!!\n ";
    } else {
        echo "Reprovado!!!\n ";
    }
}

// Função principal
function principal() {
    do {
        // Lê o nome do aluno
        $nomeAluno = readline("Digite o nome do aluno: ");

        // Chama a função calcular média
        calcularMediaAluno($nomeAluno);

        // lançar nota de outro aluno
        $resposta = strtolower(readline("Deseja calcular a média de outro aluno? (s/n): "));

        echo "\n";

    } while ($resposta === 's');

    echo "Programa encerrado!\n";
}

// Executa o programa
principal();


?>
