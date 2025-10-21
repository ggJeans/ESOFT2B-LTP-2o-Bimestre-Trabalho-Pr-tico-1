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
Descritivo: 20.Array/FOR: Crie um array com os 7 dias da semana e imprima-os usando um laço for.

*/

// array dias da semana
$dias = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];


// exibi cada dia do arrays
for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$i], "\n";

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
