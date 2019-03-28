<?php

// connexion à la base
include_once 'admin55/dbconfig.php';
	if(isset($_GET['field']))
	{
		$field = $_GET['field'];
		$DB_con = 'SELECT aliments(id, nom, proteine, glucide, sucre, lipide, acide_gras, fibres, vit_C, vit_E, vit_A, vit_D, kcalories, kjoules FROM aliments WHERE id = :id AND nom LIKE :field OR proteine LIKE :field OR glucide LIKE :field';
		$fsearch = $bdd->prepare($DB_con);
		$fsearch->execute(array(
			'id' => $_SESSION['id'],
			'field' => $field. '%'
		));
		$count = $fsearch->rowCount($DB_con);
		
		if ($count >= 1)
		{
			while ($result = $fsearch->fetch())
			{
				echo '<a class="liensearch" href="#">'.$result['nom'].'</a>';
			}
		}
		$fsearch->closeCursor();
	}
?>