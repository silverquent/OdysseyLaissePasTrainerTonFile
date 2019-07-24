<?php


if (((isset($_POST['supprimer']))) && (!empty($_POST['supprimer']))) {

    $dir = dirname("upload/upload");
    $files1 = scandir($dir);
    //var_dump($files1);
    echo '<br>';

    $donneePost = $_POST['supprimer'];
    //var_dump( $donneePost);
    echo '<br>';



    for ($i = 0; $i < sizeof($donneePost); $i++) {

        if (($donneePost[$i]) == ($_POST['supprimer'][$i])) {

            $adresse = ('upload/' . $_POST['supprimer'][$i]);
            echo $adresse;
            unlink($adresse);
            echo 'supprimer';

            header('location: add.php?messageImageSupprimmee= Image bien supprimée !!!!!');
        }
    }
} else {
    header('location: add.php?messageSelctionnerImages= Sélectionner une image');
}
