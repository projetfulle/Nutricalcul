<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 $nom = $_POST['nom'];
 $proteine = round($_POST['proteine'],2);
 $glucide = $_POST['glucide'];
 $sucre = $_POST['sucre'];

 $lipide = $_POST['lipide'];
 $acide_gras = $_POST['acide_gras'];
 $fibres = $_POST['fibres'];
 $vit_C = $_POST['vit_C'];

 $vit_E = $_POST['vit_E'];
 $vit_A = $_POST['vit_A'];
 $vit_D = $_POST['vit_D'];
 $kcalories = $_POST['kcalories'];

 $kjoules = $_POST['kjoules'];
 
 if($crud->create($nom,$proteine,$glucide,$sucre,$lipide,$acide_gras,$fibres,$vit_C,$vit_E,$vit_A,$vit_D,$kcalories,$kjoules))
 {
  header("Location: add-data.php?inserted");
 }
 else
 {
  header("Location: add-data.php?failure");
 }
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
 ?>
    <div class="container">
 <div class="alert alert-info">
    <strong>FELICITATION!</strong> L'enrégistrement  aréussi <a href="../index.php">ACCUEIL</a>!
 </div>
 </div>
    <?php
}
else if(isset($_GET['failure']))
{
 ?>
    <div class="container">
 <div class="alert alert-warning">
    <strong>DESOLE!</strong> ERREUR lors de l'enregistrement !
 </div>
 </div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

  
  <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nom de l'aliment</td>
            <td><input type='text' name='nom' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Proteine</td>
            <td><input type='text' name='proteine' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Glucides</td>
            <td><input type='text' name='glucide' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Sucre</td>
            <td><input type='text' name='sucre' class='form-control' required></td>
        </tr>

        <tr>
            <td>Lipide</td>
            <td><input type='text' name='lipide' class='form-control' required></td>
        </tr>

        <tr>
            <td>Acide Gras</td>
            <td><input type='text' name='acide_gras' class='form-control' required></td>
        </tr>

        <tr>
            <td>Fibres</td>
            <td><input type='text' name='fibres' class='form-control' required></td>
        </tr>

        <tr>
            <td>Vitamine C</td>
            <td><input type='text' name='vit_C' class='form-control' required></td>
        </tr>

        <tr>
            <td>Vitamine E</td>
            <td><input type='text' name='vit_E' class='form-control' required></td>
        </tr>

        <tr>
            <td>Vitamine A</td>
            <td><input type='text' name='vit_A' class='form-control' required></td>
        </tr>

        <tr>
            <td>Vitamine D</td>
            <td><input type='text' name='vit_D' class='form-control' required></td>
        </tr>

        <tr>
            <td>Kilo Calorie</td>
            <td><input type='text' name='kcalories' class='form-control' required></td>
        </tr>

        <tr>
            <td>Kilo Joules</td>
            <td><input type='text' name='kjoules' class='form-control' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
      <span class="glyphicon glyphicon-plus"></span> Créer un nouvel aliment
   </button>  
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; retour à l'accueil</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>