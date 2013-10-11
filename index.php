<?php 
session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Accueil</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	</head>
	
	<body>
		<header>
			<h1>Hello Les amis</h1>
		</header>
		

		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Qui sommes nous?</li>
				<li>Se logger</li>
				<li><a href="?page=Quizz">Faire un quizz</a></li>
				<li>Faire un compte</li>
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
				}
				
				
				
					
			?>
		</div>
		
		<footer>
			<p>Copyright BBC</p>
		</footer>
		
	</body>
</html>

