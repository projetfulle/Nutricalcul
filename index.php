<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Nutri Calcul!</title>
  </head>
  <body>
    

     <div class="container">
		
		<div class="row">
			<div class="col-xs-12" style="display:block; width:100%; height:5rem;"></div>
		</div>
		
		
		<div class="row">
			<div class="col-xs-12">
				<h2>Calculez la valeur nutritionnelle de vos aliments</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<p>Pour calculer la valeur nutritionnelle d'un aliment, saisissez les premières lettres de son nom puis sélectionnez l'aliment voulu dans la liste proposée. Renseignez la quantité et le résultat s'affichera ci-dessous.</i><br>Bon calcul!<br></p>
			</div>
		</div>


		<form class="ajax" action="recherche.php" method="get">
	<p>
		<label for="recherche">Rechercher un lieu</label>
		<input type="text" name="recherche" id="recherche" />
	</p>
</form>
<div id="results"></div>



		<form action="?submit=1" method="POST">
			<div id="selrows">
						<div class="row aliment">
					<div class="col-xs-10 col-sm-8 text-right">
						<label for="recherche">Aliment: </label>&nbsp;<input type="text" name="recherche" id="recherche" value="" placeholder="Aliment…" class="ui-autocomplete-input" autocomplete="">
						<div id="results"></div>

						<input type="submit" id="calcnut" class="calcnut btn btn-success" value="(RE)CALCULER">
					</div>
				</div>
					</div>
			</div>
		</form>


		<div class="row">
			<div class="row">
				<div class="col-xs-12 th">Valeur nutritionnelle - Calcul</div>
			</div>

			<div class="row">
				<div id="resultat" class="col-xs-12 responsive-table-line">
					 <table id="tab_valnut" class="table table-bordered table-condensed table-body-center">
					 	<thead>
					 		<tr>
					 			<th>Aliment</th>
					 			<th class="vn_nutriment" title="Protéines" data-toggle="tooltip">Protéines</th>
					 			<th class="vn_nutriment" title="Glucides" data-toggle="tooltip">Glucides</th>
					 			<th class="vn_nutriment" title="Sucres" data-toggle="tooltip">(Sucres)</th>
					 			<th class="vn_nutriment" title="Lipides" data-toggle="tooltip">Lipides</th>
					 			<th class="vn_nutriment" title="Acides Gras Saturés" data-toggle="tooltip">(Acides Gras Saturés)</th>
					 			<th class="vn_autre" title="Fibres" data-toggle="tooltip">Fibres</th>
					 			<th class="vn_vitamine" title="Vit.C" data-toggle="tooltip">Vit.C</th>
					 			<th class="vn_vitamine" title="Vit.E" data-toggle="tooltip">Vit.E</th>
					 			<th class="vn_vitamine" title="Vit.A" data-toggle="tooltip">Vit.A</th>
					 			<th class="vn_vitamine" title="Vit.D" data-toggle="tooltip">Vit.D</th>
					 			<th class="vn_energie" title="KCalories" data-toggle="tooltip">KCalories</th>
					 			<th class="vn_energie" title="KJoules" data-toggle="tooltip">KJoules</th></tr>
					 		</thead>
					 		<tbody>
					 			<tr>
					 				<td class="col_D" data-title="Aliment">Jus de mangue, frais (100%)</td>
					 				<td class="col_P vn_nutriment" data-title="P">0.19</td>
					 				<td class="col_R vn_nutriment" data-title="G">9.5</td>
					 				<td class="col_S vn_nutriment" data-title="(S)">(9.3)</td>
					 				<td class="col_AB vn_nutriment" data-title="L">0</td>
					 				<td class="col_AGS vn_nutriment" data-title="(AGS)">(0)</td>
					 				<td class="col_Z vn_autre" data-title="F">0</td>
					 				<td class="col_AY vn_vitamine" data-title="C">0</td>
					 				<td class="col_AW vn_vitamine" data-title="E">1.05</td>
					 				<td class="col_AU vn_vitamine" data-title="A">375</td>
					 				<td class="col_AV vn_vitamine" data-title="D">0</td>
					 				<td class="col_U vn_energie" data-title="E (KCal)">0</td>
					 				<td class="col_T vn_energie data-title=" e="" (kj)"="">0</td>
					 			</tr>
					 		</tbody>
					 		<tfoot>
					 			<tr>
					 				<th data-title="Total">Total&nbsp;(100%)</th>
					 				<th class="col_P vn_nutriment" data-title="P">0.19</th>
					 				<th class="col_R vn_nutriment">9.5</th>
					 				<th class="col_S vn_nutriment">(9.3)</th>
					 				<th class="col_AB vn_nutriment">0</th>
					 				<th class="col_AGS vn_nutriment">(0)</th>
					 				<th class="col_Z vn_autre">0</th>
					 				<th class="col_AY vn_vitamine">0</th>
					 				<th class="col_AW vn_vitamine">1.05</th>
					 				<th class="col_AU vn_vitamine">375</th>
					 				<th class="col_AV vn_vitamine">0</th>
					 				<th class="col_U vn_energie">0</th>
					 				<th class="col_T vn_energie">0</th>
					 			</tr>
					 		</tfoot>
					 	</table>
					 </div>
			</div>
		</div>

