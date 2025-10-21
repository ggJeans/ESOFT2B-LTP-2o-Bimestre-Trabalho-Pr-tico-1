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
Descritivo: Faça um programa que solicite uma senha ao usuário. 
O programa só deve continuar quando a senha correta("1234") for digitada.
*/
$senha_correta = "1234";

if (isset($_POST['senha'])) {
    if ($_POST['senha'] === $senha_correta) {
        echo "Senha correta! Acesso permitido.";
        exit;
    } else {
        echo "Senha incorreta! Tente novamente.<br>";
    }
}
?>

<form method="post">
    Digite a senha: <input type="password" name="senha">
    <input type="submit" value="Entrar">
    
</form>