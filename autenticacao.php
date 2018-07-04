<?php 

	$acao 	= isset($_POST["acao"]) ? $_POST["acao"] : '' ;
	$login 	= isset($_POST["login"]) ? $_POST["login"] : '' ;
	$senha 	= isset($_POST["senha"]) ? $_POST["senha"] : '' ;

	$con = mysqli_connect("localhost","root","bipaodell","senac");

	mysqli_set_charset($con, 'utf8');

	// o "binary" serve para procurar o registro baseado em case sensitive
	$sql = "SELECT * FROM usuario where binary login = '$login' and senha = md5('$senha')";

	$rs = mysqli_query($con, $sql);

	$qtd = mysqli_num_rows($rs);

	// $linha = mysqli_fetch_assoc($rs);
	// $login_bd = $linha['login'];
      
	if ($con) {
		if($qtd > 0){

			include_once 'bem_vindo.php';
			//echo json_encode($linha);

		}else{

			include_once 'index.html';
			echo "<script>alert('Login ou senha incorretos!');</script>";
		}
	}else{
		echo "<script>alert('Não foi possível conectar com o banco de dados');</script>";
		include_once 'index.html';
	}
?>