<div class="row vn_legende">
	<div class="row">
		<div class="col-xs-12 th">Valeur nutritionnelle - Légende</div>
	</div>

	<div class="row">
		<div class="col-xs-12 responsive-table-line">
			<table class="table table-bordered table-condensed table-body-center">
				<thead>
					<tr>
						<th colspan="5" class="vn_nutriment" data-title="Elément">Nutriments</th>
						<th class="vn_autre" data-title="Elément">Autres</th>
						<th colspan="4" class="vn_vitamine" data-title="Elément">Vitamines&nbsp;avant cuisson</th>
						<th colspan="2" class="vn_energie" data-title="Elément">Energie</th>
					</tr>
					<tr>
						<th class="vn_nutriment">P</th>
						<th class="vn_nutriment">G</th>
						<th class="vn_nutriment">(S)</th>
						<th class="vn_nutriment">L</th>
						<th class="vn_nutriment">(AGS)</th>
						<th class="vn_autre">F</th>
						<th class="vn_vitamine">C</th>
						<th class="vn_vitamine">E</th>
						<th class="vn_vitamine">A</th>
						<th class="vn_vitamine">D</th>
						<th class="vn_energie">E (KCal)</th>
						<th class="vn_energie">E (KJ)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="vn_nutriment" data-title="P">Protéines</td>
						<td class="vn_nutriment" data-title="G">Glucides</td>
						<td class="vn_nutriment" data-title="(S)">Sucres</td>
						<td class="vn_nutriment" data-title="L">Lipides</td>
						<td class="vn_nutriment" data-title="(AGS)">Acides Gras Saturés</td>
						<td class="vn_autre" data-title="F">Fibres</td>
						<td class="vn_vitamine" data-title="C">Vit.C</td>
						<td class="vn_vitamine" data-title="E">Vit.E</td>
						<td class="vn_vitamine" data-title="A">Vit.A</td>
						<td class="vn_vitamine" data-title="D">Vit.D</td>
						<td class="vn_energie" data-title="E (KCal)">Kilocalories</td>
						<td class="vn_energie" data-title="E (KJ)">Kilojoules</td>
					</tr>
					<tr>
						<td class="vn_nutriment" data-title="P">en g/100g</td>
						<td class="vn_nutriment" data-title="G">en g/100g</td>
						<td class="vn_nutriment" data-title="(S)">en g/100g</td>
						<td class="vn_nutriment" data-title="L">en g/100g</td>
						<td class="vn_nutriment" data-title="(AGS)">en g/100g</td>
						<td class="vn_autre" data-title="F">en g/100g</td>
						<td class="vn_vitamine" data-title="C">en mg/100g</td>
						<td class="vn_vitamine" data-title="E">en mg/100g</td>
						<td class="vn_vitamine" data-title="A">en μg/100g</td>
						<td class="vn_vitamine" data-title="D">en μg/100g</td>
						<td class="vn_energie" data-title="E (KCal)">Kilocalories</td>
						<td class="vn_energie" data-title="E (KJ)">Kilojoules</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
		<div class="row bottom-row-10">
		<div class="col-xs-12 th">Source des données : <a href="#" target="_blank">Table de composition nutritionnelle des aliments Fulle Kouassi</a> 2019 - (<a href="#" target="_blank">Code Room</a>)</div>
	</div>
		
  </div>
		
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>