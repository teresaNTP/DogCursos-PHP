<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "dogcursos";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db) or die ( ' Erro na conexão ' );


$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT * FROM MATRICULAS";
$consulta_matriculas = mysqli_query($conexao, $query);