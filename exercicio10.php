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
Descritivo: 10.WHILE: Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.
*/

$numero = 2025;
$contador = 0;
$temp = $numero;

while ($temp > 0) {
    limparTela();
    $temp = (int)($temp / 10);
    $contador++;
}

echo "O número $numero tem $contador dígitos.";


// função para limpar a tela 
function limparTela() {
    if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {

        system('cls') || print("\033[2J\033[;H");
    } else {
        system('clear');
    }
}
?>

