<?php

require("config.php");

$nomeConcurso = $_POST["nome_concurso"];
$ano = $_POST["ano"];
$nomeArquivoGabarito = $_FILES["gabarito"]["name"];
$nomeArquivoProva = $_FILES["prova_pdf"]["name"];

$targetDir = "C:/wamp64/www/PIT/pit/uploadsPDF";

$fileTypeGabarito = strtolower(pathinfo($nomeArquivoGabarito, PATHINFO_EXTENSION));
$fileTypeProva = strtolower(pathinfo($nomeArquivoProva, PATHINFO_EXTENSION));

if ($fileTypeGabarito != "pdf") {
    echo "Erro: O arquivo do gabarito deve ser um PDF.";
    exit;
}

if ($fileTypeProva != "pdf") {
    echo "Erro: O arquivo da prova deve ser um PDF.";
    exit;
}

$targetFileGabarito = $targetDir . "/" . basename($_FILES["gabarito"]["name"]);
$targetFileProva = $targetDir . "/" . basename($_FILES["prova_pdf"]["name"]);


if (move_uploaded_file($_FILES["gabarito"]["tmp_name"], $targetFileGabarito) &&
    move_uploaded_file($_FILES["prova_pdf"]["tmp_name"], $targetFileProva)) {

    $sql = "INSERT INTO provas (nome_concurso, ano, nome_arquivo_gabarito, nome_arquivo_prova)
    VALUES ('$nomeConcurso', '$ano', '$nomeArquivoGabarito', '$nomeArquivoProva')";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>
            alert('Prova postada.');
            window.location.href = 'PROVAS.html';
            </script>";
    } else {
        echo "Erro ao inserir dados na tabela: " . mysqli_error($conexao);
    }
} else {
    echo "Erro ao fazer upload dos arquivos." . mysqli_error($conexao);
}
mysqli_close($conexao);
?>
