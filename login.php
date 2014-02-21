<?php
# utilizei para armazenamento de senhas a criptografia hash+salt, para diminuir os riscos de recuperação de senhas através de força bruta
# como exemplo, meu usuário é "exemplo" e minha senha "123456"
# gero a hash com geraHash() e salvo o resultado no array em getHash();

function getHash($user) {
	$users = array(
		'exemplo' => '1937186276::b40f34f2ae583b1410798de4abf69f745f03ae584712aba613ef53ac42cd14d2',
	);
	if (array_key_exists($user, $users)) {
		return $users[$user];
	}
	return '';
}

function geraHash($senha) {
	$salt = mt_rand();
	return $salt . '::'. hash('sha256', $salt . sha1(base64_encode($senha)));
}

function verificaUsuario($usuario, $senha) {
	$saltHash = getHash($usuario);
	if (strpos($saltHash, '::') === false) {
		return false;
	}
	list($salt, $hash) = explode('::', $saltHash);
	return $hash === hash('sha256', $salt . sha1(base64_encode($senha)));
}

function login() {
	$permitido = false;
	if (array_key_exists('user', $_POST) && array_key_exists('pass', $_POST)) {
		$permitido = verificaUsuario($_POST['user'], $_POST['pass']);
	}
	if (!$permitido) {
		header('Location: index.html');
	}
}