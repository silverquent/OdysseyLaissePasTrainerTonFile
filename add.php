<?php include "header.php" ?>



<div class="jumbotron">
    <h1 class="display-4 ">Lire articles</h1>
    <p class="lead"></p>
    <hr class="my-4">
    <p></p>

</div>

<!-- Message selectionner une image  -->
<div class="valid-form text-center">
    <?php
    if (isset($_GET['messageSelctionnerImages'])) {
        ?>
        <div class="alert alert-info " role="alert">
            <?php echo $_GET['messageSelctionnerImages']; ?>
        </div>
    <?php
    }
    ?>
</div>


<!-- Message image trop grosse  -->
<div class="valid-form text-center">
    <?php
    if (isset($_GET['messageFichierTropGros'])) {
        ?>
        <div class="alert alert-success " role="alert">
            <?php echo $_GET['messageFichierTropGros']; ?>
        </div>
    <?php
    }
    ?>
</div>

<!-- Message image supprimé   -->
<div class="valid-form text-center">
    <?php
    if (isset($_GET['messageImageSupprimmee'])) {
        ?>
        <div class="alert alert-success " role="alert">
            <?php echo $_GET['messageImageSupprimmee']; ?>
        </div>
    <?php
    }
    ?>
</div>
<?php

$dir = dirname("upload/upload");
$files1 = scandir($dir);
//var_dump($files1);

?>

<div class="container mt">
    <div class="row mt-5 mb-5">
        <?php foreach ($files1 as $ligne) { ?>
            <form action="delete.php" method="post">
                <div class="col-sm-12 col-md-6 mb-5">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $ligne  ?></h5>
                            <p class="card-text"></p>
                        </div>
                        <img src="upload/<?php echo  $ligne ?>" height="300px" width="100%">
                        <input type="checkbox" name="supprimer[]" value="<?php echo $ligne; ?>">
                        <button type="submit" id="" value=<?php $ligne ?> class="btn btn-dark">Dark</button>
                    </div>
                </div>
            </form>
        <?php } ?>