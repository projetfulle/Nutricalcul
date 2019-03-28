<?php

class crud
{
 private $db;
 
 function __construct($DB_con)
 {
  $this->db = $DB_con;
 }
 
 public function create($nom,$proteine,$glucide,$sucre,$lipide,$acide_gras,$fibres,$vit_C,$vit_E,$vit_A,$vit_D,$kcalories,$kjoules)
 {
  try
  {
   $stmt = $this->db->prepare("INSERT INTO aliments(nom, proteine, glucide, sucre, lipide, acide_gras, fibres, vit_C, vit_E, vit_A, vit_D, kcalories, kjoules) VALUES(:nom, :proteine, :glucide, :sucre, :lipide, :acide_gras, :fibres, :vit_C, :vit_E, :vit_A, :vit_D, :kcalories, :kjoules)");
   $stmt->bindparam(":nom",$nom);
   $stmt->bindparam(":proteine",$proteine);
   $stmt->bindparam(":glucide",$glucide);
   $stmt->bindparam(":sucre",$sucre);

   $stmt->bindparam(":lipide",$lipide);
   $stmt->bindparam(":acide_gras",$acide_gras);
   $stmt->bindparam(":fibres",$fibres);
   $stmt->bindparam(":vit_C",$vit_C);

   $stmt->bindparam(":vit_E",$vit_E);
   $stmt->bindparam(":vit_A",$vit_A);
   $stmt->bindparam(":vit_D",$vit_D);
   $stmt->bindparam(":kcalories",$kcalories);

   $stmt->bindparam(":kjoules",$kjoules);
   $stmt->execute();
   return true;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
  
 }
 
 public function getID($id)
 {
  $stmt = $this->db->prepare("SELECT * FROM aliments WHERE id=:id");
  $stmt->execute(array(":id"=>$id));
  $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }
 
 public function update($id,$nom,$proteine,$glucide,$sucre,$lipide,$acide_gras,$fibres,$vit_C,$vit_E,$vit_A,$vit_D,$kcalories,$kjoules)
 {
  try
  {
   $stmt=$this->db->prepare("UPDATE aliments* SET nom=:nom, 
                                                 proteine=:proteine, 
                glucide=:glucide, 
                sucre=:sucre,
                lipide=:lipide, 
                acide_gras=:acide_gras, 
                fibres=:fibres, 
                vit_C=:vit_C,
                vit_E=:vit_E,
                vit_A=:vit_A, 
                vit_D=:vit_D, 
                kcalories=:kcalories, 
                kjoules=:kjoules
             WHERE id=:id ");
   $stmt->bindparam(":nom",$nom);
   $stmt->bindparam(":proteine",$proteine);
   $stmt->bindparam(":glucide",$glucide);
   $stmt->bindparam(":sucre",$sucre);

   $stmt->bindparam(":lipide",$lipide);
   $stmt->bindparam(":acide_gras",$acide_gras);
   $stmt->bindparam(":fibres",$fibres);
   $stmt->bindparam(":vit_C",$vit_C);

   $stmt->bindparam(":vit_E",$vit_E);
   $stmt->bindparam(":vit_A",$vit_A);
   $stmt->bindparam(":vit_D",$vit_D);
   $stmt->bindparam(":kcalories",$kcalories);

   $stmt->bindparam(":kjoules",$kjoules);
   $stmt->bindparam(":id",$id);
   $stmt->execute();
   
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }
 
 public function delete($id)
 {
  $stmt = $this->db->prepare("DELETE FROM aliments WHERE id=:id");
  $stmt->bindparam(":id",$id);
  $stmt->execute();
  return true;
 }
 
 /* paging */
 
 public function dataview($query)
 {
  $stmt = $this->db->prepare($query);
  $stmt->execute();
 
  if($stmt->rowCount()>0)
  {
   while($row=$stmt->fetch(PDO::FETCH_ASSOC))
   {
    ?>
                <tr>
                <td><?php print($row['id']); ?></td>
                <td><?php print($row['first_name']); ?></td>
                <td><?php print($row['last_name']); ?></td>
                <td><?php print($row['email_id']); ?></td>
                <td><?php print($row['contact_no']); ?></td>
                <td align="center">
                <a href="edit-data.php?edit_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="delete.php?delete_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
                </tr>
                <?php
   }
  }
  else
  {
   ?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
  }
  
 }
 
 public function paging($query,$records_per_page)
 {
  $starting_position=0;
  if(isset($_GET["page_no"]))
  {
   $starting_position=($_GET["page_no"]-1)*$records_per_page;
  }
  $query2=$query." limit $starting_position,$records_per_page";
  return $query2;
 }
 
 public function paginglink($query,$records_per_page)
 {
  
  $self = $_SERVER['PHP_SELF'];
  
  $stmt = $this->db->prepare($query);
  $stmt->execute();
  
  $total_no_of_records = $stmt->rowCount();
  
  if($total_no_of_records > 0)
  {
   ?><ul class="pagination"><?php
   $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
   $current_page=1;
   if(isset($_GET["page_no"]))
   {
    $current_page=$_GET["page_no"];
   }
   if($current_page!=1)
   {
    $previous =$current_page-1;
    echo "<li><a href='".$self."?page_no=1'>First</a></li>";
    echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
   }
   for($i=1;$i<=$total_no_of_pages;$i++)
   {
    if($i==$current_page)
    {
     echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
    }
    else
    {
     echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
    }
   }
   if($current_page!=$total_no_of_pages)
   {
    $next=$current_page+1;
    echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
    echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
   }
   ?></ul><?php
  }
 }
 
 /* paging */
 
}