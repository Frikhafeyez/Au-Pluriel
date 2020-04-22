<?php 
include "classeMoyenne.php" ;
?>

<form action="" method="post">
  <p>
    <label>note 1 :  </label>
    <input type="text" name="note1" value="<?php echo isset($comment) ? htmlspecialchars($comment['note1']) : '' ?>" /><br />
    
    <label>note 2 :  </label>
    <input type="text" name="note2" value="<?php echo isset($comment) ? htmlspecialchars($comment['note2']) : '' ?>" /><br />
    
    <label>note 3 :  </label>
    <input type="text" name="note3" value="<?php echo isset($comment) ? htmlspecialchars($comment['note3']) : '' ?>" /><br />
    
    <br/>
    
    <label>coefficient 1 :  </label>
    <input type="text" name="coef1" value="<?php echo isset($comment) ? htmlspecialchars($comment['cof1']) : '' ?>" /><br />
    

    <label>coefficient 2 :  </label>
    <input type="text" name="coef2" value="<?php echo isset($comment) ? htmlspecialchars($comment['cof2']) : '' ?>" /><br />
    
    <label>coefficient 1 :  </label>
    <input type="text" name="coef3" value="<?php echo isset($comment) ? htmlspecialchars($comment['cof3']) : '' ?>" /><br />
    

    <input type="submit"  name="submit"  value="Calculer la moyenne" />
    
    <label>La moyenne :  </label>
    <input type="text" name="moy" value="<?php echo isset($comment) ? htmlspecialchars($comment['moy']) : '' ?>" /><br />
    
  </p>
</form>
<hr>

<?php 
if (isset ($_POST['submit']) )
{
    $note1 = $_POST["note1"];
    $note2 = $_POST["note2"];
    $note3 = $_POST["note3"];
    $cof1 = $_POST["cof1"];
    $cof2 = $_POST["cof2"];
    $cof3 = $_POST["cof3"];
    $moy = $_POST["moy"];
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');

}


?>

