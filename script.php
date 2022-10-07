<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
// print_r($categorias)

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio, por favor preencha-o.';
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3) {
    $_SESSION['mensagem de erro'] = 'O nome deve conter ao menos 3 caracteres';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40){
    $_SESSION['mensagem de erro'] = 'O nome não pode conter mais de 40 caracteres';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade)) {
    $_SESSION['mensagem de erro'] = 'Informe um número pra idade';
    header('location: index.php');
    return;
}


if($idade >= 6 && $idade <= 12){
	for($i = 0; $i <= count($categorias); $i++){
		if($categorias[$i] = "infantil" ) {
			$_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i].".";
            header('location: index.php');
            return;
		}
	}
}
else if($idade >= 13 && $idade <=18){
	for($i = 0; $i <= count($categorias); $i++){
		if($categorias[$i] = 'adolescente') {
			$_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i].".";
            header('location: index.php');
            return;
		}
	}
}
else {
	for($i = 0; $i <= count($categorias); $i++){
		if($categorias[$i] = 'adulto') {
			$_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i].".";
            header('location: index.php');
            return;
		}
	}
}
