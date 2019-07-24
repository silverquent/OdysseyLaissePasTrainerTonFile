<?php
include("upload.php");

$extensionAutorisees = ["jpg", "png", "jpeg", "gif"];


echo '<br>';


if ((isset($_POST['submit'])) && (!empty($_POST['submit']))) {
  echo 'Le post existe <br> ';
  echo '<br>';

  if (count($_FILES['fichierImage']['name']) > 0) {
    echo "il y a bien quelque chose dans le tableau";
    echo '<br>';

    
    for ($i = 0; $i < count($_FILES['fichierImage']['name']); $i++) {
      echo '<br>';
      $infosNomFichier = pathinfo($_FILES['fichierImage']['name'][$i]);
      $extension = $infosNomFichier['extension'];
      $tmpFilePath = $_FILES['fichierImage']['tmp_name'][$i];
      $filePath = printf(" %s\r\n", uniqid());
      echo '<br>';
      if (in_array(strtolower($extension), $extensionAutorisees) === true) {
        echo 'bonne extension';
        echo '<br>';

        if ($_FILES['fichierImage']['size'][$i] < 1000000) {
          echo 'bonne taille ';
          echo '<br>';
          
          $direction = 'upload/' ."image". uniqid() ."." . $extension;
          (move_uploaded_file($tmpFilePath, $direction));
        echo 'fichier téléchargé';
        echo '<br>';
        header("Location: index.php?messageBienEnvoye=Images bien envoyés !!!! ");
        
        }
        else{
        header("Location: index.php?messageFichierTropGros=Images  trop grosses !!!! ");
        }
      }
        else{
          header("Location: index.php?messageExtention=Mauvaise extension il faut comme extension : [jpg, png, jpeg, gif] !!!!! ");
        }
      }
    }
      else{
        header("Location: index.php? ");
      }      
    }
    else{
      header("Location: index.php?");
    }
  
    








  /*




 
        //Loop through each file
        for($i=0; $i<count($_FILES['fichierImage']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['fichierImage']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
                echo '<br>';  
                echo $_FILES['fichierImage']['size'][$i];
                //save the filename
                $shortname = $_FILES['fichierImage']['name'][$i];

                //save the url and the file
                

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file

                }
              }
        }
    }

    //show success message
    echo "<h1>Uploaded:</h1>";    
    if(is_array($files)){
        echo "<ul>";
        foreach($files as $file){
            echo "<li>$file</li>";
        }
        echo "</ul>";
    }
}
*/
