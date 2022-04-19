<!-- Connexion à la ba se de donnée -->
<?php
try
{
    // Souvent on identifie cet objet par la variable $conn ou $db pour tarcker les erreurs via le try
	$db = new PDO('mysql:host=localhost;dbname=api;charset=utf8', 'root', 'root');
    // $connexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $connexion->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>




