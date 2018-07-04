<!DOCTYPE html>
<html>
	<head>
		<title>HTML5 - SENAC</title>

		<meta charset="utf-8">
		
		<style type="text/css">
			
			div {
				border: 1px solid black;
				width: 65%;
				margin: 0px auto;
				font-size: 20px;
				text-align: center;
				color: black;
			}

			header {
				height:100px;
				background-color: #5F9EA0;
			} 

			main {
				height: 450px;
			}

			nav {
				width:20%;
				height:100%;
				float:left;
				background-color: #B0C4DE;
			}

			article {
				width:80%;
				height:100%;		 
				background-color: #4682B4;
				float:left;
			}

			article h1{
				margin: 15%;
				font-size: 2em;
			}

			article a{
				text-decoration: none;
				color: black;
			}

			article a:hover{
				text-decoration: underline;
				color: pink;
			}

			footer {
				height:100px;
				background-color: #20B2AA;
			}
		</style>

		<script type="text/javascript">
			
		</script>
	</head>

	<body>

		<div>

			<header> 
				Header 
			</header>

			<main>

				<nav>
					Nav
				</nav>

				<article>
					Article

					<h1>Bem vindo <span style="text-transform: capitalize;"><?= $login ?></span></h1>

					<a href="index.html">Clique aqui para sair</a>
				</article>

			</main>

			<footer> 
				Footer 
			</footer> 

		</div>

	</body>

</html>