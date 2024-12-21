<?php
include('../src/config/database.php');

$id = $_GET['id'];

$player = "UPDATE players
SET deleted_at = NOW()
WHERE id = $id;";

if ($data = mysqli_query($conn, $player) === TRUE) {
    $_SESSION["successfully"] = "Deleted successfully.";
    header("Location: dashbord.php");
} else {
    $_SESSION["name.Error"] = "Errore d'inserer les donne.";
    header("Location: dashbord.php");
}



?>