<?php 

	//Pegando as informações do formulário - atributo name
	//$acao = $_POST["acao"];
	$acao = isset($_POST["acao"]) ? $_POST["acao"] : '';
	$login = isset($_POST["login"]) ? $_POST["login"] : '' ;
	$senha = isset($_POST["senha"]) ? $_POST["senha"] : '' ;

	if ($acao == "Salvar") {
	
		//cria a conexão com o banco de dados
		$con = mysqli_connect("localhost","root","bipaodell","senac");

		//diz que as informações serão salvas na codificação utf8
		mysqli_set_charset($con, 'utf8');

		//Inserindo no banco de dados as informações obtidas do formulário
		$sql = "INSERT INTO usuario (login, senha) VALUES ('$login', md5('$senha'))";

		//Verificando se já existe no banco de dados o login digitado na tela 
		$sql_consulta = "SELECT * FROM usuario where login = '$login'";

		//Executando a consulta da instrução acima
		$teste = mysqli_query($con, $sql_consulta);

		//Retorna quantas informações foram encontradas no banco de dados
		$qtd_teste = mysqli_num_rows($teste);

		if ($con) {
			if ($qtd_teste == 0) {

				mysqli_query($con, $sql);
				echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
				include_once 'index.html';

			}else{

				echo "<script>alert('Login já existe, tente outro.');</script>";
				include_once 'tela_cadastro.html';

			}
		}else{
			echo "<script>alert('Não foi possível conectar com o banco de dados');</script>";
			include_once 'tela_cadastro.html';
		}
		
		mysqli_close($con);

	}

?>