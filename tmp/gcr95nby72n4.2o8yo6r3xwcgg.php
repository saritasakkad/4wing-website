<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body class="container">
    <h1>Citations edit</h1>
    <form class="" action="edit/data" method="post">

      <input class="form-control" type="text" name="citation" value="<?= $citation['citation'] ?>">
      <div class="form-group">
        <div class="radio">
          <label for="fr">
            <input  type="radio" name="lg" value="fr" id="fr" <?= $citation['ln'] == fr ? 'checked' : '' ?>>
            fr
          </label>
          <label for="nl">
            <input  type="radio" name="lg" value="nl" id="nl" <?= $citation['ln'] == nl ? 'checked' : '' ?>>
            nl
          </label>
          <label for="en">
            <input   type="radio" name="lg" value="en" id="en" <?= $citation['ln'] == en ? 'checked' : '' ?>>
            en
          </label>
      </div>
    </div>

    <div class="form-group">
      <div class="radio">
        <label for="techEducation">
          <input type="radio" name="cat" id="techEducation" value="techEducation" <?= $citation['categorie'] == "techEducation" ? 'checked' : '' ?>>
          techEducation
        </label>
        <label for="logement">
          <input type="radio" name="cat" id="logement" value="logement" <?= $citation['categorie'] == "logement" ? 'checked' : '' ?>>
          logement
        </label>
        <label for="sante">
          <input type="radio" name="cat" id="sante" value="sante" <?= $citation['categorie'] == "sante" ? 'checked' : '' ?>>
          sante
        </label>
      </div>
    </div>  
      <input type="hidden" name="id" value="<?= $citation['id'] ?>">
      <input type="submit" name="" value="enregistrer">
    </form>
  </body>
</html>