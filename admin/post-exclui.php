<?php
require "../inc/funcoes-sessao.php";
require "../inc/funcoes-posts.php";
verificaAcesso();

$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$idUsuarioLogado = $_SESSION['id'];
$tipoUsuaarioLogado = $_SESSION['tipo'];

excluirPost($conexao, $idPost, $idUsuarioLogado, $tipoUsuaarioLogado);

header("location:posts.php");