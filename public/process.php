<?php

session_start();

$sessionMessage = "
            <script>
                document.querySelector('#formLink').click();
                console.log(document.querySelector('#formLink'))
            </script>
        ";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $nationality = $_POST['nationality'];
    $club = $_POST['club'];
    $position = $_POST['positionSelect'];

    if ($_POST['ratingPL']) {
        $rating = $_POST['ratingPL'];
    } else {
        $rating = $_POST['ratingGK'];
    }

    $pace = $_POST['pace'];
    $shooting = $_POST['shooting'];
    $passing = $_POST['passing'];
    $dribbling = $_POST['dribbling'];
    $defending = $_POST['defending'];
    $physical = $_POST['physical'];

    $diving = $_POST['diving'];
    $handling = $_POST['handling'];
    $kicking = $_POST['kicking'];
    $reflexes = $_POST['reflexes'];
    $speed = $_POST['speed'];
    $positioning = $_POST['positioning'];



    if (empty($name) || !is_string($name)) {
        $_SESSION["name.Error"] = "Name is required and must be a string.";
        $_SESSION["script"] = $sessionMessage;
        header("Location: dashbord.php");
        exit();
    } elseif (empty($nationality)) {
        $_SESSION["name.Error"] = "Nationality is required and must be a string.";
        $_SESSION["script"] = $sessionMessage;
        header("Location: dashbord.php");
        exit();
    } elseif (empty($club)) {
        $_SESSION["name.Error"] = "Club is required and must be a string.";
        $_SESSION["script"] = $sessionMessage;
        header("Location: dashbord.php");
        exit();
    } elseif ($position === 'Position') {
        $_SESSION["name.Error"] = "Position is required and must be a string.";
        $_SESSION["script"] = $sessionMessage;
        header("Location: dashbord.php");
        exit();
    } elseif (empty($rating)) {
        $_SESSION["name.Error"] = "Rating is invalid.";
        $_SESSION["script"] = $sessionMessage;
        header("Location: dashbord.php");
        exit();
    }

    if ($_POST['positionSelect'] === 'GK') {
        if (empty($positioning)) {
            $_SESSION["name.Error"] = "All fields are required for GK positions.";
            $_SESSION["script"] = $sessionMessage;
            header("Location: dashbord.php");
            exit();
        } elseif ($diving < 10 || $diving > 99 || $handling < 10 || $handling > 99 || $kicking < 10 || $kicking > 99 || $reflexes < 10 || $reflexes > 99 || $speed < 10 || $speed > 99 || $positioning < 10 || $positioning > 99) {
            $_SESSION["name.Error"] = "GK ratings must be between 10 and 99.";
            $_SESSION["script"] = $sessionMessage;
            header("Location: dashbord.php");
            exit();
        }

    } else {
        if (
            $pace < 10 || $pace > 99 ||
            $shooting < 10 || $shooting > 99 || $passing < 10 || $passing > 99 ||
            $dribbling < 10 || $dribbling > 99 || $defending < 10 || $defending > 99 ||
            $physical < 10 || $physical > 99
        ) {
            $_SESSION["name.Error"] = "Ratings must be between 10 and 99...";
            $_SESSION["script"] = $sessionMessage;
            header("Location: dashbord.php");
            exit();
        }
    }

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $photo = $_FILES['photo'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($photo["name"]);

        $check = getimagesize($photo["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($photo["tmp_name"], $target_file)) {
                $fullPath = "./" . $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    } else {
        $_SESSION["name.Error"] = "Picture is requared.";
        $_SESSION["script"] = $sessionMessage;
        header("Location: dashbord.php");
        exit();
    }

}



// Insert into database
include('../src/config/database.php');

if ($_SERVER['HTTP_REFERER'] === 'http://localhost:8000/dashbord.php') {
    $sql = "INSERT INTO players (name_player, rating, photo, position, statue, id_club, id_natio ) VALUES ('$name', '$rating' ,'$fullPath', '$position', 'not_active', '$club', '$nationality')";

    if ($conn->query($sql) === TRUE) {
        $lastId = mysqli_insert_id($conn);
        if ($position === 'GK') {
            $sqlGK = "INSERT INTO goalkeeper (id_player, diving, handling, kicking, reflexes, speed, positioning ) VALUES ('$lastId' , '$diving', '$handling', '$kicking', '$reflexes', '$speed' ,'$positioning')";
            if (mysqli_query($conn, $sqlGK) === TRUE) {
                $_SESSION["successfully"] = "successfully.";
                $_SESSION["script"] = $sessionMessage;
                header("Location: dashbord.php");
            } else {
                $_SESSION["name.Error"] = "Errore d'inserer les donne.";
                $_SESSION["script"] = $sessionMessage;
                header("Location: dashbord.php");
            }
        } else {
            $sqlPlayer = "INSERT INTO other_players (id_player, pace, shooting, passing, dribbling, defending, physical ) VALUES ('$lastId', '$pace', '$shooting', '$passing', '$dribbling', '$defending' ,'$physical')";
            if (mysqli_query($conn, $sqlPlayer) === TRUE) {
                $_SESSION["successfully"] = "successfully.";
                $_SESSION["script"] = $sessionMessage;
                header("Location: dashbord.php");
            } else {
                $_SESSION["script"] = $sessionMessage;
                $_SESSION["name.Error"] = "Errore d'inserer les donne.";
                header("Location: dashbord.php");
            }
        }
    } else {
        $_SESSION["name.Error"] = "Errore d'inserer les donne.";
        $_SESSION["script"] = $sessionMessage;
        header("Location: dashbord.php");
    }
} else {
    $id = $_SESSION['id'];
    unset($_SESSION["id"]);

    $sqlUpdate = "UPDATE  players SET name_player = '$name', rating = '$rating' , photo = '$fullPath', position = '$position', id_club = '$club', id_natio = '$nationality' WHERE id = $id" ;

if (mysqli_query($conn, $sqlUpdate) === TRUE) {
        $_SESSION["successfully"] = "successfully.";
        $_SESSION["script"] = $sessionMessage;
        header("Location: dashbord.php");
    } else {
        $_SESSION["script"] = $sessionMessage;
        $_SESSION["name.Error"] = "Errore d'inserer les donne.";
        header("Location: dashbord.php");
    }

}


?>