<?php
include("../models/conexao.php");

$varAlunoCodigo = $_POST["alunoCodigo"];
$varAlunoNome = $_POST["alunoNome"];
$varAlunoCidade = $_POST["alunoCidade"];
$varAlunoSexo = $_POST["alunoSexo"];

mysqli_query($conexao, "UPDATE pessoas SET nome='".$_POST["alunoNome"]."', cidade='".$_POST["alunoCidade"]."' WHERE codigo= " .$_POST["alunoCodigo"]);

header("location:../index.php");

?>