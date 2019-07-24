<?php include("header.php"); ?>

<body>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4  ">Inserer une image !</h1>
        <p class="lead"></p>
      </div>
    </div>
    <div class="container ">
      <form action="postImages.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid ">
          <div class="form-group">
            <div class="form-group ">
              <label for="fichierImage">Fichier image :</label>
              <input id='upload' type="file" class="form-control-file " name="fichierImage[]" multiple="multiple">
            </div>

            <!-- Message de validation -->
            <div class="valid-form text-center">
              <?php
              if (isset($_GET['messageBienEnvoye'])) {
                ?>
                <div class="alert alert-success " role="alert">
                  <?php echo $_GET['messageBienEnvoye']; ?>
                </div>
              <?php
              }
              ?>
            </div>

            <!-- Message érreure format  -->
            <div class="valid-form text-center">
              <?php
              if (isset($_GET['messageExtention'])) {
                ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $_GET['messageExtention']; ?>
                </div>
              <?php
              }
              ?>
            </div>

            <!-- Message érreure taille   -->
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
            <div class="text-center mt-5 mb-5">
              <button type="submit" name="submit" value="submit" class="btn btn-primary">Envoyer</button>
            </div>
      </form>
    </div>
  </div>
</body>