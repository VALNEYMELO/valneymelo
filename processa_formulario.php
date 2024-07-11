<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome_aluno'];
    $data_nasc = $_POST['nasc_aluno'];
    $sexo = $_POST['sexo'];

    // Exemplo de validação simples
    if (empty($matricula) || empty($nome) || empty($data_nasc) || empty($sexo)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Aqui você pode adicionar código para salvar os dados em um banco de dados ou processá-los de outra forma
        echo "Cadastro realizado com sucesso!<br>";
        echo "Matricula: " . htmlspecialchars($matricula) . "<br>";
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Data de Nascimento: " . htmlspecialchars($data_nasc) . "<br>";
        echo "Sexo: " . htmlspecialchars($sexo) . "<br>";
    }
} else {
    echo "Método de requisição inválido.";
}
?>