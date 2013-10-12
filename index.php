<?php 
session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	</head>
	
	<body>
		<header>
			<h1>Hello Les amis</h1>
		</header>
		

		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Qui sommes nous?</li>
				<li><a href="?page=Login">Se logger</a></li>
				<li><a href="?page=Quizz">Faire un quizz</a></li>
				<li><a href="?page=Register">Faire un compte</a></li>
				<li>Entrez une nouvelle question</li>
				<li>Historique</li>
				<li>Statistiques</li>
				<li><a href="?page=Category">Afficher les categories</a></li>
			</ul>
		</nav>
		<div id="content">
			<?php
				if (isset($_GET['page'])){
					$request = $_GET['page'];
				}
				switch ($request)
				{
					case 'Category' : include_once('controller/quizz/CategoryController.php');
					break;
					case 'Quizz' : include_once('controller/quizz/NewQuizzController.php');
					break; 
					case 'Register' : include_once('controller/user/register.php');
					break; 
					case 'Login' : include_once('controller/user/login.php');
					break; 
				}
				
				
				
					
			?>
		</div>
		
		<footer>
			<p>Copyright BBC</p>
		</footer>
		
	</body>
</html>

