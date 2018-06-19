

<?php
try
 {
  $connexion = $db = new PDO('mysql:host=localhost;dbname=projet_2;charset=utf8', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
catch(Exception $e)
 {
  die('Erreur : '.$e->getMessage());
 }
?>

 <!DOCTYPE html>
     <html>
         <head>
             <meta charset="utf8" />
             <link rel="stylesheet" href="style.css">
             <title>Modifier un billet</title>
         </head>
         <body>
             <h3>Modifiez un billet existant à l'aide des champs ci-dessous :</h3>

             <form method="POST">
               <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>

                 <p><label for="new_title">Titre :</label><input type="text" name="new_title"></p>
                 <p><label for="new_content">Saisissez l'article modifié :</label><textarea name="new_content"></textarea></p>
                 <p><input type="submit"></p>
             </form>
         </body>
     </html>
